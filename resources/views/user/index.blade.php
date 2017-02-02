@extends('layouts.master')
@section('content')
<h1>User</h1>
{!! Html::link('userForm', 'Add User', array('class'=>'btn btn-primary')) !!}

<table class="table table=bordered table-chicken">
  <thead>
    <tr>
      <th>Type</th>
      <th>Name</th>
      <th>Action</th>
    </tr>
    <tbody>
      @foreach($user as $value)
        <tr>
          <td>{{$value->userType->name}}</td>
          <td>{{$value->name}}</td>
          <td>
            {!! html::link('userForm/'.$value->id, 'Edit') !!}
            {!! html::link('userDelete/'.$value->id, 'Delete') !!}
          </td>
        </tr>
      @endforeach
    </tbody>
  </thead>
</table>
@stop
