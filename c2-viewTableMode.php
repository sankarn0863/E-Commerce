<?php
include("db.php");
if(isset($_POST["data"])){
    $tableName = $_POST["data"];
    $query = "SELECT * FROM $tableName";
    $tableResult = mysqli_query($conn, $query);
	echo '<blockquote>Table Name: '.$tableName.'</blockquote>';
	echo '<table class="table table-bordered"><tr>';
	while ($column = mysqli_fetch_field($tableResult))
	{
		echo '<th>' . $column->name . '</th>';
	}
	echo '</tr>';
	
	while ($row = mysqli_fetch_assoc($tableResult)) 
	{
		echo '<tr>';
		$finalString = $tableName;
		foreach($row as $column =>$value)
		{
			if($tableName == "data_t" && $column == "data_location"){
				echo '<td><a href="uploads/' . $value . '" download>'. $value .'</a></td>';
			}
			else{
				echo '<td>' . $value . '</td>';
			}
		}
	}
	echo '</table>';
	mysqli_free_result($tableResult);
}
?>