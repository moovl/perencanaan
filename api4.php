<?php
	try{
		$api = !empty($_SERVER["PATH_INFO"]) ? $_SERVER["PATH_INFO"] : "";
		$db = new mysqli("sql305.epizy.com", "epiz_21366426", "BantalSelimutKa");
		if ($db->connect_error) die(json_encode({status:"503 Service Unavailable", data: ["error connect to db", $db->connect_error]}));
		$byPOST = "";
		switch(true){
			case ($api = "/signup"):
				$id_sys = time()[0] . rand(1000, 9999);
				if(empty($_POST["fullname"]) || empty($_POST["birth"]) || empty($_POST["email"]) || empty($_POST["pw"]) || empty($_POST["location"])) die(json_encode({status:"406 Not Acceptable", data:"Input not full filled"}));
				$fullname = htmlspecialchars($_POST["fullname"]);
				$birth = htmlspecialchars($_POST["birth"]);
				$email = htmlspecialchars($_POST["email"]);
				if((strlen($_POST["pw"]))) die(json_encode({status:"406 Not Acceptable", data:"Password should more than 8 characters"}));
				$pw = htmlspecialchars($_POST["pw"]);
				$location = htmlspecialchars($_POST["location"]);
				$res = $db->query('INSERT INTO `epiz_21366426_moovl`.`users` (`id_sys`, `fullname`, `birth`, `email`, `pw`, `location`) VALUE ("$id_sys", "$fullname", "$birth", "$email", "$pw", "$location")');
				break;
		}
	catch(Exception $e){
		die(json_encode({status:"500 Internal Server Error", data: $e}));
	}
?>