<!doctype html>
<html lang="en">
  <head>
    @include('header')
  </head>
  <body>
  <div class="row h-100">
			<div class="col-2" style="background-color: #e3f2fd;">
				<!-- Navigation links in sidebar-->
 				<div class="navbar-nav sidebar">
					<a class="nav-item nav-link" href="{{ route('freshman.post') }}">FreshMan Request</a>
					<a class="nav-item nav-link" href="{{ route('view_fresh_approval') }}">View Approval</a>
					<a class="nav-item nav-link" href="#">Advertisment</a>
					<a class="nav-item nav-link" href="{{ route('mission') }}">Mission and Vision</a>		
     			</div>
			</div>
        <div class="col-10">
					<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
					    <!-- navbar links -->
						<div class="navbar-nav">
							<a class="nav-item nav-link" href="{{ route('home') }}">Home</a>
							<a class="nav-item nav-link" href="#">Gallery</a>
							<a class="nav-item nav-link" href="{{ route('contactus') }}">Contact Us</a>
							<a class="nav-item nav-link" href="{{ route('aboutus') }}">About Us</a>
							<a class="nav-item nav-link" href="{{ route('login') }}">Login</a>
						</div>
                    </nav> 
            <div class="content">
                @yield('content')
            </div>
        </div>
			@include('footer')
  </div>
  </body>
</html>