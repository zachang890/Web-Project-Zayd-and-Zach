<?php
	$db = mysqli_connect('127.0.0.1','Zachary Chang','zachattack890','Webdatabase')
	or die('Error connecting to MySQL server.');
 
	$query = "SELECT * FROM colleges";
	mysqli_query($db, $query) or die('Error querying database.');

	$result = mysqli_query($db, $query);
	$row = mysqli_fetch_array($result);

	while ($row = mysqli_fetch_array($result)) {
	echo $row['collegeName'] . ' ' . $row['admissionStatus'] . ': ' . $row['email'] . ' ' . $row['city'] .'<br />';
	}
?>