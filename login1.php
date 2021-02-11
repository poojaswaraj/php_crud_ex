<?php
    if (isset($_POST['submit']))
   {     
	 session_start();
    include("config.php");
   
    $username=$_POST['name'];
    $phone=$_POST['password'];
    
    $query = mysqli_query($conn,"SELECT * FROM student WHERE name='$username' and password='$phone'")or die(mysqli_error($conn));
     $row=mysqli_fetch_array($query);
	 $count=mysqli_num_rows($query);
	 if($count==1)
    {
     
		 $_SESSION['user_id']=$row['id'];
		header('location:index.php');
      }
      else
      {
         
   header('location:login.php');
    }
    }
    ?>