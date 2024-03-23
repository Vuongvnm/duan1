<?php
  require_once "model/tin_tuc.php";
  $danh_sach_tin_tuc = hien_thi_tin_tuc();
  // Kiểm tra xem việc xóa có thành công không và hiển thị thông báo
  if(isset($xoa_thanh_cong) && ($xoa_thanh_cong)) {
    echo "<script type='text/javascript'>alert('Xóa thành công!');</script>";
  }
  require_once "view/tin_tuc/danh_sach_tin_tuc.php";
?>