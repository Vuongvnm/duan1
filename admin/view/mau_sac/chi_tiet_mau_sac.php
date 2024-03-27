<?php
  require_once "view/header.php";
?>
<main>
  <?php
    require_once "view/thuoc_tinh/bang_dieu_khien.php";
  ?>
  <div class="recent-orders">
    <?php
    if(is_array($danh_sach_mau_sac)) {
      $ten_ms = $danh_sach_mau_sac['ten_ms'];
    ?>
    <h2><?=$ten_ms?></h2>
    <?php
    }
    ?>
    <table class="table_danhmuc">
      <thead>
        <tr>
          <th>Mã sản phẩm</th>
          <th>Tên sản phẩm</th>
          <th colspan="3">Chức năng</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php
          foreach($danh_sach_san_pham as $dssp) {
            $id_sp = $dssp['id_sp'];
            $ten_sp = $dssp['ten_sp'];
        ?>
        <tr>  
          <td><?=$id_sp?></td>
          <td><?=$ten_sp?></td>
          <td class="warning"><a href="index.php?action=sua_sp&id_sp=<?=$id_sp?>">Sửa</a></td>
          <td class="primary"><a href="index.php?action=xoa_sp&id_sp=<?=$id_sp?>">Xóa</a></td>
          <td class="primary"><a href="index.php?action=chi_tiet_san_pham&id_sp=<?=$id_sp?>">Chi tiết</a></td>
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
      <a href="index.php?action=danh_sach_mau_sac"><button type="submit" class="btn btn-success" name="them_moi">Danh sách màu sắc</button></a>
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