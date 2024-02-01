<?php
  $view = empty($_GET['view']) ? 'index' : $_GET['view'];
  include($_SERVER['DOCUMENT_ROOT'].'./views/layouts/shop.php');
?>
