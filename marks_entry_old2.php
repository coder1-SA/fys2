<?php
  include ("php/connection.php");

  if(!isset($_POST['year']))
    {$_POST['year']=base64_decode($_GET['year']);}
  else
    {$_POST['year']=base64_decode($_POST['year']);}
  if(!isset($_POST['sec']))
    {$_POST['sec']=base64_decode($_GET['sec']);}
  else
    {$_POST['sec']=base64_decode($_POST['sec']);}
  if(!isset($_POST['sub']))
    {$_POST['sub']=base64_decode($_GET['sub']);}
  else
    {$_POST['sub']=base64_decode($_POST['sub']);}
  if(!isset($_POST['mtype']))
    {$_POST['mtype']=base64_decode($_GET['mtype']);}
  else
    {$_POST['mtype']=base64_decode($_POST['mtype']);}

  if(strcmp($_POST['mtype'],'t1,q1')==0 || strcmp($_POST['mtype'],'t2,q2')==0 || strcmp($_POST['mtype'],'t3,lab')==0 || strcmp($_POST['mtype'],'cie,att')==0)
  {
    $disptype = 2;
    $mt = explode(',',$_POST['mtype']);
  }
  else
  {
    $disptype = 1;
  }

  $sql = "SELECT * FROM subs WHERE abr='".$_POST['sub']."';";
  $res = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($res, MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Marks Entry</title>

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
            <h5>Marks Entry</h5>
          </div>
        </div>
      </div>
    </div>

    <form action="php/post_marks_entry.php?<?php echo "mtype=".$_POST['mtype']."&sec=".$_POST['sec']."&sub=".$_POST['sub']."&year=".$_POST['year']."" ?>"
      method="post">

      <h5 class="center">Enter Marks of <?php echo strtoupper($_POST['mtype']); ?> for <?php echo "<span class='green-text'>Subject : ".$row['sub_name']."</span>"; ?> of <?php echo "<span class='orange-text'>Section : ".$_POST['year'].'_'.$_POST['sec']."</span>"; ?></h5>

      <div class="row container" style="width:100%">

          <?php

          if($disptype==1)
          {
            $sql = "SELECT name, smob, pmob FROM ".$_POST['year']."_".$_POST['sec']." WHERE ".$_POST['mtype']."_mcheck=0 AND sub_abr='".$_POST['sub']."';";
            $res = mysqli_query($conn,$sql);
            if($res->num_rows == 0)
            {
              echo "<br><h5 align='center'>Marks have already been entered for the selected test and subject</h5>";
            }
            else
            {
              echo '<div class="row">
                      <div class="col m4 offset-m4">
                      <select name="out_of" class="browser-default" required>
                        <option value="" disabled selected>Choose Out Of for '.strtoupper($_POST['mtype']).'</option>
                        <option value="40">40</option>
                        <option value="20">20</option>
                        <option value="10">10</option>
                        <option value="50">50</option>
                        <option value="5">5</option>
                      </select>
                      </div>
                    </div>';
              $i=1;
              while($row = mysqli_fetch_array($res, MYSQLI_ASSOC))
              {
                $sql1 = "SELECT usn FROM stu_master WHERE year='".$_POST['year']."' AND section='".$_POST['sec']."' AND name='".$row['name']."' AND smob='".$row['smob']."' AND pmob='".$row['pmob']."';";
                $res1 = mysqli_query($conn, $sql1);
                $row1 = mysqli_fetch_array($res1, MYSQLI_ASSOC);
                echo '<div class="row">
                        <div class="col m3 offset-m2 name">
                          <input type="text" name="name'.$i.'" value="'.$row['name'].'" readonly/>
                        </div>
                        <div class="col m2 name">
                          <input type="text" name="usn'.$i.'" value="'.$row1['usn'].'" readonly/>
                        </div>
                        <div class="col m3 name">
                          <input placeholder="'.strtoupper($_POST['mtype']).' Value" type="text" name="m'.$i.'" />
                        </div>
                      </div>';
                $i=$i+1;
              }
              echo '<div class="center">
                <button class="btn waves-effect waves-light light-blue" type="submit" name="action">Submit
                  <i class="material-icons right">send</i>
                </button>
              </div>';
            }
          }
          elseif($disptype==2)
          {
            $sql = "SELECT name, smob, pmob,".$mt[0]."_mcheck AS c1,".$mt[1]."_mcheck AS c2 FROM ".$_POST['year']."_".$_POST['sec']." WHERE (".$mt[0]."_mcheck=0 OR ".$mt[1]."_mcheck=0) AND sub_abr='".$_POST['sub']."';";
            $res = mysqli_query($conn,$sql);
            if($res->num_rows == 0)
            {
              echo "<br><h5 align='center'>Marks have already been entered for the selected test and subject</h5>";
            }
            else
            {
              echo '<div class="row">
                      <div class="col m4 offset-m2">
                      <select name="t_out_of" class="browser-default" required>
                        <option value="" disabled selected>Choose Out Of for '.strtoupper($mt[0]).'</option>
                        <option value="40">40</option>
                        <option value="20">20</option>
                        <option value="10">10</option>
                        <option value="50">50</option>
                      </select>
                      </div>
                      <div class="col m4">
                      <select name="q_out_of" class="browser-default" required>
                        <option value="" disabled selected>Choose Out Of for '.strtoupper($mt[1]).'</option>
                        <option value="10">10</option>
                        <option value="5">5</option>
                        <option value="20">20</option>
                        <option value="100">100 (for Attendance Only)</option>
                      </select>
                      </div>
                    </div>';
              $i=1;
              while($row = mysqli_fetch_array($res, MYSQLI_ASSOC))
              {
                $sql1 = "SELECT usn FROM stu_master WHERE year='".$_POST['year']."' AND section='".$_POST['sec']."' AND name='".$row['name']."' AND smob='".$row['smob']."' AND pmob='".$row['pmob']."';";
                $res1 = mysqli_query($conn, $sql1);
                $row1 = mysqli_fetch_array($res1, MYSQLI_ASSOC);
                echo '<div class="row">
                        <div class="col m3 name">
                          <input type="text" name="name'.$i.'" value="'.$row['name'].'" readonly/>
                        </div>
                        <div class="col m3 name">
                          <input type="text" name="usn'.$i.'" value="'.$row1['usn'].'" readonly/>
                        </div>
                        <div class="col m3 name">
                        ';
                        if($row['c1']==0)
                        {
                          echo '<input placeholder="'.strtoupper($mt[0]).' Value" type="text" name="m'.$i.'" />';
                        }
                        else
                        {
                          echo '<input value="Already Entered" type="text" name="m'.$i.'" readonly/>';
                        }
                        echo '</div>';

                        echo '<div class="col m3 name">';
                        if($row['c2']==0)
                        {
                          echo '<input placeholder="'.strtoupper($mt[1]).' Value" type="text" name="q'.$i.'" />';
                        }
                        else
                        {
                          echo '<input value="Already Entered" type="text" name="q'.$i.'" readonly/>';
                        }
                        echo '</div>
                      </div>';
                $i=$i+1;
              }
              echo '<div class="center">
                <button class="btn waves-effect waves-light light-blue" type="submit" name="action">Submit
                  <i class="material-icons right">send</i>
                </button>
              </div>';
            }
          }
          ?>
      </div>
    </form>

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
      });
    </script>

  </body>
</html>
