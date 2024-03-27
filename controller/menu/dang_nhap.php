<?php
require_once "model/menu.php";
require_once "view/menu/tai_khoan.php";
if (isset($_POST['dang_nhap'])) {
  $ten_dang_nhap = $_POST['ten_dang_nhap'];
  $mat_khau = $_POST['mat_khau'];
  $dang_nhap = dang_nhap($ten_dang_nhap, $mat_khau);
  if(is_array($dang_nhap)) {
    $_SESSION['tai_khoan'] = $dang_nhap;
    // $_SESSION['tai_khoan']['ten_dang_nhap'];
    // $_SESSION['tai_khoan']['mat_khau'];
    header('Location: index.php');
  } else {
?>
  <script>
    document.getElementById("thong_bao").innerHTML = "Tên đăng nhập và mật khẩu không chính xác!"
  </script>
<?php
  }
}
?>