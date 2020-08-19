<?php
  error_reporting(~E_ALL);
  include("php/connection.php");

  $type;$year;$sec;

  if(isset($_GET['type']))
  {
    $type=$_GET['type'];
  }

  if(strcmp($type,'sec')==0)
  {
    $year=$_GET['year'];
    $sec=$_GET['sec'];
    $sql1 = "DROP TABLE IF EXISTS ".$year."_".$sec.";";
    $sql2 = "DELETE FROM stu_master WHERE year='".$year."' AND section='".$sec."';";
    if($conn->query($sql1)===TRUE && $conn->query($sql2)===TRUE)
    {}
  }


?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>FAILURE.</title>
    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <style>
     @font-face
     { font-family: R; src: url('fonts/Roboto/Roboto-Regular.ttf'); }

     body
     {
       font-family: R;
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
      <div class="col m12 s12 grey lighten-5" style="height:100vh; display:flex; justify-content:center; align-items:center">
        <div class="card light-blue z-depth-3">
          <div class="card-content white-text center">
            <i class="material-icons" style="margin:5px;font-size:400%;">done</i>
            <h4 style="margin:0px;">Failed! Please try again!</h4>
            <?php
              if(isset($_GET['msg']))
              {
                echo "<h6>".$_GET['msg']."</h6>";
              }
            ?>
            <button id="home" name="home" class="btn-floating btn waves-effect waves-light grey lighten-5" style="margin-left:5px;"><i class="material-icons" style="color:#03a9f4">home</i></button>
          </div>
        </div>
      </div>
    </div>

    <footer class="light-blue center white-text">
      <div class="container" style="margin-bottom:5px;margin-top:5px;">
        Developed by Department of Information Science & Engineering, BMSCE
      </div>
    </footer>

    <!--  Scripts-->
    <script src="js/jquery-3.1.1.js"></script>
    <script src="js/materialize.min.js"></script>
    <script type="text/javascript">
      $("#home").click(function(){
        window.location.replace("dir_to_index.php");
      });
    </script>

  </body>
</html>
