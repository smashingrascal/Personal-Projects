<?php
use \App\Http\Controllers\DesignController;
$Sheader = \App\Http\Controllers\DesignController::getHeader();
  ?>

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!-- Styles -->
    @include('includes.Head')
</head>
<body>
  <div id="app">
        @include('includes.Navigation')
        <div id="Sapplication" style="background-color:{{$Sheader['appcolor']}};">
          @yield('content')
        </div>
      </div>

    <!-- Styles -->
    @include('includes.Scripts')
</body>
</html>
