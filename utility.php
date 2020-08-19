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
            <h5>Utility</h5>
          </div>
        </div>
      </div>

      <br>
      <h5 class="center"> Please Select the action you wish to perform!</h5>

      <div class="col s12 m2 offset-m3">
        <a href="stu_add_det.php">
          <div class="card light-blue darken-3 z-depth-3">
            <div class="card-content white-text center">
              <i class="material-icons" style="font-size:400%">person</i><i class="material-icons" style="font-size:400%">add</i>
              <p class="center" style="font-size:150%"><br>Add Students to a Section</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col s12 m2">
        <a href="stu_edit_det_index.php">
          <div class="card light-blue darken-3 z-depth-3">
            <div class="card-content white-text center">
              <i class="material-icons" style="font-size:400%">person</i><i class="material-icons" style="font-size:400%">edit</i>
              <p class="center" style="font-size:150%"><br>Edit Details of a Student</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col s12 m2">
        <a href="create_groups.php">
          <div class="card light-blue darken-3 z-depth-3">
            <div class="card-content white-text center">
              <i class="material-icons" style="font-size:400%">group</i><i class="material-icons" style="font-size:400%">add</i>
              <p class="center" style="font-size:150%"><br>Create Group of Students</p>
            </div>
          </div>
        </a>
      </div>

      <div class="col s12 m2 offset-m3">
        <a href="stu_del_index.php">
          <div class="card light-blue darken-3 z-depth-3">
            <div class="card-content white-text center">
              <i class="material-icons" style="font-size:400%">person</i><i class="material-icons" style="font-size:400%">delete</i>
              <p class="center" style="font-size:150%"><br>Delete Student from a Section</p>
            </div>
          </div>
        </a>
      </div>

      <div class="col s12 m2">
        <a href="stu_edit_marks_index.php">
          <div class="card light-blue darken-3 z-depth-3">
            <div class="card-content white-text center">
              <i class="material-icons" style="font-size:400%">format_list_numbered</i><i class="material-icons" style="font-size:400%">edit</i>
              <p class="center" style="font-size:150%"><br>Edit Marks of a Student</p>
            </div>
          </div>
        </a>
      </div>

      <div class="col s12 m2">
        <a href="delete_groups.php">
          <div class="card light-blue darken-3 z-depth-3">
            <div class="card-content white-text center">
              <i class="material-icons" style="font-size:400%">group</i><i class="material-icons" style="font-size:400%">delete</i>
              <p class="center" style="font-size:150%"><br>Delete Group of Students</p>
            </div>
          </div>
        </a>
      </div>

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
    <script type="text/javascript">
      $(document).ready(function(){
        $('.modal').modal();
        $('select').material_select();
      });
    </script>
  </body>
</html>
