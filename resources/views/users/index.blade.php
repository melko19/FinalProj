@extends('base')

@section('content')

@include('info')




<h1>List of Users</h1>

<table class="table table-bordered table-striped table-sm">
<div class="float-right">

    <a href="{{url('/users/create')}}" class="btn btn-primary btn-sm">
        Add New User
    </a>
</div>
<h2>List Of Users</h2>
    <thead>
        <tr>
            <th>ID#</th>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Email</th>
            <th>Option</th>
        </tr>
    </thead>

    <tbody>
    @foreach($users as $u)

        <tr>
            <td>{{$u->id}}</td>
            <td>{{$u->lname}}</td>
            <td>{{$u->fname}}</td>
            <td>{{$u->email}}</td>
            <td>
                <a href="{{url('/users/edit',['id'=>$u]) }}" class="btn btn-primary btn-sm">
                    <i class="fa fa-check">Edit</i>
                </a>
            </td>
        </tr>
    @endforeach    
    </tbody>
</table>

@stop
