<?php
require_once "../model/pdo.php";
function danh_sach_hoa_don() {
    $sql = "SELECT * FROM hoa_don ORDER BY id_hd DESC";
    return pdo_query($sql);
  }
function tinh_trang($id_hd) {
  $sql = "SELECT * FROM hoa_don WHERE id_hd = $id_hd";
  return pdo_query_one($sql);
}
function cap_nhat_hoa_don($id_hd, $tinh_trang_thanh_toan) {
  $sql = "UPDATE hoa_don SET tinh_trang_thanh_toan = '".$tinh_trang_thanh_toan."' WHERE id_hd = $id_hd";
  pdo_execute($sql);
}
function xoa_hoa_don($id_hd) {
  $sql = "DELETE FROM hoa_don WHERE id_hd = $id_hd";
  pdo_execute($sql);
}
function hien_thi_idvc_by_idhd($id_hd) {
  $sql = "SELECT * FROM hoa_don WHERE id_hd = '$id_hd'";
  return pdo_query_one($sql)['id_voucher'];
}

?>