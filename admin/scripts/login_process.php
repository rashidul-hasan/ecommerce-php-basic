<?php 
	session_start();
	require_once '../scripts/dbconnect.php';
	global $conn;
	$username = isset($_POST['username']) ? $_POST['username'] : '';
	$password = isset($_POST['password']) ? $_POST['password'] : '';
	$rem = isset($_POST['remember']) ? $_POST['remember'] : 'off';

	$_SESSION['username'] = $username;
	$_SESSION['user_id'] = $username;

	header('Location: ../index.php/');
	
 ?>