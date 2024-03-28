<?php
  require_once "view/header.php";
?>
<main>
    <?php
          foreach($chi_tiet_tai_khoan as $cttk) {
            $ho_ten = $cttk['ho_ten'];
            $nam_sinh = $cttk['nam_sinh'];
            $dia_chi = $cttk['dia_chi'];
            $sdt = $cttk['sdt'];
        ?>
    <div class="recent-orders">
      <h2>Chi tiết tài khoản</h2>
    </div>
  <?php
  }
  ?>
  <section>
    <div class="container flex">
      <div class="left">
        <div class="main_image">
          <img src="../assets/images/products/f6.jpg" class="slide">
        </div>
      </div>
      <div class="voucher">
        <h3>Họ và tên: <?=$ho_ten?></h3>
        <h4>Năm sinh: <?=$nam_sinh?></h4>
        <h4>Địa chỉ: <?=$dia_chi?></h4>
        <h4>Số điện thoại: <?=$sdt?></h4>
        
        <div class="list-group">
        </div>
      </div>
    </div>
  </section>
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