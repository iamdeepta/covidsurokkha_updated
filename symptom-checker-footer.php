<style type="text/css">

	button[name="btn_rate_us"]:focus{

               /*outline-color: #ffc700 !important;*/
               outline: 0 none;
               box-shadow: 0 1px 1px transparent inset, 0 0 8px transparent;
               border: 1px solid transparent !important;
               transition: 0.5s !important;
          

          }

	@media screen and (max-width: 460px) {

		#footer_part1{

			text-align: center !important;
		}

		.fb_icon{

			margin-left: 92px !important;
		}

		.btn_rate_us{

			margin-left: 92px !important;
			margin-top: 5px !important;
		}

		#footer_media_body{

			margin-left: -94px !important;
		}

		#footer_right_side_div{

			padding: 0px 10% !important;
			justify-content: space-between !important;
			margin-top: 50px !important;
			/*align-items: center !important;*/
			margin-bottom: 50px !important;
			width: 100% !important;
		}

		#footer_right_side_div_en{

			padding: 0px 10% !important;
			justify-content: space-between !important;
			margin-top: 50px !important;
			/*align-items: center !important;*/
			margin-bottom: 50px !important;
			width: 100% !important;
		}

		#footer_news_div{

			/*padding-left: 30vw !important;*/
		}

		#explore_txt1,#browse_txt1,#newest_txt2,#popular_txt2{

			font-size: 16px !important;
		}

		#fb_text_en{

			margin-left: 15px !important;
		}


	}
</style>

<?php 

if(isset($_POST['footer_section'])){

	include 'english_to_bangla.php';

  $output = '';

  

	$output .= '<div class="footer_widgets_area pad_top" style="background-color: #e8e8f0 !important;">
<div class="container">
<div class="row">

	<div class="col-lg-5 col-md-6 col-sm-6" id="footer_part1">
<aside class="f_widget about_widget">
<div class="f_title">
	
<h3>কোভিডসুরক্ষা</h3>

</div>
<p>
	
© '.BanglaConverter::en2bn(date(
	"Y")).' কোভিডসুরক্ষা সমস্ত অধিকার সংরক্ষিত। 

</p>

<p style="margin-top: -20px">আমাদের ফেসবুক এবং লিঙ্কডিন পেইজ ভিজিট করুন</p>

<div class="media" style="margin-top: -20px">
<div class="d-flex">

</div>
<div class="media-body" id="footer_media_body">
<a href="https://www.facebook.com/%E0%A6%95%E0%A7%8B%E0%A6%AD%E0%A6%BF%E0%A6%A1%E0%A6%B8%E0%A7%81%E0%A6%B0%E0%A6%95%E0%A7%8D%E0%A6%B7%E0%A6%BE-111592374520421" style="text-decoration: none;">
	<h6 class="notranslate" style="margin-left: 5px;font-size: 15px;color: #9491b0;"><span><i class="fab fa-facebook-square fb_icon" style="margin-top: 0px;color: #58547e;margin-right: 3px"></i></span>ফেসবুক: <span><span class="__cf_email__ notranslate" data-cfemail="f69e9fb693869f92939b9f95d8998491" style="color: #01cfbe;">কোভিডসুরক্ষা</span></span></h6>

</a>
<a href="https://www.linkedin.com/company/covid-surokkha/about/" style="text-decoration: none;">
	<h6 class="notranslate" style="margin-left: 5px;font-size: 15px;color: #9491b0;"><span><i class="fab fa-linkedin fb_icon" style="margin-top: 0px;color: #58547e;margin-right: 3px"></i></span>লিঙ্কডিন: <span><span class="__cf_email__ notranslate" data-cfemail="f69e9fb693869f92939b9f95d8998491" style="color: #01cfbe;">কোভিডসুরক্ষা</span></span></h6>

</a>

<button type="button" name="btn_rate_us" class="btn btn_rate_us" style="color: white;background-color: #01cfbe;border-radius: 6px;font-size: 12px;font-weight: bold;width: 40%;margin-top: 5px" onclick="btn_rate_us()">মতামত দিন <i class="fas fa-star footer-star" style="font-size: 14px;margin-left: 2px"></i></button>
</div>
</div>

</aside>
</div>';


$output .= '<div id="footer_right_side_div" class="" style="padding-left: 28%;display: flex;flex-direction: row;justify-content: space-around;">
		<div id="footer_guides_div">
		
		<a href="."><p id="explore_txt1" style="color: #58547e;font-size: 18px;font-weight: normal;">হোম</p></a>
		<a href="symptom-checker"><p id="browse_txt1" style="color: #58547e;font-size: 18px;font-weight: normal;">লক্ষণ পরীক্ষক</p></a>
		<a href="about-us"><p id="explore_txt1" style="color: #58547e;font-size: 18px;font-weight: normal;">আমাদের সম্পর্কে</p></a>
		</div>

		<div id="footer_news_div" style="padding-left: 90px">
		
		<a href="vaccine"><p id="popular_txt2" style="color: #58547e;font-size: 18px;font-weight: normal;">ভ্যাকসিন</p></a>
		<a href="blogs"><p id="popular_txt2" style="color: #58547e;font-size: 18px;font-weight: normal;">আমাদের ব্লগ</p></a>
		<a href="approved-laboratories"><p id="newest_txt2" style="color: #58547e;font-size: 18px;font-weight: normal;">টেস্ট সেন্টার</p></a>
		
		</div>


	</div>

</div>
</div>
</div>';



echo $output;


}
?>

<script type="text/javascript">
	function btn_rate_us(){

		$('.blur_bg_rating').css('display','block');
	        $('.rating_modal_card').addClass('active_rating_modal_card');
	        $('.rating_modal_card').removeClass('inactive_rating_modal_card');
	}

	if(localStorage.getItem('ratedIndex')!='' && localStorage.getItem('ratedIndex')!=null){

		$('.footer-star').css('color','#ffd04b');
	}else{
		$('.footer-star').css('color','white');
	}

</script>