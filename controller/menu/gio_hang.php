<?php
include_once "model/giohang.php";

//Trường hợp chưa đăng nhập
if (!isset($_SESSION['tai_khoan'])) {
  $gioHangs = $_SESSION['gio_hang'];
} else {
  $gioHangs = laySanPhamTheoIdTk($_SESSION['tai_khoan']['id_tknd']);
}

foreach($gioHangs as $item) {
  $sanPham = laySanPhamTheoId($item['id_sp']);
  $duLieuGioHang[] = [
        'ten_sp' => $sanPham['ten_sp'],
        'hinh_anh' => $sanPham['hinh_anh'],
        'gia_sp' => $sanPham['gia_sp'],
        'so_luong' => $item['so_luong'],
        'tong_tien' => $item['so_luong'] * $sanPham['gia_sp']
      ];
}

// $duLieuGioHang = array_map(function ($item) {
//   $sanPham = laySanPhamTheoId($item['id_sp']);
//   return [
//     'ten_sp' => $sanPham['ten_sp'],
//     'hinh_anh' => $sanPham['hinh_anh'],
//     'gia_sp' => $sanPham['gia_sp'],
//     'so_luong' => $item['so_luong'],
//     'tong_tien' => $item['so_luong'] * $sanPham['gia_sp']
//   ];
// }, $gioHangs);


include_once "view/menu/gio_hang.php";
