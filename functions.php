<?php
require('database/DBController.php');

require('database/product.php');

require('database/Cart.php');

//db controller object
$db=new DBController();
//product object
$product=new Product($db);
$product_shuffle=$product->getData();
//  print_r($product->getData());
//cart object
$Cart=new Cart($db);


?>

