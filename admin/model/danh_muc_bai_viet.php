<?php
  require_once "../models/pdo.php";
  
  function hien_thi_danh_muc_bai_viet() {
    $sql = "SELECT * FROM danh_muc_tt ORDER BY id_tt_danh_muc  DESC";
    return pdo_query($sql);
  }

  function mot_danh_muc($id_tt_danh_muc ) {
    $sql = "SELECT * FROM danh_muc_tt WHERE id_tt_danh_muc  = $id_tt_danh_muc ";
    return pdo_query_one($sql);
  }

  function san_pham_id_danh_muc($id_tt_danh_muc ) {
    $sql = "SELECT * FROM tin_tuc WHERE id_tt_danh_muc  = $id_tt_danh_muc ";
    return pdo_query($sql);
  }

  function them_danh_muc($ten_danh_muc) {
    $sql = "INSERT INTO danh_muc_tt (ten_dm) VALUES ('$ten_danh_muc')";
    pdo_execute($sql);
  }

  function xoa_danh_muc($id_tt_danh_muc ) {
    $sql = "DELETE FROM danh_muc_tt WHERE id_tt_danh_muc  = $id_tt_danh_muc ";
    pdo_execute($sql);
  }

  function cap_nhat_danh_muc($id_tt_danh_muc , $ten_danh_muc) {
    $sql = "UPDATE danh_muc_tt SET ten_danh_muc = '".$ten_danh_muc."' WHERE id_tt_danh_muc = $id_tt_danh_muc ";
    pdo_execute($sql);
  }
?>