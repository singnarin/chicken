<!doctype html>
<html>
<head>
  <meta charset="utf-8" />
  {!! Html::style('bootstrap/css/bootstrap.min.css') !!}
</head>
<body>
  <div class="page-header" align="center">
    <h1>Chicken V 1.0</h1>
  </div>
  <div class="container">
    <div class="row">
      <div class="span3">
         @include('layouts.menu')
      </div>
      <div class="span9 content">
        @yield('content')
      </div>
    </div>
  </div>
  {!! Html::script('js/jquery.min.js') !!}
  {!! Html::script('bootstrap/js/bootstrap.min.css') !!}
</body>
</html>
