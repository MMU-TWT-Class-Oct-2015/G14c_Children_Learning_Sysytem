
<html>

<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include("../includes/header.php") ?>
<style>
 	a {
		margin-left: 80px;
	}
</style>
<script type="text/javascript">
	function reflash(){
		location.replace("playstyle.php")
	}
	function goback(){
		location.replace("play.php")
	}
</script>
<body>
	<audio id = 'audioright'>
	  <source src="../play/right.mp3" type="audio/mpeg" />
	</audio>

<a><img src="..\play\image\welldone.jpg" width="600px" height="400px" alt="WELLDONE"></a>
<h1>You have done well !!</h1>
<p><button type="button" name="btn1" onclick="reflash()">AGAIN ??</button>
<button type="button" name="goback()" onclick="goback()">CONTINUE ANOTHER GAME</button></p>


</body>
<?php include("../includes/footer.php") ?>
</html>
