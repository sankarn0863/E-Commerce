<?php
// Initialize the session
session_start();
?> 

<html>
<head>
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>

<CENTER>

<?php 
if(!empty($_SESSION["username"])){
echo "<h4>Hello <font color=\"red\">";
echo htmlspecialchars($_SESSION["username"]); 
echo "</font>! WELCOME to ABC Inc. UNIT C </h4>";
}
?> 
        <p> <IMG SRC="images/clouds.jpg" width="90" height="70""> 
        <H4>We are proud to support the ABC soccer team !  </H4>
</CENTER>

</body>
</html>