<?php
  include ("php/connection.php");

  // if(!isset($_POST['year']))
  //   {$_POST['year']=base64_decode($_GET['year']);}
  // else
  //   {$_POST['year']=base64_decode($_POST['year']);}
  // if(!isset($_POST['sec']))
  //   {$_POST['sec']=base64_decode($_GET['sec']);}
  // else
  //   {$_POST['sec']=base64_decode($_POST['sec']);}
  // // if(!isset($_POST['sub']))
  // //   {$_POST['sub']=base64_decode($_GET['sub']);}
  // // else
  // //   {$_POST['sub']=base64_decode($_POST['sub']);}
  // if(!isset($_POST['mtype']))
  //   {$_POST['mtype']=base64_decode($_GET['mtype']);}
  // else
  //   {$_POST['mtype']=base64_decode($_POST['mtype']);}

  $year = $_GET['year'];
  $sec = $_GET['sec'];
  $mtype = $_GET['mtype'];

  $sql = "SELECT * FROM subs;";
  $res = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Marks Entry Index</title>

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
            <h5>Marks Entry Index</h5>
          </div>
        </div>
      </div>
      <div class="col s12 m12 center">
        <h5>Please select the subject whose marks you wish to enter!</h5>
        <h6 style='color:red'>(Please be careful to select the subject ONLY you are handling)</h6>
      </div>

      <div class="col s6 offset-s3 m6 offset-m3">
        <?php
          while($row = mysqli_fetch_array($res, MYSQLI_ASSOC))
          {
            // echo $row['sub_name']."<br>";
            echo '<a class="waves-effect waves-light modal-trigger" href="#modal_'.$row['abr'].'"><span style="font-size:150%;color:red">'.$row['abr'].'</span><span style="font-size:150%"> - '.$row['sub_name'].'</span><a><br>';
            echo '<div id="modal_'.$row['abr'].'" class="modal center">
                    <div class="modal-content">
                      <p style="font-size:120%">Are you sure you want to enter the marks for <br><b style="font-size:125%">'.$row['abr'].' - '.$row['sub_name'].'</b> for the section <b style="font-size:125%">'.base64_decode($year).'_'.base64_decode($sec).'</b></p>
                      <a class="waves-effect waves-light btn light-blue modal-trigger"
                          href="http://10.122.2.126/fys/marks_entry.php?year='.$year.'&sec='.$sec.'&sub='.base64_encode($row['abr']).'&mtype='.$mtype.'">
                          <span style="font-size:150%">YES</span><a>
                      <a class="waves-effect waves-light btn light-blue modal-close" href="#"><span style="font-size:150%">NO</span><a>
                    </div>
                  </div>';

          }
        ?>
      </div>

    </div>

    <footer class="light-blue center white-text">
      <div class="container" style="margin-bottom:5px;margin-top:5px;">
        Developed by Department of Information Science & Engineering, BMSCE
      </div>
    </footer>

    <div class="fixed-action-btn">
      <a href="dir_to_index.php" class="btn-floating btn-large green">
        <i class="large material-icons">home</i>
      </a>
    </div>

    <br><br><br>

    <!--  Scripts-->
    <script src="js/jquery-3.1.1.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/sec_entry.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $('select').material_select();
        $('.modal').modal();
      });
    </script>

  </body>
</html>
