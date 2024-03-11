@extends('layout')
@section('content')
 <div class="container">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                  <form action ="{{route('freshman.post')}}"  method = "post" class="form-group" style="width:70%; margin-left:15%;">
                        @csrf
                      <div class="d-grid gap-3"><br>
                          <h3> Please fill your personal information</h3>
                          <div class="form-group">
                              <label>First Name</label>
                              <input type="text" class="form-control" placeholder="Enter your First Name" name="fname">
                          </div>

                          <div class="form-group">
                              <label>Last Name</label>
                              <input type="text" class="form-control" placeholder="Enter your Last Name" name="lname">
                          </div>

                          <div class="form-group">
                              <label>Select your Gender</label>
                              <input type="radio" name="sex" value="Male" checked />
                              <label for="Male">Male</label>
                              <input type="radio" name="sex" value="Female" />
                              <label for="Female">Female</label>
                          </div>

                          <div class="form-group">
                              <label>Level of Education</label>
                              <select class="form-control" name="status">
                                  <option value="" disabled selected hidden>Select need of level of Education<option>
                                  <option value="Diploma">Diploma</option>
                                  <option value="BA">BA</option>
                                  <option value="BSc">BSc</option>
                                  <option value="MSc">MSC</option>
                                  <option value="MA">MA</option>
                              </select>
                          </div>

                          <div class="form-group">
                              <label>Program</label>
                              <select class="form-control" name="program">
                                  <option value="" disabled selected hidden>Select Program</option>
                                  <option value="Regular">Regular</option>
                                  <option value="Extension">Extension</option>
                                  <option value="Distance">Distance</option>
                              </select>
                          </div>

                          <div class="form-group">
                              <label>Department</label>
                              <select class="form-control" name="department">
                                  <option value="" disabled selected hidden>Select your Department</option>
                                  <option value="Accounting">Accounting</option>
                                  <option value="Management">Management</option>
                                  <option value="IT">Information Technology</option>
                                  <option value="CS">Computer Science</option>
                                  <option value="Nursing">Nursing</option>
                              </select>
                          </div>

                          <div class="form-group">
                              <label>Email</label>
                              <input type="email" class="form-control" placeholder="Enter Email address" name="email">
                          </div>

                          <div class="form-group">
                              <label>Phone</label>
                              <input type="text" class="form-control" placeholder="Enter you Phone number" name="phone">
                          </div>

                          <div class="form-group">
                              <label>Upload your official document</label>
                              <input type="file" class="form-control" name="cv">
                          </div>
                      </div><br>
                      <button type="submit"  value = "Add student" class="btn btn-success">Register</button>
                      <button type="reset"  value = "reset" class="btn btn-danger"> Clear </button>
                    </form>
          </div>
      </div>
    </div>
  </div>
</div>
@endsection