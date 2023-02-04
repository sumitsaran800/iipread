
		
 		@extends('frotend/layouts/main')

		@section('jiya')
			
 		<!-- middle portion with  links, new , banner and course starts here -->
 		<div class="middle-container">
 		
 			<!-- left part of the middle portion ends here -->
 			<!-- right part of the middle portion starts here -->
			<div class="middle-right enq-height">
						<div class="page-status">
							<h1>Enquiry</h1>
						<h2><i onclick='window.location.href = "{{route("frotend.homepage")}}" '> Home /</i> Enquiry</h2>
						</div>
						<div class="mainwebsitecontent">
		 				<form action="{{$url}}" method="POST" enctype="multipart/form-data">

							@csrf

							
			            	
			                	<div class="formlable">Gender : </div>
			                    <div class="inputform">
									{{-- <input type="radio" name="gender" id="male" class="form-control" />Male
									<input type="radio" name="gender" id="female" class="form-control" />Female --}}

									{!!Form::radio('gender','m')!!} Male
									{!!Form::radio('gender','f')!!} FeMale
								</div>
			               
			            	<div class="formrow">
			                	<div class="formlable">Name : </div>
			                    <div class="inputform"><input type="text" name="name" id="name" class="inputbox" /></div>
			                </div>
			                <div class="formrow">
			                	<div class="formlable">Contact No : </div>
			                    <div class="inputform"><input type="text" name="contact" id="contact" class="inputbox" /></div>
			                </div>
			                <div class="formrow">
			                	<div class="formlable">Country : </div>
			                    <div class="inputform">
									<select name="country" id="country" data-url="{{route('admin.frotend.enquiry.state')}}">
										<option value="">---Select---</option>
										@foreach($countries as $key => $value)
										<option value="{{$value->id}}">{{$value->country_name}}</option>
										@endforeach
									</select>
								</div>
			                </div>
			                <div class="formrow">
			                	<div class="formlable">State : </div>
			                    <div class="inputform" id="reponse">
									<select name="state" id="state" disabled="">
										<option value="">---Select---</option>
										
									</select>
								</div>
			                </div>

							<div class="formrow">
			                	<div class="formlable">Course : </div>
			                    <div class="inputform" id="course">
									<select name="course" id="course1">
										<option value="">---Select---</option>
										@foreach($course as $key => $value)

										<option value="{{$value->id}}">{{$value->course_title}}</option>
										@endforeach
										
									</select>
								</div>
			                </div>
						
			                <div class="formrow">
			                	<div class="formlable">Address : </div>
			                    <div class="inputform">
									<textarea name="address" id="address" class="textarea"></textarea>
								</div>
			                </div>
			                <div class="formrow">
			                	<div class="formlable">Email : </div>
			                    <div class="inputform"><input type="text" name="email" id="email" class="inputbox" /></div>
			                </div>
			                <div class="formrow">
			                	<div class="formlable">Enquiry : </div>
			                    <div class="inputform"><textarea name="enquiry" id="enquiry" class="textarea"></textarea></div>
			                </div>
			                <div class="formrow">
			                	<div class="formlable"><input type="submit" value="{{$btn}}" class="button" /></div>
			                </div>
			            </form>
            	</div>
 			</div>
 			<!-- right part of the middle portion starts here -->
 			<div class="clear"></div>
 		</div>
 			<!-- middle portion with  links, new , banner and course ends here -->
 		@endsection	

		@push('script')
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script>
			$("#country").on('change',function(){
				var id = $(this).val();
				var gotourl = $(this).data('url');

				$.ajax({
					type : 'get',
					url : gotourl,
					data: {
						Cid : id,
					},

					success:function(data){

						$("#reponse").html(data);


					}
				})
			})
		</script>
 		@endpush
 </body>
 </html>
 