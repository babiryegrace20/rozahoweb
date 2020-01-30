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
          width: 100%;
          height: 100%;
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
        
        #imagecontainer{
          height: 400px;
          width: 600px;
          position: relative;
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
          right: 35px;
          color: #f1f1f1;
          font-size: 40px;
          font-weight: bold;
          transition: 0.3s;
          position: absolute;
          top: 5px;
          right: 10px;
          z-index: 1

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

      <div id="imagecontainer">
        <h1 class="close">X</h1>
        <img class="modal-content" id="img01">
      </div>
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