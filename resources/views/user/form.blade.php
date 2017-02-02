@extends('layouts.master')
@section('content')
<h1>User Form</h1>
{!! Form::model($user, array('class'=>'form-horizontal')) !!}
<div class="control-group">
  {!! Form::label('user_type_id', 'Type', array('class'=>'control-label')) !!}
  <div class="controls">
    {!! Form::select('user_type_id', \App\UserType::all()->pluck('name', 'id')->toArray(), null) !!}
  </div>
</div>

<div class="control-group">
  {!! Form::label('name', 'Name', array('class'=>'control-label')) !!}
  <div class="controls">
    {!! Form::text('name') !!}
  </div>
</div>

<div class="control-group">
  {!! Form::label('username', 'Username', array('class'=>'control-label')) !!}
  <div class="controls">
    {!! Form::text('username') !!}
  </div>
</div>

<div class="control-group">
  {!! Form::label('password', 'Password', array('class'=>'control-label')) !!}
  <div class="controls">
    {!! Form::password('password') !!}
  </div>
</div>

<div class="form-action">
  {!! Form::submit('SAVE', array('class'=>'btn btn-success')) !!}
</div>
{!! Form::close( ) !!}
@stop
