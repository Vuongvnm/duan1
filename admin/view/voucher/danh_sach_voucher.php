<?php
  require_once "view/header.php";
?>
<main>
  <?php
    require_once "view/thuoc_tinh/bang_dieu_khien.php";
  ?>
  <div class="recent-orders">
    <h2>Danh sách voucher</h2>
    <table class="table_danhmuc">
      <thead>
        <tr>
          <th>Số thứ tự</th>
          <th>Mã Voucher</th>
          <th>Tên Voucher</th>
          <th>Hình ảnh</th>
          <th>Số tiền giảm</th>
          <th>Mã giảm giá</th>
          <th colspan="3">Chức năng</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php
          foreach($danh_sach_voucher as $stt => $dsvc) {
            $id_voucher = $dsvc['id_voucher'];
            $ten_voucher = $dsvc['ten_voucher'];
            $hinh_anh = $dsvc['hinh_anh'];
            $so_tien_giam = $dsvc['so_tien_giam'];
            $ma_giam_gia = $dsvc['ma_giam_gia'];
            $hinh_path = "../assets/uploads/" . $hinh_anh;
            if(is_file($hinh_path)) {
              $hinh = "<img src='".$hinh_path."' height='80'>";
            } else {
              $hinh = "Không có hình ảnh!";
            }
            $stt += 1;
        ?>
        <tr>
          <td><?=$stt?></td>
          <td><?=$id_voucher?></td>
          <td><?=$ten_voucher?></td>
          <td><img src="<?=$hinh_path?>" width="50" height="50"></td>
          <td><?=$so_tien_giam?></td>
          <td><?=$ma_giam_gia?></td>
          <td class="warning"><a href="index.php?action=sua_voucher&id_voucher=<?=$id_voucher?>">Sửa</a></td>
          <td class="primary"><a href="index.php?action=xoa_voucher&id_voucher=<?=$id_voucher?>" onclick="return confirm('Bạn có muốn xóa không?')">Xóa</a></td>
          <td class="primary"><a href="index.php?action=chi_tiet_voucher&id_voucher=<?=$id_voucher?>">Chi tiết</a></td>
        </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
    <br>
    <div class="form-floating">
      <a href="index.php?action=them_voucher"><button type="submit" class="btn btn-primary" name="them_moi">Thêm mới</button></a>
      <button class="btn btn-secondary">Hiển thị thêm</button>
    </div>
  </div>
</main>
<!-- End of main -->
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