<?php
require('./Table/create_database.php');
require('./Table/create_user_table.php');
require('./Table/create_form_table.php');
require('./Table/Table_New_Application.php');
require('./Table/insert_data_user.php');
require('./Table/insert_data_form.php');
require('./Table/insert_New_app_form.php');


?>

<html>

<head>
	<title>Index Page</title>
	<link rel="stylesheet" href="./css/style_login.css">
</head>

<body>

	<b class="head">Welcome To! Space Booking Management System</b>
	<br />
	<br />

	<button onclick="window.location.href='login.php';">System Start</button>

</body>

</html>