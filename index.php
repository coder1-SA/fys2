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
       height: 30vh;
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

    <div class="row" style="height:15vh">

    </div>

    <div id="r" class="row">
      <div class="col s12 m12">
          <div id="a" class="center" style="height:30vh" style="background: rgba(252,252,252,1);">
              <img src="img/bms_logo.png" style="width:100px;height:100px;margin-top:25px">
              <p class="center" style="font-size:250%;margin:0px;letter-spacing:4pt">FIRST YEAR DASHBOARD</p>
          </div>
      </div>
    </div>

    <div id="r" class="row">
      <div class="col s12 m3" style="margin-left:37.5vw">
        <a href="rep_index.php">
          <div id="a" class="card light-blue darken-3 z-depth-3" style="height:25vh">
            <div class="card-content white-text center-align" style="height:100%;display:block;justify-content:center;align-items:center;">
              <br>
              <i class="material-icons" style="font-size:400%;margin-top:10px;">description</i> <br>
              <p class="center" style="font-size:150%">Click to View Reports</p>
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

    <!--  Scripts-->
    <script src="js/jquery-3.1.1.js"></script>
    <script src="js/materialize.min.js"></script>
    <script type="text/javascript">

    </script>
  </body>
</html>
