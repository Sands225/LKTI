<?php
// session_start();

header("Location: login.php");

setcookie("email", $useremail, time() - 86400);
setcookie("welcome", " ", time() - 86400);
// session_unset();
// session_destroy();
?>