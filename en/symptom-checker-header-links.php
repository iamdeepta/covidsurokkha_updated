<?php 

if(isset($_POST['header_links'])){

	include 'english_to_bangla.php';

  $output = '';


$output .= '<li class="active"><a href=".">Home</a></li>
<li><a href="symptom-checker">Symptom Checker</a></li>
<li><a href="blogs">Blogs</a></li>
<li class=""><a href="about-us">About Us</a></li>
<li class=""><a href="vaccine">Vaccine</a></li>
<li id="choose_lang1"><a href="#" id="choose_lang">Language: </a></li>';


echo $output;


}