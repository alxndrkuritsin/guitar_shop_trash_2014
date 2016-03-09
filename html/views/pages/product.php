<META HTTP-EQUIV="Content-Type" content="text/html; charset=utf-8">
	<form name="form1" method="post" action="index.php?view=buy">
                    <h1 align="center"><?php echo $product['title']  ?></h1><br>
					<img align="center" src="images/<?php echo $product['image'] ?>" alt="" width="500" height="160" /><br>
					
                    <font size="3"><p><a align="center"><?php echo $product['description']  ?></a></p><br></font>
					
					
					</table>
					<h1 align="center"><?php echo $product['price'] ?> руб.</h1><br>
<a href="index.php?view=add_to_cart&id=<?php echo $product['id']?>"><img src="images/but_buy.jpg" alt="" width="90" height="29" /></a>
					
			