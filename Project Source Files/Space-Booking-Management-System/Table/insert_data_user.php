<?php

require ("config.php");


$sql = "INSERT INTO user (username, id, password, level)
VALUES ('Annie', '1001', 'admin1', 1);";
$sql .= "INSERT INTO user (username, id, password, level)
VALUES ('Adam', '1002', 'admin2', 1);";
$sql .= "INSERT INTO user (username, id, password, level)
VALUES ('Bobby', '1003', 'manager1', 2);";
$sql .= "INSERT INTO user (username, id, password, level)
VALUES ('Beth', '1004', 'manager2', 2);";
$sql .= "INSERT INTO user (username, id, password, level)
VALUES ('Chad', '1005','staff1', 3);";
$sql .= "INSERT INTO user (username, id, password, level)
VALUES ('Cindy', '1006','staff2', 3);";




if (mysqli_multi_query($conn, $sql)) {
  // echo "<h3>New records created successfully</h3>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}



?>
