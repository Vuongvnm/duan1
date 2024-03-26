<?php
  require_once "view/header.php";
?>
<main>
  <?php
  if (is_array($mot_bai_viet)) {
    $id_bv = $mot_bai_viet['id_bv'];
    $ten_bai_viet = $mot_bai_viet['ten_bai_viet'];
    $tom_tat = $mot_bai_viet['tom_tat'];
    $noi_dung = $mot_bai_viet['noi_dung'];
    $id_tt = $mot_bai_viet['id_tt'];
  ?>
    <div class="recent-orders">
      <h2>Chi tiết bài viết</h2>
    </div>
  <?php
  }
  ?>
  <section>
    <div class="container flex">
      <div class="left">
        <div class="main_image">
          <img src="../assets/images/products/f1.jpg" class="slide">
        </div>
        <div class="option flex">
          <img src="../assets/images/products/f2.jpg" onclick="img('../assets/images/products/f2.jpg')">
          <img src="../assets/images/products/f3.jpg" onclick="img('../assets/images/products/f3.jpg')">
          <img src="../assets/images/products/f4.jpg" onclick="img('../assets/images/products/f4.jpg')">
          <img src="../assets/images/products/f5.jpg" onclick="img('../assets/images/products/f5.jpg')">
          <img src="../assets/images/products/f6.jpg" onclick="img('../assets/images/products/f6.jpg')">
        </div>
      </div>
      <div class="right">
        <h3>Tên bài viết: <?=$ten_bai_viet?></h3>
        <h4>Tóm tắt: <?=$tom_tat?></h4>
        <h4>Nội dung: <?=$noi_dung?></h4>
        <?php
        foreach ($danh_sach_tin_tuc as $dstt) {
          $id_tt = $dstt['id_tt'];
          $tieu_de = $dstt ['tieu_de'];
          if ($id_tt == hien_thi_idtt_by_idbv($id_bv)) {
        ?>
            <h4>Tiêu đề: <?=$tieu_de?></h4>
          <?php
          }
          ?>
        <?php
        }
        ?>
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
<?
  require_once "view/footer.php"
?>