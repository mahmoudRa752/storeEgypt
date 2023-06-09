@extends('front.layout')
@section('content')



  <!-- Main Layout -->
  <main>

    <!-- Main Container -->
    <div class="container">

      <section class="section my-5 pb-5">

        <!-- Shopping Cart table -->
        <div class="table-responsive">

          <table class="table product-table table-cart-v-1">

            <!-- Table head -->
            <thead>

              <tr>

                <th></th>

                <th class="font-weight-bold">

                  <strong>Product</strong>

                </th>

                <th class="font-weight-bold">

                  <strong>Color</strong>

                </th>

                <th></th>

                <th class="font-weight-bold">

                  <strong>Price</strong>

                </th>

                <th class="font-weight-bold">

                  <strong>QTY</strong>

                </th>

                <th class="font-weight-bold">

                  <strong>Amount</strong>

                </th>

                <th></th>

              </tr>

            </thead>
            <!-- Table head -->

            <!-- Table body -->
            <tbody>

              <!-- First row -->
              <tr>

                <th scope="row">

                  <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/13.jpg" alt=""
                    class="img-fluid z-depth-0">

                </th>

                <td>

                  <h5 class="mt-3">

                    <strong>iPhone</strong>

                  </h5>

                  <p class="text-muted">Apple</p>

                </td>

                <td>White</td>

                <td></td>

                <td>$800</td>

                <td class="text-center text-md-left">

                  <span class="qty">1 </span>

                  <div class="btn-group radio-group ml-2" data-toggle="buttons">

                    <label class="btn btn-sm btn-primary btn-rounded">

                      <input type="radio" name="options" id="option1">&mdash;

                    </label>

                    <label class="btn btn-sm btn-primary btn-rounded">

                      <input type="radio" name="options" id="option2">+

                    </label>

                  </div>

                </td>

                <td class="font-weight-bold">

                  <strong>$800</strong>

                </td>

                <td>

                  <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top"
                    title="Remove item">X

                  </button>

                </td>

              </tr>
              <!-- First row -->

              <!-- Second row -->
              <tr>

                <th scope="row">

                  <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/6.jpg" alt=""
                    class="img-fluid z-depth-0">

                </th>

                <td>

                  <h5 class="mt-3">

                    <strong>Headphones</strong>

                  </h5>

                  <p class="text-muted">Sony</p>

                </td>

                <td>Red</td>

                <td></td>

                <td>$200</td>

                <td class="text-center text-md-left">

                  <span class="qty">3 </span>

                  <div class="btn-group radio-group ml-2" data-toggle="buttons">

                    <label class="btn btn-sm btn-primary btn-rounded">

                      <input type="radio" name="options" id="option1">&mdash;

                    </label>

                    <label class="btn btn-sm btn-primary btn-rounded">

                      <input type="radio" name="options" id="option2">+

                    </label>

                  </div>

                </td>

                <td class="font-weight-bold">

                  <strong>$600</strong>

                </td>

                <td>

                  <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top"
                    title="Remove item">X

                  </button>

                </td>

              </tr>
              <!-- Second row -->

              <!-- Third row -->
              <tr>

                <th scope="row">

                  <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/1.jpg" alt=""
                    class="img-fluid z-depth-0">

                </th>

                <td>

                  <h5 class="mt-3">

                    <strong>iPad Pro</strong>

                  </h5>

                  <p class="text-muted">by FifeSteps</p>

                </td>

                <td>Gold</td>

                <td></td>

                <td>$600</td>

                <td class="text-center text-md-left">

                  <span class="qty">2 </span>

                  <div class="btn-group radio-group ml-2" data-toggle="buttons">

                    <label class="btn btn-sm btn-primary btn-rounded">

                      <input type="radio" name="options" id="option1">&mdash;

                    </label>

                    <label class="btn btn-sm btn-primary btn-rounded">

                      <input type="radio" name="options" id="option2">+

                    </label>

                  </div>

                </td>

                <td class="font-weight-bold">

                  <strong>$1200</strong>

                </td>

                <td>

                  <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top"
                    title="Remove item">X

                  </button>

                </td>

              </tr>
              <!-- Third row -->

              <!-- Fourth row -->
              <tr>

                <td colspan="3"></td>

                <td>

                  <h4 class="mt-2">

                    <strong>Total</strong>

                  </h4>

                </td>

                <td class="text-right">

                  <h4 class="mt-2">

                    <strong>$2600</strong>

                  </h4>

                </td>

                <td colspan="3" class="text-right">

                  <button type="button" class="btn btn-primary btn-rounded">Complete purchase

                    <i class="fas fa-angle-right right"></i>

                  </button>

                </td>

              </tr>
              <!-- Fourth row -->

            </tbody>
            <!-- Table body -->

          </table>

        </div>
        <!-- Shopping Cart table -->

      </section>

    </div>
    <!-- Main Container -->

  </main>
  <!-- Main Layout -->




@endsection
