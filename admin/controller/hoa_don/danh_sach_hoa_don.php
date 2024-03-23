<?php
  require_once "model/hoa_don.php";
  require_once "model/voucher.php";
  $danh_sach_voucher = danh_sach_voucher();
  $danh_sach_hd = danh_sach_hoa_don();
  
  if(isset($xoa_thanh_cong) && ($xoa_thanh_cong)) {
    echo "<script type='text/javascript'>alert('Xóa thành công!');</script>";
  }
  
  require_once "view/hoa_don/danh_sach_hoa_don.php";
?>