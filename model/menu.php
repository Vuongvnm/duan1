<?php
  require_once "pdo.php";

  function danh_sach_san_pham() {
    $sql = "SELECT * FROM san_pham ORDER BY id_sp DESC LIMIT 16";
    return pdo_query($sql);
  }

  function danh_sach_bai_viet() {
    $sql = "SELECT * FROM bai_viet ORDER BY id_bv DESC";
    return pdo_query($sql);
  }

  

  function mot_san_pham($id_sp) {
    $sql = "SELECT * FROM san_pham WHERE id_sp = $id_sp";
    return pdo_query_one($sql);
  }

  function danh_sach_bai_viet() {
    $sql = "SELECT * FROM bai_viet ORDER BY id_bv DESC";
    return pdo_query($sql);
  }

?>