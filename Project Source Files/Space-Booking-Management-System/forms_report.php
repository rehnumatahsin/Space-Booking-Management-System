<?php
session_start();

if ($_SESSION["Login"] != "YES")
	header("Location: login.php");

if ($_SESSION["LEVEL"] == 2) {

?>

	<html>

	<head>
		<title>New  Booking </title>
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

			<h1>All New Booking </h1>

			<?php
			require("./Table/config.php");

			$sql = "SELECT * FROM NewApplication";
			$result = mysqli_query($conn, $sql);

			if (mysqli_num_rows($result) > 0) { 	?>

				<table width="600" border="1" cellspacing="0" cellpadding="3">

					<tr>
						<th align="center"><strong>Name</strong></th>
						<th align="center"><strong>ID</strong></th>
						<th align="center"><strong>Days</strong></th>
						<th align="center"><strong>Room</strong></th>
						<th align="center"><strong>Status</strong></th>
						<th align="center"><strong>Approval</strong></th>
					</tr>

					<?php
					while ($rows = mysqli_fetch_assoc($result)) {
					?>

						<tr>
							<td><?php echo $rows['name']; ?></td>
							<td><?php echo $rows['id']; ?></td>
							<td><?php echo $rows['days']; ?></td>
							<td><?php echo $rows['reason']; ?></td>
							<td><?php echo $rows['status']; ?></td>
							<td align="center">
								<?php $_SESSION["Staffid"] = $rows['id']; ?>
								<?php $_SESSION["days"] = $rows['days']; ?>
								<button onclick="window.location.href='Approve.php';">Approval</button>

							</td>


						</tr>

			<?php }
				}
			} else {
				echo "<h3>There are no records to show</h3>";
			}

			mysqli_close($conn);
			?>

				</table>

				<br><br>

				<button onclick="window.location.href='check_login.php';">Previous Page</button>





		</body>

	</html>