

<link rel="stylesheet" href="view/Panier.view.css">
<?php $total = $panier->getTotal();
$nbArticles = $panier->nombreDArticles();
if ($nbArticles > 0): ?>
<?php foreach ($articles as $ref => $article): ?>
  <?php
    $qt = $panier->contenu[$ref];
    $nom = $article->libelle;
    $prix= $article->prix;

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
<a href="commande.php"><input type="button" name="" value="Commander" id="Commander"></a>
<?php else:?>
  <h2>Vous n'avez pas d'article dans votre panier</h2>
<?php endif; ?>
