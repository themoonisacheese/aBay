

<link rel="stylesheet" href="view/Categorie.view.css">

<div class="sousCategories"></div>

<div class="ArticleCategorie">



  <h2>Les Articles </h2>
  <div class="ConteneurCategorie">
    <?php foreach ($articles as $article):
      $path = "http://www-info.iut2.upmf-grenoble.fr/intranet/enseignements/ProgWeb/data/bricomachin/img/".$article->image ?>
      <div class="Article"><a href="article.php?ref=<?=$article->ref?>" class="ArticleA">
        <img src="<?=$path?>" alt=""  class="imageArticle">
        <p class="titreArticle">
          <?= $article->libelle ?><br>
          <?= $article->prix?> euros
        </p>
      </a></div>

    <?php endforeach; ?>

  </div>
</div>
