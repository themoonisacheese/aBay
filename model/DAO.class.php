<?php

    require_once("model/Categorie.class.php");
    require_once("model/Article.class.php");

    // Creation de l'unique objet DAO
    $dao = new DAO();

    // Le Data Access Object
    // Il représente la base de donnée
    class DAO {
        // L'objet local PDO de la base de donnée
        private $db;
        // Le type, le chemin et le nom de la base de donnée
        private $database = 'sqlite:data/data.db';

        // Constructeur chargé d'ouvrir la BD
        function __construct() {
          try {
            $this->db = new PDO($this->database);
          } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
          }

        }

        function fetchArticle($ref)
        {
          return $this->db->query("select * from article where ref = $ref limit 1")->fetchAll(PDO::FETCH_CLASS)[0];
        }
        function fetchCategorie($id){
          return $this->db->query("select * from categorie where id = $id limit 1")->fetchAll(PDO::FETCH_CLASS)[0];
        }
        function fetchEnfants($id){
          return $this->db->query("select * from categorie where pere = $id and id != $id")->fetchAll(PDO::FETCH_CLASS);
        }
        function fetchBest($limit =5 , $id =0){
          if ($id == 0) {
            return $this->db->query("select * from article order by rating desc limit $limit")->fetchAll(PDO::FETCH_CLASS);
          } else {
            return $this->db->query("select * from article where categorie = $id limit $limit order by rating desc")->fetchAll(PDO::FETCH_CLASS);
          }

        }

        function fetchArticlesFromCat($cat){
          $ret = array();
          if (count($cat->enfants) != 0) {
            foreach ($cat->enfants as $enfant) {
              $ret =array_merge($ret, $this->fetchArticlesFromCat($enfant));
            }
          }else {
            $ret = $this->db->query("select * from article where categorie = $cat->id")->fetchAll(PDO::FETCH_CLASS);
          }
          return $ret;
        }

        function fetchTree($cat){ // ajoute une propriete enfants a $cat qui contient les categories filles. ces categories sont egalement construites de cette facon, et leur enfants, etc.
          $cat->enfants = $this->fetchEnfants($cat->id);
          foreach ($cat->enfants as $enfant) {
            $this->fetchTree($enfant);
          }
        }

        function acheter($ref, $qte = 1)
        {
          $query = "update article set stock =(select stock from article where ref = $ref) - $qte, rating = (select rating from article where ref = $ref) + $qte where ref = $ref";
          $this->db->prepare($query)->execute();
        }

        function stocks($qte){
          $query = "update article set stock = $qte";
          $this->db->prepare($query)->execute();
        }

    }

    ?>
