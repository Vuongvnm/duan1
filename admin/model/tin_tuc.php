<?php
  require_once "../models/pdo.php";

  function hien_thi_tin_tuc() {
    $sql = "SELECT * FROM tin_tuc ORDER BY id_tt DESC";
    return pdo_query($sql);
  }

  function mot_bai_viet($id_tt) {
    $sql = "SELECT * FROM tin_tuc WHERE id_tt = $id_tt";
    return pdo_query_one($sql);
  }

  function them_bai_viet($ten_bai_viet, $tom_tat, $noi_dung, $hinh_anh, $id_tt_danh_muc) {
    $sql = "INSERT INTO tin_tuc (ten_bai_viet, tom_tat, noi_dung, hinh_anh, id_tt_danh_muc) VALUES ('$ten_bai_viet', '$tom_tat', '$noi_dung', '$hinh_anh', '$id_tt_danh_muc')";
    pdo_execute($sql);
  }

  function xoa_bai_viet($id_tt) {
    $sql = "DELETE FROM tin_tuc WHERE id_tt = $id_tt";
    pdo_execute($sql);
  }

  function cap_nhat_bai_viet($id_tt, $ten_bai_viet, $tom_tat, $noi_dung, $hinh_anh, $id_tt_danh_muc) {
    if($hinh_anh != "") {
      $sql = "UPDATE tin_tuc SET ten_bai_viet = '".$ten_bai_viet."', tom_tat = '".$tom_tat."', noi_dung = '".$noi_dung."', hinh_anh = '".$hinh_anh."', id_tt_danh_muc = '".$id_tt_danh_muc."' WHERE id_tt = $id_tt ";
      pdo_execute($sql);
    } else {
      $sql = "UPDATE tin_tuc SET ten_bai_viet = '".$ten_bai_viet."', tom_tat = '".$tom_tat."', noi_dung = '".$noi_dung."', hinh_anh = '".$hinh_anh."', id_tt_danh_muc = '".$id_tt_danh_muc."' WHERE id_sp = $id_tt ";
      pdo_execute($sql);
    }
  }

  function hien_thi_iddm_by_idtt($id_tt) {
    $sql = "SELECT * FROM tin_tuc WHERE id_tt = '$id_tt'";
    return pdo_query_one($sql)['id_tt_danh_muc'];
  }
  
?>