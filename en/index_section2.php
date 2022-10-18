<?php 

require('../admin/db.inc.php');

$hospital_query = mysqli_query($dbc, "SELECT * from tbl_hospital_info where hospital_remove_status=0 and general_bed<>'N/A' order by icu_bed desc");

include 'english_to_bangla.php';

if (isset($_POST['hospital_section'])) {
	
	$lang = $_POST['lang'];

	$output = '';


		$output .= '
<table id="dtBasicExample" class="table table-striped table-bordered " cellspacing="0" width="100%">
<thead>
<tr role="row" style="background-color: #58547e;border-bottom: 0px !important">

<th style="text-align: center;"></th>

<th colspan="2" style="text-align: center">Beds Available</th>

<th style="text-align: center"></th>
<th style="text-align: center"></th>
<th style="text-align: center"></th>



</tr>

<tr class="notranslate" role="row" style="background-color: #58547e;">
	
<th style="text-align: center;">Hospital Name</th>
<th style="text-align: center">General</th>
<th style="text-align: center">ICU</th>
<th style="text-align: center;display: none;opacity: 0">ICU</th>
<th style="text-align: center">Location</th>
<th style="text-align: center">Full Address</th>
<th style="text-align: center">Last Updated</th>


</tr>
</thead>
<tbody>';
	 
	$hospital_count=0;
	while($hospital_query && $result=mysqli_fetch_array($hospital_query, MYSQLI_ASSOC)){
        $hospital_count++;

	$output .= '<tr style="background-color: white !important">
	
		<td style="text-align: center;width: 30%">';
			if($result['hospital_name']=='Dhaka Medical College Hospital'){
			$output .= '<span><span style="opacity: 0;display: none;"> Dhaka Medical College Hospital </span>'.$result['hospital_name'].'</span>';
		 }else{
			$output .= ''.$result['hospital_name'].'';
			 }

			$output .= '<br><a href="tel:'.$result['hospital_phone_number'].'" style="color: #58547e">'.$result['hospital_phone_number'].'</a></td>
		<td style="text-align: center">'.$result['general_bed'].'</td>
		<td style="text-align: center">'.$result['icu_bed'].'</td>';

		if($result['hospital_name']=='DNCC Dedicated Covid-19 Hospital'){
		$output .= '<td style="text-align: center;display: none;opacity: 0">-1</td>';
	 }else{
		$output .= '<td style="text-align: center;display: none;opacity: 0">'.$result['icu_bed'].'</td>';
	 }

		$output .= '<td style="text-align: center">'.$result['hospital_location'].'</td>
		<td style="text-align: center">'.str_replace(', Bangladesh','',$result['hospital_full_address']).'</td>
		<td style="text-align: center">'.$result['updated_date'].'</td>';
		
		
		
	$output .= '</tr>';

 }
$output .= '</tbody>
</table>';



	echo $output;
}


?>


<script type="text/javascript" src="../admin/js/addons/datatables.min.js" defer></script>

<script type="text/javascript">
	
	if (screen.width <= 460) {


$('#dtBasicExample').DataTable({

  	'lengthMenu':[3,5,10,20],
  	"aaSorting": [[3,'desc']]
  });

$('#dtBasicExample1').DataTable({

  	'lengthMenu':[3,5,10,20]
  });




}else{

	

$('#dtBasicExample1').DataTable();



$('#dtBasicExample').DataTable( {
    "aaSorting": [[3,'desc']]
  } );



}

$('.dataTables_length').addClass('bs-select');


var search_icon = $('input[type="search"]').attr('placeholder','🔍');

  //under table text
  
  var under_table_txt = $('#dtBasicExample_info')[0].outerText = 'Data source: DHIS2 | Technical assistance by: UNICEF \nCall to know more about hospital beds availability';



if (screen.width<=460) {

  	var swipe_txt = $('#dtBasicExample1_paginate').children('ul').addClass('ambulance_pagination');
   


  	var search_icon = $('input[aria-controls="dtBasicExample"]').attr('placeholder','🔍 Search hospitals by names or location');
  	var search_icon1 = $('input[aria-controls="dtBasicExample1"]').attr('placeholder','🔍 Search ambulance by names or location');

    
  	


  	
  }


if(screen.width <=460){
	//customize select box of table
var select = $("select").children('option')[0].value=3;
  var select1 = $("select").children('option');
  $("select").children('option')[0].defaultSelected = true;
  $("select").children('option')[0].autofocus = true;
  $("select").children('option')[0].isConnected = true;
  $("select").children('option')[0].attributes[0].isConnected = true;
  $("select").children('option')[0].attributes[0].nodeValue = "3";
  $("select").children('option')[0].firstChild.data ="3";
  $("select").children('option')[0].firstChild.nodeValue ="3";
  $("select").children('option')[0].nodeValue =3;
  
}


</script>