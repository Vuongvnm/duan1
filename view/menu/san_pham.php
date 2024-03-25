<!--hero-->
<section id="page-header">
  <h2>Sản phẩm</h2>
  <p>Giảm giá đến 70% với coupon</p>
</section>
<!--product1-->
<section id="product1" class="section-p1">
  <div class="pro-container">
    <?php
      foreach($danh_sach_san_pham as $dssp) {
        $id_sp = $dssp['id_sp'];
        $ten_sp = $dssp['ten_sp'];
        $hang = $dssp['hang'];
        $gia_sp = $dssp['gia_sp'];
        $hinh_anh = $dssp['hinh_anh'];
        $hinh_path = "./assets/uploads/" . $hinh_anh;
        if(is_file($hinh_path)) {
          $hinh = "<img src='".$hinh_path."' height='80'>";
        } else {
          $hinh = "Không có hình ảnh!";
        }
      ?>
    <div class="pro">
      <a href="index.php?action=san_pham_chi_tiet&id_sp=<?=$id_sp?>"><img src="<?=$hinh_path?>"/></a>
      <div class="des">
        <span><?=$hang?></span>
        <h5><?=$ten_sp?></h5>
        <div class="star">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
        </div>
        <h4><?=$gia_sp?> VNĐ</h4>
      </div>
      <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
    </div>
    <?php
    }
    ?>
  </div>
</section>
<section id="pagination" class="section-p1">
  <a href="#">1</a>
  <a href="#">2</a>
  <a href="#"><i class="fa-solid fa-arrow-right"></i></a>
</section>
<!--newsletter-->
<?php
  require_once "view/thuoc_tinh/thong_tin.php";
?>