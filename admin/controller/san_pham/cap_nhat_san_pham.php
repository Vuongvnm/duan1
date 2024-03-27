<?php
  require_once "model/san_pham.php";
  if(isset($_POST['cap_nhat'])) {
    $id_sp = $_POST['id_sp'];
    $ten_sp = $_POST['ten_sp'];
    $kich_co = $_POST['kich_co'];
    $hang = $_POST['hang'];
    $gia_sp = $_POST['gia_sp'];
    $xuat_xu = $_POST['xuat_xu'];
    $hinh_anh = $_FILES['hinh_anh'];
    $so_luong = $_POST['so_luong'];
    $ngay_cap_nhat = $_POST['ngay_cap_nhat'];
    $ghi_chu = $_POST['ghi_chu'];
    $id_dm = $_POST['id_dm'];
    $id_ms = $_POST['id_ms'];
    $target_dir = "../assets/uploads/";
    $target_file = $target_dir . basename($_FILES["hinh_anh"]["name"]);
    $ten_hinh_anh = $_FILES["hinh_anh"]["name"];
    move_uploaded_file($_FILES["hinh_anh"]["tmp_name"], $target_file);
    cap_nhat_san_pham($id_sp, $ten_sp, $kich_co, $hang, $gia_sp, $xuat_xu, $ten_hinh_anh, $so_luong, $ngay_cap_nhat, $ghi_chu, $id_dm, $id_ms);
    echo "<script type='text/javascript'>alert('Cập nhật thành công!');</script>"; // Chưa hiện thị
  }
  header('Location: index.php?action=danh_sach_san_pham');
?>