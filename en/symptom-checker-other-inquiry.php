<?php 

if(isset($_POST['other_inquiry'])){

  $output = '';


$output .= '<h4 style="color: white">Other Inquiry</h4>
<p id="error_msg3" style="color: #f37878;display:none">Please select atleast one from each question</p>
<div class="row">

<div class="col-lg-12">
  
  <div class="radio_btn">
<h4 style="color:#fff;font:500 14px quicksand,sans-serif;margin-bottom:10px">I stay in a Containment zone/ Red Zone</h4>
<div class="select_conversation">
<input type="radio" name="red_zone" id="red_zone_yes" value="yes">
<label for="red_zone_yes">Yes</label>
</div>
<div class="select_conversation">
<input type="radio" name="red_zone" id="red_zone_no" value="no">
<label for="red_zone_no">No</label>
</div>
</div>


<div class="radio_btn">
<h4 style="color:#fff;font:500 14px quicksand,sans-serif;margin-bottom:10px">Are you a healthcare provider- doctor, nurse, hospital staff?</h4>
<div class="select_conversation">
<input type="radio" name="healthcare" id="healthcare_yes" value="yes">
<label for="healthcare_yes">Yes</label>
</div>
<div class="select_conversation">
<input type="radio" name="healthcare" id="healthcare_no" value="no">
<label for="healthcare_no">No</label>
</div>
</div>


<div class="radio_btn">
<h4 style="color:#fff;font:500 14px quicksand,sans-serif;margin-bottom:10px">Have you recently come in contact with someone tested positively for Covid-19?</h4>
<div class="select_conversation">
<input type="radio" name="positive" id="positive_yes" value="yes">
<label for="positive_yes">Yes</label>
</div>
<div class="select_conversation">
<input type="radio" name="positive" id="positive_no" value="no">
<label for="positive_no">No</label>
</div>
</div>


<div class="radio_btn">
<h4 style="color:#fff;font:500 14px quicksand,sans-serif;margin-bottom:10px">Do you have any of these Pre-existing conditions- high BP, Heart problem, Diabetes, Asthma, Lung problems - COPD, Pneumonia or any respiratory disease?</h4>
<div class="select_conversation">
<input type="radio" name="condition" id="condition_yes" value="yes">
<label for="condition_yes">Yes</label>
</div>
<div class="select_conversation">
<input type="radio" name="condition" id="condition_no" value="no">
<label for="condition_no">No</label>
</div>
</div>

</div>

<div class="button">
<a class="submit_btn" id="confirm" href="javascript:void(0)" onclick="confirm();">Confirm</a>
</div>
</div>';




echo $output;


}