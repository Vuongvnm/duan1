<?php
require_once "model/menu.php";
require_once "view/menu/tai_khoan.php";
if (isset($_POST['dang_ky'])) {
  $ten_dang_nhap = $_POST['ten_dang_nhap'];
  $email = $_POST['email'];
  $mat_khau = $_POST['mat_khau'];
  dang_ky($ten_dang_nhap, $email, $mat_khau);
?>
  <script>
    alert('Đăng ký thành công. Vui lòng đăng nhập để tiếp túc!');
    window.location.href = 'index.php?action=dang_nhap';
  </script>
<?php
}
?>