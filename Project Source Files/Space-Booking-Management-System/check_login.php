<?php
session_start();
require('./Table/config.php');


if (!($_SESSION["Login"] == "YES" || $_SESSION["Login"] == "NO")) {

      $myusername = $_POST["username"];
      $mypassword = $_POST["password"];

      if(isset($_POST["remember"])){ 
      setcookie("USER", $myusername, time() + 86400);
      setcookie("PASS", $mypassword, time() + 86400);
            }

      $sql = "SELECT * FROM user WHERE username='$myusername' and password='$mypassword'";

      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) == 0) {
            echo '<script>
                        alert("Invalid Username and Password!!!");
                        window.location.href="login.php";
                        </script>';
      }
      $rows = mysqli_fetch_assoc($result);

      $user_name = $rows["username"];
      $ID = $rows["id"];
      $password = $rows["password"];
      $user_level = $rows["level"];

      $count = mysqli_num_rows($result);


      if ($count == 1) {

            $_SESSION["Login"] = "YES";
            $_SESSION["USER"] = $user_name;
            $_SESSION["id"] = $ID;
            $_SESSION["PASS"] = $password;
            $_SESSION["LEVEL"] = $user_level;


            if ($_SESSION['LEVEL'] == 1) {
                  require('admin_main.html');
            } elseif ($_SESSION['LEVEL'] == 2) {
                  require('manager_main.html');
            } elseif ($_SESSION['LEVEL'] == 3) {
                  require('staff_main.html');
            } else {
                  echo "Undefined";
            }

            // require('index.php');

      } else {

            $_SESSION["Login"] = "NO";
            // header("Location: index.php");
      }
} else {

      if ($_SESSION['LEVEL'] == 1) {
            require('admin_main.html');
      } elseif ($_SESSION['LEVEL'] == 2) {
            require('manager_main.html');
      } elseif ($_SESSION['LEVEL'] == 3) {
            require('staff_main.html');
      }
}

mysqli_close($conn);
