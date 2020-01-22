<?php
include "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<title>Curio Shop</title>
<head>
    <style>
        /* The Image Box */
        div.img {
          border: 1px solid #ccc;
        }

        div.img:hover {
          border: 1px solid #777;
        }

        /* The Image */
        div.img img {
          width: 100%;
          height: auto;
          cursor: pointer;
        }

        /* Description of Image */
        div.desc {
          padding: 15px;
          text-align: center;
        }

        * {
          box-sizing: border-box;
        }

        /* Add Responsiveness */
        .responsive {
          padding: 0 6px;
          float: left;
          width: 24.99999%;
        }

        /* The Modal (background) */
        .modal {
          display: none; /* Hidden by default */
          position: fixed; /* Stay in place */
          z-index: 1; /* Sit on top */
          padding-top: 100px; /* Location of the box */
          left: 0;
          top: 0;
          width: 100%; /* Full width */
          height: 100%; /* Full height */
          overflow: auto; /* Enable scroll if needed */
          background-color: rgb(0,0,0); /* Fallback color */
          background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
        }

        /* Modal Content (image) */
        .modal-content {
          margin: auto;
          display: block;
          width: 80%;
          max-width: 700px;
        }

        /* Caption of Modal Image */
        #caption {
          margin: auto;
          display: block;
          width: 80%;
          max-width: 700px;
          text-align: center;
          color: #ccc;
          padding: 10px 0;
          height: 150px;
        }

        /* Add Animation */
        .modal-content, #caption {    
          -webkit-animation-name: zoom;
          -webkit-animation-duration: 0.6s;
          animation-name: zoom;
          animation-duration: 0.6s;
        }

        @-webkit-keyframes zoom {
          from {transform:scale(0)} 
          to {transform:scale(1)}
        }

        @keyframes zoom {
          from {transform:scale(0.1)} 
          to {transform:scale(1)}
        }

        /* The Close Button */
        .close {
          position: absolute;
          top: 15px;
          right: 35px;
          color: #f1f1f1;
          font-size: 40px;
          font-weight: bold;
          transition: 0.3s;
        }

        .close:hover,
        .close:focus {
          color: #bbb;
          text-decoration: none;
          cursor: pointer;
        }

        /* Responsive Columns */
        @media only screen and (max-width: 700px){
          .responsive {
              width: 49.99999%;
              margin: 6px 0;
          }
          .modal-content {
              width: 100%;
          }
        }

        @media only screen and (max-width: 500px){
          .responsive {
              width: 100%;
          }
        }

        /* Clear Floats */
        .clearfix:after {
          content: "";
          display: table;
          clear: both;
        }
        td {
          height: 50px;
          vertical-align: middle;
        }
    </style>
</head>

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
    <!-- END nav -->

    <table style="width:100%; border=0;">
     
      <?php 
        $images = scandir('curio/');
        $count = 0;
        $size = count($images);
      
       foreach ($images as $image){
        ?> <tr> <?php   

            for($i=0; $i<5; $i++) {
                  if($image !== "." && $image !== ".." ){?>
                  <td>
                    <div class="responsive">
                      <div width="300" height="200">
              <?php
                  echo "  <img src= 'curio/$image' style = 'max-width:17vw; max-height:17vw;'><br> 
                  </div>
                  </div>  
                  </td>";
                }
                $count++;
            }
        ?> </tr> <tr><td> </td></tr><?php  
      }
    ?>
    </table>

    <div class="clearfix"></div>

    <!-- The Modal -->
    <div id="myModal" class="modal">
      <img class="modal-content" id="img01">
      <div><h1 class="close">X</h1></div>
      <div id="caption"></div>
    </div>

    <script>
        // Get the modal
        var modal = document.getElementById('myModal');

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() { 
            modal.style.display = "none";
        }

        // Get all images and insert the clicked image inside the modal
        // Get the content of the image description and insert it inside the modal image caption
        var images = document.getElementsByTagName('img');
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        var i;
        for (i = 0; i < images.length; i++) {
           images[i].onclick = function(){
               modal.style.display = "block";
               modalImg.src = this.src;
               modalImg.alt = this.alt;
               captionText.innerHTML = this.nextElementSibling.innerHTML;
           }
        }
    </script>

    <?php include "footer.php"; ?>

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