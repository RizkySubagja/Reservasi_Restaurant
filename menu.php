<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Appetizer </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Monoton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Miss+Fajardose&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="images/App.png" type="image/x-icon">
  </head>
  <body>
    <div class="py-1 bg-black top">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">+62 8965 1531 567</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">rizkyhasky81@gmail.com</span>
					    </div>
					    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right justify-content-end">
						    <p class="mb-0 register-link"><span>Open hours:</span> <span>Monday - Sunday</span> <span>8:00AM - 9:00PM</span></p>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">Appetizer</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
	        	<li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
	        	<li class="nav-item active"><a href="menu.php" class="nav-link">Menu</a></li>
	        	<li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
	          <li class="nav-item cta"><a href="reservation.php" class="nav-link">Book a table</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Our Specialties</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Menu <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
	
		<section class="ftco-section">
    	<div class="container-fluid px-4">
    		<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">Specialties</span>
            <h2 class="mb-4">Our Menu</h2>
          </div>
        </div>
        <div class="row">
        	<div class="col-md-6 col-lg-4 menu-wrap">
        		<div class="heading-menu text-center ftco-animate">
        			<h3>Breakfast</h3>
        		</div>
        		<div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url(images/breakfast-1.jpg);"></div>
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
                    <?php include 'admin/koneksi2.php';
                    $data = mysqli_query($koneksi1,"select * from menu");
                    while ($d = mysqli_fetch_array($data)){ 
                    ?>
	                  <h3><?php echo $d["nama"]; ?></h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price"><?php echo $d["harga"]; ?></span>
	                </div>
	              </div>
	              <p><span><?php echo $d["deskripsi"]; ?></span>></p>
              </div>
            </div>
          <?php } ?>
            <div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url(images/breakfast-2.jpg);"></div>
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>Grilled Crab with Onion</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">$29</span>
	                </div>
	              </div>
	              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
              </div>
            </div>
            <div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url(images/breakfast-3.jpg);"></div>
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>Grilled Crab with Onion</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">$29</span>
	                </div>
	              </div>
	              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
              </div>
            </div>
        	</div>

        	<div class="col-md-6 col-lg-4 menu-wrap">
        		<div class="heading-menu text-center ftco-animate">
        			<h3>Lunch</h3>
        		</div>
        		<div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url(images/lunch-1.jpg);"></div>
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>Grilled Beef with potatoes</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">$29</span>
	                </div>
	              </div>
	              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
              </div>
            </div>
            <div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url(images/lunch-2.jpg);"></div>
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>Grilled Crab with Onion</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">$29</span>
	                </div>
	              </div>
	              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
              </div>
            </div>
            <div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url(images/lunch-3.jpg);"></div>
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>Grilled Crab with Onion</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">$29</span>
	                </div>
	              </div>
	              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
              </div>
            </div>
        	</div>

        	<div class="col-md-6 col-lg-4 menu-wrap">
        		<div class="heading-menu text-center ftco-animate">
        			<h3>Dinner</h3>
        		</div>
        		<div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url(images/dinner-1.jpg);"></div>
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>Grilled Beef with potatoes</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">$29</span>
	                </div>
	              </div>
	              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
              </div>
            </div>
            <div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url(images/dinner-2.jpg);"></div>
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>Grilled Crab with Onion</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">$29</span>
	                </div>
	              </div>
	              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
              </div>
            </div>
            <div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url(images/dinner-3.jpg);"></div>
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>Grilled Crab with Onion</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">$29</span>
	                </div>
	              </div>
	              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
              </div>
            </div>
        	</div>

        	<!--  -->
        	<div class="col-md-6 col-lg-4 menu-wrap">
        		<div class="heading-menu text-center ftco-animate">
        			<h3>Desserts</h3>
        		</div>
        		<div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url(images/dessert-1.jpg);"></div>
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>Grilled Beef with potatoes</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">$29</span>
	                </div>
	              </div>
	              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
              </div>
            </div>
            <div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url(images/dessert-2.jpg);"></div>
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>Grilled Crab with Onion</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">$29</span>
	                </div>
	              </div>
	              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
              </div>
            </div>
            <div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url(images/dessert-3.jpg);"></div>
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>Grilled Crab with Onion</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">$29</span>
	                </div>
	              </div>
	              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
              </div>
            </div>
        	</div>
        	
        	<div class="col-md-6 col-lg-4 menu-wrap">
        		<div class="heading-menu text-center ftco-animate">
        			<h3>Wine Card</h3>
        		</div>
        		<div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url(images/wine-1.jpg);"></div>
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>Grilled Beef with potatoes</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">$29</span>
	                </div>
	              </div>
	              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
              </div>
            </div>
            <div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url(images/wine-2.jpg);"></div>
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>Grilled Crab with Onion</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">$29</span>
	                </div>
	              </div>
	              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
              </div>
            </div>
            <div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url(images/wine-3.jpg);"></div>
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>Grilled Crab with Onion</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">$29</span>
	                </div>
	              </div>
	              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
              </div>
            </div>
        	</div>

        	<div class="col-md-6 col-lg-4 menu-wrap">
        		<div class="heading-menu text-center ftco-animate">
        			<h3>Drinks</h3>
        		</div>
        		<div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url(images/drink-1.jpg);"></div>
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>Grilled Beef with potatoes</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">$29</span>
	                </div>
	              </div>
	              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
              </div>
            </div>
            <div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url(images/drink-2.jpg);"></div>
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>Grilled Crab with Onion</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">$29</span>
	                </div>
	              </div>
	              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
              </div>
            </div>
            <div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url(images/drink-3.jpg);"></div>
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>Grilled Crab with Onion</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">$29</span>
	                </div>
	              </div>
	              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
              </div>
            </div>
        	</div>
        </div>
    	</div>
    </section>


    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container-fluid px-md-5 px-3">
        <div class="row mb-5">
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Appetizer</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Open Hours</h2>
              <ul class="list-unstyled open-hours">
                <li class="d-flex"><span>Monday</span><span>9:00 - 24:00</span></li>
                <li class="d-flex"><span>Tuesday</span><span>9:00 - 24:00</span></li>
                <li class="d-flex"><span>Wednesday</span><span>9:00 - 24:00</span></li>
                <li class="d-flex"><span>Thursday</span><span>9:00 - 24:00</span></li>
                <li class="d-flex"><span>Friday</span><span>9:00 - 02:00</span></li>
                <li class="d-flex"><span>Saturday</span><span>9:00 - 02:00</span></li>
                <li class="d-flex"><span>Sunday</span><span> 9:00 - 02:00</span></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Newsletter</h2>
            	<p>Far far away, behind the word mountains, far from the countries.</p>
              <form action="#" class="subscribe-form">
                <div class="form-group">
                  <input type="text" class="form-control mb-2 text-center" placeholder="Enter email address">
                  <input type="submit" value="Subscribe" class="form-control submit px-3">
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Instagram</h2>
              <div class="thumb d-sm-flex">
	            	<a href="#" class="thumb-menu img" style="background-image: url(images/insta-1.jpg);">
	            	</a>
	            	<a href="#" class="thumb-menu img" style="background-image: url(images/insta-2.jpg);">
	            	</a>
	            	<a href="#" class="thumb-menu img" style="background-image: url(images/insta-3.jpg);">
	            	</a>
	            </div>
	            <div class="thumb d-flex">
	            	<a href="#" class="thumb-menu img" style="background-image: url(images/insta-4.jpg);">
	            	</a>
	            	<a href="#" class="thumb-menu img" style="background-image: url(images/insta-5.jpg);">
	            	</a>
	            	<a href="#" class="thumb-menu img" style="background-image: url(images/insta-6.jpg);">
	            	</a>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
  

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