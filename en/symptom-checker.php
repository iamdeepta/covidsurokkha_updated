<?php 

require('../admin/db.inc.php');
    

    //$doctor_query = mysqli_query($dbc, "SELECT * from tbl_doctors where doctor_remove_status=0 order by doctor_id asc");

    include 'english_to_bangla.php';

?>
<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">

<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-ESJ54C44Q4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-ESJ54C44Q4');
</script>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta name="description" content="Check your symptoms with a modern covid surokkha symptom checker to reduce the risk of being infected by covid. Input your covid symptoms now.">
<meta name="keywords" content="covid surokkha, covid surokkha, Covidsurokkha, covid, surokkha, surokkha bd, surokkha app bangladesh, surokkha app bd, covid cases, covid deaths, hospital beds availability, icu beds, general beds, ambulance service, COVID-19, covid centre, covid hospital bed availability, total icu beds in bangladesh, covid19health, covid bed status, surokkha covid, covid hospital bed list, covid hospital bed near me, max hospital covid bed availability, covid ambulance number, covid ambulance near me, covid and ambulance, covid ambulance contact number, covid ambulance cost, ambulance for covid patient, covid ambulance helpline, covid test centres near me, covid test centres in dhaka, covid test centres around me, are the covid test centres open, is there a covid 19 testing centre near me, covid govt test centres near me, government approved covid test centres near me, government approved covid test centres in bangladesh, government covid test centres in dhaka, covid private test centres near me, government approved private covid test centres, coronavirus private test centre near me, surokkha covid bd, covid-19 surokkha.gov.bd, surokkha for covid test, surokkha app for covid 19 in bd, covid surokkha kit, surokkha covid report, covid symptom checker, covid symptom checker app, covid 19 symptom checker, symptoms check for covid, covid death in bangladesh, covid death today, covid death in bangladesh today, covid death bd, covid death cases in bangladesh, covid cases bangladesh, covid cases in bangladesh today, covid cases today, covid cases bangladesh today, covid cases bangladesh yesterday, covid cases bangladesh death, covid hospital icu beds, covid hospital icu bed availability, covid hospital bed capacity, test centres for international flights, what happens in icu for covid, covid ambulance location in dhaka, covid ambulance in bangladesh, covid hospital phone number, covid ambulance phone number, surokkha for covid patients, how to get covidsurokkha app, covidsurokkha.com, surokkha for people in bangldesh">
<meta name="author" content="covidsurokkha">
<meta property="og:description" content="Check your symptoms with a modern covid surokkha symptom checker to reduce the risk of being infected by covid. Input your covid symptoms now.">
<meta property="og:image" content="assets/images/covidsurokkha.png" />
<meta property="og:url" content="https://covidsurokkha.com/en/symptom-checker" />
<meta property="og:title" content="Covid Surokkha Symptom Checker: Reduce Covid Affected Risk" />
<meta property="twitter:description" content="Check your symptoms with a modern covid surokkha symptom checker to reduce the risk of being infected by covid. Input your covid symptoms now.">
<meta property="twitter:image" content="assets/images/covidsurokkha.png" />
<meta property="twitter:url" content="https://covidsurokkha.com/en/symptom-checker" />
<meta property="twitter:title" content="Covid Surokkha Symptom Checker: Reduce Covid Affected Risk" />
<meta name="google-site-verification" content="E2zxAXI-DAfIdeJU5hy1trrKCWqQdqTfcaPSf9NTpVU" />

<link rel="icon" href="assets/images/onlylogo.png" type="image/png" />
<link rel="apple-touch-icon" href="assets/images/onlylogo.png"/>

<link rel="canonical" href="https://covidsurokkha.com/en/symptom-checker" />
<title class="notranslate">Covid Surokkha Symptom Checker: Reduce Covid Affected Risk</title>


<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
<link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css" />
<link rel="stylesheet" href="assets/vendors/linearicons/css/linearicons.css" />
<link rel="stylesheet" href="assets/vendors/mCustomScrollbar/jquery.mCustomScrollbar.min.css" />
<link rel="stylesheet" href="assets/vendors/animate-css/animate.css" />

<link href="assets/vendors/taging-js/tagsinput.css" rel="stylesheet" />
<link href="assets/vendors/nice-selector/css/nice-select.css" rel="stylesheet" />

<link rel="stylesheet" href="assets/css/style.css" />
<link rel="stylesheet" href="assets/css/responsive.css" />

<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />

  <!-- aos css-->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<style type="text/css">

	body{

		top: 0px !important;
	}

	.doctors_item{

		height: 500px;
	}

	#shiva
{
  width: 100px;
	height: 100px;
	background: red;
	-moz-border-radius: 50px;
	-webkit-border-radius: 50px;
	border-radius: 50px;
  float:left;
  margin:5px;
}

	canvas{

		display: none !important;
	}

	.goog-te-banner-frame{

		visibility: hidden !important;
		display: none !important;
	}

	.skiptranslate{

		display: none !important;
	}

	.form-control{
	border-bottom-color: #fff !important;
    color: #fff !important;
    padding: 10px !important;

    border-radius: 0 !important;
    box-shadow: none !important;
    font-weight: 500 !important;
    font-size: 16px !important;
    border: 0 !important; 
    border-bottom: 2px solid #fff !important;
    position: relative !important;
    z-index: 1 !important;
    width: 100% !important;
    background: 0 0 !important;

}
::placeholder{

	color: #c0bdd3 !important;
	opacity: 1 !important;
}

.checker_form .button{

	margin-top: 0px !important;
	margin-left: 15px !important;
}

.row{

	margin-top: 0px !important;
}

input[type=checkbox] + label {
  display: block;
  margin: 0em;
  cursor: pointer;
  padding: 0em;
}

input[type=checkbox] {
  display: none;
}

input[type=checkbox] + label:before {
  content: "\2713";
  border: 0.1em solid #fff;
  border-radius: 0.2em;
  display: inline-block;
  width: 1.7em;
  height: 1.7em;
  padding-left: 0.2em;
  padding-bottom: 0.3em;
  margin-right: 0.2em;
  vertical-align: middle;
  color: transparent;
  transition: .2s;
}

input[type=checkbox] + label:active:before {
  transform: scale(0);
}

input[type=checkbox]:checked + label:before {
  background-color: #01cfbe;
  border-color: #01cfbe;
  color: #fff;
}

input[type=checkbox]:disabled + label:before {
  transform: scale(1);
  border-color: #fff;
}

input[type=checkbox]:checked:disabled + label:before {
  transform: scale(1);
  background-color: #bfb;
  border-color: #bfb;
}


.doctors_item .doctors_img{

		padding-top: 0px !important;
	}

	.doctors_item .doctors_text{

		padding: 10px 15px !important;
	}


	@media screen and (max-width: 460px) {

		.mobile_canvus_menu .menu_part_lux .menu_list li a i{

			position: inherit !important;
		}
  

		#header_menu_bar1{

			display: block !important;
		}

		#covidshebalogos{

		height: 23px !important;
		width: 200px !important;
		margin-top: 6px !important;
		margin-bottom: 10px !important;
	}

	#covidshebalogos_bangla{

		height: 28px !important;
		width: 157px !important;
		margin-top: 6px !important;
		margin-bottom: 10px !important;
	}

	#covidlogo{

		font-size: 24px !important;
	}

		#mbl_lang{

			display: block !important;
		}

		#search_header{

			display: none !important;
		}

		#call_doctor_now_section{

			padding-top: 1px !important;
			padding-bottom: 20px !important;
			display: none !important;

		}

		#call_doctor_now_section1{

			padding-top: 1px !important;
			padding-bottom: 14px !important;
			display: block !important;

		}

		#call_doctor_now_section1 .right{

			margin-top: 0px !important;
		}

		.doctors_item .doctors_img{

			min-height: 150px !important;
			background: white !important;

		}

		.doctors_item{

			max-width: 220px !important;
		}

		#doc_img{

			height: 150px !important;
		}

		#basic_details{

			margin-top: 20px !important;
		}


		#fill_the_simple_form_text{

			margin-top: -30px !important;
		}

		#fill_the_simple_form_below_text{

			font-size: 22px !important;
		}

		#footer_part1{

			margin-bottom: 0px !important;
		}

		#footer_part3{

			margin-bottom: 0px !important;
		}

		#discount_text{

		width: 57% !important;
		margin-left: -30px !important;
		
		}

		#afialogo{

			width: 25% !important;
		}

		#main_symptoms_div{

			margin-bottom: 0px !important;
		}

		#other_symptoms_div{

			margin-bottom: 0px !important;
		}

		.doctors_item{

		height: auto !important;
	}
		/*#symptom_card1{

			height: 250px !important;
		}

		#symptom_card2{

			height: 185px !important;
		}

		#symptom_card3{

			height: 250px !important;
		}

		#symptom_card4{

			height: 250px !important;
		}*/
}


</style>


<link rel="alternate" hreflang="bn" href="https://covidsurokkha.com/symptom-checker"/>
<link rel="alternate" hreflang="en" href="https://covidsurokkha.com/en/symptom-checker"/>

</head>
<body data-scroll-animation="true">
<div class="body_wrapper" id="body_wrapper" style="background-color: #f5f5f9">

	
	<span class="notranslate" style="height:200px;margin-top:-200px;display:block;visibility:hidden"><h1 style="font-weight: bold;">Reduce Covid Affected Risk by Covid Surokkha Symptom Checker</h1><a href="https://covidsurokkha.com/">কোভিড সুরক্ষা</a></span>

	<span style="height:200px;margin-top:-200px;display:block;visibility:hidden"><p>Check your symptoms with a modern <a href="https://covidsurokkha.com/en/">covid surokkha</a> symptom checker to reduce the risk of being infected by covid. Input your covid symptoms now.</p></span>


<!-- <div class="preloader">
<div class="three-bounce">
<div class="one"></div>
<div class="two"></div>
<div class="three"></div>
</div>
</div> -->

<?php //include 'change_language.php';?>

<?php //include 'mobile_canvas_menu.php';?>
<div class="mobile_canvus_menu notranslate" id="mobile_side_menu">

</div>

<span id="gt"></span>


<div class="body_capture"></div>
<?php include 'sidebar.php';?>


<?php include 'header_white1.php';?>


<section class="breadcrumb_area dark_breadcrumb" id="top_section">
<!-- <img class="tp_img" src="assets/images/breadcrumb/checker-banner-map.png" alt=""> -->
<div class="container">
<div class="breadcrumb_text notranslate" id="top_text" data-aos="fade-down" data-aos-duration="1000">



</div>
<div class="row checker_box_inner">
<div class="col-lg-6">
<div class="checker_simple_text notranslate" id="fill_the_simple_form_text" data-aos="fade-right" data-aos-duration="1000"> 


</div>
</div>
<div class="col-lg-6">
<div class="checker_form" id="basic_details" data-aos="fade-left" data-aos-duration="1000">
<div class="notranslate" id="basic_details_inside">


</div>
</div>

<div class="checker_form notranslate" id="symptoms1" style="display: none;">


</div>


<div class="checker_form notranslate" id="symptoms2" style="display: none;">


</div>


<div class="checker_form notranslate" id="radio1" style="display: none;">

</div>
</div>
</div>
</div>

</section>




<section class="result_area" id="result_area">

	<div class="container">
<div class="row" style="margin-top: -20px !important;">
<div class="col-lg-4">
<div class="result_box" id="result_box" style="background-color: #e8e8f3" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="1000">
	<div id="result_box_inside">
		
<h4>Results</h4>

<ul class="nav flex-column">
	<table class="table">
		
		<tbody>
			<tr>
				<td>Name:</td>
				
				<td style="color: #01cfbe;font-weight: bold" id="user_name">N/A</td>
			</tr>

			<tr>
				<td>Main Symptoms:</td>
				
				<td style="color: #01cfbe;font-weight: bold" id="m_symptoms">N/A</td>
			</tr>

			<tr>
				<td>Other Symptoms:</td>
				
				<td style="color: #01cfbe;font-weight: bold" id="o_symptoms">N/A</td>
			</tr>
		</tbody>

	</table>

</ul>
<div class="circle_inner" style="border-radius: 50%;background-color: white;height: 150px;width: 150px;box-shadow: 0px 0px 2px 0px ;">
<div class="second circle" style="text-align: center;padding-top: 40%">


<span id="count" class="count" style="font-size: 20px;font-weight: bold">N/A</span>


</div>
</div>

</div>
</div>

</div>

<div class="col-lg-8">
<div class="result_inner_text">
<div class="result_item" id="result_item" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="1000">
	
<h4 id="hi_name">Our Advice</h4>
<p id="hi_text">Please provide all the information asked above to have covid-19 result and advices. Thank you.</p>

</div>
<div class="result_item" id="our_advice" style="display: none" data-aos="fade-left" data-aos-duration="1000">
<h3 id="our_advice_header"></h3>
<p id="our_advice_text11"><span style="color: #26b864;"><!-- ✓ --> </span><span id="our_advice_text1"></span></p>
<p id="our_advice_text22"><span style="color: #26b864;"><!-- ✓ --> </span><span id="our_advice_text2"></span></p>
<p id="our_advice_text33"><span style="color: #26b864;"><!-- ✓ --> </span><span id="our_advice_text3"></span></p>
<p id="our_advice_text44"><span style="color: #26b864;"><!-- ✓ --> </span><span id="our_advice_text4"></span></p>
<p id="our_advice_text55"><span style="color: #26b864;"><!-- ✓ --> </span><span id="our_advice_text5"></span></p>
<p id="our_advice_text66"><span style="color: #26b864;"><!-- ✓ --> </span><span id="our_advice_text6"></span></p>
<p id="our_advice_text77"><span style="color: #26b864;"><!-- ✓ --> </span><span id="our_advice_text7"></span></p>
</div>
<div class="result_item" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="1000">


<a class="green_btn" id="check_btn" href="#top_section">Check First</a>

</div>
</div>


</div>
</div>
</div>

</section>



<section id="doctors_section">
	
</section>




<?php //include 'footer.php';?>
<footer class="footer_area notranslate" id="footer_section" style="margin-top: 60px;" data-aos="fade-up" data-aos-duration="1000"></footer>

</div>





<script src="assets/js/jquery-3.4.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/vendors/corona-live/dashboard.js"></script>
<script src="assets/vendors/isotop/imagesloaded.pkgd.min.js"></script>
<script src="assets/vendors/isotop/isotope.pkgd.min.js"></script>
<script src="assets/vendors/slick/slick.min.js"></script>
<script src="assets/vendors/scroll-animation/jquery.parallax-scroll.js"></script>
<script src="assets/vendors/taging-js/tagsinput.js"></script>
<script src="assets/vendors/nice-selector/js/jquery.nice-select.min.js"></script>
<script src="assets/vendors/counterup/jquery.waypoints.min.js"></script>
<script src="assets/vendors/circle-progress/circle-progress.min.js"></script>
<script src="assets/vendors/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="assets/vendors/animate-css/wow.min.js"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCEQhXdvO2Yz16kSBaeBzLt7wWRkECXmlg"></script>
<script src="assets/js/gmaps.min.js"></script>
<script src="assets/js/map-active.js"></script>
<script src="assets/js/circle-progress.js"></script>
<script src="assets/js/jquery.validate.min.js"></script>
<script src="assets/js/theme.js"></script>

<!-- aos js -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<!-- aos initialization -->
<script>
  AOS.init({
  startEvent: 'load',
});
</script>


<!-- menu active change -->
<script type="text/javascript">
  $(function(){
    $('.navbar-nav .nav-link').filter(function(){return this.href==location.href}).parent().addClass('active').siblings().removeClass('active')
    $('.navbar-nav .dropdown-item').filter(function(){return this.href==location.href}).parent().parent().addClass('active').siblings().removeClass('active')
    $('.navbar-nav .dropdown-item').filter(function(){return this.href==location.href}).addClass('active').siblings().removeClass('active')
    $('.navbar-nav a').click(function(){
      $(this).parent().addClass('active').siblings().removeClass('active')  
    })
    
  })
  </script>

  <?php include 'master_searchbar.php';?>

  <div id="rating_section" class="notranslate"></div>

  <?php include 'header_scroll_indicator_js.php';?>


<script type="text/javascript">

	var numbers = {
  0: '০',
  1: '১',
  2: '২',
  3: '৩',
  4: '৪',
  5: '৫',
  6: '৬',
  7: '৭',
  8: '৮',
  9: '৯'
};

function replaceNumbers(input) {
  var output = [];
  for (var i = 0; i < input.length; ++i) {
    if (numbers.hasOwnProperty(input[i])) {
      output.push(numbers[input[i]]);
    } else {
      output.push(input[i]);
    }
  }
  return output.join('');
}

function replaceString(str){

	dhaka_str = str.replace("Dhaka","ঢাকা");

	return dhaka_str;
}

/*document.getElementById('r').textContent = replaceNumbers('৯  ৭  ৩');*/

//getting url last string
 var url = window.location.href;
 var parts = url.split('=');
var lastSegment = parts.pop() || parts.pop();

		$(document).ready(function(){

			//googleTranslator();

		$(".check_now_button").mouseover(function(){

	


  		$("#call_now").html('+8801762576865');
  		

  	
  	});

$(".check_now_button").mouseout(function(){

	


  		$("#call_now").html('Call Now<i class="linearicons-phone"></i>');
  		

  	

  		
  	});

//googleTranslator();


		});

function none_of_the_above1_checked(){

	var none_of_the_above1 = document.getElementById("none_of_the_above1");
	var dry_cough = document.getElementById("dry_cough");
	var difficulty_in_breathing = document.getElementById("difficulty_in_breathing");
	var fever = document.getElementById("fever");
	var tiredness = document.getElementById("tiredness");
	var loss_of_taste_or_smell = document.getElementById("loss_of_taste_or_smell");

		if(none_of_the_above1.checked==true){

				dry_cough.checked=false;
				dry_cough.disabled='disabled';
				difficulty_in_breathing.checked=false;
				difficulty_in_breathing.disabled='disabled';
				fever.checked=false;
				fever.disabled='disabled';
				tiredness.checked=false;
				tiredness.disabled='disabled';
				loss_of_taste_or_smell.checked=false;
				loss_of_taste_or_smell.disabled='disabled';

			}else{


				dry_cough.disabled=false;
				
				difficulty_in_breathing.disabled=false;
				
				fever.disabled=false;
			
				tiredness.disabled=false;
				
				loss_of_taste_or_smell.disabled=false;
			}
			}


	function none_of_the_above2_checked(){

	var none_of_the_above2 = document.getElementById("none_of_the_above2");
	var body_aches = document.getElementById("body_aches");
	var nasal_congestion = document.getElementById("nasal_congestion");
	var runny_nose = document.getElementById("runny_nose");
	var sore_throat = document.getElementById("sore_throat");
	var headache = document.getElementById("headache");

		if(none_of_the_above2.checked==true){

				body_aches.checked=false;
				body_aches.disabled='disabled';
				nasal_congestion.checked=false;
				nasal_congestion.disabled='disabled';
				runny_nose.checked=false;
				runny_nose.disabled='disabled';
				sore_throat.checked=false;
				sore_throat.disabled='disabled';
				headache.checked=false;
				headache.disabled='disabled';

			}else{


				body_aches.disabled=false;
				
				nasal_congestion.disabled=false;
				
				runny_nose.disabled=false;
			
				sore_throat.disabled=false;
				
				headache.disabled=false;
			}
			}


	function submit_basic_details(){

		if($("#full_name").val()!=''){


		$("#basic_details").css("display","none");
		$("#symptoms1").css("display","block");
		$("#symptoms1").addClass("animate__animated animate__fadeInRight");

		$("#progress_bar").css("width","40%");
		$("#progress_bar").css("transition","0.2s");

	}else{

		$("#error_msg").css('display','block');
	}
	}


	function symptoms1(){

		var main_symptoms = [];
		$(".main_symptoms").each(function(){

			if ($(this).is(":checked")) {

				main_symptoms.push($(this).val());
			}
		});

		main_symptoms = main_symptoms.toString();

		if(main_symptoms!=''){

		$("#symptoms1").css("display","none");
		$("#symptoms2").css("display","block");
		$("#symptoms2").addClass("animate__animated animate__fadeInRight");

		$("#progress_bar").css("width","60%");
		$("#progress_bar").css("transition","0.2s");

	}else{

		$("#error_msg1").css("display","block");
	}
	}


	function symptoms2(){

		var other_symptoms = [];
		$(".other_symptoms").each(function(){

			if ($(this).is(":checked")) {

				other_symptoms.push($(this).val());
			}
		});

		other_symptoms = other_symptoms.toString();

		if (other_symptoms!='') {
		$("#symptoms2").css("display","none");
		$("#radio1").css("display","block");
		$("#radio1").addClass("animate__animated animate__fadeInRight");

		$("#progress_bar").css("width","80%");
		$("#progress_bar").css("transition","0.2s");

		}else{

			$("#error_msg2").css("display","block");
		}
	}


	//confirming
	function confirm(){

		//googleTranslator();


		var full_name = $("#full_name").val();
		var mobile_number = $("#mobile_number").val();



		var main_symptoms = [];
		$(".main_symptoms").each(function(){

			if ($(this).is(":checked")) {

				main_symptoms.push($(this).val());
			}
		});

		main_symptoms_array = main_symptoms;
		main_symptoms = main_symptoms.toString();

		//console.log(main_symptoms_array.length);




		var other_symptoms = [];
		$(".other_symptoms").each(function(){

			if ($(this).is(":checked")) {

				other_symptoms.push($(this).val());
			}
		});

		other_symptoms_array = other_symptoms;
		other_symptoms = other_symptoms.toString();




		var red_zone = [];

		$('input[name="red_zone"]').each(function(){

			if ($(this).is(":checked")) {

				red_zone.push($(this).val());
			}
		});

		red_zone = red_zone.toString();




		var healthcare = [];

		$('input[name="healthcare"]').each(function(){

			if ($(this).is(":checked")) {

				healthcare.push($(this).val());
			}
		});

		healthcare = healthcare.toString();



		var positive = [];

		$('input[name="positive"]').each(function(){

			if ($(this).is(":checked")) {

				positive.push($(this).val());
			}
		});

		positive = positive.toString();



		var condition = [];

		$('input[name="condition"]').each(function(){

			if ($(this).is(":checked")) {

				condition.push($(this).val());
			}
		});

		condition = condition.toString();


		function displayAdviceForLow(){

		//googleTranslator();

		
			$('#hi_name').html('Hello '+full_name+',');
			$('#hi_text').html('Don’t worry! According to our assessment, your risk of contracting the virus is low. However, in the wake of the emergence of the Corona case in Bangladesh, you should follow the guidelines given below.');

			$("#check_btn").css("display","none");

			$("#our_advice").css("display","block");
			$("#our_advice_header").html("Our advice is as below:");
			$("#our_advice_text1").html("* Stay at home");
			$("#our_advice_text2").html("* Wash your hands frequently with soap and water for at least thirty seconds, cleaning your hands and arms");
			$("#our_advice_text3").html("* Monitor the symptoms; if they increase or any of the other symptoms arise, then visit a medical practitioner who will advise you whether you need a test");
			$("#our_advice_text4").html("* Eat nutrious, stay tension free and do mild exercises at home to stay active!");

	


			$("#our_advice_text11").css("display","block");
			$("#our_advice_text22").css("display","block");
			$("#our_advice_text33").css("display","block");
			$("#our_advice_text44").css("display","block");
			$("#our_advice_text55").css("display","none");
			$("#our_advice_text66").css("display","none");
			$("#our_advice_text77").css("display","none");



		}
		


		function displayAdviceForMedium(){

			

			$('#hi_name').html('Hello '+full_name+',');
			$('#hi_text').html('As per our assessment, please continue to self-quarantine at home, monitor your symptoms and follow the given guidelines below.');

			$("#check_btn").css("display","none");

			$("#our_advice").css("display","block");
			$("#our_advice_header").html("Our advice is as below:");
			$("#our_advice_text1").html("* Stay at home");
			$("#our_advice_text2").html("* Self quarantine yourself.");
			$("#our_advice_text3").html("* Wear protective gear like a mask to protect close ones at home.");
			$("#our_advice_text4").html("* Wash your hands frequently with soap and water for at least thirty seconds, cleaning your hands and arms.");
			$("#our_advice_text5").html("* Dispose tissue which is used.");
			$("#our_advice_text6").html("* Monitor the symptoms. If  any of the other symptoms arise, then visit a medical practitioner who will advise you whether you need a test.");
			$("#our_advice_text7").html("* Do not come in contact with people except your family members. If they go out for any reason, make sure they wash hands before they touch anything at home.");

	

			$("#our_advice_text11").css("display","block");
			$("#our_advice_text22").css("display","block");
			$("#our_advice_text33").css("display","block");
			$("#our_advice_text44").css("display","block");
			$("#our_advice_text55").css("display","block");
			$("#our_advice_text66").css("display","block");
			$("#our_advice_text77").css("display","block");
		}


		function displayAdviceForHigh(){

			//googleTranslator();

			
			$('#hi_name').html('Hello '+full_name+',');
			$('#hi_text').html('As per our assessment, it is best to speak to the respective medical doctors on duty. Additionally, please follow the below guidelines to keep you and others safe.');

			$("#check_btn").css("display","none");

			$("#our_advice").css("display","block");
			$("#our_advice_header").html("Our advice is as below:");
			$("#our_advice_text1").html("* You may have to get a test for covid-19 done basis the advice of the medical doctors.");
			$("#our_advice_text2").html("* You may find the list of test centres.");
			$("#our_advice_text3").html("* Stay at home.");
			$("#our_advice_text4").html("* Self quarantine yourself.");
			$("#our_advice_text5").html("* Wear protective gear like a mask to protect close ones at home.");
			$("#our_advice_text6").html("* Wash your hands frequently with soap and water for at least thirty seconds, cleaning your hands and arms.");
			$("#our_advice_text7").html("* Dispose tissue which is used.");

		


			$("#our_advice_text11").css("display","block");
			$("#our_advice_text22").css("display","block");
			$("#our_advice_text33").css("display","block");
			$("#our_advice_text44").css("display","block");
			$("#our_advice_text55").css("display","block");
			$("#our_advice_text66").css("display","block");
			$("#our_advice_text77").css("display","block");

		}


		function displayAdviceForUndetected(){

			//googleTranslator();

			$('#hi_name').html('Hello '+full_name+',');
			$('#hi_text').html('Sorry the result is undetectable for some conditions. Please try again.');

			$("#check_btn").css("display","none");
		}

		/*red_zone = red_zone;*/

		//console.log(condition);

		//console.log(other_symptoms);

		/*var dry_cough = $("#dry_cough").val();
		var difficulty_in_breathing = $("#difficulty_in_breathing").val();
		var fever = $("#fever").val();
		var tiredness = $("#tiredness").val();
		var loss_of_taste_or_smell = $("#loss_of_taste_or_smell").val();
		var none_of_the_above1 = $("#none_of_the_above1").val();*/


		/*var body_aches = $("#body_aches").val();
		var sore_throat = $("#sore_throat").val();
		var nasal_congestion = $("#nasal_congestion").val();
		var headache = $("#headache").val();
		var runny_nose = $("#runny_nose").val();
		var none_of_the_above2 = $("#none_of_the_above2").val();*/


		/*var red_zone_yes = $("#red_zone_yes").val();
		var red_zone_no = $("#red_zone_no").val();
		var healthcare_yes = $("#healthcare_yes").val();
		var healthcare_no = $("#healthcare_no").val();
		var positive_yes = $("#positive_yes").val();
		var positive_no = $("#positive_no").val();
		var condition_yes = $("#condition_yes").val();
		var condition_no = $("#condition_no").val();*/
		//console.log(positive);

		if (red_zone!='' && healthcare!='' && positive!='' && condition!='') {

			$("#user_name").html(full_name);
				$("#m_symptoms").html(main_symptoms);
				$("#o_symptoms").html(other_symptoms);

				$("#progress_bar").css("width","100%");
				$("#progress_bar").css("transition","0.2s");


				//all logics for symptoms checker
				if(main_symptoms_array.length==1 && (other_symptoms=='None'||other_symptoms=='কিছুই না') && red_zone=='no' && healthcare=='no' && positive=='no' && condition=='no'){

				
				var risk = "Low";
				displayAdviceForLow();

				
				$(".count").html('Low Risk');
			
				$(".count").css('color','green');
				//document.getElementById("risk").style.color="green";
				//$("#risk").html("Low Risk");
				$(".circle_inner").css("border","6px solid green");
				

				}else if((main_symptoms=='None'||main_symptoms=='কিছুই না') && (other_symptoms=='None'||other_symptoms=='কিছুই না') && red_zone=='no' && healthcare=='no' && positive=='no' && condition=='no'){

					var risk = "Low";
					displayAdviceForLow();
					
				$(".count").html('Low Risk');
			
					$(".count").css('color','green');
					//document.getElementById("risk").style.color="green";
					//$("#risk").html("Low Risk");
					$(".circle_inner").css("border","6px solid green");

				}else if(other_symptoms_array.length>=1 && (main_symptoms=='None'||main_symptoms=='কিছুই না') && red_zone=='no' && healthcare=='no' && positive=='no' && condition=='no'){

					var risk = "Low";
					displayAdviceForLow();
					
				$(".count").html('Low Risk');
			
					$(".count").css('color','green');
					//document.getElementById("risk").style.color="green";
					//$("#risk").html("Low Risk");
					$(".circle_inner").css("border","6px solid green");

				}else if((other_symptoms=='None'||other_symptoms=='কিছুই না') && (main_symptoms=='None'||main_symptoms=='কিছুই না') && red_zone=='no' && healthcare=='no' && positive=='no' && condition=='yes'){

					var risk = "Low";
					displayAdviceForLow();
					
				$(".count").html('Low Risk');
			
					$(".count").css('color','green');
					//document.getElementById("risk").style.color="green";
					//$("#risk").html("Low Risk");
					$(".circle_inner").css("border","6px solid green");

				}else if(main_symptoms_array.length>1 && (other_symptoms=='None'||other_symptoms=='কিছুই না') && red_zone=='no' && healthcare=='no' && positive=='no' && condition=='no'){

					var risk = "Medium";
					displayAdviceForMedium();
					
				$(".count").html('Medium Risk');
			
					$(".count").css('color','orange');
					//document.getElementById("risk").style.color="orange";
					//$("#risk").html("Medium Risk");
					$(".circle_inner").css("border","6px solid orange");

				}else if(main_symptoms_array.length>=1 && (main_symptoms!='None'||main_symptoms!='কিছুই না') && (other_symptoms!='None'||other_symptoms!='কিছুই না') && other_symptoms_array.length>=1 && red_zone=='no' && healthcare=='no' && positive=='no' && condition=='no'){

					var risk = "Medium";
					displayAdviceForMedium();
					
				$(".count").html('Medium Risk');
			
					$(".count").css('color','orange');
					//document.getElementById("risk").style.color="orange";
					//$("#risk").html("Medium Risk");
					$(".circle_inner").css("border","6px solid orange");

				}else if((main_symptoms=='None'||main_symptoms=='কিছুই না') && (other_symptoms=='None'||other_symptoms=='কিছুই না') && red_zone=='yes' && healthcare=='no' && positive=='no' && condition=='no'){

					var risk = "Medium";
					displayAdviceForMedium();
					
				$(".count").html('Medium Risk');
			
					$(".count").css('color','orange');
					//document.getElementById("risk").style.color="orange";
					//$("#risk").html("Medium Risk");
					$(".circle_inner").css("border","6px solid orange");

				}else if((main_symptoms=='None'||main_symptoms=='কিছুই না') && (other_symptoms=='None'||other_symptoms=='কিছুই না') && red_zone=='no' && healthcare=='yes' && positive=='no' && condition=='no'){

					var risk = "Medium";
					displayAdviceForMedium();
					
				$(".count").html('Medium Risk');
			
					$(".count").css('color','orange');
					//document.getElementById("risk").style.color="orange";
					//$("#risk").html("Medium Risk");
					$(".circle_inner").css("border","6px solid orange");

				}else if(main_symptoms_array.length>=1 && (main_symptoms!='None'||main_symptoms!='কিছুই না') && (other_symptoms=='None'||other_symptoms=='কিছুই না') && red_zone=='no' && healthcare=='yes' && positive=='no' && condition=='yes'){

					var risk = "Medium";
					displayAdviceForMedium();
					
				$(".count").html('Medium Risk');
			
					$(".count").css('color','orange');
					//document.getElementById("risk").style.color="orange";
					//$("#risk").html("Medium Risk");
					$(".circle_inner").css("border","6px solid orange");

				}else if((main_symptoms=='None'||main_symptoms=='কিছুই না') && other_symptoms_array.length>=1 && (other_symptoms!='None'||other_symptoms!='কিছুই না') && red_zone=='no' && healthcare=='yes' && positive=='no' && condition=='yes'){

					var risk = "Medium";
					displayAdviceForMedium();
					
				$(".count").html('Medium Risk');
			
					$(".count").css('color','orange');
					//document.getElementById("risk").style.color="orange";
					//$("#risk").html("Medium Risk");
					$(".circle_inner").css("border","6px solid orange");

				}else if(main_symptoms_array.length>=1 && (main_symptoms!='None'||main_symptoms!='কিছুই না') && other_symptoms_array.length>=1 && (other_symptoms!='None'||other_symptoms!='কিছুই না') && red_zone=='yes' && (healthcare=='yes'||healthcare=='no') && (positive=='yes'||positive=='no') && (condition=='yes'||condition=='no')){

					var risk = "High";
					displayAdviceForHigh();
					
				$(".count").html('High Risk');
			
					$(".count").css('color','red');
					$(".circle_inner").css("border","6px solid red");

				}else if(main_symptoms_array.length>=1 && (main_symptoms!='None'||main_symptoms!='কিছুই না') && other_symptoms_array.length>=1 && (other_symptoms!='None'||other_symptoms!='কিছুই না') && (red_zone=='yes'||red_zone=='no') && (healthcare=='yes'||healthcare=='no') && positive=='yes' && (condition=='yes'||condition=='no')){

					var risk = "High";
					displayAdviceForHigh();
					
				$(".count").html('High Risk');
			
					$(".count").css('color','red');
					$(".circle_inner").css("border","6px solid red");

				}else if(main_symptoms_array.length>=1 && (main_symptoms!='None'||main_symptoms!='কিছুই না') && other_symptoms_array.length>=1 && (other_symptoms!='None'||other_symptoms!='কিছুই না') && (red_zone=='yes'||red_zone=='no') && (healthcare=='yes'||healthcare=='no') && (positive=='yes'||positive=='no') && condition=='yes'){

					var risk = "High";
					displayAdviceForHigh();
					
				$(".count").html('High Risk');
			
					$(".count").css('color','red');
					$(".circle_inner").css("border","6px solid red");

				}else if((main_symptoms_array.length>=1 || (main_symptoms=='None'||main_symptoms=='কিছুই না')) && other_symptoms_array.length>=1 && (other_symptoms!='None'||other_symptoms!='কিছুই না') && red_zone=='yes' && (healthcare=='yes'||healthcare=='no') && (positive=='yes'||positive=='no') && (condition=='yes'||condition=='no')){

					var risk = "High";
					displayAdviceForHigh();
					
				$(".count").html('High Risk');
			
					$(".count").css('color','red');
					$(".circle_inner").css("border","6px solid red");

				}else if(main_symptoms_array.length>=1 && (main_symptoms!='None'||main_symptoms!='কিছুই না') && (other_symptoms_array.length>=1 || (other_symptoms=='None'||other_symptoms=='কিছুই না')) && red_zone=='yes' && (healthcare=='yes'||healthcare=='no') && (positive=='yes'||positive=='no') && (condition=='yes'||condition=='no')){

					var risk = "High";
					displayAdviceForHigh();
				
				$(".count").html('High Risk');
			
					$(".count").css('color','red');
					$(".circle_inner").css("border","6px solid red");

				}else if((main_symptoms_array.length>=1 || (main_symptoms=='None'||main_symptoms=='কিছুই না')) && other_symptoms_array.length>=1 && (other_symptoms!='None'||other_symptoms!='কিছুই না') && (red_zone=='yes'||red_zone=='no') && healthcare=='yes' && (positive=='yes'||positive=='no') && (condition=='yes'||condition=='no')){

					var risk = "High";
					displayAdviceForHigh();
					
				$(".count").html('High Risk');
			
					$(".count").css('color','red');
					$(".circle_inner").css("border","6px solid red");

				}else if(main_symptoms_array.length>=1 && (main_symptoms!='None'||main_symptoms!='কিছুই না') && (other_symptoms_array.length>=1 || (other_symptoms=='None'||other_symptoms=='কিছুই না')) && (red_zone=='yes'||red_zone=='no') && healthcare=='yes' && (positive=='yes'||positive=='no') && (condition=='yes'||condition=='no')){

					var risk = "High";
					displayAdviceForHigh();
					
				$(".count").html('High Risk');
			
					$(".count").css('color','red');
					$(".circle_inner").css("border","6px solid red");

				}else if((main_symptoms_array.length>=1 || (main_symptoms=='None'||main_symptoms=='কিছুই না')) && other_symptoms_array.length>=1 && (other_symptoms!='None'||other_symptoms!='কিছুই না') && (red_zone=='yes'||red_zone=='no') && (healthcare=='yes'||healthcare=='no') && positive=='yes' && (condition=='yes'||condition=='no')){

					var risk = "High";
					displayAdviceForHigh();
					
				$(".count").html('High Risk');
			
					$(".count").css('color','red');
					$(".circle_inner").css("border","6px solid red");

				}else if(main_symptoms_array.length>=1 && (main_symptoms!='None'||main_symptoms!='কিছুই না') && (other_symptoms_array.length>=1 || (other_symptoms=='None'||other_symptoms=='কিছুই না')) && (red_zone=='yes'||red_zone=='no') && (healthcare=='yes'||healthcare=='no') && positive=='yes' && (condition=='yes'||condition=='no')){

					var risk = "High";
					displayAdviceForHigh();
				
				$(".count").html('High Risk');
			
					$(".count").css('color','red');
					$(".circle_inner").css("border","6px solid red");

				}else if(main_symptoms_array.length>=1 && (main_symptoms!='None'||main_symptoms!='কিছুই না') && other_symptoms_array.length>=1 && (other_symptoms!='None'||other_symptoms!='কিছুই না') && (red_zone=='yes'||red_zone=='no') && (healthcare=='yes'||healthcare=='no') && positive=='yes' && condition=='yes'){

					var risk = "High";
					displayAdviceForHigh();
					
				$(".count").html('High Risk');
			
					$(".count").css('color','red');
					$(".circle_inner").css("border","6px solid red");

				}else if((main_symptoms_array.length>=1 || (main_symptoms=='None'||main_symptoms=='কিছুই না')) && (other_symptoms_array.length>=1 || (other_symptoms=='None'||other_symptoms=='কিছুই না')) && red_zone=='yes' && healthcare=='yes' && (positive=='yes'||positive=='no') && (condition=='yes'||condition=='no')){

					var risk = "High";
					displayAdviceForHigh();
				
				$(".count").html('High Risk');
			
					$(".count").css('color','red');
					$(".circle_inner").css("border","6px solid red");

				}else if((main_symptoms_array.length>=1 || (main_symptoms=='None'||main_symptoms=='কিছুই না')) && (other_symptoms_array.length>=1 || (other_symptoms=='None'||other_symptoms=='কিছুই না')) && red_zone=='yes' && (healthcare=='yes'||healthcare=='no') && positive=='yes' && (condition=='yes'||condition=='no')){

					var risk = "High";
					displayAdviceForHigh();
				
				$(".count").html('High Risk');
			
					$(".count").css('color','red');
					$(".circle_inner").css("border","6px solid red");

				}else if((main_symptoms_array.length>=1 || (main_symptoms=='None'||main_symptoms=='কিছুই না')) && (other_symptoms_array.length>=1 || (other_symptoms=='None'||other_symptoms=='কিছুই না')) && red_zone=='yes' && (healthcare=='yes'||healthcare=='no') && (positive=='yes'||positive=='no') && condition=='yes'){

					var risk = "High";
					displayAdviceForHigh();
					
				$(".count").html('High Risk');
			
					$(".count").css('color','red');
					$(".circle_inner").css("border","6px solid red");

				}else if((main_symptoms_array.length>=1 || (main_symptoms=='None'||main_symptoms=='কিছুই না')) && (other_symptoms_array.length>=1 || (other_symptoms=='None'||other_symptoms=='কিছুই না')) && (red_zone=='yes'||red_zone=='no') && healthcare=='yes' && positive=='yes' && (condition=='yes'||condition=='no')){

					var risk = "High";
					displayAdviceForHigh();
					
				$(".count").html('High Risk');
			
					$(".count").css('color','red');
					$(".circle_inner").css("border","6px solid red");

				}else if((main_symptoms_array.length>=1 || (main_symptoms=='None'||main_symptoms=='কিছুই না')) && (other_symptoms_array.length>=1 || (other_symptoms=='None'||other_symptoms=='কিছুই না')) && (red_zone=='yes'||red_zone=='no') && healthcare=='yes' && (positive=='yes'||positive=='no') && condition=='yes'){

					var risk = "High";
					displayAdviceForHigh();
					
				$(".count").html('High Risk');
			
					$(".count").css('color','red');
					$(".circle_inner").css("border","6px solid red");

				}else if((main_symptoms_array.length>=1 || (main_symptoms=='None'||main_symptoms=='কিছুই না')) && (other_symptoms_array.length>=1 || (other_symptoms=='None'||other_symptoms=='কিছুই না')) && (red_zone=='yes'||red_zone=='no') && (healthcare=='yes'||healthcare=='no') && positive=='yes' && condition=='yes'){

					var risk = "High";
					displayAdviceForHigh();
				
				$(".count").html('High Risk');
			
					$(".count").css('color','red');
					$(".circle_inner").css("border","6px solid red");

				}else if((main_symptoms_array.length>=1 || (main_symptoms=='None'||main_symptoms=='কিছুই না')) && (other_symptoms_array.length>=1 || (other_symptoms=='None'||other_symptoms=='কিছুই না')) && (red_zone=='yes'||red_zone=='no') && (healthcare=='yes'||healthcare=='no') && positive=='yes' && (condition=='yes'||condition=='no')){

					var risk = "High";
					displayAdviceForHigh();
				
				$(".count").html('High Risk');
			
					$(".count").css('color','red');
					$(".circle_inner").css("border","6px solid red");

				}else{

					var risk = "Undetected";
					displayAdviceForUndetected();
					$(".count").html('Udetectable');
					//$(".count").css('color','red');
					//$(".circle_inner").css("border","6px solid red");
				}



		$.ajax({

			url: 'confirm_symptom_checker.php',
			type: 'post',
			data : {

				full_name: full_name,
				mobile_number: mobile_number,
				main_symptoms: main_symptoms,
				other_symptoms: other_symptoms,
				red_zone: red_zone,
				healthcare: healthcare,
				positive: positive,
				condition: condition,
				risk: risk
			},

			beforeSend:function(){

			},

			success: function(data){

				

			}
		});

		//googleTranslator();

		window.location.replace("#result_area");

		//number increment animation
		/*$('.count').each(function () {
		    $(this).prop('Counter',0).animate({
		        Counter: $(this).text()
		    }, {
		        duration: 4000,
		        easing: 'swing',
		        step: function (now) {
		            $(this).text(Math.ceil(now));
		        }
		    });
		});*/


		$("#basic_details").css("display","block");
		$("#symptom1").css("display","none");
		$("#symptom2").css("display","none");
		$("#radio1").css("display","none");
		//$("#progress_bar").css("width","20%");
		$("#progress_bar").css("transition","0.2s");

		}else{

			$("#error_msg3").css("display","block");
		}


		$('#full_name').val('');
		$('#mobile_number').val('');

		localStorage.clear();


	}

	
</script>





<script type="text/javascript">
	$(document).ready(function(){

		/*googleTranslator();*/
		/*googleTranslatorEnglish();*/
		//change_lang_to_bengali();

		top_text();

		fill_the_form_text();

		basic_details_inside();

		symptoms1_inside();

		symptoms2_inside();

		//result_area();

		other_inquiry();

		header_links();

		header_logo();

		footer_section();

		mobile_side_menu();

		//doctorsSection();

		menu_is_closed();

		rating_review();
	});



	function top_text(){

		var top_text = 'top_text';

		var url1 = window.location.href;
 		var parts1 = url1.split('=');
		var lastSegment1 = parts1.pop() || parts1.pop();

		$.ajax({

		url: 'symptom-checker-top-text.php',
		type: 'post',
		data: {

			top_text: top_text,
			lastSegment1: lastSegment1
		},

		success: function(data){

			$('#top_text').html(data);
			//console.log(lastSegment1);
		}
	});
	}


function fill_the_form_text(){

	var fill_the_form_text = 'fill_the_form_text';

		var url1 = window.location.href;
 		var parts1 = url1.split('=');
		var lastSegment1 = parts1.pop() || parts1.pop();

		$.ajax({

		url: 'symptom-checker-fill-the-form-text.php',
		type: 'post',
		data: {

			fill_the_form_text: fill_the_form_text,
			lastSegment1: lastSegment1
		},

		success: function(data){

			$('#fill_the_simple_form_text').html(data);
			//console.log(lastSegment1);
		}
	});

}


function basic_details_inside(){

	var basic_details_inside = 'basic_details_inside';

		var url1 = window.location.href;
 		var parts1 = url1.split('=');
		var lastSegment1 = parts1.pop() || parts1.pop();

		$.ajax({

		url: 'symptom-checker-basic-details-inside.php',
		type: 'post',
		data: {

			basic_details_inside: basic_details_inside,
			lastSegment1: lastSegment1
		},

		success: function(data){

			$('#basic_details_inside').html(data);
			//console.log(lastSegment1);
		}
	});

}


function symptoms1_inside(){

	var symptoms1_inside = 'symptoms1_inside';

		var url1 = window.location.href;
 		var parts1 = url1.split('=');
		var lastSegment1 = parts1.pop() || parts1.pop();

		$.ajax({

		url: 'symptom-checker-symptoms1.php',
		type: 'post',
		data: {

			symptoms1_inside: symptoms1_inside,
			lastSegment1: lastSegment1
		},

		success: function(data){

			$('#symptoms1').html(data);
			//console.log(lastSegment1);
		}
	});

}


function symptoms2_inside(){

	var symptoms2_inside = 'symptoms2_inside';

		var url1 = window.location.href;
 		var parts1 = url1.split('=');
		var lastSegment1 = parts1.pop() || parts1.pop();

		$.ajax({

		url: 'symptom-checker-symptoms2.php',
		type: 'post',
		data: {

			symptoms2_inside: symptoms2_inside,
			lastSegment1: lastSegment1
		},

		success: function(data){

			$('#symptoms2').html(data);
			//console.log(lastSegment1);
		}
	});

}


function other_inquiry(){

	var other_inquiry = 'other_inquiry';

		var url1 = window.location.href;
 		var parts1 = url1.split('=');
		var lastSegment1 = parts1.pop() || parts1.pop();

		$.ajax({

		url: 'symptom-checker-other-inquiry.php',
		type: 'post',
		data: {

			other_inquiry: other_inquiry,
			lastSegment1: lastSegment1
		},

		success: function(data){

			$('#radio1').html(data);
			//console.log(lastSegment1);
		}
	});

}


function footer_section(){

	var footer_section = 'footer_section';

		var url1 = window.location.href;
 		var parts1 = url1.split('=');
		var lastSegment1 = parts1.pop() || parts1.pop();

		$.ajax({

		url: 'symptom-checker-footer.php',
		type: 'post',
		data: {

			footer_section: footer_section,
			lastSegment1: lastSegment1
		},

		success: function(data){

			$('#footer_section').html(data);
			//console.log(lastSegment1);
		}
	});

}


	function result_area(){

		var result_area = 'result_area';
		var full_name1 = $('#full_name').val();

		var url1 = window.location.href;
 		var parts1 = url1.split('=');
		var lastSegment1 = parts1.pop() || parts1.pop();

		$.ajax({

		url: 'symptom-checker-result-area.php',
		type: 'post',
		data: {

			result_area: result_area,
			lastSegment1: lastSegment1,
			full_name1: full_name1
		},

		success: function(data){

			$('#result_area').html(data);
			
		}
	});
	}


	function header_links(){

	var header_links = 'header_links';

		var url1 = window.location.href;
 		var parts1 = url1.split('=');
		var lastSegment1 = parts1.pop() || parts1.pop();

		$.ajax({

		url: 'symptom-checker-header-links.php',
		type: 'post',
		data: {

			header_links: header_links,
			lastSegment1: lastSegment1
		},

		success: function(data){

			$('#header_links').html(data);
			//console.log(lastSegment1);
		}
	});

}


function header_logo(){

	var header_logo = 'header_logo';

		var url1 = window.location.href;
 		var parts1 = url1.split('=');
		var lastSegment1 = parts1.pop() || parts1.pop();

		$.ajax({

		url: 'symptom-checker-header-logo.php',
		type: 'post',
		data: {

			header_logo: header_logo,
			lastSegment1: lastSegment1
		},

		success: function(data){

			$('#header_logo').html(data);
			//console.log(lastSegment1);
		}
	});

}


function mobile_side_menu(){

	var mobile_side_menu = 'mobile_side_menu';

		var url1 = window.location.href;
 		var parts1 = url1.split('=');
		var lastSegment1 = parts1.pop() || parts1.pop();

		$.ajax({

		url: 'symptom-checker-mobile-canvas-menu.php',
		type: 'post',
		data: {

			mobile_side_menu: mobile_side_menu,
			lastSegment1: lastSegment1
		},

		success: function(data){

			$('#mobile_side_menu').html(data);
			//console.log(lastSegment1);
		}
	});

}

//comes from header_white1
	function change_lang_to_english(){

		$('#bengali_btn').css('display','block');
		$('#english_btn').css('display','none');
		$('#english_btn1').css('display','none');
		$('#bengali_btn1').css('display','inline');

		//location.search = "lang=en";
		window.history.replaceState(null, null, "?lang=en");

		top_text();

		fill_the_form_text();

		basic_details_inside();

		symptoms1_inside();

		symptoms2_inside();

		other_inquiry();

		header_links();

		header_logo();

		footer_section();

		mobile_side_menu();

		//result_area();

		googleTranslator();

		/*var gt = 'gt';
		var loc = window.location.hash;

	$.ajax({

		url: 'change_language_for_checker.php',
		type: 'post',
		data: {

			gt: gt,
			loc: loc
		},

		success: function(data){

			$('#gt').html(data);
			console.log(data);
		}
	});*/

		//console.log(window.location.hash);
	}


	function change_lang_to_bengali(){

		$('#bengali_btn').css('display','none');
		$('#english_btn').css('display','block');
		$('#english_btn1').css('display','inline');
		$('#bengali_btn1').css('display','none');

		//location.search = "lang=bn";
		window.history.replaceState(null, null, "?lang=bn");

		top_text();

		fill_the_form_text();

		basic_details_inside();

		symptoms1_inside();

		symptoms2_inside();

		other_inquiry();

		header_links();

		header_logo();

		footer_section();

		mobile_side_menu();

		//result_area();

		googleTranslator();

		/*var gt = 'gt';
		var loc = window.location.hash;

	$.ajax({

		url: 'change_language_for_checker.php',
		type: 'post',
		data: {

			gt: gt,
			loc: loc
		},

		success: function(data){

			$('#gt').html(data);
		}
	});*/

		//console.log(window.location.hash);
	}


	function menu_is_closed(){

		$('body').addClass('menu-is-closed');
		$('body').removeClass('menu-is-opened');
		
	}

	function rating_review(){
	
	var rating_review = 'rating_review';
	var lang = lastSegment;

	$.ajax({

		url: 'rating-modal.php',
		type: 'post',
		data: {

			rating_review: rating_review,
			lang: lang
		},

		success: function(data){

			$('#rating_section').html(data);
		}
	});

}


	function doctorsSection(){
	
	var doctorsSection = 'doctorsSection';
	var lang = lastSegment;

	$.ajax({

		url: 'index_section5.php',
		type: 'post',
		data: {

			doctorsSection: doctorsSection,
			lang: lang
		},

		success: function(data){

			$('#doctors_section').html(data);
		}
	});

}

	function googleTranslator(){

		var gt = 'gt';

		var url1 = window.location.href;
 		var parts1 = url1.split('=');
		var lastSegment1 = parts1.pop() || parts1.pop();

	$.ajax({

		url: 'change_language_for_checker.php',
		type: 'post',
		data: {

			gt: gt,
			lastSegment1:lastSegment1
		},

		success: function(data){

			$('#gt').html(data);
		}
	});

	
}


/*function googleTranslatorEnglish(){

	var gt1 = 'gt1';

	$.ajax({

		url: 'change_language_for_checker_english.php',
		type: 'post',
		data: {

			gt1: gt1
		},

		success: function(data){

			$('#gt').html(data);
		}
	});
}*/

</script>



</body>

<!-- Mirrored from paul-themes.com/html/covid-19/symptom-checker.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 May 2021 12:12:30 GMT -->
</html>