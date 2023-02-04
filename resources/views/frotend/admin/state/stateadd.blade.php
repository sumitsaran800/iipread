@extends('frotend/admin/layouts/main')

@section('iip')

                               
    
<form action="{{$url}}" method="POST" enctype="multipart/form-data">

    @csrf
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">State</h1>
                   

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">State</h6>
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
                                <label for="" class="col-form-label"><h4>Add State</h4></label>
                                
                           <input type="text" id="country" class="form-control" value="{{@$getData['state_name']}}" name="state" placeholder="Country" >
                            
                             
                            </div>

                             <div class="form-group">
                                <label for="" class="col-form-label"><h4>Country</h4></label>
                                <select class="form-control" name="country">
                                   <option value="india">---Select---</option>
                                   @foreach($fetch as $key => $value)

                                   <option value="{{$value['id']}}">{{@$value->country_name}}</option>
                                   @endforeach
                                </select>
                             
                            </div>

                            



                            <button type="submit" name="btn" class="btn btn-primary" >{{$btn}}</button>



                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

</form>

          

           @endsection
              