@extends('layouts.master')
@section('content')
<h1>Order Food</h1>
{!! Html::link('orderFoodForm', 'Add Order', array('class'=>'btn btn-primary')) !!}

<table class="table table=bordered table-chicken">
  <thead>
    <tr>
      <th>Name</th>
      <th>Amount</th>
      <th>Approve</th>
    </tr>
    <tbody>
      @foreach($orderFood as $value)
        <tr>
          <td>{{$value->name}}</td>
          <td>{{$value->amount}}</td>
          <td>{{$value->approved}}</td>
        </tr>
      @endforeach
    </tbody>
  </thead>
</table>
@stop
