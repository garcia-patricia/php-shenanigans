<?php
//query
include_once 'includes/connect.php';
?>
<?php
include_once 'sections/header.html';
?>

<!-- begin content -->
<body>

<div class="wrapper">
<!-- wrapper begins -->
<section id="about">
        <h1 class="hello-title">About Me</h1>
        <div class="intro-changing-text">
<h3 class="about-title">
        <?php 
        $items = Array( 'Howdy howdy howdy &#129312;','"Cool. Cool cool cool."','Hello world. &#129302;','[[REDACTED]]','"Stay a while and listen."', '"Hey! Listen!"', '"Good news, everyone!"','"Is mayonnaise an instrument?"', '"Streets ahead!"','"Its my whole i-DEAN-tity!"');
        echo $items[array_rand($items)]; ?>
</h3>
        </div>
        <div class="about-photo"><img src="img/about-me.jpg" alt="About me!"></div>
        <div class="about-text">Small about me blurb.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eleifend ex hendrerit elementum tristique. Sed at ultrices lacus. Donec a nibh velit. Morbi egestas magna nunc, quis gravida mi ornare quis. Donec id nulla dui. Vivamus mollis euismod nisi, a consequat urna ullamcorper sed. Aenean ultricies fringilla orci, vel fringilla tortor accumsan hendrerit. Integer eu neque vitae risus dignissim posuere in quis turpis. Morbi vel consequat neque.</div>
        <a href="about.php" class="btn-about-link">
            <div class="about-btn ">RESUME</div>
        </a>
</section>





<section id="about-facts" class="group">
        <h1 class="hello-title"><?php 
        $items = Array( 'Cool And Random Facts About Me That Happen To Be True.','7 Arguably true Facts About Me.','7 Facts About Me That Reveal How Old I Am.','9 Facts And A Lie. (Just kidding, they&apos;re all true)', '10 Facts About me That Tells You Which Type of Bread I am.','Read These Wacky Facts To Find Out What My Favourite Pizza Topping Is.');
        echo $items[array_rand($items)]; ?></h1>
<div class="facts-container">
        <div class="about-fact-box">
                <span class="heart-float">
                        <i class="fas fa-heart big-heart"></i>
                </span>
                <p class="about-fact-text">My favourite shows are Community, Futurama, Scrubs &amp; Bojack Horseman. </p>
        </div>
        <div class="about-fact-box">
                <img src="img/about-fact-heart.jpg" alt="About fact detail">
                <p class="about-fact-text">I love learning about the animation process and hope to one day create my own mini-animation!</p>
        </div>
        <div class="about-fact-box">
                <img src="img/about-fact-heart.jpg" alt="About fact detail">
                <p class="about-fact-text">I own a weaponized fruit, Mango. She's a lovebird. </p>
        </div>
        <div class="about-fact-box">
                <img src="img/about-fact-heart.jpg" alt="About fact detail">
                <p class="about-fact-text">My favourite colours are teal pink and grey! </p>
        </div>
        <div class="about-fact-box">
                <img src="img/about-fact-heart.jpg" alt="About fact detail">
                <p class="about-fact-text">I am a firm believer that pineapple belongs on pizza.</p>
        </div>
        <div class="about-fact-box">
                <img src="img/about-fact-heart.jpg" alt="About fact detail">
                <p class="about-fact-text"> Sushi with loved ones can remedy any sadness! </p>
        </div>
        <div class="about-fact-box">
                <img src="img/about-fact-heart.jpg" alt="About fact detail">
                <p class="about-fact-text"> I opened my own small business &amp; I hope to do more conventions one day! </p>
        </div>
        <div class="about-fact-box">
                <img src="img/about-fact-heart.jpg" alt="About fact detail">
                <p class="about-fact-text"> I have no preference for Mac or PC. </p>
        </div>
        <div class="about-fact-box">
                <img src="img/about-fact-heart.jpg" alt="About fact detail">
                <p class="about-fact-text"> I love Nintendo games. (Pokemon, Zelda and Animal Crossing are my favourites) </p>
        </div>

</div>


</section>


<!-- wrapper ends -->
</div>


<section id="about-me-cta">
<div class="wrapper">
        <h1 class="hello-title">Interested in working together?</h1>
        <div class="about-cta-box">
                <p class="about-fact-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eleifend ex hendrerit elementum tristique. Sed at ultrices lacus. Donec a nibh velit. Morbi egestas magna nunc, quis gravida mi ornare quis. Donec id nulla dui. </p>
                <a href="about.php" class="btn-about-link">
            <div class="about-btn ">contact</div>
        </a>
        </div>
</div>

</section>


<?php
include_once 'sections/footer.php';
?>


</body>

<script src="js/lightbox.js"></script>
<script src="js/hamburger.js"></script>


</html>






