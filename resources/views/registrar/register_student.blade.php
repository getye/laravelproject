@extends('registrar.registrarlayout')
@section('main')

<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                <div class="container">
                  <br> 
                  <form action ="{{ route('studinsert') }}"  method = "post" class="form-group" style="width:70%; margin-left:15%;">

                  <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>"><input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                    <input type="text" class="form-control" placeholder="ID" name="ID">
                    <input type="text" class="form-control" placeholder="First Name" name="first_name">
                   <input type="text" class="form-control" placeholder="Last Name" name="last_name">
                  <select class="form-control" name="Grade">
                  <option value="" disabled selected hidden>Grade</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                  </select>
                  <input type="text" class="form-control" placeholder="Section" name="Section">
                  <input type="email" class="form-control" placeholder="Enter Email" name="email">
                  <input type="password" class="form-control" placeholder="Password" name="password"><br>
                    <button type="submit"  value = "Add student" class="btn btn-success btn-outline-primary">Register</button>
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