<?php
  require_once "model/voucher.php";
  if(isset($_GET['id_voucher'])) {
    $id_voucher = $_GET['id_voucher'];
    xoa_voucher($id_voucher);
    echo "<script type='text/javascript'>alert('Xóa thành công!');</script>";
  }
  header('Location: index.php?action=danh_sach_voucher');
?>