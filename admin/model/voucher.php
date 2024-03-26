<?php
require_once "../model/pdo.php";
  
function danh_sach_voucher() {
  $sql = "SELECT * FROM voucher ORDER BY id_voucher DESC";
  return pdo_query($sql);
}

function them_voucher($ten_voucher, $ngay_bat_dau, $ngay_ket_thuc, $so_tien_giam, $ghi_chu, $ma_giam_gia, $dieu_kien) {
    $sql = "INSERT INTO voucher (ten_voucher, ngay_bat_dau, ngay_ket_thuc, so_tien_giam, ghi_chu, ma_giam_gia, dieu_kien) VALUES ('$ten_voucher', '$ngay_bat_dau', '$ngay_ket_thuc', '$so_tien_giam', '$ghi_chu', '$ma_giam_gia', '$dieu_kien')";
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

function cap_nhat_voucher($id_voucher, $ten_voucher, $ngay_bat_dau, $ngay_ket_thuc, $so_tien_giam, $ghi_chu, $ma_giam_gia, $dieu_kien) {
  $sql = "UPDATE voucher SET ten_voucher = '".$ten_voucher."', ngay_bat_dau = '".$ngay_bat_dau."', ngay_ket_thuc = '".$ngay_ket_thuc."', so_tien_giam = '".$so_tien_giam."', ghi_chu = '".$ghi_chu."', ma_giam_gia = '".$ma_giam_gia."', dieu_kien = '".$dieu_kien."' WHERE id_voucher = $id_voucher";
  pdo_execute($sql);
}
?>