@extends('frotend/admin/layouts/main')

@section('iip')


    

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Country</h1>
                   

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Country Data </h6>
                           
                        </div>
                         <a href="{{route('admin.country')}}"><button class="btn btn-primary">ADD</button></a>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Key No</th>
                                            <th>Country Name</th>
                                            <th>state Name</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                           
                                           
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Key No</th>
                                             <th>Country Name</th>
                                              <th>state Name</th>
                                             <th>Status</th>
                                             <th>Action
                                             </th>
                                           
                                           
                                           
                                        </tr>
                                    </tfoot>
                                    <tbody>

                                        @foreach($fetch as $key => $value)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$value->country_name}}</td>
                                            <td>
                                                <ul>
                                                    @foreach($value['states'] as $state)
                                                     <li>{{$state->state_name}}</li>
                                                    @endforeach
                                                </ul>
                                            </td>
                                           
                                           <td>
                                                @if($value['status']==1)
                                                <a href="{{route('admin.country.status',['id' => encrypt($value['id'])])}}"><button class="btn btn-primary">Active</button></a>
                                                @else 
                                                 <a href="{{route('admin.country.status',['id' => encrypt($value['id'])])}}"><button class="btn btn-danger">InActive</button></a>
                                                @endif
                                            </td>
                                             <td>
                                               <a href="{{route('admin.country.delete',['id' => encrypt($value['id'])])}}"> <button type="button" class="btn btn-danger" >Delete</button></a>


                                                <a href="{{route('admin.country.edit',['id' => encrypt($value['id'])])}}"><button type="button" name="delete" class="btn btn-primary">Update</button></a>
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