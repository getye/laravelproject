<!doctype html>
<html lang="en">
  <head>
     @include('header')
     
  </head>
  <body>
  <div class="row h-100">
		 <div class="col-2" style="background-color: #e3f2fd;">
					<!-- Navigation links in sidebar-->
                <div class="accordion" id="accordionExample">
                  <div class="card" style="background-color: #e3f2fd;">
                    <div class="card-header" id="headingOne">
                      <h5 class="mb-0">
                        <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Grade Report
                        </button>
                        
                      </h5>
                    </div>

                      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body navbar-nav">
                                    <h3>Retrive from Database!<h3>
									<!-- Retrive from Database -->
							</div>
						</div>
					</div>
				</div>
		 </div>
            <div class="col-10">
                <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
                  <!-- navbar links -->
                    <div class="navbar-nav">
                 <a class="nav-item nav-link" href="#">View Schedule</a>
                                          <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                          Notice
                                        </a>
                                        <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" notice="#">Post</a></li>
                                          <li><a class="dropdown-item" href="#">View</a></li>
                                          <li><a class="dropdown-item" href="#"> Delete</a></li>
                                        </ul>
                                      </li>
                                      <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                          Material
                                        </a>
                                        <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" notice="#">Upload</a></li>
                                          <li><a class="dropdown-item" href="#">View</a></li>
                                          <li><a class="dropdown-item" href="#"> Delete</a></li>
                                        </ul>
                                      </li>
                  <a class="nav-item nav-link" href="#">View Profile</a>
       
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