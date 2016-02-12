<!DOCTYPE html>
<html>
<div id="header">

<h1><a href="../home/home.php"><img src="../image/logo.jpg" alt="logo" style="width:px;height:50px;"></a>Children Learning System</h1>
<link href="../css/style.css" rel="stylesheet" type="text/css" />
</div>
<head>
	
    <style>
        #div1, #div2, #div3, #div4, #div5, #div6
        {float:left; width:280px; height:180px; margin:10px;padding:10px;border:1px solid #aaaaaa;}
    </style>
	<script type="text/javascript">

	function dragInitialize(ev) {
	ev.dataTransfer.effectAllowed='move';
	ev.dataTransfer.setData("Text", ev.target.getAttribute('id'));
	return true;
	}

	function allowDropStatus(ev) {
	ev.preventDefault();
	return false;
	}

	function dropComplete(ev) {
	ev.preventDefault();
	var src = ev.dataTransfer.getData("Text");
	ev.target.appendChild(document.getElementById(src));
	ev.stopPropagation();
	return false;
	}
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

<div id="div1" ondrop="return dropComplete(event)" ondragover="return allowDropStatus(event)">
 <img src="drag.jpg" draggable="true" ondragstart="return dragInitialize(event)" width="250" height="150" id="drag1">
</div>

<div id="div2" ondrop="return dropComplete(event)" ondragover="return allowDropStatus(event)" style="text-align:center;">LOGO</div>


<div id="div3" ondrop="return dropComplete(event)" ondragover="return allowDropStatus(event)">
 <img src="banana.jpg" draggable="true" ondragstart="return dragInitialize(event)" width="250" height="150" id="drag3">
</div>

<div id="div4" ondrop="return dropComplete(event)" ondragover="return allowDropStatus(event)" style="text-align:center;">Banana!!!!!</div>

<div id="div5" ondrop="return dropComplete(event)" ondragover="return allowDropStatus(event)">
 <img src="banana.jpg" draggable="true" ondragstart="return dragInitialize(event)" width="250" height="150" id="drag5">
</div>

<div id="div6" ondrop="return dropComplete(event)" ondragover="return allowDropStatus(event)" style="text-align:center;">Banana!!!!!</div>



</div>

<footer class="site-footer">
Copyright © Children Learning System 2016 
</footer>
</body>
</html>