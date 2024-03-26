<?php
  require_once "view/header.php";
?>
<section id="prodetails" class="section-p1">
  <?php
    if(is_array($san_pham_chi_tiet)) {
      $ten_sp = $san_pham_chi_tiet['ten_sp'];
      $gia_sp = $san_pham_chi_tiet['gia_sp'];
      $ghi_chu = $san_pham_chi_tiet['ghi_chu'];
      $hinh_anh = $san_pham_chi_tiet['hinh_anh'];
      $hinh_path = "./assets/uploads/" . $hinh_anh;
      if(is_file($hinh_path)) {
        $hinh = "<img src='".$hinh_path."' height='80'>";
      } else {
        $hinh = "Không có hình ảnh!";
      }
    }
  ?>
  <div class="single-pro-image">
    <img src="<?=$hinh_path?>" width="100%" id="MainImg" />
    <div class="small-img-group">
      <div class="small-img-col">
        <img src="<?=$hinh_path?>" width="100%" class="small-img" />
      </div>
      <div class="small-img-col">
        <img src="./assets/images/products/f2.jpg" width="100%" class="small-img" />
      </div>
      <div class="small-img-col">
        <img src="./assets/images/products/f3.jpg" width="100%" class="small-img" />
      </div>
      <div class="small-img-col">
        <img src="./assets/images/products/f4.jpg" width="100%" class="small-img" />
      </div>
    </div>
  </div>
  <div class="single-pro-details">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Library</li>
      </ol>
    </nav>
    <h4><?=$ten_sp?></h4>
    <h2><?=$gia_sp?></h2>
    <select>
      <option>Chọn kích cỡ</option>
      <?php
        foreach($danh_sach_kich_co as $dskc) {
          $id_kc = $dskc['id_kc'];
          $kich_co = $dskc['kich_co'];
      ?>
      <option value="<?=$id_kc?>"><?=$kich_co?></option>
      <?php
        }
      ?>
    </select>
    <input type="number" value="1" />
    <button class="normal">Thêm giỏ hàng</button>
    <h4>Mô tả</h4>
    <span><?=$ghi_chu?></span>
  </div>
</section>
<!--product2-->
<?php
  require_once "controller/thuoc_tinh/san_pham_noi_bat.php";
?>
<!--newsletter-->
<?php
  require_once "view/thuoc_tinh/thong_tin.php";
?>
<script>
  var MainImg = document.getElementById("MainImg");
  var smaillimg = document.getElementsByClassName("small-img");

  smaillimg[0].onclick = function() {
    MainImg.src = smaillimg[0].src;
  }
  smaillimg[1].onclick = function() {
    MainImg.src = smaillimg[1].src;
  }
  smaillimg[2].onclick = function() {
    MainImg.src = smaillimg[2].src;
  }
  smaillimg[3].onclick = function() {
    MainImg.src = smaillimg[3].src;
  }
</script>

<script src="../js/script.js"></script>
</body>

</html>
<?php
  require_once "view/footer.php";
?>