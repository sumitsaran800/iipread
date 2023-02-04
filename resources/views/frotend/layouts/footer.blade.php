<div class="footer">
 			<div class="footer-top-container">
 				<div class="quick-links-container">
 					<h2>Quick Links</h2>
 					<ul> 						
 						<li><a href="{{route('frotend.homepage')}}" title="Home">Home</a></li>
 						<li><a href="{{route('admin.frontend.about')}}" title="About Us">About Us</a></li>
 						<li><a href="{{route('admin.frotend.course')}}" title="Courses">Courses</a></li>
 						<li><a href="{{route('admin.frotend.gallery')}}" title="Gallery">Gallery</a></li>
 						<li><a href="{{route('admin.frotend.enquiry')}}" title="Enquiry">Enquiry</a></li>
 						<li><a href="{{route('admin.frotend.contact')}}" title="Contact Us">Contact Us</a></li>
 					</ul>
 				</div>
 				<div class="footer-train-container">
 					<h2>Training</h2>
 					<div class="train-cont">
 						<ul> 						
	 						<li><a href="#" title="PHP(Web Development)">PHP(Web Development)</a></li>
	 						<li><a href="#" title="Advance PHP">Advance PHP</a></li>
	 						<li><a href="#" title="Python">Python</a></li>
	 						<li><a href="#" title="Android APP Development">Android APP Development</a></li>
	 						<li><a href="#" title="Digital Marketing">Digital Marketing</a></li>
	 						
 						</ul>
 					</div>
 					<div class="train-cont">
 						<ul> 						
	 						<li><a href="#" title="Graphic Design">Graphic Design</a></li>
	 						<li><a href="#" title="Search Engine Optimization">Search Engine Optimization</a></li>
	 						<li><a href="#" title="Wordpress">Wordpress</a></li>
	 						<li><a href="#" title="Web design">Web design</a></li>
	 						<li><a href="#" title="Java">Java</a></li>
	 						
 						</ul>
 					</div>
 				</div>	
				@php $getData = getContact(); @endphp

				@foreach($getData as $key => $value)
 				<div class="footer-contact-container">
 					<h2>Contact Info:</h2>
 					<ul id="cont-details">
 						<li>Call At: {{$value->mobile}}</li>
 						<li>{!!$value->address!!}</li>
 					</ul>
 					<ul id="social-links">
 						<li><a href="https://www.instagram.com/wscubetechindia"><img src="{{url('public/images/instagram.png')}}"></a></li>
 						<li><a href="https://twitter.com/wscube"><img src="{{url('public/images/twitter.png')}}"></a></li>
 						<li><a href="https://www.facebook.com/wscubetech.india"><img src="{{url('public/images/facebook.png')}}"></a></li>
 						<li><a href="https://www.linkedin.com/company/wscube-tech"><img src="{{url('public/images/linked-in.png')}}"></a></li>
 					</ul>
 				</div>
				@endforeach
 			</div>
 			<div class="copy-right">
 				Copyright &copy; 2019
 			</div>
 		</div>
 	</div>
 </body>
 @stack('script')
 </html>

 
 