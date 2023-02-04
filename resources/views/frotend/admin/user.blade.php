@extends('frotend/admin/layouts/main')

@section('iip')


    

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">User</h1>
                   

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">User Details </h6>

                            
                                @if (count($errors) > 0)
                             <div class = "alert alert-danger">
                        <ul>
                                    @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                               @endforeach
                            </ul>
                                 </div>
                                       @endif
                           
                        </div>
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                             <th>Email</th>
                                           <th>Password</th>
                                             <th>Action</th>
                                           
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                           <th>Name</th>
                                             <th>Email</th>
                                           <th>Password</th>
                                             <th>Action</th>
                                           
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                            
                                     
                                       
                                        <tr>
                                            <td>{{$fetch->name}}</td>
                                            <td>{{$fetch->email}}</td>
                                            <td>{{$fetch->password}}</td>
                                            
                                           
                                          
                                             <td>
                                              <a href="{{route('admin.fortend.user.edit',['id' => encrypt(session('id'))])}}"><button type="button" name="Update" class="btn btn-primary">Update</button></a>
                                            </td>
                                           
                                        </tr>
                                       
                                     
                                       
                                    </tbody>
                                </table>
                           
                               
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->


           @endsection


</body>

</html>