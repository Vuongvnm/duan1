<?php
  require_once "model/binh_luan.php";
  if(isset($_GET['id_bl'])) {
    xoa_binh_luan($_GET['id_bl']);
    $xoa_thanh_cong = true;
    echo "<script type='text/javascript'>alert('Xóa thành công!');</script>"; // Không hiển thị
  }
  header('Location: index.php?action=danh_sach_binh_luan');
  exit();
?>