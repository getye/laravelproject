@include('layout')
<body>
<div class="container">
  <br> 
  <form action ="stud_create"  method = "post" class="form-group" style="width:70%; margin-left:15%;">
  <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>"><input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

    <label class="form-group">First Name:</label>
    <input type="text" class="form-control" placeholder="First Name" name="first_name">
    <label>Last Name:</label>
    <input type="text" class="form-control" placeholder="Last Name" name="last_name">
  <label>City Name:</label>
  <select class="form-control" name="city_name">
    <option value="bhubaneswar">Bhubaneswar</option>
    <option value="cuttack">Cuttack</option>
  </select>
<label>Email:</label>
    <input type="text" class="form-control" placeholder="Enter Email" name="email"><br>
    <button type="submit"  value = "Add student" class="btn btn-primary">Submit</button>

       <!-- @if(session()->has('alert'))
        <div class="alert alert-success">
            {{ session()->get('alert') }}
        </div>
        @endif -->
        <script>
          var msg = '{{Session::get('alert')}}';
          var exist = '{{Session::has('alert')}}';
          if(exist){
            alert(msg);
          }
        </script>
  </form>
</div>
</body>
</html>