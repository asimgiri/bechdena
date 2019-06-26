<footer>
  <div class="container-fluid">
    <div class="row pb-5">
      <div class="col-lg-4 col-md-6 col-sm-6">
        <a href="index.php"><img src="img/final1.png" alt="" width="200px"></a>
        <p class="mt-2">We are a team of designers and developers that create high quality Magento, Prestashop, Opencart</p>
        <ul class="lst">
          <li>ADDRESS: Sankhanmul, Kathmandu, Nepal</li>
          <li>PHONES: <a href="tel:+977-9843XXXXXX">+977-9843XXXXXX</a></li>
          <li>EMAIL: <a href="mailto:bechdena@example.com">bechdena@example.com</a></li>
        </ul>
      </div>
      <div class="col-lg-2 col-md-6 col-sm-6">
        <h5>INFORMATION</h5>
        <ul class="lst mt-3">
          <li><a href="#">Specials</a></li>
          <li><a href="#">New products</a></li>
          <li><a href="#">Top sellers</a></li>
          <li><a href="#">Our stores</a></li>
          <li><a href="#">About us</a></li>
          <li><a href="#">Affiliate</a></li>
        </ul>
      </div>
      <div class="col-lg-2 col-md-6 col-sm-6">
        <h5>EXTRA</h5>
        <ul class="lst mt-3">
          <li><a href="user_dashboard.php">My Account</a></li>
          <li><a href="#">Login/Register</a></li>
          <li><a href="#">My Account</a></li>
          <li><a href="#">My Orders</a></li>
          <li><a href="#">My Addresses</a></li>
          <li><a href="#">Brands</a></li>
        </ul>
      </div>
      <div class="col-lg-2 col-md-6 col-sm-6">
        <h5>EXTRA</h5>
        <ul class="lst mt-3">
          <li><a href="#">My Account</a></li>
          <li><a href="#">Login/Register</a></li>
          <li><a href="#">My Account</a></li>
          <li><a href="#">My Orders</a></li>
          <li><a href="#">My Addresses</a></li>
          <li><a href="#">Brands</a></li>
        </ul>
      </div>
      <div class="col-lg-2 col-md-6 col-sm-6">
        <h5>FOLLOW US</h5>
        <div class="social">
          <ul class="lst">
            <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#" class="google"><i class="fab fa-google-plus-g"></i></a></li>
            <li><a href="#" class="youtube"><i class="fab fa-youtube"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="midfooter py-4">
    <div class="container text-center">
      <a href=""><img src="img/payment2.png" alt=""></a>

      <ul class="lst my-4">
        <li class="d-inline"><a href="about.php">ABOUT US</a></li>
        <li class="d-inline ml-4"><a href="">CUSTOMER SERVICE</a></li>
        <li class="d-inline ml-4"><a href="">PRIVACY POLICY</a></li>
        <li class="d-inline ml-4"><a href="">SITE MAP</a></li>
        <li class="d-inline ml-4"><a href="">ORDERS AND RETURNS</a></li>
        <li class="d-inline ml-4"><a href="contact.php">CONTACT US</a></li>
      </ul>

      <p>**$50 off orders $350+ with the code BOO50. $75 off orders $500+ with the code BOO75. $150 off orders $1000+ with the code BOO150. Valid from October 28, 2016 to October 31, 2016. Offer may not be combined with any other offers or
        promotions, is non-exchangeable and non-refundable. Offer valid within the US only.</p>
    </div>
  </div>

  <div class="subfooter">
    <div class="container">
      <div class="row mt-4 mb-2">
        <div class="col-md-6">
          <p>Copyright © 2019 Bechdena. All rights reserved.</p>
        </div>
        <div class="col-md-6 text-right">
          <p>Designed & Developed By: <a href="https://nextaussie.com/">Next Aussie Tech</a></p>
        </div>
      </div>
    </div>
  </div>
</footer>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<!-- <script src="js/jquery.js"></script> -->
<script src="js/owl.carousel.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js" charset="utf-8"></script>
<script src="js/cbpViewModeSwitch.js"></script>
<script src="js/classie.js"></script>


<script src="js/setup.js"></script>
<script src="js/totop.min.js"></script>
<script src="js/script.js"></script>

<!-- SPINNER -->
<script type="text/javascript">
  jQuery('<div class="quantity-nav"><div class="quantity-button quantity-up">+</div><div class="quantity-button quantity-down">-</div></div>').insertAfter('.quantity input');
  jQuery('.quantity').each(function() {
    var spinner = jQuery(this),
      input = spinner.find('input[type="number"]'),
      btnUp = spinner.find('.quantity-up'),
      btnDown = spinner.find('.quantity-down'),
      min = input.attr('min'),
      max = input.attr('max');

    btnUp.click(function() {
      var oldValue = parseFloat(input.val());
      if (oldValue >= max) {
        var newVal = oldValue;
      } else {
        var newVal = oldValue + 1;
      }
      spinner.find("input").val(newVal);
      spinner.find("input").trigger("change");
    });

    btnDown.click(function() {
      var oldValue = parseFloat(input.val());
      if (oldValue <= min) {
        var newVal = oldValue;
      } else {
        var newVal = oldValue - 1;
      }
      spinner.find("input").val(newVal);
      spinner.find("input").trigger("change");
    });

  });
</script>
<script type="text/javascript">
  (function() {

    window.inputNumber = function(el) {

      var min = el.attr('min') || false;
      var max = el.attr('max') || false;

      var els = {};

      els.dec = el.prev();
      els.inc = el.next();

      el.each(function() {
        init($(this));
      });

      function init(el) {

        els.dec.on('click', decrement);
        els.inc.on('click', increment);

        function decrement() {
          var value = el[0].value;
          value--;
          if (!min || value >= min) {
            el[0].value = value;
          }
        }

        function increment() {
          var value = el[0].value;
          value++;
          if (!max || value <= max) {
            el[0].value = value++;
          }
        }
      }
    }
  })();

  inputNumber($('.input-number'));
</script>
<!-- SPINNER -->


</body>

</html>
