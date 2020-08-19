<?php
  include ("php/connection.php");
  include ("user_check.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Send Text</title>
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
            <h5>Send Text</h5>
          </div>
        </div>
      </div>

      <div class="row">
      </div>
      <!-- <h5 class="center"> Please Select the Results to send!</h5> -->

      <form action="php/text_send.php" method="post" id='form'>
        <div class="row">

          <div class="col m4 offset-m4">
            <div class="input-field">
              <select id='grp' name='grp' class="browser-default">
                <option value="" disabled selected>Select Group</option>
                <?php
                  $sql = "SELECT distinct(grp_name) AS y FROM groups;";
                  $res = mysqli_query($conn,$sql);
                  while($row=mysqli_fetch_array($res, MYSQLI_ASSOC))
                  {
                    echo "<option value='".$row['y']."'>".$row['y']."</option>";
                  }
                ?>
              </select>
            </div>
            <div class="input-field">
              <input id="mob" placeholder="" type="text" class="validate" name="mob">
              <label for="mob">Enter Mobile Number</label>
            </div>
          </div>
          <div class="col m4 offset-m4">
            <div class="input-field">
              <textarea id="txt" class="materialize-textarea" style="height:120px;" name='txt' maxlength='290'></textarea>
              <label for="txt">Enter SMS Text</label>
            </div>
          </div>
          <div class="col m4 offset-m4 center" style="text-align:right;margin-bottom:10px;">
            <span id='char' style="text-align:right">Characters Left : 290</span>
          </div>
          <div class="col m4 offset-m4 center">
            <button id='butt1'  class="btn waves-effect waves-light light-blue" type="submit" name="action">Send
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
    <script src="js/main1.js"></script>
    <script type="text/javascript">

      $("#grp").change( function() {
        show1( this.value, "mob", "php/ajax/srch_grp.php" );
      });

      $(document).ready(function() {
        $("#txt").keyup(function(){
          $("#char").text("Characters Left : "+(290-($(this).val().length)));
        });
      });

    </script>
  </body>
</html>
