@extends('admin\layout')
@section('content')

<main>

    <div class="container-fluid">

      <!-- Section: Classic admin cards -->
      <section class="pb-3">

        <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">

            <!-- Card Primary -->
            <div class="card classic-admin-card primary-color">
              <div class="card-body">
                <div class="pull-right">
                  <i class="far fa-money-bill-alt"></i>
                </div>
                <p class="white-text">SALES</p>
                <h4 class="check">2000$</h4>
              </div>
              <div class="progress">
                <div class="progress-bar bg grey darken-3" role="progressbar" style="width: 25%" aria-valuenow="25"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <div class="card-body">
                <p>Better than last week (25%)</p>
              </div>
            </div>
            <!-- Card Primary -->

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">

            <!-- Card Yellow -->
            <div class="card classic-admin-card warning-color">
              <div class="card-body">
                <div class="pull-right">
                  <i class="fas fa-chart-line"></i>
                </div>
                <p>SUBSCRIPTIONS</p>
                <h4 class="check">200</h4>
              </div>
              <div class="progress">
                <div class="progress-bar bg grey darken-3" role="progressbar" style="width: 25%" aria-valuenow="25"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <div class="card-body">
                <p>Worse than last week (25%)</p>
              </div>
            </div>
            <!-- Card Yellow -->

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-xl-3 col-md-6 mb-md-0 mb-4">

            <!-- Card Blue -->
            <div class="card classic-admin-card light-blue lighten-1">
              <div class="card-body">
                <div class="pull-right">
                  <i class="fas fa-chart-pie"></i>
                </div>
                <p>TRAFFIC</p>
                <h4 class="check">20000</h4>
              </div>
              <div class="progress">
                <div class="progress-bar bg grey darken-4" role="progressbar" style="width: 75%" aria-valuenow="75"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <div class="card-body">
                <p>Better than last week (75%)</p>
              </div>
            </div>
            <!-- Card Blue -->

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-xl-3 col-md-6 mb-0">

            <!-- Card Red -->
            <div class="card classic-admin-card red accent-2">
              <div class="card-body">
                <div class="pull-right">
                  <i class="fas fa-chart-bar"></i>
                </div>
                <p>ORGANIC TRAFFIC</p>
                <h4 class="check">2000</h4>
              </div>
              <div class="progress">
                <div class="progress-bar bg grey darken-4" role="progressbar" style="width: 25%" aria-valuenow="25"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <div class="card-body">
                <p>Better than last week (25%)</p>
              </div>
            </div>
            <!-- Card Red -->

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

      </section>
      <!-- Section: Classic admin cards -->

      <!-- Section: Main panel -->
      <section class="mb-5">

        <!-- Card -->
        <div class="card card-cascade narrower">

          <!-- Section: Chart -->
          <section>

            <!-- Grid row -->
            <div class="row">

              <!-- Grid column -->
              <div class="col-xl-5 col-lg-12 mr-0 pb-2">

                <!-- Card image -->
                <div class="view view-cascade gradient-card-header light-blue lighten-1">
                  <h2 class="h2-responsive mb-0 font-weight-500">Sales</h2>
                </div>



              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-xl-7 col-lg-12 mb-4 pb-2">

                <!-- Chart -->
                <div class="view view-cascade gradient-card-header blue-gradient">

                  <canvas id="lineChart" height="175"></canvas>

                </div>

              </div>
              <!-- Grid column -->

            </div>
            <!-- Grid row -->



            <div class="card card-cascade narrower z-depth-0">

              <div
                class="view view-cascade gradient-card-header blue-gradient narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center">

                <div>
                  <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2"><i
                      class="fas fa-th-large mt-0"></i></button>
                  <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2"><i
                      class="fas fa-columns mt-0"></i></button>
                </div>

                <a href="" class="white-text mx-3">Admins</a>

                <div>
                  <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2"><i
                      class="fas fa-pencil-alt mt-0"></i></button>
                  <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2"><i
                      class="fas fa-eraser mt-0"></i></button>
                  <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2"><i
                      class="fas fa-info-circle mt-0"></i></button>
                </div>

              </div>
              <div class="row">
                <div class="col-md-4">
                    <input type="text" name="search" class="form-control" placeholder="search">
                </div>
                <div class="col-md-4">
                    <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-search"></i></button>
                    <a href="{{route('admin.admin.create')}}" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Add Admin</a>
                </div>
              </div>

              <div class="px-4">

                <div class="table-responsive">

                  <!--Table-->
                  <table class="table table-hover mb-0">

                    <!-- Table head -->
                    <thead>
                      <tr>
                        <th>
                          <input class="form-check-input" type="checkbox" id="checkbox">
                          <label for="checkbox" class="form-check-label mr-2 label-table"></label>
                        </th>
                        <th class="th-lg"><a>First Name <i class="fas fa-sort ml-1"></i></a></th>
                        <th class="th-lg"><a>Last Name<i class="fas fa-sort ml-1"></i></a></th>
                        <th class="th-lg"><a>Email<i class="fas fa-sort ml-1"></i></a></th>
                        <th class="th-lg"><a>Actions<i class="fas fa-sort ml-1"></i></a></th>
                      </tr>
                    </thead>
                    <!-- Table head -->

                    <!-- Table body -->
                    <tbody>
                        @foreach($users as $user)
                      <tr>
                        <th scope="row">
                          <input class="form-check-input" type="checkbox" id="checkbox1">
                          <label for="checkbox1" class="label-table"></label>
                        </th>
                        <td>{{$user->first_name}}</td>
                        <td>{{$user->last_name}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                            <div class='hidden-buttons inline'>
                            <a href="{{route('admin.admin.edit',$user->id)}}" class='btn btn-xs btn-primary'><i class="fa fa-edit"></i> edit</a>
                            <a href="{{route('admin.admin.delete',$user->id)}}" class='btn btn-xs btn-danger'><i class="fa fa-delete"></i> delete</a>
                            </div>
                        </td>
                      </tr>
                      @endforeach

                    </tbody>
                    <!-- Table body -->

                  </table>
                  <!-- Table -->

                </div>

                <hr class="my-0">

                <!-- Bottom Table UI -->
                <div class="d-flex justify-content-between">

                  <!-- Name -->
                  <select class="mdb-select colorful-select dropdown-primary md-form hidden-md-down">
                    <option value="" disabled>Rows number</option>
                    <option value="1" selected>5 rows</option>
                    <option value="2">25 rows</option>
                    <option value="3">50 rows</option>
                    <option value="4">100 rows</option>
                  </select>

                  <!-- Pagination -->
                  <nav class="my-4">
                    <ul class="pagination pagination-circle pg-blue mb-0">

                      <!--First-->
                      <li class="page-item disabled clearfix d-none d-md-block"><a class="page-link">First</a></li>

                      <!-- Arrow left -->
                      <li class="page-item disabled">
                        <a class="page-link" aria-label="Previous">
                          <span aria-hidden="true">&laquo;</span>
                          <span class="sr-only">Previous</span>
                        </a>
                      </li>

                      <!-- Numbers -->
                      <li class="page-item active"><a class="page-link">1</a></li>
                      <li class="page-item"><a class="page-link">2</a></li>
                      <li class="page-item"><a class="page-link">3</a></li>
                      <li class="page-item"><a class="page-link">4</a></li>
                      <li class="page-item"><a class="page-link">5</a></li>

                      <!-- Arrow right -->
                      <li class="page-item">
                        <a class="page-link" aria-label="Next">
                          <span aria-hidden="true">&raquo;</span>
                          <span class="sr-only">Next</span>
                        </a>
                      </li>

                      <!-- First -->
                      <li class="page-item clearfix d-none d-md-block"><a class="page-link">Last</a></li>

                    </ul>
                  </nav>
                  <!-- Pagination -->

                </div>
                <!-- Bottom Table UI -->

              </div>

            </div>

          </section>
          <!--Section: Table-->

        </div>
        <!-- Card -->

      </section>
      <!-- Section: Main panel -->

    </div>

  </main>

@endsection
