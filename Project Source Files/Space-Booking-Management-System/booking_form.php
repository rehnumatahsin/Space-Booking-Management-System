<?php
session_start();
require("./Table/config.php");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Room Booking</title>
  
  <script src="./Js/booking_form.js"></script>
<style>body {
  margin: 0;
  padding: 0;
  font-family: "Roboto", sans-serif;
}

header {
  position: fixed;
  background: #22242a;
  padding: 20px;
  width: 100%;
  height: 30px;
}

.left_area h3 {
  color: #fff;
  margin: 0;
  text-transform: uppercase;
  font-size: 22px;
  font-weight: 900;
}

.left_area span {
  color: #19b3d3;
}

.main_btn {
  padding: 5px;
  background: #0b87a6;
  text-decoration: none;
  float: right;
  margin-top: -30px;
  margin-right: 40px;
  border-radius: 2px;
  font-size: 15px;
  font-weight: 600;
  color: #fff;
  transition: 0.5s;
  transition-property: background;
}
.right_area > button {
  cursor: pointer;
  position: relative;
  border-radius: 3.75rem;
  line-height: 2.5rem;
  font-size: 1rem;
  padding: 0px 20px 0px 20px;
  width: 10em;
  border: 1px solid #012880;
}

.main_btn:hover {
  background: #012880;
}

.sidebar {
  background: #2f323a;
  margin-top: 70px;
  padding-top: 30px;
  position: fixed;
  left: 0;
  width: 250px;
  height: 100%;
  transition: 0.5s;
  transition-property: left;
}

.sidebar .profile_image {
  width: 150px;
  height: 150px;
  border-radius: 100px;
  margin-bottom: 10px;
}

.sidebar h4 {
  color: #ccc;
  margin-top: 0;
  margin-bottom: 20px;
}

.sidebar a {
  color: #fff;
  display: block;
  width: 100%;
  line-height: 60px;
  text-decoration: none;
  padding-left: 40px;
  box-sizing: border-box;
  transition: 0.5s;
  transition-property: background;
}

.sidebar a:hover {
  background: #cf8434;
}

.sidebar i {
  padding-right: 10px;
}

label #sidebar_btn {
  z-index: 1;
  color: #fff;
  position: fixed;
  cursor: pointer;
  left: 320px;
  font-size: 20px;
  margin: 5px 0;
  transition: 0.5s;
  transition-property: color;
  padding-left: 20px;
}

label #sidebar_btn:hover {
  color: #cf8434;
}

#check:checked ~ .sidebar {
  left: -190px;
}

#check:checked ~ .sidebar a span {
  display: none;
}

#check:checked ~ .sidebar a {
  font-size: 20px;
  margin-left: 170px;
  width: 80px;
}

.content {
  margin-left: 250px;
  background: #483302;
  background-position: center;
  background-size: cover;
  height: 100vh;
  transition: 0.5s;
}

#check:checked ~ .content {
  margin-left: 60px;
}

#check {
  display: none;
}

.bookingform {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  padding: 50px;
  margin: 50px;
  color: #acc0ff;

  transition: background-color 2s;
}

h2 {
  text-align: center;
  color: #ffffff;
  font-family: sans-serif;
  font-size: 45px;
  font-weight: normal;
  line-height: 48px;
}
.button1 {
  background-color: #cf8434;
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
  font-family: sans-serif;
}

.button1:hover {
  background-color: #91690a;
}
#col{
color:#cf8434;


}

table td {
  column-width: 200px;
  font-family: sans-serif;
  font-size: 25px;
  padding: 7px;
  color: white;
}
</style>
</head>

<body>

  <input type="checkbox" id="check">
  <!--header area start-->
  <header>
    <label for="check">
      <i class="fas fa-bars" id="sidebar_btn"></i>
    </label>
    <div class="left_area">
      <h3>Booking <span id="col">Page</span></h3>
    </div>
    <div class="right_area">

      <button class="main_btn" onclick="window.location.href='check_login.php';"><i class="fas fa-home"></i> Main Page</button>

    </div>
  </header>
  <!--sidebar start-->
  <div class="sidebar">
    <center>
      <img src="./css/images/user.png" class="profile_image" alt="">
      <h4><?php echo $_SESSION["USER"] ?> </h4>
    </center>
    <a href="update_info_form.php"><i class="fas fa-user"></i><span>Edit Profile</span></a>
    <a href="booking_form.php"><i class="fa fa-th"></i><span>Booking Form</span></a>
    <a href="result.php"><i class="fas fa-eye"></i><span>View Result</span></a>
    <a href="view_search_staff.php"><i class="fas fa-copy"></i><span>Previous Bookings</span></a>
    <a href="#"><i class="fas fa-list"></i><span>Work List</span></a>
    <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
    <a href="logout.php" class="icon-a"><i class="fas fa-sign-out-alt"></i> &nbsp;&nbsp;Logout</a>
  </div>
  <!--sidebar end-->


  <div class="content"></div>


  <div class="bookingform">

    <form name="booking_form" action="add_NewApplication.php" method="post" onsubmit="return validateForm()">


      <h2>Booking Form </h2>

      <table>

        <tr>
          <td> Staff Username : </td>
          <td> <?php echo $_SESSION["USER"]   ?> </td>
        </tr>


        <tr>
          <td> Staff ID : </td>
          <td> <?php echo $_SESSION["id"]   ?> </td>
        </tr>

        <tr>
          <td> Staff Full Name : </td>
          <td> <input type="text" id="name" name="name" size="30" value="" /> </td>
        </tr>


        <tr>
          <td> Start Date: </td>
          <td>
            <input type="date" class="textbox" id="start" name="start_date" value="" onchange="cal()" />
          </td>
        </tr>

        <tr>
          <td> End Date: </td>
          <td>
            <input type="date" class="textbox" id="end" name="end_date" value="" onchange="cal()" />
          </td>
        </tr>


        <tr>
          <td> Number of days: </td>
          <td>
            <input type="text" class="textbox" id="numdays2" name="numdays" value="" />
          </td>
        </tr>


        <tr>
          <td> Room type: </td>
          <td> <textarea name="reason" rows="8" cols="50" value="" 
            placeholder="Lecture Room
Lab Room
Conference Room
Library Room
Computer Room"></textarea> </td>
        </tr>
        <tr>
          <td></td>
          <td align="center"><BR><input type="submit" class="button1" name="button1" value="Submit"></td>
        </tr>

      </table>
    </form>

  </div>
</body>

</html>