<?php
session_start();
require('../Model/db_query.php');

if(isset($_POST['name']) && isset($_POST['card-number'])){
	$name = $_POST['name'];
	$cardNo = $_POST['card-number'];
	if(Query::verify($cardNo, $name) == True){
		$_SESSION['name'] = $name;
		header('Location: index.php?action=home');
	}
	else{
		header('Location: ../View/login.html');
	}

}

else{
	header('Location: ../View/login.html');

}

?>