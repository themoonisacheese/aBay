<link rel="stylesheet" href="view/Home.view.css">

<div class="Best">
  <h2 style="margin-left:40%;">Nos meilleurs produits : </h2>
  <div class="ConteneurBest" style="display:flex;">
    <?php foreach ($best as $article):
      $path = "http://www-info.iut2.upmf-grenoble.fr/intranet/enseignements/ProgWeb/data/bricomachin/img/".$article->image ?>
      <a href="article.php?ref=<?=$article->ref?>"><div class="BestArticle" style="border: solid black 1px;">
        <img src="<?=$path?>" alt="" style="width:100%;height:300px;">
        <p class="titreArticle" style="margin:2px;">
          <?= $article->libelle ?><br>
          <?= $article->prix?> euros
        </p>
      </div></a>

    <?php endforeach; ?>

  </div>
</div>
<br>
<div class="Categories">
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
  <h2>Categories:</h2>
  <div class="catContent">
    <?php displayCategories($categories) ?>
  </div>
</div>
