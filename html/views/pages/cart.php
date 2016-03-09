<h2 align="center">Ваша корзина</h2>
<form action="index.php?view=update_cart" method="post" id="cart-form">
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
    <td align="center"><input type="text" size="2" name="<?php echo $id; ?>" maxlength="2" value="<?php echo $quantity ?>" /></td>
    <td align="center"><?php echo number_format($product['price'] * $quantity,2); ?>руб.</td>  
</tr>
<?php endforeach; ?>
</table>
    <p align="center"><input type="submit" name="update" value=" Обновить " /></p>
	<p align="center"><input type="button" value=" Заказать " onClick='location.href="index.php?view=order"'></p>
</form>﻿
