<?php
  require_once "model/voucher.php";
  $danh_sach_voucher = danh_sach_voucher();
  // Kiểm tra xem việc xóa có thành công không và hiển thị thông báo
  if(isset($xoa_thanh_cong) && ($xoa_thanh_cong)) {
    echo "<script type='text/javascript'>alert('Xóa thành công!');</script>";
  }
  require_once "view/voucher/danh_sach_voucher.php";
?>