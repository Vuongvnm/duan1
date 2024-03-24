<?php
  require_once "model/hoa_don.php";
  if(isset($_POST['cap_nhat'])) {
    $id_hd = $_POST['id_hd'];
    $tinh_trang_thanh_toan = $_POST['tinh_trang_thanh_toan'];
    cap_nhat_hoa_don($id_hd, $tinh_trang_thanh_toan);
    echo "<script type='text/javascript'>alert('Cập nhật thành công!');</script>"; // Chưa hiện thị
  }
  header('Location: index.php?action=danh_sach_hoa_don');
?>