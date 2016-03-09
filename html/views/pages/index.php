<div class="pad25">
<font size="3">
<!--img src="images/new1.jpg" width="500"/--></br>
<p>Мы постоянно обновляем ассортимент новым ПО. Но что всегда останется неизменным — это наша внимательность к клиенту, умение понять и выполнить любые его пожелания.</p></br>
<h1>Новые товары</h1>
</font>
</div>
<?php
foreach($products as $item):?>
<div class="item">
					<br><img src="images/<?php echo $item['image'] ?>" alt="" width="200" height="70" />
					<a href="index.php?view=product&id=<?php echo $item['id'] ?>" class="name"><?php echo $item['title'] ?></a>
					<span><?php echo $item['price'] ?> руб. </span>
				</div>
<?php endforeach ?>
