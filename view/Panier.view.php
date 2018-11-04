

<link rel="stylesheet" href="view/Panier.view.css">

<?php foreach ($articles as $ref => $article): ?>
  <?php
    $qt = $panier->contenu[$ref];
    $nom = $article->libelle;
    $prix= $article->prix;
    $total = $panier->getTotal();
    $nbArticles = $panier->nombreDArticles();
   ?>

   <div class="articlesPanier">
     <fieldset>
       <legend><?=$nom?></legend>
       <input type="button" name="Suppr" value="X" class="croix">
       <p>Quantité : <?= $qt ?></p>
       <p>Prix TTC: <?= $prix ?></p>
     </fieldset>
   </div>

<?php endforeach; ?>

<div class="articlesPanier">
  <fieldset>
    <p>Récapitulatif de la commande :
      <br>    Nombre d'articles: <?= $nbArticles ?>
      <br>    Prix total :       <?= $total ?>
    </p>
  </fieldset>
</div>

<input type="button" name="" value="" id="Commander">
