@extends('layouts.master')
@section('content')
<h1>Request Food</h1>

<table class="table table=bordered table-chicken">
  <thead>
    <tr>
      <th>Farm</th>
      <th>Amount</th>
      <th>Approved</th>
    </tr>
    <tbody>
      @foreach($foodList as $value)
        <tr>
          <td>{{$value->name}}</td>
          <td>{{$value->amount}}</td>
          <td>
            {!! Html::link('foodApprove/'.$value->id, 'YES') !!}
            {!! Html::link ('foodNoApprove/'.$value->id, 'No') !!}
          </td>
        </tr>
      @endforeach
    </tbody>
  </thead>
</table>
@stop
