<?php
  session_start();

  if($_SESSION["user"]==1)
  {
    header("location:aindex.php");
  }
  else
  {
    header("location:index.php");
  }

?>
