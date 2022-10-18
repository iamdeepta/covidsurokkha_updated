<?php 

if(isset($_POST['faq_section'])){

	require('../admin/db.inc.php');

	$lastSegment = $_POST['lang'];

	$faq_searchbar = $_POST['faq_searchbar'];

if($faq_searchbar==''){
$faq_cat_query = mysqli_query($dbc, "SELECT * from tbl_faq where faq_status=0 group by faq_category_en order by faq_id asc");
$faq_des_query = mysqli_query($dbc, "SELECT * from tbl_faq where faq_status=0 order by faq_id asc");
}else{

	$faq_cat_query = mysqli_query($dbc, "SELECT * from tbl_faq where faq_status=0 and faq_title_en LIKE '%$faq_searchbar%' group by faq_category_en order by faq_id asc");
$faq_des_query = mysqli_query($dbc, "SELECT * from tbl_faq where faq_status=0 and faq_title_en LIKE '%$faq_searchbar%' order by faq_id asc");
}

$output = '';


	$output .= '
<div class="col-lg-4">
<div class="question_list">
<div class="accordion" id="accordionExample">';
	$count_faq_cat = 0;
	 while($faq_cat_query && $results=mysqli_fetch_array($faq_cat_query, MYSQLI_ASSOC)){
	 	$count_faq_cat++;
	 
$output .= '<div class="card">
<div class="card-header" id="heading'.$count_faq_cat.'">';

if($count_faq_cat==1){

	$output .= '<button class="btn btn-link notranslate" type="button" data-toggle="collapse" data-target="#collapse'.$count_faq_cat.'" aria-expanded="true" aria-controls="collapse'.$count_faq_cat.'">
'.$results['faq_category_en'].'
<i class="linearicons-chevron-down"></i>
</button>';
}else{

	$output .= '<button class="btn btn-link collapsed notranslate" type="button" data-toggle="collapse" data-target="#collapse'.$count_faq_cat.'" aria-expanded="false" aria-controls="collapse'.$count_faq_cat.'">
'.$results['faq_category_en'].'
<i class="linearicons-chevron-down"></i>
</button>';
}

$output .= '</div>';

if($count_faq_cat==1){
$output .= '<div id="collapse'.$count_faq_cat.'" class="collapse show" aria-labelledby="heading'.$count_faq_cat.'" data-parent="#accordionExample">';
}else{
	$output .= '<div id="collapse'.$count_faq_cat.'" class="collapse" aria-labelledby="heading'.$count_faq_cat.'" data-parent="#accordionExample">';
}
	
	$category = $results['faq_category_en'];
	if($faq_searchbar==''){
	$faq_title_query = mysqli_query($dbc, "SELECT * from tbl_faq where faq_status=0 and faq_category_en='$category' order by faq_id asc");
	}else{

		$faq_title_query = mysqli_query($dbc, "SELECT * from tbl_faq where faq_status=0 and faq_category_en='$category' and faq_title_en LIKE '%$faq_searchbar%' order by faq_id asc");
	}

$output .= '<div class="card-body">
<ul class="nav nav-tabs" id="myTab'.$count_faq_cat.'" role="tablist">';

	$count_faq_title = 0;
	 while($faq_title_query && $results1=mysqli_fetch_array($faq_title_query, MYSQLI_ASSOC)){
	 	$count_faq_title++;
	 	
$output .= '<li class="nav-item">';
	if($count_faq_title==1 && $count_faq_cat==1){
$output .= '<a class="nav-link active notranslate" id="home-tab'.$results1['faq_id'].'" data-toggle="tab" href="#home'.$results1['faq_id'].'" role="tab" aria-controls="home" aria-selected="true" onclick="myTabContent('.$results1['faq_id'].')">'.$results1['faq_title_en'].'</a>';
 }else{
	$output .= '<a class="nav-link notranslate" id="home-tab'.$results1['faq_id'].'" data-toggle="tab" href="#home'.$results1['faq_id'].'" role="tab" aria-controls="home" aria-selected="true" onclick="myTabContent('.$results1['faq_id'].')">'.$results1['faq_title_en'].'</a>';
 }
$output .= '</li>';

 }
$output .= '</ul>
</div>
</div>
</div>';

 }

$output .= '</div>
</div>
</div>
<div class="col-lg-8">
<span class="myTabContent1" id="myTabContent1" style="height:230px;margin-top:-230px;display:block;visibility:hidden"></span>
<div class="tab-content answer_details" id="myTabContent">';
	$count_faq_des = 0;
	 while($faq_des_query && $results2=mysqli_fetch_array($faq_des_query, MYSQLI_ASSOC)){
	 	$count_faq_des++;

if($count_faq_des==1){	 	
$output .= '<div class="tab-pane fade show active" id="home'.$results2['faq_id'].'" role="tabpanel" aria-labelledby="home-tab'.$results2['faq_id'].'">
<h4 class="notranslate">'.$results2['faq_title_en'].'</h4>
<p class="notranslate" style="white-space: pre-line;">'.$results2['faq_description_en'].'</p>
</div>';
	}else{

$output .= '<div class="tab-pane fade" id="home'.$results2['faq_id'].'" role="tabpanel" aria-labelledby="home-tab'.$results2['faq_id'].'">
<h4 class="notranslate">'.$results2['faq_title_en'].'</h4>
<p class="notranslate" style="white-space: pre-line;">'.$results2['faq_description_en'].'</p>
</div>';	
	}
 }

$output .= '</div>
</div>
';



echo $output;

}


?>

<script type="text/javascript">

	if(screen.width<=460){
	
	function myTabContent(id){

		$('html').animate({
        scrollTop: $('#accordionExample').offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = '#accordionExample';
      });

		setTimeout(function(){

			$('.btn-link').addClass('collapsed');
			$('.collapse').removeClass('show');

		},100);
		
	}

	

}else{

function myTabContent(id){

		$('html').animate({
        //scrollTop: $('#accordionExample').offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = '#home'+id;
      });

		
	}

}
</script>
