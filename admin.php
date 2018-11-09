<?php
if (isset($_GET['stock'])) {
  include 'model/DAO.class.php';
  $dao->stocks($_GET['stock']);
}


 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ADMIN</title>
  </head>
  <body>
    <a href="<?=$_SERVER['REQUEST_URI']?>?stock=100">mettre tous les stocks a 100</a><br>
    <a href="<?=$_SERVER['REQUEST_URI']?>?stock=0">mettre tous les stocks a 0</a><br>
  </body>
</html>
