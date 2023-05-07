@extends('front.layout')
@section('content')

<body class="product-v1 hidden-sn white-skin animated">

  <!-- Main Container -->
  <div class="container mt-5 pt-3">

    <!-- Section: Product detail -->
    <section id="productDetails" class="pb-5">

      <!-- News card -->
      <div class="card mt-5 hoverable">

        <div class="row mt-5">

          <div class="col-lg-6">

            <!-- Carousel Wrapper -->
            <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">

              <!-- Slides -->
              <!-- <div class="carousel-inner text-center text-md-left" role="listbox"> -->

                <div class="carousel-item active">

                  <img src="{{asset('front/img/'.$oneproduct[0]->image)}}" width="400" height="400" alt="image product">


                </div>

            </div>
            <!-- Carousel Wrapper -->

          </div>

          <div class="col-lg-5 mr-3 text-center text-md-left">

            <h2
              class="h2-responsive text-center text-md-left product-name font-weight-bold dark-grey-text mb-1 ml-xl-0 ml-4">

              <strong>{{$oneproduct[0]->name}}</strong>

            </h2>

            @if($oneproduct[0]->bestseller == '0')<span class="badge badge-danger product mb-4 ml-xl-0 ml-4">bestseller</span>@endif
            @if($oneproduct[0]->bestrated == '0')<span class="badge badge-primary product mb-4 ml-xl-0 ml-4">bestrated</span>@endif
            @if($oneproduct[0]->new == '0')<span class="badge badge-success product mb-4 ml-xl-0 ml-4">new</span>@endif
            @if($oneproduct[0]->sale == '0')<span class="badge badge-warning product mb-4 ml-xl-0 ml-4">sale</span>@endif
            <h3 class="h3-responsive text-center text-md-left mb-5 ml-xl-0 ml-4">

              <span class="red-text font-weight-bold">

                <strong>{{$oneproduct[0]->price}}</strong>

              </span>
            </h3>

            <!-- Accordion wrapper -->
            <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

              <!-- Accordion card -->
              <div class="card">

                <!-- Card header -->
                <div class="card-header" role="tab" id="headingOne1">

                  <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
                    aria-controls="collapseOne1">

                    <h5 class="mb-0">

                      Description

                      <i class="fas fa-angle-down rotate-icon"></i>

                    </h5>

                  </a>

                </div>

                <!-- Card body -->
                <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"
                  data-parent="#accordionEx">

                  <div class="card-body">{{$oneproduct[0]->desc}}</div>

                </div>

              </div>
              <!-- Accordion card -->

            </div>
            <!-- Accordion wrapper -->

            <!-- Add to Cart -->
            <section class="color">

              <div class="mt-5">

                <p class="grey-text">Choose your color</p>

                <div class="row text-center text-md-left">

                  <div class="col-md-4 col-12 ">

                    <!-- Radio group -->
                    <div class="form-group">

                      <input class="form-check-input" name="group100" type="radio" id="radio100" checked="checked">

                      <label for="radio100" class="form-check-label dark-grey-text">Blue</label>

                    </div>

                  </div>

                  <div class="col-md-4">

                    <!-- Radio group -->
                    <div class="form-group">

                      <input class="form-check-input" name="group100" type="radio" id="radio101">

                      <label for="radio101" class="form-check-label dark-grey-text">Orange</label>

                    </div>

                  </div>

                  <div class="col-md-4">

                    <!-- Radio group -->
                    <div class="form-group">

                      <input class="form-check-input" name="group100" type="radio" id="radio102">

                      <label for="radio102" class="form-check-label dark-grey-text">Red</label>

                    </div>

                  </div>

                </div>

                <div class="row mt-3 mb-4">

                  <div class="col-md-12 text-center text-md-left text-md-right">

                    <a href="/product/{id}/addtocart" class="btn btn-primary btn-rounded">

                      <i class="fas fa-cart-plus mr-2" aria-hidden="true"></i> Add to cart</a>

                  </div>

                </div>

              </div>

            </section>
            <!-- Add to Cart -->

          </div>

        </div>

      </div>

    </section>

    <!-- Section: Product detail -->
    <div class="divider-new">

      <h3 class="h3-responsive font-weight-bold blue-text mx-3">Product Reviews</h3>

    </div>

    <!-- Product Reviews -->
    <section id="reviews" class="pb-5">

      <!-- Main wrapper -->
      <div class="comments-list text-center text-md-left">

        <!-- First row -->
        <div class="row mb-5">

          <!-- Image column -->
          <div class="col-sm-2 col-12 mb-3">

            <img src="https://mdbootstrap.com/img/Photos/Avatars/img (8).jpg" alt="sample image"
              class="avatar rounded-circle z-depth-1-half">

          </div>
          <!-- Image column -->

          <!-- Content column -->
          <div class="col-sm-10 col-12">

            <a>

              <h5 class="user-name font-weight-bold">John Doe</h5>

            </a>

            <!-- Rating -->
            <ul class="rating">

              <li>

                <i class="fas fa-star blue-text"></i>

              </li>

              <li>

                <i class="fas fa-star blue-text"></i>

              </li>

              <li>

                <i class="fas fa-star blue-text"></i>

              </li>

              <li>

                <i class="fas fa-star blue-text"></i>

              </li>

              <li>

                <i class="fas fa-star blue-text"></i>

              </li>

            </ul>

            <div class="card-data">

              <ul class="list-unstyled mb-1">

                <li class="comment-date font-small grey-text">

                  <i class="far fa-clock-o"></i> 05/10/2015</li>

              </ul>

            </div>

            <p class="dark-grey-text article">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
              aliquip ex ea commodo consequat. Duis

              aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
              Excepteur

              sint occaecat cupidatat non proident.</p>

          </div>
          <!-- Content column -->

        </div>
        <!-- First row -->

        <!-- Second row -->
        <div class="row mb-5">

          <!-- Image column -->
          <div class="col-sm-2 col-12 mb-3">

            <img src="https://mdbootstrap.com/img/Photos/Avatars/img (30).jpg" alt="sample image"
              class="avatar rounded-circle z-depth-1-half">

          </div>
          <!-- Image column -->

          <!-- Content column -->
          <div class="col-sm-10 col-12">

            <a>

              <h5 class="user-name font-weight-bold">Lily Brown</h5>

            </a>

            <!-- Rating -->
            <ul class="rating">

              <li>

                <i class="fas fa-star blue-text"></i>

              </li>

              <li>

                <i class="fas fa-star blue-text"></i>

              </li>

              <li>

                <i class="fas fa-star blue-text"></i>

              </li>

              <li>

                <i class="fas fa-star blue-text"></i>

              </li>

              <li>

                <i class="fas fa-star blue-text"></i>

              </li>

            </ul>

            <div class="card-data">

              <ul class="list-unstyled mb-1">

                <li class="comment-date font-small grey-text">

                  <i class="far fa-clock-o"></i> 05/10/2015</li>

              </ul>

            </div>

            <p class="dark-grey-text article">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
              aliquip ex ea commodo consequat. Duis

              aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
              Excepteur

              sint occaecat cupidatat non proident.</p>

          </div>
          <!-- Content column -->

        </div>
        <!-- Second row -->

        <!-- Third row -->
        <div class="row mb-5">

          <!-- Image column -->
          <div class="col-sm-2 col-12 mb-3">

            <img src="https://mdbootstrap.com/img/Photos/Avatars/img (28).jpg" alt="sample image"
              class="avatar rounded-circle z-depth-1-half">

          </div>
          <!-- Image column -->

          <!-- Content column -->
          <div class="col-sm-10 col-12">

            <a>

              <h5 class="user-name font-weight-bold">Martha Smith</h5>

            </a>

            <!-- Rating -->
            <ul class="rating">

              <li>

                <i class="fas fa-star blue-text"></i>

              </li>

              <li>

                <i class="fas fa-star blue-text"></i>

              </li>

              <li>

                <i class="fas fa-star blue-text"></i>

              </li>

              <li>

                <i class="fas fa-star blue-text"></i>

              </li>

              <li>

                <i class="fas fa-star blue-text"></i>

              </li>

            </ul>

            <div class="card-data">

              <ul class="list-unstyled mb-1">

                <li class="comment-date font-small grey-text">

                  <i class="far fa-clock-o"></i> 05/10/2015</li>

              </ul>

            </div>

            <p class="dark-grey-text article">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
              aliquip ex ea commodo consequat. Duis

              aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
              Excepteur

              sint occaecat cupidatat non proident.</p>

          </div>
          <!-- Content column -->

        </div>
        <!-- Third row -->

      </div>
      <!-- Main wrapper -->

    </section>


  </div>
  <!-- Main Container -->
@endsection
