@extends('admin.adminlayout')
@section('main')
<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div class="container">
                        <table class="table">
                            <tr>
                                <th>ID </th>
                                <th>First Name </th>
                                <th>Middle Name </th>
                                <th>Last Name </th>
                                <th>Gender</th>
                                <th>Academic Rank </th>
                                <th>Role </th>
                                <th>Phone </th>
                                <th>Email </th>
                                <th>Profile </th>
                            </tr>
                                 @foreach($data as $data)
                            <tr>
                                <td>{{$data->ID}}</td>
                                <td>{{$data->Fname}}</td>
                                <td>{{$data->Mname}}</td>
                                <td>{{$data->Lname}}</td>
                                <td>{{$data->Gender}}</td>
                                <td>{{$data->AcRank}}</td>
                                <td>{{$data->Role}}</td>
                                <td>{{$data->Phone}}</td>
                                <td>{{$data->Email}}</td>
                                <td><a href="{{url('/Download', $data->Profile)}}" class="btn btn-primary">View</a></td>
                            </tr>

                            @endforeach
                        </table>
                
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
@stop