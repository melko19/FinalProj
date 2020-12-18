@extends('base')

@section('content')
@if($info = Session::get('info'))

<div class="card">
    <div class="card-body bg-success text-white">
        {{$info}}
    </div>
</div>

@endif


    <h1>Courses</h1>
    <table class="table table-bordered table-striped table-sm">

    <div class="float-right">

    <a href="{{url('/courses/create')}}" class="btn btn-primary btn-sm">
        Add New Course
    </a>
    </div>
        <thead>
            <th>Name</th>
            <th>Description</th>
            <th>Start</th>
            <th>End</th>
            <th>Instructor</th>
            <th>&nbsp;</th>
        </thead>
        <tbody>
            @foreach($courses as $c)

            <tr>
                <td>{{$c->name}}</td>
                <td>{{$c->description}}</td>
                <td>{{$c->start}}</td>
                <td>{{$c->end}}</td>
                <td>{{$c->instructor_id}}</td>
                <td>
                    <a href="{{url('/courses/edit', ['id'=> $c])}}" class="btn btn-primary btn-sm">edit </a>
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
    {{ $courses->links() }}
@endsection