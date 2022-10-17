<?php
session_start();
@require '../../connect.php';


	$_SESSION['isauth'] = false;
	header('location: ../../');


?>