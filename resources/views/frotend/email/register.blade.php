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

              <form action="" method="POST">
                @csrf

            

                <div class="form-outline mb-4">
                  <input type="password" id="form3Example4cg" name="password" value="{{@$fetch->password}}" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example4cg">Password</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" id="form3Example4cdg" name="confirm_password" value="{{@$fetch->password}}" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                </div>

              

                <div class="d-flex justify-content-center">
                  <button type="submit"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Update</button>
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

