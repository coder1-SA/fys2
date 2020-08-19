<?php
  include ("../php/connection.php")
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Test Report Index</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="../css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <style>
     @font-face
     {
       font-family: R; src: url('../fonts/Roboto/Roboto-Regular.ttf');
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
            <h5>Test Report Index</h5>
          </div>
        </div>
      </div>
    </div>

    <form action="rep_test.php" method="post">
      <div class="row">
        <div class="col s12 m8 offset-m2">
          <div id="h" class="card grey lighten-5 z-depth-1">
            <div class="card-content light-blue-text center">
              <div class="row">
                <div class="col m3 offset-m3 input-field">
                  <select id='year' name='year' class='browser-default' required>
                    <option value="" disabled selected>Select Year</option>
                    <?php
                      $sql = "SELECT distinct(year) AS y FROM stu_master;";
                      $res = mysqli_query($conn,$sql);
                      while($row=mysqli_fetch_array($res, MYSQLI_ASSOC))
                      {
                        echo "<option value='".base64_encode($row['y'])."'>".$row['y']."</option>";
                      }
                    ?>
                  </select>
                </div>

                <div class="col m3 input-field">
                  <select id='sec' name='sec' class='browser-default' required>
                    <option value="" disabled selected>Select Section</option>
                  </select>
                </div>
              </div>

              <div class="row">
                <div class="col m3 offset-m3 input-field">
                  <select id='sub' name='sub' class='browser-default' required>
                    <option value="" disabled selected>Select Subject</option>
                    <?php
                      $sql = "SELECT * FROM subs;";
                      $res = mysqli_query($conn,$sql);
                      while($row=mysqli_fetch_array($res, MYSQLI_ASSOC))
                      {
                        echo "<option value='".base64_encode($row['abr'])."'>".$row['sub_name']."</option>";
                      }
                    ?>
                  </select>
                </div>

                <div class="col m3 input-field">
                  <select id='mtype' name='mtype' class='browser-default' required>
                    <option value="" disabled selected>View Marks For</option>
                    <option value="<?php echo base64_encode('t1');?>">Test 1</option>
                    <option value="<?php echo base64_encode('t2');?>">Test 2</option>
                    <option value="<?php echo base64_encode('t3');?>">Test 3</option>
                    <option value="<?php echo base64_encode('q1');?>">Quiz 1</option>
                    <option value="<?php echo base64_encode('q2');?>">Quiz 2</option>
                    <option value="<?php echo base64_encode('lab');?>">Lab</option>
                    <option value="<?php echo base64_encode('cie');?>">CIE</option>
                    <option value="<?php echo base64_encode('att');?>">Attendance</option>
                    <option value="<?php echo base64_encode('see');?>">Sem End Examination</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="center">
              <button id="em" class="btn waves-effect waves-light light-blue" type="submit" name="action">GENERATE REPORT
                <i class="material-icons right">send</i>
              </button>
            </div>
            <br>
          </div>
        </div>
      </div>

    </form>

    <div class="fixed-action-btn">
      <a href="../rep_index.php" class="btn-floating btn-large yellow darken-3">
        <i class="large material-icons">keyboard_backspace</i>
      </a>
      <a href="../dir_to_index.php" class="btn-floating btn-large green">
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
    <script src="../js/jquery-3.1.1.js"></script>
    <script src="../js/materialize.min.js"></script>
    <script src="../js/sec_entry.js"></script>
    <script src="../js/main.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $('select').material_select();
      });

      $("#year").change( function() {
        show( this.value, "sec", "../php/ajax/srch_sec.php" );
      });

    </script>
  </body>
</html>
