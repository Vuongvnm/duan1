<?php
  require_once "model/san_pham.php";
  $danh_sach_san_pham = hien_thi_san_pham();
  // Kiểm tra xem việc xóa có thành công không và hiển thị thông báo
  if(isset($xoa_thanh_cong) && ($xoa_thanh_cong)) {
    echo "<script type='text/javascript'>alert('Xóa thành công!');</script>";
  }
  require_once "view/san_pham/danh_sach_san_pham.php";
?>