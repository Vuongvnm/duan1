<?php
  require_once "model/tin_tuc.php";
  if(isset($_POST['cap_nhat'])) {
    $id_tt = $_POST['id_tt'];
    $tieu_de = $_POST['tieu_de'];
    cap_nhat_tin_tuc($id_tt, $tieu_de);
    echo "<script type='text/javascript'>alert('Cập nhật thành công!');</script>"; // Chưa hiện thị
  }
  header('Location: index.php?action=danh_sach_tin_tuc');
?>