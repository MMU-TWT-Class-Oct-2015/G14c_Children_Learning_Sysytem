<!DOCTYPE html>
<html>
<?php include("../includes/header.php") ?>


<div id="body">

<div id="contact-left">
<form>
	<table>
		<tr>
			<td style="padding-bottom:10px;">Name</td>
			<td style="padding-bottom:10px;">: <input type="text" name="name" id="name" maxlength="30"></td>
		</tr>
		<tr>
			<td style="padding-bottom:10px;">Email</td>
			<td style="padding-bottom:10px;">: <input type="text" name="email" id="email"></td>
		</tr>
		<tr>
			<td style="padding-bottom:10px;">Subject</td>
			<td style="padding-bottom:10px;">: <input type="text" name="subject" id="subject"></td>
		</tr>
		<tr>
			<td style="padding-bottom:10px;">Message :</td>
			<td style="padding-bottom:10px;"><textarea rows="4" cols="50"></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Submit Enquiry" style="padding-right:20px;">
				<input type="reset" value="Clear"></td>
		</tr>
	</table>
</form>
</div>
<div id="contact-right">
	<h3>CONTACT US</h3>
	<p style="color:orange">Phone : </p>
	<p>016-31265478</p>
	<p style="color:orange">Email : </p>
	<p>help@learning.com</p>
	<p style="color:orange">Hour : </p>
	<p>10am - 10pm</p>
</div>


<?php include("../includes/footer.php") ?>
</html>
