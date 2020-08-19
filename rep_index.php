<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Reports Dashboard</title>
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
       height: 33.33vh;
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

    <div class="row">
      <div class="col s12 m12">
        <div id="h" class="card light-blue z-depth-3">
          <div class="card-content white-text center">
            <h4>FIRST YEAR SOFTWARE</h4>
            <h5>Reports Dashboard</h5>
          </div>
        </div>
      </div>

      <div class="row">
      </div>
      <div class="row">
      </div>
      <div class="col s12 m2 offset-m4">
        <a href="rep/rep_sub_index.php">
          <div id="a" class="card light-blue darken-3 z-depth-3">
            <div class="card-content white-text center">
              <i class="material-icons" style="font-size:400%">book</i>
              <p class="center" style="font-size:200%">Subjects Report</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col s12 m2">
        <a href="rep/rep_test_index.php">
          <div id="b" class="card light-blue darken-3 z-depth-3">
            <div class="card-content white-text center">
              <i class="material-icons" style="font-size:400%">assignment_turned_in</i>
              <p class="center" style="font-size:200%">Test <br> Report</p>
            </div>
          </div>
        </a>
      </div>
    </div>
    <div class="row">
      <div class="col s12 m2 offset-m3">
        <a href="rep/rep_usn_index.php">
          <div id="c" class="card light-blue darken-3 z-depth-3" style="height:">
            <div class="card-content white-text center">
              <i class="material-icons" style="font-size:400%">person</i>
              <p class="center" style="font-size:200%">Search by USN</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col s12 m2">
        <a href="rep/rep_name_index.php">
          <div id="d" class="card light-blue darken-3 z-depth-3">
            <div class="card-content white-text center">
              <i class="material-icons" style="font-size:400%">person</i>
              <p class="center" style="font-size:200%">Name Report</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col s12 m2">
        <a href="rep/rep_sec_index.php">
          <div id="e" class="card light-blue darken-3 z-depth-3">
            <div class="card-content white-text center">
              <i class="material-icons" style="font-size:400%">group</i>
              <p class="center" style="font-size:200%">Section Report</p>
            </div>
          </div>
        </a>
      </div>
    </div>

    <div class="fixed-action-btn">
      <a href="dir_to_index.php" class="btn-floating btn-large green">
        <i class="large material-icons">home</i>
      </a>
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
