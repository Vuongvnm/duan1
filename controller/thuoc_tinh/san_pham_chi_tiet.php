<?php
  require_once "model/thuoc_tinh.php";
  if(isset($_GET['id_sp']) && ($_GET['id_sp'] > 0)) {
    $san_pham_chi_tiet = san_pham_chi_tiet($_GET['id_sp']);
  }
  $danh_sach_kich_co = danh_sach_kich_co();
  require_once "view/san_pham/san_pham_chi_tiet.php";
?>