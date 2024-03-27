<?php
  require_once "view/header.php";
?>
<main>
  <?php
    require_once "thuoc_tinh/bang_dieu_khien.php";
  ?>
  <div class="recent-orders">
    <h2>Control Panel</h2>
  </div>
</main>
<div class="right">
  <?php
    require_once "thuoc_tinh/admin.php";
    require_once "thuoc_tinh/cap_nhat_moi.php";
    require_once "thuoc_tinh/so_lieu.php";
  ?>
</div>
<?
  require_once "view/footer.php";
?>