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
          <h5>My Profile</h5>
          <p class="smp">Hello Username,  Welcome to your member area!</p>
          <hr>
          <div class="row">
            <div class="col-md-8">
              <p class="smp">Full Name : <span class="details float-right">Tommy Shelby</span></p>
              <p class="smp mt-4">Email : <span class="details float-right">tommy@gmail.com</span></p>
              <p class="smp mt-4">Mobile : <span class="details float-right">+977-9843xxxxxx  | <a href="#" class="smp">Add</a> </span></p>
              <p class="smp mt-4">Area : <span class="details float-right">Lokanthali</span></p>
              <p class="smp mt-4">City : <span class="details float-right">Bhaktapur</span></p>
            </div>
          </div>

          <h5 class="mt-3">Account Stats</h5>
          <hr>
          <div class="row">
            <div class="col-md-8">
              <p class="smp">Buyer's Messages : <span class="details float-right">0</span></p>
              <p class="smp mt-4">Number of Ads posted: <span class="details float-right">0</span></p>
              <p class="smp mt-4">People Contacted : <span class="details float-right">5</span></p>
              <p class="smp mt-4">Number of Ads viewed: <span class="details float-right">8</span></p>
              <a href="edit_profile.php"><button type="button" name="button" class="btn btn-regular mt-4 px-4">Edit Profile</button></a>
            </div>
          </div>
      </div>
    </div>
  </div>
</section>

<?php include 'inc/footer.php'; ?>
