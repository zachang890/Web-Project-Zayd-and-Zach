<?php
		include_once 'Website Sublime.html';
		require_once 'CONNECTparam.php';
		$conn = mysqli_connect($host, $user, $pass, $db, $port);
		if($conn->connect_error) die($conn->connect_error);
		//$option = isset($_POST['myTest']) ? $_POST['myTest'] : false;
		/*if ($option){
			$testField = $_POST['myTest'];
			//echo $testField;
			$query = "	select ". $testField . " from users;";
			//echo $query;
			$result = mysqli_query($conn, $query);
			while ($row = mysqli_fetch_assoc($result)) {
				echo $row[$testField];
			}
		} */
		
		$sql = 'SELECT collegeName, admissionStatus, publicOrPrivate, milesFromhome, preferredCollege FROM colleges';
		mysql_select_db('Webdatabase');
		$retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
      echo "NAME :{$row['collegeName']}  <br> ".
         "STATUS : {$row['admissionStatus']} <br> ".
         "TYPE : {$row['publicOrPrivate']} <br> ".
		 "MILES : {$row['milesFromhome']} <br> ".
		 "PREFERRED : {$row['preferredCollege']} <br> ".
         "--------------------------------<br>";
	}
		$result->close();
		$conn->close();
?>