<div class="commande">
  <?php if (count($articlesSansStock) > 0): ?>
<h3>Les articles suivants ne sont pas en stock pour les quantites commandees</h3>
    <?php foreach ($articlesSansStock as $article): ?>
      <a href="article.php?ref=<?=$article->ref?>"><?=$article->libelle?></a><br>
    <?php endforeach; ?>
    <a href="panier.php">Retour au panier</a>
  <?php else: ?>
    <h2>Votre commande a ete effectuee avec succes!</h2>
  <?php endif; ?>

</div>
