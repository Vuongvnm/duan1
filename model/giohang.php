<?php
include_once "pdo.php";
function themGioHang($id_sp, $id_nd, $so_luong)
{
  if(kiemTraSanPhamCoChua($id_sp, $id_nd)) {
    congSoLuong($id_sp, $id_nd);
  } else {
    $sql = "INSERT INTO gio_hang (so_luong, id_tknd, id_sp) 
      values ('$so_luong', '$id_nd', '$id_sp')";
    pdo_execute($sql);
  }
}

function kiemTraSanPhamCoChua($id_sp, $id_nd)
{
  $sql = "select * from gio_hang where id_sp = $id_sp and id_tknd = $id_nd";
  return count(pdo_query($sql)) > 0 ? true : false;
}

function congSoLuong($id_sp, $id_nd)
{
  $sql = "select * from gio_hang where id_sp = $id_sp and id_tknd = $id_nd";
  $soLuong = pdo_query_one($sql)['so_luong'] + 1;
  $sql = "update gio_hang set so_luong = $soLuong where id_sp = $id_sp and id_tknd = $id_nd";
  pdo_execute($sql);
}

function laySanPhamTheoId($id) {
  $sql = "select * from san_pham where id_sp = $id";
  return pdo_query_one($sql);
}

function laySanPhamTheoIdTk($id) {
  $sql = "select * from gio_hang where id_tknd = $id";
  return pdo_query($sql);
}