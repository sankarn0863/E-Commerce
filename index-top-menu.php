<?php
// Initialize the session
session_start();
?>


<html>
<head>
 <title> ABC Inc. </title> 
</head> 

<BODY>
        <H2> <CENTER>  Collaborative Online System (COS) </CENTER> </H2>
	<CENTER><IMG SRC="images/c1.gif" width="200" height="80"> <IMG SRC="images/c2.gif" width="200" height="80"> <IMG SRC="images/c3.gif" width="200" height="80"></CENTER>       
<?php 
if(!empty($_SESSION["username"])){
echo "<div align=\"right\">User = <font color=\"red\">";
echo htmlspecialchars($_SESSION["username"]); 
echo "</font> </h3></div>";
}
?> 

        <HR> <CENTER><b>
		 <a href="register.php" target="BOT">Register</a> | 
		 <a href="login.php" target="BOT">Login</a>  |
		 <a href="a1.php" target="BOT">USERS & POLICY </a>  |
		 <a href="a1.php" target="BOT">JOBS </a>  |
		 <a href="c2-Index.php" target="BOT">DATA </a>  |
		 <a href="form.php" target="BOT">FORMS </a>  |
		 <a href="a1.php" target="BOT">MESSAGES </a>  |
		 <a href="logout.php" target="BOT">Logout</a> </CENTER>
	<HR>
	<p>
   </BODY>
</html>

