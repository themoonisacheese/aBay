
<div class="Best" style="margin:auto;">
  <h2 style="margin-left:40%;">Nos meilleurs produits : </h2>
  <div class="ConteneurBest" style="display:flex;">
    <?php foreach ($best as $article):
      $path = "http://www-info.iut2.upmf-grenoble.fr/intranet/enseignements/ProgWeb/data/bricomachin/img/".$article->ref.".jpg" ?>
      <div class="BestArticle" style="border: solid black 1px;">
        <img src="<?=$path?>" alt="">
        <div class="testimg" style="width:100%;height:200px;background-color:white;">

        </div>
        <p class="titreArticle" style="margin:2px;">
          <?= $article->libelle ?>
        </p>
      </div>
    <?php endforeach; ?>
  </div>
</div>
