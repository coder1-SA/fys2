<?php
  include("php/connection.php");
  error_reporting(0);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>USN Report</title>

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
            <h5>Edit Marks of Student</h5>
          </div>
        </div>
      </div>
    </div>

    <form class="center" action="php/post_stu_edit_marks.php" method="post">
        <?php
          $check_sql = "SELECT ".$_POST['mtype']." FROM ".base64_decode($_POST['year'])."_".base64_decode($_POST['sec'])." WHERE usn='".$_POST['usn']."';";
          $res1=mysqli_query($conn,$check_sql);
          if($res1->num_rows == 0)
          {
            echo "<div class='row container' style='width:80%'>
                  <div class='center'><h4>Student with specified USN does not exist!<h4></div></div>";
          }
          else
          {
            echo '<h5>Enter Marks of Student : '.$_POST['usn'].' of <span class="orange-text">Section : '.$_POST["sec"].'</span> <br> <span class="green-text">Subject : '.$_POST["sub"].'</span> in '.strtoupper($_POST['mtype']).'</h5>';
            $row=mysqli_fetch_array($res1, MYSQLI_ASSOC);
            echo "<div class='row container' style='width:80%'>";
            echo "<table>";
            echo "<tr>
                    <th class='center' style='width:40%'>Marks</th>
                    <td><input type='text' name='marksnew' value='".$row[$_POST['mtype']]."'>
                  </tr>";
            echo "</table>";
            echo "<input type='text' name='usn' value='".strtoupper($_POST['usn'])."' hidden>";
            echo "<input type='text' name='year' value='".base64_decode($_POST['year'])."' hidden>";
            echo "<input type='text' name='sec' value='".base64_decode($_POST['sec'])."' hidden>";
            echo "<input type='text' name='mtype' value='".$_POST['mtype']."' hidden>";
            echo "<input type='text' name='sub' value='".$_POST['sub']."' hidden>";
          }
          ?>
          <br>
        <button class="btn waves-effect waves-light light-blue" type="submit" name="action">update
          <i class="material-icons right">edit</i>
        </button>
      </form>


    <div class="fixed-action-btn">
      <a href="stu_edit_marks_index.php" class="btn-floating btn-large yellow darken-3">
        <i class="large material-icons">keyboard_backspace</i>
      </a>
      <a href="dir_to_index.php" class="btn-floating btn-large green">
        <i class="large material-icons">home</i>
      </a>
    </div>

    <br><br><br>

    <footer class="light-blue center white-text">
      <div class="container" style="margin-bottom:5px;margin-top:5px;">
        Developed by Department of Information Science & Engineering, BMSCE
      </div>
    </footer>
    <!--  Scripts-->
    <script src="js/jquery-3.1.1.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/sec_entry.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $('select').material_select();
      });
    </script>

  </body>
</html>
