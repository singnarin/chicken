@extends('layouts.master')
@section('content')
<h1>Chicken List</h1>
{!! Form::open(array('class'=>'form-horizontal')) !!}
<div class="control-group">
  <label for="farm_id" class="control-label">Farm</label>
  <div class="control">
    {!!Form::select('farm_id', \App\Farm::all()->pluck('name', 'id')->toArray(), null)!!}
    {!!Form::submit('Search', array('class'=>'btn btn-success'))!!}
  </div>
</div>
{!!Form::close()!!}

<table class="table table-bordered table-chicken">
  <thead>
    <tr>
      <th>Code</th>
      <th>Weight</th>
      <th>Status</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($chicken as $value)
    <tr>
      <td>{{$value->code}}</td>
      <td>{{$value->weight}}</td>
      <td>{{$value->status}}</td>
      <td>{!! Html::link('growthForm/'.$value->id, 'Growth') !!}</td>
    </tr>
    @endforeach
  </tbody>
</table>
{{$chicken->appends(array('farm_id'=>$farm_id))->links()}}
@stop
