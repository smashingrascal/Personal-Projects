<?php
use \App\Http\Controllers\DesignController;
$Sheader = \App\Http\Controllers\DesignController::getHeader();
  ?>

<div id="Sheadercontent">
  <div class="row">
<div id="Simagebar"class="container-fluid" style="background-color: {{$Sheader['headercolor']}} ">

    <div class="row">
  <img id="Semblem" class="button" onclick="openNav()" src="{{$Sheader['emblem']}}" alt="Secret Button"/>
  <img id="Sbanner" src="{{$Sheader['banner']}}" alt="Card image cap">
  <img id="Sicon" src="{{$Sheader['icon']}}" alt="Oops">
</div>

</div>

<div id="SappDivider" class="container-fluid" >
  <img src="Images\141.png" alt="Secret Button"/>
  @guest
  @else
  <h5 id="Sactiveuser" >{{ Auth::user()->name }}</h5>
  @endguest
</div>
</div>
</div>



<div id="Snavigation" class="Scolumn">
      <a href="/">Dashboard</a>
      <a href="/lNQueue">lNQueue</a>
      <a href="/ChecklN">ChecklN</a>
      <a href="/lNtouch">lNtouch</a>
      <a href="/lNstyle">lNstyle</a>
  @guest
      <a href="{{ route('login') }}">Login</a>
  @else
      <a href="/home">{{ Auth::user()->name }}</a>

      <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                          Logout
      </a>

      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
      </form>

  @endguest

</div>
