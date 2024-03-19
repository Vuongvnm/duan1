<?php
  require_once "model/mau_sac.php";
  $danh_sach_mau_sac = danh_sach_mau_sac();
  // Kiểm tra xem việc xóa có thành công không và hiển thị thông báo
  if(isset($xoa_thanh_cong) && ($xoa_thanh_cong)) {
    echo "<script type='text/javascript'>alert('Xóa thành công!');</script>";
  }
  require_once "view/mau_sac/danh_sach_mau_sac.php";
?>