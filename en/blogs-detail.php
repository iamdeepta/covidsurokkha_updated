<?php 

require('../admin/db.inc.php');
    
    
    //include 'index_queries.php';

  $id = @$_GET['id'];

  $blogs_query = mysqli_query($dbc, "SELECT * from tbl_blogs where blogs_status=0 and blogs_id = $id");

  $result=mysqli_fetch_array($blogs_query, MYSQLI_ASSOC);

  $blogs_query_prev = mysqli_query($dbc, "SELECT * from tbl_blogs where blogs_id<$id and blogs_status=0 order by blogs_id desc");

  $result1=mysqli_fetch_array($blogs_query_prev, MYSQLI_ASSOC);

  $blogs_query_next = mysqli_query($dbc, "SELECT * from tbl_blogs where blogs_id>$id and blogs_status=0 order by blogs_id asc");

  $result2=mysqli_fetch_array($blogs_query_next, MYSQLI_ASSOC);

  $blogs_query_first = mysqli_query($dbc, "SELECT * from tbl_blogs where blogs_status=0 order by blogs_id asc limit 1");

  $result3=mysqli_fetch_array($blogs_query_first, MYSQLI_ASSOC);

  $blogs_query_last = mysqli_query($dbc, "SELECT * from tbl_blogs where blogs_status=0 order by blogs_id desc limit 1");

  $result4=mysqli_fetch_array($blogs_query_last, MYSQLI_ASSOC);

    
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
<meta name="description" content="<?=str_replace('"',"'",$result['blogs_description1_en'])?>">
<meta name="keywords" content="covid surokkha, covid surokkha, Covidsurokkha, covid, surokkha, surokkha bd, surokkha app bangladesh, surokkha app bd, covid cases, covid deaths, hospital beds availability, icu beds, general beds, ambulance service, COVID-19, covid centre, covid hospital bed availability, total icu beds in bangladesh, covid19health, covid bed status, surokkha covid, covid hospital bed list, covid hospital bed near me, max hospital covid bed availability, covid ambulance number, covid ambulance near me, covid and ambulance, covid ambulance contact number, covid ambulance cost, ambulance for covid patient, covid ambulance helpline, covid test centres near me, covid test centres in dhaka, covid test centres around me, are the covid test centres open, is there a covid 19 testing centre near me, covid govt test centres near me, government approved covid test centres near me, government approved covid test centres in bangladesh, government covid test centres in dhaka, covid private test centres near me, government approved private covid test centres, coronavirus private test centre near me, surokkha covid bd, covid-19 surokkha.gov.bd, surokkha for covid test, surokkha app for covid 19 in bd, covid surokkha kit, surokkha covid report, covid symptom checker, covid symptom checker app, covid 19 symptom checker, symptoms check for covid, covid death in bangladesh, covid death today, covid death in bangladesh today, covid death bd, covid death cases in bangladesh, covid cases bangladesh, covid cases in bangladesh today, covid cases today, covid cases bangladesh today, covid cases bangladesh yesterday, covid cases bangladesh death, covid hospital icu beds, covid hospital icu bed availability, covid hospital bed capacity, test centres for international flights, what happens in icu for covid, covid ambulance location in dhaka, covid ambulance in bangladesh, covid hospital phone number, covid ambulance phone number, surokkha for covid patients, how to get covidsurokkha app, covidsurokkha.com, surokkha for people in bangldesh">
<meta name="author" content="covidsurokkha">
<meta property="og:description" content="<?=str_replace('"',"'",$result['blogs_description1_en'])?>">
<meta property="og:image" content="assets/images/covidsurokkha.png" />
<meta property="og:url" content="https://covidsurokkha.com/en/blogs-detail.php" />
<meta property="og:title" content="<?=str_replace('"',"'",$result['blogs_title_en'])?>" />
<meta property="twitter:description" content="<?=str_replace('"',"'",$result['blogs_description1_en'])?>">
<meta property="twitter:image" content="assets/images/covidsurokkha.png" />
<meta property="twitter:url" content="https://covidsurokkha.com/en/blogs-detail.php" />
<meta property="twitter:title" content="<?=str_replace('"',"'",$result['blogs_title_en'])?>" />
<meta name="google-site-verification" content="E2zxAXI-DAfIdeJU5hy1trrKCWqQdqTfcaPSf9NTpVU" />

<link rel="icon" href="assets/images/onlylogo.png" type="image/png" />
<link rel="apple-touch-icon" href="assets/images/onlylogo.png"/>
<!-- <link rel="canonical" href="https://www.covidsheba.com/index.php" /> -->
<title class="notranslate"><?=str_replace('"',"'",$result['blogs_title_en'])?></title>

<?php include 'index_css.php';?>

<!-- aos css -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<style type="text/css">
	.dropdown-item.active, .dropdown-item:active{

		background-color: transparent;
	}

  .header_area.navbar_fixed .main_menu #info_icon{

    color: #58547e !important;
  }

  #info_icon{

    color: #fff !important;
  }

  .main_menu .navbar .nav.navbar-nav li a{

    color: #fff !important;
  }

  .header_area.navbar_fixed .main_menu .navbar .nav.navbar-nav li a{

    color: #58547e !important;
  }

  #english_btn, #bengali_btn{

    color: #fff !important;
  }

  #blogs_prev:hover #prev_arrow{

    transform: translateX(-50px);
    transition: 0.5s;
    opacity: 0;
  }

  #blogs_prev:hover #prev_text{

    margin-left: -10px !important;
    transition: 0.5s;
  }

  #blogs_prev:hover #prev_arrow1{

    transform: translateX(0px) !important;
    transition: 0.5s;
    opacity: 1 !important;
  }

  #blogs_prev:hover{

    background-color: #58547e !important;
    box-shadow: 0px 0px 10px 0px rgb(0.2,0.2,0.2,0.2);
    transition: 0.5s;
  }

  #blogs_prev:not(:hover) #prev_arrow{

    transition: 0.5s;
  }

  #blogs_prev:not(:hover) #prev_text{

    transition: 0.5s;
  }

  #blogs_prev:not(:hover) #prev_arrow1{

    transition: 0.5s;
  }

  #blogs_prev:not(:hover){
    transition: 0.5s;
  }


  #blogs_next:hover #next_arrow{

    transform: translateX(50px);
    transition: 0.5s;
    opacity: 0;
  }

  #blogs_next:hover #next_text{

    margin-left: 10px !important;
    transition: 0.5s;
  }

  #blogs_next:hover #next_arrow1{

    transform: translateX(0px) !important;
    transition: 0.5s;
    opacity: 1 !important;
  }

  #blogs_next:hover{

    background-color: #58547e !important;
    box-shadow: 0px 0px 10px 0px rgb(0.2,0.2,0.2,0.2);
    transition: 0.5s;
  }

  #blogs_next:not(:hover) #next_arrow{

    transition: 0.5s;
  }

  #blogs_next:not(:hover) #next_text{

    transition: 0.5s;
  }

  #blogs_next:not(:hover) #next_arrow1{

    transition: 0.5s;
  }

  #blogs_next:not(:hover){
    transition: 0.5s;
  }

  button[name="blogs_prev"]:focus,button[name="blogs_next"]:focus{

    outline: 0 none;
   box-shadow: 0 1px 1px transparent inset, 0 0 8px transparent;
   border: 1px solid transparent !important;
   transition: 0.5s !important;
  }

  .tbl_blog{
    width: 100% !important;
    box-shadow: 0px 0px 0px 0px transparent !important;
    border: 1px solid black !important;
  }

  @media screen and (max-width: 460px) {

    .main_menu .right_burger .nav li .menu_btn img{

      content:url("assets/images/icon/burger-white.png");
    }

    .header_area.navbar_fixed .main_menu .right_burger .nav li .menu_btn img{

      content:url("assets/images/icon/burger.png");
    }

  #blog_detail_first_paragraph{

    padding: 0px 0px !important;
  }

  #blog_detail_div{

    padding: 0px 15px !important;
  }

  #blog_detail_second_paragraph{

    padding: 0px 0px !important;
  }

  #blog_detail_images{

    padding: 0px 40px !important;
    justify-content: center !important;
    flex-wrap: wrap !important;
  }

  #blog_detail_image3_div{

    margin-left: 0px !important;
    margin-top: 10px !important;
  }

  #blog_detail_image1{

    height: auto !important;
    width: 100% !important;
    border-radius: 15px !important;
  }

  #blog_detail_image2{

    height: auto !important;
    width: 93vw !important;
  }

  #blog_detail_image3{

     height: auto !important;
    width: 93vw !important;
  }

  #blogs_time_div{

    padding: 0px !important;
  }

  #purple_bg{

    height: 380px !important;
  }

  #prev_next_div{

    margin-top: 50px !important;
  }

  .next_prev_image{

    width: 150px !important;
    height: auto !important;
  }

}

  
</style>


<!-- <script type="text/javascript" src="mapdata.js"></script>
<script type="text/javascript" src="mapinfo.js"></script>
<script type="text/javascript" src="countrymap.js"></script> -->
</head>
<body data-scroll-animation="true" style="background-color: #f5f5f9;">



<div class="body_wrapper" id="body_wrapper">

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


<div id="purple_bg" style="background-color: #48456b;width: 100%;height: 400px;position: absolute;z-index: -1;top: 0;left: 0;margin: 0"></div>

<!-- blogs section -->
<section class="data_table_area" id="blogs_section" style="background-color: transparent;margin-top: 120px;">

  <div class="container">
<div class="main_title text-center" data-aos="fade-down" data-aos-duration="1000">
 
    <?php if($result['blogs_title_en']!=''){?>
<h1 id="our_blogs_text" style="font-size: 36px;font-weight: bold;color: #fff"><?=$result['blogs_title_en']?></h1>
<?php }else{?>
  <h1 id="our_blogs_text" style="font-size: 36px;font-weight: bold;color: #fff"><?=$result['blogs_title_bn']?></h1>
<?php }?>

<!-- <?php if(@$_GET['lang']=='en'){?>
<h2 style="font-size: 30px;margin-top: 30px">Government Test Centres</h2>
<?php }else{?>
  <h2 style="font-size: 30px;margin-top: 30px" class="notranslate">সরকারি টেস্ট প্রতিষ্ঠান</h2>

<?php }?> -->
</div>
</div>

<div id="blog_detail_section" style="margin-top: -10px">
  
  <div id="blog_detail_div" class="container" style="text-align: center;padding:0px 50px">

    
    <img id="blog_detail_image1" src="../admin/files/blogs_images/<?php echo $result['blogs_image1'];?>" alt="<?php echo $result['blogs_image1_alt_en']?>" style="border-radius: 20px;object-fit: cover;height: 506px;width: 870px" data-aos="zoom-in" data-aos-duration="1000">

   
    <div id="blogs_time_div" style="margin-top: 10px;font-size: 14px;text-align: left;padding: 0px 120px;margin-top: 20px" data-aos="zoom-in" data-aos-duration="1000"><i class="far fa-clock"></i><span style="margin-left: 3px"><?=$result['blogs_time']?> minute read</span></div>
   
   

    <div id="blog_detail_first_paragraph" style="text-align: left;padding: 0px 120px;margin-top: 0px;white-space: pre-line;" data-aos="zoom-in" data-aos-duration="1000">
      
        <?php if($result['blogs_description1_en']!=''){?>
      <p><?=$result['blogs_description1_en']?></p>
    <?php }else{?>
      <p><?=$result['blogs_description1_bn']?></p>
    <?php }?>
   
    </div>

    <div id="blog_detail_images" style="display: flex;justify-content: flex-start;flex-direction: row;padding: 0px 120px;">
      <?php if($result['blogs_image2']!=''){?>
    <div id="blog_detail_image2_div" data-aos="fade-right" data-aos-duration="1000"><img id="blog_detail_image2" src="../admin/files/blogs_images/<?php echo $result['blogs_image2'];?>" alt="<?php echo $result['blogs_image2_alt_en']?>" style="border-radius: 15px;height: 242px;width: 425px;object-fit: contain;"></div>
    <?php }else{?>
    <?php }?>
    <?php if($result['blogs_image3']!=''){?>
    <div id="blog_detail_image3_div" style="margin-left: 30px" data-aos="fade-left" data-aos-duration="1000"><img id="blog_detail_image3" src="../admin/files/blogs_images/<?php echo $result['blogs_image3'];?>" alt="<?php echo $result['blogs_image3_alt_en']?>" style="border-radius: 15px;height: 242px;width: 425px;object-fit: contain;"></div>
    <?php }else{?>
    <?php }?>
  </div>

  <div id="blog_detail_second_paragraph" style="text-align: left;padding: 0px 120px;margin-top: 0px;white-space: pre-line;" data-aos="zoom-in" data-aos-duration="1000">
   
      <?php if($result['blogs_description2_en']!=''){?>
      <p><?=$result['blogs_description2_en']?></p>
    <?php }else{?>
      <p><?=$result['blogs_description2_bn']?></p>
    <?php }?>
   
    </div>


    <img id="blog_detail_image3_mbl" src="../admin/files/blogs_images/<?php echo $result['blogs_image3'];?>" alt="<?php echo $result['blogs_image3_alt_en']?>" style="border-radius: 15px;object-fit: cover;height: auto;width: 100%;margin-top: -10px;" data-aos="fade-left" data-aos-duration="1000">


  </div>



</div>


<!-- blogs next and previous buttons -->

<div class="container" id="prev_next_div" style="display: flex;justify-content: space-between;flex-direction: row;">
   
   <div style="display: flex;flex-direction: column;">
   <?php if($result3['blogs_id']!=@$_GET['id']){?> 
    <a href="blogs-detail.php?id=<?=$result1['blogs_id']?>&lang=<?=@$_GET['lang']?>"><button class="btn" name="blogs_prev" id="blogs_prev" style="background-color: #01cfbe;color: white;border-radius: 10px;width: 150px;" data-aos="fade-right" data-aos-duration="1000"><span><i class="fas fa-long-arrow-alt-left" id="prev_arrow"></i></span> <span id="prev_text" style="margin-left: 10px">Previous</span> <span><i class="fas fa-long-arrow-alt-left" id="prev_arrow1" style="transform: translateX(50px);opacity: 0;margin-left: 10px;"></i></span></button></a>

    <img class="next_prev_image" src="../admin/files/blogs_images/<?=$result1['blogs_image1']?>" style="width: 350px;height: auto;border-radius: 10px;margin-top: 10px" data-aos="fade-right" data-aos-duration="1000">

    <p data-aos="fade-right" data-aos-duration="1000" style="width: 150px"><?=$result1['blogs_title_en']?></p>
  <?php }else{?>
    <button class="btn" name="blogs_prev" id="blogs_prev_other" style="background-color: #a9c8c5;color: white;border-radius: 10px;width: 150px;pointer-events: none;cursor: no-drop;" data-aos="fade-right" data-aos-duration="1000" disabled="true"><span><i class="fas fa-long-arrow-alt-left" id="prev_arrow_other"></i></span> <span id="prev_text_other" style="margin-left: 10px">Previous</span> <span><i class="fas fa-long-arrow-alt-left" id="prev_arrow1_other" style="transform: translateX(50px);opacity: 0;margin-left: 10px;"></i></span></button>
  <?php }?>
  </div>

  <div style="display: flex;flex-direction: column;">
  <?php if($result4['blogs_id']!=@$_GET['id']){?> 
    <a href="blogs-detail.php?id=<?=$result2['blogs_id']?>&lang=<?=@$_GET['lang']?>"><button class="btn" name="blogs_next" id="blogs_next" style="background-color: #01cfbe;color: white;border-radius: 10px;width: 150px" data-aos="fade-left" data-aos-duration="1000"><span><i class="fas fa-long-arrow-alt-right" id="next_arrow1" style="transform: translateX(-50px);opacity: 0"></i></span> <span id="next_text" style="margin-right: 10px">Next</span> <span><i class="fas fa-long-arrow-alt-right" id="next_arrow"></i></span></button></a>

    <img class="next_prev_image" src="../admin/files/blogs_images/<?=$result2['blogs_image1']?>" style="width: 350px;height: auto;border-radius: 10px;margin-top: 10px" data-aos="fade-left" data-aos-duration="1000">

    <p data-aos="fade-left" data-aos-duration="1000" style="width: 150px"><?=$result2['blogs_title_en']?></p>

    <?php }else{?>
      <button class="btn" name="blogs_next" id="blogs_next_other" style="background-color: #a9c8c5;color: white;border-radius: 10px;width: 150px;pointer-events: none;cursor: no-drop;" data-aos="fade-left" data-aos-duration="1000" disabled="true"><span><i class="fas fa-long-arrow-alt-right" id="next_arrow1_other" style="transform: translateX(-50px);opacity: 0"></i></span> <span id="next_text_other" style="margin-right: 10px">Next</span> <span><i class="fas fa-long-arrow-alt-right" id="next_arrow_other"></i></span></button>
    <?php }?>
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




  $(document).ready(function() {


});
</script>





<script type="text/javascript">
	$(document).ready(function(){

    if(screen.width<=460){
    $('#blog_detail_image3_mbl').css('display','block');
    $('#blog_detail_image3').css('display','none');
  }else{

    $('#blog_detail_image3_mbl').css('display','none');
    $('#blog_detail_image3').css('display','block');
  }

		//menu_is_closed();
	});
	function menu_is_closed(){

		$('body').addClass('menu-is-closed');
		$('body').removeClass('menu-is-opened');
		$('#blur_bg').css('display','none');
		
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




function googleTranslator(){

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
}
</script>

<?php //include 'change_language.php';?>
<span id="gt">
	
</span>

</body>

</html>




