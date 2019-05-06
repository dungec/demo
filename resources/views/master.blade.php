<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bai1</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	  <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
	@yield('js')
</head>
<body>
	<div id="login"> 
		@if(Auth::guard('giasu_user')->check())
			<a href="{{route('dangxuat')}}" style="padding-right: 10px;">{{Auth::guard('giasu_user')->user()->name}}</a>
	
		@else
			<a href="{{route('getdngs')}}"style="padding-right: 10px;">Đăng nhập</a>
		@endif
	</div>
	<div id="background">
		
		<div id="header">
			<img src="images/giasu.png" height="auto" width="100%">
		</div>
		<div class="wrapper-nav" id="navbar">
			
				<nav class="clearfix">
					<a href="#" id="pull">Menu</a>
				    <ul class="clearfix">
				        <li><a href="{{route('danhsachlop')}}">Danh sách lớp mới</a></li>
				        <li><a href="#">Danh sách gia sư</a></li>
				        <li><a href="{{route('getdkgs')}}">Đăng ký làm gia sư</a></li>
				        <li><a href="">Đăng ký làm phụ huynh</a></li>
				    </ul>
			    
				</nav>
			
			
			
		</div>
		@yield('search')
		<div id="main" style="margin-top:5px;">
				@yield('main')
			
		</div>
		<div id="footer">
			
		</div>
	</div>
</body>
</html>