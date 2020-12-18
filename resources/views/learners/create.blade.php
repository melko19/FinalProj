@extends('base')

@section('content')

<br>
<div class="float-right">
    <a href="{{url('/learners')}}" class="btn btn-primary btn-sm">
        Back
    </a>
</div>

 <h1>Create new learners</h1>

<div class="row">
    <div class="col-md-5">
         {!!  Form::open(['url'=>'/learners', 'method'=>'post']) !!}

            @include('learners._form')

            <div class="form-group">
                <button class="btn btn-primary float-right">Create learners</button>
            </div>
        {!! Form::close() !!}
    </div>

    <div class="col-md-7">
        @include('errors')
    </div>
</div>

@endsection