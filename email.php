<?php

	$con = mysql_connect("localhost","root","root");

	if(!$con){
		die("couldnt connect" .mysql_error());
		echo "not connected";
	} 

	mysql_select_db("GoodTrouble", $con);

	$query =   " SELECT * FROM Newsletter ";

	$email = mysql_query($query);

	echo "<p> User Email </p> ";

	while($row = mysql_fetch_array($email, MYSQL_ASSOC)){
		$outputEmail = $row['userEmail'];

		echo " <p> $outputEmail  </p>";

		
	}
	
	mysql_close($con);


?>