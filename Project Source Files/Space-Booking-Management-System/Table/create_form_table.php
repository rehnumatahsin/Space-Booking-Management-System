<?php

require_once ("config.php");

$sql = "CREATE TABLE form(
		id VARCHAR(15),
 		name VARCHAR(50),
		Sdate VARCHAR(15),
		Edate VARCHAR(15),
 		days INT(2),
		reason TEXT(500) NOT NULL,
		status VARCHAR(50))";

if (mysqli_query($conn, $sql)) {
//   echo "<h3>Table form created successfully</h3>";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}
