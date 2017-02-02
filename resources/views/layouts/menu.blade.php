<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Settings
        <span class="glyphicon glyphicon-cog"></span></a>
        <ul class="dropdown-menu">
          <li>{!! Html::link('userType', 'User Type') !!}</li>
          <li>{!! Html::link('user', 'User') !!}</li>
          <li>{!! Html::link('farm', 'Farm') !!}</li>
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Orders
        <span class="glyphicon glyphicon-cog"></span></a>
        <ul class="dropdown-menu">
          <li>{!! Html::link('userType', 'User Type') !!}</li>
          <li>{!! Html::link('user', 'User') !!}</li>
          <li>{!! Html::link('farm', 'Farm') !!}</li>
        </ul>
      </li>
    </ul>
  </div>
</nav>
