@extends('admin.layout')

@section('content')

<form action="{{route('admin.course.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('POST')
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="desc" id="description" cols="30" rows="10" class="form-control"></textarea>
    </div>

    <div class="form-group">
        <label for="small_desc">Small Description</label>
        <textarea name="small_desc" id="small_desc" cols="4" rows="4" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label for="img">Image</label>
        <input type="file" name="img" id="img" class="form-control">
    </div>
    <div class="form-group">
        <label for="price">Price</label>
        <input type="text" name="price" id="price" class="form-control">
    </div>

    <div class="form-group">
        <label for="cat_id">Category</label>
        <select name="cat_id" id="cat_id" class="form-control">
            @foreach ($cats as $cat)
            <option value="{{$cat->id}}">{{$cat->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="trainer_id">Trainer</label>
        <select name="trainer_id" id="trainer_id" class="form-control">
            @foreach ($trainers as $trainer)
            <option value="{{$trainer->id}}">{{$trainer->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Create</button>
    </div>
</form>



@endsection
