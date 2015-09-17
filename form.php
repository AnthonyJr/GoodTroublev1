<html>
	<body>

		<meta http-equiv="refresh" content=".1;url=http://localhost:8888/WEBSITES/Good%20Trouble/goodtrouble.php">
		<?php 

		if($_POST){
			$connect =  mysql_connect("localhost","root","root");

			if(!$connect){
				die("couldnt connect" . mysql_error());
			}
		}
		function test_input($data){
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}

		mysql_select_db("GoodTrouble",$connect);
		


		$user_email = $_POST["userEmail"];
		$user_email = mysql_real_escape_string($user_email);
		


		
		$query = "INSERT INTO `GoodTrouble`.`Newsletter` (`userEmail`) VALUES ('$user_email');";	
		mysql_query($query);
		echo "thank you for the comment";

		mysql_close($connect);
		?>

	</body>
</html>