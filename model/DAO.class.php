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

    }

    ?>
