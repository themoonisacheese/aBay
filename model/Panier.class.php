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
    $contenu = array();
  }

  function addArticle(Article $art)
  {
    array_push($contenu, $art);
  }

  function getTotal()
  {
    $ret =0;
    foreach ($contenu as $value) {
      $ret += $value->prix;
    }
  }
}
?>
