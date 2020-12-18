@extends('base')

@section('content')

@include('info')

<h1>Learners</h1>

<table class="table table-bordered table-striped table-sm">

    <div class="float-right">
        <a href="{{url('/learners/create')}}" class="btn btn-primary btn-sm">
            Add New learners
        </a>
    </div>
    <h2>List of Learners</h2>

    <thead>
        <tr>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Level</th>
            <th>Status</th>
            <th>Option</th>
        </tr>
    </thead>

    <tbody>
        @foreach($learners as $lrns)

        <tr>
            <td>{{$lrns->lname}}</td>
            <td>{{$lrns->fname}}</td>
            <td>{{$lrns->level}}</td>
            <td>{{$lrns->status}}</td>
            <td>
            <a href="{{url('/learners/edit',['lname'=>$lrns]) }}" class="btn btn-primary btn-sm">
                <i class="fa fa-check">Edit</i>
            </a>
            </td>
        </tr>

    @endforeach
    </tbody>

</table>

@stop