<main>
  <?php
    require_once "view/thuoc_tinh/dashboard.php";
  ?>
  <!-- End of insights -->
  <div class="recent-orders">
    <h2>Danh sách bài viết</h2>
    <table class="table_danhmuc">
      <thead>
        <tr>
          <th>Mã bài viết</th>
          <th>Tên bài viết</th>
          <th>Hình ảnh</th>
          <th colspan="3">Chức năng</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php
          foreach($danh_sach_bai_viet as $dsbv) {
            $hinh_anh = $dsbv['hinh_anh'];
            $hinh_path = "../assets/uploads/" . $hinh_anh;
            if(is_file($hinh_path)) {
              $hinh = "<img src='".$hinh_path."' height='80'>";
            } else {
              $hinh = "Không có hình ảnh!";
            }
        ?>
        <tr>  
          <td><?=$dsbv['id_bv']?></td>
          <td><?=$dsbv['ten_bai_viet']?></td>
          <td><img src="<?=$hinh_path?>" width="50" height="50"></td>
          <td class="warning"><a href="index.php?action=sua_bv&id_bv=<?=$dsbv['id_bv']?>">Sửa</a></td>
          <td class="primary"><a href="index.php?action=xoa_bv&id_bv=<?=$dsbv['id_bv']?>" onclick="return confirm('Bạn có muốn xóa không?')">Xóa</a></td>
          <td class="primary"><a href="index.php?action=chi_tiet_bai_viet&id_bv=<?=$dsbv['id_bv']?>">Chi tiết</a></td>
        </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
    <a href="#">Show All</a> 
    <a href="index.php?action=them_bai_viet">Thêm mới</a>
  </div>
</main>
<!-- End of main -->
<div class="right">
  <?php
    require_once "view/thuoc_tinh/admin.php";
  ?>
  <!-- End of top -->
  <?php
    require_once "view/thuoc_tinh/recent_updates.php";
  ?>
  <!-- End of recent updates -->
  <?php
    require_once "view/thuoc_tinh/sales_analytics.php";
  ?>
</div>
</div>