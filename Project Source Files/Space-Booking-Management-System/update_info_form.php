<?php
session_start();

if ($_SESSION["Login"] != "YES")
	header("Location: login.php");

?>
<html>

<head>
	<title>Updating User Data</title>
	

	<!-- <script >
		function currentInfo(){

			document.getElementById("username").value= "";
			document.getElementById("username").value= "";
			document.getElementById("username").value= "";
			
		}
	</script> -->
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

	<h1>Update User Data Form</h1>
	<br>
	<br>
	<?php
	$ID = $_SESSION["id"];
	require("./Table/config.php");
	$sql = "SELECT * FROM user WHERE id='$ID'";
	$result = mysqli_query($conn, $sql);
	$rows = mysqli_fetch_assoc($result);
	?>

	<?php
	$name = $rows['username'];
	$pass = $rows['password'];
	$lvl = $rows['level'];
	?>

	<!-- <button onclick="currentInfo()">Show Previous ID, Password, Level</button> -->


	<form name="form1" method="post" action="update_info.php">
		<table class="center" border="0" cellspacing="5" cellpadding="0">

			<tr>
				<th align="center">&nbsp;</td>
				<th class="Username" align="center"><strong>Username</strong></th>
				<th class="password" align="center"><strong>Password</strong></th>
				<th class="level" align="center"><strong>Level</strong></th>
				<th align="center">&nbsp;</td>
			</tr>
			<tr>
				<td align="center"><input name="id" type="hidden" id="id" value="<?php echo $rows['id']; ?>"></td>
				<td align="center"><input name="username" type="text" id="username" size="50" value="<?php echo $rows['username'] ?>"></td>
				<td align="center"><input name="password" type="text" id="password" size="13" value="<?php echo $rows['password'] ?>"></td>
				<td align="center"><input name="level" type="text" id="level" size="1" value="<?php echo $rows['level'] ?>"></td>
				<td align="center"><input type="submit" id="update" name="Submit" value="Update"></td>
			</tr>
		</table>
		<br>
		<br>
		<br>
	</form>
	<button id="p_page" onclick="window.location.href='check_login.php';">Previous Page</button>
</body>

</html>

<?php

mysqli_close($conn);
?>