<main>
  <?php
    if(is_array($mot_bai_viet)){
      $ten_bai_viet	 = $mot_bai_viet['ten_bai_viet'];
      $tom_tat = $mot_bai_viet['tom_tat'];
      $noi_dung = $mot_bai_viet['noi_dung'];
   
    
    ?>
    <div class="recent-orders">
      <h2>Chi Tiết Bài Viết </h2>
    </div>
    <?php
    }
    ?>
  <section>
    <div class="container flex">
      <div class="left">
      
        
      </div>
      <div class="right">
        <h3>Tên bài viết : <?=$ten_bai_viet?></h3>
        <h4>Tóm Tắt : <?=$tom_tat?> <small>VND</small></h4>
        <h4>Nội Dung : <?=$noi_dung?></h4>
        <div class="list-group">
        <a href="#" class="list-group-item list-group-item-action active" aria-disabled="true">Bài viết  cùng loại</a>
        <a href="#" class="list-group-item list-group-item-action">A second link item</a>
        </div>
      </div>
    </div>
  </section>
  <script>
    function img(anything) {
      document.querySelector('.slide').src = anything;
    }
    function change(change) {
      const line = document.querySelector('.home');
      line.style.background = change;
    }
  </script>
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