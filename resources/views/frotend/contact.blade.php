

 	
		
 		@extends('frotend/layouts/main')

		@section('jiya')
			

	 

 		
 		
 			
 			
 			<!-- left part of the middle portion ends here -->
 			<!-- right part of the middle portion starts here -->
 			<div class="middle-right">
 					
 						<div class="page-status">
 								<h1>Contact</h1>
								<h2><i onclick='window.location.href = "{{route("frotend.homepage")}}" '> Home /</i> Contact</h2>
 						</div>
 						<div class="contact-content">
							@foreach($fetch as $key => $value)
 								<div class="contact-row">
 									<div class="contact-row-left">
 										<img src="{{url('public/images/phone.png')}}">
 										<p><b>Phone:</b>  {{$value->phone}}, {{$value->mobile}}</p>
 										<p> <b>Email ID:</b>  
 											<a href="http://www.iipacademy.com/" target="blank"><font style="color:#00a8ec; cursor: pointer;">{{$value->email}} </font></a>
 										</p>
 										<p> <b>Website:</b>   
 											<a href="http://www.iipacademy.com" target="blank"><font style="color:#00a8ec; cursor: pointer;" >{{$value->website}}</font></a>
 										</p>
 									</div>
									<div class="contact-row-right">
 										<img src="{{url('public/images/address-pin.png')}}">
 										<p>
 											{!!$value->address!!}
 										</p>
 									</div>
 
 								</div>
 								<h1 style="color: #343130;">Find Us On Map</h1>
 								<div class="contact-map">
 									{!!$value->map_link!!}
 								</div>

								@endforeach

 						</div>
 			</div>
 			<!-- right part of the middle portion starts here -->
 			<div class="clear"></div>
 		
 			<!-- middle portion with  links, new , banner and course ends here -->
 			
 		 @endsection