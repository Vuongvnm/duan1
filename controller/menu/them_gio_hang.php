<?php
  require_once "model/menu.php";
  $mot_san_pham = mot_san_pham($id_sp);
  if(isset($_GET['id_sp']) && ($_GET['id_sp'] > 0)) {
    $id_sp = $_GET['id_sp'];
    if(!isset($_SESSION['gio_hang'])) {
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
      foreach($_SESSION['gio_hang'] as $key => $gh) {
        if($gh['id_sp'] == $id_sp) {
          $_SESSION['gio_hang'][$key]['so_luong'] += 1;
          $check = true;
          break;
        }
      }
      if($check == false) {
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
  }
  require_once "view/menu/gio_hang.php";
?>