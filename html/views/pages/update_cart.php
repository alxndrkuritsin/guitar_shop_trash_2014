<?php
update_cart();
$_SESSION['total_items'] = total_items($_SESSION['cart']);
$_SESSION['total_price'] = total_price($_SESSION['cart']);
echo "<script>history.go(-1)</script>";
?>