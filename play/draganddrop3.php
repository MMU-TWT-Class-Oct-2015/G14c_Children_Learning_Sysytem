<!DOCTYPE html>
<html>

<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include("../includes/header.php") ?>
<head>


		<script type="text/javascript">

		function dragInitialize(ev) {
		ev.dataTransfer.effectAllowed='move';
		ev.dataTransfer.setData("Text", ev.target.getAttribute('id'));

		}


		function myFunction1() {
		document.getElementById('audioright').play()
		setTimeout(function(){ location.replace("draganddrop4.php");; }, 3000);
}
		function myFunction2() {
		document.getElementById('audiowrong').play()
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
			myFunction1();
		}else{
			myFunction2();
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
	<audio id = 'audioright'>
	  <source src="../play/right.mp3" type="audio/mpeg" />
	</audio>
		<audio id = 'audiowrong'>
		  <source src="../play/wrong.mp3" type="audio/mpeg" />
	</audio>

<table id="dndbody">
  <tr>
    <td><div id="div1"><img src="..\play\image\fruit2.jpg" draggable="true" ondragstart="return dragInitialize(event)" width="200px" height="150px"id="drag3"></div></td>
		<td><div id="div1"><img src="..\play\image\logo3.png" draggable="true" ondragstart="return dragInitialize(event)" width="200px" height="150px" id="drag1"></div></td>
    <td><div id="div1"><img src="..\play\image\fruit1.jpg" draggable="true" ondragstart="return dragInitialize(event)" width="200px" height="150px" id="drag5"></div></td>

  </tr>

  <tr>


  <td colspan="3" style="text-align:center;"><strong>DRAG YOUR ANSWER TO THE BOX</strong></td>

</tr>
  <tr>


<td colspan="3"><div id="answer" ondrop="return dropComplete(event)" ondragover="return allowDropStatus(event)" style="text-align:center;"><a style="border: 2px solid #36b0b6;border-radius: 5px;"><strong>I WANT LOGO</strong></a></div></td>

</tr>
</table>
</div>
<?php include("../includes/footer.php") ?>
</body>
</html>
