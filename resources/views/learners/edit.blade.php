@extends('base')

@section('content')

<div class="container">

    <div class="modal fade" id="deleteLearnerModal" tabindex="-1" role="dialog" aria-labelledby="deleteLeanerModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteLeanerModalLabel">Delete Learner</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {!! Form::open(['url'=>'/learners','method'=>'delete']) !!}
            <div class="modal-body">
                Are you sure you want to delete this learner?
                {{Form::hidden('user_id',$learners->id)}}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-danger">Delete learner</button>
            </div>
            {!! Form::close() !!}
            </div>
        </div>
    </div>

    <div class="float-right">
        <a href="{{url('/learners')}}" class="btn btn-primary btn-sm">back</a>
    </div>

    <h2>Edit Learner: {{ $learners->id}}</h2>
    
    <div class="row">
        <div class="col-md-5">

            {!! Form::model($learners, ['url' =>"/learners/$learners->id", 'method'=>'patch']) !!}

            @include('learners._form')

            <div class="form-group">
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteLearnerModal">
                    Delete Leaner
                </button>

                <button class="btn btn-primary float-right">Update Learner</button>
            </div>

            {!! form::close() !!}
        
        </div>
        <div class="col-md-7">
            @include('errors')
        </div>
    </div>

</div>

@endsection
