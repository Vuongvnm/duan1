<?php
  require_once "model/danh_muc.php";
  $danh_sach_danh_muc = hien_thi_danh_muc();
  // Kiểm tra xem việc xóa có thành công không và hiển thị thông báo
  if(isset($xoa_thanh_cong) && ($xoa_thanh_cong)) {
    echo "<script type='text/javascript'>alert('Xóa thành công!');</script>";
  }
  require_once "view/danh_muc/danh_sach_danh_muc.php";
?>