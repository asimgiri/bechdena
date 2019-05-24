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
        <form>
          <h5>Ad Posting</h5>
          <hr>
          <h5 class="mt-2 text-danger">You have not verified your mobile number with your account</h5>
          <p class="mb-4">In order to post your ad, verification of your mobile number is mandatory.</p>
          <a href="verify_mobile.php"><u>Verify Mobile Number</u></a>
          <small class="form-text text-muted text-left mt-2">This is one time process only. You do not have to verify mobile number everytime you post an ad.</small>
        </form>
      </div>
    </div>
  </div>
</section>

<?php include 'inc/footer.php'; ?>
