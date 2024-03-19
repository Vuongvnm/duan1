<?php
  require_once "model/danh_muc.php";
  if(isset($_GET['id_dm'])) {
    xoa_danh_muc($_GET['id_dm']);
    $xoa_thanh_cong = true;
    echo "<script type='text/javascript'>alert('Xóa thành công!');</script>"; // Không hiển thị
  }
  header('Location: index.php?action=danh_sach_danh_muc');
  exit();
?>