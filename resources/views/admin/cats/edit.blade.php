@extends('admin.layout')

@section('content')
<h5> {{$cat->name}} </h5>
@include('admin.inc.errors')
{{-- make form update cat --}}
<form action="{{route('admin.cat.update',$cat->id)}}" method="post">
    @csrf
    @method('POST')
    <div class="form-group">
        <input type="hidden" value="{{$cat->id}}">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control" value="{{$cat->name}}">
    </div>
    <div class="form-group">
        <button type='submit' class="btn btn-primary">Update</button>
    </div>



@endsection

