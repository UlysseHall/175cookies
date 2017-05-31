<?php require("header.php"); ?>
<link rel="stylesheet" href="public/css/paiement.css">

<div class="item_passer-commande">
  <h1 class="item_commande">Passer la commande</h1>
</div>

<div class="flex-container-1">


<div class="left">
  <div class="adresse-facturation">
    <h2>Adresse de facturation</h2>
      <form class="" action="" method="post">

      <input class="input-left" placeholder="Prenom" type="text" name="" value="">

      <input placeholder="Nom" type="text" name="" value="">

      <input class="total" placeholder="Adresse" type="text" name="" value="">

      <input class="input-left" placeholder="N° de départemment" type="text" name="" value="">

      <input  placeholder="Ville" type="text" name="" value="">

      <input class="input-left" placeholder="Mobile" type="text" name="" value="">

      <input placeholder="Fixe" type="text" name="" value="">

      <input class="total" placeholder="Infos complémentaires" type="text" name="" value="">

      </form>
  </div>

  <div class="adresse-livraison">
    <h2>Adresse de livraison</h2>
    <h4>à modifier seulement si différent</h4>

    <form class="" action="" method="post">

    <input class="input-left"  placeholder="Prenom" type="text" name="" value="">

    <input class="input-right" placeholder="Nom" type="text" name="" value="">

    <input class="total" placeholder="Adresse" type="text" name="" value="">

    <input class="input-left" placeholder="N° de départemment" type="text" name="" value="">

    <input class="input-right"  placeholder="Ville" type="text" name="" value="">

    <input class="input-left" placeholder="Mobile" type="text" name="" value="">

    <input class="input-right" placeholder="Fixe" type="text" name="" value="">

    <input class="total" placeholder="Infos complémentaires" type="text" name="" value="">

    </form>
  </div>
</div>

<div class="right">
  <div class="panier-produits">
    <h2>Votre panier</h2>

    <div class="list">
      <figure>
        <img class="achat" src="public/img-content/classic.png" alt="cookies">
      </figure>
      <div class="description">
      <h3 class="gout">Original Cookies</h3>
      <p class="quantite">Quantité:
      <select>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select></p>
      <p class="prix">3.99€</p>
    </div>
    </div>

    <div class="list">
      <figure>
        <img class="achat" src="public/img-content/black.png" alt="cookies">
      </figure>
      <div class="description">
      <h3 class="gout">Original Cookies</h3>
      <p class="quantite">Quantité:
            <select>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select></p>
      <p class="prix">3.99€</p>
    </div>
    </div>

    <div class="list">
      <figure>
        <img class="achat" src="public/img-content/mint.png" alt="cookies">
      </figure>
      <div class="description">
      <h3 class="gout">Original Cookies</h3>
      <p class="quantite">Quantité:
        <select>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select></p>
      <p class="prix">3.99€</p>
    </div>
    </div>
    <hr>

    <h2>Paiement</h2>

  </div>


</div>

</div>

<?php require("footer.php"); ?>
