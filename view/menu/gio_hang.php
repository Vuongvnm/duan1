<?php
require_once "view/header.php";
?>
<section id="page-header" style="background-image: url('./assets/images/about/banner.png')">
  <h2>GIỎ HÀNG</h2>
  <p>ĐẶT HÀNG NGAY ĐỂ NHẬN ƯU ĐÃI!</p>
</section>
<section id="cart" class="section-p1">
  <table width="100%">
    <?php
    if (isset($_SESSION['gio_hang'])) {
    ?>
      <thead>
        <tr>
          <td>Xóa</td>
          <td>Hình ảnh</td>
          <td>Sản phẩm</td>
          <td>Giá tiền</td>
          <td>Số lượng</td>
          <td>Thành tiền</td>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($duLieuGioHang as $gh) {
          $tong_tien = $gh['tong_tien'];
          $ten_sp = $gh['ten_sp'];
          $hinh_anh = $gh['hinh_anh'];
          $gia_sp = $gh['gia_sp'];
          $so_luong = $gh['so_luong'];
          $hinh_path = "./assets/uploads/" . $hinh_anh;
          if (is_file($hinh_path)) {
            $hinh = "<img src='" . $hinh_path . "' height='80'>";
          } else {
            $hinh = "Không có hình ảnh!";
          }
        ?>
          <tr>
            <td>
              <a href="#"><i class="fa-solid fa-circle-minus"></i></a>
              <a href="#"><i class="fa-solid fa-circle-plus"></i></a>
            </td>
            <td><img src="<?=$hinh_path?>"></td>
            <td><?=$ten_sp?></td>
            <td><?=$gia_sp?> VNĐ</td>
            <td><input type="number" value="<?=$so_luong?>" VNĐ readonly></td>
            <td><?=$tong_tien?> VNĐ</td>
          </tr>
        <?php
        }
        ?>
      </tbody>
  </table>
</section>
<section id="cart-add" class="section-p1">
  <div id="coupon">
    <h3>Giảm giá</h3>
    <div>
      <input type="text" placeholder="Nhập mã giảm giá">
      <button class="normal">Sử dụng</button>
    </div>
  </div>
  <div id="subtotal">
    <h3>Giỏ hàng</h3>
    <table>
      <tr>
        <td>Thành tiền</td>
        <td>$355</td>
      </tr>
      <tr>
        <td>Phí vận chuyển</td>
        <td>Free</td>
      </tr>
      <tr>
        <td><strong>Tổng tiền</strong></td>
        <td><strong>$355</strong></td>
      </tr>
    </table>
    <button class="normal">Tiến hành thanh toán</button>
  </div>
<?php
    } else {
      echo "Bạn chưa đặt hàng!";
    }
?>
</section>
<?php
require_once "view/footer.php";
?>