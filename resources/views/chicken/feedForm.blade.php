@extends('layouts.master')
@section('content')
<h1>Feed Form</h1>
<hr />
{!! Form::open(array('class'=>'form-horizontal')) !!}
<div class="control-group">
  {!! Form::label('create', 'Date', array('class'=>'control-label')) !!}
  <div class="control">
    <input type="date" name="created" required />
  </div>
</div>
<div class="control-group">
  {!! Form::label('food_id', 'Food', array('class'=>'control-label')) !!}
  <div class="control">
      {!!Form::select('food_id', \App\Food::where('approved', '=', 'yes')->pluck('name', 'id')->toArray(), null)!!}
  </div>
</div>
<div class="control-group">
  {!! Form::label('created', 'Date', array('class'=>'control-label')) !!}
  <div class="control">
    {!! Form::text('feed', null, array('required', 'placeholder'=>'ปริมาณอาหาร')) !!}
  </div>
</div>
<div class="form-action">
  {!! Form::submit('Save', array('class'=>'btn btn-success')) !!}
</div>
{!! Form::close() !!}
@stop
