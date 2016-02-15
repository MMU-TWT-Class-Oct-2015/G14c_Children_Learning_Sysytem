<html>
<?php session_start();


	if($_SESSION['uname'] == "")
    header("Location:../register/login.php");
    else {

?>
<div id="header">

<h1 style="font-family: Neurochrome;"> <a href="../about/about.php"><img src="../image/logo.png" alt="logo" style="height:80px;"></a><span style=" position: absolute; top: 43; padding-left: 15; ">Children Learning System
</span></h1>


<link href="../css/style.css" rel="stylesheet" type="text/css" />
</div>
<head>
</head>
<body>
<div id='cssmenu'>
<ul>
   <li><a href='../tutorial/tutorial.php'><span>Tutorial</span></a></li>
   <li class='active'><a href='../about/about.php'><span>About us</span></a></li>
   <li><a href='../play/play.php'><span>Play</span></a></li>
   <li class='last'><a href='../contact/contact.php'><span>Contact</span></a></li>
</ul>
</div>
<span style="margin-left:90%;"> Hi <?php echo $_SESSION['uname']; ?> , <a href="../logout.php" style="color:red;">Logout<a>?</span>
<!-- the container curve-->
<div style="background-color:#F5F5F5; width:780px; margin:0 auto; position:relative; border:3px solid rgba(0,0,0,0); -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:5px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:3%; padding : 10px; ">
<?php } ?>
