<?php

 session_start();
 include ("php/connection.php");
 $flag = 1;
 if(isset($_POST['submit']))
 {
   $user = $_POST['uid'];
   $pass = $_POST['pass'];

   $sql = "SELECT * FROM user_master WHERE username='".$user."';";
   $res = mysqli_query($conn, $sql);
   if($res == FALSE)
   {
     $flag=0;
   }
   else
   {
     $row = mysqli_fetch_array($res, MYSQLI_ASSOC);
     if(strcmp($row['password'],$pass)==0)
     {
       $_SESSION['user']=$row['role'];
       header ("location:aindex.php");
     }
     else
     {
       $flag=0;
     }
   }

 }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <!-- CSS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>

    <style media="screen">
    @font-face
    {
      font-family: R; src: url('fonts/Roboto/Roboto-Regular.ttf');
    }

    body
    {
      font-family: R;
      background: rgba(252,252,252,1);
    }

    #con
    {
      display:flex;
      justify-content:center;
      align-items:center;
      width:100vw;
      height:100vh;
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
    <div id="con">
      <div class="container z-depth-1" style="width:80vw;height:80vh;outline:0;">
      <form data-toggle="validator" class="form-horizontal" action="login.php" method="post"  id="login_form" style="border:none;background:linear-gradient(rgba(252,252,252,1),rgba(252,252,252,1));">
        <fieldset style="border:none">
            <div class="row">
              <div class="center">
                <br><br><br>
                <img src="img/bms_logo.png" style="width:100px;height:100px">
                <h4 style="font-weight:bold;margin:10px;padding:0px;font-size:180%;letter-spacing:5pt;line-height:30px">
                  FIRST YEAR SOFTWARE
                </h4>
              </div>
              <div class="col m12" style="text-align:center;font-size:14pt">
                <div class="row" style="margin:0px;padding:0px">
                  <div class="input-field col m4 offset-m4 s10 offset-s1" style="">
                    <input id="uid" name='uid' type="text" class="validate" style="letter-spacing:2pt" required />
                    <label for="uid" style="color:#000;">User ID</label>
                  </div>
                </div>
                <div class="row" style="margin:0px;padding:0px">
                  <div class="input-field col m4 offset-m4 s10 offset-s1">
                    <input id="pass" name='pass' type="password" class="validate" style="letter-spacing:2pt" required />
                    <label for="pass" style="color:#000;">Password</label>
                  </div>
                </div>

                <?php
                    if($flag==0)
                    {
                      echo "<span style='color:red'>Invalid Username/Password.</span>";
                    }
                ?>

  							<br>
                <!-- Submit Button -->
                <div class="center">
                    <div class="col m4 offset-m4 s4 offset-s4">
                      <button type="submit" style="border:1px solid black;outline:0;background:transparent;color:black;font-size:12pt;border-radius:20px;border-color:black;padding:10px;width:150px;letter-spacing:4pt;margin-top:10px" name='submit'>Login</button>
                    </div>
                </div>
            </div>
          </div>
        </fieldset>
      </form>
    </div>
    </div>
    <footer class="light-blue center white-text">
      <div class="container" style="margin-bottom:5px;margin-top:5px;">
        Developed by Department of Information Science & Engineering, BMSCE
      </div>
    </footer>

  <script type="text/javascript" src="js/jquery-3.1.1.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript">
  /*$(document).ready(function() {
    $("#con").css("margin-top",(($(window).height())/4))
  });*/
  </script>
  </body>
</html>
