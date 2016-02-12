<!DOCTYPE html>
<html>
<div id="header">

<h1><a href="../home/home.php"><img src="../image/logo.jpg" alt="logo" style="width:px;height:50px;"></a>Children Learning System</h1>
<link href="../css/mystyle.css" rel="stylesheet" type="text/css" />
</div>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <script type="text/javascript">

	function dragInitialize(ev) {
	ev.dataTransfer.effectAllowed='move';
	ev.dataTransfer.setData("Text", ev.target.getAttribute('id'));
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
      alert("correct");
  }else{
    alert("wrong");
  }


	}

	</script>

  <body>

  <table id="tablecssmenu">
    <tr>
    <td><a href='../home/home.php' >Home</a></td>
    <td><a href='../play/play.php'>Play</a></td>
    <td><a href='../result/result.php'>Result</a></td>
    <td><a href='../contact/contact.php'>Contact</a></td>
    </tr>
  </table>
  <div id="body">
<table style="margin-left:180px;">
<tr>
  <td><div id="div1" ondrop="return dropComplete(event)" ondragover="return allowDropStatus(event)">
   <img src="drag.jpg" draggable="true" ondragstart="return dragInitialize(event)" width="250" height="150" id="drag1"></div></td>
   <td><div id="div2" ondrop="return dropComplete(event)" ondragover="return allowDropStatus(event)" style="text-align:center;">LOGO</div></td>
   <tr><td><div id="div1" ondrop="return dropComplete(event)" ondragover="return allowDropStatus(event)">
   <img src="drag.jpg" draggable="true" ondragstart="return dragInitialize(event)" width="250" height="150" id="drag1"></div></td></tr>
   <tr><td><div id="div1" ondrop="return dropComplete(event)" ondragover="return allowDropStatus(event)">
   <img src="banana.jpg" draggable="true" ondragstart="return dragInitialize(event)" width="250" height="150" id="drag5"></div></td></tr>


  </tr>

</table>
  </div>

  </body>
  <footer class="site-footer">
  Copyright © Children Learning System 2016
  </footer>
</html>
