<?php
  require_once "model/bai_viet.php";
  if(isset($_POST['cap_nhat'])) {
    $id_bv = $_POST['id_bv'];
    $id_tt = $_POST['id_tt'];
    $ten_bai_viet = $_POST['ten_bai_viet'];
    $tom_tat = $_POST['tom_tat'];
    $noi_dung = $_POST['noi_dung'];
    $hinh_anh = $_FILES['hinh_anh'];
    $target_dir = "../assets/uploads/";
    $target_file = $target_dir . basename($_FILES["hinh_anh"]["name"]);
    move_uploaded_file($_FILES["hinh_anh"]["tmp_name"], $target_file);
    $ten_hinh_anh = $_FILES["hinh_anh"]["name"];
    cap_nhat_bai_viet($id_bv, $ten_bai_viet, $tom_tat, $noi_dung, $ten_hinh_anh, $id_tt);
    echo "<script type='text/javascript'>alert('Cập nhật thành công!');</script>";
  }
  header('Location: index.php?action=danh_sach_bai_viet');
?>