@extends('Layouts.app')
  @section('content')



  <div id="lNstyle" class="container-fluid Ssection center" >
            <h1> lNstyle</h1>
            <button id="lNstyleselect" onclick=""class="button" style="width:80%; height:80px;"><h3>Change Page</h3></button>
            <hr>
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
                    <input id="Sselect-color" type="text" value="#000000" class="form-control" name="color"/>

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
                      <img id="Spreviewemblem" class="Semblem" src="" alt="Insert Emblem"/>
                      <img id="Spreviewbanner"class="Sbanner" src="" alt="Insert Banner">
                      <img id="Spreviewicon"class="Sicon" src="" alt="Insert Icon">
                    </div>

                  </div>
                </div>
              </div>
</div>

<div id="lNstyle-show" class="Ssection">

<h3 class="center"> The following headers are selected at random <br> At some point you will be able to edit and delete them from this page </h3>

@foreach ($styles as $style)
<div class="card text-center border-primary text-center">

      <div class="card-header bg-primary">  <h4 class="center">ID: {{$style->id}} --  {{$style->color}}</h4> </div>


<div class="Simagebar"class="container-fluid" style="background-color: {{$style->color}}; border: solid thin;">

  <div class="row">

    <img class="Semblem" src="{{$style->emblem}}" >
    <img class="Sbanner" src="{{$style->banner}}" >
    <img class="Sicon" src="{{$style->icon}}" >

  </div>


</div>
  <div class="row">
    <div class="center">
      <a><button >Edit</button></a>
      <a href="/lNstyle/destroy/{{$style->id}}"><button>Delete</button></a>
    </div>
  </div>
</div>

<hr>

@endforeach

</div>


@endsection
