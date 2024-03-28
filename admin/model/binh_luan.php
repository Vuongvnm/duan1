<?php
  require_once "../model/pdo.php";
  
  function hien_thi_danh_sach_binh_luan() {
    $sql = "SELECT * FROM binh_luan ORDER BY id_bl LIMIT 10";
    return pdo_query($sql);
  }
  function an_binh_luan($id_bl) {
    $sql = "UPDATE binh_luan SET trang_thai = '0' WHERE id_bl= $id_bl";
    pdo_execute($sql);
  }
  function hien_binh_luan($id_bl) {
    $sql = "UPDATE binh_luan SET trang_thai = '1' WHERE id_bl= $id_bl";
    pdo_execute($sql);
  }
  function chi_tiet_binh_luan($id_bl) {
    $sql = "SELECT * FROM binh_luan WHERE id_bl = $id_bl";
    return pdo_query_one($sql);
  }

  function xoa_binh_luan($id_bl) {
    $sql = "DELETE FROM binh_luan WHERE id_bl = $id_bl";
    pdo_execute($sql);
  }
?>