

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
       <legend><a href="article.php?ref=<?=$ref?>"><?=$nom?></a></legend>
       <form class="supprimer" action="<?=$_SERVER['REQUEST_URI']?>" method="post">
         <input type="text" name="id" value="<?= $ref?>" style="display: none;" readonly>
         <input type="submit" name="Suppr" value="X" class="croix">
       </form>
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

<input type="button" name="" value="Commander" id="Commander">
