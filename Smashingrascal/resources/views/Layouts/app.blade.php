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

      <div id="Stop">
        @include('includes.Navigation')
      </div>
          @yield('content')

    <!-- Styles -->
    @include('includes.Scripts')
</body>
</html>
