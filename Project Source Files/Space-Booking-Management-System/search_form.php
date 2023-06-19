<?php
// Start up your PHP Session 
session_start();
// If the user is not logged in send him/her to the login form
if ($_SESSION["Login"] != "YES")
    header("Location: login.php");

?>


<html>

<head>
    <title>Enter Staff ID</title>
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
  background-color: darkorange;
}
</style>
</head>
<script src="./Js/search_form.js"></script>

<body>

    <h1>Search for Staff Booking details</h1><br /><br />

    <form name="form_search" method="POST" action="view_search_staff.php" onsubmit="return validation()">

        <table>
            <tr>
                <td>Type Staff ID :</td>
                <td><input type="text" name="staffID" size="20"></td>
                <td><input type="submit" name="button1" value="Search"></td>
            </tr>
        </table>

    </form>
    <br>

    <button onclick="window.location.href='check_login.php';">Previous Page</button>
</body>

</html>