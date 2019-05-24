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
          <h5>Change Password</h5>
          <p class="smp">You can change your current password from here</p>
          <hr>
          <div class="form-group">
            <input type="password" class="form-control rounded-0" id="exampleInputPassword1" placeholder="Please enter your current password">
          </div>
          <div class="form-group">
            <input type="password" class="form-control rounded-0" id="exampleInputPassword1" placeholder="New password with 6 characters with number and letter">
          </div>
          <div class="form-group">
            <input type="password" class="form-control rounded-0" id="exampleInputPassword1" placeholder="Reenter your password">
          </div>
        </form>

          <a href="edit_profile.php"><button type="button" name="button" class="btn btn-regular px-4">Save Changes</button></a>

      </div>
    </div>
  </div>
</section>

<?php include 'inc/footer.php'; ?>
