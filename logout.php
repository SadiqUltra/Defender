<?php
session_start();
// remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 
echo "Logout Successful";

echo "<br>";

echo '<a href="login.php">login</a>';

?>