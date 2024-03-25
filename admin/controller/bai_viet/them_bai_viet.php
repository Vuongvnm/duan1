<?php
  require_once "model/tin_tuc.php";
  require_once "model/bai_viet.php";
  $danh_sach_tin_tuc = danh_sach_tin_tuc();
  require_once "view/bai_viet/them_bai_viet.php";
  if(isset($_POST['them_moi'])) {
    $ten_bai_viet = $_POST['ten_bai_viet'];
    $tom_tat = $_POST['tom_tat'];
    $noi_dung = $_POST['noi_dung'];
    $hinh_anh = $_FILES['hinh_anh'];
    $id_tt = $_POST['id_tt'];
    $target_dir = "../assets/uploads/";
    $target_file = $target_dir . basename($_FILES["hinh_anh"]["name"]);
    $ten_hinh_anh = $_FILES["hinh_anh"]["name"];
    move_uploaded_file($_FILES["hinh_anh"]["tmp_name"], $target_file);
    them_bai_viet($ten_bai_viet, $tom_tat, $noi_dung, $ten_hinh_anh, $id_tt);
    echo "<script type='text/javascript'>alert('Thêm thành công!');</script>";
  }
  error_reporting(E_ERROR | E_PARSE);
  header('Location: index.php?action=them_bai_viet');
?>