<?php
  require_once "view/header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<section id="blog">
<div class="blog-box">

<?php
    if(is_array($bai_viet_chi_tiet)) {
      $ten_bai_viet = $bai_viet_chi_tiet['ten_bai_viet'];
      $tom_tat = $bai_viet_chi_tiet['tom_tat'];
      $noi_dung = $bai_viet_chi_tiet['noi_dung'];
      $hinh_anh = $bai_viet_chi_tiet['hinh_anh'];
      $hinh_path = "./assets/uploads/" . $hinh_anh;
      if(is_file($hinh_path)) {
        $hinh = "<img src='".$hinh_path."' height='80'>";
      } else {
        $hinh = "Không có hình ảnh!";
      }
    }
  ?>

  <div class="blog-box">
    <div class="blog-img">
      <img src="../images/blog/b1.jpg" alt="Blog Image" />
    </div>
    <div class="blog-details">
      <h4><?=$ten_bai_viet?></h4> 
      <h2><?=$tom_tat?></h2>
      <p>
      <?=$noi_dung?>
      </p> 
    
    </div>
    <h1>14/01</h1> 
 
</section>
    
    
</body>
</html>
<?php
  require_once "view/footer.php";
?>

