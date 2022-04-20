@extends('admin.layout')

@section('content')

<a href="{{route('admin.cat')}}" class="btn btn-primary">
    <i class="fa fa-arrow-left"></i>
    Go Back
</a>

@include('admin.inc.errors')

<form action="{{route('admin.cat.store')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control">
    </div>
    <div class="form-group">
        <button type='submit' class="btn btn-primary">Add</button>
    </div>

    @endsection
