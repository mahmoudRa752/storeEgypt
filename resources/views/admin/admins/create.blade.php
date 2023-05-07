
@extends('admin.layout')

@section('content')

    @include('admin.inc.errors')

    <h1 class="text-center mt-5">ADD New Admin</h1>
    <form action="{{route('admin.admin.store')}}" method="POST" class="form-horizontal">
        @csrf
        <div class="form-group form-group-lg">
            <label>First Name</label>
            <input type="text" name="first_name" class="form-control" auto-complete="off" placeholder=" firt name">
        </div>
        <div class="form-group form-group-lg">
            <label>Last Name</label>
            <input type="text" name="last_name" class="form-control" auto-complete="off" placeholder=" last name">
        </div>
        <div class="form-group form-group-lg">
            <label>Email</label>
            <input type="email" name="email" class="form-control" auto-complete="off" placeholder=" email">
        </div>
        <div class="form-group form-group-lg">
            <label>Password</label>
            <input type="password" name="password" class="form-control" auto-complete="off" placeholder=" password ">
        </div>
        <div class="form-group form-group-lg">
            <label> Confirm Password</label>
            <input type="password" name="password_confirmation" class="form-control" auto-complete="off" placeholder=" password ">
        </div>
        <!-- permissions -->
        <div class="form-group">
            <label for="">Permissions</label>
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#admins">Admins</a>
                </li>

            </ul>
            <div class="form-check mt-3" id="admins">
                <input class="form-check-input" type="checkbox" name="permissions[]" value="create_users" id="flexCheckDefault1">
                <label class="form-check-label" for="flexCheckDefault1">
                Add
                </label>
                <input class="form-check-input" type="checkbox" name="permissions[]" value="read_users" id="flexCheckDefault2">
                <label class="form-check-label" for="flexCheckDefault2">
                Read
                </label>
                <input class="form-check-input" type="checkbox" name="permissions[]" value="update_users" id="flexCheckDefault3">
                <label class="form-check-label" for="flexCheckDefault3">
                Update
                </label>
                <input class="form-check-input" type="checkbox" name="permissions[]" value="delete_users" id="flexCheckDefault4">
                <label class="form-check-label" for="flexCheckDefault4">
                Delete
                </label>
            </div>
        </div>
        <!-- end permissions -->
        <div class="form-group form-group-lg">
            <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Add </button>
        </div>
    </form>
@endsection
