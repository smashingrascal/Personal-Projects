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

        <div id="Sheader">
        @include('includes.Navigation')

        </div>
        <div id=Sapplication style="background-color:white;">
          @yield('content')
      </div>
      <div class="footer" style="text-align:right;">
        <h6> Property of Iwan Snapper 2017 </h6>
      </div>
    <!-- Styles -->
    @include('includes.Scripts')
</body>
</html>
