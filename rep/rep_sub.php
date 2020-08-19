<?php
  include("../php/connection.php");
  error_reporting(0);
  set_time_limit(0);
  ini_set('memory_limit','128M');

  $_POST['year'] = base64_decode($_POST['year']);
  $_POST['sec'] = base64_decode($_POST['sec']);
  $_POST['sub'] = base64_decode($_POST['sub']);

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Subject Report</title>

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
            <h5>Subject Report</h5>
          </div>
        </div>
      </div>
    </div>

      <h5 id='hp' class="center">Section : <?php echo '<span id="fsec">'.$_POST['sec'].'</span>' ?> <br>
        Subject : <span id='fsub'>
        <?php
          $sql = "SELECT sub_name FROM subs WHERE abr='".$_POST['sub']."'";
          $res = mysqli_query($conn, $sql);
          $row = mysqli_fetch_array($res, MYSQLI_ASSOC);
          echo $row['sub_name'];
        ?></span>
      </h5>
      <div id='mp' class="row container" style="width:80%">
        <?php
          $check_sql = "SELECT * FROM ".$_POST['year']."_".$_POST['sec'].";";
          if($conn->query($check_sql) == false)
          {
            echo "<div class='center'><h4>This section does not exist!<h4></div>";
          }
          else
          {
            echo '<table id="mytable" style="width:100%">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>USN</th>
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
              $sql = "SELECT * FROM ".$_POST['year']."_".$_POST['sec']." WHERE sub_abr='".$_POST['sub']."';";
              $res = mysqli_query($conn,$sql);
              $i=1;
              while($row = mysqli_fetch_array($res, MYSQLI_ASSOC))
              {
                echo "<tr>";
                echo "<td>".$row['name']."</td>";
                echo "<td>".$row['usn']."</td>";
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

      <div class="fixed-action-btn">
        <a href="rep_sub_index.php" class="btn-floating btn-large yellow darken-3">
          <i class="large material-icons">keyboard_backspace</i>
        </a>
        <a href="../dir_to_index.php" class="btn-floating btn-large green">
          <i class="large material-icons">home</i>
        </a>
      </div>

      <div class="row">
        <div class="col s12 m12 center">
          <a id="printBut" class="waves-effect waves-light btn-large light-blue">Print</a>
          <a id="" onclick="exportexcel()" class="waves-effect waves-light btn-large light-blue">Download Excel</a>
        </div>
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
    <script src="../js/jquery.table2excel.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $('select').material_select();
      });

      function printDiv()
      {
        var ques=document.getElementById('hp');
        var divToPrint=document.getElementById('mp');

        var newWin=window.open('','Print-Window');
        newWin.document.open();
        newWin.document.write('<html><body style="font-family:Segoe UI" onload="window.print()">'
                              +'<h1 align="center">'+ques.innerHTML+'</h1>'
                              +'<center>'+divToPrint.innerHTML
                              +'</center></body></html>');
        newWin.document.close();
        setTimeout(function(){newWin.close();},10);
      }

      $("#printBut").click(function(){
        printDiv();
      })
    </script>
    <script type="text/javascript">
      function exportexcel() {

          $("#mytable").table2excel({

              name: "Table2Excel",

              filename: $.trim($("#fsec").text())+"_"+$.trim($("#fsub").text()),

              fileext: ".xls"

          });

      }
		</script>

  </body>
</html>
