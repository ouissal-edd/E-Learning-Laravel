@extends('admin.layout')

@section('content')

<a href="{{route('admin.course.create')}}" class="btn btn-primary">
    <i class="fa fa-plus"></i>
    Add Course
</a>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th scope="col">N</th>
            <th>Image</th>
            <th scope="col">Name</th>
            <th scope="col">Category</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th scope="col">Action</th>

        </tr>
    </thead>
    <tbody>
        @foreach($courses as $course)

        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>
                <img  src="{{asset('uploads/courses/'.$course->img)}}" alt="" width="50px" height="50px">
            </td>
            <td>{{$course->name}}</td>
            <td>{{$course->cat->name}}</td>
            <td>{{$course->desc}}</td>
            <td>{{$course->price}}</td>
            <td>
                <a href="{{route('admin.course.edit',$course->id)}}" class="btn btn-sm btn-info">Edite</a>
                <a href="{{route('admin.course.delete',$course->id)}}" class="btn btn-sm btn-info">Delete</a>

            </td>
        </tr>
        @endforeach

    </tbody>

@endsection
