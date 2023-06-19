<?php
session_start(); // Start up your PHP Session

if ($_SESSION["Login"] != "YES")
	header("Location: login.php");

?>
<!Doctype HTML>
<html>

<head>
	<title>Adding New User</title>
	
	<script src="./Js/user_form.js"></script>
	<style>
		body {
  margin: 0px;
  padding: 0px;
  background-color: white;
  overflow: hidden;
  font-family: system-ui;
}
.clearfix {
  clear: both;
}
.level {
  margin: 0px;
  margin-left: 28px;
  font-weight: bold;
  color: White;
  margin-bottom: 30px;
}

.sidenav {
  height: 100%;
  width: 310px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: black;
  overflow: hidden;
  transition: 0.5s;
  padding-top: 30px;
}
.sidenav a {
  padding: 15px 8px 15px 32px;
  text-decoration: none;
  font-size: 20px;
  color: darkgray;
  display: block;
  transition: 0.3s;
}
.sidenav a:hover {
  color: #f1f1f1;
  background-color: lightgray;
}
.sidenav {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
}
#main {
  transition: margin-left 0.5s;
  padding: 16px;
  margin-left: 300px;
}
.head {
  padding: 20px;
}
.col-div-6 {
  width: 50%;
  float: left;
}
.profile {
  float: right;
  width: 160px;
}
.pro-img {
  float: left;
  width: 40px;
  margin-top: 5px;
}
.profile p {
  color: white;
  font-weight: 500;
  margin-left: 55px;
  margin-top: 10px;
  font-size: 13.5px;
}
.profile p span {
  font-weight: 400;
  font-size: 12px;
  display: block;
  color: #8e8b8b;
}
.col-div-3 {
  width: 25%;
  float: left;
}
.box {
  width: 85%;
  height: 100px;
  background-color: black;
  margin-left: 10px;
  padding: 10px;
}
.box p {
  font-size: 35px;
  color: white;
  font-weight: bold;
  line-height: 30px;
  padding-left: 10px;
  margin-top: 20px;
  display: inline-block;
}
.box p span {
  font-size: 20px;
  font-weight: 400;
  color: #818181;
}
.box-icon {
  font-size: 40px !important;
  float: right;
  margin-top: 35px !important;
  color: #818181;
  padding-right: 10px;
}
.col-div-8 {
  width: 70%;
  float: left;
}
.col-div-4 {
  width: 30%;
  float: left;
}
.content-box {
  padding: 20px;
}
.content-box p {
  margin: 0px;
  font-size: 20px;
  color: #f7403b;
}
.content-box p span {
  float: right;
  background-color: #ddd;
  padding: 3px 10px;
  font-size: 15px;
}

.nav2 {
  display: none;
}

table {
  margin-top: 50px;
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 70%;
  margin-left: 220px;
}
td,
th {
  text-align: left;
  padding: 10px;
  color: Black;
  font:  sans-serif;
}

h1 {
  text-align: center;
  color: darkorange;
}

.add {
  background-color: darkorange;

  color: white;
  font-size: 16px;
  border-radius: 12px;
  cursor: pointer;
  position: relative;
  border-radius: 3.75rem;
  line-height: 2.5rem;
  font-size: 1rem;
  padding: 0px 20px 0px 20px;
  width: 10em;
  border: 1px solid #012880;
  margin-left: 50px;
}

.add:hover {
  background-color: grey;
}
</style>
</head>

<body>

	<div id="mySidenav" class="sidenav">
		<p class="level">Admin</p>
		<a href="check_login.php" class="icon-a"><i class="fa fa-dashboard icons"></i> &nbsp;&nbsp;Dashboard</a>
		<a href="User_form.php" class="icon-a"><i class="fa fa-users icons"></i> &nbsp;&nbsp;Add new user</a>
		<a href="view_info.php" class="icon-a"><i class="fa fa-list icons"></i> &nbsp;&nbsp;Edit/Delete User </a>
		<a href="report.php" class="icon-a"><i class="fa fa-file"></i> &nbsp;&nbsp;Booking Report</a>
		<a href="search_form.php" class="icon-a"><i class="fa fa-search"></i> &nbsp;&nbsp;Search A Staff</a>
		<a href="#" class="icon-a"><i class="fa fa-user icons"></i> &nbsp;&nbsp;Accounts</a>
		<br>
		<br>
		<a href="logout.php" class="icon-a"><i class="fa fa-sign-out"></i> &nbsp;&nbsp;Logout</a>
	</div>

	<div id="main">

		<div class="head">
			<div class="col-div-6">
				<span style="font-size:30px;cursor:pointer; color: white;" class="nav">&#9776; Dashboard</span>
				<span style="font-size:30px;cursor:pointer; color: white;" class="nav2">&#9776; Dashboard</span>
			</div>

			<div class="col-div-6">
				<div class="profile">
					<img src="./css/images/UserPhoto.png" class="pro-img" />
					<p><?php echo $_SESSION["USER"] ?>
						<br>
						<?php echo $_SESSION["id"]   ?>
					</p>
				</div>
			</div>

			<br>
			<br>
			<br>
			<br>

			<div class="clearfix"></div>
		</div>

		<div class="clearfix"></div>
		<br />

		<div class="col-div-3">
			<div class="box">
				<p>67<br /><span>Total Bookings</span></p>
				<i class="fa fa-list box-icon"></i>
			</div>
		</div>
		<div class="col-div-3">
			<div class="box">
				<p>30<br /><span>New Bookings</span></p>
				<i class="fa fa-list box-icon"></i>
			</div>
		</div>
		<div class="col-div-3">
			<div class="box">
				<p>7<br /><span>Pending Approval</span></p>
				<i class="fa fa-list box-icon"></i>
			</div>
		</div>
		<div class="col-div-3">
			<div class="box">
				<p>50<br /><span>Approve Bookings</span></p>
				<i class="fa fa-tasks box-icon"></i>
			</div>
		</div>
		<div class="clearfix"></div>
		<br /><br />

		<h1>ADD USER</h1>

		<form name="add_user_form" method="post" action="add_user.php" onsubmit="return checkvalidation()">
			<table border="0">
				<tr>
					<td>User's Username:</td>
					<td><INPUT type="text" name="username" size="50"></td>
				</tr>
				<tr>
					<td>User's ID:</td>
					<td><INPUT type="text" name="id" size="50"></td>
				</tr>
				<tr>
					<td>User's password:</td>
					<td><INPUT type="text" name="password" size="50"></td>
				</tr>
				<tr>
					<td>User's Level:</td>
					<td><input type="" name="level" size="50"></td>
				</tr>
				<tr>
					<td></td>
					<td align="center"><br /><input type="submit" class="add" name="button1" value="Add"></td>
				</tr>
			</table>
		</form>
</body>

</html>