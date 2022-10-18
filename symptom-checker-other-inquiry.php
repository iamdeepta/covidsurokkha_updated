<?php 

if(isset($_POST['other_inquiry'])){

  $output = '';

  

	$output .= '<h4 style="color: white">অন্যান্য অনুসন্ধান</h4>
<p id="error_msg3" style="color: #f37878;display:none">প্রতিটি প্রশ্ন থেকে কমপক্ষে একটি নির্বাচন করুন</p>
<div class="row">

<div class="col-lg-12">
  
  <div class="radio_btn">
<h4 style="color:#fff;font:500 14px quicksand,sans-serif;margin-bottom:10px">আমি রেড জোনে থাকি</h4>
<div class="select_conversation">
<input type="radio" name="red_zone" id="red_zone_yes" value="yes">
<label for="red_zone_yes">হ্যাঁ</label>
</div>
<div class="select_conversation">
<input type="radio" name="red_zone" id="red_zone_no" value="no">
<label for="red_zone_no">না</label>
</div>
</div>


<div class="radio_btn">
<h4 style="color:#fff;font:500 14px quicksand,sans-serif;margin-bottom:10px">আপনি কি স্বাস্থ্যসেবা সরবরাহকারী- চিকিৎসক, নার্স, হাসপাতালের কর্মী?</h4>
<div class="select_conversation">
<input type="radio" name="healthcare" id="healthcare_yes" value="yes">
<label for="healthcare_yes">হ্যাঁ</label>
</div>
<div class="select_conversation">
<input type="radio" name="healthcare" id="healthcare_no" value="no">
<label for="healthcare_no">না</label>
</div>
</div>


<div class="radio_btn">
<h4 style="color:#fff;font:500 14px quicksand,sans-serif;margin-bottom:10px">আপনি কি সম্প্রতি কোভিড -১৯ পজিটিভ কারও সংস্পর্শে এসেছেন?</h4>
<div class="select_conversation">
<input type="radio" name="positive" id="positive_yes" value="yes">
<label for="positive_yes">হ্যাঁ</label>
</div>
<div class="select_conversation">
<input type="radio" name="positive" id="positive_no" value="no">
<label for="positive_no">না</label>
</div>
</div>


<div class="radio_btn">
<h4 style="color:#fff;font:500 14px quicksand,sans-serif;margin-bottom:10px">আপনার কি প্রাক-বিদ্যমান শর্তগুলির কোনও- হাই বিপি, হার্টের সমস্যা, ডায়াবেটিস, হাঁপানি, ফুসফুসের সমস্যাগুলি - সিওপিডি, নিউমোনিয়া বা শ্বাসকষ্টের কোনও রোগ রয়েছে?</h4>
<div class="select_conversation">
<input type="radio" name="condition" id="condition_yes" value="yes">
<label for="condition_yes">হ্যাঁ</label>
</div>
<div class="select_conversation">
<input type="radio" name="condition" id="condition_no" value="no">
<label for="condition_no">না</label>
</div>
</div>

</div>

<div class="button">
<a class="submit_btn" id="confirm" href="javascript:void(0)" onclick="confirm();">কনফার্ম</a>
</div>
</div>';




echo $output;


}