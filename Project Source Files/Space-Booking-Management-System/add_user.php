<?php
session_start();
require("./Table/config.php");

if ($_SESSION["Login"] != "YES")
	header("Location: login.php");

$new_username = $_POST["username"];
$ID = $_POST["id"];
$new_password = $_POST["password"];
$new_Level = $_POST["level"];


$sql = "INSERT INTO user(username, id, password, level) VALUES ('$new_username', '$ID','$new_password','$new_Level')";

if (mysqli_query($conn, $sql)) {
	echo '<script>
			alert("New record created successfully");
			window.location.href="check_login.php";
			</script>';
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
