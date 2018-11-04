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
    $this->contenu = array();
  }

  function addArticle($ref, int $qte = 1)
  {
    if (array_key_exists($ref, $this->contenu)) {
      $this->contenu[$ref] += $qte;
    } else {
      $this->contenu[$ref] = $qte;
    }
  }
  function delArticle($ref)
  {
    unset($this->contenu[$ref]);
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
