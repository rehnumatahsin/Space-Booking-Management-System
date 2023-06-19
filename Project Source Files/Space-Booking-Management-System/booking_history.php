<?php
session_start();

if ($_SESSION["Login"] != "YES") //if the user is not logged in or has been logged out
	header("Location: index.php");

?>

<html>

<head>
	<title>History</title>
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
	require("./Table/config.php");

	$find = $_SESSION['id'];
	$sql = "SELECT * FROM form WHERE id LIKE '%$find%'";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {

	?>

		<h1>Your Booking History</h1>


		<!-- Start table -->
		<table>
			<tr>
				<td> Staff Username : </td>
				<td> <?php echo $_SESSION["USER"]   ?> </td>
			</tr>


			<tr>
				<td> Staff ID : </td>
				<td> <?php echo $_SESSION["id"]   ?> </td>
			</tr>
		</table>
		<br>
		<br>


		<table width="600" border="1" cellspacing="0" cellpadding="3">

			<!-- Print table heading -->
			<tr>

				<th align="center"><strong>Start Date</strong></th>
				<th align="center"><strong>End Date</strong></th>
				<th align="center"><strong>Number of Days</strong></th>
				<th align="center"><strong>Room</strong></th>
				<th align="center"><strong>Status</strong></th>
			</tr>

			<?php
			// output data of each row
			while ($rows = mysqli_fetch_assoc($result)) {

			?>
				<tr>
					<td><?php echo $rows['Sdate']; ?></td>
					<td><?php echo $rows['Edate']; ?></td>
					<td><?php echo $rows['days']; ?></td>
					<td><?php echo $rows['reason']; ?></td>
					<td><?php echo $rows['status']; ?></td>
				</tr>
		<?php
			}
		} else {
			echo '<script>alert("No records found")</script>';
		}

		mysqli_close($conn);
		?>

		</table>
		<br>
		<br>
		<button onclick="window.location.href='check_login.php';">Main Page</button>
</body>

</html>