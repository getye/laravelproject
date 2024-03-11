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
                          <a class="nav-item nav-link" href="#">Approve Request</a>
                <a class="nav-item nav-link" href="#">View Report</a>	
                          <a class="nav-item nav-link" href="#">View Schedule</a>		
                </div>
          </div>
            <div class="col-10">
                <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
					            <!-- navbar links -->
                    <div class="navbar-nav">
                                    <a class="nav-item nav-link" href="register_staff">Register Staff</a>
                      <a class="nav-item nav-link" href="#">Course offering </a>
                      <a class="nav-item nav-link" href="">Add curriculum </a>  
                      <a class="nav-item nav-link" href="#">view staff profile</a>

                      <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                          Notice</button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#">view</a>
                          <a class="dropdown-item" href="#">post</a>
                          <a class="dropdown-item" style="background-color: #fff111;" href="#">"delete"</a>
                        </div>
                      </div>	
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