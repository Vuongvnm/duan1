<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
  <link rel="stylesheet" href="../assets/css/bootstrap.css">
  <link rel="stylesheet" href="../assets/css/admin_style.css">
  <script src="../assets/js/bootstrap.js"></script>
</head>

<body>
  <div class="container" id="blur">
    <aside>
      <div class="top">
        <div class="logo">
          <img src="../assets/images/admin/logo1.png">
        </div>
        <div class="close" id="close-btn">
          <span class="material-symbols-outlined">close</span>
        </div>
      </div>
      <div class="sidebar">
        <a href="index.php">
          <span class="material-symbols-outlined">home</span>
          <h3>Trang chủ</h3>
        </a>
        <a href="index.php?action=danh_sach_danh_muc" class="active">
          <span class="material-symbols-outlined">view_compact</span>
          <h3>Danh mục</h3>
        </a>
        <a href="index.php?action=danh_sach_san_pham">
          <span class="material-symbols-outlined">inventory</span>
          <h3>Sản phẩm</h3>
        </a>
        <a href="index.php?action=danh_sach_mau_sac">
          <span class="material-symbols-outlined">palette</span>
          <h3>Màu sắc</h3>
          <a href="index.php?action=danh_sach_tin_tuc">
            <span class="material-symbols-outlined">feed</span>
            <h3>Tin Tức</h3>
          </a>
        </a>
        <a href="index.php?action=danh_sach_voucher">
        <span class="material-symbols-outlined">confirmation_number</span>
          <h3>Voucher</h3>
        </a>
        <a href="#">
          <span class="material-symbols-outlined">mail</span>
          <h3>Messages</h3>
          <span class="message-count">26</span>
        </a>
        <a href="#">
          <span class="material-symbols-outlined">inventory</span>
          <h3>Products</h3>
        </a>
        <a href="index.php?action=danh_sach_tin_tuc">
          <span class="material-symbols-outlined">feed</span>
          <h3>Tin Tức</h3>
        </a>
        <a href="#">
          <span class="material-symbols-outlined">settings</span>
          <h3>Setting</h3>
        </a>
        <a href="#">
          <span class="material-symbols-outlined">add</span>
          <h3>Add Product</h3>
        </a>
        <a href="#">
          <span class="material-symbols-outlined">logout</span>
          <h3>Log out</h3>
        </a>
      </div>
    </aside>