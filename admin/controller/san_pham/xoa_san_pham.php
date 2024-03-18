<?php
  require_once "model/san_pham.php";
  if(isset($_GET['id_sp'])) {
    xoa_san_pham($_GET['id_sp']);
    $xoa_thanh_cong = true;
  }
  header('Location: index.php?action=danh_sach_san_pham');
  exit();
?>