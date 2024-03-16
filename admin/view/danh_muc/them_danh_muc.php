<main>
  <h1>Dashboard</h1>
  <div class="date">
    <input type="date">
  </div>
  <div class="insights">
    <div class="sales">
      <span class="material-symbols-outlined">analytics</span>
      <div class="middle">
        <div class="left">
          <h3>Total Sales</h3>
          <h1>$25,024</h1>
        </div>
        <div class="progress">
          <svg>
            <circle cx="38" cy="38" r="36" />
          </svg>
          <div class="number">
            <p>81%</p>
          </div>
        </div>
      </div>
      <small class="text-muted">Last 24 hours</small>
    </div>
    <!-- End of sales -->
    <div class="expenses">
      <span class="material-symbols-outlined">bar_chart</span>
      <div class="middle">
        <div class="left">
          <h3>Total Expenses</h3>
          <h1>$14,160</h1>
        </div>
        <div class="progress">
          <svg>
            <circle cx="38" cy="38" r="36" />
          </svg>
          <div class="number">
            <p>62%</p>
          </div>
        </div>
      </div>
      <small class="text-muted">Last 24 hours</small>
    </div>
    <!-- End of expenses -->
    <div class="income">
      <span class="material-symbols-outlined">stacked_line_chart</span>
      <div class="middle">
        <div class="left">
          <h3>Total Income</h3>
          <h1>$10,864</h1>
        </div>
        <div class="progress">
          <svg>
            <circle cx="38" cy="38" r="36" />
          </svg>
          <div class="number">
            <p>44%</p>
          </div>
        </div>
      </div>
      <small class="text-muted">Last 24 hours</small>
    </div>
    <!-- End of income -->
  </div>
  <!-- End of insights -->
  <div class="recent-orders">
    <h2>Recent Orders</h2>
    <table>
      <thead>
        <tr>
          <th>Mã danh mục</th>
          <th>Tên danh mục</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php
          foreach($danh_sach_danh_muc as $dsdm) {
        ?>
        <tr>  
          <td><?=$dsdm['id_dm']?></td>
          <td><?=$dsdm['ten_dm']?></td>
          <td class="warning"><a href="index.php?action=sua_dm&id_dm=<?=$dsdm['id_dm']?>">Sửa</a></td>
          <td class="primary"><a href="index.php?action=xoa_dm&id_dm=<?=$dsdm['id_dm']?>">Xóa</a></td>
        </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
    <a href="#">Show All</a>
  </div>
</main>
<!-- End of main -->
<div class="right">
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
  <!-- End of top -->
  <div class="recent-updates">
    <h2>Recent Updates</h2>
    <div class="updates">
      <div class="update">
        <div class="profile-photo">
          <img src="../images/admin/profile-2.jpg">
        </div>
        <div class="message">
          <p><b>Mike Tyson</b> received his order of Night lion tech GPS drone</p>
          <small class="text-muted">2 Minutes Ago</small>
        </div>
      </div>
      <div class="update">
        <div class="profile-photo">
          <img src="../images/admin/profile-3.jpg">
        </div>
        <div class="message">
          <p><b>Mike Tyson</b> received his order of Night lion tech GPS drone</p>
          <small class="text-muted">2 Minutes Ago</small>
        </div>
      </div>
      <div class="update">
        <div class="profile-photo">
          <img src="../images/admin/profile-4.jpg">
        </div>
        <div class="message">
          <p><b>Mike Tyson</b> received his order of Night lion tech GPS drone</p>
          <small class="text-muted">2 Minutes Ago</small>
        </div>
      </div>
    </div>
  </div>
  <!-- End of recent updates -->
  <div class="sales-analytics">
    <h2>Sales Analytics</h2>
    <div class="item online">
      <div class="icon">
        <span class="material-symbols-outlined">shopping_cart</span>
      </div>
      <div class="right">
        <div class="info">
          <h3>ONLINE ORDERS</h3>
          <small class="text-muted">Last 24 hours</small>
        </div>
        <h5 class="success">+39%</h5>
        <h3>3849</h3>
      </div>
    </div>
    <div class="item offline">
      <div class="icon">
        <span class="material-symbols-outlined">local_mall</span>
      </div>
      <div class="right">
        <div class="info">
          <h3>OFFLINE ORDERS</h3>
          <small class="text-muted">Last 24 hours</small>
        </div>
        <h5 class="danger">-17%</h5>
        <h3>1100</h3>
      </div>
    </div>
    <div class="item customers">
      <div class="icon">
        <span class="material-symbols-outlined">person</span>
      </div>
      <div class="right">
        <div class="info">
          <h3>NEW CUSTOMERS</h3>
          <small class="text-muted">Last 24 hours</small>
        </div>
        <h5 class="success">+25%</h5>
        <h3>849</h3>
      </div>
    </div>
    <div class="item add-product">
      <div>
        <span class="material-symbols-outlined">add</span>
        <h3>Add Product</h3>
      </div>
    </div>
  </div>
</div>
</div>