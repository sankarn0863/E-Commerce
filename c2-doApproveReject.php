<?php
include("db.php");
if(isset($_POST["data"]) && isset($_POST["operation"]) && isset($_POST["statusTable"]))
{
    $rawQuery = $_POST["data"];
    $operation = $_POST["operation"];
    $statusTable = $_POST["statusTable"];
    $parts = explode('@', $rawQuery,2);
    $tableName = $parts[0];
    $otherQuery = $parts[1];
    $otherQuery = str_replace("@"," AND ",$otherQuery);
    $otherQuery = str_replace(";"," = ",$otherQuery);
    $dataStatusSql = "SELECT * FROM $statusTable WHERE $operation";
    $dataStatusSql = mysqli_query($conn, $dataStatusSql);
    while($dataStatusRow =  mysqli_fetch_row($dataStatusSql))
    {
        $dataStatusId = $dataStatusRow[0];
    }
    if($tableName == "data_t")
    {
        $query = "UPDATE $tableName SET `dataStatus_id` = $dataStatusId, `data_changed`=now() WHERE ".$otherQuery;
    }
    elseif($tableName == "policy_t")
    {
        $query = "UPDATE $tableName SET `policy_status` = $dataStatusId WHERE ".$otherQuery;
    }
    else{
        $query = "UPDATE $tableName SET `contract_status` = $dataStatusId WHERE ".$otherQuery;
    }
    $queryRes =  mysqli_query($conn, $query);
}
?>