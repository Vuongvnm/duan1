<?php
require_once "../models/pdo.php";
  
function danh_sach_voucher() {
  $sql = "SELECT * FROM voucher ORDER BY id_voucher DESC";
  return pdo_query($sql);
}
function them_voucher($ten_voucher, $ngay_bat_dau, $ngay_ket_thuc, $giam_gia, $ghi_chu, $ma_giam_gia, $dieu_kien,$giam_toi_da) {
    $sql = "INSERT INTO voucher (ten_voucher, ngay_bat_dau, ngay_ket_thuc, giam_gia, ghi_chu, ma_giam_gia, dieu_kien, giam_toi_da) VALUES ('$ten_voucher', '$ngay_bat_dau', '$ngay_ket_thuc', '$giam_gia', '$ghi_chu', '$ma_giam_gia', '$dieu_kien', '$giam_toi_da')";
    pdo_execute($sql);
}
function mot_voucher($id_voucher) {
  $sql = "SELECT * FROM voucher WHERE id_voucher = $id_voucher";
  return pdo_query_one($sql);
} 
function xoa_voucher($id_voucher) {
  $sql = "DELETE FROM voucher WHERE id_voucher = $id_voucher";
  pdo_execute($sql);
}
function cap_nhat_voucher($id_voucher, $ten_voucher, $ngay_bat_dau, $ngay_ket_thuc, $giam_gia, $ghi_chu, $ma_giam_gia, $dieu_kien, $giam_toi_da) {
  $sql = "UPDATE voucher SET ten_voucher = '".$ten_voucher."', ngay_bat_dau = '".$ngay_bat_dau."', ngay_ket_thuc = '".$ngay_ket_thuc."', giam_gia = '".$giam_gia."', ghi_chu = '".$ghi_chu."', ma_giam_gia = '".$ma_giam_gia."', dieu_kien = '".$dieu_kien."', giam_toi_da = '".$giam_toi_da."' WHERE id_voucher = $id_voucher";
  pdo_execute($sql);
}
?>