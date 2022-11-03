<!doctype html>
<html lang="en">

<head>
  <title>Customer Registration</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <style>
    .gradient-custom {
      /* fallback for old browsers */
      background: #f093fb;

      /* Chrome 10-25, Safari 5.1-6 */
      background: -webkit-linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1));

      /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
      background: linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1))
    }

    .card-registration .select-input.form-control[readonly]:not([disabled]) {
      font-size: 1rem;
      line-height: 2.15;
      padding-left: .75em;
      padding-right: .75em;
    }

    .card-registration .select-arrow {
      top: 13px;
    }
  </style>
</head>

<body>

  <section class="vh-100 gradient-custom">

    <div class="container py-5 h-100">
      <div class="row justify-content-center align-items-center h-100">
        <div class="col-12 col-lg-9 col-xl-7">
          <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
            <div class="card-body p-4 p-md-5">
              <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Customer Registration Form</h3>
              <div class="row">
                <div class="col-md-6 mb-4">
                  <form action="{{url('/')}}/" method="post">
                    @csrf
                    <div class="form-outline">
                      <input type="text" name="name" id="name" class="form-control form-control-lg" />
                      <label class="form-label" for="Name">Name</label>
                      <span class="text-danger">
                        @error('name')
                        {{$message}}
                        @enderror
                      </span>
                    </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="email" id="email" name="email" class="form-control form-control-lg" />
                    <label class="form-label" for="email"> Email</label>
                    <span class="text-danger">
                      @error('email')
                      {{$message}}
                      @enderror
                    </span>
                  </div>

                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="password" name="password" id="password" class="form-control form-control-lg" />
                    <label class="form-label" for="password">Password</label>
                    <span class="text-danger">
                      @error('pasword')
                      {{$message}}
                      @enderror
                    </span>
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="password" name="password_confirmation" id="confirmPassword" class="form-control form-control-lg" />
                    <label class="form-label" for="">Confirm Password</label>
                  </div>
                  <span class="text-danger">
                    @error('password_confirmation')
                    {{$message}}
                    @enderror
                  </span>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="address" name="address" id="address" class="form-control form-control-lg" />
                    <label class="form-label" for="">Address</label>
                  </div>
                  <span class="text-danger">
                    @error('address')
                    {{$message}}
                    @enderror
                  </span>
                </div>
                <div class="col-md-6 mb-4 d-flex align-items-center">

                  <div class="form-outline datepicker w-100">
                    <input type="text" name="dob" class="form-control form-control-lg" id="birthdayDate" />
                    <label for="birthdayDate" class="form-label">Birthday</label>
                    <span class="text-danger">
                      @error('dob')
                      {{$message}}
                      @enderror
                    </span>
                  </div>
                </div>


                <div class="mt-4 pt-2">
                  <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </form>
  </section>
</body>

</html>