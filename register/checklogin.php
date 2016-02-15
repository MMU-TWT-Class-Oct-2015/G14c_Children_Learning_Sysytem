<?php
include("connection.php");

if(isset($_POST["submit"]))
{
	$cus_username=$_POST["cus_username"];
	$cus_password=$_POST["cus_password"];

	$result = mysql_query("select * from CUSTOMER where cus_username='$cus_username' and cus_password='$cus_password'");

	$row=mysql_fetch_assoc($result);

	if($row)
	{
		$_SESSION["cus_id"]=$row["cus_id"];
		?>
		<script>alert("Login success");</script>
        <?php
        header("Location:profile.php");


	}else
	{
	?>
	<script>alert("Invalid Username and Password");</script>
	<?php
		header("");
	}

	}


?>
