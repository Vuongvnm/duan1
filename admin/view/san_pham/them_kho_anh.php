<?php
  require_once "view/header.php";
?>
<main>
  <?php
  require_once "view/thuoc_tinh/dashboard.php";
  ?>
  <div class="recent-orders">
    <h2>Thêm hình ảnh</h2>
    <form action="index.php?action=them_hinh_anh" method="post" enctype="multipart/form-data">
      <div class="form-floating mb-3">
        <input type="file" class="form-control" id="floatingInput" name="hinh_anh[]" placeholder="Hình ảnh" required multiple>
        <label for="floatingInput">Hình ảnh</label>
      </div>
      <div class="form-floating">
        <button type="submit" class="btn btn-primary" name="them_moi">Thêm mới</button>
        <button type="reset" class="btn btn-secondary">Nhập lại</button>
      </div>
    </form>
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
<?
  require_once "view/footer.php"
?>