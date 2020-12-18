@extends('base')

@section('content')
<br> 
    <h2>Create New User</h2>

    <div class="row">
        <div class="col-md-5">

            {!!  Form::open(['url'=>'/users', 'method'=>'post']) !!}

            <div class="form-group">
                {{Form::label('lname', 'Last Name')}}
                {{Form::text('lname', null, ['class'=>'form-control'])}}
            </div>

            <div class="form-group">
                {{Form::label('fname', 'First Name')}}
                {{Form::text('fname', null, ['class'=>'form-control'])}}
            </div>

            <div class="form-group">
                {{Form::label('email')}}
                {{Form::text('email', null, ['class'=>'form-control'])}}
            </div>

            <div class="form-group">
                {{Form::label('password')}}
                {{Form::password('password', ['class'=>'form-control'])}}
            </div>

            <div class="form-group">
                <button class="btn btn-primary float-right">Create User</button>
            </div>

            {!!  Form::close() !!}

        </div>
        <div class="col-md-7">
            @include('errors')
        </div>
    </div>
@endsection