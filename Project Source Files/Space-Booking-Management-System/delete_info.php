<?php
session_start();
require("./Table/config.php");

if ($_SESSION["Login"] != "YES")
	header("Location: login.php");

if ($_SESSION["LEVEL"] == 2) {
	$ID = $_SESSION["Staffid"];
	$days_of_booking = $_SESSION["days"];


	$sql = "DELETE FROM NewApplication WHERE id = '$ID' AND days='$days_of_booking'";

	if (mysqli_query($conn, $sql)) {

		echo '<script>
			alert("Record updated successfully");
			window.location.href="check_login.php";
			</script>';
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	mysqli_close($conn);
} elseif ($_SESSION["LEVEL"] == 1) {
	$ID = $_SESSION["Staffid"];

	$sql = "DELETE FROM user WHERE id = '$ID'";


	if (mysqli_query($conn, $sql)) {

		echo '<script>
			alert("Record deleted successfully");
			window.location.href="check_login.php";
			</script>';
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	mysqli_close($conn);
}
