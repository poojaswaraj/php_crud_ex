<?php

session_start();
if(isset($_SESSION['user_id']))
{
	
	$id=$_SESSION['user_id'];
	//$login_user=$_SESSION['user_id'];
	
	
}
else
{
	header('location:login.php');
}


?>
	
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Insert form</title>
<link type="text/css" media="all" rel="stylesheet" href="style2.css">
<!--img load javascript-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script language="javascript" type="text/javascript">

function PrintMeSubmitMe()
{
window.print();
SubmitMe();
}

function SubmitMe()
{
document.MyForm.submit();
}
</script>

</head>

<body>

<div>
<form class="form-style-9" action="insert.php" method="post" enctype= "multipart/form-data">
<ul>
 
<p>
    <input type="text" name="name"  placeholder="Name"  />
	</p>
	
	 	<p>
		<input type="file" name="file" id="logo" onchange="readURL(this);">
<img id="blah" src="<?php echo $rr['file'];?>" alt="" width=100 height=100 />

</p>
	<p>
    <input type="text" name="email"  placeholder="Email"    />

</p>
<p>
    <input type="text" name="phone" placeholder="Phone"   />
	</p>
	
	<p>
	
    <input type="text" name="website"  placeholder="Website"   />
</p>
<p>
<input type="text" name="subject"  placeholder="Subject"   />
</p>
<p>
<textarea name="msg" class="field-style" placeholder="MESSAGES"   /></textarea>
</p>
<p>
<input type="password" name="password"  placeholder="password"  />
</p>

<p>
<input type="submit" value="Submit" name="submit" />

<!-- <input type="submit" value="print" name="print" onclick="PrintMeSubmitMe(this)" /> -->
</p>
</ul>
</form>
</div>

<?php include('view.php'); ?>

<p>
<div>
<form class="form-style-9" action="logout.php" method="post">
<ul>
<input type="submit" value="logout" name="submit" style="width=20%" />
</p>
</form>
</div>
<!--image load javascript-->
<script type="text/javascript">

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader(); 
            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

</script>
</body>
</html>


<!--  -->