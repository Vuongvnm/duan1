<?php
  require_once "model/voucher.php";
  if(isset($_POST['cap_nhat'])) {
    $id_voucher = $_POST['id_voucher'];
    $ten_voucher = $_POST['ten_voucher'];
    $ngay_bat_dau = $_POST['ngay_bat_dau'];
    $ngay_ket_thuc = $_POST['ngay_ket_thuc'];
    $giam_gia = $_POST['giam_gia'];
    $ghi_chu = $_POST['ghi_chu'];
    $ma_giam_gia = $_POST['ma_giam_gia'];
    $dieu_kien = $_POST['dieu_kien'];
    $giam_toi_da = $_POST['giam_toi_da'];
    cap_nhat_voucher($id_voucher, $ten_voucher, $ngay_bat_dau, $ngay_ket_thuc, $giam_gia, $ghi_chu, $ma_giam_gia, $dieu_kien, $giam_toi_da);
    echo "<script type='text/javascript'>alert('Cập nhật thành công!');</script>"; 
  }
  header('Location: index.php?action=danh_sach_voucher');
?>