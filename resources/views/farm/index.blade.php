@extends('layouts.master')
@section('content')
<h1>Farm</h1>
{!! Html::link('farmForm', 'Add Farm', array('class'=>'btn btn-primary')) !!}

<table class="table table=bordered table-chicken">
  <thead>
    <tr>
      <th>Name</th>
      <th>Action</th>
    </tr>
    <tbody>
      @foreach($farm as $value)
        <tr>
          <td>{{$value->name}}</td>
          <td>
            {!! html::link('farmForm/'.$value->id, 'Edit') !!}
            {!! html::link('farmDelete/'.$value->id, 'Delete') !!}
          </td>
        </tr>
      @endforeach
    </tbody>
  </thead>
</table>
@stop
