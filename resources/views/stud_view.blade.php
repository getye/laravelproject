@extends('layout')
@section('content')
  <h2 class="text-center">View Student Records</h2>
           
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Gender</th>
        <th>Level</th>
        <th>Program</th>
        <th>Department</th>
        <th>Email</th>
        <th>Phone</th>
        <th>CV</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($users as $user)
      <tr>
      <td>{{ $user->fname }}</td>
      <td>{{ $user->lname }}</td>
      <td>{{ $user->sex }}</td>
      <td>{{ $user->status }}</td>
      <td>{{ $user->program }}</td>
      <td>{{ $user->department }}</td>
      <td>{{ $user->email }}</td>
      <td>{{ $user->phone }}</td>
      <td>{{ $user->cv }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  @endsection