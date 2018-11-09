<?php
include_once 'model/DAO.class.php';
include_once 'model/Article.class.php';
include_once 'model/Categorie.class.php';
$best = $dao->fetchBest();
$categories= $dao->fetchCategorie(1);
$dao->fetchTree($categories);
function displayCategories($cat)
{
  ?>
  <h3><a href="categorie.php?id=<?=$cat->id?>"> <?=$cat->nom?></a>
    <?php if (count($cat->enfants)>0) {?>
      <button type="button" name="show" onclick="toggleShow(<?=$cat->id?>);">V</button>
    <?php } ?>
  </h3>
  <div class="singleCatContents" id="<?=$cat->id?>" style="display: none">
    <?php foreach ($cat->enfants as $enfant) {
      displayCategories($enfant);
    } ?>
  </div>
  <?php
}
include_once 'controler/Header.ctrl.php';
include 'view/Home.view.php';
include_once 'controler/Footer.ctrl.php';
?>
