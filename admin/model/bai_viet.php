<?php
  require_once "../model/pdo.php";

  function danh_sach_bai_viet() {
    $sql = "SELECT * FROM bai_viet ORDER BY id_bv DESC";
    return pdo_query($sql);
  }

  function mot_bai_viet($id_bv) {
    $sql = "SELECT * FROM bai_viet WHERE id_bv = $id_bv";
    return pdo_query_one($sql);
  }

  function them_bai_viet($ten_bai_viet, $tom_tat, $noi_dung, $hinh_anh, $id_tt) {
    $sql = "INSERT INTO bai_viet (ten_bai_viet, tom_tat, noi_dung, hinh_anh, id_tt) VALUES ('$ten_bai_viet', '$tom_tat', '$noi_dung', '$hinh_anh', '$id_tt')";
    pdo_execute($sql);
  }

  function xoa_bai_viet($id_bv) {
    $sql = "DELETE FROM bai_viet WHERE id_bv = $id_bv";
    pdo_execute($sql);
  }

  function hien_thi_idtt_by_idbv($id_bv) {
    $sql = "SELECT * FROM bai_viet WHERE id_bv = '$id_bv'";
    return pdo_query_one($sql)['id_tt'];
  }

  function cap_nhat_bai_viet($id_bv, $ten_bai_viet, $tom_tat, $noi_dung, $hinh_anh, $id_tt) {
    if($hinh_anh != "") {
      $sql = "UPDATE bai_viet SET ten_bai_viet = '".$ten_bai_viet."', tom_tat = '".$tom_tat."', noi_dung = '".$noi_dung."', hinh_anh = '".$hinh_anh."', id_tt = '".$id_tt."' WHERE id_bv = $id_bv";
      pdo_execute($sql);
    } else {
      $sql = "UPDATE bai_viet SET ten_bai_viet = '".$ten_bai_viet."', tom_tat = '".$tom_tat."', noi_dung = '".$noi_dung."', id_tt = '".$id_tt."' WHERE id_bv = $id_bv";
      pdo_execute($sql);
    }
  }
?>