<?php require("header.php"); ?>
<link rel="stylesheet" href="public/css/index.css">
<link rel="stylesheet" href="public/css/index-phone.css">
    
<div class="home-content">
    <div class="home-big-cookie">
        <img alt="cookie" src="public/img-content/cookie-classic.png">
    </div>
    
    <div class="home-buy-container desktop-hidden">
        <a href="#">Ajouter au panier</a>
    </div>
    
    <div class="home-infos">
        <h1>
            175cookies, des cookies comme vous n'en avez jamais goutés
        </h1>
        
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi efficitur, justo id condimentum accumsan, nibh magna ornare est, vitae venenatis odio purus sodales massa. Aliquam erat volutpat. Donec ut justo iaculis, tincidunt libero vitae, tempus lectus. Praesent aliquet leo vel sapien varius, eget mattis nibh efficitur. Nam et dictum nisl. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus in dolor eget felis fringilla accumsan finibus vitae lectus.<br><br> Nulla facilisi. Mauris aliquet, odio nec volutpat pellentesque, nisi risus sollicitudin lacus, vitae consequat sem dolor vel nibh. Curabitur sed erat quis ipsum finibus consequat. Donec at eros interdum, mattis augue eu, congue sem. Nullam imperdiet arcu lectus, in rutrum lacus facilisis nec.
        </p>
    </div>
</div>

<div class="home-cta">
    <div class="home-buy-container phone-hidden">
        <a href="basket.php">Ajouter au panier</a>
    </div>
    
    <div class="home-flavour-container">
        <p class="phone-hidden">Choisissez votre saveur favorite</p>
        
        <div class="home-flavour-select">
           
            <div class="flavor-container" data-cookie="classic">
                <div class="flavor-color flavor-color-classic"></div>
                <p>classic</p>
            </div>
            
            <div class="flavor-container" data-cookie="macha">
                <div class="flavor-color flavor-color-macha"></div>
                <p>macha</p>
            </div>
            
            <div class="flavor-container" data-cookie="black">
                <div class="flavor-color flavor-color-black"></div>
                <p>black</p>
            </div>
            
            <div class="flavor-container" data-cookie="white">
                <div class="flavor-color flavor-color-white"></div>
                <p>white</p>
            </div>
            
            <div class="flavor-container" data-cookie="mint">
                <div class="flavor-color flavor-color-mint"></div>
                <p>mint</p>
            </div>
        </div>
    </div>
</div>

<?php require("footer.php"); ?>