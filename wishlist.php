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
      <div class="col-md-10">
          <small id="" class="form-text text-muted text-right">Logged in as <span class="username highlight">USERNAME</span></small>
          <h5>My Wishlist</h5>
          <hr>
          <div class="row border-bottom">
            <div class="col-md-2">
              <img src="img/products/2.jpg" alt="" width="100%">
            </div>
            <div class="col-md-6">
              <p class="smp gray_p m-0">Xiaomi MI 6 Smart Mobile Phone [6GB RAM, 128GB ROM - Blue]</p>
              <p class="card-product-hover-price">Rs. 1,75,000</p>
            </div>
            <div class="col-md-4 text-right">
              <div class=" wishlist-icons">
                <a href="#"><i class="fa fa-shopping-cart" data-toggle="tooltip" data-placement="bottom" title="Add to Cart"></i></a>
                <a href="#"><i class="fa fa-eye" data-toggle="tooltip" data-placement="bottom" title="View"></i></a>
                <a href="#"><i class="fas fa-trash-alt text-danger" data-toggle="tooltip" data-placement="bottom" title="Remove"></i></a>
              </div>
            </div>
          </div>
          <div class="row border-bottom mt-2">
            <div class="col-md-2">
              <img src="img/products/3.jpg" alt="" width="100%">
            </div>
            <div class="col-md-6">
              <p class="smp gray_p m-0">DIGICOM W5 WIRED FOLDABLE ON- EAR HEADPHONE - PINK</p>
              <p class="card-product-hover-price">Rs. 3,230</p>
            </div>
            <div class="col-md-4 text-right">
              <div class=" wishlist-icons">
                <a href="#"><i class="fa fa-shopping-cart" data-toggle="tooltip" data-placement="bottom" title="Add to Cart"></i></a>
                <a href="#"><i class="fa fa-eye" data-toggle="tooltip" data-placement="bottom" title="View"></i></a>
                <a href="#"><i class="fas fa-trash-alt text-danger" data-toggle="tooltip" data-placement="bottom" title="Remove"></i></a>
              </div>
            </div>
          </div>
          <div class="row mt-2">
            <div class="col-md-2">
              <img src="img/products/5.jpg" alt="" width="100%">
            </div>
            <div class="col-md-6">
              <p class="smp gray_p m-0">REMAX RMK-K02 Karaoke Microphone - White</p>
              <p class="card-product-hover-price">Rs. 3,480</p>
            </div>
            <div class="col-md-4 text-right">
              <div class=" wishlist-icons">
                <a href="#"><i class="fa fa-shopping-cart" data-toggle="tooltip" data-placement="bottom" title="Add to Cart"></i></a>
                <a href="#"><i class="fa fa-eye" data-toggle="tooltip" data-placement="bottom" title="View"></i></a>
                <a href="#"><i class="fas fa-trash-alt text-danger" data-toggle="tooltip" data-placement="bottom" title="Remove"></i></a>
              </div>
            </div>
          </div>
          <a href="edit_profile.php"><button type="button" name="button" class="btn btn-regular float-right">ADD ALL TO CART</button></a>
      </div>
    </div>
  </div>
</section>

<?php include 'inc/footer.php'; ?>
