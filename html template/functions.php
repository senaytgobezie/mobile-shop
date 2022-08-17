<?php
require('database/DBController.php');

require('database/product.php');
//db controller object
$db=new DBController();
//product object
$product=new Product($db);
 print_r($product->getData());

?>

