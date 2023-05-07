@extends('admin.layout')
@section('content')
    <div class="d-flex justify-content-between mt-4 mb-3">
        <h4>Products</h4>
        <a href="{{route('admin.product.create')}}" class="btn btn-sm btn-primary">Add New</a>
    </div>
    <div class="table-responsive">
    <table class="main-table text-center table table-bordered"">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Price</th>
                <th scope="col">Brand</th>
                <th scope="col">Image</th>
                <th scope="col">Status</th>
                <th scope="col">Operations</th>
            </tr>
        </thead>
        <tbody>
            @foreach($allproducts as $product)
            <tr>
                <th scope="row">{{$product->id}}</th>
                <td>{{$product->name}}</td>
                <td>{{$product->desc}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->brand}}</td>
                <td><img src="{{ asset('uploads/products/'.$product->image) }}" alt="" class="img-fluid"></td>
                <td>
                    @if($product->new==1)<span class="badge badge-primary">new</span>@endif
                    @if($product->sale==1)<span class="badge badge-success">sale</span>@endif
                    @if($product->bestseller==1)<span class="badge badge-danger">bestseller</span>@endif
                    @if($product->bestrated==1)<span class="badge badge-warning">bestrated</span>@endif
                <td>
                    <a href="{{route('admin.product.edit',$product->id)}}" class="btn btn-sm btn-success"><i class="fa fa-edit"></i>edit</a>
                    <a href="{{route('admin.product.delete',$product->id)}}" class="btn btn-sm btn-danger"><i class="fa fa-delete"></i>delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
