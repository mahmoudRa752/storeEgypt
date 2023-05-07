@extends('admin.layout')
@section('content')

@include('admin.inc.errors')
    <form action="{{route('admin.product.store')}}" method="POST" class="form-horizontal mt-5" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Product Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label for="desc">Description</label>
                <input type="desc" name="desc" class="form-control" id="desc" placeholder="Enter suitable description">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" name="price" class="form-control" id="price" placeholder="Enter price">
            </div>
            <div class="form-group">
                <label for="brand">Brand</label>
                <input type="brand" name="brand" class="form-control" id="brand" placeholder="brand">
            </div>
            <label for="brand">bestseller</label>
            <div class="form-check">
                <input class="form-check-input" value="1" type="radio" name="bestseller" id="bestseller1">
                <label class="form-check-label" for="bestseller1">Best Seller</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" value="0" type="radio" name="bestseller" id="bestseller2" checked>
                <label class="form-check-label" for="bestseller2">Not Best Seller</label>
            </div>
            <label for="brand">bestrated</label>
            <div class="form-check">
                <input class="form-check-input" value="1" type="radio" name="bestrated" id="bestrated1">
                <label class="form-check-label" for="bestrated1">Best Rated</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" value="0" type="radio" name="bestrated" id="bestrated2" checked>
                <label class="form-check-label" for="bestrated2">Not Best Rated</label>
            </div>
            <label for="brand">new</label>
            <div class="form-check">
                <input class="form-check-input" value="1" type="radio" name="new" id="new1">
                <label class="form-check-label" for="new1">New</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" value="0" type="radio" name="new" id="new2" checked>
                <label class="form-check-label" for="new2">Used</label>
            </div>
            <label for="brand">sale</label>
            <div class="form-check">
                <input class="form-check-input" value="1" type="radio" name="sale" id="sale1">
                <label class="form-check-label" for="sale1">Sale</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" value="0" type="radio" name="sale" id="sale2" checked>
                <label class="form-check-label" for="sale2">No Sale</label>
            </div>
            <div class="form-group">
                <label for="formFile" class="form-label">upload image</label>
                <input class="form-control-file" name="image" type="file" id="formFile"/>
            </div>
            <div class="form-group">
                <label for="desc">Choose Your Category</label><div></div>
                <select name="cat_id" class="form-select-danger" aria-label="Default select example">
                    <option selected>....</option>
                    @foreach($cats as $cat)

                        <option name="cat_id" value="{{$cat->id}}">{{$cat->name}}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

@endsection
