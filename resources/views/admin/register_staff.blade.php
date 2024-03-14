@extends('admin.adminlayout')
@section('main')
<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                <div class="container">
                  <br> 
                  <form action ="{{route('staffinsert')}}"  method = "post" class="form-group" style="width:70%; margin-left:15%;" enctype="multipart/form-data">
                 <p> Register Staff Profile </p>
                  <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>"><input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                    <input type="text" class="form-control" placeholder="ID" name="ID">
                    <input type="text" class="form-control" placeholder="First Name" name="first_name">
                    <input type="text" class="form-control" placeholder="Middle Name" name="middle_name">
                   <input type="text" class="form-control" placeholder="Last Name" name="last_name">
                  
                   <select class="form-control" name="gender">
                   <option value="" disabled selected hidden>Gender</option>
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                    </select>
                    <select class="form-control" name="rank">
                  <option value="" disabled selected hidden>Rank</option>
                    <option value="Diploma">Diploma</option>
                    <option value="Degree">Degree</option>
                    <option value="Masters">Masters</option>
                    <option value="PhD">PhD</option>
                  </select>
                  <input type="number" class="form-control" placeholder="enter phone number" name="phone">
                  <select class="form-control" name="role">
                  <option value="" disabled selected hidden>Role</option>
                    <option value="Admin">Admin</option>
                    <option value="Registrar">Registrar</option>
                    <option value="Teacher">Teacher</option>
                  </select>
                  <input type="email" class="form-control" placeholder="Enter Email" name="email">
                  <label>Please Choose Profile Picture</label>
                  <input type="file" class="form-control" name="file">
                  <br>
                    <button type="submit"  value = "Add student" class="btn btn-success btn-outline-primary">Register</button>
                    <button type="reset"  value = "reset" class="btn btn-success btn-outline-primary">Clear</button>
                       
                    <!-- @if(session()->has('alert'))
                        <div class="alert alert-success">
                            {{ session()->get('alert') }}
                        </div>
                        @endif -->
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
</x-app-layout>
@stop