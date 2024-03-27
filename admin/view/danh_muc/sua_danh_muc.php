<?php
  require_once "view/header.php";
?>
<main>
  <?php
  require_once "view/thuoc_tinh/bang_dieu_khien.php";
  ?>
  <div class="recent-orders">
    <h2>Câp nhật danh mục</h2>
    <form action="index.php?action=cap_nhat_danh_muc" method="post">
      <?php
        if(is_array($mot_danh_muc)) {
          $id_dm = $mot_danh_muc['id_dm'];
          $ten_dm = $mot_danh_muc['ten_dm'];
      ?>
      <div class="form-floating mb-3">
      <input type="text" class="form-control" id="floatingInput" name="ten_dm" placeholder="Tên danh mục" value="<?=$ten_dm?>" required>
      <label for="floatingInput">Tên danh mục</label>
      </div>
      <?php
      }
      ?>
      <div class="form-floating">
        <input type="hidden" name="id_dm" value="<?=$id_dm?>">
        <button type="submit" class="btn btn-primary" name="cap_nhat">Cập nhật</button>
        <button type="reset" class="btn btn-secondary">Nhập lại</button>
        <a href="index.php?action=danh_sach_danh_muc"><button type="submit" class="btn btn-success" name="them_moi">Danh sách danh mục</button></a>
      </div>
    </form>
  </div>
</main>
<!-- End of main -->
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