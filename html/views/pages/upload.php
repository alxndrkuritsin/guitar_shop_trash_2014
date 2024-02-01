<?php 

	$dblocation="localhost"; //им¤ сервера
	$dbuser="shop_user"; //им¤ пользовател¤
	$dbpasswd="123456"; //пароль
	$db = 'shop';
	$connection=@mysql_connect($dblocation, $dbuser, $dbpasswd);

	mysql_select_db($db, $connection) or die('cant use');
	mysql_query("SET NAMES 'utf8';");
	mysql_query("SET CHARACTER SET 'utf8';");
	mysql_query("SET SESSION collation_connection = 'utf8_general_ci';"); 

	if (!$connection) {
		exit("<p>¬ насто¤щий момент сервер базы данных недоступен, поэтому корректное отображение страницы невозможно </p>");
	} else {
		echo("<p></p>");
	}

	$name = htmlspecialchars(stripslashes($_POST['name']));
	$post_index = htmlspecialchars(stripslashes($_POST['post_index']));
	$s_name = htmlspecialchars(stripslashes($_POST['s_name']));
	$address = htmlspecialchars(stripslashes($_POST['address']));
	$email = htmlspecialchars(stripslashes($_POST['email']));
	echo "<h1>Ваш товар заказан!<h1>";

	foreach($_POST as $ArrKey => $ArrStr) {
		$ArrKey = $_POST[$ArrKey];
	}
	$date = date('Y-m-d');
	$time = date('H:i:s');
	
		
	foreach($_SESSION['cart'] as $id => $quantity):
		$product = get_product($id);
		$title = $product['title'];
		$iden = $product['id'];
	
	mysql_query("INSERT INTO orders(name, s_name, address,
	   				post_index, email,
     					prod, prod_id,
       					price, qty,
	 				date, time) VALUES (
      					'$name','$s_name','$address',
	   				'$post_index','$email',
					'$title','$iden',
     					'{$product['price']}','$quantity',
	  				'$date','$time')") or die(mysql_error());
	endforeach;
?>
