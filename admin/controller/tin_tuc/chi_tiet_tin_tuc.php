<?php
  require_once "model/mau_sac.php";
  require_once "model/danh_muc_bai_viet.php";
  require_once "model/san_pham.php";
  require_once "model/tin_tuc.php";
  $danh_sach_danh_muc_bai_viet = hien_thi_danh_muc_bai_viet();
  if(isset($_GET['id_tt']) && ($_GET['id_tt'] > 0)) {
    $id_tt
     = $_GET['id_tt'];
    $mot_bai_viet = mot_bai_viet($id_tt);
  }
  require_once "view/tin_tuc/chi_tiet_tin_tuc.php";
?>