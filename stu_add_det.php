<?php
  include ("php/connection.php");
  include ("user_check.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Add Student Entry</title>

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
            <h5>Add Students to Section</h5>
          </div>
        </div>
      </div>
    </div>

    <form action="php/post_stu_add.php" method="post">
      <div class="row">
        <div class="col m2 offset-m4 input-field">
          <select id='year' name='year' class="browser-default" required>
            <option value="" disabled selected>Select Year</option>
            <?php
              $sql = "SELECT distinct(year) AS y FROM stu_master;";
              $res = mysqli_query($conn,$sql);
              while($row=mysqli_fetch_array($res, MYSQLI_ASSOC))
              {
                echo "<option value='".$row['y']."'>".$row['y']."</option>";
              }
            ?>
          </select>
        </div>

        <div class="col m2 input-field">
          <select id='sec' name='sec' class="browser-default" required>
            <option value="" disabled selected>Select Section</option>
          </select>
        </div>

        <input class='val' type="text" name="count" hidden="true">
      </div>

      <div class="row container center" style="width:100%">
        <h5 class="center">Upload Student Details</h5><br>
        <div class="col m4 offset-m3">
          <div class="file-field input-field">
            <div class="btn light-blue">
              <span>File</span>
              <input type="file" id="fileUpload">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>
        </div>
        <div class="col m1">
          <input class="btn waves-effect waves-light light-blue" style="margin-top:15px" type="button" id="upload" value="Upload" />
        </div>
      </div>

      <div class="row center">
        <div class="col m2">
          Student Name
        </div>
        <div class="col m2">
          Father's Name
        </div>
        <div class="col m2">
          USN
        </div>
        <div class="col m2">
          Student Mobile Number
        </div>
        <div class="col m2">
          Parent Mobile Number
        </div>
        <div class="col m2">
          Email ID
        </div>
      </div>

      <hr style="width:99%">

      <div id="dvCSV" class="center">

      </div>

      <div class="center">
        <button class="btn waves-effect waves-light light-blue" type="submit" name="action">Submit
          <i class="material-icons right">send</i>
        </button>
      </div>

    </form>

    <div class="fixed-action-btn">
      <a class="btn-floating btn-large light-blue">
        <i class="large material-icons">mode_edit</i>
      </a>
      <ul>
        <li><a class="btn-floating green add"><i class="material-icons">add</i></a></li>
        <li><a class="btn-floating disabled red delete"><i class="material-icons">delete</i></a></li>
      </ul>
    </div>

    <div class="fixed-action-btn">
      <a href="utility.php" class="btn-floating btn-large yellow darken-3">
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
    <script src="js/main.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $('select').material_select();
      });

      $("#year").change( function() {
        show( this.value, "sec", "php/ajax/srch_sec_stu_add.php" );
      });
    </script>
    <script type="text/javascript">
    $(function () {
        $("#upload").bind("click", function () {
            var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.csv|.txt)$/;
            if (regex.test($("#fileUpload").val().toLowerCase())) {
                if (typeof (FileReader) != "undefined") {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        var table = $("<div class='row' />");
                        var rows = e.target.result.split("\n");
                        var c = 0;
                        for (var i = 0; i < rows.length; i++) {
                          var cells = rows[i].split(",");

                          if(cells[0]=='' || cells[0]==undefined || cells[1]==undefined || cells[2]==undefined ||
                            cells[3]==undefined || cells[4]==undefined || cells[5]==undefined)
                          {
                            continue;
                          }
                          else
                          {
                            var row = $("<div />");

                            var cell = $("<div class='col m2' />");
                            cell.html("<input type='text' value='"+cells[0]+"' name='name"+(c+1)+"'>");
                            row.append(cell);

                            cell = $("<div class='col m2' />");
                            cell.html("<input type='text' value='"+cells[1]+"' name='fname"+(c+1)+"'>");
                            row.append(cell);

                            cell = $("<div class='col m2' />");
                            cell.html("<input type='text' value='"+cells[2]+"' name='usn"+(c+1)+"'>");
                            row.append(cell);

                            cell = $("<div class='col m2' />");
                            cell.html("<input type='text' value='"+cells[3]+"' name='smob"+(c+1)+"'>");
                            row.append(cell);

                            cell = $("<div class='col m2' />");
                            cell.html("<input type='text' value='"+cells[4]+"' name='pmob"+(c+1)+"'>");
                            row.append(cell);

                            cell = $("<div class='col m2' />");
                            cell.html("<input type='text' value='"+cells[5]+"' name='email"+(c+1)+"'>");
                            row.append(cell);

                            table.append(row);
                            c++;
                          }
                        }
                        $("#dvCSV").html('');
                        $("#dvCSV").append(table);
                    }
                    reader.readAsText($("#fileUpload")[0].files[0]);
                } else {
                    alert("This browser does not support HTML5.");
                }
            } else {
                alert("Please upload a valid CSV file.");
            }
        });
    });
    </script>

  </body>
</html>
