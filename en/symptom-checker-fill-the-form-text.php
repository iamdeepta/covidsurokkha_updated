<?php 

if(isset($_POST['fill_the_form_text'])){

  $output = '';
 

$output .= '<h2 class="fill_the_simple_form_below_text" id="fill_the_simple_form_below_text" style="font: 700 30px quicksand,sans-serif;color:white">Fill the simple form below</h2>
<p>Enter more symptoms for more accurate results, starting with your most severe symptom.
Look through a list of common symptoms.
</p>';



echo $output;


}