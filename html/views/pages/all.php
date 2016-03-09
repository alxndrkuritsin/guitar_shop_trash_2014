<div class="pad25">
<font size="3"><h1>Все товары</h1></font>
</div>
<?php
$products = get_products();
foreach($products as $item):?>
<div class="item">
					<img src="images/<?php echo $item['image']?>" alt="" width="200" height="70" />
					<a href="index.php?view=product&id=<?php echo $item['id']?>" class="name"><?php echo $item['title']?></a>
					<span><?php echo $item['price']?> руб. </span>
				</div>
<?php
endforeach
?>