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
	try{
		$connectionInfo = array("UID" => "ajie@ajiedwi", "pwd" => "@jie4798", "Database" => "ajiedwi", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
		$serverName = "tcp:ajiedwi.database.windows.net,1433";
		$conn = sqlsrv_connect($serverName, $connectionInfo);	
		$sql_select = "SELECT * FROM Registration";
            $stmt = $conn->query($sql_select);
            $registrants = $stmt->fetchAll(); 
            if(count($registrants) > 0) {
                echo "<h2>People who are registered:</h2>";
                echo "<table>";
                echo "<tr><th>Name</th>";
                echo "<th>Email</th>";
                echo "<th>Job</th>";
                echo "<th>Date</th></tr>";
                foreach($registrants as $registrant) {
                    echo "<tr><td>".$registrant['name']."</td>";
                    echo "<td>".$registrant['email']."</td>";
                    echo "<td>".$registrant['job']."</td>";
                    echo "<td>".$registrant['date']."</td></tr>";
                }
                echo "</table>";
            } else {
                echo "<h3>No one is currently registered.</h3>";
            }
	} catch (Exception $e){
		echo $e;
	}
	
?>