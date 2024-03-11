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
                <a class="nav-item nav-link" href="#">Prepare Schedule</a>	
					      <a class="nav-item nav-link" href="#">Post Notice</a>		
     			</div>
		      </div>
        <div class="col-10">
                <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
					          <!-- navbar links -->
                    <div class="navbar-nav">
                          <a class="nav-item nav-link" href="register_student">Register Student</a>
                          <a class="nav-item nav-link" href="#">Register Course</a>
                    </div>
                </nav> 
                
                <div class="content">
                    @yield('main')
                </div>
                 
        </div>
        @include('footer')
    </div>
  </body>
</html>