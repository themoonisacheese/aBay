<?php include_once("view/Categorie.view.css") ?>


<div class="ArticleCategorie">

  <div class="sousCategories">

  </div>
  
  <h2>Nos meilleurs produits : </h2>
  <div class="ConteneurCategorie">
    <?php foreach ($articles as $article):
      $path = "http://www-info.iut2.upmf-grenoble.fr/intranet/enseignements/ProgWeb/data/bricomachin/img/".$article->image ?>
      <a href="article.php?ref=<?=$article->ref?>"><div class="Article">
        <img src="<?=$path?>" alt="" class="imageArticle">
        <p class="titreArticle">
          <?= $article->libelle ?><br>
          <?= $article->prix?> euros
        </p>
      </div></a>

    <?php endforeach; ?>

  </div>
</div>
