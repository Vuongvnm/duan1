<?php
  require_once "model/hoa_don.php";
  if(isset($_GET['id_hd']) && ($_GET['id_hd'] > 0)) {
    $id_hd = $_GET['id_hd'];
    $tinh_trang = tinh_trang($id_hd);
    require_once "view/hoa_don/sua_hoa_don.php";
  } 
?>