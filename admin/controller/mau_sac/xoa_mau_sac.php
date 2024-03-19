<?php
  require_once "model/mau_sac.php";
  if(isset($_GET['id_ms'])) {
    xoa_mau_sac($_GET['id_ms']);
    $xoa_thanh_cong = true;
    echo "<script type='text/javascript'>alert('Xóa thành công!');</script>"; // Không hiển thị
  }
  header('Location: index.php?action=danh_sach_mau_sac');
  exit();
?>