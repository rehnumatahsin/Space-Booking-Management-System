<?php
session_start();
require("./Table/config.php");

if ($_SESSION["Login"] != "YES")
	header("Location: login.php");


$ID = $_POST["id"] ?? "";
$username = $_POST["username"];
$Password = $_POST["password"];
$user_level = $_POST["level"];

$_SESSION["USER"] = $username;
$_SESSION["PASS"] = $Password;
$_SESSION["LEVEL"] = $user_level;


$sql = "UPDATE user SET username='$username', password='$Password', level='$user_level'  WHERE id='$ID'";

if (mysqli_query($conn, $sql)) {
	echo '<script>
			alert("Record updated successfully");
			window.location.href="check_login.php";
			</script>';
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
