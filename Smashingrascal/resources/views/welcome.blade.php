@extends('Layouts.app')

  @section('content')

    <!-- Section for a simple introduction -->
    <div id="Sintro" class="container-fluid Ssection">
      <div class="center">
        <div>
        <h3> Welcome to my domain <br> I hope you got invited here. <br> Otherwise I'd advise you to leave</h3>
        <h6> -smash </h6>
      </div>
        <img src="Images\042.jpg"></img>
      </div>
      </div>

      <!-- Section for a person introduction of the site -->
    <div id="Swelcome-skills Ssection" >
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
    <div id="Swelcome-projects Ssection">
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
