<?php
// Initialize the session
session_start();
 
// Clear all LOGIN-related variablesin the SESSION
   unset($_SESSION["loggedin"]);
   unset($_SESSION["id"]);
   unset($_SESSION["username"]);  
 
// Redirect to login page
header("location: login.php");
exit;
?>