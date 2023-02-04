
 
		
 		@extends('frotend/layouts/main')

		@section('jiya')
			
		
 		<!-- middle portion with  links, new , banner and course starts here -->
 		<div class="middle-container">
 		
 			<!-- left part of the middle portion ends here -->
 			<!-- right part of the middle portion starts here -->
			<div class="middle-right enq-height">
						<div class="page-status">
							<h1>Course</h1>
						<h2><i onclick='window.location.href = "#" '> Home /</i> Course</h2>
						</div>
						<div class="mainwebsitecontent">
                            
                            <div>

                           <h3>{{$fetch->course_title}}</h3>

                           

                            </div>

                          <br> <hr><br>
                                
						  <h3 style="background: yellow; width:100px">RS : {{$fetch->course_price}}  </h3><br>
                          <div style="border: 3px solid blue; font-size:25px; color:black; background:pink; padding:10px">

						

                           {!!$fetch->course_description!!}

                          </div>
		 			
            	</div>
 			</div>
 			<!-- right part of the middle portion starts here -->
 			<div class="clear"></div>
 		</div>
 			<!-- middle portion with  links, new , banner and course ends here -->
 		@endsection	
 		
 
 