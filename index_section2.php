<?php 

require('admin/db.inc.php');

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

	<th class="notranslate" colspan="2" style="text-align: center">শয্যার প্রাপ্যতা</th>

<th style="text-align: center"></th>
<th style="text-align: center"></th>
<th style="text-align: center"></th>



</tr>

<tr class="notranslate" role="row" style="background-color: #58547e;">
	
	<th style="text-align: center;">হাসপাতালের নাম</th>
<th style="text-align: center">সাধারণ</th>
<th style="text-align: center">আইসিইউ</th>
<th style="text-align: center;display: none;opacity: 0">আইসিইউ</th>
<th style="text-align: center">অবস্থান</th>
<th style="text-align: center">পুরো ঠিকানা</th>
<th style="text-align: center">সর্বশেষ সংষ্করণ</th>




</tr>
</thead>
<tbody>';
	
	$hospital_count=0;
	while($hospital_query && $result=mysqli_fetch_array($hospital_query, MYSQLI_ASSOC)){
        $hospital_count++;

	$output .= '<tr style="background-color: white !important">
	
		
		<td class="notranslate" style="text-align: center;width: 30%">
			
			<span style="opacity: 0;display: none;">'.$result['hospital_name'].' </span>'.$result['hospital_name_bn'].'
			
			<br><span class="notranslate"><a href="tel:'.$result['hospital_phone_number'].'" style="color: #58547e">'.BanglaConverter::en2bn($result['hospital_phone_number']).'</a></span></td>
		<td class="notranslate" style="text-align: center">'.BanglaConverter::en2bn($result['general_bed']).'</td>
		<td class="notranslate" style="text-align: center">'.BanglaConverter::en2bn($result['icu_bed']).'</td>';

		if($result['hospital_name']=='DNCC Dedicated Covid-19 Hospital'){
		$output .= '<td  style="display: none;opacity: 0;text-align: center">-1</td>';
	 }else{
		$output .= '<td  style="display: none;opacity: 0;text-align: center">'.$result['icu_bed'].'</td>';
	 }

		
		$output .= '<td class="notranslate" style="text-align: center"><span style="display: none;opacity: 0">'.$result['hospital_location'].'</span>'.$result['hospital_location_bn'].'</td>
	
	
		<td class="notranslate" style="text-align: center">
			
			<span style="display: none;opacity: 0">'.$result['hospital_full_address'].'</span>'.$result['hospital_full_address_bn'].'
		
		</td>

		
		
		<td style="text-align: center">'.BanglaConverter::en2bn($result['updated_date']).'</td>
		
		
	</tr>';

 }
$output .= '</tbody>
</table>
';
	


	echo $output;
}


?>


<script type="text/javascript" src="admin/js/addons/datatables.min.js" defer></script>

<script type="text/javascript">
	
	if (screen.width <= 460) {


	$('#dtBasicExample').DataTable({

  	'lengthMenu':[3,5,10,20],
  	"aaSorting": [[3,'desc']],
  	"language": {
            "lengthMenu": "দেখান _MENU_ এন্ট্রি",
            "zeroRecords": "কোনো রেকর্ড পাওয়া যায়নি",
            "info": "Showing page _PAGE_ of _PAGES_",
            "infoEmpty": "কোনো রেকর্ড পাওয়া যায়নি",
            "infoFiltered": "(filtered from _MAX_ total records)",
            "sSearch": "অনুসন্ধান করুন:",
            'paginate': {
		      'previous': 'আগে',
		      'next': 'পরে'
    		}
        }
  });

$('#dtBasicExample1').DataTable({

  	'lengthMenu':[3,5,10,20],
  	"language": {
            "lengthMenu": "দেখান _MENU_ এন্ট্রি",
            "zeroRecords": "কোনো রেকর্ড পাওয়া যায়নি",
            "info": "Showing page _PAGE_ of _PAGES_",
            "infoEmpty": "কোনো রেকর্ড পাওয়া যায়নি",
            "infoFiltered": "(filtered from _MAX_ total records)",
            "sSearch": "অনুসন্ধান করুন:",
            'paginate': {
		      'previous': 'আগে',
		      'next': 'পরে'
    		}
        }
  });



}else{

	
$('#dtBasicExample1').DataTable({

	"language": {
            "lengthMenu": "দেখান _MENU_ এন্ট্রি",
            "zeroRecords": "কোনো রেকর্ড পাওয়া যায়নি",
            "info": "Showing page _PAGE_ of _PAGES_",
            "infoEmpty": "কোনো রেকর্ড পাওয়া যায়নি",
            "infoFiltered": "(filtered from _MAX_ total records)",
            "sSearch": "অনুসন্ধান করুন:",
            'paginate': {
		      'previous': 'আগে',
		      'next': 'পরে'
    		}
        }
});



$('#dtBasicExample').DataTable( {
    "aaSorting": [[3,'desc']],
    "language": {
            "lengthMenu": "দেখান _MENU_ এন্ট্রি",
            "zeroRecords": "কোনো রেকর্ড পাওয়া যায়নি",
            "info": "Showing page _PAGE_ of _PAGES_",
            "infoEmpty": "কোনো রেকর্ড পাওয়া যায়নি",
            "infoFiltered": "(filtered from _MAX_ total records)",
            "sSearch": "অনুসন্ধান করুন:",
            'paginate': {
		      'previous': 'আগে',
		      'next': 'পরে'
    		}
        }

      
  } );



}

$('.dataTables_length').addClass('bs-select');


var search_icon = $('input[type="search"]').attr('placeholder','🔍');

  //under table text
 
	var under_table_txt = $('#dtBasicExample_info')[0].outerText = 'ডেটা উত্স: ডিএইচআইএস২ | কারিগরি সহায়তা: ইউনিসেফ \nহাসপাতালের শয্যা প্রাপ্যতা সম্পর্কে আরও জানতে কল করুন';
	$('#dtBasicExample_wrapper').children('div').children('.col-md-5').addClass('notranslate');



if (screen.width<=460) {

  	var swipe_txt = $('#dtBasicExample1_paginate').children('ul').addClass('ambulance_pagination');
   

  	

  	var search_icon = $('input[aria-controls="dtBasicExample"]').attr('placeholder','🔍 হাসপাতাল অনুসন্ধান করুন নাম অথবা অবস্থান দিয়ে');
  	$('input[aria-controls="dtBasicExample"]').addClass('notranslate');

  	var search_icon1 = $('input[aria-controls="dtBasicExample1"]').attr('placeholder','🔍 অ্যাম্বুলেন্স অনুসন্ধান করুন নাম অথবা এলাকা দিয়ে');
  	$('input[aria-controls="dtBasicExample1"]').addClass('notranslate');

    
  

  	
  }




	var select0 = replaceNumbers($("select").children('option')[0].innerText);
var select1 = replaceNumbers($("select").children('option')[1].innerText);
var select2 = replaceNumbers($("select").children('option')[2].innerText);
var select3 = replaceNumbers($("select").children('option')[3].innerText);

$("select").children('option')[0].innerText = select0;
$("select").children('option')[1].innerText = select1;
$("select").children('option')[2].innerText = select2;
$("select").children('option')[3].innerText = select3;


var select4 = replaceNumbers($('select[name="dtBasicExample1_length"]').children('option')[0].innerText);
var select5 = replaceNumbers($('select[name="dtBasicExample1_length"]').children('option')[1].innerText);
var select6 = replaceNumbers($('select[name="dtBasicExample1_length"]').children('option')[2].innerText);
var select7 = replaceNumbers($('select[name="dtBasicExample1_length"]').children('option')[3].innerText);

$('select[name="dtBasicExample1_length"]').children('option')[0].innerText = select4;
$('select[name="dtBasicExample1_length"]').children('option')[1].innerText = select5;
$('select[name="dtBasicExample1_length"]').children('option')[2].innerText = select6;
$('select[name="dtBasicExample1_length"]').children('option')[3].innerText = select7;



if(screen.width<=460){
//customize select box of table
var select = $("select").children('option')[0].value=3;
  var select1 = $("select").children('option');
  $("select").children('option')[0].defaultSelected = true;
  $("select").children('option')[0].autofocus = true;
  $("select").children('option')[0].isConnected = true;
  $("select").children('option')[0].attributes[0].isConnected = true;
  $("select").children('option')[0].attributes[0].nodeValue = "3";
  $("select").children('option')[0].firstChild.data ="৩";
  $("select").children('option')[0].firstChild.nodeValue ="৩";
  $("select").children('option')[0].nodeValue =3;

}
  


</script>