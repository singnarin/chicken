@extends('layouts.master')
@section('content')
<h1>Request Baby</h1>

<table class="table table=bordered table-chicken">
  <thead>
    <tr>
      <th>Farm</th>
      <th>Amount</th>
      <th>Approved</th>
    </tr>
    <tbody>
      @foreach($babyList as $value)
        <tr>
          <td>{{$value->farm->name}}</td>
          <td>{{$value->amount}}</td>
          <td>
            {!! Html::link('babyApprove/'.$value->id, 'YES') !!}
            {!! Html::link ('babyNoApprove/'.$value->id, 'No') !!}
          </td>
        </tr>
      @endforeach
    </tbody>
  </thead>
</table>
@stop
