<?php 

if(isset($_POST['indexTrustedPartner'])){

	
	$lang = $_POST['lang'];

$output = '';

$output .= '<h5 id="trusted_partner_header" style="color: #01cfbe;font: 500 38px quicksand,sans-serif">Our Trusted Partners</h5>

	<div id="trusted_partner_div_pc" class="row" style="margin-top: 80px;margin-left: 50px">

		<div class="row col-md-6">
			<div class="col-md-5">
				<img src="assets/images/afiajalallogo.jpeg" style="height: 150px;width: 150px; border-radius: 50%;">
			</div>
			<div class="col-md-7" style="margin-top: 10px;margin-left: -40px">';

			if($lang=='en'){
				$output .= '<h4 style="font: 500 18px quicksand,sans-serif;text-align:left">Patients can enjoy 30% discounts on all services at Afia Jalal Foundation Clinic.</h4>';
			}else{

				$output .= '<h4 class="notranslate" style="font: 500 18px quicksand,sans-serif;text-align:left">আফিয়া জালাল ফাউন্ডেশন ক্লিনিকে সমস্ত পরিষেবাতে রোগীরা ৩০% ছাড় উপভোগ করতে পারবেন।</h4>';
			}

			$output .= '</div>
		</div>

		<div class="row col-md-6">
			<div class="col-md-5">
				<img src="assets/images/medinova.png" style="height: 150px;width: 180px; border-radius: 0%;margin-left: 30px">
			</div>
			<div class="col-md-7" style="margin-top: 10px;margin-left: -20px">';

			if($lang=='en'){
				$output .= '<h4 style="font: 500 18px quicksand,sans-serif;text-align:left">Enjoy 18% discount at all Medinova branches across the country. Contact for details.</h4>';
			}else{

				$output .= '<h4 class="notranslate" style="font: 500 18px quicksand,sans-serif;text-align:left">দেশের সমস্ত মেডিনোভা ব্রাঞ্চে ১৮% ছাড় উপভোগ করুন। বিস্তারিত জানতে যোগাযোগ করুন।</h4>';
			}

			$output .= '</div>
		</div>

	</div>


	<div id="trusted_partner_div_mbl" class="row" style="margin-top: 40px;display: none">
		<div class="col-md-12">
		<div class="row">
			<div class="col-sm-3" style="width: auto">
				<img src="assets/images/afiajalallogo.jpeg" style="height: 90px;width: 90px; border-radius: 50%;">
			</div>
			<div class="col-sm-9" style="margin-top: 10px;margin-left: -15px;width: 67%;float: right;">';

			if($lang=='en'){
				$output .= '<h4 style="font: 500 15px quicksand,sans-serif;text-align: left">Patients can enjoy 30% discounts on all services at Afia Jalal Foundation Clinic.</h4>';

			}else{

				$output .= '<h4 class="notranslate" style="font: 500 15px quicksand,sans-serif;text-align: left">আফিয়া জালাল ফাউন্ডেশন ক্লিনিকে সমস্ত পরিষেবাতে রোগীরা ৩০% ছাড় উপভোগ করতে পারবেন।</h4>';
			}

			$output .= '</div>
		</div>

		<div class="row" style="margin-top: 25px">
			<div class="col-sm-3" style="width: auto">
				<img src="assets/images/medinova.png" style="height: 80px;width: 90px; border-radius: 0%;">
			</div>
			<div class="col-sm-9" style="margin-top: 10px;margin-left: -15px;width: 67%;float: right;">';

			if($lang=='en'){
				$output .= '<h4 style="font: 500 15px quicksand,sans-serif;text-align: left;">Enjoy 18% discount at all Medinova branches across the country. Contact for details.</h4>';

			}else{

				$output .= '<h4 class="notranslate" style="font: 500 15px quicksand,sans-serif;text-align: left;">দেশের সমস্ত মেডিনোভা ব্রাঞ্চে ১৮% ছাড় উপভোগ করুন। বিস্তারিত জানতে যোগাযোগ করুন।</h4>';
			}

			$output .= '</div>
		</div>
		</div>
	</div>';


	echo $output;

}


	?>