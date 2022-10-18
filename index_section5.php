<?php 

if(isset($_POST['doctorsSection'])){

	require('admin/db.inc.php');

	$doctor_query = mysqli_query($dbc, "SELECT * from tbl_doctors where doctor_remove_status=0 order by doctor_id asc");
	include 'english_to_bangla.php';
	//include 'change_language.php';
	$lang = $_POST['lang'];

$output = '';


$output .= '
<section class="data_table_area" id="doctors_header_section" style="margin-top: 70px;background-color: #f5f5f9;">
<div class="container">
<div class="main_title text-center">
<h5>Meet Our Expert Doctors</h5>
<h2>Our Doctors</h2>
</div>
</div>
</section>


<section class="doctors_area" style="margin-top: -210px;">
<div class="container">
<div class="row doctors_inner">';


	$doctor_count=0;
	$delay = 0;
	while($doctor_query && $result_doctor=mysqli_fetch_array($doctor_query, MYSQLI_ASSOC)){
        $doctor_count++;
        $delay = $delay+100;

$output .= '<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="'.$delay.'ms">
<div class="doctors_item">
<div class="doctors_img">
<img id="doc_img" class="img-fluid" src="admin/files/'.$result_doctor['doctor_image'].'" alt="covid surokkha doctor '.$doctor_count.'" style="height:258px;width:auto;object-fit: contain;">
</div>
<div class="doctors_text">

<h3 id="doctor_name_pc" style="font-size: 20px">';
if($result_doctor['doctor_name']!='Maj. Dr. SK. Habibur Rahman (RAO)'){
	$output .= ''.$result_doctor['doctor_name'].'<span style="opacity: 0;font-size: 20px"> Doctors</span>';
	 }else{
	 	$output .= ''.$result_doctor['doctor_name'].'';
	 	 }
	 	 $output .= '</h3>';
$output .= '<h3 id="doctor_name_mobile" style="font-size: 20px;display: none">';
if($result_doctor['doctor_name']=='Maj. Dr. SK. Habibur Rahman (RAO)'){ 
	$output .='Maj. Dr. SK. Habibur Rahman';
}else{ 
	$output .= ''.$result_doctor['doctor_name'].'';
}

$output .= '</h3>';

$output .= '<p id="doctor_post_pc" style="color: #01cfbe;line-height: 20px;">'.$result_doctor['doctor_post'].'</p>';
$output .='<p id="doctor_post_mobile" style="color: #01cfbe;line-height: 20px;display: none">'.$result_doctor['doctor_post'].'</p>';

$output .= '<p style="line-height: 20px;margin-top: -10px">';
	
	if($lang!='en'){ 
	if($result_doctor['doctor_hospital']=='Dhaka National Medical College Hospital'){
		$output .= '<span class="notranslate">ঢাকা ন্যাশনাল মেডিকেল কলেজ হাসপাতাল</span>';
	 }elseif($result_doctor['doctor_hospital']=='Ex-ENT SPI & Head Neck Surgeon, CMH, Dhaka'){

			$output .= '<span class="notranslate">প্রাক্তন-এএনটি এসপিআই এবং হেড নেক সার্জন, সিএমএইচ, ঢাকা</span>';
		 }else{
		 	$output .= '<span>'.$result_doctor['doctor_hospital'].'</span>';
 } }else{
	$output .= ''.$result_doctor['doctor_hospital'].'';
 }
$output .= '</p>';
 if($lang=='en'){
$output .= '<p style="line-height: 20px;margin-top: -10px">Consultation Time: '.$result_doctor['doctor_consultation_time'].'</p>';
 }else{

		if($result_doctor['doctor_consultation_time']=='7 days a week (12 pm - 1 pm & 4 pm - 6 pm)'){
	
	$output .= '<p style="line-height: 20px;margin-top: -10px">Consultation Time: <span class="notranslate">সপ্তাহে ৭ দিন (বেলা ১২ টা - ১ টা ও বিকাল ৪ টা - ৬ টা)</span></p>';

}elseif($result_doctor['doctor_consultation_time']=='7 days a week (12 pm - 12 am)'){

	$output .= '<p style="line-height: 20px;margin-top: -10px">Consultation Time: <span class="notranslate">সপ্তাহে ৭ দিন (বেলা ১২ টা - রাত ১২ টা)</span></p>';
}else{

	$output .= '<p style="line-height: 20px;margin-top: -10px">Consultation Time: '.BanglaConverter::en2bn($result_doctor['doctor_consultation_time']).'</p>';
 } }

$output .= '</div>
</div>
</div>


<section class="check_now_area" id="call_doctor_now_section1" style="padding-top: 30px;margin-bottom: 30px;display: none;">
<div class="container">
<div class="row m-0 justify-content-between">
<div class="left">
<div class="media">
<div class="d-flex">
<img src="assets/images/check-1.png" alt="covid surokkha" />
<img src="assets/images/check-2.png" alt="covid surokkha" />
<img src="assets/images/check-3.png" alt="covid surokkha" />
</div>
<div id="check_now_text1" class="media-body">
<h4 id="contact_us_to_get_service" style="font-size: 24px">Contact us to get the service</h4>

</div>
</div>
</div>
<div class="right" id="check_now_button" >

	<a class=" wow fadeInRight" id="click_now_link'.$doctor_count.'" data-wow-delay="400ms" style="font-size: 16px;background-color: white;padding: 10px 30px;color: #58547e;font-weight: bold;border-radius: 6px;cursor:pointer" data-toggle="modal" data-target="#exampleModalClickNow'.$doctor_count.'">';
		 if($lang=='en'){
		$output .= '<span>Click Now</span>';
	 }else{
		$output .= '<span class="notranslate">'.BanglaConverter::en2bn('Click Now').'</span>';
	 }
		$output .= '<i class="linearicons-phone" style="margin-left: 4px;font-weight: bold;display:none"></i></a>

 </div>
</div>
</div>
</section>';


$output .= '<div class="modal modal_mbl animate__animated" id="exampleModalClickNow'.$doctor_count.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="width: 100vw;background-color: rgb(0.5,0.5,0.5,0.5);overflow-y:hidden" data-backdrop="false">
  <div class="modal-dialog animate__animated" id="modal-dialog'.$doctor_count.'" role="document" style="position:fixed;bottom:-1.3vh;width:101vw;margin-left:-2.5px;">

    <div class="modal-content animate__animated" style="background-color:#58547e;border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;">
      <div class="modal-header" style="border-bottom:none">
        <h5 class="modal-title" id="exampleModalLabel" style="font-size:18px;color:white" onclick="event.stopPropagation()">Select your service</h5>
        <button type="button" class="close" id="close'.$doctor_count.'" aria-label="Close" style="color:white">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="margin-bottom:30px" onclick="event.stopPropagation()">

      <div>
      	<span style="padding:12px;border:1px transparent;border-radius:50%;background-color:#837fa7;font-size:12px"><img src="assets/images/telephone.png" style="height:15px;width:15px;"/></span><a href="tel:+8801762576865" style="margin-left:10px">';
      	if($lang=='en'){
      	$output .= '<span style="color: white">Call now</span>';
      }else{
      	$output .= '<span style="color: white">'.BanglaConverter::en2bn('Call Now').'</span>';
      }
      	$output .= '</a>
      	</div>


      	<div style="margin-top: 20px">
      	<span style="padding:12px 14px;border:1px transparent;border-radius:50%;background-color:#837fa7;font-size:12px"><i class="far fa-calendar-check" style="color:white;border-radiuss:50%;font-size:13px"></i></span><a href="doctors" style="margin-left:10px">';
      	if($lang=='en'){
      	$output .= '<span style="color: white">Book an appointment</span>';
      }else{

      	$output .= '<span class="notranslate" style="color: white">এপয়েন্টমেন্ট নিশ্চিত করুন</span>';
      }
      	$output .= '</a>
      	</div>

      </div>
      
    </div>
  </div>
</div>';



}

$output .= '</div>
</div>
</section>



<section class="check_now_area" id="call_doctor_now_section" style="margin-top: 55px">
<div class="container">
<div class="row m-0 justify-content-between">
<div class="left">
<div class="media">
<div class="d-flex">
<img src="assets/images/check-1.png" alt="covid surokkha" />
<img src="assets/images/check-2.png" alt="covid surokkha" />
<img src="assets/images/check-3.png" alt="covid surokkha" />
</div>
<div id="check_now_text" class="media-body">';
	 if($lang=='en'){
$output .= '<h4 >Contact us to get the service</h4>';
 }else{
	$output .= '<h4 style="font-size: 32px">Contact us to get the service</h4>';
 }

$output .= '</div>
</div>
</div>
<div class="right check_now_button" id="check_now_button">

	<a id="call_now" class="icon_btn wow fadeInRight" style="cursor:pointer" data-wow-delay="400ms" data-toggle="modal" data-target="#exampleModalClickNow">';
		 if($lang=='en'){
		$output .= '<span>Click Now</span>';
	 }else{
		$output .= '<span class="notranslate">'.BanglaConverter::en2bn('Click Now').'</span>';
	 }
		$output .= '<i class="linearicons-phone" style="display:none"></i></a>

 </div>
</div>
</div>
</section>';

$output .= '<div class="modal fade modal_pc" id="exampleModalClickNow" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="width: 100vw;background-color: rgb(0.5,0.5,0.5,0.5);">
  <div class="modal-dialog modal-dialog-centered" role="document">

    <div class="modal-content" style="background-color:#58547e;">
      <div class="modal-header" style="border-bottom:none">
        <h5 class="modal-title" id="exampleModalLabel" style="font-size:18px;color:white">Select your service</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:white">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="margin-bottom:30px">

      <div>
      	<span style="padding:12px;border:1px transparent;border-radius:50%;background-color:#837fa7;font-size:12px"><img src="assets/images/telephone.png" style="height:15px;width:15px;"/></span><a href="tel:+8801762576865" style="margin-left:10px">';
      	if($lang=='en'){
      	$output .= '<span style="color: white">Call now</span>';
      }else{
      	$output .= '<span style="color: white">'.BanglaConverter::en2bn('Call Now').'</span>';
      }
      	$output .= '</a>
      	</div>


      	<div style="margin-top: 20px">
      	<span style="padding:12px 14px;border:1px transparent;border-radius:50%;background-color:#837fa7;font-size:12px"><i class="far fa-calendar-check" style="color:white;border-radiuss:50%;font-size:13px"></i></span><a href="doctors" style="margin-left:10px">';
      	if($lang=='en'){
      	$output .= '<span style="color: white">Book an appointment</span>';
      }else{

      	$output .= '<span class="notranslate" style="color: white">এপয়েন্টমেন্ট নিশ্চিত করুন</span>';
      }
      	$output .= '</a>
      	</div>

      </div>
      
    </div>
  </div>
</div>';


echo $output;
/*tel:+8801762576865*/

}


?>


<script type="text/javascript">

if(screen.width<=460){
for(var i=0; i<5;i++){
	$('#click_now_link'+i).click(function(){

		
		$('body').css('overflow-y','hidden');


		$('.modal-dialog').addClass('animate__slideInUp');

		$('.modal-dialog').removeClass('animate__slideOutDown');

	
		
	});


	$('#exampleModalClickNow'+i).click(function(){


		$('body').css('overflow-y','auto');

		$('.modal-dialog').addClass('animate__slideOutDown');
		$('.modal-dialog').removeClass('animate__slideInUp');

		setTimeout(function(){

			$('.modal').modal('hide');

		}, 1000);


		

		/*$('.modal').css('background-color','transparent');
		$('#exampleModalClickNow'+i).css('display','none !important');*/
	
	});

	/*$('#modal-dialog'+i).click(function(){

	
		$('body').css('overflow-y','hidden');
		
		
	});*/

	$('#close'+i).click(function(){

		$('body').css('overflow-y','auto');

		$('.modal-dialog').addClass('animate__slideOutDown');
		$('.modal-dialog').removeClass('animate__slideInUp');


		setTimeout(function(){

			$('.modal').modal('hide');

		}, 1000);
		
		
	});

	


}



}


	/*$('#call_now').click(function(){

		
		$('body').css('overflow-y','hidden');
		
	});*/





	/*$('body').click(function(){

		$('body').css('overflow-y','auto');
	});*/

	
	/*$(".check_now_button").mouseover(function(){

	if (lastSegment=='en') {


  		$("#call_now").html('+8801762576865');
  		

  	}else if(lastSegment=='bn'){

  		$("#call_now").html(replaceNumbers('+8801762576865'));
  		
  	}else{

  		$("#call_now").html(replaceNumbers('+8801762576865'));
  		
  	}
  	});*/

/*$(".check_now_button").mouseout(function(){

	if (lastSegment=='en') {


  		$("#call_now").html('Click Now');
  		

  	}else if(lastSegment=='bn'){

  		$("#call_now").html('কল করুন');
  		
  	}else{

  		$("#call_now").html('কল করুন');
  		
  	}

  		
  	});*/


</script>

