<?php include 'inc/header.php'; ?>

<section class="breadcrumb mt cover" style="background: url('img/banner/user.jpg'); background-attachment: fixed;">
  <nav aria-label="breadcrumb" class="m-auto">
    <h2 class="my-5 text-center">Hello, <span class="highlight">Username</span></h2>
  </nav>
</section>

<section class="userdashboard posting mb-5">
  <div class="container">
    <div class="row">
      <div class="col-md-2 ">
        <?php include 'inc/sidetab.php'; ?>
      </div>
      <div class="col-md-10">
        <small id="" class="form-text text-muted text-right">Logged in as <span class="username highlight">USERNAME</span></small>
        <form>
          <nav aria-label="breadcrumb breadcrumb2">
    <ol class="breadcrumb px-0">
      <li class="breadcrumb-item"><a href="select_category.php" class="highlightl">All Categories</a></li>
      <li class="breadcrumb-item active" aria-current="page">Apparels & Accessories</li>
    </ol>
  </nav>
          <div class="row">
            <div class="col-md-6">

              <div class="input-group mt-2 w80">
                <select class="custom-select rounded-0" id="inputGroupSelect01">
                  <option selected>Product Type*</option>
                  <option value="1">Lalitpur</option>
                  <option value="2">Bhaktapur</option>
                  <option value="3">Biratnagar</option>
                  <option value="4">Butwal</option>
                  <option value="5">Chitwan</option>
                  <option value="6">Itahari</option>
                  <option value="7">Janakpur</option>
                  <option value="8">Pokhara</option>
                </select>
              </div>

              <div class="form-group mt-5">
                <input type="text" class="form-control rounded-0 smp" id="exampleInputPassword1" placeholder="Ad Title*">
              </div>

              <div class="form-group mt-5">
                <input type="text" class="form-control rounded-0 smp" id="exampleInputPassword1" placeholder="Mobile*">
              </div>


              <div class="form-group mt-5">
                <label class="smp">Home Delivery Option:</label>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                  <label class="form-check-label text-muted" for="defaultCheck1">
                    Available
                  </label>
                </div>
              </div>




            </div>

            <div class="col-md-6">

              <div class="input-group mt-2 w80">
                <select class="custom-select rounded-0" id="inputGroupSelect01">
                  <option selected>Condition*</option>
                  <option value="1">Lalitpur</option>
                  <option value="2">Bhaktapur</option>
                  <option value="3">Biratnagar</option>
                  <option value="4">Butwal</option>
                  <option value="5">Chitwan</option>
                  <option value="6">Itahari</option>
                  <option value="7">Janakpur</option>
                  <option value="8">Pokhara</option>
                </select>
              </div>
              <div class="form-group mt-5">
                <input type="text" class="form-control rounded-0 smp" id="exampleInputPassword1" placeholder="Price*">
              </div>

              <div class="form-group mt-5">
                <input type="email" class="form-control rounded-0 smp" id="exampleInputPassword1" placeholder="Email*">
              </div>

              <div class="form-group mt-5">
                <label class="smp">Price Negotiable:</label>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                  <label class="form-check-label text-muted" for="defaultCheck1">
                    Yes
                  </label>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group mt-5">
                <h5> Is your product a Verified product <a href="#"><i class="far fa-question-circle ml-1 highlightl" data-toggle="tooltip" data-placement="top" title="Why Verify ?"></i></a></h5>
                <hr>
                <div class="form-check mt-3">
                  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                  <label class="form-check-label text-muted" for="defaultCheck1">
                    Yes I have verified my product.
                  </label>
                </div>
              </div>
            </div>

            <div class="col-md-6">

            </div>
          </div>
        </form>

        <form class="mt-5">
          <h5>Types of Ad :</h5>
          <hr>

          <table class="table table-striped text-center mt-3">
            <thead>
              <tr>
                <td scope="col">Features
                </td>
                <td scope="col">Free Ad Posting
                  <h5 class="mt-2">Rs. 0 / Month</h5>
                </td>
                <td scope="col">Premium Ad Posting
                  <h5 class="mt-2">Rs. 200 / Month</h5>
                </td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Visibility</th>
                <td>Visible below Premium Ads</td>
                <td>Visible above all Regular Ads</td>
              </tr>
              <tr>
                <th scope="row">Validity</th>
                <td>Upto 3 weeks</td>
                <td>Upto 4 weeks as premium and 3 weeks as free</td>
              </tr>
              <tr>
                <th scope="row">Ad Views</th>
                <td>50 views</td>
                <td>100 views within 4 weeks</td>
              </tr>
              <tr>
                <th scope="row">Assurance</th>
                <td></td>
                <td><i class="fas fa-check text-success"></i></td>
              </tr>
              <tr>
                <th scope="row">Cash Back</th>
                <td></td>
                <td><i class="fas fa-check text-success"></i></td>
              </tr>
              <tr>
                <th scope="row">Cash Back</th>
                <td></td>
                <td><i class="fas fa-check text-success"></i></td>
              </tr>

              <tr>
                <th scope="row"></th>
                <td>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                      Select this plan
                    </label>
                  </div>
                </td>
                <td>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                      Select this plan
                    </label>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>

          <div class="text-center">
            <a href="edit_profile.php"><button type="button" name="button" class="btn btn-regular mt-2 px-4">Post Ad</button></a>
          </div>

        </form>



      </div>
    </div>
  </div>
</section>

<?php include 'inc/footer.php'; ?>
