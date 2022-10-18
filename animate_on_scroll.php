<?php 

if(isset($_POST['animate_on_scroll'])){

	$output = '';

	$output .= '<link href="assets/css/aos.css" rel="stylesheet">';

	$output .= '<script src="assets/js/aos.js"></script>

				<script>
				  AOS.init({
				  startEvent: "load",
				});
				</script>';


	echo $output;
}


?>