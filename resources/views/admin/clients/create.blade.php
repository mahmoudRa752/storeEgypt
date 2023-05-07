@extends('admin.layout')

@section('content')

    @include('admin.inc.errors')

        <form action="{{route('admin.client.store')}}" method="POST" class="form-horizontal mt-5">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter Email">
            </div>
            <div class="form-group">
                <label for="mobile">Mobile</label>
                <input type="text" name="mobile" class="form-control" id="mobile" placeholder="Enter Mobile">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="address" name="address" class="form-control" id="address" placeholder="Enter Address">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>


@endsection
