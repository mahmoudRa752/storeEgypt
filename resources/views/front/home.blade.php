@extends('front.layout')

@section('content')
  <!-- Main Container -->
  <div class="container">

    <!-- Grid row -->
    <div class="row pt-4">

      <!-- Content -->
      <div class="col-lg-12">

        <!-- Section: Products -->
        <section>

            <!-- Grid row -->
          <div class="row">
            @foreach($allproducts as $prod)

                <!-- Grid column -->
                <div class="col-lg-4 col-md-12 mb-4">

                  <!-- Card -->
                  <div class="card card-ecommerce">

                    <!-- Card image -->
                    <div class="view overlay">

                      <img src="{{ asset('uploads/products/'.$prod->image) }}" height="400px" width="200px" class="img-fluid" alt="">

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
                        @for($i=0;$i < $prod->rate ;$i++)
                        <li><i class="fas fa-star blue-text"></i></li>
                        @endfor
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
                  <!-- Card -->

                </div>
                <!-- Grid column -->
             @endforeach
                </div>
              <!-- Grid row -->

        </section>
        <!-- Section: Products -->

        <!-- Section: Advertising -->
        <section>

          <!-- Grid row -->
          <div class="row">

            <!-- Grid column -->
            <div class="col-12">

              <!-- Image -->
              <div class="view z-depth-1">

                <img src="https://mdbootstrap.com/img/Photos/Others/ecommerce6.jpg" class="img-fluid"
                  alt="sample image">

                <div class="mask rgba-stylish-slight">

                  <div class="dark-grey-text text-right pt-lg-5 pt-md-1 mr-5 pr-md-4 pr-0">

                    <div>

                        <span class="badge badge-primary mb-2">SALE</span>

                      <h2 class="card-title font-weight-bold pt-md-3 pt-1">

                        <strong>Sale 20% off on <span>{{$cats[$i=rand(0,2)]->name}}</span>!</strong>

                      </h2>

                      <p>{{$cats[$i]->desc}}</p>

                      <a href="{{route('front.onecat',$cats[$i]->id)}}" class="btn mr-0 mt-0 btn-primary btn-rounded clearfix d-none d-md-inline-block">Read more</a>

                    </div>

                  </div>

                </div>

              </div>
              <!-- Image -->

            </div>
            <!-- Grid column -->

          </div>
          <!-- Grid row -->

        </section>
        <!-- Section: Advertising -->

        <!-- Section: product list -->
        <section class="mb-5">

          <div class="row">

            <!-- New Products -->
            <div class="col-lg-4 col-md-12 col-12 pt-4">

              <hr>

              <h5 class="text-center font-weight-bold dark-grey-text"><strong>New Products</strong></h5>

              <hr>

              <!-- First row -->
              @foreach($newproducts as $prod)
              <div class="row mt-1 py-2 mb-0 hoverable align-items-center">

                <div class="col-6">

                  <a href="{{route('oneProduct',$prod->id)}}"><img src="{{asset('uploads/products/'.$prod->image)}}" class="img-fluid"></a>

                </div>

                <div class="col-6">

                  <!-- Title -->
                  <a href="{{route('oneProduct',$prod->id)}}" class="pt-5"><strong>{{$prod->name}}</strong></a>

                  <!-- Rating -->
                  <ul class="rating inline-ul">

                    @for($i=0;$i < $prod->rate ;$i++)
                        <li><i class="fas fa-star blue-text"></i></li>
                    @endfor
                  </ul>

                  <!-- Price -->
                  <h6 class="h6-responsive font-weight-bold dark-grey-text"><strong>${{$prod->price}}</strong></h6>

                </div>

                </div>
                @endforeach
            </div>
            <!-- New Products -->

            <!-- Top Sellers -->
            <div class="col-lg-4 col-md-12 pt-4">

              <hr>

              <h5 class="text-center font-weight-bold dark-grey-text"><strong>Top Sellers</strong></h5>

              <hr>

              <!-- First row -->
              @foreach($topseller as $prod)
              <div class="row mt-2 py-2 mb-4 hoverable align-items-center">

                <div class="col-6">

                  <a href="{{route('oneProduct',$prod->id)}}"><img src="{{asset('uploads/products/'.$prod->image)}}" class="img-fluid"></a>

                </div>

                <div class="col-6">

                  <!-- Title -->
                  <a href="{{route('oneProduct',$prod->id)}}"><strong>{{$prod->name}}</strong></a>

                  <!-- Rating -->
                  <ul class="rating inline-ul">

                    @for($i=0;$i < $prod->rate ;$i++)
                        <li><i class="fas fa-star blue-text"></i></li>
                    @endfor
                  </ul>

                  <!-- Price -->
                  <h6 class="h6-responsive font-weight-bold dark-grey-text"><strong>$649</strong> <span
                      class="grey-text"><small><s>${{$prod->price}}</s></small></span></h6>

                </div>

              </div>
              <!-- row -->
              @endforeach

            </div>
            <!-- Top Sellers -->

            <!-- Random Products -->
            <div class="col-lg-4 col-md-12 pt-4">

              <hr>

              <h5 class="text-center font-weight-bold dark-grey-text"><strong>Random products</strong></h5>

              <hr>
              @foreach($randproducts as $prod)
              <!-- row -->
              <div class="row mt-2 py-2 mb-4 hoverable align-items-center">

                <div class="col-6">

                  <a href="{{route('oneProduct',$prod->id)}}"><img src="{{asset('uploads/products/'.$prod->image)}}" class="img-fluid"></a>

                </div>

                <div class="col-6">

                  <!-- Title -->
                  <a href="{{route('oneProduct',$prod->id)}}"><strong>{{$prod->name}}</strong></a>

                  <!-- Rating -->
                  <ul class="rating inline-ul">

                    @for($i=0;$i < $prod->rate ;$i++)
                        <li><i class="fas fa-star blue-text"></i></li>
                    @endfor

                  </ul>

                  <!-- Price -->
                  <h6 class="h6-responsive font-weight-bold dark-grey-text"><strong>$749</strong> <span
                      class="grey-text"><small><s>${{$prod->price}}</s></small></span></h6>

                </div>

              </div>
              <!-- row -->
              @endforeach
            </div>
            <!-- Random Products -->

          </div>

        </section>
        <!-- Section: product list -->

        <!-- Section: Last items -->
        <section>

          <h4 class="font-weight-bold mt-4 dark-grey-text"><strong>LAST ITEMS</strong></h4>

          <hr class="mb-5">

          <!-- Grid row -->
          <div class="row">

            <!-- Grid column -->
            @foreach($products as $prod)
            <div class="col-lg-3 col-md-6 mb-4">

              <!-- Card -->
              <div class="card card-ecommerce">

                <!-- Card image -->
                <div class="view overlay">

                  <img src="{{ asset('uploads/products/'.$prod->image) }}" height="300px" width="100px" class="img-fluid"
                    alt="">

                  <a>

                    <div class="mask rgba-white-slight"></div>

                  </a>

                </div>
                <!-- Card image -->

                <!-- Card content -->
                <div class="card-body">

                  <!-- Category & Title -->
                  <h5 class="card-title mb-1"><strong><a href="" class="dark-grey-text">{{$prod->name}}</a></strong></h5>
                  @if($prod->bestseller == '0')<span class="badge badge-danger mb-2">bestseller</span>@endif
                  @if($prod->bestrated =='0')<span class="badge badge-primary mb-2">bestrated</span>@endif
                  @if($prod->new == '0')<span class="badge badge-success mb-2">new</span>@endif

                  <!-- Rating -->
                  <ul class="rating">

                    @for($i=0;$i < $prod->rate ;$i++)
                        <li><i class="fas fa-star blue-text"></i></li>
                    @endfor

                  </ul>

                  <!-- Card footer -->
                  <div class="card-footer pb-0">

                    <div class="row mb-0">

                      <span class="float-left"><strong>{{$prod->price}}</strong></span>

                      <span class="float-right">

                        <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i
                            class="fas fa-shopping-cart ml-3"></i></a>

                      </span>

                    </div>

                  </div>

                </div>
                <!-- Card content -->

              </div>
              <!-- Card -->

            </div>
            @endforeach
            <!-- Grid column -->



          </div>
          <!-- Grid row -->

          <!-- Grid row -->
          <div class="row justify-content-center mb-4">

          </div>
          <!-- Grid row -->

        </section>
        <!-- Section: Last items -->

      </div>
      <!-- Content -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Main Container -->

@endsection
