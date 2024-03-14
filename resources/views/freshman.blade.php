@extends('layout')
@section('content')
<script>
    function checkform(form){
    if(form.phone.value=="")
	{
	alert("please enter phone number");
	form.phone.focus();
	return false;
	}
	var str=form.phone.value;
	var valid="0123456789+";
	for(i=0;i<str.length;i++)
	{
	if(valid.indexOf(str.charAt(i))==-1)
	{
	alert("please insert phone number only number");
	form.phone.focus();
	return false;
	}
	}
	if(str.length!=10)
	{
	alert("please enter phone number 10  digit.");
	form.phone.focus();
	return false;
	}
 if (str.charAt(0)!="0")
           {
             alert("phone number should be start with 0");
			 form.phone.focus();
              return false;
			  	   
           }
if (str.charAt(1)!="9")			   
           {
             alert("phone number should be start with 09");
			 form.phone.focus();
              return false;
           }}
function ValidateAlpha(evt)
        {
            var keyCode = (evt.which) ? evt.which : evt.keyCode
            if ((keyCode < 65 || keyCode > 90) && (keyCode < 97 || keyCode > 123) && keyCode != 32 &&  keyCode != 8  &&  keyCode != 9)
				{
				alert("	Only letters are allowed! ")
            return false;
			}}
function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57)){
		 alert("only number is allowed!")
            return false;
}}
</script>
 <div class="container">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                  <form action ="{{route('freshman.post')}}" onsubmit="return checkform(this)"  method = "post" class="form-group" style="width:70%; margin-left:15%;" enctype="multipart/form-data">
                        @csrf
                      <div class="d-grid gap-3"><br>
                      <fieldset>
                          <legend> Please Fill Your Personal Information</legend>
                          <div class="form-group">
                              <label>First Name</label>
                              <input type="text"  onKeyPress="return ValidateAlpha(event)" class="form-control"  placeholder="Enter your First Name" name="fname"required >
                          </div>
                          <div class="form-group">
                              <label>Last Name</label>
                              <input type="text" class="form-control" onKeyPress="return ValidateAlpha(event)"  placeholder="Enter your Last Name" name="lname" required>
                          </div>
                          <div class="form-group">
                              <label>Select your Gender</label>
                              <br>
                              <input type="radio" name="sex" value="Male" checked />
                              <label for="Male">Male</label>
                              <br>
                              <input type="radio" name="sex" value="Female" />
                              <label for="Female">Female</label>
                          </div>

                          <div class="form-group">
                              <label>Level of Education</label>
                              <select class="form-control" name="status" required>
                                  <option value="" disabled selected hidden > <option>
                                  <option value="Diploma">Diploma</option>
                                  <option value="BA">BA</option>
                                  <option value="BSc">BSc</option>
                                  <option value="MSc">MSC</option>
                                  <option value="MA">MA</option>
                              </select>
                          </div>

                          <div class="form-group">
                              <label>Program</label>
                              <select class="form-control" name="program" required>
                                  <option value="" disabled selected hidden></option>
                                  <option value="Regular">Regular</option>
                                  <option value="Extension">Extension</option>
                                  <option value="Distance">Distance</option>
                              </select>
                          </div>

                          <div class="form-group"  >
                              <label>Department</label>
                              <select class="form-control" name="department" required>
                                  <option value="" disabled selected hidden></option>
                                  <option value="Accounting">Accounting</option>
                                  <option value="Management">Management</option>
                                  <option value="IT">Information Technology</option>
                                  <option value="CS">Computer Science</option>
                                  <option value="Nursing">Nursing</option>
                              </select>
                          </div>

                          <div class="form-group">
                              <label>Email</label>
                              <input type="email" class="form-control" placeholder="Enter Email address" name="email" required>
                          </div>

                          <div class="form-group">
                              <label>Phone</label>
                              <input type="text" onKeyPress="return isNumberKey(event)" class="form-control" placeholder="Enter you Phone number" name="phone" required>
                          </div>

                          <div class="form-group">
                              <label>Upload your official document</label>
                              <input type="file" class="form-control" name="cv" requierd>
                          </div>
                      </div><br>
                      <button type="submit"  class="btn btn-success">Register</button>
                      <button type="reset"  value = "reset" class="btn btn-danger"> Clear </button>
                </fieldset>
                        <script>
                          var msg = '{{Session::get("alert")}}';
                          var exist = '{{Session::has("alert")}}';
                          if(exist){
                            alert(msg);
                          }
                        </script>
                    </form>
          </div>
      </div>
    </div>
  </div>
</div>
@endsection