@extends('admin.layout')

@section('content')
    <div class="d-flex justify-content-between mt-4 mb-3">
        <h4>categories</h4>
        <a href="{{route('admin.cat.create')}}" class="btn btn-sm btn-primary">Add New</a>
    </div>
    <div class="table-responsive">
    <table class="main-table text-center table table-bordered"">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Operations</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cats as $cat)
            <tr>
                <th scope="row">{{$cat->id}}</th>
                <td>{{$cat->name}}</td>
                <td>{{$cat->desc}}</td>
                <td>
                    <div display="inline-block">
                        <a href="{{route('admin.cat.edit',$cat->id)}}" class="btn btn-success"><i class="fa fa-edit"></i>edit</a>
                        <a href="{{route('admin.cat.delete',$cat->id)}}" class="btn btn-danger"><i class="fa fa-delete"></i>delete</a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection
