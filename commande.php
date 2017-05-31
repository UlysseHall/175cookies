<?php require("header.php"); ?>
<link rel="stylesheet" href="public/css/commande.css">

  <div class="item_passer-commande">
    <h1 class="item_commande">Passer la commande</h1>
  </div>



<div class="container-flex">
  <div class="left">
    <div class="item_nouveau">
      <h2 class="item_inscription">Vous êtes nouveau ? Créez votre compte pour passer votre première commande</h2>
    </div>

    <div class="item_formulaire-inscription">
      <form class="" action="" method="post">


        <input placeholder="email" type="text" name="" value="">

        <input placeholder="mot de passe" type="text" name="" value="">


        <input placeholder="confirmation" type="text" name="" value="">

        <button href="#" type="button" name="button">Créer le compte</button>

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

      <input placeholder="email" type="text" name="" value="">

      <input placeholder="mot de passe" type="text" name="" value="">

    <button href="#" type="button" name="button">Se connecter</button>

    </form>


  </div>
</div>

<?php require("footer.php") ?>
