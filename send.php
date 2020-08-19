<?php
  include ("php/connection.php");
  include ("user_check.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Send Results</title>
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
        <div class="card light-blue z-depth-3">
          <div class="card-content white-text center">
            <h4>FIRST YEAR SOFTWARE</h4>
            <h5>Send Results</h5>
          </div>
        </div>
      </div>

      <div class="row">
      </div>
      <h5 class="center"> Please Select the Results to send!</h5>

      <!-- T1, Q1 -->
      <form action="php/post_send1.php?test1=t1&test2=q1" method="post">
        <div class="col s12 m2 offset-m3">
          <a class="modal-trigger" href="#modal1">
            <div class="card light-blue darken-3 z-depth-3">
              <div class="card-content white-text center">
                <i class="material-icons" style="font-size:300%">assignment_turned_in</i>
                <p class="center" style="font-size:150%">Test 1 & Quiz 1</p>
              </div>
            </div>
          </a>
        </div>

        <!-- T1, Q1 Modal Structure -->
        <div id="modal1" class="modal" style="">
          <div class="modal-content center">
            <span id='txt1'>Are you sure you want to send the Results of Test 1 and Quiz 1?</span><br>
            <div class="row">
              <div class="col m6">
                <select id='year1' class="browser-default" name="year" required>
                  <option value="" disabled selected>Select Year</option>
                  <?php
                    $sql = "SELECT distinct(year) AS Y FROM stu_master;";
                    $res = mysqli_query($conn,$sql);
                    while($row=mysqli_fetch_array($res, MYSQLI_ASSOC))
                    {
                      echo "<option value='".$row['Y']."'>".$row['Y']."</option>";
                    }
                  ?>
                </select>
              </div>
              <div class="col m6">
                <select id='sec1' class="browser-default" name="sec" required>
                  <option value="" disabled selected>Select Section</option>
                </select>
              </div>
            </div>
            <img id='im1' src="" alt="" style="height:247px; width:337px"> <br>
              <button id='butt1'  class="btn waves-effect waves-light light-blue" type="submit" name="action">Send
                <i class="material-icons right">send</i>
              </button>
          </div>
        </div>
      </form>

      <!-- T2, Q2 -->
      <form action="php/post_send1.php?test1=t2&test2=q2" method="post">
        <div class="col s12 m2">
          <a class="modal-trigger" href="#modal2">
            <div class="card light-blue darken-3 z-depth-3">
              <div class="card-content white-text center">
                <i class="material-icons" style="font-size:300%">assignment_turned_in</i>
                <p class="center" style="font-size:150%">Test 2 & Quiz 2</p>
              </div>
            </div>
          </a>
        </div>

        <!-- T2, Q2 Modal Structure -->
        <div id="modal2" class="modal">
          <div class="modal-content center">
            <span id='txt2'>Are you sure you want to send the Results of Test 2 and Quiz 2?</span><br>
            <div class="row">
              <div class="col m6">
                <select id='year2' class="browser-default" name="year" required>
                  <option value="" disabled selected>Select Year</option>
                  <?php
                    $sql = "SELECT distinct(year) AS Y FROM stu_master;";
                    $res = mysqli_query($conn,$sql);
                    while($row=mysqli_fetch_array($res, MYSQLI_ASSOC))
                    {
                      echo "<option value='".$row['Y']."'>".$row['Y']."</option>";
                    }
                  ?>
                </select>
              </div>
              <div class="col m6">
                <select id='sec2' class="browser-default" name="sec" required>
                  <option value="" disabled selected>Select Section</option>
                </select>
              </div>
            </div>
            <img id='im2' src="" alt="" style="height:247px; width:337px"> <br>
              <button id='butt2'  class="btn waves-effect waves-light light-blue" type="submit" name="action">Send
                <i class="material-icons right">send</i>
              </button>
          </div>
        </div>
      </form>

      <!-- T3, LAB -->
      <form action="php/post_send1.php?test1=t3&test2=lab" method="post">
        <div class="col s12 m2">
          <a class="modal-trigger" href="#modal3">
            <div class="card light-blue darken-3 z-depth-3">
              <div class="card-content white-text center">
                <i class="material-icons" style="font-size:300%">assignment_turned_in</i>
                <p class="center" style="font-size:150%">Test 3 & Lab</p>
              </div>
            </div>
          </a>
        </div>

        <!-- T3, LAB Modal Structure -->
        <div id="modal3" class="modal">
          <div class="modal-content center">
            <span id='txt3'>Are you sure you want to send the Results of Test 3 & Lab?</span><br>
            <div class="row">
              <div class="col m6">
                <select id='year3' class="browser-default" name="year" required>
                  <option value="" disabled selected>Select Year</option>
                  <?php
                    $sql = "SELECT distinct(year) AS Y FROM stu_master;";
                    $res = mysqli_query($conn,$sql);
                    while($row=mysqli_fetch_array($res, MYSQLI_ASSOC))
                    {
                      echo "<option value='".$row['Y']."'>".$row['Y']."</option>";
                    }
                  ?>
                </select>
              </div>
              <div class="col m6">
                <select id='sec3' class="browser-default" name="sec" required>
                  <option value="" disabled selected>Select Section</option>
                </select>
              </div>
            </div>
            <img id='im3' src="" alt="" style="height:247px; width:337px"> <br>
              <button id='butt3' class="btn waves-effect waves-light light-blue" type="submit" name="action">Send
                <i class="material-icons right">send</i>
              </button>
          </div>
        </div>
      </form>

      <!-- CIE, ATT -->
      <form action="php/post_send1.php?test1=cie&test2=att" method="post">
        <div class="col s12 m2 offset-m2">
          <a class="modal-trigger" href="#modal4">
            <div class="card light-blue darken-3 z-depth-3">
              <div class="card-content white-text center">
                <i class="material-icons" style="font-size:300%">assignment_turned_in</i>
                <p class="center" style="font-size:110%">CIE & Attendance</p>
              </div>
            </div>
          </a>
        </div>

        <!-- CIE, ATT Modal Structure -->
        <div id="modal4" class="modal" style="">
          <div class="modal-content center">
            <span id='txt4'>Are you sure you want to send the Results of CIE and Attendance?</span><br>
            <div class="row">
              <div class="col m6">
                <select id='year4' class="browser-default" name="year" required>
                  <option value="" disabled selected>Select Year</option>
                  <?php
                    $sql = "SELECT distinct(year) AS Y FROM stu_master;";
                    $res = mysqli_query($conn,$sql);
                    while($row=mysqli_fetch_array($res, MYSQLI_ASSOC))
                    {
                      echo "<option value='".$row['Y']."'>".$row['Y']."</option>";
                    }
                  ?>
                </select>
              </div>
              <div class="col m6">
                <select id='sec4' class="browser-default" name="sec" required>
                  <option value="" disabled selected>Select Section</option>
                </select>
              </div>
            </div>
            <img id='im4' src="" alt="" style="height:247px; width:337px"> <br>
              <button id='butt4'  class="btn waves-effect waves-light light-blue" type="submit" name="action">Send
                <i class="material-icons right">send</i>
              </button>
          </div>
        </div>
      </form>

      <!-- T1 -->
      <form action="php/post_send.php?test=t1" method="post">
        <div class="col s12 m2">
          <a class="modal-trigger" href="#modal5">
            <div class="card light-blue darken-3 z-depth-3">
              <div class="card-content white-text center">
                <i class="material-icons" style="font-size:300%">assignment_turned_in</i>
                <p class="center" style="font-size:150%">Test 1</p>
              </div>
            </div>
          </a>
        </div>

        <!-- T1 Modal Structure -->
        <div id="modal5" class="modal" style="">
          <div class="modal-content center">
            <span id='txt5'>Are you sure you want to send the Results of Test 1?</span><br>
            <div class="row">
              <div class="col m6">
                <select id='year5' class="browser-default" name="year" required>
                  <option value="" disabled selected>Select Year</option>
                  <?php
                    $sql = "SELECT distinct(year) AS Y FROM stu_master;";
                    $res = mysqli_query($conn,$sql);
                    while($row=mysqli_fetch_array($res, MYSQLI_ASSOC))
                    {
                      echo "<option value='".$row['Y']."'>".$row['Y']."</option>";
                    }
                  ?>
                </select>
              </div>
              <div class="col m6">
                <select id='sec5' class="browser-default" name="sec" required>
                  <option value="" disabled selected>Select Section</option>
                </select>
              </div>
            </div>
            <img id='im5' src="" alt="" style="height:247px; width:337px"> <br>
              <button id='butt5'  class="btn waves-effect waves-light light-blue" type="submit" name="action">Send
                <i class="material-icons right">send</i>
              </button>
          </div>
        </div>
      </form>

      <!-- T2 -->
      <form action="php/post_send.php?test=t2" method="post">
        <div class="col s12 m2">
          <a class="modal-trigger" href="#modal6">
            <div class="card light-blue darken-3 z-depth-3">
              <div class="card-content white-text center">
                <i class="material-icons" style="font-size:300%">assignment_turned_in</i>
                <p class="center" style="font-size:150%">Test 2</p>
              </div>
            </div>
          </a>
        </div>

        <!-- T2 Modal Structure -->
        <div id="modal6" class="modal">
          <div class="modal-content center">
            <span id='txt6'>Are you sure you want to send the Results of Test 2?</span><br>
            <div class="row">
              <div class="col m6">
                <select id='year6' class="browser-default" name="year" required>
                  <option value="" disabled selected>Select Year</option>
                  <?php
                    $sql = "SELECT distinct(year) AS Y FROM stu_master;";
                    $res = mysqli_query($conn,$sql);
                    while($row=mysqli_fetch_array($res, MYSQLI_ASSOC))
                    {
                      echo "<option value='".$row['Y']."'>".$row['Y']."</option>";
                    }
                  ?>
                </select>
              </div>
              <div class="col m6">
                <select id='sec6' class="browser-default" name="sec" required>
                  <option value="" disabled selected>Select Section</option>
                </select>
              </div>
            </div>
            <img id='im6' src="" alt="" style="height:247px; width:337px"> <br>
              <button id='butt6'  class="btn waves-effect waves-light light-blue" type="submit" name="action">Send
                <i class="material-icons right">send</i>
              </button>
          </div>
        </div>
      </form>

      <!-- T3 -->
      <form action="php/post_send.php?test=t3" method="post">
        <div class="col s12 m2">
          <a class="modal-trigger" href="#modal7">
            <div class="card light-blue darken-3 z-depth-3">
              <div class="card-content white-text center">
                <i class="material-icons" style="font-size:300%">assignment_turned_in</i>
                <p class="center" style="font-size:150%">Test 3</p>
              </div>
            </div>
          </a>
        </div>

        <!-- T3 Modal Structure -->
        <div id="modal7" class="modal">
          <div class="modal-content center">
            <span id='txt7'>Are you sure you want to send the Results of Test 3?</span><br>
            <div class="row">
              <div class="col m6">
                <select id='year7' class="browser-default" name="year" required>
                  <option value="" disabled selected>Select Year</option>
                  <?php
                    $sql = "SELECT distinct(year) AS Y FROM stu_master;";
                    $res = mysqli_query($conn,$sql);
                    while($row=mysqli_fetch_array($res, MYSQLI_ASSOC))
                    {
                      echo "<option value='".$row['Y']."'>".$row['Y']."</option>";
                    }
                  ?>
                </select>
              </div>
              <div class="col m6">
                <select id='sec3' class="browser-default" name="sec" required>
                  <option value="" disabled selected>Select Section</option>
                </select>
              </div>
            </div>
            <img id='im7' src="" alt="" style="height:247px; width:337px"> <br>
              <button id='butt7' class="btn waves-effect waves-light light-blue" type="submit" name="action">Send
                <i class="material-icons right">send</i>
              </button>
          </div>
        </div>
      </form>

      <!-- Q1 -->
      <form action="php/post_send.php?test=q1" method="post">
        <div class="col s12 m2 offset-m3">
          <a class="modal-trigger" href="#modal8">
            <div class="card light-blue darken-3 z-depth-3">
              <div class="card-content white-text center">
                <i class="material-icons" style="font-size:300%">assignment_turned_in</i>
                <p class="center" style="font-size:150%">Quiz 1</p>
              </div>
            </div>
          </a>
        </div>

        <!-- Q1 Modal Structure -->
        <div id="modal8" class="modal">
          <div class="modal-content center">
            <span id='txt8'>Are you sure you want to send the Results of Quiz 1?</span><br>
            <div class="row">
              <div class="col m6">
                <select id='year8' class="browser-default" name="year" required>
                  <option value="" disabled selected>Select Year</option>
                  <?php
                    $sql = "SELECT distinct(year) AS Y FROM stu_master;";
                    $res = mysqli_query($conn,$sql);
                    while($row=mysqli_fetch_array($res, MYSQLI_ASSOC))
                    {
                      echo "<option value='".$row['Y']."'>".$row['Y']."</option>";
                    }
                  ?>
                </select>
              </div>
              <div class="col m6">
                <select id='sec8' class="browser-default" name="sec" required>
                  <option value="" disabled selected>Select Section</option>
                </select>
              </div>
            </div>
            <img id='im8' src="" alt="" style="height:247px; width:337px" style=> <br>
              <button id='butt8'  class="btn waves-effect waves-light light-blue" type="submit" name="action">Send
                <i class="material-icons right">send</i>
              </button>
          </div>
        </div>
      </form>

      <!-- Q2 -->
      <form action="php/post_send.php?test=q2" method="post">
        <div class="col s12 m2">
          <a class="modal-trigger" href="#modal9">
            <div class="card light-blue darken-3 z-depth-3">
              <div class="card-content white-text center">
                <i class="material-icons" style="font-size:300%">assignment_turned_in</i>
                <p class="center" style="font-size:150%">Quiz 2</p>
              </div>
            </div>
          </a>
        </div>

        <!-- Q2 Modal Structure -->
        <div id="modal9" class="modal">
          <div class="modal-content center">
            <span id='txt9'>Are you sure you want to send the Results of Quiz 2?</span><br>
            <div class="row">
              <div class="col m6">
                <select id='year9' class="browser-default" name="year" required>
                  <option value="" disabled selected>Select Year</option>
                  <?php
                    $sql = "SELECT distinct(year) AS Y FROM stu_master;";
                    $res = mysqli_query($conn,$sql);
                    while($row=mysqli_fetch_array($res, MYSQLI_ASSOC))
                    {
                      echo "<option value='".$row['Y']."'>".$row['Y']."</option>";
                    }
                  ?>
                </select>
              </div>
              <div class="col m6">
                <select id='sec9' class="browser-default" name="sec" required>
                  <option value="" disabled selected>Select Section</option>
                </select>
              </div>
            </div>
            <img id='im9' src="" alt="" style="height:247px; width:337px"> <br>
              <button id='butt9'  class="btn waves-effect waves-light light-blue" type="submit" name="action">Send
                <i class="material-icons right">send</i>
              </button>
          </div>
        </div>
      </form>

      <!-- SEE -->
      <form action="php/post_send.php?test=see" method="post">
        <div class="col s12 m2">
          <a class="modal-trigger" href="#modal10">
            <div class="card light-blue darken-3 z-depth-3">
              <div class="card-content white-text center">
                <i class="material-icons" style="font-size:300%">assignment_turned_in</i>
                <p class="center" style="font-size:107%">Semester End Examination</p>
              </div>
            </div>
          </a>
        </div>

        <!-- SEE Modal Structure -->
        <div id="modal10" class="modal">
          <div class="modal-content center">
            <span id='txt10'>Are you sure you want to send the Results of Semester End Examinations?</span><br>
            <div class="row">
              <div class="col m6">
                <select id='year10' class="browser-default" name="year" required>
                  <option value="" disabled selected>Select Year</option>
                  <?php
                    $sql = "SELECT distinct(year) AS Y FROM stu_master;";
                    $res = mysqli_query($conn,$sql);
                    while($row=mysqli_fetch_array($res, MYSQLI_ASSOC))
                    {
                      echo "<option value='".$row['Y']."'>".$row['Y']."</option>";
                    }
                  ?>
                </select>
              </div>
              <div class="col m6">
                <select id='sec10' class="browser-default" name="sec" required>
                  <option value="" disabled selected>Select Section</option>
                </select>
              </div>
            </div>
            <img id='im10' src="" alt="" style="height:247px; width:337px"> <br>
              <button id='butt10'  class="btn waves-effect waves-light light-blue" type="submit" name="action">Send
                <i class="material-icons right">send</i>
              </button>
          </div>
        </div>
      </form>

      <div class="fixed-action-btn">
        <a href="dir_to_index.php" class="btn-floating btn-large green">
          <i class="large material-icons">home</i>
        </a>
      </div>

      <footer class="light-blue center white-text">
        <div class="container" style="margin-bottom:5px;margin-top:5px;">
          Developed by Department of Information Science & Engineering, BMSCE
        </div>
      </footer>

    <!--  Scripts-->
    <script src="js/jquery-3.1.1.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript">

      $(document).ready(function(){
        $('.modal').modal();
        $('select').material_select();
      });

      $('#butt1').click(function(){
        if(($('#year1').val()) != undefined)
        {
          $('#txt1').text("Please Hold On! This may take several minutes..");
          $("#im1").attr("src","img/loader1.gif");
        }
      });

      $('#butt2').click(function(){
        if(($('#year2').val()) != undefined)
        {
          $('#txt2').text("Please Hold On! This may take several minutes..");
          $("#im2").attr("src","img/loader1.gif");
        }
      });

      $('#butt3').click(function(){
        if(($('#year3').val()) != undefined)
        {
          $('#txt3').text("Please Hold On! This may take several minutes..");
          $("#im3").attr("src","img/loader1.gif");
        }
      });

      $('#butt4').click(function(){
        if(($('#year4').val()) != undefined)
        {
          $('#txt4').text("Please Hold On! This may take several minutes..");
          $("#im4").attr("src","img/loader1.gif");
        }
      });

      $('#butt5').click(function(){
        if(($('#year5').val()) != undefined)
        {
          $('#txt5').text("Please Hold On! This may take several minutes..");
          $("#im5").attr("src","img/loader1.gif");
        }
      });

      $('#butt6').click(function(){
        if(($('#year6').val()) != undefined)
        {
          $('#txt6').text("Please Hold On! This may take several minutes..");
          $("#im6").attr("src","img/loader1.gif");
        }
      });

      $('#butt7').click(function(){
        if(($('#year7').val()) != undefined)
        {
          $('#txt7').text("Please Hold On! This may take several minutes..");
          $("#im7").attr("src","img/loader1.gif");
        }
      });

      $('#butt8').click(function(){
        if(($('#year8').val()) != undefined)
        {
          $('#txt8').text("Please Hold On! This may take several minutes..");
          $("#im8").attr("src","img/loader1.gif");
        }
      });

      $('#butt9').click(function(){
        if(($('#year9').val()) != undefined)
        {
          $('#txt9').text("Please Hold On! This may take several minutes..");
          $("#im9").attr("src","img/loader1.gif");
        }
      });

      $('#butt10').click(function(){
        if(($('#year10').val()) != undefined)
        {
          $('#txt10').text("Please Hold On! This may take several minutes..");
          $("#im10").attr("src","img/loader1.gif");
        }
      });

      $("#year1").change( function() {
        show( this.value, "sec1", "php/ajax/srch_sec_send.php" );
      });

      $("#year2").change( function() {
        show( this.value, "sec2", "php/ajax/srch_sec_send.php" );
      });

      $("#year3").change( function() {
        show( this.value, "sec3", "php/ajax/srch_sec_send.php" );
      });

      $("#year4").change( function() {
        show( this.value, "sec4", "php/ajax/srch_sec_send.php" );
      });

      $("#year5").change( function() {
        show( this.value, "sec5", "php/ajax/srch_sec_send.php" );
      });

      $("#year6").change( function() {
        show( this.value, "sec6", "php/ajax/srch_sec_send.php" );
      });

      $("#year7").change( function() {
        show( this.value, "sec3", "php/ajax/srch_sec_send.php" );
      });

      $("#year8").change( function() {
        show( this.value, "sec4", "php/ajax/srch_sec_send.php" );
      });

      $("#year9").change( function() {
        show( this.value, "sec5", "php/ajax/srch_sec_send.php" );
      });

      $("#year10").change( function() {
        show( this.value, "sec6", "php/ajax/srch_sec_send.php" );
      });
    </script>
  </body>
</html>
