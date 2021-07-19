<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\ExamConfig;
use App\Models\QuestionCategory;
use App\Models\QuestionDegree;
use App\Services\ExamServiceInterface;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|Response|View
     */
    protected $examService;

    public function __construct(ExamServiceInterface $examService)
    {
        $this->examService = $examService;
    }

    public function examList($id)
    {
        $questionDegrees = QuestionDegree::all();
        $examConfigrations = $this->examService->getExamConfig(Auth::user()->id, $id);
        $questionCategories = $this->examService->getQuestionCategoriesBySubjectId($id);
        $exams = $this->examService->getExamBySubjectId($id);

        return view('pwa.tab.exam', compact('exams', 'questionDegrees', 'questionCategories', 'examConfigrations'));
    }

    public function examConfigCreate(Request $request)
    {
        $examConfig = $this->examService->createExamConfig($request->all());

        return redirect()->route('exam', ['id' => substr(URL::previous(), -1)]);
    }

    public function create(Request $request)
    {
        $exam = $this->examService->createTestOnline($request->exam_config_id, Auth::user()->id, $request->subject_id);
        $examConfig = ExamConfig::findOrFail($request->exam_config_id);
        $questionList = $this->examService->randomQuestions($examConfig);

        if ($questionList->count() == 0) {
            return redirect()->back()->with('warning', 'No questions available');
        }

        $this->examService->storeQuestionToTestOnline($exam->id, $questionList);

        return redirect()->route('exam', ['id' =>  $request->subject_id]);
    }

    public function examTake($examId)
    {
        $due = now()->addMinute(30);
        date_format($due, 'Y-m-d H:i:s');

        $exam = Exam::findOrFail($examId);

        return view('pwa.page.exam-content', compact('exam', 'due'));
    }

    public function examPost(Request $request)
    {
        $subjectId = $this->examService->countPointExam($request->all());

        return redirect()->route('exam', ['id' =>  $subjectId]);
    }

    public function examResult($examId)
    {
        $exam = Exam::findOrFail($examId);
        return view('pwa.page.exam-result', compact('exam'));
    }
}
