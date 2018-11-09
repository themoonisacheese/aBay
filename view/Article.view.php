

    <div class="article">
        <div class="photo"><img src="http://www-info.iut2.upmf-grenoble.fr/intranet/enseignements/ProgWeb/data/bricomachin/img/<?= $article->image ?>" alt=""></div>
        <div class="infos">
          <h2>Nom:</h2><p><?= $article->libelle ?></p>
          <h2>Categorie:</h2><p><?= $categorie ?></p>
          <h2>Prix:</h2><p><?= $article->prix ?></p>
        </div>
        <form action="<?= $_SERVER['REQUEST_URI']?>" method="post">
          <input type="submit" name="sub" value="Acheter">
          <label for="qte">Quantite: </label>
          <input type="number" name="qte" value="1" min="1">
          <input type="text" name="id" value="<?= $article->ref ?>" style="visibility:hidden;" readonly>
        </form>
    </div>
