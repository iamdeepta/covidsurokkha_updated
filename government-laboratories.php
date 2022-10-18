<?php 

$govt_lab_query = mysqli_query($dbc, "SELECT * from tbl_approved_laboratories where lab_type = 'govt' and lab_status=0 order by lab_district asc");
$private_lab_query = mysqli_query($dbc, "SELECT * from tbl_approved_laboratories where lab_type = 'private' and lab_status=0 order by lab_district asc");

?>
<section class="data_table_area test_center_section" id="hospital_section" style="background-color: #f5f5f9;margin-top: 140px;margin-bottom: 150px">
<div class="container">
<div class="main_title text-center" data-aos="fade-down" data-aos-duration="1000">
	
	<h5 class="notranslate" id="hospitals_nearby_text" style="font-size: 37px;">আন্তর্জাতিক যাত্রীদের জন্য অনুমোদিত টেস্ট প্রতিষ্ঠান</h5>


	<h2 style="font-size: 30px;margin-top: 30px" class="notranslate">সরকারি করোনা পরীক্ষা কেন্দ্র</h2>


</div>
<div class="table-responsive" data-aos="zoom-in" data-aos-duration="1000">
<table id="dtBasicExample2" class="table table-striped table-bordered " cellspacing="0" width="100%">
<thead>


<tr role="row" style="background-color: #58547e;">
<!-- <th style="text-align: center">Serial</th> -->

<th class="notranslate" style="text-align: center;color: white">বিভাগ</th>
<th class="notranslate" style="text-align: center;color: white">জেলা</th>
<th class="notranslate" style="text-align: center;color: white">টেস্ট প্রতিষ্ঠান</th>


</tr>
</thead>
<tbody>
	<?php 
	$govt_lab_count=0;
	while($govt_lab_query && $result=mysqli_fetch_array($govt_lab_query, MYSQLI_ASSOC)){
        $govt_lab_count++;
?>
	<tr style="background-color: white !important">
		<!-- <td style="text-align: center"><?=$govt_lab_count?></td> -->
		

		<td class="notranslate" style="text-align: center"><span style="opacity: 0;display: none;"><?=$result['lab_division']?> </span><?=$result['lab_division_bn']?></td>
		<td class="notranslate" style="text-align: center"><span style="opacity: 0;display: none;"><?=$result['lab_district']?> </span><?=$result['lab_district_bn']?></td>
		<td class="notranslate" style="text-align: center"><span style="opacity: 0;display: none;"><?=$result['lab_name']?> </span><?=$result['lab_name_bn']?></td>

	
		
		
	</tr>

<?php }?>
</tbody>
</table>
</div>
</div>



<div class="container" style="margin-top: 150px">
<div class="main_title text-center" data-aos="fade-down" data-aos-duration="1000">
	

	<h2 style="font-size: 30px;margin-top: 30px" class="notranslate">বেসরকারি করোনা পরীক্ষা কেন্দ্র</h2>


</div>
<div class="table-responsive" data-aos="zoom-in" data-aos-duration="1000">
<table id="dtBasicExample3" class="table table-striped table-bordered " cellspacing="0" width="100%">
<thead>


<tr role="row" style="background-color: #58547e;">
<!-- <th style="text-align: center">Serial</th> -->

<th class="notranslate" style="text-align: center;color: white">বিভাগ</th>
<th class="notranslate" style="text-align: center;color: white">জেলা</th>
<th class="notranslate" style="text-align: center;color: white">টেস্ট প্রতিষ্ঠান</th>


</tr>
</thead>
<tbody>
	<?php 
	$private_lab_count=0;
	while($private_lab_query && $result1=mysqli_fetch_array($private_lab_query, MYSQLI_ASSOC)){
        $private_lab_count++;
?>
	<tr style="background-color: white !important">
		<!-- <td style="text-align: center"><?=$hospital_count?></td> -->
		
		

		<td class="notranslate" style="text-align: center"><span style="opacity: 0;display: none;"><?=$result1['lab_division']?> </span><?=$result1['lab_division_bn']?></td>
		<td class="notranslate" style="text-align: center"><span style="opacity: 0;display: none;"><?=$result1['lab_district']?> </span><?=$result1['lab_district_bn']?></td>
		<td class="notranslate" style="text-align: center"><span style="opacity: 0;display: none;"><?=$result1['lab_name']?> </span><?=$result1['lab_name_bn']?></td>

	
		
		
	</tr>

<?php }?>
</tbody>
</table>
</div>
</div>
</section>