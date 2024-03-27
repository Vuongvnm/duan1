<section id="product1" class="section-p1">
  <h2>Sản phẩm mới</h2>
  <p>Bộ sưu tập mới nhất</p>
  <div class="pro-container">
    <?php
      foreach($san_pham_moi as $spm) {
        $id_sp = $spm['id_sp'];
        $ten_sp = $spm['ten_sp'];
        $hang = $spm['hang'];
        $gia_sp = $spm['gia_sp'];
        $hinh_anh = $spm['hinh_anh'];
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
      <a href="index.php?action=them_gio_hang&id_sp=<?=$id_sp?>"><i class="fa-solid fa-cart-shopping cart"></i></a>
    </div>
    <?php
    }
    ?>
  </div>
</section>