@extends('frotend/admin/layouts/main')

@section('iip')


    

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Enquiry</h1>
                   

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Enquiry View </h6>
                           
                        </div>
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Key No</th>
                                            <th>User Details</th>
                                            <th>Address Details</th>
                                            <th>Enquiry</th>
                                            <th>Course</th>
                                            <th>Date</th>
                                           
                                           
                                           
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                           <th>Key No</th>
                                            <th>User Details</th>
                                            <th>Address Details</th>
                                            <th>Enquiry</th>
                                            <th>Course</th>
                                            <th>Date</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>

                                        @foreach($fetch as $key => $value)
                                       
                                        <tr>

                                          <td>{{$key+1}}</td>

                                          <td>
                                             <table class="table"  >
                                       <tr>
                                        <td>  Name :  </td>
                                        <td>{{$value->name}} </td>
                                           
                                       </tr>
                                       <tr>
                                         <td> Email: </td>
                                         <td> {{$value->email}}  </td>
                                       </tr>
                                       <tr>
                                          <td> Contact: </td>
                                          <td> {{$value->contact}} </td>
                                       </tr>
                                           
                                         <td> Gender:</td>
                                         <td>
                                           @if($value['gender']=='F')
                                           FeMale 
                                           @elseif($value['gender']=='M')
                                           Male 

                                           @endif
                                          </td>
                                       </tr>
                                             </table>
                                          </td>
                                                
                                           <td>
                                            <table class="table">
                                            <tr>
                                         <td> Address: </td> 
                                         <td> {{$value->adress}}  </td>
                                            </tr>
                                            <tr>
                                          <td>State : </td> <td> {{$value->state->state_name}} </td>
                                        </tr>
                                        <tr>
                                          <td> Country: </td>
                                            <td> {{$value->country->country_name}} </td>
                                    </tr>
                                            </table>
                                          </td>
                                          
                                          <td>{{$value->enquiry}}</td>

                                          <td>{{$value->course->course_title}}</td>

                                          <td>{{$value->created_at}}</td>
                                           
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