@extends('frotend/admin/layouts/main')

@section('iip')


    

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">State</h1>
                   

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">State Data </h6>
                           
                        </div>
                         <a href="{{route('admin.state.add')}}"><button class="btn btn-primary">ADD</button></a>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Key No</th>
                                            <th>State Name</th>
                                            <th>Country Name</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                           
                                           
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Key No</th>
                                            <th>State Name</th>
                                             <th>Country Name</th>
                                             <th>Status</th>
                                             <th>Action
                                             </th>
                                           
                                           
                                           
                                        </tr>
                                    </tfoot>
                                    <tbody>

                                        @foreach($fetch as $key => $value)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$value->state_name}}</td>
                                             <td>{{$value->country->country_name}}</td>
                                           
                                           <td>
                                                @if($value['state_status']==1)
                                                <a href="{{route('admin.state.status',['id' => encrypt($value->id)])}}"><button class="btn btn-primary">Active</button></a>
                                                @else 
                                                 <a href="{{route('admin.state.status',['id' => encrypt($value->id)])}}"><button class="btn btn-danger">InActive</button></a>
                                                @endif
                                            </td>
                                             <td>
                                               <a href="{{route('admin.state.delete',['id' => encrypt($value['id'])])}}"> <button type="button" class="btn btn-danger" >Delete</button></a>


                                                <a href="{{route('admin.state.edit',['id' => encrypt($value->id)])}}"><button type="button" name="delete" class="btn btn-primary">Update</button></a>
                                            </td>
                                           
                                        </tr>

                                        @endforeach
                                       
                                    </tbody>
                                </table>

                               {{$fetch->links()}}
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