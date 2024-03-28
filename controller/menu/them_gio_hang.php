<?php
if (isset($_SESSION['tai_khoan'])) {
  include_once "model/giohang.php";
  $id_sp = $_GET['id_sp'];
  $id_nd = $_SESSION['tai_khoan']['id_tknd'];
  $so_luong = 1;
  themGioHang($id_sp, $id_nd, $so_luong);
  echo "Sẽ redirect về màn show giỏ hàng";
} else {
  $id_sp = $_GET['id_sp'];
  $so_luong = 1;
  
  if (isset($_SESSION['gio_hang'])) {
    $checkTonTaiSP = false;
    foreach ($_SESSION['gio_hang'] as $key => $item) {
      if ($item['id_sp'] == $id_sp) {
        $_SESSION['gio_hang'][$key]['so_luong'] += 1;
        $checkTonTaiSP = true;
        break;
      }
    }
    if ($checkTonTaiSP == false) {
      $_SESSION['gio_hang'][] = [
        'id_sp' => $id_sp,
        'so_luong' => $so_luong
      ];
    }
  } else {
    $_SESSION['gio_hang'][] = [
      'id_sp' => $id_sp,
      'so_luong' => $so_luong
    ];
  }

  var_dump($_SESSION['gio_hang']);
}
