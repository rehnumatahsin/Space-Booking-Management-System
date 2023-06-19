<?php

require_once ("config.php");


$sql = "CREATE TABLE user(
 		username varchar(100),
    id varchar(15),
 		password varchar(13),
		level int(3))";
    
if (mysqli_query($conn, $sql)) {
  // echo "<h3>Table user created successfully</h3>";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}
