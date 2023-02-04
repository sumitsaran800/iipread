
  <!DOCTYPE html>
 <html>
 <head>
 	<title>{{$title}}</title>
 	<link rel="stylesheet" type="text/css" href="{{url('public/css/style.css')}}"/>
	
	
 </head>
 <body>
 	
<div class="main">
 	
	<header>
		@php $getData = getContact(); @endphp
		@foreach( $getData as $key => $value)
	 		<div class="top-contact">
	 			<div class="left-cont">
		 			<img src="{{url('public/images/web.png')}}" class="top-left-img" />
		 			<div class="top-left-iip" ><a href="http://www.iipacademy.com" title="www.iipacademy.com">{{$value->website}}</a></div>
	 			</div>
	 			<div class="right-cont">
	 				<img src="{{url('public/images/info.png')}}" class="top-right-img"/>
	 				<div class="top-right-info"><a href="mailto:info@iipacademy.com" title="info@iipacademy.com">{{$value->email}}</a></div>
	 			</div>
	 		</div>
			@endforeach
	 		<div class="menu-container">
				<div class="right-cont">

					@if(session()->has('id'))
					<div class="top-right-info"><a href="{{route('admin.fortend.logout')}}" title="" style="color: blue;">  LogOut </a></div>
					<a href=""></a>
					<div class="top-right-info"><a href="#" title="">{{session('name')}} | </a></div><br><br><br>
					@else
					<div class="top-right-info"><a href="{{route('admin.fortend.register')}}" title=""><button type="button" class="btn btn-primary"> Register  </button></a></div>

	 				
	 				<div class="top-right-info"><a href="{{route('admin.fortend.login')}}" title="" ><button class="btn btn-primary"> Login | </button></a></div><br><br><br>
					@endif
	 				
	 			</div>
	 			<a href="{{route('frotend.homepage')}}"><img src="{{url('public/images/logo.png')}}" class="logo"></a>
	 			<div class="menu-bar">
	 				<div class="menu-items"><a href="{{route('frotend.homepage')}}">Home</a></div>
	 				<div class="menu-items"><a href="{{route('admin.frontend.about')}}">About Us</a></div>
	 				<div class="menu-items"><a href="{{route('admin.frotend.course')}}">Courses</a></div>
	 				<div class="menu-items"><a href="{{route('admin.frotend.gallery')}}">Gallery</a></div>
	 				<div class="menu-items"><a href="{{route('admin.frotend.enquiry')}}">Enquiry</a></div>
	 				<div class="active-menu-item"><a href="{{route('admin.frotend.contact')}}">Contact Us</a></div>
	 			</div>
	 		</div>
			
	 	</header>

		<div class="middle-container">

		  <div class="middle-left">
 				<div class="menu-item-left"><a href="{{route('frotend.homepage')}}">Home</a></div>
 				<div class="menu-item-left"><a href="{{route('admin.frontend.about')}}">About Us</a></div>
 				<div class="menu-item-left"><a href="{{route('admin.frotend.course')}}">Courses</a></div>
 				<div class="menu-item-left"><a href="{{route('admin.frotend.gallery')}}">Gallery</a></div>
 				<div class="menu-item-left"><a href="{{route('admin.frotend.enquiry')}}">Enquiry</a></div>
 				<div class="menu-item-left"><a href="{{route('admin.frotend.contact')}}">Contact Us</a></div>
 					<div class="middle-left-buttom">
 						<div class="middle-left-buttom-news">
 								News
 						</div>
						@php  $newsData = getNews();  @endphp
 						<ul class="news-list">

							@foreach($newsData as $key => $value)
	 						<a href="{{route('frotend.new.news',['id' => encrypt($value['id'])])}}"><li><img src="{{url('public/images/dot.jpg')}}"  >{{$value['title']}} </li></a>
 							@endforeach
 						</ul>
 					</div>
 			</div>
			</div>
		