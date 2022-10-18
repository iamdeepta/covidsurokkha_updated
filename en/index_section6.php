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
	
<h2 id="hospitals_nearby_text" style="font-size: 38px;color: #01cfbe;font-weight: normal;">Nearby Ambulance</h2>


<h3 class="notranslate ambulance_services_text" style="font: 700 48px quicksand,sans-serif;">Ambulance Services</h3>

</div>
<div class="table-responsive">
<table id="dtBasicExample1" class="table table-striped table-bordered " cellspacing="0" width="100%">
<thead>


<tr role="row" style="background-color: #58547e;">
<!-- <th style="text-align: center">Serial</th> -->
<th style="text-align: center;color: white">Company Name</th>
<th style="text-align: center;color: white">Service Area</th>
<th style="text-align: center;color: white">Contact Number</th>

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
		
		<td style="text-align: center;width: 30%"><?=$result1['company_name']?></td>
		<td style="text-align: center"><?=$result1['service_area']?></td>
		<td style="text-align: center"><a href="tel:<?=$result1['contact_number']?>" style="color: #58547e"><?=$result1['contact_number']?></a></td>
		

	
		
	</tr>

<?php }?>
</tbody>
</table>
</div>
</div>
</section>