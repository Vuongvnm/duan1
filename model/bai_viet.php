<?php
 require_once "pdo.php";
 function danh_sach_bai_viet() {
  $sql = "SELECT * FROM bai_viet ORDER BY id_bv DESC";
  return pdo_query($sql);
}

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
?>

