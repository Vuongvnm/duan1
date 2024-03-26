<?php
  require_once "model/bai_viet.php";
  if(isset($_GET['id_bv'])) {
    $id_bv = $_GET['id_bv'];
    xoa_bai_viet($id_bv);
    echo "<script type='text/javascript'>alert('Xóa thành công!');</script>"; // Không hiển thị
  }
  header('Location: index.php?action=danh_sach_bai_viet');
  exit();
?>