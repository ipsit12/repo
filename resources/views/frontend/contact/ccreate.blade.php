@extends('frontend.layout.main')

@section('main-section')
<div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
          <div class="card-img-left d-none d-md-flex">
            <!-- Background image for card set in CSS! -->
          </div>
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-light fs-5">  Register</h5>
            <form method="post" action="{{url('/ccreate/store')}}" enctype="multipart/form-data">
            @csrf
            
              <div class="form-floating mb-3">
                <input type="text" name="name" class="form-control" id="floatingInputUsername" placeholder="name" required autofocus>
                <label for="floatingInputUsername">Name</label>
              </div>
              <div class="form-floating mb-3">
                <input type="file"name="image" class="form-control" id="image" >
                <label for="floatingPasswordConfirm">image</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" name="description" class="form-control" id="floatingInputEmail" placeholder="uses">
                <label for="floatingInputEmail">description</label>
              </div>

              

              <!-- <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPasswordConfirm" placeholder="Confirm Password">
                <label for="floatingPasswordConfirm">Confirm Password</label>
              </div> -->
             

              <div class="d-grid mb-2">
                <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase" type="submit">Submit</button>
              </div>

              <!-- <a class="d-block text-center mt-2 small" href="#">Have an account? Sign In</a>

              <hr class="my-4"> -->

              <!-- <div class="d-grid mb-2">
                <button class="btn btn-lg btn-google btn-login fw-bold text-uppercase" type="submit">
                  <i class="fab fa-google me-2"></i> Sign up with Google
                </button>
              </div>

              <div class="d-grid">
                <button class="btn btn-lg btn-facebook btn-login fw-bold text-uppercase" type="submit">
                  <i class="fab fa-facebook-f me-2"></i> Sign up with Facebook
                </button>
              </div> -->

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection