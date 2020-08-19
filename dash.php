<?php
 	session_start();
  error_reporting(0);
?>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Dashboard</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet"  type="text/css" href="css/materialize.min.css" rel="stylesheet">

  <!-- Icon CSS -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<style media="screen">
  a:link, a:visited, a:hover, a:active
  {
      color: black;
      text-decoration: none;
  }

  @font-face {
    font-family: Ropa;
    src: url('../fonts/RopaSans-Regular.otf') format('truetype');
  }


  @font-face {
    font-family: Expressway;
    src: url('../Expressway Regular.ttf') format('truetype');
  }

  @font-face {
    font-family: Jose;
    src: url('../fonts/JosefinSans-Thin.ttf') format('truetype');
  }

  @font-face {
    font-family: LatoLight;
    src: url('../fonts/Lato-Light.ttf') format('truetype');
  }

  #x1
  {
    background:linear-gradient(rgba(255, 170, 0, 0.5), rgba(246,189,72,0.5));
    background-size:cover;
    height:100%;
    color: #000;
    border-width: 1px;
    border-style: solid;
    border-color: #F4AB17;
  }

  #x2
  {
    background:rgba(234,235,239,1);
    height:100%;
    display:flex;
    justify-content:center;
    align-items:center;
    color: #000;
  }

  .t1
  {
    display:flex;
    justify-content:left;
    align-items:center;
    font-size:160%;
    color: #000;
  }

</style>

</head>
<body style="font-family:LatoLight;font-weight:bold;">
  <div class="container-fluid">
    <div class="row" style="letter-spacing:2pt">
      <div id="x1" class="col m3" style="">
        <div class="row">
          <a href="dashboard.php">
            <div class="col m12" style="height:25%;text-align:center">
              <img src="img/bms_logo.png" alt="" height="75px" width="75px"/>
              <br>
              <span style="font-size:180%">Dashboard</span>
            </div>
          </a>
          <div class="col m12 t1" id="d1" style="height:7.5%">
            PATIENT REQUESTS
          </div>
          <div class="col m12 t1" id="d2" style="height:7.5%">
            CARE PROVIDERS
          </div>
          <div class="col m12 t1" id="d3" style="height:7.5%">
            DATA
          </div>
          <div class="col m12 t1" id="d4" style="height:7.5%">
            PATIENT NOTES
          </div>
          <div class="col m12 t1" id="d5" style="height:7.5%">
            INNOVATIONS UTILITY
          </div>
          <div class="col m12 t1" id="d6" style="height:7.5%">
            VIDEOS UTILITY
          </div>
          <div class="col m12 t1" id="d7" style="height:7.5%">
            FAQ UTILITY
          </div>
          <div class="col m12 t1" id="d8" style="height:7.5%">

          </div>
          <div class="col m12 t1" id="d9" style="height:7.5%">

          </div>
          <div id='d10' class="col m12" style="height:7.5%;text-align:center;font-size:60%">
            <span style="border:1px solid black; border-radius:25px;padding:10px;">LOGOUT</span>
          </div>
        </div>
      </div>
      <div id="c2" class="col m9" style="padding:0px">
        <div class="" id="x2">
          <iframe id="frame" src="" width="100%" height="100%" frameborder="00"></iframe>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">

    function removebg()
    {
      for (var i = 1; i < 10; i++)
        $("#d"+i).css("background","transparent");
    }

    $("#d1").click(function() {
      removebg();
      $("#d1").css("background","white");
      document.getElementById('frame').src="dash_1.php?type=1";
    });
    $("#d2").click(function() {
      removebg();
      $("#d2").css("background","white");
      document.getElementById('frame').src="dash_2.php?type=1";
    });
    $("#d3").click(function() {
      removebg();
      $("#d3").css("background","white");
      document.getElementById('frame').src="dash_3.php";
    });
    $("#d4").click(function() {
      removebg();
      $("#d4").css("background","white");
      document.getElementById('frame').src="dash_5.php";
    });
    $("#d5").click(function() {
      removebg();
      $("#d5").css("background","white");
      document.getElementById('frame').src="dash_4.php";
    });
    $("#d6").click(function() {
      removebg();
      $("#d6").css("background","white");
      document.getElementById('frame').src="dash_6.php";
    });
    $("#d7").click(function() {
      removebg();
      $("#d7").css("background","white");
      document.getElementById('frame').src="dash_7.php";
    });
    $("#d10").click(function() {
      window.location.replace("http://aaro.care");
    });
  </script>
</body>
</html>
