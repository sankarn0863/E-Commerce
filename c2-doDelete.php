<?php
include("db.php");
if(isset($_POST["data"])){
    $rawQuery = $_POST["data"];
    $parts = explode('@', $rawQuery,2);
    $tableName = $parts[0];
    $otherQuery = $parts[1];
    $otherQuery = str_replace("@"," AND ",$otherQuery);
    $otherQuery = str_replace(";"," = ",$otherQuery);
    $query = "DELETE FROM `".$tableName."` WHERE ".$otherQuery;
    $deleteResult = mysqli_query($conn, $query);
}
?>