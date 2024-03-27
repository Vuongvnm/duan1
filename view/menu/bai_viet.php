<?php
  // require_once "view/header.php";
?>
<style>
  * {
    margin: 0;
    padding: 0;
    scroll-behavior: smooth;
    scroll-padding-top: 2rem;
    box-sizing: border-box;
  }

  :root {
    --container-color: #1a1e21;
    --second-color: #fd8f44;
    --text-color: #172317;
    --bg-color: #fff;
  }

  ::selection {
    color: var(--bg-color);
    background: var(--second-color);
  }

  a {
    text-decoration: none;
  }

  li {
    list-style: none;
  }

  img {
    width: 100%;
  }

  section {
    padding: 3rem 0 2rem;
  }

  .container {
    max-width: 1068px;
    margin: auto;
    width: 100%;
  }

  header {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 200;
  }

  .nav {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 18px 0;
  }

  .logo span {
    color: var(--second-color);
  }

  .login {
    padding: 8px 14px;
    text-transform: uppercase;
    font-weight: 500;
    border-radius: 4px;
    background: var(--second-color);
    color: var(--bg-color);
  }

  .login:hover {
    background: hsl(24, 98%, 58%);
    transition: 0.3s;
  }

  .home {
    width: 100%;
    min-height: 440px;
    background: var(--container-color);
    display: grid;
    justify-content: center;
    align-items: center;
  }

  .home-text {
    color: var(--bg-color);
    text-align: center;
  }

  .home-title {
    font-size: 3.5rem;
  }

  .home-subtitle {
    font-size: 1rem;
    font-weight: 400;
  }

  /* .post-filter {
    display: flex;
    justify-content: center;
    align-items: center;
    column-gap: 1.5rem;
    margin-top: 2rem !important;
  }

  .filter-item {
    font-size: 0.9rem;
    font-weight: 500;
    cursor: pointer;
  }

  .active-filter {
    background: var(--second-color);
    color: var(--bg-color);
    padding: 4px 10px;
    border-radius: 4px;
  } */

  .post {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, auto));
    justify-content: center;
    gap: 1.5rem;
  }

  .post-box {
    background: var(--bg-color);
    box-shadow: 0 4px 14px black;
    padding: 15px;
    border-radius: 0.5rem;
  }

  .post-img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    object-position: center;
    border-radius: 0.5rem;
  }

  .category {
    font-size: 1.3rem;
    font-weight: 600;
    color: var(--text-color);
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
  }

  .post-date {
    display: flex;
    font-size: 0.875rem;
    text-transform: uppercase;
    font-weight: 400;
    margin-top: 4px;
  }

  .post-decription {
    font-size: 0.9rem;
    line-height: 1.5rem;
    margin: 5px 0 10px;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
  }

  .profile {
    display: flex;
    align-items: center;
    gap: 10px;
  }

  .profile img {
    width: 35px;
    height: 35px;
    border-radius: 50%;
    object-fit: cover;
    object-position: center;
    border: 2px solid var(--second-color);
  }
</style>
<!-- hero
<section id="page-header" style="background-image: url('./assets/images/banners/b19.jpg')">
  <h2>BÀI VIẾT</h2>
  <p>Tìm hiểu và tham khảo các bài viết của chúng tôi!</p>
</section> -->

<header>
  <div class="nav container">
    <a href="#" class="logo">Ve<span>nom</span></a>
    <a href="#" class="login">Login</a>
  </div>
</header>

<section class="home" id="home">
  <div class="home-text container">
    <h2 class="home-title">The Venom Blog</h2>
    <span class="home-subtitle">Your source of great content</span>
  </div>
</section>
<section id="blog">
  <div class="blog-box">
    <div class="blog-img">
      <img src="./assets//images/blog/b1.jpg" />
    </div>
    <div class="blog-details">
      <h4>The Cotton Jersey Zip-Up Hoodie</h4>
      <p>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni quae
        voluptates magnam numquam, quis, quia illum eveniet laudantium,
        veniam totam expedita...
      </p>
      <a href="#">CONTINUE READING</a>
    </div>
    <h1>14/01</h1>
  </div>
  <div class="blog-box">
    <div class="blog-img">
      <img src="./assets/images/blog/b2.jpg" />
    </div>
    <div class="blog-details">
      <h4>The Cotton Jersey Zip-Up Hoodie</h4>
      <p>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni quae
        voluptates magnam numquam, quis, quia illum eveniet laudantium,
        veniam totam expedita...
      </p>
      <a href="#">CONTINUE READING</a>
    </div>
    <h1>13/01</h1>
  </div>
  <div class="blog-box">
    <div class="blog-img">
      <img src="./assets/images/blog/b3.jpg" />
    </div>
    <div class="blog-details">
      <h4>The Cotton Jersey Zip-Up Hoodie</h4>
      <p>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni quae
        voluptates magnam numquam, quis, quia illum eveniet laudantium,
        veniam totam expedita...
      </p>
      <a href="#">CONTINUE READING</a>
    </div>
    <h1>12/01</h1>
  </div>
  <div class="blog-box">
    <div class="blog-img">
      <img src="./assets/images/blog/b4.jpg" />
    </div>
    <div class="blog-details">
      <h4>The Cotton Jersey Zip-Up Hoodie</h4>
      <p>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni quae
        voluptates magnam numquam, quis, quia illum eveniet laudantium,
        veniam totam expedita...
      </p>
      <a href="#">CONTINUE READING</a>
    </div>
    <h1>11/01</h1>
  </div>
  <div class="blog-box">
    <div class="blog-img">
      <img src="./assets/images/blog/b5.jpg" />
    </div>
    <div class="blog-details">
      <h4>The Cotton Jersey Zip-Up Hoodie</h4>
      <p>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni quae
        voluptates magnam numquam, quis, quia illum eveniet laudantium,
        veniam totam expedita...
      </p>
      <a href="#">CONTINUE READING</a>
    </div>
    <h1>10/01</h1>
  </div>
</section>







<!-- 
<section id="pagination" class="section-p1">
  <a href="#">1</a>
  <a href="#">2</a>
  <a href="#"><i class="fa-solid fa-arrow-right"></i></a>
</section> -->
<?php
  require_once "./view/dang_ky_thanh_vien/dang_ky_thanh_vien.php";
  require_once "view/footer.php";
?>