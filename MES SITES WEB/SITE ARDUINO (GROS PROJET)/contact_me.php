<?php
if(!empty($_POST["send"])) {
	$name = $_POST["userName"];
	$email = $_POST["userEmail"];
	$content = $_POST["content"];

	$conn = mysqli_connect("localhost", "id16265174_lerourayan", "DN}>2}bMhN[m{uYU", "tablcontact") or die("Connection Error: " . mysqli_error($conn));
	mysqli_query($conn, "INSERT INTO tblcontact (user_name, user_email,content) VALUES ('" . $name. "', '" . $email. "','" . $content. "')");
	$insert_id = mysqli_insert_id($conn);
	//if(!empty($insert_id)) {
	   $message = "Your contact information is saved successfully.";
	   $type = "success";
	//}
}
require_once "index.php";
?>