<?php
session_start();

if ($_SESSION["Login"] != "YES") //if the user is not logged in or has been logged out
	header("Location: index.php");

?>

<html>

<head>
	<title>Search</title>
	<link rel="stylesheet" href="./css/table_report.css" type="text/css" />

</head>

<body>

	<?php
	require("./Table/config.php");
	$find = $_POST['staffID'];
	$sql = "SELECT * FROM form WHERE id LIKE '%$find%'";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {

	?>

		<h1>Your Search Result</h1>



		<!-- Start table -->

		<table width="600" border="1" cellspacing="0" cellpadding="3">

			<!-- Print table heading -->
			<tr>
				<th align="center"><strong>Name</strong></th>
				<th align="center"><strong>ID</strong></th>
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
					<td><?php echo $rows['name']; ?></td>
					<td><?php echo $rows['id']; ?></td>
					<td><?php echo $rows['Sdate']; ?></td>
					<td><?php echo $rows['Edate']; ?></td>
					<td><?php echo $rows['days']; ?></td>
					<td><?php echo $rows['reason']; ?></td>
					<td><?php echo $rows['status']; ?></td>
				</tr>

		<?php
			}
		} else {
			echo "<h3>No records found</h3>";
		}

		mysqli_close($conn);
		?>

		</table>

		<br>
		<br>
		<button onclick="window.location.href='search_form.php';">Previous Page</button>


		<button onclick="window.location.href='check_login.php';">Main Page</button>
</body>

</html>