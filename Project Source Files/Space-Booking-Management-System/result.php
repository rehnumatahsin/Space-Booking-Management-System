<?php
session_start();
require("./Table/config.php");

if ($_SESSION["Login"] != "YES")
	header("Location: login.php");

if ($_SESSION["LEVEL"] == 3) {

?>

	<html>

	<head>
		<title>Space Booking Status</title>
		<style>
        body {
  margin-left: 280px;
  margin-right: 60px;
  padding: 0px;
  background-color: dimgray;
  overflow: scroll;
  font-family: system-ui;
}

h1 {
  text-align: center;
  color: white;
  padding-top: 20px;
  margin-right: 180px;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 80%;
  border: 2rem;
  background-color: black;
}

th {
  text-align: center;
  padding: 15px;
  color: black;
  border-bottom: 1px solid #81818140;
  background-color: darkorange;
}
td {
  text-align: center;
  padding: 7px;
  color: #ddd;
  border-bottom: 1px solid rgb(0, 32, 102);
}

tr:hover {
  background-color: dimgray;
}
</style>

	</head>

	<body>

		<?php
		$ID = $_SESSION["id"];
		
		$sql = "SELECT * FROM NewApplication WHERE id='$ID'";
		$result = mysqli_query($conn, $sql);
		$rows = mysqli_fetch_assoc($result);
		?>
<p><button onclick="sortTable()">Sort</button></p>

		<h1>Staff Application Status</h1>



		<table width="600" border="1" cellspacing="0" cellpadding="3" id="myTable">

			<tr>
				<th align="center"><strong>Name</strong></th>
				<th align="center"><strong>ID</strong></th>
				<th align="center"><strong>Start Date</strong></th>
				<th align="center"><strong>End Date</strong></th>
				<th align="center"><strong>Number of Days</strong></th>
				<th align="center"><strong>Room</strong></th>
				<th align="center"><strong>Status</strong></th>
			</tr>

			<?php while ($rows = mysqli_fetch_assoc($result)) { ?>
				<tr>
					<td><?php echo $rows['name']; ?></td>
					<td><?php echo $rows['id']; ?></td>
					<td><?php echo $rows['Sdate']; ?></td>
					<td><?php echo $rows['Edate']; ?></td>
					<td><?php echo $rows['days']; ?></td>
					<td><?php echo $rows['reason']; ?></td>
					<td><?php echo $rows['status']; ?></td>
				</tr>
			<?php } ?>

			<table>


			<?php


			mysqli_close($conn);
		} elseif ($_SESSION["LEVEL"] == 2) {


			$ID = $_SESSION["Staffid"];
			$days_of_booking = $_SESSION["days"];

			

			$sql = "SELECT * FROM NewApplication WHERE id='$ID' AND days='$days_of_booking'";
			$result = mysqli_query($conn, $sql);
			$rows = mysqli_fetch_assoc($result);

			$id = $rows['id'];
			$name = $rows['name'];
			$Sdate = $rows['Sdate'];
			$Edate = $rows['Edate'];
			$days = $rows['days'];
			$reason = $rows['reason'];
			$status = $_POST['Approval'];



			$sql = "INSERT INTO form(id, name, Sdate, Edate, days, reason, status) VALUES ('$id','$name','$Sdate','$Edate','$days', '$reason', '$status' )";


			if (mysqli_query($conn, $sql)) {
				echo '<script>
			
			window.location.href="delete_info.php";
			</script>';
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
			mysqli_close($conn);
		}
			?>
			<br>

			<button onclick="window.location.href='check_login.php';">Previous Page</button>
<script>
function sortTable() {
  var table, rows, switching, i, x, y, shouldSwitch;
  table = document.getElementById("myTable");
  switching = true;
  /*Make a loop that will continue until
  no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /*Loop through all table rows (except the
    first, which contains table headers):*/
    for (i = 1; i < (rows.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*Get the two elements you want to compare,
      one from current row and one from the next:*/
      x = rows[i].getElementsByTagName("TD")[0];
      y = rows[i + 1].getElementsByTagName("TD")[0];
      //check if the two rows should switch place:
      if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
        //if so, mark as a switch and break the loop:
        shouldSwitch = true;
        break;
      }
    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark that a switch has been done:*/
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
    }
  }
}
</script>
	</body>

	</html>