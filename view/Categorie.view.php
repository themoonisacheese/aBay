<link rel="stylesheet" href="view/Categorie.view.css">

<div class="ArticleCategorie">

  <div class="sousCategories">
    <script type="text/javascript">
        function toggleShow() {
          var id = arguments[0];
          var x = document.getElementById(id);
          if (x.style.display === "none") {
            x.style.display = "inherit";
          } else {
            x.style.display = "none";
          }
        }
    </script>
    <?php displayCategories($categorie); ?>
  </div>


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
