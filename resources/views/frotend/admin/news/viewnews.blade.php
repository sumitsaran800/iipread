@extends('frotend/admin/layouts/main')

@section('iip')


    

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">News View</h1>
                   

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">News View </h6>
                           
                        </div>
                         <a href="{{route('frotend.news')}}"><button class="btn btn-primary">Add</button></a>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Key No</th>
                                             <th>News Title</th>
                                             <th>News Description</th>
                                             <th>News Expire Date</th>
                                             <th>Status</th>
                                             <th>Action</th>
                                           
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Key No</th>
                                             <th>News Title</th>
                                             <th>News Description</th>
                                             <th>News Expire Date</th>
                                             <th>Status</th>
                                             <th>Action</th>
                                           
                                           
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                            
                                       @foreach($fetch as $key => $value)
                                       
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$value['title']}}</td>
                                            <td>{!!$value['description']!!}</td>
                                            <td>{{$value['expire_date']}}</td>
                                            <td>
                                                @if($value['news_status']==1)

                                                <a href="{{route('frotend.news.status',['id' => encrypt($value['id'])])}}"><button class="btn btn-primary" type="submit">Active</button> </a>

                                                @else 

                                                <a href="{{route('frotend.news.status',['id' => encrypt($value['id'])])}}"><button class="btn btn-danger" type="submit">Inactive</button></a>

                                                @endif
                                            </td>
                                            
                                          
                                             <td>
                                               <a href="{{route('frotend.news.delete',['id' => encrypt($value['id'])])}}"> <button type="button" class="btn btn-danger" >Delete</button></a>


                                                <a href="{{route('frotend.news.edit',['id' => encrypt($value['id'])])}}"><button type="button" name="delete" class="btn btn-primary">Update</button></a>
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