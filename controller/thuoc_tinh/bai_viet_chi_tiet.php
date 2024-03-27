<?php
  require_once "model/bai_viet.php";
  if(isset($_GET['id_bv']) && ($_GET['id_bv'] > 0)) {
    $bai_viet_chi_tiet = bai_viet_chi_tiet($_GET['id_bv']);
  }
  require_once "view/tin_tuc/bai_viet_chi_tiet.php";
?>