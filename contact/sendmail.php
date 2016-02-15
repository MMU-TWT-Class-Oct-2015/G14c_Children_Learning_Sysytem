<?php

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "children_learning_system";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO feedback (name, email, subject, message)
VALUES ('$name', '$email', '$subject', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Your email send successfully! Thanks for your feedback! ";
	header( "refresh:3;url=contact.php" );
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>