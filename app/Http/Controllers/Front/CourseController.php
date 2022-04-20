<?php

namespace App\Http\Controllers\Front;
use Illuminate\Support\Facades\DB;

use App\Models\Course;
use App\Models\Cat;

use App\Http\Controllers\Controller;
use App\Models\Student;

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

    public function subscribe(Request $request)
    {
    $request->validate([
        'name' => 'required|string|max:200',
        'email' => 'required|email|max:200',
        'spec' => 'nullable|string|max:200',
        'course_id' => 'required|exists:courses,id',
    ]);

   $studentSaved= Student::create([
    'name' => $request->name,
    'email' =>  $request->email,
    'spec' => $request->spec,
   ]);

   $student_id = $studentSaved->id;
    DB::table('course_student')->insert([
    'student_id' => $student_id,
    'course_id' => $request->course_id,
    'created_at' => now(),
    'updated_at' => now(),
]);

    return redirect()->back()->with('success', 'You have successfully subscribed to this course.');


    }
}
