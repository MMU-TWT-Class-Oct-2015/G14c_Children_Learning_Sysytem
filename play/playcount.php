
<?php include'../includes/header.php'; ?>

<script>
function myFunction() {
    var x ;


    x = document.getElementById("num").value;


    if (isNaN(x)|| x < 1) {
        alert( "Input not valid" );
        return false;
    }
    if (x != 5){
      alert("Oops...Try Again~ ^_^");
      document.getElementById("num").value="";
    }else if(x==5){

      alert("Correct~");
      location.replace("playcount2.php");
    }
}
</script>
<div class="image">
  <img src="..\play\image\count1.png" alt="Question one image" width="100%" height="100%" />
</div>
<div style="margin-left:280px;">
  <h2>How many apple in there?</h2>
<input id="num">
<button type="button" onclick="myFunction()">Submit</button>
</div>
<?php include '../includes/footer.php';?>
