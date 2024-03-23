<?php
  require_once "model/kich_co.php";
  require_once "model/tin_tuc.php";
  require_once "model/danh_muc_bai_viet.php";
  $danh_sach_danh_muc_bai_viet = hien_thi_danh_muc_bai_viet();
  require_once "view/tin_tuc/them_tin_tuc.php";
  if(isset($_POST['them_moi'])) {
    $ten_bai_viet = $_POST['ten_bai_viet'];
    $tom_tat = $_POST['tom_tat'];
    $noi_dung = $_POST['noi_dung'];
    $hinh_anh = $_FILES['hinh_anh'];
    $id_tt_danh_muc = $_POST['id_tt_danh_muc'];
    $target_dir = "../assets/uploads/";
    $target_file = $target_dir . basename($_FILES["hinh_anh"]["name"]);
    move_uploaded_file($_FILES["hinh_anh"]["tmp_name"], $target_file);
    them_bai_viet($ten_bai_viet, $tom_tat, $noi_dung, $hinh_anh, $id_tt_danh_muc);
    echo "<script type='text/javascript'>alert('Thêm thành công!');</script>";
  }
  error_reporting(E_ERROR | E_PARSE);
  header('Location: index.php?action=danh_sach_tin_tuc');
?>