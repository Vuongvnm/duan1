<?php
  require_once "model/voucher.php";
  if(isset($_POST['cap_nhat'])) {
    $id_voucher = $_POST['id_voucher'];
    $ten_voucher = $_POST['ten_voucher'];
    $ngay_bat_dau = $_POST['ngay_bat_dau'];
    $ngay_ket_thuc = $_POST['ngay_ket_thuc'];
    $so_tien_giam = $_POST['so_tien_giam'];
    $ghi_chu = $_POST['ghi_chu'];
    $ma_giam_gia = $_POST['ma_giam_gia'];
    $dieu_kien = $_POST['dieu_kien'];
    cap_nhat_voucher($id_voucher, $ten_voucher, $ngay_bat_dau, $ngay_ket_thuc, $so_tien_giam, $ghi_chu, $ma_giam_gia, $dieu_kien);
    echo "<script type='text/javascript'>alert('Cập nhật thành công!');</script>"; 
  }
  header('Location: index.php?action=danh_sach_voucher');
?>