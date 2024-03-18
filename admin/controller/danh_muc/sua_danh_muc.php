<?php
  require_once "model/danh_muc.php";
  if(isset($_GET['id_dm']) && ($_GET['id_dm'] > 0)) {
    $mot_danh_muc = mot_danh_muc($_GET['id_dm']);
    require_once "view/danh_muc/sua_danh_muc.php";
  } 
?>