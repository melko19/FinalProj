@extends('base')

@section('content')

@include('info')

<h1>Instructors</h1>


<table class="table table-bordered table-striped table-sm">

<div class="float-right">

    <a href="{{url('/instructors/create')}}" class="btn btn-primary btn-sm">
        Add New Instructors
    </a>
</div>

    <h2>List of Instructors</h2>

    <thead>
        <tr>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Expertise</th>
            <th>Rating</th>
            <th>Option</th>
        </tr>
    </thead>

    <tbody>
        @foreach($instructors as $intr)

        <tr>
            <td>{{$intr->lname}}</td>
            <td>{{$intr->fname}}</td>
            <td>{{$intr->aoe}}</td>
            <td>{{$intr->rating}}</td>
            <td>
            <a href="{{url('/instructors/edit',['lname'=>$intr]) }}" class="btn btn-primary btn-sm">
                <i class="fa fa-check">Edit</i>
            </a>
            </td>
        </tr>

    @endforeach
    </tbody>

</table>


@stop