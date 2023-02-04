 
 	
@extends('frotend/layouts/main')

		@section('jiya')
 	
		
 		
			
		
 		<!-- middle portion with  links, new , banner and course starts here -->
 		<div class="middle-container">
 		
 			<!-- left part of the middle portion ends here -->
 			<!-- right part of the middle portion starts here -->
 			<div class="middle-right">
 					<div class="page-status">
 						<h1>About Us:</h1>		
 						<h2><i onclick='window.location.href = "{{route("frotend.homepage")}}" '> Home /</i> About Us:</h2>
 					</div>
 					<div class="about-content">
 						{!!$fetch->about_content!!}	
 					</div>
 			</div>
 			<!-- right part of the middle portion starts here -->
 			<div class="clear"></div>
 		</div>
 			<!-- middle portion with  links, new , banner and course ends here -->
 			
 		
			@endsection

 