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
                         <a href="{{route('frotend.admin.add.course')}}"><button class="btn btn-primary">Add</button></a>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Key No</th>
                                            <th>Course</th>
                                            <th>Description</th>
                                            <th>Color</th>
                                            <th>Image</th>
                                            <th>Course Price</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                           
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                           <th>Key No</th>
                                            <th>Course</th>
                                            <th>Description</th>
                                            <th>Color</th>
                                            <th>Image</th>
                                            <th>Course Price</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                           
                                           
                                        </tr>
                                    </tfoot>
                                    <tbody>

                                        @foreach($fetch as $key => $value)
                                       
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$value->course_title}}</td>
                                            <td>{!!$value['course_description']!!}</td>
                                            <td>{{$value['course_color']}}</td>
                                            <td>
                                                <img src="{{url('public/upload/course',$value['course_logo'])}}" width="100px" height="100px" />
                                            </td>
                                             <td>{!!$value['course_price']!!}</td>
                                            <td>
                                                @if($value['status']==1)
                                                <a href="{{route('frotend.admin.add.course.status',['id' => encrypt($value['id'])])}}"><button class="btn btn-primary">Active</button></a>
                                                @else 
                                                 <a href="{{route('frotend.admin.add.course.status',['id' => encrypt($value['id'])])}}"><button class="btn btn-danger">InActive</button></a>
                                                @endif
                                            </td>
                                             <td>
                                               <a href="{{route('frotend.admin.add.course.delete',['id' => encrypt($value['id'])])}}"> <button type="button" class="btn btn-danger" >Delete</button></a>


                                                <a href="{{route('frotend.admin.add.course.edit',['id' => encrypt($value['id'])])}}"><button type="button" name="delete" class="btn btn-primary">Update</button></a>
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