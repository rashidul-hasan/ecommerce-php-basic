<?php 
session_start();

$action = isset($_GET['action']) ? $_GET['action'] : "";
$id = isset($_GET['id']) ? $_GET['id'] : "";

if ( $action == 'empty') {
	unset($_SESSION['cart']);
	header('Location: ../cart.php');
}

if ( $action == 'remove') {
	unset($_SESSION['cart'][$id]);
	header('Location: ../cart.php');
}