<?php
$id = $_GET['id'];
$add_item = add_to_cart($id);
echo "<script>history.go(-1)</script>";
?>