<?php

include('db_fns.php');
include('cart_fns.php');

session_start();
if(!isset($_SESSION['cart'])) {
	$_SESSION['cart'] = array();
	$_SESSION['total_items'] = 0;
	$_SESSION['total_price'] = '0.00';
}
$view = empty($_GET['view']) ? 'index' : $_GET['view'];

switch($view) {
	case('index'):
		$products = get_products_new();
	break;
	case('product'):
		$id = $_GET['id'];
		$product = get_product($id);
	break;
	case('cat'):
		$cat = $_GET['id'];
		$products = get_cat_products($cat);
	break;
	case('order'):
	break;
}

include($_SERVER['DOCUMENT_ROOT'].'/RAZR/views/layouts/shop.php');

?>
