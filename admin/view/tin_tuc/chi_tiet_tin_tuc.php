<?php
  require_once "view/header.php";
?>
<main>
  <?php
    require_once "view/thuoc_tinh/bang_dieu_khien.php";
  ?>
  <div class="recent-orders">
    <?php
    if(is_array($danh_sach_tin_tuc)) {
      $tieu_de = $danh_sach_tin_tuc['tieu_de'];
    ?>
    <h2><?=$tieu_de?></h2>
    <?php
    }
    ?>
    <table class="table_danhmuc">
      <thead>
        <tr>
          <th>Mã bài viết</th>
          <th>Tên bài viết</th>
          <th colspan="3">Chức năng</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php
          foreach($danh_sach_bai_viet as $dsbv) {
            $id_bv = $dsbv['id_bv'];
            $ten_bai_viet = $dsbv['ten_bai_viet'];
        ?>
        <tr>  
          <td><?=$id_bv?></td>
          <td><?=$ten_bai_viet?></td>
          <td class="warning"><a href="index.php?action=sua_bv&id_bv=<?=$id_bv?>">Sửa</a></td>
          <td class="primary"><a href="index.php?action=xoa_bv&id_bv=<?=$id_bv?>">Xóa</a></td>
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
      <a href="index.php?action=danh_sach_tin_tuc"><button type="submit" class="btn btn-success" name="them_moi">Danh sách tin tức</button></a>
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