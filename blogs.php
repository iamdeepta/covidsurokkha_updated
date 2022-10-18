<?php 

require('admin/db.inc.php');

    
   include 'english_to_bangla.php';


  

?>

<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">

<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script defer src="https://www.googletagmanager.com/gtag/js?id=G-ESJ54C44Q4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-ESJ54C44Q4');
</script>

  <meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta name="description" content="করোনা ভাইরাসের বর্তমান খবর, তথ্য ও পরামর্শ রয়েছে কভিড সুরক্ষাতে। করোনা সংক্রান্ত সকল ধরনের তধ্যাদি ও সাহায্য পাবেন  এখানে।">
<meta name="keywords" content="covid surokkha, covid surokkha, Covidsurokkha, covid, surokkha, surokkha bd, surokkha app bangladesh, surokkha app bd, covid cases, covid deaths, hospital beds availability, icu beds, general beds, ambulance service, COVID-19, covid centre, covid hospital bed availability, total icu beds in bangladesh, covid19health, covid bed status, surokkha covid, covid hospital bed list, covid hospital bed near me, max hospital covid bed availability, covid ambulance number, covid ambulance near me, covid and ambulance, covid ambulance contact number, covid ambulance cost, ambulance for covid patient, covid ambulance helpline, covid test centres near me, covid test centres in dhaka, covid test centres around me, are the covid test centres open, is there a covid 19 testing centre near me, covid govt test centres near me, government approved covid test centres near me, government approved covid test centres in bangladesh, government covid test centres in dhaka, covid private test centres near me, government approved private covid test centres, coronavirus private test centre near me, surokkha covid bd, covid-19 surokkha.gov.bd, surokkha for covid test, surokkha app for covid 19 in bd, covid surokkha kit, surokkha covid report, covid symptom checker, covid symptom checker app, covid 19 symptom checker, symptoms check for covid, covid death in bangladesh, covid death today, covid death in bangladesh today, covid death bd, covid death cases in bangladesh, covid cases bangladesh, covid cases in bangladesh today, covid cases today, covid cases bangladesh today, covid cases bangladesh yesterday, covid cases bangladesh death, covid hospital icu beds, covid hospital icu bed availability, covid hospital bed capacity, test centres for international flights, what happens in icu for covid, covid ambulance location in dhaka, covid ambulance in bangladesh, covid hospital phone number, covid ambulance phone number, surokkha for covid patients, how to get covidsurokkha app, covidsurokkha.com, surokkha for people in bangldesh">
<meta name="author" content="covidsurokkha">
<meta property="og:description" content="করোনা ভাইরাসের বর্তমান খবর, তথ্য ও পরামর্শ রয়েছে কভিড সুরক্ষাতে। করোনা সংক্রান্ত সকল ধরনের তধ্যাদি ও সাহায্য পাবেন  এখানে।">
<meta property="og:image" content="assets/images/covidsurokkha.png" />
<meta property="og:url" content="https://covidsurokkha.com/blogs" />
<meta property="og:title" content="করোনা ভাইরাসের বর্তমান খবর, তথ্য ও পরামর্শ - কভিড সুরক্ষা" />
<meta property="twitter:description" content="করোনা ভাইরাসের বর্তমান খবর, তথ্য ও পরামর্শ রয়েছে কভিড সুরক্ষাতে। করোনা সংক্রান্ত সকল ধরনের তধ্যাদি ও সাহায্য পাবেন  এখানে।">
<meta property="twitter:image" content="assets/images/covidsurokkha.png" />
<meta property="twitter:url" content="https://covidsurokkha.com/blogs" />
<meta property="twitter:title" content="করোনা ভাইরাসের বর্তমান খবর, তথ্য ও পরামর্শ - কভিড সুরক্ষা" />
<meta name="google-site-verification" content="E2zxAXI-DAfIdeJU5hy1trrKCWqQdqTfcaPSf9NTpVU" />

<link rel="icon" href="assets/images/onlylogo.png" type="image/png" />
<link rel="apple-touch-icon" href="assets/images/onlylogo.png"/>

<link rel="canonical" href="https://covidsurokkha.com/blogs" />

<title class="notranslate">করোনা ভাইরাসের বর্তমান খবর, তথ্য ও পরামর্শ - কভিড সুরক্ষা</title>


<?php include 'blogs_css.php';?>

<!-- aos css -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<style type="text/css">
	.dropdown-item.active, .dropdown-item:active{

		background-color: transparent;
	}

  .card:hover{

    background-color: white !important;
    box-shadow: 0px 0px 10px 0px gray !important;
    transition: 0.5s !important;
    margin-top: -50px;
  }

  .card:hover #blog_tag_div{

    background-color: #d5f3f1 !important;
    transition: 0.5s !important;
  }

  .card:hover #blog_tag_text{

    color: green !important;
    transition: 0.5s !important;
    font-weight: bold !important;
  }

  .card:not(:hover){
    transition: 0.5s !important;
  }

  .card:not(:hover) #blog_tag_div{
    transition: 0.5s !important;
  }


  .card:not(:hover) #blog_tag_text{
    transition: 0.5s !important;
  }

  input[name="blogs_searchbar"]:focus{

    outline: 0 none !important;
   box-shadow: 0 1px 1px transparent inset, 0 0 8px transparent !important;
   /*border: 1px solid transparent !important;*/
   border-bottom: 2px solid #01cfbe !important;
   transition: 0.5s !important;
  }

  #blogs_searchbar::placeholder{

    float: left !important;
    font-size: 16px !important;
    margin-top: 0px !important;
  }

  @media screen and (max-width: 460px) {

    .blogs_card{

      width: 82vw !important;
    }

    #blogs_date_div{

      left: calc(100% - 60px) !important;
    }

    #blog_tag_div{

      left: calc(100% - 160px) !important;
    }

    .blogs_searchbar{

      border-radius: 20px !important;
      border: 2px solid #58547e !important;
    }

    input[name="blogs_searchbar"]:focus{

    outline: 0 none !important;
   box-shadow: 0 1px 1px transparent inset, 0 0 8px transparent !important;
   /*border: 1px solid transparent !important;*/
   border: 2px solid #01cfbe !important;
   transition: 0.5s !important;
  }

    #blogs_searchbar_icon{

      left: 93% !important;
      display: none !important;
    }

    #blogs_searchbar::placeholder{

    float: none !important;
  }

  }
</style>

<link rel="alternate" hreflang="bn" href="https://covidsurokkha.com/blogs"/>
<link rel="alternate" hreflang="en" href="https://covidsurokkha.com/en/blogs"/>


<!-- <script type="text/javascript" src="mapdata.js"></script>
<script type="text/javascript" src="mapinfo.js"></script>
<script type="text/javascript" src="countrymap.js"></script> -->
</head>
<body data-scroll-animation="true" style="background-color: #f5f5f9;">



<div class="body_wrapper" id="body_wrapper">

  
  <span class="notranslate" style="height:200px;margin-top:-200px;display:block;visibility:hidden"><h1 style="font-weight: bold;">করোনা ভাইরাসের তথ্য ও পরামর্শ নিয়ে সাজানো হয়েছে আমাদের ব্লগ</h1></span>

  <span style="height:200px;margin-top:-200px;display:block;visibility:hidden"><p>করোনা ভাইরাসের বর্তমান খবর, তথ্য ও পরামর্শ রয়েছে <a href="https://covidsurokkha.com/">কভিড সুরক্ষাতে</a>। করোনা সংক্রান্ত সকল ধরনের তধ্যাদি ও সাহায্য পাবেন  এখানে।</p></span>

	<!-- <span style="height:200px;margin-top:-200px;display:block;visibility:hidden"><img src="assets/images/covidshebalogoreview.jpg"></span> -->

<!-- <div class="preloader">
<div class="three-bounce">
<div class="one"></div>
<div class="two"></div>
<div class="three"></div>
</div>
</div> -->


<?php include 'mobile_canvas_menu.php';?>


<!-- <div class="body_capture"></div> -->
<?php //include 'sidebar.php';?>


<?php include 'header.php';?>



<!-- blogs section -->
<section class="data_table_area" id="blogs_section" style="background-color: #f5f5f9;margin-top: 120px;">

  <div class="container">
<div class="main_title text-center" data-aos="fade-down" data-aos-duration="1000">
  
  <h2 class="notranslate" id="our_blogs_text" style="font-size: 36px;font-weight: bold;color: #01cfbe">আমাদের ব্লগ</h2>

<!-- <?php if(@$_GET['lang']=='en'){?>
<h2 style="font-size: 30px;margin-top: 30px">Government Test Centres</h2>
<?php }else{?>
  <h2 style="font-size: 30px;margin-top: 30px" class="notranslate">সরকারি টেস্ট প্রতিষ্ঠান</h2>

<?php }?> -->
<i class="fas fa-search" id="blogs_searchbar_icon" style="position: absolute;top: 79px;left: 97%" data-aos="fade-down" data-aos-duration="1000"></i>


  <input type="text" name="blogs_searchbar" id="blogs_searchbar" class="form-control blogs_searchbar" placeholder="অনুসন্ধান করুন" style="margin-top: 20px;border:none;border-bottom: 2px solid #58547e;background-color: transparent;" data-aos="fade-down" data-aos-duration="1000" onkeyup="blogs_data_show()" onfocusin="hide_placeholder_searchbar_blogs()" onfocusout="show_placeholder_searchbar_blogs()">


</div>
</div>

<div id="blog_card_section">
  <div id="blog_card_section_inside" style="display: flex;justify-content: center;flex-direction: row;flex-wrap: wrap;">



  </div>
</div>

</section>




<?php include 'footer.php';?>

</div>



<?php //include 'index_js.php';?>

	<script src="assets/js/jquery-3.4.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<!-- <script src="assets/vendors/corona-live/dashboard.js"></script>
<script src="assets/vendors/isotop/imagesloaded.pkgd.min.js"></script>
<script src="assets/vendors/isotop/isotope.pkgd.min.js"></script> -->
<script src="assets/vendors/slick/slick.min.js"></script>
<script src="assets/vendors/scroll-animation/jquery.parallax-scroll.js"></script>
<script src="assets/vendors/scroll-animation/parallax.js"></script>
<script src="assets/vendors/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="assets/vendors/animate-css/wow.min.js"></script>
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

//translate eng to bangla
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

/*function replaceString(str){

	dhaka_str = str.replace("Dhaka","ঢাকা");

	return dhaka_str;
}*/

/*document.getElementById('r').textContent = replaceNumbers('৯  ৭  ৩');*/

//getting url last string
 var url = window.location.href;
 var parts = url.split('=');
var lastSegment = parts.pop() || parts.pop();

//console.log(lastSegment);


if(screen.width<=460){
var load_flag = 2;

}else{
  var load_flag = 8;
}

var limit_text = 'limit';
  

  function blogs_data_show(start,limit_text){

  var blogs_data_show = 'blogs_data_show';
  var blogs_searchbar = $('#blogs_searchbar').val();
  //var start = 0;

    var url = window.location.href;
    var parts = url.split('=');
    var lastSegment = parts.pop() || parts.pop();

    $.ajax({

    url: 'blogs_data_show.php',
    type: 'post',
    data: {

      blogs_data_show: blogs_data_show,
      lastSegment: lastSegment,
      start: start,
      limit_text: limit_text,
      blogs_searchbar: blogs_searchbar
    },

    success: function(data){

      $('#blog_card_section_inside').html(data);
      //console.log(data);
    }

  });

}



$(document).ready(function() {

  blogs_data_show(load_flag='',limit_text='');

    $(window).one('scroll',function(){

      // if($(window).scrollTop()>=$(document).height() - $('#blog_card_section').height()){
        //blogs_data_show(load_flag='',limit_text='');

      //}
    });

});

</script>





<script type="text/javascript">
	$(document).ready(function(){

		//menu_is_closed();
	});
	function menu_is_closed(){

		$('body').addClass('menu-is-closed');
		$('body').removeClass('menu-is-opened');
		$('#blur_bg').css('display','none');
		
	}

  if (screen.width<=460) {
    
    $('#blogs_searchbar').attr('placeholder','🔍 অনুসন্ধান করুন');
  

  }

  function hide_placeholder_searchbar_blogs(){

    $('#blogs_searchbar').attr('placeholder','');
  }

  function show_placeholder_searchbar_blogs(){

    if(screen.width<=460){
    
    $('#blogs_searchbar').attr('placeholder','🔍 অনুসন্ধান করুন');
  
    }else{

      
    $('#blogs_searchbar').attr('placeholder','অনুসন্ধান করুন');
  
    }
  }

	$(document).ready(function(){

    $('#blur_bg').click(function(){

    menu_is_closed();
    $('#blur_bg').css('display','none');
  });

    $('#header_menu_bar').click(function(){
      $('#blur_bg').css('display','block');
    });


    $('.close_btn').click(function(){
      $('#blur_bg').css('display','none');
    });

  });
</script>


<script type="text/javascript">


	$(document).ready(function(){

    rating_review();

	//googleTranslator();

		$(window).one('scroll',function(){

			//indexSection3();

			//doctorsSection();

			

			//indexTrustedPartner();
		});
		

	});

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


	/*function indexSection3(){
	
	var indexSection3 = 'indexSection3';
	var lang = lastSegment;

	$.ajax({

		url: 'index_section3.php',
		type: 'post',
		data: {

			indexSection3: indexSection3,
			lang: lang
		},

		success: function(data){

			$('#symptoms_section').html(data);
		}
	});

}*/




/*function googleTranslator(){

	var gt = 'gt';

	$.ajax({

		url: 'change_language.php',
		type: 'post',
		data: {

			gt: gt
		},

		success: function(data){

			$('#gt').html(data);
		}
	});
}*/
</script>

<?php //include 'change_language.php';?>
<!-- <span id="gt">
	
</span> -->


</body>

</html>




