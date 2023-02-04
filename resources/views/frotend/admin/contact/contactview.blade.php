@extends('frotend/admin/layouts/main')

@section('iip')


    

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Gallery</h1>
                   

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Gallery Data </h6>
                           
                        </div>
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Key No</th>
                                             <th>Phone</th>
                                            <th>Mobile</th>
                                            <th>Email</th>
                                            <th>Website</th>
                                            <th>Address</th>
                                            <th>Map Link</th>
                                             <th>Action</th>
                                           
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                           <th>Key No</th>
                                             <th>Phone</th>
                                            <th>Mobile</th>
                                            <th>Email</th>
                                            <th>Website</th>
                                            <th>Address</th>
                                            <th>Map Link</th>
                                             <th>Action</th>
                                           
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                            
                                       @foreach($fetch as $key => $value)
                                       
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$value->phone}}</td>
                                             <td>{{$value->mobile}}</td>
                                            <td>{{$value->email}}</td>
                                             <td>{{$value->website}}</td>
                                            <td>{!!$value->address!!}</td>
                                             <td>{{$value->map_link}}</td>
                                           
                                          
                                             <td>
                                              <a href="{{route('admin.contact.edit',['id' => encrypt($value->id)])}}"><button type="button" name="Update" class="btn btn-primary">Update</button></a>
                                            </td>
                                           
                                        </tr>
                                       
                                       @endforeach
                                       
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