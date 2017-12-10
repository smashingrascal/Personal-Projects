<?php
use \App\Http\Controllers\DesignController;
$Sheader = \App\Http\Controllers\DesignController::getHeader();
  ?>

<nav class="navbar sticky-top" style="background-color:{{$Sheader['headercolor']}};">
  <container class="Sheader" >
    <img id="Sbanneremblem" class="Semblem" onclick="openNav()" src="{{$Sheader['emblem']}}" alt="Secret Button"/>
    <img class="Sbanner" src="{{$Sheader['banner']}}" alt="Card image cap">
    @guest
    @else
    <h3 id="Sactiveuser">{{ Auth::user()->name }}</h3>
    @endguest
    <img class="Sicon" src="{{$Sheader['icon']}}" alt="Oops">
</container>
</nav>

  <div id="Snavigation" class="Scolumn">
            <a href="/">Dashboard</a>
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

      <a href="/">lNtouch</a>
    </div>
