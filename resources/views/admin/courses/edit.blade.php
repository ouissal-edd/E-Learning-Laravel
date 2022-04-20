@extends('admin.layout')

@section('content')

{{-- edit course --}}
<h1>Edit Course</h1>
@include('admin.inc.errors')
{{-- make form update course --}}
<form action="{{route('admin.course.update',$course->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('POST')
    <div class="form-group">
        <input type="hidden" value="{{$course->id}}">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control" value="{{$course->name}}">
    </div>
    <div class="form-group">
        <label for="desc">Description</label>
        <textarea name="desc" id="desc" cols="30" rows="10" class="form-control">{{$course->desc}}</textarea>
    </div>

    <div class="form-group">
        <label for="small_desc">Small Desc</label>
        <textarea name="small_desc" id="small_desc" cols="4" rows="10" class="form-control">{{$course->small_desc}}</textarea>
    </div>


    <div class="form-group">
        <label for="img">Image</label>
        <input type="file" name="img" id="img" class="form-control">
    </div>
    <div class="form-group">
        <label for="price">Price</label>
        <input type="text" name="price" id="price" class="form-control" value="{{$course->price}}">
    </div>
    <div class="form-group">
        <label for="cat_id">Category</label>
        <select name="cat_id" id="cat_id" class="form-control">
            @foreach ($cats as $cat)
            <option value="{{$cat->id}}" @if($cat->id == $course->cat_id) selected @endif>{{$cat->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="trainer_id">Trainer</label>
        <select name="trainer_id" id="trainer_id" class="form-control">
            @foreach ($trainers as $trainer)
            <option value="{{$trainer->id}}" @if($trainer->id == $course->trainer_id) selected @endif>{{$trainer->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
</form>

@endsection
