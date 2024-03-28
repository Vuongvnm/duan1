<?php
  require_once "model/san_pham.php";
  if(isset($_GET['id_sp'])) {
    $id_sp = $_GET['id_sp'];
    xoa_san_pham($id_sp);
  }
?>
<script>
  alert('Xóa thành công!');
  window.location.href = 'index.php?action=danh_sach_san_pham';
</script>