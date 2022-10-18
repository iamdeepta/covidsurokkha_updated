<?php 

if(isset($_POST['header_links'])){

	include 'english_to_bangla.php';

  $output = '';

  

	$output .= '<li class="active"><a href=".">হোম</a></li>
<li><a href="symptom-checker">লক্ষণ পরীক্ষক</a></li>
<li><a href="blogs">ব্লগ</a></li>
<li class=""><a href="about-us">আমাদের সম্পর্কে</a></li>
<li class=""><a href="vaccine">ভ্যাকসিন</a></li>
<li id="choose_lang1"><a href="#" id="choose_lang">ভাষা: </a></li>';



echo $output;


}