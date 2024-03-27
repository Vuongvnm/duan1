<?php
  require_once "model/tin_tuc.php";
  require_once "model/bai_viet.php";
  $danh_sach_tin_tuc = danh_sach_tin_tuc();
  if(isset($_GET['id_bv']) && ($_GET['id_bv'] > 0)) {
    $id_bv = $_GET['id_bv'];
    $mot_bai_viet = mot_bai_viet($id_bv);
    require_once "view/bai_viet/sua_bai_viet.php";
  } 
?>