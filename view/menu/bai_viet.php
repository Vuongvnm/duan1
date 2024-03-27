<?php
  require_once "view/header.php";
?>
<!--hero-->
<section id="page-header" style="background-image: url('./assets/images/banners/b19.jpg')">
  <h2>BÀI VIẾT</h2>
  <p>Read all case studies about our products!</p>
</section>
<section id="blog">
  <?php foreach($danh_sach_bai_viet as $bai_viet) {
            $id_bv = $bai_viet['id_bv'];
            $hinh_anh = $bai_viet['hinh_anh'];
        $hinh_path = "./assets/uploads/" . $hinh_anh;
        if(is_file($hinh_path)) {
          $hinh = "<img src='".$hinh_path."' height='80'>";
        } else {
          $hinh = "Không có hình ảnh!";
        }
            ?>
    <div class="blog-box">
      <div class="blog-img">
        <img src="<?=$hinh_path?>"<?php echo $bai_viet['hinh_anh']; ?>" />
      </div>
      <div class="blog-details">
        <h4><?php echo $bai_viet['ten_bai_viet']; ?></h4>
        <p><?php echo $bai_viet['tom_tat']; ?></p>
        <a href="index.php?action=bai_viet_chi_tiet&id_bv=<?=$id_bv?>">CONTINUE READING</a>
      </div>
      <h1><?php echo date('d/m', strtotime($bai_viet['ngay_tao'])); ?></h1>
    </div>
  <?php } ?>
</section>

<section id="pagination" class="section-p1">
  <a href="#">1</a>
  <a href="#">2</a>
  <a href="#"><i class="fa-solid fa-arrow-right"></i></a>
</section>
<?php

  require_once "view/thuoc_tinh/thong_tin.php";

?>