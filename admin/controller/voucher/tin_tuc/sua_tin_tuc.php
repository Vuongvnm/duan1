<?php
  require_once "model/tin_tuc.php";
  if(isset($_GET['id_tt']) && ($_GET['id_tt'] > 0)) {
    $mot_tin_tuc = mot_tin_tuc($_GET['id_tt']);
    require_once "view/tin_tuc/sua_tin_tuc.php";
  } 
?>