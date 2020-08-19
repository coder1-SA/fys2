<?php
  include("php/connection.php");
  error_reporting(0);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Delete Student</title>

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
            <h5>Delete Student</h5>
          </div>
        </div>
      </div>
    </div>

        <?php
          $check_sql = "SELECT * FROM stu_master WHERE usn='".$_POST['usn']."' AND year='".base64_decode($_POST['year'])."' AND section='".base64_decode($_POST['sec'])."';";
          $res1=mysqli_query($conn,$check_sql);
          if($res1->num_rows == 0)
          {
            echo "<div class='row container' style='width:80%'>
                  <div class='center'><h4>Student with specified USN does not exist!<h4></div>";
          }
          else
          {
            $row1=mysqli_fetch_array($res1, MYSQLI_ASSOC);
            echo "<div class='row' style='width:100%;'>
                    <div class='col m6' style='text-align:right;font-size:200%'>USN</div>
                    <div class='col m6' style='font-size:200%'>".strtoupper($_POST['usn'])."</div>
                    <div class='col m6' style='text-align:right'>Name</div>
                    <div class='col m6' >".$row1['name']."</div>
                    <div class='col m6' style='text-align:right'>Father's Name</div>
                    <div class='col m6' >".$row1['fname']."</div>
                    <div class='col m6' style='text-align:right'>Year</div>
                    <div class='col m6' >".$row1['year']."</div>
                    <div class='col m6' style='text-align:right'>Section</div>
                    <div class='col m6' >".$row1['section']."</div>
                    <div class='col m6' style='text-align:right'>Student Mobile Number</div>
                    <div class='col m6' >".$row1['smob']."</div>
                    <div class='col m6' style='text-align:right'>Parent Mobile Number</div>
                    <div class='col m6' >".$row1['pmob']."</div>
                    <div class='col m6' style='text-align:right'>Email</div>
                    <div class='col m6' >".$row1['email']."</div>
                  </div>
                  <div class='row container' style='width:80%'>";
            echo '<table>
              <thead>
                <tr>
                  <th>Subject</th>
                  <th>Test 1</th>
                  <th>Test 2</th>
                  <th>Test 3</th>
                  <th>Quiz 1</th>
                  <th>Quiz 2</th>
                  <th>SEE</th>
                </tr>
              </thead>
              <tbody>';
              $sql = "SELECT * FROM ".$_POST['year']."_".$_POST['sec']." WHERE usn='".$_POST['usn']."';";
              $res = mysqli_query($conn,$sql);
              $i=1;
              while($row = mysqli_fetch_array($res, MYSQLI_ASSOC))
              {
                echo "<tr>";
                echo "<td>".$row['subject']."</td>";
                echo "<td>".$row['t1']."</td>";
                echo "<td>".$row['t2']."</td>";
                echo "<td>".$row['t3']."</td>";
                echo "<td>".$row['q1']."</td>";
                echo "<td>".$row['q2']."</td>";
                echo "<td>".$row['see']."</td>";
                echo "</tr>";
                $i=$i+1;
              }
              echo '</tbody>
            </table>';
          }
          ?>

      </div>

      <form class="center" action="php/post_stu_del.php" method="post">
        <input type="text" name="year" value="<?php echo base64_decode($_POST['year']); ?>" hidden>
        <input type="text" name="sec" value="<?php echo base64_decode($_POST['sec']); ?>" hidden>
        <input type="text" name="usn" value="<?php echo $_POST['usn']; ?>" hidden>
        <button class="btn waves-effect waves-light light-blue" type="submit" name="action">delete
          <i class="material-icons right">delete</i>
        </button>
      </form>


    <div class="fixed-action-btn">
      <a href="stu_del_index.php" class="btn-floating btn-large yellow darken-3">
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
