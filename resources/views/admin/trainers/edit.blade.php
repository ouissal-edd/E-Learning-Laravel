@extends('admin.layout')

@section('content')

@include('admin.inc.errors')

<form action="{{route('admin.trainer.update',$trainer->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('POST')
    <div class="form-group">
        <input type="hidden" value="{{$trainer->id}}">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control" value="{{$trainer->name}}">
    </div>
    <div class="form-group">
        <label for="phone">Phone</label>
        <input type="text" name="phone" id="phone" class="form-control" value="{{$trainer->phone}}">
    </div>
    <div class="form-group">
        <label for="spec">Speciality</label>
        <input type="text" name="spec" id="spec" class="form-control" value="{{$trainer->spec}}">
    </div>
    <div class="form-group">
        <label for="img">Image</label>
        <input type="file" name="img" id="img" class="form-control">
    </div>
    <div class="form-group">
        <button type='submit' class="btn btn-primary">Update</button>
    </div>

@endsection
