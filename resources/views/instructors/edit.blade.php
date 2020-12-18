@extends('base')

@section('content')

<div class="container">

    <div class="modal fade" id="deleteInstructorModal" tabindex="-1" role="dialog" aria-labelledby="deleteInstructorModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteInstructorModalLabel">Delete Instructor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {!! Form::open(['url'=>'/instructors','method'=>'delete']) !!}
            <div class="modal-body">
                Are you sure you want to delete this Instructor?
                {{Form::hidden('instructor_id',$instructors->id)}}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-danger">Delete Instructor</button>
            </div>
            {!! Form::close() !!}
            </div>
        </div>
    </div>

    <div class="float-right">
        <a href="{{url('/instructors')}}" class="btn btn-primary btn-sm">back</a>
    </div>

    <h2>Edit Instructor: {{ $instructors->id}}</h2>
    
    <div class="row">
        <div class="col-md-5">

            {!! Form::model($instructors, ['url' =>"/instructors/$instructors->id", 'method'=>'patch']) !!}

            @include('instructors._form')

            <div class="form-group">
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteInstructorModal">
                 Delete Instructor
                </button>


                <button class="btn btn-primary float-right">Update Instructor</button>
            </div>

            {!! form::close() !!}
        
        </div>
        <div class="col-md-7">
            @include('errors')
        </div>
    </div>

</div>

@endsection
