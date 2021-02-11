<?php
  ob_start();
  include("config.php");
  if(isset($_GET['id'])!="")
  {
  $delete=$_GET['id'];
  $delete=mysqli_query($conn,"DELETE FROM student WHERE id='$delete'");
  if($delete)
  {
	  header("Location:index.php");
  }
  else
  {
	  echo mysqli_error();
  }
  }
  ob_end_flush();
?>