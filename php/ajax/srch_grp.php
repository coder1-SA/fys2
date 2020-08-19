<?php
  include ("user_check.php");
  $grp_name = $_GET['q'];

  include ('../connection.php');

  $numbers = "";
  $sql1 = "SELECT DISTINCT(smob) AS S FROM groups WHERE grp_name='".$grp_name."';";
  $res1 = mysqli_query($conn, $sql1);
  while($row1 = mysqli_fetch_array($res1, MYSQLI_ASSOC))
  {
    if(strcmp($row1['S'],'undefined')!=0)
      {
        $numbers=$numbers.$row1['S'].",";
      }
  }

  $sql2 = "SELECT DISTINCT(pmob) AS P FROM groups WHERE grp_name='".$grp_name."';";
  $res2 = mysqli_query($conn, $sql2);
  while($row2 = mysqli_fetch_array($res2, MYSQLI_ASSOC))
  {
    if(strcmp($row2['P'],'undefined')!=0)
      {
        $numbers=$numbers.$row2['P'].",";
      }
  }

  echo $numbers;

?>
