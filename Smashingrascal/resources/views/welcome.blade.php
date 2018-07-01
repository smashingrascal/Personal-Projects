<?php
use \App\Http\Controllers\DesignController;
$Sheader = \App\Http\Controllers\DesignController::getHeader();
  ?>

@extends('Layouts.app')

  @section('content')
    <!-- Section for a simple introduction -->

    <h5 id="Swelcome-scroller" class="button" onclick="scrollWelcomeSkills()"> -smash </h5>

    <div id="Sintro">
      <h3 id="Sintromessage" class="center"> Welcome to my domain <br> I hope you got invited here. <br> Otherwise I'd advise you to leave</h3>
      <img src="Images\042.jpg"></img>
    </div>

      <!-- Section for a person introduction of the site -->
    <div id="Swelcome-skills" class="Ssection" >
      <div class="container-fluid">
        <div class = "row">
          <div class = "col-lg-4 col-md-5 Sinfoblock" style="background-color:#FF6D00;">
            <div class="center vcenter">
              <i class="devicon-laravel-plain-wordmark font-size15"></i>
            </div>
          </div>
          <div class = "col-lg-4 col-md-5 Sinfoblock" style="background-color:#FFFFFF">
            <div class="center vcenter">
              <h1 class="center"> For this site I used the following skills: </h1>
            </div>
          </div>

          <div class = "col-lg-4 col-md-5 Sinfoblock" style="background-color:#FF6D00;">
            <div class="center vcenter">
              <i class="devicon-css3-plain-wordmark font-size15"></i>
            </div>
          </div>
        </div>
        <div class = "row">
          <div class = "col-lg-4 col-md-5 Sinfoblock" style="background-color:#FFFFFF;">
            <div class="center vcenter">
            <i class="devicon-javascript-plain font-size15"></i>
          </div>

          </div>

          <div class = "col-lg-4 col-md-5 Sinfoblock" style="background-color:#FF6D00">
            <div class="center vcenter">
              <i class="devicon-html5-plain-wordmark font-size15"></i>
            </div>
          </div>

          <div class = "col-lg-4 col-md-5 Sinfoblock" style="background-color:#FFFFFF;">
            <div class="center vcenter">
              <i class="devicon-photoshop-line font-size15"></i>
            </div>

          </div>
        </div>
      </div>
    </div>

    <!-- Section linking different parts of the site -->
    <div id="Swelcome-projects" class="Ssection" style="background-color:#F0F0F0;">
      <div class="container-fluid">
        <h1>lNstyle - lNqueue - ChecklN - lNtouch</h1>
    </div>
  </div>



@endsection
