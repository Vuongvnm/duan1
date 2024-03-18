<main>
  <?php
    if(is_array($mot_san_pham)){
      $ten_sp = $mot_san_pham['ten_sp'];
      $gia_sp = $mot_san_pham['gia_sp'];
      $xuat_xu = $mot_san_pham['xuat_xu'];
      $so_luong = $mot_san_pham['so_luong'];
      $ghi_chu = $mot_san_pham['ghi_chu'];
      $kich_co = $mot_san_pham['kich_co'];
      $ngay_tao = $mot_san_pham['ngay_tao'];
      $id_ms = $mot_san_pham['id_ms'];
    ?>
    <div class="recent-orders">
      <h2>Chi tiết sản phẩm</h2>
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
        <h3>Tên sản phẩm: <?=$ten_sp?></h3>
        <h4>Giá: <?=$gia_sp?> <small>VND</small></h4>
        <h4>Xuất xứ: <?=$xuat_xu?></h4>
        <h4>Số lượng: <?=$so_luong?> <small>chiếc</small></h4>
        <h4>Ghi chú:</h4><p><?=$ghi_chu?></p>
        <?php
          foreach ($danh_sach_mau_sac as $dsms) {
            $id_ms = $dsms['id_ms'];
            $ten_ms = $dsms['ten_ms'];
            if ($id_ms == hien_thi_idms_by_idsp($id_sp)) {
            ?>
              <h4><?=$id_ms?></h4>
            <?php
            }
            ?>
          <?php
          }
          ?>
        <h4>Kích cỡ: <?=$kich_co?></h4>
        <h4>Ngày tạo: <?=$ngay_tao?></h4>
        <div class="list-group">
        <a href="#" class="list-group-item list-group-item-action active" aria-disabled="true">Sản phẩm cùng loại</a>
        <a href="#" class="list-group-item list-group-item-action">A second link item</a>
        </div>
      </div>
    </div>
  </section>
  <script>
    function img(anything) {
      document.querySelector('.slide').src = anything;
    }
    function change(change) {
      const line = document.querySelector('.home');
      line.style.background = change;
    }
  </script>
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