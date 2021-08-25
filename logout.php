<?php
session_start();
setcookie("firstname", "", time() -86400, "/");
setcookie("lastname", "", time() - 86400, "/");
setcookie("email", "", time() + 86400, "/");
setcookie("password", "", time() - 86400, "/");
session_destroy();
header('Location: P5_Login.php');