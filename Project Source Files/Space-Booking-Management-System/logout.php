<?php
session_start();

if (isset($_SESSION['USER'])) {
	unset($_SESSION['USER']);
}
if(isset($_COOKIE['USER']) and isset($_COOKIE['PASS'])) { 
setcookie("USER", $myusername, time() - 86400);
setcookie("PASS", $mypassword, time() - 86400);
}
session_destroy();

header('Location: login.php');
exit;
