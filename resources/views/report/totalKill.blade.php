@extends('layouts.master')
@section('content')
<h1>Report Total Kill</h1>
<hr />

<table class="table table-bordered table-chicken">
  <thead>
    <tr>
      <th>Farm</th>
      <th>Total</th>
    </tr>
  </thead>
  <tbody>
    @foreach($data as $value)
      <tr>
        <td>{{$value->farm->name}}</td>
        <td>{{$value->totalKill}}</td>
      </tr>
    @endforeach
  </tbody>
</table>
@stop
