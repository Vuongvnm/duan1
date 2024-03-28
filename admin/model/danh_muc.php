<?php
  require_once "../model/pdo.php";
  
  function hien_thi_danh_muc() {
    $sql = "SELECT * FROM danh_muc ORDER BY id_dm DESC";
    return pdo_query($sql);
  }

  function mot_danh_muc($id_dm) {
    $sql = "SELECT * FROM danh_muc WHERE id_dm = $id_dm";
    return pdo_query_one($sql);
  }

  function san_pham_id_danh_muc($id_dm) {
    $sql = "SELECT * FROM san_pham WHERE id_dm = $id_dm";
    return pdo_query($sql);
  }

  function them_danh_muc($ten_dm) {
    $sql = "INSERT INTO danh_muc (ten_dm) VALUES ('$ten_dm')";
    pdo_execute($sql);
  }

  function xoa_danh_muc($id_dm) {
    $sql = "DELETE FROM danh_muc WHERE id_dm = $id_dm";
    pdo_execute($sql);
  }

  function cap_nhat_danh_muc($id_dm, $ten_dm) {
    $sql = "UPDATE danh_muc SET ten_dm = '".$ten_dm."' WHERE id_dm = $id_dm";
    pdo_execute($sql);
  }

  function checkDanhMucTrong($id) {
    return count(san_pham_id_danh_muc($id)) > 0 ? false : true;
  }
?>