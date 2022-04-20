<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\Trainer;
use App\Models\Student;

class HomepageController extends Controller
{
    public function index()
    {
        // get all courses by 3 lastest
        $courses = Course::orderBy('created_at', 'desc')->take(3)->get();

//    count all courses and trainers and students
        $countCourses = Course::count();
        $countTrainers = Trainer::count();
        $countStudents = Student::count();

        return view('front.index', compact('courses', 'countCourses', 'countTrainers', 'countStudents'));
    }
}
