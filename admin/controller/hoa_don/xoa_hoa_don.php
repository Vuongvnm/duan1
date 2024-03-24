<?php
  require_once "model/hoa_don.php";
  if(isset($_GET['id_hd'])) {
    xoa_hoa_don($_GET['id_hd']);
    $xoa_thanh_cong = true;
    echo "<script type='text/javascript'>alert('Xóa thành công!');</script>"; // Không hiển thị
  }
  header('Location: index.php?action=danh_sach_hoa_don');
  exit();
?>