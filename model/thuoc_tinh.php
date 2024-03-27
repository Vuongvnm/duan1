<?php
  require_once "pdo.php";
  function mot_bai_viet($id_bv) {
    $sql = "SELECT * FROM bai_viet WHERE id_bv = $id_bv";
    return pdo_query_one($sql);
  }

  function bai_viet_chi_tiet($id_bv) {
    $sql = "SELECT * FROM bai_viet WHERE id_bv = $id_bv";
    return pdo_query_one($sql);
  }

  function hien_thi_idtt_by_idbv($id_bv) {
    $sql = "SELECT * FROM bai_viet WHERE id_bv = '$id_bv'";
    return pdo_query_one($sql)['id_tt'];
  }
  function san_pham_noi_bat() {
    $sql = "SELECT * FROM san_pham ORDER BY luot_xem DESC LIMIT 8";
    return pdo_query($sql);
  }

  function san_pham_moi() {
    $sql = "SELECT * FROM san_pham ORDER BY ngay_tao DESC LIMIT 8";
    return pdo_query($sql);
  }

  function mot_san_pham($id_sp) {
    $sql = "SELECT * FROM san_pham WHERE id_sp = $id_sp";
    return pdo_query_one($sql);
  }

  function san_pham_chi_tiet($id_sp) {
    $sql = "SELECT * FROM san_pham WHERE id_sp = $id_sp";
    return pdo_query_one($sql);
  }

  function danh_sach_kich_co() {
    $sql = "SELECT * FROM kich_co";
    return pdo_query($sql);
  }

  function hien_thi_idkc_theo_idsp($id_sp) {
    $sql = "SELECT * FROM san_pham WHERE id_sp = $id_sp";
    return pdo_query_one($sql)['id_kc'];
  }
?>