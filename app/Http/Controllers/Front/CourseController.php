<?php

namespace App\Http\Controllers\Front;
use App\Models\Course;
use App\Models\Cat;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function cat($id)
    {
        $cat = Cat::findOrFail($id);
        // get all courses by cat id
        $courses = Course::where('cat_id', $id)->paginate(3);
        return view('front.cat', compact('courses', 'cat'));


    }

    public function show($cId)
    {
        $course = Course::findOrFail($cId);
        return view('front.show', compact('course'));


    }
}
