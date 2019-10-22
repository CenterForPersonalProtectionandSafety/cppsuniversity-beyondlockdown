<?php
require_once '../users/init.php';
require_once $abs_us_root.$us_url_root.'users/includes/template/prep.php';
if(isset($user) && $user->isLoggedIn()){
}
//Redirect user on first login if haven't reset password
if($user->data()->first_login_pass_reset == 0) {
  Redirect::to($us_url_root.'usersc/user_settings.php');
}

?>

	<!-- Hero Banner Welcome Section -->
	<header id="hero-section"class="jumbotron jumbotron-fluid hero">
	  <div class="container-fluid text-center">
	   <h3>WELCOME TO</h3>
	   <h1>BEYOND LOCKDOWN</h1>
	   <h3 class="lead pb-4">By CPPS University</h3>
	   <a href="#" id="link_about" class="btn btn-md" role="button">About Us</a>
     <a href="#" id="elearning_link" class="btn btn-md" role="button">E-Learning</a>
  	 <a href="#" id="video_link" class="btn btn-md" role="button">Video</a>
	  </div>
	</header>

	<!-- About Us Section -->
	<div id="aboutus" class="row">
	  <div class="col-xl custom-col">
	    <div class="container">
	      <h2 class="display-4 text-center mt-5 mb-3">Who We Are?</h2>
	      <hr>
	      <p class="sec-description">CPPS is the leading developer and provider of scalable training and consulting solutions in the U.S. for Workplace Violence Prevention, Active Shooter Response, and International Travel Safety. CPPS has worked together with thousands of organizations large and small.</p>
	    </div>
	    <div class="wrapper">
	      <div class="aboutcard">
	          <input type="checkbox" class="more" aria-hidden="true">
	          <div class="content">
	              <div class="front" style="background-image: url('/usersc/images/aboutus/company.png')">
	                  <div class="inner">
	                      <h4>50% of Fortune 100 corporations</h4>
	                  </div>
	              </div>
	          </div>
	      </div>
	      <div class="aboutcard">
	          <input type="checkbox" class="more" aria-hidden="true">
	          <div class="content">
	              <div class="front" style="background-image: url('/usersc/images/aboutus/university.png')">
	                  <div class="inner">
	                      <h4>1600 colleges and universities</h4>
	                  </div>
	              </div>
	          </div>
	      </div>
	      <div class="aboutcard">
	          <input type="checkbox" class="more" aria-hidden="true">
	          <div class="content">
	              <div class="front" style="background-image: url('/usersc/images/aboutus/hospital.png')">
	                  <div class="inner">
	                      <h4>2000 hospitals & many non-profit organizations</h4>
	                  </div>
	              </div>
	          </div>
	      </div>
	    </div>
	    <div class="text-center">
	      <a href="#" id="elearn_sec_link" class="sec-btn btn-md" role="button"><i class="fa fa-arrow-down"></i></a>
	    </div>
	  </div>
	</div>


	<!-- BL E-Learning Section-->
	<div id="elearning" class="row">
	  <div class="col-xl custom-col">
	    <div class="container">
	      <h2 class="display-4 text-center mt-5 mb-3">Beyond Lockdown E-Learning</h2>
	      <hr>
	      <p class="sec-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
	    </div>
	    <div class="wrapper">
	      <?php
	          // -- card_flip
	          //Include BL E-Learning
	          include $abs_us_root.$us_url_root.'courses/ELearning/cards/ELearning_Card.php';

	       ?>
	    </div>
	    <div class="text-center">
	      <a href="#" id="video_sec_link" class="sec-btn btn-md" role="button"><i class="fa fa-arrow-down"></i></a>
	    </div>
	  </div>
	</div>

	<!-- BL Video Section-->
	<div id="video" class="row">
	  <div class="col-xl custom-col">
	    <div class="container">
	      <h2 class="display-4 text-center mt-5 mb-3">Beyond Lockdown Video</h2>
	      <hr>
	      <p class="sec-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
	    </div>
	    <div class="wrapper">
	      <?php
	          // -- card_flip
	          //Include BL Video
	          include $abs_us_root.$us_url_root.'courses/Video/cards/Video_Card.php';

	       ?>
	    </div>
	    <div class="text-center">
	      <a href="#" id="to_top_link" class="sec-btn btn-md" role="button"><i class="fa fa-arrow-up"></i></a>
	    </div>
	  </div>
	</div>


<?php  languageSwitcher();?>
<!-- Place any per-page javascript here -->
<?php require_once $abs_us_root . $us_url_root . 'users/includes/html_footer.php'; ?>
