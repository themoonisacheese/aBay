<?php include_once 'model/Article.class.php';
include_once 'model/Categorie.class.php';
include_once 'model/DAO.class.php';
if (isset($_GET['id'])) {
  $catid = $_GET['id'];
}else{
  $catid = 1;
}
$categorie = $dao->fetchCategorie($catid);
$dao->fetchTree($categorie);
$articles = $dao->fetchArticlesFromCat($categorie);
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
include 'controler/Header.ctrl.php';
include 'view/Categorie.view.php';
include 'controler/Footer.ctrl.php';
?>
