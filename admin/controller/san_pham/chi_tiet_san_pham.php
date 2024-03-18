<?php
  require_once "model/mau_sac.php";
  require_once "model/danh_muc.php";
  require_once "model/san_pham.php";
  $danh_sach_danh_muc = hien_thi_danh_muc();
  $danh_sach_mau_sac = danh_sach_mau_sac();
  if(isset($_GET['id_sp']) && ($_GET['id_sp'] > 0)) {
    $id_sp = $_GET['id_sp'];
    $mot_san_pham = mot_san_pham($id_sp);
  }
  require_once "view/san_pham/chi_tiet_san_pham.php";
?>