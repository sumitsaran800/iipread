
			@extends('frotend/layouts/main')
          @section('jiya')
			
 		
 		<!-- middle portion with  links, new , banner and course starts here -->
 		<div class="middle-container">
 		
 			<!-- left part of the middle portion ends here -->
 			<!-- right part of the middle portion starts here -->
 			<div class="middle-right">
				<div class="page-status">
						<h1>Courses</h1>
					<h2><i onclick='window.location.href = "{{route("frotend.homepage")}}" '> Home /</i> Courses</h2>
				</div>
				<div class="course-content"> 
					<div class="row1">
						@php $getdata = getCourse(); @endphp

						@foreach($getdata as $key => $value)


							<div class="course-1">
                            <a href="{{route('frotend.admin.add.course.frotend',['id' => encrypt( $value['id'])])}}">
								<div class="course-1-icon" style="background: {{$value->course_color}}">
									
									<div class="icon-1">
										
										<img src="{{url('public/upload/course',$value['course_logo'])}}" width="70px">
									
	
									</div>

					           </div>
									
								

								<div class="c-1">
									{{$value->course_title}}
								</div>
								</a>
							</div>
							@endforeach
							
                      
					</div>
				</div>
 			</div>
 			<!-- right part of the middle portion starts here -->
 			

			
 		</div>

		<div class="clear"></div>
 			<!-- middle portion with  links, new , banner and course ends here -->
 	@endsection
 
 