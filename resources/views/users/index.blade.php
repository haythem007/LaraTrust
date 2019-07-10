@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Users List</h1>

            <table class="table table-bordered">

                <thead>

                    <tr>
                        <th>Index</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                       
                    </tr>
                </thead>

                <tbody>


                    @foreach($users as $index=>$u)
                    <tr>
                    <td>{{ $index + 1  }} </td>
                    <td>{{$u->name}}</td>
                    <td>{{$u->email}}</td>
                    <td>

                        @foreach($u->roles as $role)
                        {{$role->display_name}}
                        @endforeach
                    </td>
                       

                    </tr>
                    @endforeach

                </tbody>


            </table>
        </div>
    </div>
</div>
@endsection