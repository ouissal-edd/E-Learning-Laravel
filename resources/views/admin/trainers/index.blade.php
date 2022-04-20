@extends('admin.layout')

@section('content')

<a href="{{route('admin.trainer.create')}}" class="btn btn-primary">
    <i class="fa fa-plus"></i>
    Add
</a>
@include('admin.inc.errors')
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th scope="col">N</th>
            <th scope="col">Image</th>
            <th scope="col">Name</th>
            <th scope="col">phone</th>
            <th scope="col">Speciality</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($trainers as $trainer)

        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            {{-- make image rond --}}
            <td>
                <img  src="{{asset('uploads/trainers/'.$trainer->img)}}" alt="" width="50px" height="50px">
            </td>
            <td>{{$trainer->name}}</td>
            @if($trainer->phone)

            <td>{{$trainer->phone}}</td>
            @else
            <td>No phone</td>

            @endif
            <td>{{$trainer->spec}}</td>
<td>
                <a href="{{route('admin.trainer.edit',$trainer->id)}}" class="btn btn-sm btn-info">Edite</a>
                <a href="{{route('admin.trainer.delete',$trainer->id)}}" class="btn btn-sm btn-info">Delete</a>

            </td>
        </tr>

        @endforeach

    </tbody>

@endsection
