<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function courseDetail($courseId)
    {
        $course = Course::find($courseId);

        return view('pwa.page.course-detail', compact('course'));
    }
}
