@extends('registrar.registrarlayout')
@section('main')
<x-app-layout>
<div class="py-12">
	<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
		<div class="bg-white shadow-sm sm:rounded-lg">
			<div class="p-6 text-gray-900">
            <table class="table">
                            <tr>
                                <th>First Name </th>
                                <th>Last Name </th>
                                <th>Gender</th>
                                <th>Level Edu </th>
                                <th>Program </th>
                                <th>Department </th>
                                <th>Cv </th>
                                <th>Approve </th>
                            </tr>
                                 @foreach($data as $data)
                            <tr>
                                <td>{{$data->fname}}</td>
                                <td>{{$data->lname}}</td>
                                <td>{{$data->sex}}</td>
                                <td>{{$data->status}}</td>
                                <td>{{$data->program}}</td>
                                <td>{{$data->department}}</td>
                                <td><a href="{{url('/Download', $data->cv)}}" class="btn btn-primary">Download</a></td>
                                <td><a href="{{url('Accept_fresh_requet', $data->id)}}" class="btn btn-success">Accept</a>
                                <a href="{{url('Reject_fresh_requet', $data->id)}}" class="btn btn-danger">Reject</a></td>
                            </tr>

                            @endforeach
                        </table>
                        <script>
                          var msg = '{{Session::get("alert")}}';
                          var exist = '{{Session::has("alert")}}';
                          if(exist){
                            alert(msg);
                          }
                        </script>

			</div>
		</div>
	</div>
</div>
</x-app-layout>
@stop