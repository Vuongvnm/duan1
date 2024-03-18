<?php
  require_once "model/mau_sac.php";
  require_once "model/danh_muc.php";
  require_once "model/san_pham.php";
  $danh_sach_danh_muc = hien_thi_danh_muc();
  $danh_sach_mau_sac = danh_sach_mau_sac();
  require_once "view/san_pham/them_san_pham.php";
  if(isset($_POST['them_moi'])) {
    $ten_sp = $_POST['ten_sp'];
    $gia_sp = $_POST['gia_sp'];
    $xuat_xu = $_POST['xuat_xu'];
    $hinh_anh = $_FILES['hinh_anh'];
    $so_luong = $_POST['so_luong'];
    $kich_co = $_POST['kich_co'];
    $ghi_chu = $_POST['ghi_chu'];
    $id_dm = $_POST['id_dm'];
    $id_ms = $_POST['id_ms'];
    $target_dir = "../assets/uploads/";
    $target_file = $target_dir . basename($_FILES["hinh_anh"]["name"]);
    move_uploaded_file($_FILES["hinh_anh"]["tmp_name"], $target_file);
    them_san_pham($ten_sp, $gia_sp, $xuat_xu, $hinh_anh, $so_luong, $kich_co, $ghi_chu, $id_dm, $id_ms);
    echo "<script type='text/javascript'>alert('Thêm thành công!');</script>";
  }
  require_once "them_san_pham.php";
?>