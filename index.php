<?php
ob_start();
// include header 
include('header.php');
?>
    <?php
// Include banner-area 
include('template/banner-area.php');

// include top-sale 
include('template/top-sale.php');
// include spacial-price 
include('template/special-price.php');
// include banner-adds 
include('template/banner-adds.php');

// include new-phone
include('template/new-phone.php');
// include blogs
include('template/blogs.php');

    ?>

<?php
// include footer 
include('footer.php');
?>