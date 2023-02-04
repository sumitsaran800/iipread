@extends('frotend/admin/layouts/main')

@section('iip')


    
<form action="{{$url}}" method="POST" enctype="multipart/form-data">

    @csrf
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Course</h1>
                   

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">{{$heading}}</h6>
                        </div>
                        <div class="card-body">
                            <div class="card-body">


                               
                              
                              <div class="form-group mb-2">
                                <label for="" class="col-form-label"><h4>Course Name</h4></label>
                                
                             <input type="text" id="name" class="form-control" value="{{@$fetch->course_title}}" name="name" placeholder="Course Name" >
                             
                            </div>

                             
                              <div class="row mb-2">

                                <div class="col">
                                <label for="" class="col-form-label"><h4>Course Price</h4></label>
                                
                             <input type="number" id="price" class="form-control" value="{{@$fetch->course_price}}" name="course_price" placeholder="0"  >

                                </div>
                             
                                 <div class="col">
                                <label for="" class="col-form-label"><h4>Course Color</h4></label>
                                
                             <input type="color" id="color" class="form-control" value="{{@$fetch->course_color}}" name="course_color" placeholder=""  >

                                </div>

                            </div>



                              <div class="form-group mb-3">
                                <label for="" class="col-form-label"><h4>Course Logo</h4></label><br>
                            
                              <input type="File" class="dropify" name="logo" placeholder="Image Title" />

                              @if(@$fetch['course_logo']!="")
                              <img src="{{url('public/upload/course',@$fetch->course_logo)}}" width="100px" height="100px" />
                            @endif
                            </div>


                              <div class="form-group">
                                <label for="" class="col-form-label"><h4>Course Description</h4></label>
                                
                             <textarea id="about" class="form-control" rows="5"  name="course_dec">{{@$fetch->course_description}}</textarea>
                            
                             
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
                                       CKEDITOR.replace( 'about' );
                                 </script>

          

           @endsection

                   </body>

                                 </html>