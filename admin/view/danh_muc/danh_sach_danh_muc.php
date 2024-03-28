<?php
  require_once "view/header.php";
?>
<main>
  <?php
    require_once "view/thuoc_tinh/bang_dieu_khien.php";
  ?>
  <div class="recent-orders">
    <h2>Danh sách danh mục</h2>
    <table class="table_danhmuc">
      <thead>
        <tr>
          <th>Số thứ tự</th>
          <th>Mã danh mục</th>
          <th>Tên danh mục</th>
          <th colspan="3">Chức năng</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php
          foreach($danh_sach_danh_muc as $stt => $dsdm) {
            $id_dm = $dsdm['id_dm'];
            $ten_dm = $dsdm['ten_dm'];
            $stt += 1;
        ?>
        <tr>  
          <td><?=$stt?></td>
          <td><?=$id_dm?></td>
          <td><?=$ten_dm?></td>
          <td class="warning">
            <a class="btn btn-link" href="index.php?action=sua_dm&id_dm=<?=$id_dm?>">Sửa</a>
            <a class="btn btn-link" href="index.php?action=xoa_dm&id_dm=<?=$id_dm?>" onclick="return confirm('Bạn có muốn xóa không?')">Xóa</a>
            <a class="btn btn-link" href="index.php?action=chi_tiet_danh_muc&id_dm=<?=$id_dm?>">Chi tiết</a>
          </td>
        </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
    <br>
    <div class="form-floating">
      <a href="index.php?action=them_danh_muc"><button type="submit" class="btn btn-primary" name="them_moi">Thêm mới</button></a>
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