<?php
  require_once "view/header.php";
?>
<main>
  <?php
  require_once "view/thuoc_tinh/bang_dieu_khien.php";
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
<div class="right">
  <?php
    require_once "view/thuoc_tinh/admin.php";
    require_once "view/thuoc_tinh/cap_nhat_moi.php";
    require_once "view/thuoc_tinh/so_lieu.php";
  ?>
</div>
<?php
  require_once "view/footer.php";
?>