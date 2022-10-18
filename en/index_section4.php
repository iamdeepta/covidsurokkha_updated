<link rel="stylesheet" href="assets/vendors/animate-css/animate.css" />
<?php 

if(isset($_POST['check_now_section'])){

	include 'english_to_bangla.php';

	$lastSegment = $_POST['lang'];


	$output = '';

	
		
		$output .= '<div class="container">
<div class="row m-0 justify-content-between">
<div class="left">
<div class="media">
<div class="d-flex">
<img src="assets/images/check-1.webp" alt="corona latest update" />
<img src="assets/images/check-2.webp" alt="coronavirus latest update" />
<img src="assets/images/check-3.webp" alt="bangladesh corona" />
</div>
<div id="check_now_text" class="media-body">
<h4 >Think you might be affected?</h4>
<p >
Try our simple coronavirus checker to find out what you need
to do.
</p>
</div>
</div>
</div>
<div class="right" id="check_now_button">
<a class="icon_btn" href="symptom-checker.php">
		<span>Check now</span>
		<i class="linearicons-arrow-right"></i></a>
 </div>
</div>
</div>';

	


	echo $output;
}


?>



<!-- <a class="icon_btn wow fadeInRight" data-wow-delay="400ms" href="symptom-checker.php?lang=bn"> -->
