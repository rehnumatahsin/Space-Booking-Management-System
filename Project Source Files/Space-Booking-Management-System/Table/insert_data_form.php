<?php

require ("config.php");
// this is the previous attempt//
$sql = "INSERT INTO form (id, name,Sdate, Edate, days, Room, status)
VALUES ('1003', 'Bobby','2022-03-15','2022-03-16', 2, 'Lecture', 'Approved');";
$sql .= "INSERT INTO form (id, name,Sdate, Edate, days, Room, status)
VALUES ('1003', 'Bobby','2022-03-15','2022-03-19', 5, 'lab', 'Approved');";
$sql .= "INSERT INTO form (id, name,Sdate, Edate, days, Room, status)
VALUES ('1004', 'Beth','2022-07-15','2022-07-17', 3, 'Conference', 'Rejected');";
$sql .= "INSERT INTO form (id, name,Sdate, Edate, days, Room, status)
VALUES ('1006', 'Cindy','2022-04-15','2022-04-16', 2, 'Computer', 'Approved');";
$sql .= "INSERT INTO form (id, name,Sdate, Edate, days, Room, status)
VALUES ('1005', 'Chad','2022-05-15','2022-05-17', 3, 'lab', 'Approved');";
$sql .= "INSERT INTO form (id, name,Sdate, Edate, days, Room, status)
VALUES ('1004', 'Beth','2022-01-15','2022-01-16', 2, 'Lecture', 'Approved');";
$sql .= "INSERT INTO form (id, name,Sdate, Edate, days, Room, status)
VALUES ('1005', 'Chad','2022-03-15','2022-03-17', 3, 'Computer', 'Approved');";
$sql .= "INSERT INTO form (id, name,Sdate, Edate, days, Room, status)
VALUES ('1006', 'Cindy','2022-03-15','2022-03-16', 2, 'Computer', 'Approved');";
$sql .= "INSERT INTO form (id, name,Sdate, Edate, days, Room, status)
VALUES ('1005', 'Chad','2022-06-15','2022-06-17', 3, 'lab', 'Rejected');";
$sql .= "INSERT INTO form (id, name,Sdate, Edate, days, Room, status)
VALUES ('1006', 'Cindy','2022-04-15','2022-04-16', 2, 'lab', 'Approved');";
$sql .= "INSERT INTO form (id, name,Sdate, Edate, days, Room, status)
VALUES ('1005', 'Chad','2022-07-15','2022-07-17', 3, 'Lecture', 'Approved');";
$sql .= "INSERT INTO form (id, name,Sdate, Edate, days, Room, status)
VALUES ('1004', 'Beth','2022-02-15','2022-02-16', 2, 'lab', 'Approved');";
$sql .= "INSERT INTO form (id, name,Sdate, Edate, days, Room, status)
VALUES ('1005', 'Chad','2022-09-15','2022-09-17', 3, 'Computer', 'Rejected');";
$sql .= "INSERT INTO form (id, name,Sdate, Edate, days, Room, status)
VALUES ('1006', 'Cindy','2022-06-15','2022-06-16', 2, 'Lecture', 'Approved');";
$sql .= "INSERT INTO form (id, name,Sdate, Edate, days, Room, status)
VALUES ('1005', 'Chad','2022-11-15','2022-11-17', 3, 'lab', 'Approved');";
$sql .= "INSERT INTO form (id, name,Sdate, Edate, days, Room, status)
VALUES ('1006', 'Cindy','2022-07-15','2022-07-16', 2, 'Computer', 'Approved');";
$sql .= "INSERT INTO form (id, name,Sdate, Edate, days, Room, status)
VALUES ('1005', 'Chad','2023-01-15','2023-01-17', 3, 'lab', 'Rejected');";
$sql .= "INSERT INTO form (id, name,Sdate, Edate, days, Room, status)
VALUES ('1006', 'Cindy','2023-02-15','2023-02-19', 5, 'Lecture', 'Approved')";


if (mysqli_multi_query($conn, $sql)) {
  // echo "<h3>New records created successfully</h3>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}



?>
