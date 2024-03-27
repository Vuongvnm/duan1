<?php
  require_once "view/header.php";
?>
<div class="top">
    <button id="menu-btn">
      <span class="material-symbols-outlined">menu</span>
    </button>
    <div class="theme-toggler">
      <span class="material-symbols-outlined">light_mode</span>
      <span class="material-symbols-outlined">dark_mode</span>
    </div>
    <div class="profile">
      <div class="info">
        <p>Hey, <b>Daniel</b></p>
        <small class="text-muted">Admin</small>
      </div>
      <div class="profile-photo">
        <img src="../images/admin/profile-1.jpg">
      </div>
    </div>
  </div>
  <?
  require_once "view/footer.php"
?>