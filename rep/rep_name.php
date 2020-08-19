<?php
  include("../php/connection.php");
  error_reporting(0);
  set_time_limit(0);
  ini_set('memory_limit','128M');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Name Report</title>

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
            <h5 id='hp'>Student Report by Name</h5>
          </div>
        </div>
      </div>
    </div>

        <?php
          $year = base64_decode($_POST['values']);
          $vals = explode(";",$year);
          $name = $vals[0];
          $year = $vals[1];
          $sec = $vals[2];
          $check_sql = "SELECT * FROM stu_master WHERE name='".$name."' AND year='".$year."' AND section='".$sec."';";
          $res1=mysqli_query($conn,$check_sql);
          if($res1->num_rows == 0)
          {
            echo "<div class='row container' style='width:80%'>
                  <div class='center'><h4>Student with specified name does not exist!<h4></div>";
          }
          else
          {
            $row1=mysqli_fetch_array($res1, MYSQLI_ASSOC);
            echo "<div class='row' style='width:100%;padding:0px;margin:0px'>
                    <div class='col m6' style='text-align:right;font-size:200%'>USN</div>
                    <div id='usn' class='col m6' style='font-size:200%'>".strtoupper($row1['usn'])."</div>
                  </div>
                  <div class='row' style='width:100%;padding:0px;margin:0px'>
                    <div class='col m6' style='text-align:right'>Name</div>
                    <div id='name' class='col m6' >".$row1['name']."</div>
                  </div>
                  <div class='row' style='width:100%;padding:0px;margin:0px'>
                    <div class='col m6' style='text-align:right'>Father's Name</div>
                    <div id='fname' class='col m6' >".$row1['fname']."</div>
                  </div>
                  <div class='row' style='width:100%;padding:0px;margin:0px'>
                    <div class='col m6' style='text-align:right'>Year</div>
                    <div id='year' class='col m6' >".$row1['year']."</div>
                  </div>
                  <div class='row' style='width:100%;padding:0px;margin:0px'>
                    <div class='col m6' style='text-align:right'>Section</div>
                    <div id='sec' class='col m6' >".$row1['section']."</div>
                  </div>
                  <div class='row' style='width:100%;padding:0px;margin:0px'>
                    <div class='col m6' style='text-align:right'>Student Mobile Number</div>
                    <div id='smob' class='col m6' >".$row1['smob']."</div>
                  </div>
                  <div class='row' style='width:100%;padding:0px;margin:0px'>
                    <div class='col m6' style='text-align:right'>Parent Mobile Number</div>
                    <div id='pmob' class='col m6' >".$row1['pmob']."</div>
                  </div>
                  <div class='row' style='width:100%;padding:0px;margin:0px'>
                    <div class='col m6' style='text-align:right'>Email</div>
                    <div id='email' class='col m6' >".$row1['email']."</div>
                  </div>
                  <div class='row container' style='width:80%'>";



            echo '<div id="mp" class=""><table style="width:100%">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Test 1</th>
                  <th>Test 2</th>
                  <th>Test 3</th>
                  <th>Quiz 1</th>
                  <th>Quiz 2</th>
                  <th>CIE</th>
                  <th>Attendance</th>
                  <th>Lab</th>
                </tr>
              </thead>
              <tbody>';
              $sql = "SELECT * FROM ".$row1['year']."_".$row1['section']." WHERE name='".$name."';";
              $res = mysqli_query($conn,$sql);
              $i=1;
              while($row = mysqli_fetch_array($res, MYSQLI_ASSOC))
              {
                echo "<tr>";
                echo "<td>".$row['subject']."</td>";
                if(isset($row['t1']))
                  echo "<td>".$row['t1'].' / '.$row['t1_out_of']."</td>";
                else
                  echo "<td>".$row['t1']."</td>";
                if(isset($row['t2']))
                  echo "<td>".$row['t2'].' / '.$row['t2_out_of']."</td>";
                else
                  echo "<td>".$row['t2']."</td>";
                if(isset($row['t3']))
                  echo "<td>".$row['t3'].' / '.$row['t3_out_of']."</td>";
                else
                  echo "<td>".$row['t3']."</td>";
                if(isset($row['q1']))
                  echo "<td>".$row['q1'].' / '.$row['q1_out_of']."</td>";
                else
                  echo "<td>".$row['q1']."</td>";
                if(isset($row['q2']))
                  echo "<td>".$row['q2'].' / '.$row['q2_out_of']."</td>";
                else
                  echo "<td>".$row['q2']."</td>";
                if(isset($row['cie']))
                  echo "<td>".$row['cie'].' / '.$row['cie_out_of']."</td>";
                else
                  echo "<td>".$row['cie']."</td>";
                if(isset($row['att']))
                  echo "<td>".$row['att'].' / '.$row['att_out_of']."</td>";
                else
                echo "<td>".$row['att']."</td>";
                if(isset($row['lab']))
                  echo "<td>".$row['lab'].' / '.$row['lab_out_of']."</td>";
                else
                  echo "<td>".$row['lab']."</td>";
                echo "</tr>";
                $i=$i+1;
              }
              echo '</tbody>
            </table>';
          }
          ?>

      </div>
    </div>
  </div>

    <div class="row">
        <div class="col s12 m12 center">
          <a id="printBut" class="waves-effect waves-light btn-large light-blue">Print</a>
        </div>
      </div>

    <div class="fixed-action-btn">
      <a class="btn-floating btn-large light-blue">
        <i class="large material-icons">mode_edit</i>
      </a>
      <ul>
        <li><a class="btn-floating green email"><span class="large">@</span></a></li>
        <li><a class="btn-floating red mobile"><i class="material-icons">email</i></a></li>
      </ul>
    </div>

    <div class="fixed-action-btn">
      <a href="rep_name_index.php" class="btn-floating btn-large yellow darken-3">
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
    <script type="text/javascript">
      $(document).ready(function() {
        $('select').material_select();
      });
    </script>
    <script type="text/javascript">

    $(document).ready(function() {
      $('select').material_select();
    });

    function printDiv()
    {
      var ques=document.getElementById('hp');
      var divToPrint=document.getElementById('mp');
      var txt_usn=document.getElementById('usn');
      var txt_name=document.getElementById('name');
      var txt_fname=document.getElementById('fname');
      var txt_year=document.getElementById('year');
      var txt_sec=document.getElementById('sec');
      var txt_smob=document.getElementById('smob');
      var txt_pmob=document.getElementById('pmob');
      var txt_email=document.getElementById('email');

      var newWin=window.open('','Print-Window');
      newWin.document.open();
      newWin.document.write('<html><body style="" onload="window.print()">'
                            +'<h1 align="center">'+ques.innerHTML+'</h1>'
                            +'<h3>'
                            +'USN : '+txt_usn.innerHTML+'<br>'
                            +'Name : '+txt_name.innerHTML+'<br>'
                            +'Father\'s Name : '+txt_fname.innerHTML+'<br>'
                            +'Year : '+txt_year.innerHTML+'<br>'
                            +'Section : '+txt_sec.innerHTML+'<br>'
                            +'Student Mobile Number : '+txt_smob.innerHTML+'<br>'
                            +'Parent Mobile Number : '+txt_pmob.innerHTML+'<br>'
                            +'Email : '+txt_email.innerHTML+'<br>'
                            +'</h3><center>'+divToPrint.innerHTML
                            +'</center></body></html>');
      newWin.document.close();
      setTimeout(function(){newWin.close();},10);
    }

    $("#printBut").click(function(){
      printDiv();
    })

    </script>
  </body>
</html>
