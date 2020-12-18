<div class="form-group">
    {{Form::label('user_id', 'Select User')}}
    {{Form::select('user_id', \App\User::list(), null, ['class'=>'form-control', 'placeholder'=>'Select User'])}}
</div>

<div class="form-group">
    {{Form::label('level', 'Level')}}
    {{Form::text('level', null, ['class'=>'form-control'])}}
</div>

<div class="form-group">
    {{Form::label('status', 'Status')}}
    {{Form::text('status', null, ['class'=>'form-control'])}}
</div>