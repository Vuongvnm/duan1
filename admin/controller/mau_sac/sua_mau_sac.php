<?php
  require_once "model/mau_sac.php";
  if(isset($_GET['id_ms']) && ($_GET['id_ms'] > 0)) {
    $mot_mau_sac = mot_mau_sac($_GET['id_ms']);
    require_once "view/mau_sac/sua_mau_sac.php";
  } 
?>