<?php
  require_once "view/header.php";
?>
<main>
  <?php
    require_once "view/thuoc_tinh/bang_dieu_khien.php";
  ?>
  <div class="recent-orders">
    <h2>Danh sách sản phẩm</h2>
    <table class="table_danhmuc">
      <thead>
        <tr>
          <th>Số thứ tự</th>
          <th>Mã sản phẩm</th>
          <th>Tên sản phẩm</th>
          <th>Giá sản phẩm</th>
          <th>Hình ảnh</th>
          <th>Số lượng</th>
          <th colspan="4">Chức năng</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php
          foreach($danh_sach_san_pham as $stt => $dssp) {
            $id_sp = $dssp['id_sp'];
            $ten_sp = $dssp['ten_sp'];
            $gia_sp = $dssp['gia_sp'];
            $so_luong = $dssp['so_luong'];
            $hinh_anh = $dssp['hinh_anh'];
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
          <td><?=$id_sp?></td>
          <td><?=$ten_sp?></td>
          <td><?=$gia_sp?></td>
          <td><img src="<?=$hinh_path?>" width="50" height="50"></td>
          <td><?=$so_luong?></td>
          <td class="warning"><a href="index.php?action=sua_sp&id_sp=<?=$id_sp?>">Sửa</a></td>
          <td class="primary"><a href="index.php?action=xoa_sp&id_sp=<?=$id_sp?>">Xóa</a></td>
          <td class="primary"><a href="index.php?action=chi_tiet_san_pham&id_sp=<?=$id_sp?>">Chi tiết</a></td>
          <td class="primary"><a href="index.php?action=kho_anh&id_sp=<?=$id_sp?>">Kho ảnh</a></td>
        </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
    <br>
    <div class="form-floating">
      <a href="index.php?action=them_san_pham"><button type="submit" class="btn btn-primary" name="them_moi">Thêm mới</button></a>
      <button class="btn btn-secondary">Hiển thị thêm</button>
    </div>
  </div>
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