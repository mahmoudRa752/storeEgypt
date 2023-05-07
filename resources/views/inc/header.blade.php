<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="icon" type="image/jpg" sizes="32x32" href="../../../public/front/img/tabicon.jpg">
  <title>Store Masr</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="{{ asset('front/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="{{ asset('front/css/mdb.min.css') }}" rel="stylesheet">


  @yield('stlye')


</head>

<body class="homepage-v2 hidden-sn white-skin animated">
  <!-- Navigation -->
  <header>

    <!-- Sidebar navigation -->
    <ul id="slide-out" class="side-nav custom-scrollbar">


      <!-- Search Form -->
      <li>

        <form class="search-form" role="search">

          <div class="form-group md-form mt-0 pt-1 waves-light">

            <input type="text" class="form-control" placeholder="Search">

          </div>

        </form>

      </li>
      <!-- Search Form -->

      <!-- Side navigation links -->
      <li>

        <ul class="collapsible collapsible-accordion">

          <li><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-shopping-cart"></i> Cart page<i
                class="fas fa-angle-down rotate-icon"></i></a>

            <div class="collapsible-body">

              <ul>

                <li><a href="{{ asset('front/cart') }}/cart-v1.html" class="waves-effect">Cart V.1</a>

                </li>

                <li><a href="{{ asset('front/cart') }}/cart-v2.html" class="waves-effect">Cart V.2</a>

                </li>

              </ul>

            </div>

          </li>

          <li><a class="collapsible-header waves-effect arrow-r"><i class="far fa-hand-pointer"></i> Category page<i
                class="fas fa-angle-down rotate-icon"></i></a>

            <div class="collapsible-body">

              <ul>

                <li><a href="{{ asset('front/category') }}/category-v1.html" class="waves-effect">Category V.1</a>

                </li>

                <li><a href="{{ asset('front/category') }}/category-v2.html" class="waves-effect">Category V.2</a>

                </li>

                <li><a href="{{ asset('front/category') }}/category-v3.html" class="waves-effect">Category V.3</a>

                </li>

                <li><a href="{{ asset('front/category') }}/category-v4.html" class="waves-effect">Category V.4</a>

                </li>

              </ul>

            </div>

          </li>

          <li><a class="collapsible-header waves-effect arrow-r"><i class="far fa-bookmark"></i> Homepage<i
                class="fas fa-angle-down rotate-icon"></i></a>

            <div class="collapsible-body">

              <ul>

                <li><a href="../homepage/homepage-v1.html" class="waves-effect">Homepage V.1</a>

                </li>

                <li><a href="../homepage/homepage-v2.html" class="waves-effect">Homepage V.2</a>

                </li>

                <li><a href="../homepage/homepage-v3.html" class="waves-effect">Homepage V.3</a>

                </li>

              </ul>

            </div>

          </li>

          <li><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-camera-retro"></i> Product page<i
                class="fas fa-angle-down rotate-icon"></i></a>

            <div class="collapsible-body">

              <ul>

                <li><a href="../product/product-v1.html" class="waves-effect">Product V.1</a>

                </li>

                <li><a href="../product/product-v2.html" class="waves-effect">Product V.2</a>

                </li>

              </ul>

            </div>

          </li>

          <li><a href="../contact/contact.html" class="collapsible-header waves-effect"><i class="fas fa-envelope"></i>
              Contact</a></li>

        </ul>

      </li>

      <!-- Side navigation links -->
      <div class="sidenav-bg mask-strong"></div>

    </ul>
    <!-- Sidebar navigation -->

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg  navbar-light scrolling-navbar white">

      <div class="container">

        <!-- SideNav slide-out button -->
        <div class="float-left mr-2">

          <a href="#" data-activates="slide-out" class="button-collapse"><i class="fas fa-bars"></i></a>

        </div>

        <a class="navbar-brand font-weight-bold" href="{{route('frontHome')}}"><strong>STORE MASR</strong><img src="{{asset('../../../public/front/img/techs.jpg')}}" sizes="32x32" alt=""></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
          aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">

          <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent-4">

          <ul class="navbar-nav ml-auto">

            <li class="nav-item">

              <a class="nav-link dark-grey-text font-weight-bold" href="{{route('front.contact')}}"><i class="fas fa-envelope blue-text"></i>
                Contact <span class="sr-only">(current)</span></a>

            </li>

            <li class="nav-item ml-3">

              <a class="nav-link dark-grey-text font-weight-bold" href="{{route('front.setting')}}"><i class="fas fa-cog blue-text"></i>
                Settings</a>

            </li>

            <li class="nav-item dropdown ml-3">

              <a class="nav-link dropdown-toggle dark-grey-text font-weight-bold" id="navbarDropdownMenuLink-4"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user blue-text"></i>
                Profile </a>

              <div class="dropdown-menu dropdown-menu-right dropdown-cyan" aria-labelledby="navbarDropdownMenuLink-4">

                <a class="dropdown-item waves-effect waves-light" href="{{route('front.profile',2)}}">My account</a>

                <a class="dropdown-item waves-effect waves-light" href="{{route('front.login')}}">Log out</a>

              </div>

            </li>

          </ul>

        </div>

      </div>

    </nav>
    <!-- Navbar -->

  </header>
  <!-- Navigation -->

  <!-- Mega menu -->
  <div class="container mt-0 pt-3">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark primary-color mt-5">

      <!-- Navbar brand -->
      <a class="font-weight-bold white-text mr-4" href="{{route('cats')}}">Categories</a>

      <!-- Collapse button -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1"
        aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"><span
          class="navbar-toggler-icon"></span></button>

      <!-- Collapsible content -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent1">

        <!-- Links -->
        <ul class="navbar-nav mr-auto">
            @foreach($cats as $cat)
          <li class="nav-item dropdown mega-dropdown active">

            <a href="{{route('front.onecat',$cat->id)}}" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink1" data-toggle="dropdown">{{$cat->name}}</a>

            <div class="dropdown-menu mega-menu v-2 row z-depth-1 white" aria-labelledby="navbarDropdownMenuLink1">

              <div class="row mx-md-4 mx-1">

                <div class="col-md-6 col-xl-3 sub-menu my-xl-5 mt-5 mb-4">

                  <h6 class="sub-title text-uppercase font-weight-bold blue-text">Brand</h6>

                  <ul class="caret-style pl-0">

                    @foreach($brands as $brand)
                        @if($brand->cat_id == $cat->id)
                            <li class=""><a class="menu-item mb-0" href="{{route('productByBrand',$brand->brand)}}">{{$brand->brand}}</a></li>
                        @endif
                    @endforeach


                  </ul>

                </div>



              </div>

            </div>

          </li>
            @endforeach

        </ul>
        <!-- Links -->

        <!-- Search form -->
        <form class="search-form" method="post" action="" role="search">

          <div class="form-group md-form my-0 waves-light">

            <input type="text" class="form-control" placeholder="Search"><button type="submit"><i class="fas fa-search"></i></button>

          </div>

        </form>

      </div>
      <!-- Collapsible content -->

    </nav>
    <!-- Navbar -->

  </div>
  <!-- Mega menu -->
