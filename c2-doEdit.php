<?php
// Start the session
session_start();
?>

<?php
include("db.php");
if(isset($_POST["data"])){
    $rawQuery = $_POST["data"];
    $rawQuery = str_replace("undefined","NOW()", $rawQuery);
    $editResult = mysqli_query($conn, $rawQuery);
    echo $rawQuery;
}
?>