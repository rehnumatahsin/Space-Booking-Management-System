<?php
session_start();

if ($_SESSION["Login"] != "YES") //if the user is not logged in or has been logged out..
  header("Location: login.php");   //send user to login page


?>
<html>

<head>
  <title>Approing</title>
  
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

    <h1>Approve/Decline Booking Application</h1>

    <?php

    $ID = $_SESSION["Staffid"];
    $days_of_leave = $_SESSION["days"];

    require("./Table/config.php");

    $sql = "SELECT * FROM NewApplication WHERE id='$ID' AND days='$days_of_leave'";
    $result = mysqli_query($conn, $sql);
    $rows = mysqli_fetch_assoc($result);




    ?>


    <form name="form1" method="post" action="result.php">
      <table border=solid cellspacing="5" cellpadding="0">

        <tr>
          <td align="center"><strong>ID</strong></td>
          <td align="center"><?php echo $rows['id']; ?></td>
        </tr>

        <tr>
          <td align="center"><strong>Name</strong></td>
          <td align="center"><?php echo $rows['name']; ?></td>
        </tr>

        <tr>
          <td align="center"><strong>Days</strong></td>
          <td align="center"><?php echo $rows['days']; ?></td>
        </tr>

        <tr>
          <td align="center"><strong>Room</strong></td>
          <td align="center"><?php echo $rows['reason']; ?></td>
        </tr>

      </table>

      <br />

      <input type="submit" name="Approval" value="Approve">
      <input type="submit" name="Approval" value="Decline">

    </form>

    <button onclick="window.location.href='check_login.php';">Previous Page</button>

  </body>

</html>

<?php

mysqli_close($conn);
?>