<?php
  require_once "view/header.php";
?>
<main>
  <?php
  require_once "view/thuoc_tinh/bang_dieu_khien.php";
  ?>
  <div class="recent-orders">
    <h2>Thêm danh mục</h2>
    <form action="index.php?action=them_danh_muc" method="post">
      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" name="ten_dm" placeholder="Tên danh mục" required>
        <label for="floatingInput">Tên danh mục</label>
      </div>
      <div class="form-floating">
        <button type="submit" class="btn btn-primary" name="them_moi">Thêm mới</button>
        <button type="reset" class="btn btn-secondary">Nhập lại</button>
        <a href="index.php?action=danh_sach_danh_muc"><button type="submit" class="btn btn-success" name="them_moi">Danh sách danh mục</button></a>
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
<?
  require_once "view/footer.php"
?>