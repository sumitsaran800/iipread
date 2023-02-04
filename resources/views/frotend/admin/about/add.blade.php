@extends('frotend/admin/layouts/main')

@section('iip')

                               
    
<form action="{{$url}}" method="POST" enctype="multipart/form-data">

    @csrf
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Admin About</h1>
                   

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">About</h6>
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
                                <label for="" class="col-form-label"><h4>About Content</h4></label>
                                
                             <textarea id="about" class="form-control" rows="5"  name="about">{{@$fetch['about_content']}}
                             </textarea>
                            
                             
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
              