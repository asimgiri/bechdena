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
          <h5>Personal Details</h5>
          <p class="smp">You can change your account details from here</p>
          <hr>
          <div class="form-group">
            <input type="text" class="form-control rounded-0" id="exampleInputFirstName" aria-describedby="emailHelp" placeholder="First Name">
          </div>
          <div class="form-group">
            <input type="text" class="form-control rounded-0" id="exampleInputLastName" aria-describedby="emailHelp" placeholder="Last Name">
          </div>
          <div class="form-group">
            <input type="email" class="form-control rounded-0" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
          </div>
          <div class="form-group">
            <input type="text" class="form-control rounded-0" id="exampleInputMobile" placeholder="Mobile">
          </div>
          <div class="form-group">
            <input type="text" class="form-control rounded-0" id="exampleInputMobile" placeholder="Telephone">
          </div>
        </form>

        <form class="mt-5">
          <h5>Address Details</h5>
          <hr>
          <div class="form-group">
            <input type="text" class="form-control rounded-0" id="exampleInputFirstName" aria-describedby="emailHelp" placeholder="Company Name">
          </div>
          <div class="form-group">
            <input type="text" class="form-control rounded-0" id="exampleInputLastName" aria-describedby="emailHelp" placeholder="Country">
          </div>
          <div class="form-group">
            <input type="text" class="form-control rounded-0" id="exampleInputLastName" aria-describedby="emailHelp" placeholder="City">
          </div>
          <div class="form-group">
            <input type="text" class="form-control rounded-0" id="exampleInputLastName" aria-describedby="emailHelp" placeholder="Region/State">
          </div>
        </form>
          <a href="edit_profile.php"><button type="button" name="button" class="btn btn-regular px-5">Save</button></a>
          <a href="edit_profile.php"><button type="button" name="button" class="btn btn-regular px-5">Reset</button></a>
      </div>
    </div>
  </div>
</section>

<?php include 'inc/footer.php'; ?>
