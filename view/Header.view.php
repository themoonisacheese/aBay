

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<link rel="stylesheet" href="view/Header.view.css">

<div id="wrap">

<header>

</header>

<div class="NavHeader">
  <nav>
    <ul>
      <li><a href="home.php">Accueil</a></li>
      <li><a href="categorie.php?ref=1">Categories</a></li>
      <li><a href="panier.php">Panier <?php
        if ($panier->nombreDArticles() > 0) {
          echo "(".$panier->nombreDArticles().")";
        }
       ?></a></li>
      <li><a href="#">Connexion</a></li>
      <li><a href="#">Forum</a></li>
    </ul>
  </nav>
</div>

<div class="test">

</div>

<div class="contenu">
