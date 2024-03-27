<?php
  require_once "view/header.php";
?>
<main>
  <?php
    require_once "view/thuoc_tinh/bang_dieu_khien.php";
  ?>
  <div class="recent-orders">
    <h2>Danh sách bài viết</h2>
    <table class="table_danhmuc">
      <thead>
        <tr>
          <th>Số thứ tự</th>
          <th>Mã bài viết</th>
          <th>Tên bài viết</th>
          <th>Hình ảnh</th>
          <th colspan="3">Chức năng</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php
          foreach($danh_sach_bai_viet as $stt => $dsbv) {
            $id_bv = $dsbv['id_bv'];
            $ten_bai_viet = $dsbv['ten_bai_viet'];
            $hinh_anh = $dsbv['hinh_anh'];
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
          <td><?=$id_bv?></td>
          <td><?=$ten_bai_viet?></td>
          <td><img src="<?=$hinh_path?>" width="50" height="50"></td>
          <td class="warning"><a href="index.php?action=sua_bv&id_bv=<?=$id_bv?>">Sửa</a></td>
          <td class="primary"><a href="index.php?action=xoa_bv&id_bv=<?=$id_bv?>" onclick="return confirm('Bạn có muốn xóa không?')">Xóa</a></td>
          <td class="primary"><a href="index.php?action=chi_tiet_bai_viet&id_bv=<?=$id_bv?>">Chi tiết</a></td>
        </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
    <br>
    <div class="form-floating">
      <a href="index.php?action=them_bai_viet"><button type="submit" class="btn btn-primary" name="them_moi">Thêm mới</button></a>
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
<?
  require_once "view/footer.php"
?>