<?php
  require_once "model/mau_sac.php";
  if(isset($_POST['cap_nhat'])) {
    $id_ms = $_POST['id_ms'];
    $ten_ms = $_POST['ten_ms'];
    cap_nhat_mau_sac($id_ms, $ten_ms);
    echo "<script type='text/javascript'>alert('Cập nhật thành công!');</script>"; // Chưa hiện thị
  }
  header('Location: index.php?action=danh_sach_mau_sac');
?>