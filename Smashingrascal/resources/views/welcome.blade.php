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
          <div class = "col-lg-4 col-md-5 Sinfoblock" style="background-color:#FFFFFF;">
            <div class="center vcenter">
              <h1> This </h1>
            </div>
          </div>
          <div class = "col-lg-4 col-md-5 Sinfoblock" style="background-color:#000000">
            <div class="center vcenter">
              <h1> Page </h1>
            </div>
          </div>

          <div class = "col-lg-4 col-md-5 Sinfoblock" style="background-color:#FFFFFF;">
            <div class="center vcenter">
              <h1> Is </h1>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Section linking different parts of the site -->
    <div id="Swelcome-projects" class="Ssection">
      <div class="container-fluid">
      <div class = "row">
        <div class = "col-lg-4 col-md-5 Sinfoblock" style="background-color:#000000;">
          <div class="center vcenter">
          <h1> Stil </h1>
        </div>

        </div>

        <div class = "col-lg-4 col-md-5 Sinfoblock" style="background-color:#FFFFFF">
          <div class="center vcenter">
            <h1> Under </h1>
          </div>
        </div>

        <div class = "col-lg-4 col-md-5 Sinfoblock" style="background-color:#000000;">
          <div class="center vcenter">
            <h1> Construction </h1>
          </div>

        </div>
      </div>
    </div>
  </div>



@endsection
