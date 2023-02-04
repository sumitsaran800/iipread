
		
 		@extends('frotend/layouts/main')

		@section('jiya')
			
 		<!-- middle portion with  links, new , banner and course starts here -->
 		<div class="middle-container">
 		
 			<!-- left part of the middle portion ends here -->
 			<!-- right part of the middle portion starts here -->
			<div class="middle-right enq-height">
						<div class="page-status">
							<h1>News</h1>
						<h2><i onclick='window.location.href = "{{route("frotend.homepage")}}" '> Home /</i> News</h2>
						</div>
						<div class="mainwebsitecontent">
                            
                            <div>

                           <h3>{{$fetch->title}}</h3>

                           

                            </div>

                          <br> <hr><br>

                          <div>

                           {!!$fetch->description!!}

                          </div>
		 			
            	</div>
 			</div>
 			<!-- right part of the middle portion starts here -->
 			<div class="clear"></div>
 		</div>
 			<!-- middle portion with  links, new , banner and course ends here -->
 		@endsection	
 		
 
 