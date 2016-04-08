<?php 
session_start();

// get the product id
$id = isset($_GET['id']) ? $_GET['id'] : "";
$title = isset($_GET['title']) ? $_GET['title'] : "";
$quantity = isset($_GET['quantity']) ? $_GET['quantity'] : "1";
$price = isset($_GET['price']) ? $_GET['price'] : "";
$page = isset($_GET['ref']) ? $_GET['ref'] : "";
/*
 * check if the 'cart' session array was created
 * if it is NOT, create the 'cart' session array
 */
if(!isset($_SESSION['cart'])){
    $_SESSION['cart'] = array();
}
 
// check if the item is in the array, if it is, do not add
if(array_key_exists($id, $_SESSION['cart'])){
    // redirect to product list and tell the user it was added to cart
    header( 'Location: ../' . $page . '.php?action=exists&id=' . $id );
		//header('Location: ' . $_SERVER['HTTP_REFERER'] . '?action=exists');
}
 
// else, add the item to the array
else{
    $_SESSION['cart'][$id]['title'] = $title;
    $_SESSION['cart'][$id]['quantity'] = $quantity;
 		$_SESSION['cart'][$id]['product_id'] = $id;
 		$_SESSION['cart'][$id]['price'] = $price;
    // redirect to product list and tell the user it was added to cart
    header('Location: ../' . $page . '.php?action=added&id=' . $id);
    //header('Location: ' . $_SERVER['HTTP_REFERER'] . '?action=added');
}
