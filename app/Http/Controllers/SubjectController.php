<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function lessonList($subjectId)
    {
        return view('pwa.page.lesson-detail');
    }
}
