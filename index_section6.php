<style type="text/css">
	@media screen and (max-width: 460px){
		.ambulance_services_text{
			font: 700 36px quicksand,sans-serif !important;
		}
	}
</style>
<section class="data_table_area ambulance_section" id="ambulance_section" style="background-color: #f5f5f9;margin-top: 60px;" data-aos="zoom-in" data-aos-duration="1000">
<div class="container">
<div class="main_title text-center">
	
	<h2 class="notranslate" id="hospitals_nearby_text" style="font-size: 38px;color: #01cfbe;font-weight: normal;">কাছাকাছি এ্যাম্বুলেন্স</h2>


	<h3 class="notranslate ambulance_services_text" style="font: 700 48px quicksand,sans-serif;">এ্যাম্বুলেন্স সেবা</h3>


</div>
<div class="table-responsive">
<table id="dtBasicExample1" class="table table-striped table-bordered " cellspacing="0" width="100%">
<thead>


	<tr class="notranslate" role="row" style="background-color: #58547e;">
<th style="text-align: center;color: white">কোম্পানির নাম</th>
<th style="text-align: center;color: white">সার্ভিস এলাকা</th>
<th style="text-align: center;color: white">ফোন নাম্বার</th>

</tr>

</thead>
<tbody>
	<?php 
	$ambulance_count=0;
	while($ambulance_query && $result1=mysqli_fetch_array($ambulance_query, MYSQLI_ASSOC)){
        $ambulance_count++;
?>
	<tr style="background-color: white !important">
		<!-- <td style="text-align: center"><?=$hospital_count?></td> -->
		
		<td class="notranslate" style="text-align: center;width: 30%">
		
		<span style="opacity: 0;display: none;"><?=$result1['company_name']?> </span><?=$result1['company_name_bn']?>

	</td>

	
		<td class="notranslate" style="text-align: center"><span style="opacity: 0;display: none;"><?=$result1['service_area']?> </span><?=$result1['service_area_bn']?></td>
	
		<td class="notranslate" style="text-align: center"><a href="tel:<?=$result1['contact_number']?>" style="color: #58547e"><?=BanglaConverter::en2bn($result1['contact_number'])?></a></td>
		

	
		
	</tr>

<?php }?>
</tbody>
</table>
</div>
</div>
</section>