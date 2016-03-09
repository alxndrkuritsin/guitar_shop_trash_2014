<h2 align="center">Оформление заказа</h2>
<form action="index.php?view=upload" method="post" id="cart-form">
<table id="mycart" align="center" cellspacing="0" cellpadding="0" border="1" width="550" bgcolor = "white">
<tr>
    <th>Товар</th>
    <th>Цена</th>
    <th>Кол-во</th>
    <th>Всего</th>
</tr>

<?php 
foreach($_SESSION['cart'] as $id => $quantity):
$product = get_product($id);
?>

<tr>
    <td align="center"><?php echo $product['title']; ?></td>
    <td align="center"><?php echo number_format($product['price'],2);  ?>руб.</td>
    <td align="center"><?php echo $quantity ?></td>
    <td align="center"><?php echo number_format($product['price'] * $quantity,2); ?>руб.</td>  
</tr>
<?php endforeach; ?>
</table>	
	<p align="center">
	Ваше имя: <br />
	<input type="text" name="name"/><br />
	Ваша фамилия: <br />
	<input type="text" name="s_name"/><br />
	Ваша адрес: <br />
	<input type="text" name="address"/><br />
	Почтовый индекс: <br />
	<input type="text" name="post_index"/><br />
	Ваш e-mail: <br />
	<input type="text" name="email"/><br />
	</p>
	
    <p align="center"><input type="submit" name="order" value=" Заказать " /></p>
</form>﻿

<?php/*
$name = htmlspecialchars(stripslashes($_POST['name']));
$post_index = htmlspecialchars(stripslashes($_POST['post_index']));
echo $name;
echo $post_index;
foreach($_POST as $ArrKey => $ArrStr)
{
	$ArrKey = $_POST[$ArrKey];
}
$date = date('Y-m-d');
$time = date('H:i:s');

foreach($_SESSION['cart'] as $id => $quantity):
	$product = get_product($id);
	$query ="INSERT INTO orders(name,s_name,address,post_index,email,product,prod_id,price,qty) VALUES ('$name','$s_name','$address','$post_index','$email','{$product['title']}','{$product['id']}','{$product['title']}','{$product['price']}','$quantity')";
	mysql_query($query);
endforeach;*/
?>
