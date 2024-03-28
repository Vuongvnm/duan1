<?php
require_once "model/danh_muc.php";
if (isset($_GET['id_dm'])) {
  $id_dm = $_GET['id_dm'];
  if (checkDanhMucTrong($id_dm) == false) {
    echo "<script>
      alert('Danh mục có sản phẩm. Không thể xóa!');
      window.location.href = 'index.php?action=danh_sach_danh_muc';
    </script>";
  } else {
    xoa_danh_muc($id_dm);
    echo "<script>
      alert('Xóa thành công!');
      window.location.href = 'index.php?action=danh_sach_danh_muc';
    </script>";
  }
}
