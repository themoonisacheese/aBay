<?php
include_once 'model/Article.class.php';

/**
 *
 */
class Panier
{
  public $contenu;
  function __construct()
  {
    $contenu = array('' => "");
  }

  function addArticle(Article $art, int $qte = 0)
  {
    if (array_key_exists($art->ref, $contenu)) {
      $contenu[$art->ref] += $qte;
    } else {
      $contenu[$art->ref] = $qte;
    }
  }

  function getTotal()
  {
    global $dao;
    $ret = 0;
    foreach ($contenu as $ref) {
      $ret += $dao->fetchArticle($ref)->prix;
    }

  }
}
?>
