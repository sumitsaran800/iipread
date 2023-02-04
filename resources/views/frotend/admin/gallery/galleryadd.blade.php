@extends('frotend/admin/layouts/main')

@section('iip')


    
<form action="{{$url}}" method="POST" enctype="multipart/form-data">

    @csrf
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Gallery</h1>
                   

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Save  Gallery</h6>
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
                                <label for="" class="col-form-label"><h4>Image Title</h4></label>
                                
                             <input type="text" id="name" class="form-control" value="{{@$fetch['image_title']}}" name="image_title" placeholder="Image Title" >
                             
                            </div>


                             
                              <div class="form-group mb-3">
                                <label for="" class="col-form-label"><h4>Image</h4></label><br>
                                @if(@$fetch['image_name'] !="")
                             <input type="File" class="dropify" name="image" placeholder="Image Title" />
                              <img src="{{url('public/uploads',@@$fetch->image_name)}}" width="100px" height="100px" />
                              @else
                              <input type="File" class="dropify" name="image" placeholder="Image Title" />
                             @endif
                            </div>

                            <hr>


                            <button type="submit" name="btn" class="btn btn-primary" >{{$btn}}</button>



                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

</form>

          

           @endsection

                   </body>

                                 </html>