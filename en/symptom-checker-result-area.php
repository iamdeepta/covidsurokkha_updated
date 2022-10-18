<?php

if (isset($_POST['result_area'])) {
	
$output = '';


$output .= '<div class="container">
<div class="row" style="margin-top: -20px !important;">
<div class="col-lg-4">
<div class="result_box" id="result_box" style="background-color: #e8e8f3">
	<div id="result_box_inside">
<h2 style="font:700 36px quicksand,sans-serif;">Results</h2>
<ul class="nav flex-column">
	<table class="table">
		<tbody>
			<tr>
				<td>Name:</td>
				
				<td style="color: #01cfbe;font-weight: bold" id="user_name">N/A</td>
			</tr>

			<tr>
				<td>Main Symptoms:</td>
				
				<td style="color: #01cfbe;font-weight: bold" id="m_symptoms">N/A</td>
			</tr>

			<tr>
				<td>Other Symptoms:</td>
				
				<td style="color: #01cfbe;font-weight: bold" id="o_symptoms">N/A</td>
			</tr>
		</tbody>
	</table>

</ul>
<div class="circle_inner" style="border-radius: 50%;background-color: white;height: 150px;width: 150px;box-shadow: 0px 0px 2px 0px ;">
<div class="second circle" style="text-align: center;padding-top: 40%">

<span id="count" class="count" style="font-size: 20px;font-weight: bold">N/A</span>

</div>
</div>

</div>
</div>

</div>

<div class="col-lg-8">
<div class="result_inner_text">
<div class="result_item" id="result_item">
<h4 id="hi_name">Our Advice</h4>
<p id="hi_text">Please provide all the information asked above to have covid-19 result and advices. Thank you.</p>
</div>
<div class="result_item" id="our_advice" style="display: none">
<h3 id="our_advice_header"></h3>
<p id="our_advice_text11"><span style="color: #26b864;">✓ </span><span id="our_advice_text1"></span></p>
<p id="our_advice_text22"><span style="color: #26b864;">✓ </span><span id="our_advice_text2"></span></p>
<p id="our_advice_text33"><span style="color: #26b864;">✓ </span><span id="our_advice_text3"></span></p>
<p id="our_advice_text44"><span style="color: #26b864;">✓ </span><span id="our_advice_text4"></span></p>
<p id="our_advice_text55"><span style="color: #26b864;">✓ </span><span id="our_advice_text5"></span></p>
<p id="our_advice_text66"><span style="color: #26b864;">✓ </span><span id="our_advice_text6"></span></p>
<p id="our_advice_text77"><span style="color: #26b864;">✓ </span><span id="our_advice_text7"></span></p>
</div>
<div class="result_item">

<a class="green_btn" id="check_btn" href="#top_section">Check First</a>
</div>
</div>


</div>
</div>
</div>';



$output .= '<span id="gt"></span>';

echo $output;

}


?>
