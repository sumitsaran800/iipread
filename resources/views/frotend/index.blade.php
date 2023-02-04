
 		@extends('frotend/layouts/main')

		@section('jiya')
			

 		<!-- middle portion with  links, new , banner and course starts here -->
 		<div class="middle-container">
 			<!-- left part of the middle portion starts here -->
 			
 			<!-- left part of the middle portion ends here -->
 			<!-- right part of the middle portion starts here -->
 			<div class="middle-right">
 				<div>
 				<img src="{{('public/images/banners.png')}}" class="banner-img" /> <!-- banner images here -->
 				</div>
 				<div class="course-conatiner">
 					<div class="course-text">
 						Courses
 					</div>
 					<div class="course-box">
 						<div class="course-box-left">
 							<div class="icon">
 								<img src="{{('public/images/courses/php.png')}}" title="PHP"/>
 								<h3>PHP (Website Development)</h3>
 							</div>
 							<div class="icon adv-php">
 								<img src="{{('public/images/courses/adv-php.png')}}" title="Advance PHP"/>
 								<h3>Advance PHP</h3>
 							</div>
 							<div class="icon py">
 								<img src="{{('public/images/courses/python.png')}}" title="Python"/>
 								<h3>Python</h3>
 							</div>
 							<div class="icon android">
 								<img src="{{('public/images/courses/Android.png')}}" title="Android"/>
 								<h3>Android App Development</h3>
 							</div>
 							
 						</div>
 						<div class="course-box-right">
 							<div class="icon digi">
 								<img src="{{('public/images/courses/digi-marketing.png')}}" title="digital-marketing"/>
 								<h3>Digital Marketing</h3>
 							</div>
 							<div class="icon graphics">
 								<img src="{{('public/images/courses/graphic-design.png')}}" title="graphic-design"/>
 								<h3>Graphic Designing</h3>
 							</div>
 							<div class="icon seo">
 								<img src="{{('public/images/courses/seo.png')}}" title="SEO"/>
 								<h3>Search Engine Optimization</h3>
 							</div>
 							<div class="icon wordpress">
 								<img src="{{url('public/images/courses/Wordpress.png')}}" title="Wordpress"/>
 								<h3>Wordpress</h3>
 							</div>
 						</div>
 					</div>
 				</div>
 			</div>
 			<!-- right part of the middle portion starts here -->
 		</div>
 			<!-- middle portion with  links, new , banner and course ends here -->
 			<!-- HOW WE WORK STARTS HERE -->
 		<div class="work-heading">How We Work </div>
 		<div class="work-container">
 			<div class="how-img-box box-first">
 				<div class="how-img1">
 					<div class="how-img1-color">
 						We Listen <br/> To You
 					</div>
 				</div>
 			</div>
 			<div class="how-img-box">
 				<div class="how-img2">
 					<div class="how-img2-color">
 						We Plan  <br/> Your Work
 					</div>
 				</div>
 			</div>
			<div class="how-img-box">
 				<div class="how-img3">
 					<div class="how-img3-color">
 						We Design  <br/> creativity
 					</div>
 				</div>
 			</div>
 			<div class="how-img-box">
 				<div class="how-img4">
 					<div class="how-img4-color">
 						We Execute,  <br/> Publish & <br/> Maintain
 					</div>
 				</div>
 			</div> 			
 		</div>
	
	
 		<!-- HOW WE WORK ENDS HERE -->
 		@endsection
 