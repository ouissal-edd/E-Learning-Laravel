<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Trainer;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class TrainerController extends Controller
{
    // get all trainers
    public function index()
    {
        $trainers = Trainer::all();
        return view('admin.trainers.index', compact('trainers'));
    }

    public function create()
    {
        return view('admin.trainers.create');
    }

    // store trainer
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:200',
            'phone' => 'string|max:200',
            'spec' => 'required|string',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        // make new name using hashname
        $imageName = $request->img->hashName();
        Image::make($request->img)->resize(50, 50)->save(public_path('uploads/trainers/' . $imageName));

        Trainer::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'spec' => $request->spec,
            'img' => $imageName,
        ]);

        return redirect()->route('admin.trainer')->with('success', 'Trainer created successfully');
    }

    // edit trainer
    public function edit($id)
    {
        $trainer = Trainer::findOrFail($id);
        return view('admin.trainers.edit', compact('trainer'));
    }

    // update trainer
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:200',
            'phone' => 'required|max:200',
            'spec' => 'string',
            'img' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $old_img= Trainer::findOrFail($request->id)->img;

        if($request->hasFile('img'))
        {
        Storage::disk('uploads')->delete('trainers/'.$old_img);
            // make new name using hashname
            $imageName = $request->img->hashName();
            Image::make($request->img)->resize(50, 50)->save(public_path('uploads/trainers/' . $imageName));
        }
        else
        {
            $imageName = $old_img;
        }


        Trainer::findOrFail($request->id)->update(
            [
                'name' => $request->name,
                'phone' => $request->phone,
                'spec' => $request->spec,
                'img' => $imageName,
            ]

        );

        return redirect()->route('admin.trainer')->with('success', 'Trainer updated successfully');
    }

    // delete trainer
    public function delete($id)
    {
       $old_img= Trainer::findOrFail($id)->img;
        Storage::disk('uploads')->delete('trainers/'.$old_img);
        Trainer::findOrFail($id)->delete();
        return redirect()->route('admin.trainer')->with('success', 'Trainer deleted successfully');
    }
}
