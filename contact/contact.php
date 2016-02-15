<?php include("../includes/header.php") ?>

<title>Contact us !!</title>

<img src="../image/children1.jpg" style="width:100%;"> <p></p>

<form action="sendmail.php" method="post">
	<table>
		<tr>
			<td style="padding-bottom:10px;">Name</td>
			<td style="padding-bottom:10px;">: <input type="text" name="name" id="name" maxlength="30" required></td>
		</tr>
		<tr>
			<td style="padding-bottom:10px;">Email</td>
			<td style="padding-bottom:10px;">: <input type="text" name="email" id="email" required></td>
		</tr>
		<tr>
			<td style="padding-bottom:10px;">Subject</td>
			<td style="padding-bottom:10px;">: <input type="text" name="subject" id="subject" required></td>
		</tr>
		<tr>
			<td style="padding-bottom:10px;">Message : </td>
			<td style="padding-bottom:10px;"><textarea rows="4" cols="50" id="message" name="message" required></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Submit Feedback" >
				<input type="reset" value="Clear"></td>
		</tr>
	</table>
</form>

	<h3 align="center"><b>CONTACT US</b></h3>
	<p align="center"><b style="color:orange">Phone :</b> 016-31265478 &nbsp &nbsp
    	<b style="color:orange">Email :<a href="mailto:help@learning.com" target="_top" style="text-decoration:none;">help@learning.com</a> &nbsp &nbsp
        <b style="color:orange">Hour :</b> 10am - 10pm</p>



<?php include("../includes/footer.php") ?>
