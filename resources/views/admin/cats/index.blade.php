@extends('admin.layout')

@section('content')
    <a href="{{route('admin.cat.create')}}" class="btn btn-primary">
        <i class="fa fa-plus"></i>
        Add New Category
    </a>
<table class="table table-striped table-hover">

        <thead>
          <tr>
            <th scope="col">N</th>
            <th scope="col">Name</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach($cats as $cat)

          <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$cat->name}}</td>
            <td>
                <a href="{{route('admin.cat.edit',$cat->id)}}" class="btn btn-sm btn-info">Edite</a>
                <a href="{{route('admin.cat.delete',$cat->id)}}" class="btn btn-sm btn-info">Delete</a>

            </td>
          </tr>
          @endforeach

        </tbody>
  </table>

@endsection
