@extends('layouts.master')
@section('content')
<h1>User Type</h1>
{!! Html::link('userTypeForm', 'Add User Type', array('class'=>'btn btn-primary')) !!}

<table class="table table=bordered table-chicken">
  <thead>
    <tr>
      <th>Name</th>
      <th>Action</th>
    </tr>
    <tbody>
      @foreach($userType as $value)
        <tr>
          <td>{{$value->name}}</td>
          <td>
            {!! html::link('userTypeForm/'.$value->id, 'Edit') !!}
            {!! html::link('userTypeDelete/'.$value->id, 'Delete') !!}
          </td>
        </tr>
      @endforeach
    </tbody>
  </thead>
</table>
@stop
