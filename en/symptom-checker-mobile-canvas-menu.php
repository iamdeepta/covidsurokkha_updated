<style type="text/css">
	@media screen and (max-width: 460px) {

		.mobile_canvus_menu .menu_part_lux .menu_list li a{

			position: relative;
		    width: 100%;
		    border-bottom: 1px solid rgb(0.1,0.1,0.1,0.1);
		    padding: 10px;
		}

		.mobile_canvus_menu .menu_part_lux .menu_list li a:hover{

			background-color: #e7efee !important;
		}
	}
</style>
<?php

if (isset($_POST['mobile_side_menu'])) {
	
$output = '';


$output .= '<div class="close_btn" onclick="menu_is_closed()">
<img src="assets/images/icon/close-dark.png" alt="covidsurokkha">
</div>
<div class="menu_part_lux">
<img src="assets/images/logo.png" style="height: 22px;width: 190px;margin-top: -35px">
<ul class="menu_list wd_scroll">

<li style="margin-top: 0px">
	<a href="." title="Covid Symptom Checker" style="line-height: 22px"><span style="font-size: 15px"><i class="fas fa-home" style="color: #58547e;font-size: 14px;margin-right: 5px"></i>Home</span></a>

</li>


<li style="margin-top: 0px">
	<a href="vaccine" title="Covid Symptom Checker" style="line-height: 22px"><span style="font-size: 15px"><i class="fas fa-syringe" style="color: #58547e;font-size: 14px;margin-right: 5px"></i>Vaccine Information</span></a>

</li>


<li style="margin-top: 0px">
	<a href="symptom-checker" title="Covid Symptom Checker" style="line-height: 22px"><span style="font-size: 15px"><img src="assets/images/symptom-checker-logo.png" alt="covidsurokkha" style="width: 20px;height: 18px;margin-left: -1px" />COVID Symptom Checker</span></a>

</li>


<li style="margin-top: 0px">
	
	<a href="approved-laboratories" title="Approved Laboratories for International Travelling" style="line-height: 22px"><span style="font-size: 15px"><i class="fas fa-info-circle" style="color: #58547e;font-size: 14px;margin-right: 5px"></i>Covid Test Centres For <span style="margin-left: 20px">International Flights</span></span></a>

	
</li>


<li style="margin-top: 0px">
	<a href="blogs" title="Covid Symptom Checker" style="line-height: 22px"><span style="font-size: 15px"><i class="fas fa-blog" style="color: #58547e;font-size: 14px;margin-right: 5px"></i>Blogs</span></a>

</li>

<li style="margin-top: 0px">
	<a href="about-us" title="Covid Symptom Checker" style="line-height: 22px"><span style="font-size: 15px"><i class="fas fa-briefcase" style="color: #58547e;font-size: 14px;margin-right: 5px"></i>About Us</span></a>

</li>


</ul>
</div>
<div class="menu_btm" onclick="menu_is_closed()">
	
<a class="green_btn" href="https://www.facebook.com/%E0%A6%95%E0%A7%8B%E0%A6%AD%E0%A6%BF%E0%A6%A1%E0%A6%B8%E0%A7%81%E0%A6%B0%E0%A6%95%E0%A7%8D%E0%A6%B7%E0%A6%BE-111592374520421" target="_blank"><span style="margin-left: -10px;"><i class="fab fa-facebook-square" style="color: white"></i>Facebook</span></a>

</div>';


echo $output;
}