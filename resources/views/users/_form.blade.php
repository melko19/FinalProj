<div class="form-group">
    {{Form::label('lname','Lastname')}}
    {{Form::text('lname',null,['class'=>'form-control'])}}
</div>

<div class="form-group">
    {{Form::label('fname','Firstname')}}
    {{Form::text('fname',null,['class'=>'form-control'])}}
</div>

<div class="form-group">
    {{Form::label('email')}}
    {{Form::text('email',null,['class'=>'form-control'])}}
</div>
@if(!isset($users))
<div class="form-group">
    {{Form::label('password')}}
    {{Form::password('password',null,['class'=>'form-control'])}}
</div>
@endif