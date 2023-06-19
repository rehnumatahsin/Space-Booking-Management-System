
<!-- saved from url=(0114)http://localhost/WP%20PROJECT_GROUP10_SEC06/Project%20Source%20Files/Space-Booking-Management-System/login.php -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Login Page</title>
	
	<script src="./Login Page_files/login.js.download"></script>
	<style>* {
  padding: 5px;
  margin: 0;
  box-sizing: border-box;
}
body {
  background-image: url("login.jpg");
  text-align: center;
  padding-top: 250px;
  padding-left: 200px
}

.head {
  text-transform: uppercase;
  color: rgb(255, 255, 255);
  font-size: large;
  text-align: center;
  font-weight: bold;
  font-size: large;
  word-spacing: 0.1rem;
}
.form {
  margin-left: 5px;
  max-height: 500px;
  max-width: 500px;
  border: solid 2px whitesmoke;
  border-radius: 25px;
  background-color:  rgb(106 106 106 / 93%);
}

.btn {
  display: block;
  height: 40px;
  width: 140px;
  border-radius: 25px;
  font-size: medium;
  font-weight: 500px;
  margin-left: 140px;
}

.btn:hover {
  color: black;
  background-color: darkorange;
  transition: 0.5s;
}
#container{
  align-items: center;
  background-color: #454545f5;
  margin-left: 500px;
  margin-right: 500px;
  position: fixed;
  border-radius: 25px;
  box-shadow: rgb(170, 13, 13);
}</style>>
</head>

<body>
	<div id="container">
		<p class="head">Space Booking Management System</p>
		<br>
		<br>
		<form method="post" class="form" name="login_form" action="http://localhost/WP%20PROJECT_GROUP10_SEC06/Project%20Source%20Files/Space-Booking-Management-System/check_login.php" onsubmit="return validateLoginForm()">
			<p>Username: <input type="text" size="30" placeholder="username" name="username"></p>
			<p>Password: <input type="password" size="30" placeholder="password" name="password"></p>
			<input type="checkbox" name="remember" value="1">Remember Me 
			<br>
			<p><input type="submit" class="btn" value="Login"></p>
		</form>
	</div>


</body></html>