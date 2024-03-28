<?php
  require_once "model/danh_muc.php";
  if(isset($_POST['cap_nhat'])) {
    $id_dm = $_POST['id_dm'];
    $ten_dm = $_POST['ten_dm'];
    cap_nhat_danh_muc($id_dm, $ten_dm);
  }
  ?>
  <script>
    alert('Cập nhật thành công!');
    window.location.href = 'index.php?action=danh_sach_danh_muc';
  </script>