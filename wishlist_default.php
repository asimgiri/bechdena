<?php include 'inc/header.php'; ?>

<section class="breadcrumb mt cover" style="background: url('img/banner/user.jpg'); background-attachment: fixed;">
  <nav aria-label="breadcrumb" class="m-auto">
    <h2 class="my-5 text-center">Hello, <span class="highlight">Username</span></h2>
  </nav>
</section>

<section class="userdashboard mb-5">
  <div class="container">
    <div class="row">
      <div class="col-md-2 ">
        <?php include 'inc/sidetab.php'; ?>
      </div>
      <div class="col-md-10 text-center">
          <small id="" class="form-text text-muted text-right">Logged in as <span class="username highlight">USERNAME</span></small>
          <h5 class="text-left">My Wishlist</h5>
          <hr>
          <i class="far fa-heart default_icon gray_p"></i>
          <p class="mt-3 mb-0">No items yet.</p>
          <small class="form-text text-muted mb-3">Start Adding some items to your Wishlist.</small>
          <a href="index.php"><button type="button" name="button" class="btn btn-regular">SHOP NOW</button></a>
      </div>
    </div>
  </div>
</section>

<?php include 'inc/footer.php'; ?>
