<?php
  require_once "pdo.php";

  function danh_sach_san_pham() {
    $sql = "SELECT * FROM san_pham ORDER BY id_sp DESC LIMIT 16";
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

  function dang_ky($ten_dang_nhap, $email, $mat_khau) {
    $sql = "INSERT INTO tai_khoan_nguoi_dung (ten_dang_nhap, email, mat_khau) VALUES ('$ten_dang_nhap', '$email', '$mat_khau')";
    pdo_execute($sql);
  }

  function dang_nhap($ten_dang_nhap, $mat_khau) {
    $sql= "SELECT * FROM tai_khoan_nguoi_dung WHERE ten_dang_nhap ='".$ten_dang_nhap."' AND mat_khau ='".$mat_khau."'";
    return pdo_query_one($sql);
  }

  function kiem_tra_gio_hang($id_tknd, $id_sp) {
    $sql = "SELECT * FROM gio_hang WHERE id_tknd = $id_tknd AND id_sp = $id_sp";
    $result = pdo_query($sql);
    if (count($result) == 0) {
        return false;
    }
    return true;
  }

  function so_luong_id_sp($id_tknd, $id_sp) {
    $sql = "SELECT * FROM gio_hang where id_tknd = $id_tknd AND id_sp = $id_sp";
    return pdo_query_one($sql)['so_luong'];
  }

  function them_gio_hang($so_luong, $id_tknd, $id_sp) {
    if (kiem_tra_gio_hang($id_tknd, $id_sp) == false) {
        $sql = "INSERT INTO gio_hang (so_luong, id_tknd, id_sp) VALUES ('$so_luong', '$id_tknd', '$id_sp')";
    } else {
        $so_luong = so_luong_id_sp($id_tknd, $id_sp) + 1;
        $sql = "UPDATE gio_hang SET so_luong = '$so_luong' WHERE id_tknd = '$id_tknd' AND id_sp = '$id_sp'";
    }
    pdo_execute($sql);
}



?>