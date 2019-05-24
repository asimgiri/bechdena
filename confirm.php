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
          <h5>Code Confirmation</h5>
          <hr>
          <div class="form-group mt-4">
            <label>Enter the verification CODE you received :</label>
            <input type="text" class="form-control rounded-0" id="exampleInputPassword1" placeholder="">
            <small class="from-text text-muted">Didnot receive a CODE? <span><a href="#" class="highlight">CLICK HERE</a></span></small>
          </div>
        </form>
          <a href=""><button type="button" name="button" class="btn btn-regular px-5">CONFIRM</button></a>
      </div>
    </div>
  </div>
</section>

<?php include 'inc/footer.php'; ?>
