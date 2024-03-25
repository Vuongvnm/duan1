<main>
  <?php
  require_once "view/thuoc_tinh/dashboard.php";
  ?>
  <div class="recent-orders">
    <h2>Thêm tin tức</h2>
    <form action="index.php?action=them_tin_tuc" method="post">
      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" name="tieu_de" placeholder="Tiêu đề" required>
        <label for="floatingInput">Tiêu đề</label>
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