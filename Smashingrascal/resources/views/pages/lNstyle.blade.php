@extends('Layouts.app')
  @section('content')



  <div id="lNstyle" class="container-fluid Ssection" style="background-color:#EEEEEE;">
            <h1 class="center"> lNstyle</h1>

            <hr>
              <div class="row">

                <div class="">
              </div>




  <div id="lNstyle-add" class="Ssection">


            <form action="/lNstyle/add" method="post" enctype="multipart/form-data">
              <div class="row" >
                <div class="col-3 center">
                  <img id="lNstylenr1" src="Images\nr1.jpg" style="height:100px;">

                    <h3>Select Emblem</h3>
                    <input id="Sselect-emblem" type="file" name="emblem" >
                </div>

                <div class="col-3 center">
                  <img id="lNstylenr1" src="Images\nr2.png" style="height:100px;">
                  <h3>Select Banner</h3>
                  <input id="Sselect-banner" type="file" name="banner" >
                </div>

                <div class="col-3 center">
                  <img id="lNstylenr1" src="Images\nr3.jpg" style="height:100px;">
                  <h3>Select Icon</h3>
                  <input id="Sselect-icon" type="file" name="icon" >
                </div>

                <div class="col-3 center">
                  <img id="lNstylenr1" src="Images\nr4.jpeg" style="height:100px;">
                    <h3>Color Selector</h3>
                  <div class="input-group colorpicker colorpicker-component">
                    <input id="Sselect-color" type="text" value="#00AABB" class="form-control" name="color"/>

                    <span class="input-group-addon"><i></i></span>

                  </div>
                </div>
              </div>
          <button type="submit" class="button" style="width:100%;">Submit</button>
        </form>

              <div class="Sheadercontent">
                <div class="row">
                  <div id="Spreviewcolor" class="container-fluid Simagebar" style="background-color: black">

                    <div class="row">
                      <img id="Spreviewemblem" class="Semblem" src="" alt="Insert Icon"/>
                      <img id="Spreviewbanner"class="Sbanner" src="" alt="Insert Banner">
                      <img id="Spreviewicon"class="Sicon" src="" alt="Insert Icon">
                    </div>

                  </div>
                </div>
              </div>
</div>

<div id="lNstyle-show" class="Ssection">


</div>


@endsection
