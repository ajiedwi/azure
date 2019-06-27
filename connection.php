<?php
// $servername = "ajiedwi.database.windows.net";
// $username = "ajie";
// $password = "@jie4798";
// $dbname = "dbo.user";

	$host = "ajiedwi.database.windows.net";
	$user = "ajie";
	$pass = "@jie4798";
	$db = "dbo.user";
	try {
	    $conn = new PDO("sqlsrv:server = tcp:ajiedwi.database.windows.net,1433; Database = ajiedwi", "ajie", "@jie4798");
    	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e) {
	    echo "Failed: " . $e;
	}
?>