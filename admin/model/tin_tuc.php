<?php
  require_once "../model/pdo.php";

  function danh_sach_tin_tuc() {
    $sql = "SELECT * FROM tin_tuc ORDER BY id_tt DESC";
    return pdo_query($sql);
  }

  function mot_tin_tuc($id_tt) {
    $sql = "SELECT * FROM tin_tuc WHERE id_tt = $id_tt";
    return pdo_query_one($sql);
  }

  function them_tin_tuc($tieu_de) {
    $sql = "INSERT INTO tin_tuc (tieu_de) VALUES ('$tieu_de')";
    pdo_execute($sql);
  }

  function xoa_tin_tuc($id_tt) {
    $sql = "DELETE FROM tin_tuc WHERE id_tt = $id_tt";
    pdo_execute($sql);
  }

  function cap_nhat_tin_tuc($id_tt, $tieu_de) {
    $sql = "UPDATE tin_tuc SET tieu_de = '".$tieu_de."' WHERE id_tt = $id_tt";
    pdo_execute($sql);
  }

  function bai_viet_id_tin_tuc($id_tt) {
    $sql = "SELECT * FROM bai_viet WHERE id_tt = $id_tt";
    return pdo_query($sql);
  }
  
?>