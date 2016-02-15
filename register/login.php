<?php session_start();
?>


<html>
<link href="../css/style.css" rel="stylesheet" type="text/css" />
<head>

<style type = "text/css">
body {font-family:verdana;font-size:15px;}
div#back{background-color:white;border:1px; solid #25b2d5; width:350px; margin:0 auto; box-shadow:1px 0px 15px 25b2d5;}
input{display:block;margin:10px;}
div#back_header{background-color:25b2d5; text-align:center; font-size:22px; font-weight:bold; color:white; padding:20px;}
input[type=text], input[type=password]{font-size:15px;padding:10px;border-radius:3px;border:1px solid #ddd;}
input[type=submit]{background-color:25b2d5;padding:5px 10px 10px; border-radius:3px;border:1px solid #319db8; color:white; font-weight:bold;}
div#back_form {display:flex;justify-content:center;}
</style>
<?php
require('config.php');

if(isset($_POST['submit'])){
	$uname = mysql_escape_string($_POST['uname']);
	$pass = mysql_escape_string($_POST['pass']);
	$pass = md5($pass);


	$sql = mysql_query("SELECT * FROM `users` WHERE `uname` = '$uname' AND `pass` = '$pass'");
	if(mysql_num_rows($sql) > 0){
		$_SESSION['uname'] = $uname;
		header("Location: ../tutorial/tutorial.php");
	}else{
		echo "<script>alert('Wrong Username/Password ')</script>";
	}



}?>
</head>
<body>
<div id="back">

<div id="back_header">
LOGIN
</div>
<div id="back_form">


<form action="login.php" method="POST">
Username: <input type="text" name="uname" required /><br />
Password: <input type="password" name="pass" required/><br />
<input type="submit" name="submit" value="Log in" /><br>
haven't register <a href="../register/register.php">register</a>
</form>
</div>
</div>


</body>
</html>
