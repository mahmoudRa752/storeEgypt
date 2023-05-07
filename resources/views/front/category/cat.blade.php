@extends('front.layout')

@section('content')

    <div class="container mt-5 pt-3">

    <div class="row pt-4">

      <!-- Content-->
      <div class="col-lg-9">


        <!-- Products Grid-->
        <section class="section pt-4">

          <!-- Grid row-->
          <div class="row">

            <!-- Grid column-->
            <div class="col-lg-4 col-md-12 mb-4">
                @foreach($onecatproducts as $prod)
              <!-- Card-->
                <div class="card w-75">

                    <!-- Card image -->
                    <div>

                      <img src="{{ asset('uploads/products/'.$prod->image) }}" height="200px" width="100px" class="img-fluid" style="max-height: 100%;" alt="">

                      <a>

                        <div class="mask rgba-white-slight"></div>

                      </a>

                    </div>
                    <!-- Card image -->

                    <!-- Card content -->
                    <div class="card-body">

                      <!-- Category & Title -->
                      <h5 class="card-title mb-1"><strong><a href="{{route('oneProduct',$prod->id)}}" class="dark-grey-text">{{$prod->name}}</a></strong>
                      </h5>

                      @if($prod->bestseller == 1)<span class="badge badge-danger mb-2">bestseller</span>@endif
                      @if($prod->bestrated == 1)<span class="badge badge-primary mb-2">bestrated</span>@endif
                      @if($prod->new == 1)<span class="badge badge-warning mb-2">new</span>@endif
                      @if($prod->sale == 1)<span class="badge badge-success mb-2">sale</span>@endif

                      <!-- Rating -->
                      <ul class="rating">

                        <li><i class="fas fa-star blue-text"></i></li>

                        <li><i class="fas fa-star blue-text"></i></li>

                        <li><i class="fas fa-star blue-text"></i></li>

                        <li><i class="fas fa-star blue-text"></i></li>

                        <li><i class="fas fa-star blue-text"></i></li>

                      </ul>

                      <!-- Card footer -->
                      <div class="card-footer pb-0">

                        <div class="row mb-0">

                          <span class="float-left"><strong>1439$</strong></span>

                          <span class="float-right">

                            <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i
                                class="fas fa-shopping-cart ml-3"></i></a>

                          </span>

                        </div>

                      </div>

                    </div>
                    <!-- Card content -->
                  </div>
              <!-- Card-->
              @endforeach

            </div>
            <!-- Grid column-->

            <!-- Grid column-->
            <div class="col-lg-4 col-md-6 mb-4">



            </div>
            <!-- Grid column-->

          </div>
          <!-- Grid row-->

          <!-- Grid row-->
          <div class="row">

            <!-- Grid column-->
            <div class="col-lg-4 col-md-12 mb-4">




          <!-- Grid row-->
          <div class="row justify-content-center mb-12">

            <!-- Pagination-->
            <nav class="mb-12">

              <ul class="pagination pagination-circle pg-blue mb-0">

                <!-- First-->
                <li class="page-item disabled clearfix d-none d-md-block"><a
                    class="page-link waves-effect waves-effect">First</a></li>

                <!-- Arrow left-->
                <li class="page-item disabled">

                  <a class="page-link waves-effect waves-effect" aria-label="Previous">

                    <span aria-hidden="true">«</span>

                    <span class="sr-only">Previous</span>

                  </a>

                </li>

                <!-- Numbers-->
                <li class="page-item active"><a class="page-link waves-effect waves-effect">1</a></li>

                <li class="page-item"><a class="page-link waves-effect waves-effect">2</a></li>

                <li class="page-item"><a class="page-link waves-effect waves-effect">3</a></li>

                <li class="page-item"><a class="page-link waves-effect waves-effect">4</a></li>

                <li class="page-item"><a class="page-link waves-effect waves-effect">5</a></li>

                <!-- Arrow right-->
                <li class="page-item">

                  <a class="page-link waves-effect waves-effect" aria-label="Next">

                    <span aria-hidden="true">»</span>

                    <span class="sr-only">Next</span>

                  </a>

                </li>

                <!-- First-->
                <li class="page-item clearfix d-none d-md-block"><a class="page-link waves-effect waves-effect">Last</a>

                </li>

              </ul>

            </nav>
            <!-- Pagination-->

          </div>
          <!-- Grid row-->

        </section>
        <!-- Products Grid-->

    </div>

  </div>
  <!-- Main Container-->

  </main>

@endsection
