@extends('layouts.master')
@section('content')
<h1>Oder Baby Form</h1>
<hr />
{!! Form::open(array('class' => 'form-horizontal')) !!}

<div class="control-group">
  {!!Form::label('farm_id', 'Farm', array('class' => 'control-label'))!!}
  <div class="control">
    {!!Form::select('farm_id', \App\Farm::all()->pluck('name', 'id')->toArray(), null)!!}
  </div>
</div>
<div class="control-group">
  {!!Form::label('amount', 'Amount', array('class' => 'control-label'))!!}
  <div class="control">
    {!!Form::text('amount')!!}
  </div>
</div>
<div class="form-action">
  {!! Form::submit('SAVE', array('class'=>'btn btn-success')) !!}
</div>
{!! Form::close() !!}
@stop
