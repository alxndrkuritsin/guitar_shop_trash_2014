<?php
function db_connect() {
	$dblocation="localhost"; //им¤ сервера
	$dbuser="shop_user"; //им¤ пользовател¤
	$dbpasswd="123456"; //пароль
	$db = 'shop';
	
	$connection=@mysql_connect($dblocation, 
				   $dbuser, 
				   $dbpasswd);
	mysql_select_db($db, $connection) or die('cant use');
	
	mysql_query("SET NAMES 'utf8';");
	mysql_query("SET CHARACTER SET 'utf8';");
	mysql_query("SET SESSION collation_connection = 'utf8_general_ci';"); 
	
if (!$connection) {
	exit("<p>¬ насто¤щий момент сервер базы данных недоступен, поэтому корректное отображение страницы невозможно </p>");
} else {
	echo("");
	}
}

function db_result_to_array($result)
{
    $res_array = array();
    $count = 0;
    while($row = mysql_fetch_array($result))
    {
        $res_array[$count]=$row;
        $count++;
    }
    return $res_array;
}
function get_products()
{
    db_connect();
    $result = mysql_query("SELECT * FROM products");
    $result = db_result_to_array($result);
    return $result;
}
function get_cat()
{
    db_connect();
    $result = mysql_query("SELECT * FROM categories");
    $result = db_result_to_array($result);
    return $result;
}
function get_product($id)
{
    db_connect();
    $query = ("SELECT * FROM products WHERE id = '$id'");
    $result = mysql_query($query);
    $row = mysql_fetch_array($result);
    return $row;
}
function get_cat_products($cat)
{
    db_connect();
    $result = mysql_query("SELECT * FROM products WHERE cat = '$cat'");
    $result = db_result_to_array($result);
    return $result;
}
function get_products_new()
{
    db_connect();
    $result = mysql_query("SELECT * FROM products ORDER BY RAND() LIMIT 4");
    $result = db_result_to_array($result);
	$title = "Новые товары";
    return $result;
}
function get_news()
{
    db_connect();
    $result = mysql_query("SELECT * FROM news ORDER BY date DESC");
    $result = db_result_to_array($result);
    return $result;
}
function get_last_news()
{
    db_connect();
    $result = mysql_query("SELECT * FROM news ORDER BY date DESC LIMIT 3");
    $result = db_result_to_array($result);
    return $result;
}
?>
