<?php $user = Session::get('user');?>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      @if(@$user[0]->user_type_id == 4)
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Settings
        <span class="glyphicon glyphicon-cog"></span></a>
        <ul class="dropdown-menu">
          <li>{!! Html::link('userType', 'User Type') !!}</li>
          <li>{!! Html::link('user', 'User') !!}</li>
          <li>{!! Html::link('farm', 'Farm') !!}</li>
        </ul>
      </li>
      @endif
      @if(@$user[0]->user_type_id == 2)
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Orders
        <span class="glyphicon glyphicon-book"></span></a>
        <ul class="dropdown-menu">
          <li>{!! Html::link('orderBaby', 'Order Baby') !!}</li>
          <li>{!! Html::link('orderFood', 'Order Food') !!}</li>
          <!-- <li>{!! Html::link('farm', 'Farm') !!}</li> -->
        </ul>
      </li>
      @endif
      @if(@$user[0]->user_type_id == 1)
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Chicken
        <span class="	glyphicon glyphicon-th"></span></a>
        <ul class="dropdown-menu">
          <li>{!! Html::link('feedList', 'Feed') !!}</li>
          <li>{!! Html::link('growthList', 'Growth') !!}</li>
          <li>{!! Html::link('killList', 'Kill') !!}</li>
        </ul>
      </li>
      @endif
      @if(@$user[0]->user_type_id == 3)
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Manager
        <span class="glyphicon glyphicon-user"></span></a>
        <ul class="dropdown-menu">
          <li>{!! Html::link('babyList', 'Request Baby') !!}</li>
          <li>{!! Html::link('foodList', 'Request Food') !!}</li>
          <!-- <li>{!! Html::link('farm', 'Farm') !!}</li> -->
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Report
        <span class="	glyphicon glyphicon-print"></span></a>
        <ul class="dropdown-menu">
          <li>{!! Html::link('totalBaby', 'Total Baby') !!}</li>
          <li>{!! Html::link('totalBig', 'Total Big') !!}</li>
          <li>{!! Html::link('totalForKill', 'Total For Kill') !!}</li>
          <li>{!! Html::link('totalKill', 'Total Kill') !!}</li>
          <li>{!! Html::link('totalSale', 'Total sale') !!}</li>
        </ul>
      </li>
      @endif
    </ul>
    <ul class="nav navbar-nav navbar-right">
      @if(empty($user[0]->name))
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Login</a></li>
      @else
      <li><a href="logout"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      @endif
    </ul>
  </div>
</nav>
