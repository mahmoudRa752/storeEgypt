@extends('admin.layout')

@section('content')

    @include('admin.inc.errors')

    <form class="form mt-5" method="POST" action="{{route('admin.cat.store')}}">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
        </div>
        <div class="form-group">
            <label for="desc">Description</label>
            <input class="form-control" id="desc" name="desc" placeholder="Enter Suitable Description">

        </div>
        <div class="form-group">
            <label for="formFile" class="form-label">Disabled file input example</label>
            <input class="form-control" name="image" type="file" id="formFile"/>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
