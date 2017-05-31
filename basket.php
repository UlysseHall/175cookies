<?php require("header.php"); ?>
<link rel="stylesheet" href="public/css/basket.css">

<div class="basket-container">
    
    <div class="basket-content">
        <h1>Votre panier</h1>
        
        <div class="basket-item">
            <div class="bi-img">
                <img alt="cookie-package" src="public/img-content/classic.png">
            </div>
            
            <div class="bi-infos">
                <p class="bi-infos-name">Classic cookies</p>
                <p class="bi-infos-count">Quantité : 
                    <select>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </p>
                <p class="bi-infos-price">3.99€</p>
            </div>
            
            <div class="bi-desc">
                <p class="bi-desc-content">
                    Cookie fondant au chocolat au lait et pépites de chocolat
                </p>
                <p class="bi-desc-stock phone-hidden">
                    En stock
                </p>
            </div>
            
            <div class="bi-cross">
                <img alt="delete" src="public/img-layout/delete.png">
            </div>
        </div>
        
        <hr>
        
        <div class="basket-item">
            <div class="bi-img">
                <img alt="cookie-package" src="public/img-content/macha.png">
            </div>
            
            <div class="bi-infos">
                <p class="bi-infos-name">Macha cookies</p>
                <p class="bi-infos-count">Quantité : 
                    <select>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </p>
                <p class="bi-infos-price">4.99€</p>
            </div>
            
            <div class="bi-desc">
                <p class="bi-desc-content">
                    Cookie à base de chocolat macha avec pépite de chocolat au lait
                </p>
                <p class="bi-desc-stock phone-hidden">
                    En stock
                </p>
            </div>
            
            <div class="bi-cross">
                <img alt="delete" src="public/img-layout/delete.png">
            </div>
        </div>
        
        <hr>
        
        <div class="basket-item">
            <div class="bi-img">
                <img alt="cookie-package" src="public/img-content/white.png">
            </div>
            
            <div class="bi-infos">
                <p class="bi-infos-name">White cookies</p>
                <p class="bi-infos-count">Quantité : 
                    <select>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </p>
                <p class="bi-infos-price">4.99€</p>
            </div>
            
            <div class="bi-desc">
                <p class="bi-desc-content">
                    Cookie fondant au coeur de chocolat blanc
                </p>
                <p class="bi-desc-stock phone-hidden">
                    En stock
                </p>
            </div>
            
            <div class="bi-cross">
                <img alt="delete" src="public/img-layout/delete.png">
            </div>
        </div>
        
    </div>
    
    <div class="basket-price">
        <p>
            Total<br>
            <span class="basket-price-amount">13.97€</span>
        </p>
        
        <a href="#">
            Valider
        </a>
    </div>
    
</div>

<?php require("footer.php"); ?>