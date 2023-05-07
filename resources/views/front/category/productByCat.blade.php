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
                @foreach($prodsOfCat as $cat)
              <!-- Card-->
              <div class="card card-ecommerce">

                <!-- Card image-->
                <div class="view overlay">

                  <img src="{{ asset('front/img/'.$cat->image.'.jpg') }}" class="img-fluid"
                    alt="">

                  <a>

                    <div class="mask rgba-white-slight"></div>

                  </a>

                </div>
                <!-- Card image-->

                <!-- Card content-->
                <div class="card-body">

                  <!-- Category & Title-->
                  <h5 class="card-title mb-1"><strong><a href="" class="dark-grey-text">{{$cat->name}}</a></strong></h5>
                  <p>created at : {{$cat->created_at}}</p>
                  <p>updated at : {{$cat->updated_at}}</p>


                </div>
                <!-- Card content-->

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
