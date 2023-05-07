@extends('front.layout')

@section('content')

    <div class="container mt-5 pt-3">

    <div class="row pt-4">

      <!-- Content-->
      <div class="col-lg-9">
        @foreach($cats as $cat)
        <div class="panel panel-info">
            <div class="panel-heading">

                <a href="{{route('front.onecat',$cat->id)}}"><h1 class="h1">{{$cat->name}}</h1></a>
            </div>
            <div class="panel-body">
                <div class='cat'>
                    <h6 class="h6">{{$cat->desc}}</h6>
                    <hr>
                    <div>
                        <small class="small">created at : {{$cat->created_at}}</small>
                        <small class="small">updated at : {{$cat->updated_at}}</small>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        @endforeach


    </div>

  </div>
  <!-- Main Container-->

  </main>

@endsection
