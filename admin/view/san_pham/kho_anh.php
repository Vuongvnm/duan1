<main>
  <?php
  require_once "view/thuoc_tinh/dashboard.php";
  ?>
  <!-- End of insights -->
  <div class="recent-orders">
    <h2>Kho ảnh</h2>
    <table class="table_danhmuc">
      <tbody>
        <div class="text-center">
          <img src="../assets/images/products/f1.jpg" class="rounded" alt="...">
          <img src="../assets/images/products/f1.jpg" class="rounded" alt="...">
          <img src="../assets/images/products/f1.jpg" class="rounded" alt="...">
          <img src="../assets/images/products/f1.jpg" class="rounded" alt="...">
          <img src="../assets/images/products/f1.jpg" class="rounded" alt="...">
          <img src="../assets/images/products/f1.jpg" class="rounded" alt="...">
          <img src="../assets/images/products/f1.jpg" class="rounded" alt="...">
        </div>
    </table>
    <a href="#">Show All</a>
    <a href="index.php?action=them_san_pham">Thêm mới</a>
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
</div>