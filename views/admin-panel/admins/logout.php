<?php 



session_start();
session_unset();
session_destroy();

header("Location: http://localhost/tesnim/hotel-booking/views/admin-panel/admins/login-admins.php");

?>