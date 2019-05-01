<?php
	if($_SERVER['REQUEST_METHOD'] == "POST"){



			$server = "localhost";

			$username = "kutneya1";

			$password = "dolphinbus";



			$connection = new mysqli($server, $username, $password, $username);



			if ($connection->connect_error){

				die("CONNECTION FAILED");

			}
	}

	$

?>
