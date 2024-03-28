<?php
  require_once "../model/pdo.php";
  
  function danh_sach_tai_khoan() {
    $sql = "SELECT * FROM tai_khoan ORDER BY id_tk DESC";
    return pdo_query($sql);
  }
  function xoa_tai_khoan($id_tk) {
    $sql = "DELETE FROM tai_khoan WHERE id_tk = $id_tk";
    pdo_execute($sql);
  }
  function chi_tiet_tai_khoan($id_tk) {
    $sql = "SELECT * FROM chi_tiet_tai_khoan WHERE id_tk = '$id_tk'";
    return pdo_query($sql);
  }

?>