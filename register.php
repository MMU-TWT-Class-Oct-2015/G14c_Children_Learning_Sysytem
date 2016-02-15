<?php include("../includes/header.php") ?>

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

	//perform the verification
	$email1 = $_POST['email1'];
	$email2 = $_POST['email2'];
	$pass1 = $_POST['pass1'];
	$pass2 = $_POST['pass2'];

	if($email1 == $email2){
		if($pass1 == $pass2){
			//all good, carry on

			$name = mysql_escape_string($_POST['name']);
			$lname = mysql_escape_string($_POST['lname']);
			$uname = mysql_escape_string($_POST['uname']);
			$email1 = mysql_escape_string($email1);
			$email2 = mysql_escape_string($email2);
			$pass1 = mysql_escape_string($pass1);
			$pass2 = mysql_escape_string($pass2);

			$pass1 = md5($pass1);

			$sql = mysql_query("SELECT * FROM `demo` WHERE `uname` = '$uname'");
			if(mysql_num_rows($sql) > 0){
				echo "Sorry, that user already exists.";
				exit();

			}

			mysql_query ("INSERT INTO `demo` (`id`, `name`, `lname`, `uname`, `email`, `pass`) VALUES (NULL, '$name', '$lname', '$uname', '$email1', '$pass1')");




		}else{
			echo "<script>alert('Sorry, your password doesnt match.<br />') </script>";
		}
	}else{
		echo "<script>alert('Sorry, your email doesnt match.<br />') </script>";
	}


}else
?>
</head>
<body>
<div id="back">

<div id="back_header">
REGISTRATION
</div>
<div id="back_form">
<form action="register.php" method="POST">
First Name: <input type="text" name="name" required/><br />
Last Name: <input type="text" name="lname" required /><br />
Username: <input type="text" name="uname"required /><br />
Email: <input type="text" name="email1" required/><br />
Confirm Email: <input type="text" name="email2" /><br />
Password: <input type="text" name="pass1" required/><br />
Confirm Password: <input type="text" name="pass2" /><br />
<input type="submit" value="Register" name="submit"/><br />

</form>

</div>
</div>
<?php include("../includes/footer.php") ?>
