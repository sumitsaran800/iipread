
		
 		@extends('frotend/layouts/main')

		@section('jiya')
			
 		<!-- middle portion with  links, new , banner and course starts here -->
 		<div class="middle-container">
 			<!-- left part of the middle portion starts here -->
 			
 			<!-- left part of the middle portion ends here -->
 			<!-- right part of the middle portion starts here -->
 			<div class="middle-right">
				<div class="page-status">
				<h1>Gallery</h1>
				<h2><i onclick='window.location.href = "{{route("frotend.homepage")}}" '> Home /</i> Gallery</h2>
				</div>
 				<div class="gallery-content">

					@foreach($fetch as $key => $value)
						
		            	<div class="galleryimgdiv" title="image1">
		            		<img src="{{url('public/uploads/',$value['image_name'])}}" width="225" class="img-circle zoom" height="170"  alt="gallery" />
		            		<div class="gallery-img-title">{{$value->image_title}}</div>
		            	</div>
		               
		            	@endforeach
					</div>
 			</div>
 		<div class="clear"></div>
 		</div>
 			<!-- right part of the middle portion starts here -->
 			<!-- middle portion with  links, new , banner and course ends here -->
 		@endsection
 </body>
 </html>
 