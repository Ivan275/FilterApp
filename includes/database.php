<?php
require_once('config.php');

// Create connection
$conn = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if(isset($_GET['name_value'])) {
	$name = $_GET['name_value'];
	$sql = "SELECT * FROM table1 WHERE column1 = '$name'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		$table = array();
		while($row = $result->fetch_array()) {
			$table[] = $row['column1'];
			$table[] = $row['column2'];
			$table[] = $row['column3'];
			$table[] = $row['column4'];
			$table[] = $row['column5'];
			$table[] = $row['column6'];
		}
		echo json_encode($table);
		
	} else {
		echo json_encode('norecord');
	}
	$conn->close();
	
}

?>