<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>aBay le sitemarchand</title>
  </head>
  <body>
    <?php
    $article = getArticle($GET_['ref']);
     ?>



<div class="article">
    <div class="photo"><img src="<?= $article->image ?>" alt=""></div>
    <div class="infos">
      <h2>Nom:</h2><p><?= $article->libelle ?></p>
      <h2>Categorie:</h2><p><?= $article->categorie ?></p>
      <h2>Prix:</h2><p><?= $article->prix ?></p>
    </div>
</div>






  </body>
</html>
