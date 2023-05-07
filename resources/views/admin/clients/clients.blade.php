@extends('admin.layout')
@section('content')
    <div class="d-flex justify-content-between mt-4 mb-3">
        <h4>Clients</h4>
        <a href="{{route('admin.client.create')}}" class="btn btn-sm btn-primary">Add New</a>
    </div>
    <div class="table-responsive">
    <table class="main-table text-center table table-bordered"">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Mobile</th>
                <th scope="col">Email</th>
                <th scope="col">Address</th>
                <th scope="col">Operations</th>
            </tr>
        </thead>
        <tbody>
            @foreach($Clients as $client)
            <tr>
                <th scope="row">{{$client->id}}</th>
                <td>{{$client->name}}</td>
                <td>{{$client->mobile}}</td>
                <td>{{$client->email}}</td>
                <td>{{$client->address}}</td>
                <td>
                    <a href="{{route('admin.client.edit',$client->id)}}" class="btn btn-success"><i class="fa fa-edit"></i>edit</a>
                    <a href="{{route('admin.client.delete',$client->id)}}" class="btn btn-danger"><i class="fa fa-delete"></i>delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
