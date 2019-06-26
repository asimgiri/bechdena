<?php include 'inc/header.php'; ?>

<section class="breadcrumb mt cover" style="background: url('img/banner/abstract.jpg'); background-attachment: fixed;">
  <nav aria-label="breadcrumb" class="m-auto">
    <h2 class="mt-4 text-center">Product Details</h2>
    <ol class="breadcrumb">
      <li class="breadcrumb-item smp"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item smp"><a href="index.php">Products</a></li>
      <li class="breadcrumb-item active smp" aria-current="page">Product Details</li>
    </ol>
  </nav>
</section>

<section class="product_details">
  <div class="container">
    <div class="row">
      <div class="col-md-4 p-z mt-4">
        <!-- magnific start -->
        <div id="magnific">
          <div class="xzoom-container">
            <img class="xzoom5" id="xzoom-magnific" src="img/gallery/preview/p1.jpg" xoriginal="img/gallery/original/p1.jpg" />
            <div class="xzoom-thumbs">
              <a href="img/gallery/original/p1.jpg"><img class="xzoom-gallery5" width="80" src="img/gallery/thumbs/p1.jpg" xpreview="img/gallery/preview/p1.jpg" title="The description goes here"></a>
              <a href="img/gallery/original/p6.jpg"><img class="xzoom-gallery5" width="80" src="img/gallery/thumbs/p6.jpg" xpreview="img/gallery/preview/p6.jpg" title="The description goes here"></a>
              <a href="img/gallery/original/03_r_car.jpg"><img class="xzoom-gallery5" width="80" src="img/gallery/preview/03_r_car.jpg" title="The description goes here"></a>
              <a href="img/gallery/original/04_g_car.jpg"><img class="xzoom-gallery5" width="80" src="img/gallery/preview/04_g_car.jpg" title="The description goes here"></a>
            </div>
          </div>
        </div>
        <!-- magnific end -->
      </div>
      <div class="col-md-5 pl-5 mt-4">
        <!-- <p class="smp gray_p m-0">Xiaomi MI 6 Smart Mobile Phone [6GB RAM, 128GB ROM - Blue]</p>
        <p class="card-product-hover-price">Rs. 1,75,000</p> -->
        <h5>Xiaomi MI 6 Smart Mobile Phone [6GB RAM, 128GB ROM - Blue]</h5>
        <p class="text-justify smp">More room to move. With 80GB or 160GB of storage and up to 40 hours of battery life, the new iPod classic lets you enjoy up to 40,000 songs or... </p>
        <h2 class="highlight2">Rs. 1,75,000
          <span class="wishlist-icons float-right">
            <a href="#"><i class="fa fa-heart text-danger" data-toggle="tooltip" data-placement="bottom" title="Wishlist"></i></a>
            <a href="#"><i class="fas fa-share-alt" data-toggle="tooltip" data-placement="bottom" title="Share"></i></a>
          </span></h2>
        <ul class="lst smp">
          <li>Brand: <a href="#">Xiaomi</a></li>
          <li class="mt-1">Availability: <a href="#">In Stock</a></li>
          <li class="mt-1">Category: <a href="#">Mobile Phones</a></li>
          <li class="mt-1">Quantity:
            <select class="custom-select">
              <option selected>1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
            </select>
          </li>
        </ul>
        <a href=""><button type="button" name="button" class="btn btn-regular px-4">Buy Now</button></a>
        <a href=""><button type="button" name="button" class="btn btn-regular px-4">Add To Cart</button></a>
      </div>

      <div class="col-md-3 p-z mt-4">
        <div class="title_bg text-center"><i class="fas fa-info-circle"></i> Sellers Info</div>
        <ul class="lst smp border_ul">
          <li class="text-center"><a href="#"><img src="img/company/company.png" alt="" width="50%"></a>
            <!-- <a href="vendor_profile.php"><u>VIEW COMPANY PROFILE</u></a> -->
          </li>
          <li class="mt-1">Member Since: <span>July 2015</span></li>
          <li class="mt-1">Member Since: <span>July 2015</span></li>
          <li class="mt-1">Category: <a href="#">Mobile Phones</a></li>
          <li class="mt-1">Condition: <a href="#">Brand New</a></li>
          <li class="mt-1">Home Delivery: <span>Yes</span></li>
          <li class="mt-1">Delivery Area: <span>Within Kathmandu</span></li>
          <li class="mt-1">Warranty Type: <a href="#">Manufacturer/Importer</a></li>
        </ul>
      </div>
    </div>

    <!-- Tabs -->
    <section id="tabs" class="my-5">
      <div class="container p-z">
        <div class="row">
          <div class="col-xs-12 ">
            <nav>
              <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Product Details</a>
                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Description</a>
                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Reviews</a>
              </div>
            </nav>
            <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="row">
                  <div class="col-md-6">
                    <p>Ad Details :</p>
                    <table class="table table-striped ">
                      <tbody>
                        <tr>
                          <td class="smp">Condition</td>
                          <td class="smp">Almost Like New</td>
                        </tr>
                        <tr>
                          <td class="smp">Posted By</td>
                          <td class="smp"><a href="vendor_profile.php">Top Collection Enterprises</a></td>
                        </tr>
                        <tr>
                          <td class="smp">Brand Name</td>
                          <td class="smp">TECHNOS</td>
                        </tr>
                        <tr>
                          <td class="smp">Product Type</td>
                          <td class="smp">Laptop</td>
                        </tr>
                        <tr>
                          <td class="smp">Screen Size</td>
                          <td class="smp">14 to 14.9 inches In</td>
                        </tr>
                        <tr>
                          <td class="smp">RAM</td>
                          <td class="smp">4GB</td>
                        </tr>
                        <tr>
                          <td class="smp">Quantity</td>
                          <td class="smp">6</td>
                        </tr>
                        <tr>
                          <td class="smp">Model</td>
                          <td class="smp">440 G1</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>

                  <div class="col-md-6">
                    <p>Packaging & Delivery</p>
                    <table class="table table-striped">
                      <tbody>
                        <tr>
                          <td class="smp">Selling Units</td>
                          <td class="smp">Single Item</td>
                        </tr>
                        <tr>
                          <td class="smp">Home Delivery</td>
                          <td class="smp"><a href="vendor_profile.php">Yes</a></td>
                        </tr>
                        <tr>
                          <td class="smp">Delivery Location</td>
                          <td class="smp">All Around Nepal</td>
                      </tbody>
                    </table>
                  </div>

                </div>
              </div>
              <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">


              </div>
              <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                <div class="row">
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-2 text-center">
                        <img src="img/user.png" alt="" width="60px">
                      </div>
                      <div class="col-md-8">
                        <p class="smp mb-0">Mike Fisher</p>
                        <ul class="lst">
                          <li class="d-inline"><a href=""><i class="fas fa-star"></i></a></li>
                          <li class="d-inline"><a href=""><i class="fas fa-star"></i></a></li>
                          <li class="d-inline"><a href=""><i class="fas fa-star"></i></a></li>
                          <li class="d-inline"><a href=""><i class="fas fa-star"></i></a></li>
                          <li class="d-inline"><a href=""><i class="far fa-star"></i></a></li>
                        </ul>
                        <p class="smp gray_p mb-0">good Quality,on time just one complain I have. I requested a L size. But I received Size S.</p>
                        <small class="form-text text-muted text-right">28th April, 2019</small>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-2 text-center">
                        <img src="img/user.png" alt="" width="60px">
                      </div>
                      <div class="col-md-8">
                        <p class="smp mb-0">Tony Stark</p>
                        <ul class="lst">
                          <li class="d-inline"><a href=""><i class="fas fa-star"></i></a></li>
                          <li class="d-inline"><a href=""><i class="fas fa-star"></i></a></li>
                          <li class="d-inline"><a href=""><i class="fas fa-star"></i></a></li>
                          <li class="d-inline"><a href=""><i class="far fa-star"></i></a></li>
                          <li class="d-inline"><a href=""><i class="far fa-star"></i></a></li>
                        </ul>
                        <p class="smp gray_p mb-0">good Quality,on time just one complain I have. I requested a L size. But I received Size S.</p>
                        <small class="form-text text-muted text-right">28th April, 2019</small>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-2 text-center">
                        <img src="img/user.png" alt="" width="60px">
                      </div>
                      <div class="col-md-8">
                        <p class="smp mb-0">Alexander Dali</p>
                        <ul class="lst">
                          <li class="d-inline"><a href=""><i class="fas fa-star"></i></a></li>
                          <li class="d-inline"><a href=""><i class="fas fa-star"></i></a></li>
                          <li class="d-inline"><a href=""><i class="far fa-star"></i></a></li>
                          <li class="d-inline"><a href=""><i class="far fa-star"></i></a></li>
                          <li class="d-inline"><a href=""><i class="far fa-star"></i></a></li>
                        </ul>
                        <p class="smp gray_p mb-0">good Quality,on time just one complain I have. I requested a L size. But I received Size S.</p>
                        <small class="form-text text-muted text-right">28th April, 2019</small>
                      </div>
                    </div>
                    <div class="row my-4">
                      <div class="col-md-2 text-center">
                        <img src="img/user.png" alt="" width="60px">
                      </div>
                      <div class="col-md-8">
                        <p class="smp mb-0">Romeo Scudboat</p>
                        <ul class="lst">
                          <li class="d-inline"><a href=""><i class="far fa-star"></i></a></li>
                          <li class="d-inline"><a href=""><i class="far fa-star"></i></a></li>
                          <li class="d-inline"><a href=""><i class="far fa-star"></i></a></li>
                          <li class="d-inline"><a href=""><i class="far fa-star"></i></a></li>
                          <li class="d-inline"><a href=""><i class="far fa-star"></i></a></li>
                        </ul>
                        <div class="comment my_commment">
                          <div class="form-group mt-3">
                            <textarea class="form-control rounded-0" id="exampleFormControlTextarea1" rows="3" placeholder="Write a comment..."></textarea>
                              <a href="#"><button class="btn btn-regular float-right mt-1">Done</button></a>
                              <small id="" class="form-text text-muted ">February 24, 2016 at 6:26 am</small>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</section>

<?php include 'inc/footer.php'; ?>
