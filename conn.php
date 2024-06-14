<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$banco = "bdlogin";

	$conn = new mysql ($host, $user , $pass, $banco);
		if($conn->connect_error){
			die("Falha na conexão:" .$conn->connect_error);
		}
	?>