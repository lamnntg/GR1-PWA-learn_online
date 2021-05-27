<?php

namespace App\Services;

use App\Services\ExamServiceInterface;
use Illuminate\Support\Facades\Auth;
use App\Models\Exam;
use App\Models\ExamQuestion;
use App\Models\QuestionCategory;
use App\Models\Question;
use App\Models\Answer;
use App\Models\ExamAnswer;
use App\Models\ExamConfig;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Throwable;

class ExamService implements ExamServiceInterface
{
    public function countPointExam($params)
    {
        $point = 0;
        $exam = Exam::find($params['exam_id']);
        $questions = $exam->question;
        $numberQuestions = $questions->count();
        foreach ($questions as $question) {
            $correctAnwsersId = ExamAnswer::where('exam_question_id', $question->id)->where('correct_flag', 1)->get('id');
            $arrayCorrect = [];
            foreach ($correctAnwsersId as $correctAnwserId) {
                array_push($arrayCorrect, $correctAnwserId->id);
            }
            if(!array_diff($arrayCorrect, $params['answer_choose_id'])) {
                $point ++;
            }
        }
        $this->setResultExam($params['exam_id'], $point);
        return $exam->subject_id;
    }

    public function getExamConfig($userId, $subjectId)
    {
        $questionCategoryArr = [];
        $questionCategories = QuestionCategory::where('subject_id', $subjectId)->get();

        foreach ($questionCategories as $questionCategory) {
            array_push($questionCategoryArr, $questionCategory->id);
        }

        $examConfigrations = ExamConfig::where('user_id', $userId)
            ->whereIn('question_category_id', $questionCategoryArr)
            ->get();

        return $examConfigrations;
    }

    public function createExamConfig($params)
    {
        $examConfig =  ExamConfig::create([
            'name' => $params['name'],
            'user_id' => Auth::id(),
            'question_category_id' => $params['question_category_id'],
            'question_degree_id' => $params['question_degree_id'],
            'quota' => $params['quota'],
        ]);
        return $examConfig;
    }

    public function getExamBySubjectId($subjectId)
    {
        $exams = Exam::where('subject_id', $subjectId)
            ->where('user_id', Auth::user()->id)
            ->get();

        return $exams;
    }

    public function getQuestionCategoriesBySubjectId($subjectId)
    {
        $questionCategories = QuestionCategory::where('subject_id', $subjectId)->get();

        return $questionCategories;
    }

    public function createTestOnline($examConfigId, $userId, $subjectId)
    {
        $testOnline = Exam::create([
            'id' => (string) Str::uuid(),
            'user_id' => $userId,
            'subject_id' => $subjectId,
            'exam_config_id' => $examConfigId,
        ]);

        return $testOnline;
    }

    public function randomQuestions($examConfig){
        $examConfigId= $examConfig['question_category_id'];
        $quota = $examConfig['quota'];
        $questionDegree = $examConfig['question_degree_id'];
        $questionsList = Question::where('question_category_id', $examConfigId)
            ->where('question_degree_id', $questionDegree)
            ->inRandomOrder()
            ->limit($quota)
            ->get();

        return $questionsList;
    }

    public function storeQuestionToTestOnline($examId, $dataQuestion)
    {
        foreach ($dataQuestion as $q)
        {
            DB::beginTransaction();
            try {
                $examQuestion = new ExamQuestion();
                $examQuestion->question = $q->question;
                $examQuestion->exam_id = $examId;
                $examQuestion->status = 0;
                $examQuestion->save();

                $dataAnswer = Answer::where('question_id', $q->id)->get();
                foreach ($dataAnswer as $data)
                {
                    $answer = new ExamAnswer();
                    $answer->id = (string) Str::uuid();
                    $answer->exam_question_id = $examQuestion->id;
                    $answer->answer = $data->answer;
                    $answer->media_url = $data->media_url;
                    $answer->correct_flag = $data->correct_flag;
                    $answer->selected_flg = 0;
                    $answer->save();
                }
                DB::commit();
            } catch (Throwable $e) {
                DB::rollback();
                throw $e;
            }
        }
    }

    public function setResultExam($examId, $score)
    {
        $Exam = Exam::findOrFail($examId)->update([
            'score' => $score,
            'completed_at' => now(),
        ]);
    }
}
