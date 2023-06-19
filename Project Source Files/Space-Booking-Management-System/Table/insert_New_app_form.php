<?php

require("config.php");


$sql = "INSERT INTO NewApplication (id, name,Sdate, Edate, days, reason, status)
VALUES ('1004', 'Beth','2021-09-15','2021-09-16', 2, 'Hospital', 'New Application');";
$sql .= "INSERT INTO NewApplication (id, name,Sdate, Edate, days, reason, status)
VALUES ('1005', 'Chad','2021-09-15','2021-09-17', 3, 'Travel', 'New Application');";
$sql .= "INSERT INTO NewApplication (id, name,Sdate, Edate, days, reason, status)
VALUES ('1006', 'Cindy','2021-08-15','2021-08-19', 5, 'Travel', 'New Application')";

if (mysqli_multi_query($conn, $sql)) {
  // echo "<h3>New records created successfully</h3>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
