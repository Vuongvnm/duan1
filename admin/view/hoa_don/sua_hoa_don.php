<?php
  require_once "view/header.php";
?>
<main>
  <?php
  require_once "view/thuoc_tinh/bang_dieu_khien.php";
  ?>
  <div class="recent-orders">
    <h2>Câp nhật tình trạng</h2>
    <form action="index.php?action=cap_nhat_hoa_don" method="post">
      <?php
        if(is_array($tinh_trang)) {
          $id_hd = $tinh_trang['id_hd'];
      ?>
      <div>
    <select class="form-select" name="tinh_trang_thanh_toan" id="">
      <option value="1">Chưa thanh toán</option>
      <option value="2">Đã thanh toán</option>
    </select>
     </div>
      <?php
      }
      ?>
      <div class="form-floating">
        <input type="hidden" name="id_hd" value="<?=$id_hd?>">
        <button type="submit" class="btn btn-primary" name="cap_nhat">Cập nhật</button>
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
<?
  require_once "view/footer.php"
?>