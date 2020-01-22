<!DOCTYPE html>
<html lang="en">
<?php
include "header.php";
?>
   <body>
    <div class="py-1 bg-black top">
      <div class="container">
        <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
          <div class="col-lg-12 d-block">
            <div class="row d-flex">
              <div class="col-md pr-4 d-flex topper align-items-center">
                <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                <span class="text">+ 256 784 748 817 90</span>
              </div>
              <div class="col-md pr-4 d-flex topper align-items-center">
                <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
                <span class="text">info@rozaho.com</span>
              </div>
              <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right justify-content-end">
                <p class="mb-0 register-link"><span>Open hours:</span> <span>Tuesday - Sunday</span> <span>6:30AM - 11:00PM</span></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.php">ROZAHO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
            <li class="nav-item active"><a href="about.php" class="nav-link">About</a></li>
            <li class="nav-item"><a href="menu.php" class="nav-link">Menu</a></li>
            <li class="nav-item"><a href="blogg.php" class="nav-link">Blog</a></li>
            <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
            <li class="nav-item"><a href="curio.php" class="nav-link">Curio Shop</a></li>
            <li class="nav-item cta"><a href="reservation.php" class="nav-link">Book a table</a></li>
            <li class="nav-item"><a href="delivery.php" class="nav-link">Delivery</a></li>
            <li class="nav-item"><a href="shoppingcart/index.php" class="nav-link">Grocery Shopping</a></li>
          </ul>
        </div>
      </div>
    </nav>

        <section class="home-slider owl-carousel js-fullheight">
      <div class="slider-item js-fullheight" style="background-image: url(images/roz77.JPG);height:100vh;">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text js-fullheight justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-12 col-sm-12 text-center ftco-animate">
              <p><a href="delivery.php" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a href="menu.php" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
            </div>

          </div>
        </div>
      </div>

      <div class="slider-item js-fullheight" style="background-image: url(images/roz26.JPG);height:100vh;">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text js-fullheight justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-12 col-sm-12 text-center ftco-animate">
              <h1 class="mb-4 mt-5">The Best Place to Kick of Your Day</h1>
              <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
            </div>

          </div>
        </div>
      </div>

      <div class="slider-item js-fullheight" style="background-image: url(images/roz37.JPG);height:100vh;">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-12 col-sm-12 text-center ftco-animate">
              <h1 class="mb-4 mt-5">Creamy Hot and Ready to Serve</h1>
              <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
            </div>

          </div>
        </div>
      </div>
    </section>
    <section class="ftco-section ftco-no-pt ftco-no-pb">
      <div class="container-fluid px-0">
        <div class="row d-flex no-gutters">
          <div class="col-md-6 order-md-last ftco-animate makereservation p-4 p-md-5 pt-5">
            <div class="py-md-5">
              <div class="heading-section ftco-animate mb-5">
                <h2 class="mb-4">Make your order</h2>
              </div>
              <form action="deliver.php" method="POST">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="Name">Name</label>
                      <input type="text" name="Name" class="form-control" placeholder="Your Name">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="Email">Email</label>
                      <input type="text" name="Email" class="form-control" placeholder="Your Email">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Phone</label>
                      <input type="text" name="Phone" class="form-control" placeholder="Phone">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Date</label>
                      <input type="text" name="Date" class="form-control" id="book_date" placeholder="Date">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Time</label>
                      <input type="text" name="Time" class="form-control" id="book_time" placeholder="Time">
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                      <label for="Location">Location</label>
                      <input type="text" name="Location" class="form-control"  placeholder="Location">
                    </div>  
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="Service">service</label>
                      <input type="text" name="Service" class="form-control" placeholder="food/juice/snack">
                      <!--<div class="select-wrap one-third">
                        <!--<div class="icon"><span class="ion-ios-arrow-down"></span></div>
                        <!--<select name="Person" id="no_people" class="form-control">
                          <option value="">Person</option>
                          <option value="">1</option>
                          <option value="">2</option>
                          <option value="">3</option>
                          <option value="">4+</option>
                        </select> -->
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 mt-3">
                    <div class="form-group">
                      <input type="submit" name="Submit" value="Place order" class="btn btn-primary py-3 px-5">
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch pb-5 pb-md-0">
            <div id="map"></div>
          </div>
        </div>
      </div>
    </section>
<?php 
 include "footer.php";
 ?>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>