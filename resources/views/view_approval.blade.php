@extends('layout')
@section('content')
<script>
    import { Input, Ripple, initMDB } from "mdb-ui-kit";

    initMDB({ Input, Ripple });
</script>
<div class="container">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900"><br>
                    
                    <form action ="{{route('view_approval')}}"   method = "post" class="form-group" style="width:70%; margin-left:15%;">
                        @csrf
                        <div class="input-group">
                            <div class="form-outline" data-mdb-input-init>
                                <input type="search" placeholder="Serach by first name" name="search" id="form1" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary" data-mdb-ripple-init>
                                <b class="fas fa-search">Search</b>
                            </button>
                        </div>
                    </form>
                    
                        <table class="table">
                            <tr>
                                <th>First Name </th>
                                <th>Last Name </th>
                                <th>Gender</th>
                                <th>Edu. Level</th>
                                <th>Program </th>
                                <th>Department </th>
                                <th>Remark </th>
                            </tr>
                                 @foreach($data as $data)
                            <tr>
                                <td>{{$data->fname}}</td>
                                <td>{{$data->lname}}</td>
                                <td>{{$data->sex}}</td>
                                <td>{{$data->status}}</td>
                                <td>{{$data->program}}</td>
                                <td>{{$data->department}}</td>
                                <td>{{$data->approval}}</td>
                            </tr>

                            @endforeach
                        </table>
               </div>
           </div>
        </div>
    </div>
</div>
@endsection