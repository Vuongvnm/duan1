<?php
  require_once "../model/pdo.php";

  function hien_thi_san_pham() {
    $sql = "SELECT * FROM san_pham ORDER BY id_sp DESC";
    return pdo_query($sql);
  }

  function mot_san_pham($id_sp) {
    $sql = "SELECT * FROM san_pham WHERE id_sp = $id_sp";
    return pdo_query_one($sql);
  }

  function them_san_pham($ten_sp, $kich_co, $hang, $gia_sp, $xuat_xu, $hinh_anh, $so_luong, $ghi_chu, $id_dm, $id_ms) {
    $sql = "INSERT INTO san_pham (ten_sp, kich_co, hang, gia_sp, xuat_xu, hinh_anh, so_luong, ghi_chu, id_dm, id_ms) VALUES ('$ten_sp', '$kich_co', '$hang', '$gia_sp', '$xuat_xu', '$hinh_anh', '$so_luong', '$ghi_chu', '$id_dm', '$id_ms')";
    pdo_execute($sql);
  }

  function xoa_san_pham($id_sp) {
    $sql = "DELETE FROM san_pham WHERE id_sp = $id_sp";
    pdo_execute($sql);
  }

  function cap_nhat_san_pham($id_sp, $ten_sp, $kich_co, $hang, $gia_sp, $xuat_xu, $hinh_anh, $so_luong, $ngay_cap_nhat, $ghi_chu, $id_dm, $id_ms) {
    if($hinh_anh != "") {
      $sql = "UPDATE san_pham SET ten_sp = '".$ten_sp."', kich_co = '".$kich_co."', hang = '".$hang."', gia_sp = '".$gia_sp."', xuat_xu = '".$xuat_xu."', hinh_anh = '".$hinh_anh."', so_luong = '".$so_luong."', ngay_cap_nhat = '".$ngay_cap_nhat."', ghi_chu = '".$ghi_chu."', id_dm = '".$id_dm."', id_ms = '".$id_ms."' WHERE id_sp = $id_sp";
      pdo_execute($sql);
    } else {
      $sql = "UPDATE san_pham SET ten_sp = '".$ten_sp."', kich_co = '".$kich_co."', hang = '".$hang."', gia_sp = '".$gia_sp."', xuat_xu = '".$xuat_xu."', so_luong = '".$so_luong."', ngay_cap_nhat = '".$ngay_cap_nhat."', ghi_chu = '".$ghi_chu."', id_dm = '".$id_dm."', id_ms = '".$id_ms."' WHERE id_sp = $id_sp";
      pdo_execute($sql);
    }
  }

  function hien_thi_iddm_by_idsp($id_sp) {
    $sql = "SELECT * FROM san_pham WHERE id_sp = '$id_sp'";
    return pdo_query_one($sql)['id_dm'];
  }

  function kho_anh() {
    $sql = "SELECT * FROM kho_anh ORDER BY id_ha DESC";
    return pdo_query($sql);
  }
?>