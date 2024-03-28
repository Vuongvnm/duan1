<?php
  require_once "model/binh_luan.php";
  $danh_sach_binh_luan = hien_thi_danh_sach_binh_luan();
//   Kiểm tra xem việc xóa có thành công không và hiển thị thông báo
  if(isset($xoa_thanh_cong) && ($xoa_thanh_cong)) {
    echo "<script type='text/javascript'>alert('Xóa thành công!');</script>";
  }
  require_once "view/binh_luan/danh_sach_binh_luan.php";
?>
