<?php

require_once 'connection.php';

$sql = "SELECT firstName, lastName FROM employees";
$result = mysqli_query ($conn, $sql);

// print_r($result);

if (mysqli_num_rows($result) > 0) {
	// mysqli_fetch_assoc($result) //converts a query result into a associative array
	while ( $row = mysqli_fetch_assoc($result)) {
		extract($row);
		echo $firstName . ' ' . $lastName .'<br>';
	}	

}

?>