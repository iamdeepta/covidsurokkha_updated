<?php 

if(isset($_POST['blogs_home_section'])){

	require('admin/db.inc.php');
    
	
	$blogs_query = mysqli_query($dbc, 'SELECT * from tbl_blogs where blogs_status=0 order by blogs_id desc limit 10');

    
   include 'english_to_bangla.php';

   $lastSegment = $_POST['lang'];


   $output = '';


   $output .= '<div class="" id="blogs_container">
<div class="main_title text-center">';

  $output .= '<h2 class="notranslate" style="color:#01cfbe;">আমাদের ব্লগ</h2>';

 
$output .= '</div>

<div class="owl-carousel">';

   $blogs_count=0;
  while($blogs_query && $result=mysqli_fetch_array($blogs_query, MYSQLI_ASSOC)){
        $blogs_count++;

 


			$output .= '<div id="blogs_card_main_div" style="padding:20px 20px">

    <div class="card blogs_card" id="blogs_card'.$result['blogs_id'].'" style="width: 22vw;border-radius: 15px;border: 0px transparent;background-color: rgb(153 243 239 / 15%);cursor:pointer">
      <img class="card-img-top" src="admin/files/blogs_images/'.$result['blogs_image1'].'" alt="covidsurokkha blog image" style="width: auto;height: 200px;object-fit: cover;border-radius: 15px">

      <div id="blogs_date_div" style="position: absolute;z-index: 99;background-color: #01cfbe;padding:2px 10px;border-radius: 8px;margin-top: -17px;left: calc(100% - 60px);width: 70px;text-align: center;display: flex;justify-content: center;flex-direction: row;flex-wrap: wrap;margin-right: 30px;float:left"><span class="notranslate" style="color: white">'.BanglaConverter::en2bn($result['blogs_date']).'</span></div>

      <div id="blog_tag_div" style="position: absolute;z-index: 99;background-color: #2eaba0;padding:2px 15px;border-radius: 8px;top: 182px;left: calc(100% - 160px);width: 140px;text-align: center;display: flex;justify-content: center;flex-direction: row;flex-wrap: wrap;margin-right: 30px;float:left">';

      if($result['blogs_tag_bn']!=''){
      $output .= '<span class="notranslate" id="blog_tag_text" style="color: white">'.$result['blogs_tag_bn'].'</span>';
  		}else{
  			$output .= '<span id="blog_tag_text" style="color: white">'.$result['blogs_tag_en'].'</span>';
  		}

      $output .= '</div>

      <div class="card-body" style="border-color: transparent;margin-top: 10px">';
        
        if($result['blogs_title_bn']!=''){
        $output .= '<h5 class="card-title notranslate">'.mb_strimwidth($result['blogs_title_bn'],0,22).'...</h5>';
    	}else{

    		$output .= '<h5 class="card-title">'.mb_strimwidth($result['blogs_title_en'],0,22).'...</h5>';
    	}
        
        if($result['blogs_description1_bn']!=''){
        $output .= '<p class="card-text notranslate" style="line-height: 28px;color: #58547e;">'.mb_strimwidth($result['blogs_description1_bn'], 0, 60).'...</p>';
    	}else{
    		$output .= '<p class="card-text" style="line-height: 28px;color: #58547e;">'.mb_strimwidth($result['blogs_description1_en'], 0, 60).'...</p>';
    	}

        $output .= '<div style="display: flex;justify-content: space-between;flex-direction: row;flex-wrap: wrap;margin-top:20px">';

        if($result['blogs_category_bn']!=''){
        $output .= '<p class="notranslate" style="margin-top: 10px;font-style: italic;font-size: 14px"><a href="" style="text-decoration: none;color: #58547e;">'.$result['blogs_category_bn'].'</a></p>';
    	}else{
    		$output .= '<p style="margin-top: 10px;font-style: italic;font-size: 14px"><a href="" style="text-decoration: none;color: #58547e;">'.$result['blogs_category_en'].'</a></p>';
    	}

        $output .= '<span class="notranslate" style="margin-top: 10px;font-size: 14px"><i class="far fa-clock"></i><span style="margin-left: 3px">'.BanglaConverter::en2bn($result['blogs_time']).' মিনিট পড়া</span></span>
        </div>
    
      </div>
    </div>


    <script type="text/javascript">
  
  $("#blogs_card'.$result['blogs_id'].'").click(function(){

    window.location.href="blogs-detail.php?id='.$result['blogs_id'].'&lang=bn";
  });

  
</script>

    </div>';


	}


  $output .= '</div></div>';



  $output .= '<div class="container" id="btn_view_all_div_mbl" style="display:none">
                <div>
                  <p style="font-size:14px;margin-top:16px">আরো দেখতে বামে সোয়াইপ করুন</p>
                </div>
                <div>
                  <a href="blogs.php"><button id="btn_view_all_mbl">সব দেখুন</button></a>
                </div>
              </div>';

  $output .= '<div id="btn_view_all_div"><a href="blogs.php"><button id="btn_view_all">সব দেখুন</button></a></div>';



	echo $output;
}


?>

<link rel="stylesheet" href="assets/owlcarousel/assets/owl.carousel.min.css">
<link rel="stylesheet" href="assets/owlcarousel/assets/owl.theme.default.min.css">

<style type="text/css">

  #blogs_home_section{
      margin-top: 30px !important;
      margin-bottom: 30px !important;
    }

  .dropdown-item.active, .dropdown-item:active{

    background-color: transparent;
  }

  .blogs_card:hover{

    background-color: white !important;
    box-shadow: 0px 0px 10px 0px gray !important;
    transition: 0.5s !important;
    margin-top: -50px !important;
  }

  .blogs_card:hover #blog_tag_div{

    background-color: #d5f3f1 !important;
    transition: 0.5s !important;
  }

  .blogs_card:hover #blog_tag_text{

    color: green !important;
    transition: 0.5s !important;
    font-weight: bold !important;
  }

  .blogs_card:not(:hover){
    transition: 0.5s !important;
  }

  .blogs_card:not(:hover) #blog_tag_div{
    transition: 0.5s !important;
  }


  .blogs_card:not(:hover) #blog_tag_text{
    transition: 0.5s !important;
  }

  .owl-carousel .owl-stage-outer{

    padding-top: 50px;
    margin-top: -30px;
  }

  .owl-nav{

    margin-top: -300px;
  }

   .owl-carousel .owl-nav button.owl-prev{

    background: rgb(0.6,0.6,0.6,0.6);
    padding: 7px 20px !important;
    border-radius: 50%;
    margin-left: 5px;
    position: absolute;
  }

  .owl-carousel .owl-nav button.owl-next{

    background: rgb(0.6,0.6,0.6,0.6);
    padding: 7px 20px !important;
    border-radius: 50%;
    margin-left: 1140px;
    position: absolute;
  }

  .owl-prev span, .owl-next span{

    color: white;
    font-size: 20px;
  }

  .owl-carousel .owl-nav button.owl-prev:hover{
    box-shadow: 0px 0px 7px #101010 !important;
    background: #01cfbe;
    transition: 0.5s;
  }

  .owl-carousel .owl-nav button.owl-next:hover{
    box-shadow: 0px 0px 7px #101010 !important;
    background: #01cfbe;
    transition: 0.5s;
  }

  .owl-carousel .owl-nav button.owl-prev:not(:hover){
    transition: 0.5s;
  }

  .owl-carousel .owl-nav button.owl-next:not(:hover){
    transition: 0.5s;
  }

  #btn_view_all_div{

    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 280px;
  }

  #btn_view_all{

    padding: 10px 40px;
    border-radius: 15px;
    background: transparent;
    border: 2px solid #01cfbe;
    font-weight: bold;
    color: #01cfbe;
  }


  #btn_view_all:hover{

    background: #01cfbe !important;
    color: white !important;
    transition: 0.5s;
  }

  #btn_view_all:not(:hover){

    transition: 0.5s;
  }


  @media screen and (max-width: 460px) {

    .blogs_card:hover{
      box-shadow: 0px 0px 0px 0px !important;
    }

    #blogs_home_section{
      margin-bottom: 0px !important;
      margin-top: 30px !important;
    }

    .owl-carousel::before{
      content: '';
      margin-top: -5px;
      margin-left: 0px;
      background-color: #58547e;
      position: absolute;
      z-index: -1;
      height: 78%;
      width: 92.5vw;
      border-radius: 15px;
      animation: float 2.0s linear infinite;
    }

    @keyframes float{

      0%{

        transform: translateY(0px);
      }

      50%{

        transform: translateY(-10px);
      }

      100%{

       transform: translateY(0px);
      }
    }

    .active #blogs_card_main_div .blogs_card{

      background-color: white !important;
      box-shadow: 0px 5px 0px 0px rgb(0.1,0.1,0.1,0.1) !important;
      transition: 0.5s ease-in-out !important;
      margin-top: -50px !important;
      /*transform: rotateY(360deg) !important;*/

    }

    .owl-carousel .owl-stage-outer{

      margin-top: -10px !important;
    }

    .owl-nav{

      display: none !important;
    }

    .blogs_card{

      width: 82vw !important;
    }

    #blogs_date_div{

      left: calc(100% - 60px) !important;
    }

    #blog_tag_div{

      left: calc(100% - 160px) !important;
    }

    #btn_view_all_div{

      margin-top: -40px !important;
      display: none !important;
    }

    #btn_view_all_div_mbl{

      display: flex !important;
      justify-content: space-between !important;
      flex-direction: row !important;
      flex-wrap: wrap !important;
      align-items: center !important;
      padding: 0px 37px !important;
      margin-top: -95px !important;
      position: absolute !important;
      z-index: 99 !important;
    }

    #btn_view_all_mbl{

    padding: 2px 10px;
    border-radius: 10px;
    background: transparent;
    border: 2px solid #01cfbe;
    font-weight: bold;
    color: #01cfbe;
    font-size: 14px !important;
  }


  #btn_view_all_mbl:hover{

    background: #01cfbe !important;
    color: white !important;
    transition: 0.5s;
  }

  #btn_view_all_mbl:not(:hover){

    transition: 0.5s;
  }

  }
</style>

<style type="text/css">
  .context-menu {
        position: absolute;
        z-index: 99;
        text-align: center;
        background: white;
        border-radius: 10px;
    }
  
    .context-menu ul {
        padding: 0px;
        margin: 0px;
        min-width: 150px;
        list-style: none;
    }
  
    .context-menu ul li {
        padding-bottom: 2px;
        padding-top: 2px;
        border: 1px solid gray;
        border-radius: 10px;
        padding-left: 5px;
        padding-right: 5px;
    }
  
    .context-menu ul li a {
        text-decoration: none;
        color: black;
    }
  
    .context-menu ul li:hover {
        background: white;
    }
</style>

<script src="assets/owlcarousel/owl.carousel.min.js"></script>

<script type="text/javascript">
  var owl = $('.owl-carousel');


if(screen.width<=460){

  $(document).on('scroll', function() {
  if ($(this).scrollTop() >= $('#blogs_card_main_div').position().top + 2500) {
    owl.owlCarousel({
    loop:true,
    nav:true,
    margin:20,
    autoplay:true,
    autoplayTimeout:5000,
    autoplaySpeed: 500,
    slideTransition: 'linear',
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },            
        960:{
            items:4
        },
        1200:{
            items:4
        }
    }
});
  }
})

  $('#blogs_container').addClass('container');

  //$('.owl-carousel').attr('data-aos','fade-right');
}else{

  
  $('#blogs_container').addClass('container');


  owl.owlCarousel({
    loop:true,
    nav:true,
    margin:200,
    autoplay:true,
    autoplayTimeout:5000,
    autoplaySpeed: 500,
    slideTransition: 'linear',
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },            
        960:{
            items:3
        },
        1200:{
            items:3
        }
    }
});
}
</script>
