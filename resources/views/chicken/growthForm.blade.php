@extends('layouts.master')
@section('content')
<h1>Growth Form</h1>
<hr />
{!! Form::model($chicken, array('class'=>'form-horizontal')) !!}
<div class="control-group">
  {!! Form::label('weight', 'Weight', array('class'=>'control-label')) !!}
  <div class="controls">
    {!! Form::text('weight') !!}
  </div>
</div>
<div class="form-action">
  {!! Form::submit('SAVE', array('class'=>'btn btn-success')) !!}
</div>
{!! Form::close( ) !!}
@stop
