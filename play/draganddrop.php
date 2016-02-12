<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<src="http://code.jquery.com/jquery-1.11.3.min.js">
<src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js">
<div id="header">

<h1><a href="../home/home.php"><img src="../image/logo.jpg" alt="logo" style="width:px;height:50px;"></a>Children Learning System</h1>
<link href="../css/style.css" rel="stylesheet" type="text/css" />
</div>
<head>
	
<script type="text/javascript">

		function dragInitialize(ev) {
		ev.dataTransfer.effectAllowed='move';
		ev.dataTransfer.setData("Text", ev.target.getAttribute('id'));

		}


		function myFunction() {
			alert("Correct!!");
			location.replace("draganddrop2.php");
}


		function allowDropStatus(ev) {
		ev.preventDefault();
		}


		function dropComplete(ev) {
		ev.preventDefault();
		var data = ev.dataTransfer.getData("Text");
		var ans = "drag1";
		if(data==ans){
		
				ev.target.appendChild(document.getElementById(data));
				myFunction();
		}else{
				alert("Opps~Try Again");

		}


		}
    document.addEventListener("dragstart", function(ev) {
     event.target.style.opacity = "0.4";
 });

    document.addEventListener("dragend", function(ev) {
     event.target.style.opacity = "1";
 });


		</script>

</head>
<body>
<div id='cssmenu'>
<ul>
   <li class='active'><a href='../home/home.php'><span>Home</span></a></li>
   <li><a href='../play/play.php'><span>Play</span></a></li>
   <li><a href='../result/result.php'><span>Result</span></a></li>
   <li class='last'><a href='../contact/contact.php'><span>Contact</span></a></li>
</ul>
</div>

<div id="body">

<table id="dndbody">
  <tr>

    <td><div id="div1"><img src="C:\Users\Jason\Desktop\webtech\play\image\drag.jpg" draggable="true" ondragstart="return dragInitialize(event)" width="250" height="150" id="drag1"></div></td>
    <td><div id="div1"></div></td>
    <td><div id="div1"><img src="C:\Users\Jason\Desktop\webtech\play\image\banana.jpg" draggable="true" ondragstart="return dragInitialize(event)" width="250" height="150" id="drag5"></div></td>

  </tr>

  <tr>

  <td></td>
  <td style="text-align:center;"><strong>Please choose your answer and drag it inside the box given.</strong></td>
  <td></td>

  <tr>

  <td></td>
  <td style=""><div id="answer" ondrop="return dropComplete(event)" ondragover="return allowDropStatus(event)" style="text-align:center;"><strong>LOGO</strong></div></td>
  <td></td>

</tr>
</table>

</div>

<footer class="site-footer">
Copyright © Children Learning System 2016 
</footer>
</body>
</html>
