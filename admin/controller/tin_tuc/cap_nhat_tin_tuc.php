<?php
  require_once "model/tin_tuc.php";
  if(isset($_POST['cap_nhat'])) {
    $id_tt = $_POST['id_tt'];
    $id_dmid_tt_danh_muc = $_POST['id_tt_danh_muc'];
    $ten_bai_viet = $_POST['ten_bai_viet'];
    $tom_tat = $_POST['tom_tat'];
    $noi_dung = $_POST['noi_dung'];
    $hinh_anh = $_FILES['hinh_anh'];
    $target_dir = "../assets/uploads/";
    $target_file = $target_dir . basename($_FILES["hinh_anh"]["name"]);
    move_uploaded_file($_FILES["hinh_anh"]["tmp_name"], $target_file);
    cap_nhat_bai_viet($id_tt, $ten_bai_viet, $tom_tat, $noi_dung, $hinh_anh, $id_tt_danh_muc);
    echo "<script type='text/javascript'>alert('Cập nhật thành công!');</script>"; // Chưa hiện thị
  }
  header('Location: index.php?action=danh_sach_tin_tuc');
?>