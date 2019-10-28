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
	  <div class=" text-center">
	   <h1>BEYOND</h1>
     <h3>LOCKDOWN</h3>
     <hr class="style-one">
     <p class="header-text">Preventing and Responding to Extreme School Violence</p>
	   <!-- <h3 class="lead pb-4">By CPPS University</h3> -->
	   <a href="#" id="link_about" class="btn btn-md" role="button">About Us</a>
     <a href="#" id="elearning_link" class="btn btn-md" role="button">E-Learning</a>
  	 <a href="#" id="video_link" class="btn btn-md" role="button">Video</a>
	  </div>
	</header>

	<!-- About Us Section -->
  <div id="aboutus" class="row row_about">
    <div class="container">
      <div class="row">

        <!-- Left Column w/ Text -->
        <div class="col">
          <div class="row">
            <h2>Our Schools, Our Kids, Our Solution</h2>
          </div>
          <div class="row">
            <h2>The Problem</h2>
            <p>As school violence continues to spread across the country, lawmakers, school officials and students are looking for effective ways to confront this increasing risk. But the reality is that students don’t “just snap” and almost always there are warning signs that are observable on the path to violence…violence against others…or violence against self. These warning signs are opportunities to intervene if recognized early and responded to appropriately.</p>
          </div>
          <div class="row">
            <h2>The Solution</h2>
            <p>Because of this, CPPS has produced a new 15-minute video program, “Beyond Lockdown – Preventing and Responding to Extreme School Violence” This 15-minute program pulls from guidance from the FBI, Secret Service and Department of Education to educate students, parents, teachers and staff how to recognize warning signs that a student may be progressing towards violence, and how to respond effectively if violence does erupt.</p>
          </div>
        </div>

        <!-- Right Column w/ Images -->
        <div class="col">

        </div>
      </div>
    </div>
  </div>

  <div id="" class="row row_about_custom row_about_1">
    <div class="col-md-5">
      <h2>ABOUT</h2>
      <p>As school violence continues to spread across the country, lawmakers, school officials and students are looking for effective ways to confront this increasing risk. But the reality is that students don’t “just snap” and almost always there are warning signs that are observable on the path to violence…violence against others…or violence against self. These warning signs are opportunities to intervene if recognized early and responded to appropriately.</p>
    </div>
  </div>

  <div id="" class="row row_about_custom row_about_2">
    <div class="col-md-5 offset-md-7">
      <h2>FBI National Citizens Academy Alumni Association Fully Endorsed</h2>
      <p>“The purpose of this letter is to provide a full endorsement of your newly developed video: “Beyond Lockdown – Preventing and Responding to Extreme School Violence.” Our National Board found the video to be professionally filmed using believable student actors and a very credible storyline. The FBINCAAA is proud to provide this endorsement and is willing to assist in its distribution to as many schools in all our Fifty (50) States, as well as in Puerto Rico and Guam.”</p>
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
