@extends('layouts.master')
@section('content')
<h1>Login</h1>
<hr />
{!! Form::open(array('url' => 'login', 'class' => 'form-horizontal')) !!}
@if($errors->has())
<div class="alert alert-danger">
  @foreach($errors->all() as $error)
    {{ $error }}<br />
  @endforeach
</div>
@endif
<div class="control-group">
  {!! Form::label('username', 'username', array('class' => 'control-label')) !!}
  <div class="control">
    {!! Form::text('username') !!}
  </div>
</div>
<div class="control-group">
  {!! Form::label('password', 'password', array('class' => 'control-label')) !!}
  <div class="control">
    {!! Form::text('password') !!}
  </div>
</div>
<div class="control-actions">
  {!! Form::submit('Login', array('class' => 'btn btn-success')) !!}
</div>
{!! Form::close() !!}

@stop
