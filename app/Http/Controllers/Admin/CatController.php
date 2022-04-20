<?php

namespace App\Http\Controllers\Admin;
// models
use App\Models\Cat;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CatController extends Controller
{
    //get all categories
    public function index()
    {
        $cats = Cat::all();
        return view('admin.cats.index', compact('cats'));
    }

    public function create()
    {
         return view('admin.cats.create');
    }

    // store category
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:200',
        ]);

        Cat::create($request->all());
        return redirect()->route('admin.cat')->with('success', 'Category created successfully');
    }

    // edit category
    public function edit($id)
    {
        $cat = Cat::findOrFail($id);
        return view('admin.cats.edit', compact('cat'));
    }

    // update category
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:200',
        ]);

     Cat::findOrFail($request->id)->update($request->all());

        return redirect()->route('admin.cat')->with('success', 'Category updated successfully');
    }

    // delete category
    public function delete($id)
    {
        Cat::findOrFail($id)->delete();
        return redirect()->route('admin.cat')->with('success', 'Category deleted successfully');
    }

}
