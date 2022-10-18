<?php 

if(isset($_POST['indexSection3'])){

	include 'english_to_bangla.php';
	//include 'change_language.php';
	$lang = $_POST['lang'];

$output = '';


$output .= '<div class="container">
<ul class="nav image_list">
<li><img src="assets/images/symptoms-user/sm-1.webp" alt="আজকের-করোনাভাইরাস-আপডেট-বাংলাদেশ"></li>
<li><img src="assets/images/symptoms-user/sm-2.webp" alt="করোনার-আজকের-আপডেট"></li>
<li><img src="assets/images/symptoms-user/sm-3.webp" alt="আজকের-করোনা-পরিস্থিতি"></li>
</ul>
<div class="main_title wow fadeInUp text-center" data-wow-delay="400ms">
<h5>Symptoms of Covid</h5>
<h2>What are the basic symptoms?</h2>
</div>
<div class="row symptoms_inner" id="symptom_contents">
<div id="symptom_card1" class="col-lg-6 wow fadeInUp" data-wow-delay="400ms">
<div class="symptoms_item">
<div class="media">
<div class="d-flex">
<img id="symptoms_img" src="assets/images/symptoms-user/symptoms-1.png" alt="আজকের-করোনার-আপডেট" />
</div>
<div class="media-body">
<h4>High fever</h4>
<p>
Fever is a key symptom, experts say. Don\'t fixate on a
number, but know it\'s not a fever until temperature
reaches at least '; 

	$output .= '<span>'.BanglaConverter::en2bn('39').'°C</span>';
 
$output .= '</p>
</div>
</div>
</div>
</div>
<div id="symptom_card2" class="col-lg-6 wow fadeInUp" data-wow-delay="500ms">
<div class="symptoms_item">
<div class="media">
<div class="d-flex">
<img id="symptoms_img" src="assets/images/symptoms-user/symptoms-2.png" alt="করোনা-ভাইরাসের-বর্তমান-পরিস্থিতি" />
</div>
<div class="media-body">
<h4>Sortness of Breath</h4>
<p>
You feel hot to touch on your chest or back It is a common
sign and also may appear in '; 
if($lang=='en'){
	$output .= '<span>2-10</span>';
	 }else{
	 	$output .= '<span>'.BanglaConverter::en2bn('2-10').'</span>';
	 	 } $output .= ' days if you affected.
</p>
</div>
</div>
</div>
</div>
<div id="symptom_card3" class="col-lg-6 wow fadeInUp" data-wow-delay="600ms">
<div class="symptoms_item">
<div class="media">
<div class="d-flex">
<img id="symptoms_img" src="assets/images/symptoms-user/symptoms-3.png" alt="আজকের-করোনা-আপডেট" />
</div>
<div class="media-body">
<h4>Dry Cough</h4>
<p>
Coughing is another key symptom, but it\'s not just any
cough, said Schaffner. It should be a dry cough that you
feel in your chest.
</p>
</div>
</div>
</div>
</div>
<div id="symptom_card4" class="col-lg-6 wow fadeInUp" data-wow-delay="700ms">
<div class="symptoms_item">
<div class="media">
<div class="d-flex">
<img id="symptoms_img" src="assets/images/symptoms-user/symptoms-4.png" alt="করোনা-আপডেট-আজকের" />
</div>
<div class="media-body">
<h4>Headache</h4>';

if($lang=='en'){
$output .= '<p>Around 1 out of every 6 people who gets covid becomes
seriously ill and develops difficulty breathing or
shortness of breath.</p>';
 }else{
$output .= '<p class="notranslate">কোভিড প্রাপ্ত প্রতি ৬ জনের মধ্যে ১ জন গুরুতর অসুস্থ হয়ে পড়ে এবং শ্বাস নিতে বা শ্বাসকষ্টে বিকাশ ঘটে।</p>';
}

$output .= '</div>
</div>
</div>
</div>
</div>
</div>';


echo $output;

}


?>