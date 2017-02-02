@extends('layouts.master')
@section('content')
<h1>Order Baby</h1>
{!! Html::link('orderBabyForm', 'Add User', array('class'=>'btn btn-primary')) !!}

<table class="table table=bordered table-chicken">
  <thead>
    <tr>
      <th>Farm</th>
      <th>Amount</th>
      <th>Approve</th>
    </tr>
    <tbody>
      @foreach($orderBaby as $value)
        <tr>
          <td>{{$value->farm->name}}</td>
          <td>{{$value->amount}}</td>
          <td>{{$value->approved}}</td>
        </tr>
      @endforeach
    </tbody>
  </thead>
</table>
@stop
