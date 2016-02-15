
<?php include("../includes/header.php") ?>
<h3 style="color:red;font-size:300%;text-align:center">KNOWLEDGE CHECK</h3>

<head>
<meta charset="UTF-8">
<style>
div#test{ border:#000 2px solid; padding:10px 40px 40px 40px; }
div#test{color:blue;text-align:center;line-height:150%;font-size:200%;font-family:"Comic Sans MS";}

</style>
<script>
var pos = 0, body, home, question, choice, choices, chA, chB, chC, correct = 0;
var questions = [
    [ "What is 10 + 4 =", "12", "14", "16", "B" ],
	[ "What is 15 + 25 =", "30", "40", "50", "B" ],
	[ "What is 24 + 14 =", "48", "52", "38", "C" ],
	[ "What is 20 - 9 =", "7", "13", "11", "C" ],
	[ "What is 35 - 26 =", "9", "17", "5", "A" ],
	[ "What is 18 - 12 =", "3", "6", "2", "B" ],
	[ "What is 7 x 3 =", "21", "24", "25", "A" ],
	[ "What is 5 x 9 =", "55", "35", "45", "C" ],
	[ "What is 12 x 6 =", "84", "72", "60", "B" ],
	[ "What is 8 / 2 =", "10", "2", "4", "C" ],
	[ "What is 20 / 5 =", "5", "4", "3", "B" ],
	[ "What is 55 / 5 =", "11", "12", "9", "A" ],
];
function _(x){
	return document.getElementById(x);
}
function renderQuestion(){
	test = _("test");
	if(pos >= questions.length){
		test.innerHTML = "<h2>You got "+correct+" of "+questions.length+" questions correct</h2>";
		_("test_status").innerHTML = "Test Completed";
		pos = 0;
		correct = 0;
		return false;
	}
	_("test_status").innerHTML = "Question "+(pos+1)+" of "+questions.length;
	question = questions[pos][0];
	chA = questions[pos][1];
	chB = questions[pos][2];
	chC = questions[pos][3];
	test.innerHTML = "<h3>"+question+"</h3>";
	test.innerHTML += "<input type='radio' name='choices' value='A'> "+chA+"<br>";
	test.innerHTML += "<input type='radio' name='choices' value='B'> "+chB+"<br>";
	test.innerHTML += "<input type='radio' name='choices' value='C'> "+chC+"<br><br>";
	test.innerHTML += "<button onclick='checkAnswer()'>SUBMIT ANSWER</button>";
}
function checkAnswer(){
	choices = document.getElementsByName("choices");
	for(var i=0; i<choices.length; i++){
		if(choices[i].checked){
			choice = choices[i].value;
		}
	}
	if(choice == questions[pos][4]){
		correct++;
	}
	pos++;
	renderQuestion();
}
window.addEventListener("load", renderQuestion, false);
</script>
</head>
<body>
<h2 id="test_status"></h2>
<div id="test"></div>
<?php include("../includes/footer.php") ?>
