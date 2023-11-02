<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function CoursePage(){
        return view('course_dinamic');
    }

    public function MainPage(){
        return view('main_page');
    }
}
