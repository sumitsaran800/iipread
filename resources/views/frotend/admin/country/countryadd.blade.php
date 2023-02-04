@extends('frotend/admin/layouts/main')

@section('iip')

                               
    
<form action="{{$url}}" method="POST" enctype="multipart/form-data">

    @csrf
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Country</h1>
                   

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Country</h6>
                        </div>
                        <div class="card-body">
                            <div class="card-body">

                       @if (count($errors) > 0)
                      <div class = "alert alert-danger">
                        <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                  @endforeach
             </ul>
              </div>
               @endif
                               
                              
                              <div class="form-group">
                                <label for="" class="col-form-label"><h4>Add Country</h4></label>
                                
                           <input type="text" id="country" class="form-control" value="{{@$fetch->country_name}}" name="country" placeholder="Country" >
                            
                             
                            </div>

                            



                            <button type="submit" name="btn" class="btn btn-primary" >{{$btn}}</button>



                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

</form>

          

           @endsection
              