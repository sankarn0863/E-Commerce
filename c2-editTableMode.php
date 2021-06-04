<?php
// Start the session
session_start();
?>

<?php
include("db.php");
if(isset($_POST["data"]))
{
    $tableName =  $_POST["data"];
	$tableQuery = "SELECT * FROM $tableName";
	$tableResult = mysqli_query($conn, $tableQuery);
    echo '<blockquote>Table Name: '.$tableName.'</blockquote>';
    echo '<table class="table table-bordered"><tr>';
    while ($column = mysqli_fetch_field($tableResult))
    {
        echo '<th>' . $column->name . '</th>';
    }
    echo '<th>Edit</th>';
    echo '</tr>';
    
    while ($row = mysqli_fetch_assoc($tableResult)) 
    {  
        echo '<tr>';
        $finalString = $tableName;
        foreach($row as $column =>$value){
            echo '<td>' . $value . '</td>';
            if($tableName == "data_t" && $column == "data_id"){
                $finalString = $finalString."@`".$column."`;".$value;
            }
            else if($tableName == "policy_t" && $column == "policy_Id"){
                $finalString = $finalString."@`".$column."`;".$value;
            }
            else if($tableName == "contract_t" && $column == "contract_id"){
                $finalString = $finalString."@`".$column."`;".$value;
            }
        }
        echo '<td class="ignore-cell"><button class="btn btn-primary edit-row" id="'.$finalString.'" onclick="editRow(this)">Yes</button></td>';
        echo '</tr>';
    }
    echo '</table>';
    mysqli_free_result($tableResult);
}
	mysqli_close ($conn);
?>