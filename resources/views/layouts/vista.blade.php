<html>
<head>
  <title>
    @section('title')
      - Sistema de Gestión de Series
    @show
  </title>
   <!-- css bootstrap -->
  {!! Html::style('css/bootstrap.css') !!}
  {!! Html::style('css/menu.css') !!}

    <!-- JQuery -->
    {!! Html::script('js/jquery-1.11.3.min.js') !!}

    <!-- JS Bootstrap -->
    {!! Html::script('js/bootstrap.min.js') !!}
 @section('navbar')
      <div class="row">
        @include('menu.menu')
      </div>
    @show
</head>
<body>
 @yield('content')
  <div class="row-fluid">
    <div class="panel-body">
        <h3>Series</h3>

    </div>
  </div>

{!! Html::script('js/bootstrap.js') !!}

@yield('javascript')
</body>
</html>