<?php 

if(isset($_POST['header_logo'])){

	include 'english_to_bangla.php';

  $output = '';

  


	$output .= '<a class="navbar-brand" href=".">
	<span style="font-size: 28px;font-weight:bold;color: white"><img id="covidshebalogos" src="assets/images/logo.png" style="width: 250px;height: 30px;" alt="covidsurokkha"></span></a>';


echo $output;


}