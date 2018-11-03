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
    $this->contenu = array('' => "");
  }

  function addArticle(Article $art, int $qte = 1)
  {
    if (array_key_exists($art->ref, $this->contenu)) {
      $this->contenu[$art->ref] += $qte;
    } else {
      $this->contenu[$art->ref] = $qte;
    }
  }
  function delArticle(Article $art)
  {
    unset($this->contenu[$art->ref]);
  }

  function nombreDArticles()
  {
    $ret = 0;
    foreach ($this->contenu as $ref=>$qte) {
      $ret += $qte;
    }
    return $ret;
  }

  function getTotal()
  {
    global $dao;
    $ret = 0;
    foreach ($this->contenu as $ref=>$qte) {
      $ret += $dao->fetchArticle($ref)->prix;
    }

  }
}
?>
