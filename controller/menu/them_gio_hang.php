<?php
require_once "model/menu.php";
if (!isset($_SESSION['tai_khoan'])) {
  if (isset($_GET['id_sp']) && ($_GET['id_sp'] > 0)) {
    $id_sp = $_GET['id_sp'];
    $mot_san_pham = mot_san_pham($id_sp);
    if (!isset($_SESSION['gio_hang'])) {
      $_SESSION['gio_hang'] = [];
      $gio_hang = [
        'id_sp' => $mot_san_pham['id_sp'],
        'ten_sp' => $mot_san_pham['ten_sp'],
        'hang' => $mot_san_pham['hang'],
        'gia_sp' => $mot_san_pham['gia_sp'],
        'xuat_xu' => $mot_san_pham['xuat_xu'],
        'hinh_anh' => $mot_san_pham['hinh_anh'],
        'so_luong' => 1,
      ];
      array_push($_SESSION['gio_hang'], $gio_hang);
    } else {
      $check = false;
      foreach ($_SESSION['gio_hang'] as $key => $gh) {
        if ($gh['id_sp'] == $id_sp) {
          $_SESSION['gio_hang'][$key]['so_luong'] += 1;
          $check = true;
          break;
        }
      }
      if ($check == false) {
        $gio_hang = [
          'id_sp' => $mot_san_pham['id_sp'],
          'ten_sp' => $mot_san_pham['ten_sp'],
          'hang' => $mot_san_pham['hang'],
          'gia_sp' => $mot_san_pham['gia_sp'],
          'xuat_xu' => $mot_san_pham['xuat_xu'],
          'hinh_anh' => $mot_san_pham['hinh_anh'],
          'so_luong' => 1,
        ];
        array_push($_SESSION['gio_hang'], $gio_hang);
      }
    }
    $tong_tien = 0;
    if (isset($_SESSION['gio_hang']) && is_array($_SESSION['gio_hang'])) {
      foreach ($_SESSION['gio_hang'] as $sp) {
        $tong_tien += $sp['gia_sp'] * $sp['so_luong'];
      }
    }
  }
} else {
  if(isset($_GET['id_sp']) && ($_GET['id_sp'] > 0)) {
    $id_sp = $_GET['id_sp'];
    $so_luong = 1;
    $id_tk = $_SESSION['tai_khoan']['id_tk'];
    them_gio_hang($so_luong, $id_tk, $id_sp);
  }
}
require_once "view/menu/gio_hang.php";
