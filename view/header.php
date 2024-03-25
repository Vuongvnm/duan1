<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Shop thời trang BusyBees</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.css" />
    <link rel="stylesheet" href="./assets/css/style.css" />
    <script src="./assets/js/bootstrap.js"></script>
    <script src="https://kit.fontawesome.com/47e370afdb.js"crossorigin="anonymous"></script>
  </head>
  <body>
    <!--header-->
    <?php
      const URL = "/WD18302/duan1/";
    ?>
    <section id="header">
      <a href="index.php"><img src="./assets/images/logo1.png" class="logo"></a>
      <ul id="navbar">
        <li><a class="<?= $_SERVER['REQUEST_URI'] == URL. "index.php" ? "active" : ""?>" href="index.php">Trang chủ</a></li>
        <li><a class="<?= $_SERVER['REQUEST_URI'] == URL. "index.php?action=san_pham" ? "active" : ""?>" href="index.php?action=san_pham">Sản phẩm</a></li>
        <li><a class="<?= $_SERVER['REQUEST_URI'] == URL. "index.php?action=bai_viet" ? "active" : ""?>" href="index.php?action=bai_viet">Bài viết</a></li>
        <li><a class="<?= $_SERVER['REQUEST_URI'] == URL. "index.php?action=gioi_thieu" ? "active" : ""?>" href="index.php?action=gioi_thieu">Giới thiệu</a></li>
        <li><a class="<?= $_SERVER['REQUEST_URI'] == URL. "index.php?action=lien_he" ? "active" : ""?>" href="index.php?action=lien_he">Liên hệ</a></li>
        <li id="lg-bar"><a class="<?= $_SERVER['REQUEST_URI'] == URL. "index.php?action=gio_hang" ? "active" : ""?>"  href="index.php?action=gio_hang"><i class="fa-solid fa-bag-shopping"></i></a></li>
        <li id="lg-bar"><a href=""><i class="fa-solid fa-user"></i></a></li>
        <a href="#" id="close"><i class="fa-solid fa-x"></i></a>
      </ul>
      <div id="mobile">`
        <a href="cart.html"><i class="fa-solid fa-bag-shopping"></i></a>
        <i id="bar" class="fa-solid fa-outdent"></i>`
      </div>
    </section>
    <!--hero-->
    