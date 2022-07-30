<?php
session_start();
unset($_SESSION['email']);
session_destroy();
echo '<script type ="text/JavaScript">';  
echo 'alert("logged out successfully")';  
echo '</script>';
header("location:../index.html");
?>