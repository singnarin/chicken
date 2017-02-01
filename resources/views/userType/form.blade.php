@extends('layouts.master')
@section('content')
<h1>User Type Form</h1>
{!! Form::model($userType, array('class'=>'form-horizontal')) !!}
<div class="control-group">
  {!! Form::label('name', 'Name', array('class'=>'control-label')) !!}
  <div class="controls">
    {!! Form::text('name') !!}
  </div>
</div>
<div class="form-action">
  {!! Form::submit('SAVE', array('class'=>'btn btn-success')) !!}
</div>
{!! Form::close( ) !!}
@stop
