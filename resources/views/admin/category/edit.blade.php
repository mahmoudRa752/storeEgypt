@extends('admin.layout')

@section('content')



    <form class="form mt-5" method="post" action="{{route('admin.cat.update')}}">
        @csrf
        <input type="hidden" name="id" value="{{$cat->id}}">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$cat->name}}">
        </div>
        <div class="form-group">
            <label for="desc">Description</label>
            <input class="form-control" id="desc" name="desc" aria-describedby="emailHelp" value="{{$cat->desc}}">

        </div>

        <div class="form-group">
            <label for="formFile" class="form-label">Disabled file input example</label>
            <input class="form-control" name="image" type="file" id="formFile"/>
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
