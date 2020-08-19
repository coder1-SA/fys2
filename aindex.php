<?php
  include ("user_check.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>First Year Dashboard</title>
    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <style>
     @font-face
     {
       font-family: R; src: url('fonts/Roboto/Roboto-Regular.ttf');
     }

     body
     {
       font-family: R;
       background: rgba(252,252,252,1);
     }

     #r
     {
       margin: 0px;
       padding: 0px;
       height: 32vh;
     }

     footer
     {
       position: fixed;
       bottom: 0;
       width: 100vw;
     }
    </style>
  </head>
  <body>

    <div id="r" class="row">
      <div class="col s12 m2 offset-m3">
        <a href="sec_entry.php">
          <div id="a" class="card light-blue darken-3 z-depth-3" style="height:30vh">
            <div class="card-content white-text center-align" style="height:100%;display:block;justify-content:center;align-items:center;">
              <br>
              <i class="material-icons" style="font-size:400%;margin-top:10px;">chrome_reader_mode</i> <br>
              <p class="center" style="font-size:150%">Section Entry</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col s12 m2 offset-m2">
        <a href="marks_entry_index.php">
          <div id="a" class="card light-blue darken-3 z-depth-3" style="height:30vh">
            <div class="card-content white-text center-align" style="height:100%;display:block;justify-content:center;align-items:center;">
              <br>
              <i class="material-icons" style="font-size:400%;margin-top:10px;">assessment</i> <br>
              <p class="center" style="font-size:150%">Marks Entry</p>
            </div>
          </div>
        </a>
      </div>
    </div>

    <div id="r" class="row">
      <div class="col s12 m12">
          <div id="a" class="center" style="height:30vh" style="background: rgba(252,252,252,1);">
              <img src="img/bms_logo.png" style="width:100px;height:100px;margin-top:25px">
              <p class="center" style="font-size:250%;margin:0px;letter-spacing:4pt">DASHBOARD</p>
          </div>
      </div>
    </div>

    <div id="r" class="row">
      <div class="col s12 m2 offset-m2">
        <a href="rep_index.php">
          <div id="a" class="card light-blue darken-3 z-depth-3" style="height:30vh">
            <div class="card-content white-text center-align" style="height:100%;display:block;justify-content:center;align-items:center;">
              <br>
              <i class="material-icons" style="font-size:400%;margin-top:10px;">description</i> <br>
              <p class="center" style="font-size:150%">Reports</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col s12 m2">
        <a href="utility.php">
          <div id="a" class="card light-blue darken-3 z-depth-3" style="height:30vh">
            <div class="card-content white-text center-align" style="height:100%;display:block;justify-content:center;align-items:center;">
              <br>
              <i class="material-icons" style="font-size:400%;margin-top:10px;">settings</i> <br>
              <p class="center" style="font-size:150%">Utility</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col s12 m2">
        <a href="send.php">
          <div id="a" class="card light-blue darken-3 z-depth-3" style="height:30vh">
            <div class="card-content white-text center-align" style="height:100%;display:block;justify-content:center;align-items:center;">
              <br>
              <i class="material-icons" style="font-size:400%;margin-top:10px;">send</i> <br>
              <p class="center" style="font-size:150%">Send Results</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col s12 m2">
        <a href="send_text.php">
          <div id="a" class="card light-blue darken-3 z-depth-3" style="height:30vh">
            <div class="card-content white-text center-align" style="height:100%;display:block;justify-content:center;align-items:center;">
              <br>
              <i class="material-icons" style="font-size:400%;margin-top:10px;">send</i> <br>
              <p class="center" style="font-size:150%">Send Text</p>
            </div>
          </div>
        </a>
      </div>
    </div>

    <footer class="blue center white-text">
      <div class="container" style="margin-bottom:5px;margin-top:5px;">
        Developed by Department of Information Science & Engineering, BMSCE
      </div>
    </footer>

    <div class="fixed-action-btn">
      <a href="logout.php" class="btn-floating btn-large green">
        <i class="large material-icons">arrow_forward</i>
      </a>
    </div>

    <!--  Scripts-->
    <script src="js/jquery-3.1.1.js"></script>
    <script src="js/materialize.min.js"></script>
    <script type="text/javascript">

    </script>
  </body>
</html>
