@extends('frotend/admin/layouts/main')

@section('iip')

                               
    
<form action="{{$url}}" method="POST" enctype="multipart/form-data">

    @csrf
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Admin Contact</h1>
                   

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Contact</h6>
                        </div>
                        <div class="card-body">
                            <div class="card-body">


                                 <div class="row mb-2">

                                <div class="col">
                                <label for="" class="col-form-label"><h4>Phone</h4></label>
                                
                             <input type="number" id="phone" class="form-control" value="{{@$fetch->phone}}" name="phone" placeholder=""  >

                                </div>
                             
                                 <div class="col">
                                <label for="" class="col-form-label"><h4>Mobile</h4></label>
                                
                             <input type="number" id="number" class="form-control" value="{{$fetch->mobile}}" name="mobile" placeholder=""  >

                                </div>

                            </div>

                              
                              <div class="row mb-2">

                                <div class="col">
                                <label for="" class="col-form-label"><h4>Email</h4></label>
                                
                             <input type="email" id="email" class="form-control" value="{{$fetch->email}}" name="email" placeholder=""  >

                                </div>
                             
                                 <div class="col">
                                <label for="" class="col-form-label"><h4>Website</h4></label>
                                
                             <input type="link" id="website" class="form-control" value="{{$fetch->website}}" name="website" placeholder=""  >

                                </div>

                            </div>


                           

                            <div class="form-group">
                                <label for="" class="col-form-label"><h4>Address</h4></label>
                                
                             <textarea type="number" id="about" rows="5" class="form-control"   name="address">{{$fetch->address}}</textarea>
                            
                             
                            </div>

                            <div class="form-group">
                                <label for="" class="col-form-label"><h4>Map Link</h4></label>
                                
                             <input type="text" id="about" class="form-control" value="{{$fetch->map_link}}"  name="maplink" />
                            
                             
                            </div>
                            



                            <button type="submit" name="btn" class="btn btn-primary" >{{$btn}}</button>



                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

</form>
<script src="https://cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
                                  <script>  
                                       CKEDITOR.replace( 'address' );
                                 </script>
          

           @endsection
              