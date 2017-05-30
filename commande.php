<?php require("header.php"); ?>
<link rel="stylesheet" href="public/css/commande.css">

<div class="item_passer-commande">
  <h1 class="item_commande">Passer la commande</h1>
</div>

<div class="item_nouveau">
  <h2 class="item_inscription">Vous êtes nouveau ? Créez votre compte pour passer votre première commande</h2>


</div>

<div class="item_formulaire-cree">
  <form class="" action="index.html" method="post">

    <label for="email">Email</label>
    <input type="email" name="email" value="email">

    <label for="password">mot de passe</label>
    <input type="text" name="password" value="mot de passe">

    <label for="passsword-confirmed">confirmation</label>
    <input type="text" name="confirmed" value="password-confirmed">

  </form>
</div>


<?php require("footer.php") ?>
