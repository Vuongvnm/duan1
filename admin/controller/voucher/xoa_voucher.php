<?php
  require_once "model/voucher.php";
  if(isset($_GET['id_voucher'])) {
    xoa_voucher($_GET['id_voucher']);
    $xoa_thanh_cong = true;
    echo "<script type='text/javascript'>alert('Xóa thành công!');</script>";
  }
  header('Location: index.php?action=danh_sach_voucher');
  exit();
?>