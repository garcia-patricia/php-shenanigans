<?php
//query
include_once 'includes/connect.php';
?>
<?php
include_once 'sections/header.html';
?>
<?php
include_once 'sections/main-nav.html';
?>

<!-- begin content -->
<body>

<?php 
        $items = Array( 'Howdy howdy howdy &#129312;','"Cool. Cool cool cool."','Hello world. &#129302;','[[REDACTED]]','"Stay a while and listen."', '"Hey! Listen!"', '"Good news, everyone!"','"Is mayonnaise an instrument?"', '"Streets ahead!"','"Its my whole i-DEAN-tity!"');
        echo $items[array_rand($items)]; ?>


<?php
include_once 'sections/footer.php';
?>


</body>

<script src="js/lightbox.js"></script>
<script src="js/hamburger.js"></script>


</html>






