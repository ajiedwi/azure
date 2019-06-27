<?php
// $servername = "ajiedwi.database.windows.net";
// $username = "ajie";
// $password = "@jie4798";
// $dbname = "dbo.user";

	$host = "ajiedwi.database.windows.net";
	$user = "ajie";
	$pass = "@jie4798";
	$db = "dbo.user";
	// try {
	//     $conn = new PDO("sqlsrv:server = tcp:ajiedwi.database.windows.net,1433; Database = ajiedwi", "ajie", "@jie4798");
 //    	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// } catch(PDOException $e) {
	//     echo "Failed: " . $e;
	// }
	$connectionInfo = array("UID" => "ajie@ajiedwi", "pwd" => "@jie4798", "Database" => "ajiedwi", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
	$serverName = "tcp:ajiedwi.database.windows.net,1433";
	$conn = sqlsrv_connect($serverName, $connectionInfo);	

	
?>