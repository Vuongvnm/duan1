<?php
  require_once "view/header.php";
?>
<main>
  <?php
  require_once "view/thuoc_tinh/dashboard.php";
  ?>
  <!-- End of insights -->
  <div class="recent-orders">
    <h2>Kho ảnh</h2>
    <div class="photo-gallery">
    <?php
      foreach($kho_anh as $ka) {
        $hinh_anh = $ka['ten_ha'];
        $hinh_path = "../assets/uploads/" . $hinh_anh;
        if(is_file($hinh_path)) {
          $hinh = "<img src='".$hinh_path."' height='80'>";
        } else {
          $hinh = "Không có hình ảnh!";
        }
      ?>
      <div class="pic pb-1">
        <img src="<?=$hinh_path?>">
        <a class="btn btn-warning" href="">Xóa</a>
      </div>
    <?php
    }
    ?>  
    </div>
    <a href="#">Show All</a>
    <a href="index.php?action=them_kho_anh">Thêm mới</a>
  </div>
</main>
<!-- End of main -->
<div class="right">
  <?php
  require_once "view/thuoc_tinh/admin.php";
  ?>
  <!-- End of top -->
  <?php
  require_once "view/thuoc_tinh/recent_updates.php";
  ?>
  <!-- End of recent updates -->
  <?php
  require_once "view/thuoc_tinh/sales_analytics.php";
  ?>
</div>
<?
  require_once "view/footer.php"
?>