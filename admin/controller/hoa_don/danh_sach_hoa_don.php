<?php
  require_once "model/hoa_don.php";
  require_once "model/voucher.php";
  $danh_sach_voucher = danh_sach_voucher();
  $danh_sach_hd = danh_sach_hoa_don();
  require_once "view/hoa_don/danh_sach_hoa_don.php";
?>