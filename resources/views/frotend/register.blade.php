<!-- CSS only -->
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> --}}
<html>
    <head>

        <link rel="stylesheet" type="text/css" href="{{url('public/css/sb-admin-2.min.css')}}" />
    </head>
<body style="background-color: pink;">
  
  <div class="mask d-flex align-items-center h-100 gradient-custom-3" >
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>

              
                                @if (count($errors) > 0)
                             <div class = "alert alert-danger">
                        <ul>
                                    @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                               @endforeach
                            </ul>
                                 </div>
                                       @endif

              <form action="{{$url}}" method="POST">
                @csrf

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example1cg" name="name" value="{{@$fetch->name}}" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example1cg">Your Name</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="email" id="form3Example3cg" name="email" value="" placeholder="{{@$fetch->email}}" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example3cg">Your Email</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" id="form3Example4cg" name="password" value="{{@$fetch->password}}" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example4cg">Password</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" id="form3Example4cdg" name="confirm_password" value="{{@$fetch->password}}" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                </div>

                <div class="form-check d-flex justify-content-center mb-5">
                  <input type="checkbox" name="agree" id="" />
                  <label class="form-check-label" for="form2Example3g">

                      I agree all statements in <u>Terms of service</u>
                  </label>
                </div>

                <div class="d-flex justify-content-center">
                  <button type="submit"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">{{$btn}}</button>
                    
                </div><br>

                  <a href="{{route('frotend.google.login')}}"> <button class="btn btn-lg btn-block btn-primary" style="background-color: #dd4b39;"
              type="button"><i class="fab fa-google me-1"></i> Sign in with google</button></a>

                   <div class="d-flex justify-content-center">
                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="{{route('admin.fortend.login')}}"
                    class="" style="color: blue;"><u>Login here</u></a></p>
                   </div>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>

