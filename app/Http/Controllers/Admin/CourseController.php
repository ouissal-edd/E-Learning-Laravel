<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Models\Cat;
use App\Models\Trainer;


class CourseController extends Controller
{
    // get all courses
    public function index()
    {
        $courses = Course::all();
        return view('admin.courses.index', compact('courses'));
    }

    public function create()
    {
        $courses = Course::all();
        $cats = Cat::all();
        $trainers = Trainer::all();
        return view('admin.courses.create', compact('courses', 'cats', 'trainers'));
    }

    // store course
    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => 'required|string|max:200',
        //     'desc' => 'required|string|max:200',
        //     'small_desc' => 'required|string|max:200',
        //     'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        //     'price' => 'required|numeric',
        //     'cat_id' => 'required|numeric',
        //     'trainer_id' => 'required|numeric',
        // ]);

        // make new name using hashname
        $imageName = $request->img->hashName();

        Image::make($request->img)->resize(50, 50)->save(public_path('uploads/courses/' . $imageName));

       Course::create(
            [
                'name' => $request->name,
                'desc' => $request->desc,
                'price' => $request->price,
                'img' => $imageName,
                'small_desc' => $request->small_desc,
                'cat_id' => $request->cat_id,
                'trainer_id' => $request->trainer_id,
            ]
        );
        return redirect()->route('admin.course')->with('success', 'Course created successfully');
    }

    // edit course
    public function edit($id)
    {
        $course = Course::findOrFail($id);
        $cats = Cat::all();
        $trainers = Trainer::all();
        return view('admin.courses.edit', compact('course', 'cats', 'trainers'));

    }

    // update course
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'string|max:200',
            'desc' => 'string|max:200',
            'price' => 'numeric',
            'img' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'small_desc' => 'string|max:200',
            'cat_id' => 'numeric',
            'trainer_id' => 'numeric',
        ]);

        $old_img= Course::findOrFail($request->id)->img;
        if($request->hasFile('img'))
        {
            Storage::disk('uploads')->delete('courses/'.$old_img);
            // make new name using hashname
            $imageName = $request->img->hashName();
            Image::make($request->img)->resize(50, 50)->save(public_path('uploads/courses/' . $imageName));
        }
        else
        {
            $imageName = $old_img;
        }
     Course::findOrFail($request->id)->update(
            [
                'name' => $request->name,
                'desc' => $request->desc,
                'price' => $request->price,
                'img' => $imageName,
                'small_desc' => $request->small_desc,
                'cat_id' => $request->cat_id,
                'trainer_id' => $request->trainer_id,
            ]
        );
        return redirect()->route('admin.course')->with('success', 'Course updated successfully');

    }

    // delete course
    public function delete($id)
    {
        $course = Course::findOrFail($id);
        Storage::disk('uploads')->delete('courses/'.$course->img);
        Course::findOrFail($id)->delete();
        return redirect()->route('admin.course')->with('success', 'Course deleted successfully');
    }
}
