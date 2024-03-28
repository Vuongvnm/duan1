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
<?php
  const URL = "/WD18302/duan1/admin/";
?>
<body>
  <div class="container">
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
        <a href="index.php" class="<?=$_SERVER['REQUEST_URI'] == URL. "index.php" ? "active" : ""?>">
          <span class="material-symbols-outlined">home</span>
          <h3>Trang chủ</h3>
        </a>
        <a href="index.php?action=danh_sach_danh_muc" class="<?=$_SERVER['REQUEST_URI'] == URL. "index.php?action=danh_sach_danh_muc" ? "active" : ""?>">
          <span class="material-symbols-outlined">list_alt</span>
          <h3>Danh mục</h3>
        </a>
        <a href="index.php?action=danh_sach_san_pham" class="<?=$_SERVER['REQUEST_URI'] == URL. "index.php?action=danh_sach_san_pham" ? "active" : ""?>">
          <span class="material-symbols-outlined">inventory</span>
          <h3>Sản phẩm</h3>
        </a>
        <a href="index.php?action=danh_sach_mau_sac" class="<?=$_SERVER['REQUEST_URI'] == URL. "index.php?action=danh_sach_mau_sac" ? "active" : ""?>">
          <span class="material-symbols-outlined">palette</span>
          <h3>Màu sắc</h3>
        </a>  
        <a href="index.php?action=danh_sach_tin_tuc" class="<?=$_SERVER['REQUEST_URI'] == URL. "index.php?action=danh_sach_tin_tuc" ? "active" : ""?>">
          <span class="material-symbols-outlined">feed</span>
          <h3>Tin Tức</h3>
        </a>
        <a href="index.php?action=danh_sach_bai_viet" class="<?=$_SERVER['REQUEST_URI'] == URL. "index.php?action=danh_sach_bai_viet" ? "active" : ""?>">
          <span class="material-symbols-outlined">article</span>
          <h3>Bài viết</h3>
        </a>
        <a href="index.php?action=danh_sach_hoa_don" class="<?=$_SERVER['REQUEST_URI'] == URL. "index.php?action=danh_sach_hoa_don" ? "active" : ""?>">
          <span class="material-symbols-outlined">receipt_long</span>
          <h3>Hóa đơn</h3>
        </a>
        <a href="index.php?action=danh_sach_voucher">
        <span class="material-symbols-outlined">confirmation_number</span>
          <h3>Voucher</h3>
        </a>
        <a href="index.php?action=danh_sach_tai_khoan">
        <span class="material-symbols-outlined">person</span>
          <h3>Tài khoản</h3>
        </a>
        <a href="#">
          <span class="material-symbols-outlined">mail</span>
          <h3>Messages</h3>
          <span class="message-count">26</span>
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
          <span class="material-symbols-outlined">logout</span>
          <h3>Log out</h3>
        </a>
      </div>
    </aside>