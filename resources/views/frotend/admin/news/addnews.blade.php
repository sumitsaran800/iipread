@extends('frotend/admin/layouts/main')

@section('iip')

                               
    
<form action="{{$url}}" method="POST" enctype="multipart/form-data">

    @csrf
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Latest News</h1>

                    <input type="hidden" name="todayDate" value="{{$todayDate}}"
                   

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">News</h6>
                        </div>
                        <div class="card-body">
                            <div class="card-body">


                               
                              
                             <div class="form-group">
                                <label for="" class="col-form-label"><h4>News Title</h4></label>
                                
                             <input type="text" id="title" class="form-control" value="{{@$fetch->title}}" name="title" placeholder="News Title" >
                             
                            </div>

                             


                            <div class="form-group">
                                <label for="" class="col-form-label"><h4>News Description</h4></label>
                                
                             <textarea id="Description" class="form-control" rows="5"  name="des">
                             {{@$fetch->description}}</textarea>
                            
                             
                            </div>

                            <div class="form-group">
                                <label for="" class="col-form-label"><h4>Expire Date</h4></label>
                                
                             <input type="date" id="date" class="form-control" value="{{@$fetch->expire_date}}" name="Date" placeholder="News Expire Date" >
                             
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
                                       CKEDITOR.replace( 'des' );
                                 </script>
          

           @endsection
              