<?php
  require_once "model/voucher.php";
  $danh_sach_voucher = danh_sach_voucher();
  if(isset($_GET['id_voucher']) && ($_GET['id_voucher'] > 0)) {
    $id_voucher = $_GET['id_voucher'];
    $mot_voucher = mot_voucher($id_voucher);
  }
  require_once "view/voucher/chi_tiet_voucher.php";
?>