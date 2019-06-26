<?php include 'inc/header.php'; ?>

<section class="advanced spacing">

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <h5>Advanced Search</h5>
        <hr class="mb-4">
        <form class="advanceform">
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Product Keyword</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="inputEmail3" placeholder="Enter Product keywords...">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Select</label>
            <div class="col-sm-5">
              <div class="form-group">
                <select class="form-control" id="exampleFormControlSelect1">
                  <option selected>Category</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>
            </div>
            <div class="col-sm-5">
              <div class="form-group">
                <select class="form-control" id="exampleFormControlSelect1">
                  <option selected>Sub Category</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>
            </div>

            <label for="inputEmail3" class="col-sm-2 col-form-label">Location</label>
            <div class="col-sm-5">
              <div class="form-group">
                <select class="form-control" id="exampleFormControlSelect1">
                  <option selected>Category</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>
            </div>
            <div class="col-sm-5">
              <div class="form-group">
                <select class="form-control" id="exampleFormControlSelect1">
                  <option selected>Sub Category</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>
            </div>

            <label for="inputEmail3" class="col-sm-2 col-form-label">Price</label>
            <div class="col-sm-5">
              <input type="email" class="form-control" id="inputEmail3" placeholder="From Rs...">
            </div>
            <div class="col-sm-5">
              <input type="email" class="form-control" id="inputEmail3" placeholder="To Rs...">
            </div>





          </div>
          <fieldset class="form-group">
            <div class="row">
              <legend class="col-form-label col-sm-2 pt-0">Condition</legend>
              <div class="col-sm-10 p-z">
                <div class="form-check">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                      Brand New
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                    <label class="form-check-label" for="defaultCheck2">
                      Used
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                    <label class="form-check-label" for="defaultCheck2">
                      Not Specified
                    </label>
                  </div>
                </div>
              </div>
          </fieldset>
          <fieldset class="form-group">
            <div class="row">
              <legend class="col-form-label col-sm-2 pt-0">Price Negotiable</legend>
              <div class="col-sm-10 p-z">
                <div class="form-check">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                      Any
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                    <label class="form-check-label" for="defaultCheck2">
                      Yes
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                    <label class="form-check-label" for="defaultCheck2">
                      Fixed Price
                    </label>
                  </div>
                </div>
              </div>
          </fieldset>
          <div class="form-group row">
            <div class="col-md-2"></div>
            <div class="col-sm-10 text-center">
              <button type="submit" class="btn btn-regular px-5">Search</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

</section>

<?php include 'inc/footer.php'; ?>
