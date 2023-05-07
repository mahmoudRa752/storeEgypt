@extends('admin.layout')

@section('content')
    @if(Session::has('message'))
    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
    @endif
    <h1 class="text-center mt-5">Manage Admins</h1>
    <div class="table-responsive">
        <table class="main-table text-center table table-bordered">
            <tr>
                <td>#ID</td>
                <td>First Name</td>
                <td>Last Name</td>
                <td>Email</td>
                <td>Control</td>
            </tr>
            @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->first_name}}</td>
                <td>{{$user->last_name}}</td>
                <td>{{$user->email}}</td>
                <td>
                    <a href="" class="badge bg-success"><i class="fa fa-edit"></i> Edit</a>
                    <a href="" class="badge bg-danger confirm"><i class="fa fa-remove"></i> Delete</a>
                </td>
            </tr>
            @endforeach

        </table>
    </div>
@endsection
