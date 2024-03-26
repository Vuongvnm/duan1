<?php
  require_once "model/tin_tuc.php";
  if(isset($_GET['id_tt']) && ($_GET['id_tt'] > 0)) {
    $id_tt = $_GET['id_tt'];
    $danh_sach_bai_viet = bai_viet_id_tin_tuc($id_tt);
    $danh_sach_tin_tuc = mot_tin_tuc($id_tt);
  }
  require_once "view/tin_tuc/chi_tiet_tin_tuc.php";
?>