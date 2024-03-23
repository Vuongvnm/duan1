<?php
  require_once "model/tin_tuc.php";
  if(isset($_GET['id_tt'])) {
    xoa_bai_viet($_GET['id_tt']);
    $xoa_thanh_cong = true;
  }
  header('Location: index.php?action=danh_sach_tin_tuc');
  exit();
?>