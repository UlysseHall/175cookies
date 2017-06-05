<?php require("header.php"); ?>
<link rel="stylesheet" href="public/css/compte.css">

  <div class="item_passer-commande">
    <h1 class="item_commande">Mon compte</h1>
  </div>



<div class="container-flex">
  <div class="left">
    <div class="item_nouveau">
      <h2 class="item_inscription">Inscription</h2>
    </div>

    <div class="item_formulaire-inscription">
      <form class="" action="" method="post">


        <input placeholder="email" type="email" name="" value="">

        <input placeholder="mot de passe" type="password" name="" value="">


        <input placeholder="confirmation" type="password" name="" value="">

        <button href="#" type="button" name="button"><a href="#">Créer le compte</a></button>

      </form>
    </div>
        <p class="item_confirmation">Un email de confirmation vous sera envoyé.</p>
  </div>

  <hr>

  <div class="right">

    <div class="item_connexion">
      <h2 class="item_connecte">Connexion</h2>
    </div>

    <form class="" action="" method="post">
      <input placeholder="email" type="email" name="" value="">
      <input placeholder="mot de passe" type="password" name="" value="">
    <button href="#" type="button" name="button"><a href="#">Se connecter</a></button>
    </form>


  </div>
</div>

<?php require("footer.php") ?>
