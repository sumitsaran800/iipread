<html>
    <head>
        <title>{{$title}}</title>

        <link rel="stylesheet" type="text/css" href="{{url('public/css/sb-admin-2.min.css')}}" />
    </head>
<body style="background-color: #9A616D;">
<section class="vh-100" >
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
           
            <div class="col-md-6 col-lg-12 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

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

                 

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;"><a href="{{route('frotend.homepage')}}" >Sign into your account</h5></a>

                  <div class="form-outline mb-5">
                    <input type="email" id="form2Example17" name="email" value="{{old('email')}}" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example17">Email address</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="form2Example27" name="password" value="{{old('password')}}" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example27">Password</label>
                  </div>

                  <div class="pt-1 mb-4">
                    <button class="btn btn-dark btn-lg btn-block" type="submit">Login</button>
                    
                   <a href="{{route('frotend.google.login')}}"> <button class="btn btn-lg btn-block btn-primary" style="background-color: #dd4b39;"
              type="button"><i class="fab fa-google me-1"></i> Sign in with google</button></a>
                  </div>

                  <a class="small text-muted" href="{{route('admin.user.forget')}}">Forgot password?</a>
                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="{{route('admin.fortend.register')}}"
                      style="color: blue;">Register here</a></p>
                     
                  <a href="#!" class="small text-muted">Terms of use.</a>
                  <a href="#!" class="small text-muted">Privacy policy</a>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>