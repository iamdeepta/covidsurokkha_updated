<script src="assets/js/jquery-3.4.1.min.js"></script>
<!-- <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script> -->
<!-- <script defer src="assets/js/popper.min.js"></script> -->
<script defer src="assets/js/bootstrap.min.js"></script>
<!-- <script src="assets/vendors/corona-live/dashboard.js"></script>
<script src="assets/vendors/isotop/imagesloaded.pkgd.min.js"></script>
<script src="assets/vendors/isotop/isotope.pkgd.min.js"></script> -->
<script defer src="assets/vendors/slick/slick.min.js"></script>
<script defer src="assets/vendors/scroll-animation/jquery.parallax-scroll.js"></script>
<script defer src="assets/vendors/scroll-animation/parallax.js"></script>
<script defer src="assets/vendors/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script defer src="assets/vendors/animate-css/wow.min.js"></script>
<script defer src="assets/js/jquery.validate.min.js"></script>
<script defer src="assets/js/theme.js"></script>



<!-- <script src="assets/vendors/corona-live/jquery.dataTables.min.js"></script>
<script src="assets/vendors/corona-live/datatable.js"></script> -->

<!-- <script defer type="text/javascript" src="admin/js/addons/datatables.min.js"></script> -->


<!-- menu active change -->
<script type="text/javascript">
  $(function(){
    $('.navbar-nav .nav-link').filter(function(){return this.href==location.href}).parent().addClass('active').siblings().removeClass('active')
    $('.navbar-nav .dropdown-item').filter(function(){return this.href==location.href}).parent().parent().addClass('active').siblings().removeClass('active')
    $('.navbar-nav .dropdown-item').filter(function(){return this.href==location.href}).addClass('active').siblings().removeClass('active')
    $('.navbar-nav a').click(function(){
      $(this).parent().addClass('active').siblings().removeClass('active')  
    })
    
  })
  </script>


  <script type="text/javascript">

//translate eng to bangla
  	var numbers = {
  0: '০',
  1: '১',
  2: '২',
  3: '৩',
  4: '৪',
  5: '৫',
  6: '৬',
  7: '৭',
  8: '৮',
  9: '৯'
};

function replaceNumbers(input) {
  var output = [];
  for (var i = 0; i < input.length; ++i) {
    if (numbers.hasOwnProperty(input[i])) {
      output.push(numbers[input[i]]);
    } else {
      output.push(input[i]);
    }
  }
  return output.join('');
}

/*function replaceString(str){

	dhaka_str = str.replace("Dhaka","ঢাকা");

	return dhaka_str;
}*/

/*document.getElementById('r').textContent = replaceNumbers('৯  ৭  ৩');*/

//getting url last string
 var url = window.location.href;
 var parts = url.split('=');
var lastSegment = parts.pop() || parts.pop();

//console.log(lastSegment);


//bangladesh data
	fetch("https://corona.lmao.ninja/v2/countries?yesterday=&sort=").then(res=>{
		res.json().then(data_bd=>{
			//console.log(data_bd[15]);



			//var total_cases_bd = data_bd[15].cases;
			var total_deaths_bd = data_bd[15].todayDeaths;
			//var total_recovered_bd = data_bd[15].recovered;
			var new_cases_bd = data_bd[15].todayCases;

			/*var abcd = 1234;
			console.log(abcd.en2bn());*/

			var bd_flag = data_bd[15].countryInfo.flag;

			//$("#total_Cases_bd").html(total_cases_bd);

			fetch("https://corona.lmao.ninja/v2/historical?lastdays=2").then(res=>{
				res.json().then(data_bd1=>{

					
					var today = new Date();
					var yesterday = new Date(today);
					yesterday.setDate(today.getDate() - 2);

          var today1 = new Date(today);
          today1.setDate(today.getDate() - 1);

					var dd = yesterday.getDate();
					//var dd1 = dd.toString().substr(-1);
					var mm = yesterday.getMonth()+1; //January is 0!
					//console.log(mm);
					//var mm1 = mm.toString().substr(-1);

					var yy = yesterday.getFullYear().toString().substr(-2);
					/*if(dd<10){
						dd='0'+dd;
					}*/ 
					/*if(mm<10){
						mm='0'+mm;
					}*/ 
					yesterday = mm+'/'+dd+'/'+yy;
					//console.log(yesterday);


          var dd1 = today1.getDate();
          //var dd1 = dd.toString().substr(-1);
          var mm1 = today1.getMonth()+1; //January is 0!
          //console.log(mm);
          //var mm1 = mm.toString().substr(-1);

          var yy1 = today1.getFullYear().toString().substr(-2);
          /*if(dd<10){
            dd='0'+dd;
          }*/ 
          /*if(mm<10){
            mm='0'+mm;
          }*/ 
          today1 = mm1+'/'+dd1+'/'+yy1;

					//console.log(data_bd1[20].timeline.cases);
					
					prev_cases = data_bd1[20].timeline.cases[today1] - data_bd1[20].timeline.cases[yesterday];
					prev_deaths = data_bd1[20].timeline.deaths[today1] - data_bd1[20].timeline.deaths[yesterday];

          //console.log(prev_cases);


					if(total_deaths_bd!=0){
			

				$("#total_Deaths_bd").html(total_deaths_bd);
				$("#new_Cases_bd").html(new_cases_bd);
			

		}else{

      if(prev_deaths!=0){

			

				$("#total_Deaths_bd").html(prev_deaths);
				$("#new_Cases_bd").html(prev_cases);
		

    }else{

      //user input data goes here....

   

        $("#total_Deaths_bd").html(38);
        $("#new_Cases_bd").html(2325);
      

    }

		}
				})


			});
			
		

			//$("#bd_flag").attr("src",bd_flag);
		});
	});
	




  $(document).ready(function() {

  	
// if (screen.width <= 460) {

// $('#dtBasicExample').DataTable({

//   	'lengthMenu':[3,5,10,20],
//   	"aaSorting": [[3,'desc']]
//   });

// $('#dtBasicExample1').DataTable({

//   	'lengthMenu':[3,5,10,20]
//   });


// }else{

// $('#dtBasicExample1').DataTable();



// $('#dtBasicExample').DataTable( {
//     "aaSorting": [[3,'desc']]
//   } );

// }
 

  // $('.dataTables_length').addClass('bs-select');

  /*console.log($('#dtBasicExample_length'));

  var show_text = $('#dtBasicExample_length')[0].innerText;
  var updated_show_text = show_text.replace("Show",'দেখান');

  console.log(updated_show_text);*/



//console.log($('#division_table'));
//customize table components
  //var search_icon = $('input[type="search"]').attr('placeholder','🔍');

  //under table text
//   if(lastSegment=='en'){
//   var under_table_txt = $('#dtBasicExample_info')[0].outerText = 'Data source: DHIS2 | Technical assistance by: UNICEF \nCall to know more about hospital beds availability';
// }else{
// 	var under_table_txt = $('#dtBasicExample_info')[0].outerText = 'ডেটা উত্স: ডিএইচআইএস২ | কারিগরি সহায়তা: ইউনিসেফ \nহাসপাতালের শয্যা প্রাপ্যতা সম্পর্কে আরও জানতে কল করুন';
// 	$('#dtBasicExample_wrapper').children('div').children('.col-md-5').addClass('notranslate');
// }
  /*$('#dtBasicExample_info')[0].outerText.addClass('under_table_txt');*/

  /*$('#dtBasicExample1_info')[0].outerText = 'Data source: DHIS2 | Technical assistance by: UNICEF';
  $('#dtBasicExample1_info')[0].outerText.css('font-size','12px !important');*/


  // if (screen.width<=460) {

  // 	var swipe_txt = $('#dtBasicExample1_paginate').children('ul').addClass('ambulance_pagination');
   

  // 	if(lastSegment=='en'){

  // 	var search_icon = $('input[aria-controls="dtBasicExample"]').attr('placeholder','🔍 Search hospitals by names or location');
  // 	var search_icon1 = $('input[aria-controls="dtBasicExample1"]').attr('placeholder','🔍 Search ambulance by names or location');

    
  	

  // }else{

  // 	var search_icon = $('input[aria-controls="dtBasicExample"]').attr('placeholder','🔍 হাসপাতাল অনুসন্ধান করুন নাম অথবা অবস্থান দিয়ে');
  // 	$('input[aria-controls="dtBasicExample"]').addClass('notranslate');

  // 	var search_icon1 = $('input[aria-controls="dtBasicExample1"]').attr('placeholder','🔍 অ্যাম্বুলেন্স অনুসন্ধান করুন নাম অথবা এলাকা দিয়ে');
  // 	$('input[aria-controls="dtBasicExample1"]').addClass('notranslate');

    
  // }

  	
  // }

  //console.log($("#dtBasicExample_filter"));



  /*var tbl_below_text0 = replaceNumbers($('.dataTables_info')[0].innerText);
  var tbl_below_text1 = replaceNumbers($('.dataTables_info')[0].outerText);
  var tbl_below_text2 = replaceNumbers($('.dataTables_info')[0].textContent);
  	$('.dataTables_info')[0].innerText=tbl_below_text0;
  	
  	$('.dataTables_info')[0].textContent=tbl_below_text2;*/
//console.log($('.paginate_button'));

/*$('.page-link').click(function(){

console.log($('.page-link').addClass('notranslate'));
});

var pagination1 = replaceNumbers($('a[data-dt-idx="1"]')[0].innerHTML);
var pagination2 = replaceNumbers($('a[data-dt-idx="2"]')[0].innerHTML);
var pagination3 = replaceNumbers($('a[data-dt-idx="3"]')[0].innerHTML);
var pagination4 = replaceNumbers($('a[data-dt-idx="4"]')[0].innerHTML);
var pagination5 = replaceNumbers($('a[data-dt-idx="5"]')[0].innerHTML);
var pagination6 = replaceNumbers($('a[data-dt-idx="6"]')[0].innerHTML);
var pagination7 = replaceNumbers($('a[data-dt-idx="7"]')[0].innerHTML);

console.log($('a[data-dt-idx="2"]'));

$('a[data-dt-idx="1"]')[0].innerHTML = pagination1;

$('a[data-dt-idx="2"]')[0].innerHTML = pagination2;

$('a[data-dt-idx="3"]')[0].innerHTML = pagination3;

$('a[data-dt-idx="4"]')[0].innerHTML = pagination4;

$('a[data-dt-idx="5"]')[0].innerHTML = pagination5;

$('a[data-dt-idx="6"]')[0].innerHTML = pagination6;

$('a[data-dt-idx="7"]')[0].innerHTML = pagination7;*/
//console.log($('.table-responsive'));
// if(lastSegment=='bn'){
// var select0 = replaceNumbers($("select").children('option')[0].innerText);
// var select1 = replaceNumbers($("select").children('option')[1].innerText);
// var select2 = replaceNumbers($("select").children('option')[2].innerText);
// var select3 = replaceNumbers($("select").children('option')[3].innerText);

// $("select").children('option')[0].innerText = select0;
// $("select").children('option')[1].innerText = select1;
// $("select").children('option')[2].innerText = select2;
// $("select").children('option')[3].innerText = select3;


// var select4 = replaceNumbers($('select[name="dtBasicExample1_length"]').children('option')[0].innerText);
// var select5 = replaceNumbers($('select[name="dtBasicExample1_length"]').children('option')[1].innerText);
// var select6 = replaceNumbers($('select[name="dtBasicExample1_length"]').children('option')[2].innerText);
// var select7 = replaceNumbers($('select[name="dtBasicExample1_length"]').children('option')[3].innerText);

// $('select[name="dtBasicExample1_length"]').children('option')[0].innerText = select4;
// $('select[name="dtBasicExample1_length"]').children('option')[1].innerText = select5;
// $('select[name="dtBasicExample1_length"]').children('option')[2].innerText = select6;
// $('select[name="dtBasicExample1_length"]').children('option')[3].innerText = select7;




// if(screen.width<=460){

// var select = $("select").children('option')[0].value=3;
//   var select1 = $("select").children('option');
//   $("select").children('option')[0].defaultSelected = true;
//   $("select").children('option')[0].autofocus = true;
//   $("select").children('option')[0].isConnected = true;
//   $("select").children('option')[0].attributes[0].isConnected = true;
//   $("select").children('option')[0].attributes[0].nodeValue = "3";
//   $("select").children('option')[0].firstChild.data ="৩";
//   $("select").children('option')[0].firstChild.nodeValue ="৩";
//   $("select").children('option')[0].nodeValue =3;

// }
  


// }else if(lastSegment=='en'){

// if(screen.width <=460){
	
// var select = $("select").children('option')[0].value=3;
//   var select1 = $("select").children('option');
//   $("select").children('option')[0].defaultSelected = true;
//   $("select").children('option')[0].autofocus = true;
//   $("select").children('option')[0].isConnected = true;
//   $("select").children('option')[0].attributes[0].isConnected = true;
//   $("select").children('option')[0].attributes[0].nodeValue = "3";
//   $("select").children('option')[0].firstChild.data ="3";
//   $("select").children('option')[0].firstChild.nodeValue ="3";
//   $("select").children('option')[0].nodeValue =3;
  
// }

// }else{

// 	var select0 = replaceNumbers($("select").children('option')[0].innerText);
// var select1 = replaceNumbers($("select").children('option')[1].innerText);
// var select2 = replaceNumbers($("select").children('option')[2].innerText);
// var select3 = replaceNumbers($("select").children('option')[3].innerText);

// $("select").children('option')[0].innerText = select0;
// $("select").children('option')[1].innerText = select1;
// $("select").children('option')[2].innerText = select2;
// $("select").children('option')[3].innerText = select3;


// var select4 = replaceNumbers($('select[name="dtBasicExample1_length"]').children('option')[0].innerText);
// var select5 = replaceNumbers($('select[name="dtBasicExample1_length"]').children('option')[1].innerText);
// var select6 = replaceNumbers($('select[name="dtBasicExample1_length"]').children('option')[2].innerText);
// var select7 = replaceNumbers($('select[name="dtBasicExample1_length"]').children('option')[3].innerText);

// $('select[name="dtBasicExample1_length"]').children('option')[0].innerText = select4;
// $('select[name="dtBasicExample1_length"]').children('option')[1].innerText = select5;
// $('select[name="dtBasicExample1_length"]').children('option')[2].innerText = select6;
// $('select[name="dtBasicExample1_length"]').children('option')[3].innerText = select7;



// if(screen.width<=460){

// var select = $("select").children('option')[0].value=3;
//   var select1 = $("select").children('option');
//   $("select").children('option')[0].defaultSelected = true;
//   $("select").children('option')[0].autofocus = true;
//   $("select").children('option')[0].isConnected = true;
//   $("select").children('option')[0].attributes[0].isConnected = true;
//   $("select").children('option')[0].attributes[0].nodeValue = "3";
//   $("select").children('option')[0].firstChild.data ="৩";
//   $("select").children('option')[0].firstChild.nodeValue ="৩";
//   $("select").children('option')[0].nodeValue =3;

// }
  



// }



  /*var table = $("#dtBasicExample")[0].tBodies[0].childElementCount=3;*/

  //console.log(table);

  //var select = $("select").children('option');
  

  /*$('option').attr('value',select);
  $('option').attr('selected','selected');*/
//console.log(select1);


//here lies call now


});
</script>


<script type="text/javascript">

	//english to bangla converter

	/*var finalEnlishToBanglaNumber={'0':'০','1':'১','2':'২','3':'৩','4':'৪','5':'৫','6':'৬','7':'৭','8':'৮','9':'৯','Dhaka':'ঢাকা'};
 
String.prototype.en2bn = function() {
    var retStr = this;
    for (var x in finalEnlishToBanglaNumber) {
         retStr = retStr.replace(new RegExp(x, 'g'), finalEnlishToBanglaNumber[x]);
    }
    return retStr;
};*/


/*function en2bn(num){

if(num==0){

	return '০';
}else{

	return 1;
}
}*/

  // handle potential trailing slash

//console.log(lastSegment);
		


	//worldwide data
	/*fetch("https://corona.lmao.ninja/v2/all?yesterday=").then(res=>{
		res.json().then(data=>{

			var total_cases = data.cases;
			var total_deaths = data.deaths;
			var total_recovered = data.recovered;
			var new_cases = data.todayCases;

			$("#total_Cases").html(total_cases);
			$("#total_Deaths").html(total_deaths);
			$("#total_Recovered").html(total_recovered);
			$("#new_Cases").html(new_cases);
		})
	});*/

	



	/*fetch("show_division_wise_data.php").then(res=>{
    res.json().then(data=>{
     

      var division_data = data.result;
      temp = '';

      var sl = 0;

      division_data.forEach((div_data)=>{
      	
        sl++;

        temp +='<tr id="division_row'+div_data.division_id+'">';
       	
       	if(lastSegment=='en'){
        temp += '<td>'+div_data.division_name+'</td>';
        temp += '<td style="text-align:center">'+div_data.division_cases+'</td>';
        temp +='<td style="text-align:center">'+div_data.division_deaths+'</td>';
    }else if(lastSegment=='bn'){

    	if(div_data.division_name=='Dhaka'){

    		temp += '<td class="notranslate">'+replaceString(div_data.division_name)+'</td>';
    	}else{

    		temp += '<td>'+div_data.division_name+'</td>';
    	}
    	
    	temp += '<td class="notranslate" style="text-align:center">'+replaceNumbers(div_data.division_cases)+'</td>';
        temp +='<td class="notranslate" style="text-align:center">'+replaceNumbers(div_data.division_deaths)+'</td>';

    }else{

    	if(div_data.division_name=='Dhaka'){

    		temp += '<td class="notranslate">'+replaceString(div_data.division_name)+'</td>';
    	}else{

    		temp += '<td>'+div_data.division_name+'</td>';
    	}
    	
    	temp += '<td class="notranslate" style="text-align:center">'+replaceNumbers(div_data.division_cases)+'</td>';
        temp +='<td class="notranslate" style="text-align:center">'+replaceNumbers(div_data.division_deaths)+'</td>';
    }
        
        
        temp +='</tr>';

      
      });

      $("#tbody_division").html(temp);
      
     
  
    })
  });*/

//$(document).ready(function(){

  if(screen.width>460){

$("#rangpur_path").mouseover(function(){

		$("#division_row7").css("background-color","#01cfbe");
		
	});
$("#rangpur_path").mouseout(function(){

		$("#division_row7").css("background-color","white");
		
	});

// $("#division_row7").mouseover(function(){
// 	$("#division_row7").css("background-color","#01cfbe");

// });




$("#rajshahi_path").mouseover(function(){

		$("#division_row5").css("background-color","#01cfbe");
		
	});
$("#rajshahi_path").mouseout(function(){

		$("#division_row5").css("background-color","white");
		
	});



$("#khulna_path").mouseover(function(){

		$("#division_row4").css("background-color","#01cfbe");
		
	});
$("#khulna_path").mouseout(function(){

		$("#division_row4").css("background-color","white");
		
	});



$("#dhaka_path").mouseover(function(){

		$("#division_row1").css("background-color","#01cfbe");
		
	});
$("#dhaka_path").mouseout(function(){

		$("#division_row1").css("background-color","white");
		
	});



$("#barisal_path").mouseover(function(){

		$("#division_row6").css("background-color","#01cfbe");
		
	});
$("#barisal_path").mouseout(function(){

		$("#division_row6").css("background-color","white");
		
	});



$("#chittagong_path").mouseover(function(){

		$("#division_row2").css("background-color","#01cfbe");
		
	});
$("#chittagong_path").mouseout(function(){

		$("#division_row2").css("background-color","white");
		
	});



$("#sylhet_path").mouseover(function(){

		$("#division_row3").css("background-color","#01cfbe");
		
	});
$("#sylhet_path").mouseout(function(){

		$("#division_row3").css("background-color","white");
		
	});

}

/*var s = $(".custom-select .custom-select-sm .form-control .form-control-sm").children('option').attr('value','3');
console.log(s);*/

//});


</script>

<script type="text/javascript">
	
	/*$('#info_icon').mouseover(function(){

		$('#icon_hover_div').css('display','block');
		$('#icon_hover_div').css('transition','0.5s');
	});

	$('#info_icon').mouseout(function(){


		$('#icon_hover_div').css('display','none');
		$('#icon_hover_div').css('transition','0.5s');
	});

	$('#icon_hover_span').mouseover(function(){

		$('#icon_hover_div').css('display','block !important');
		$('#icon_hover_div').css('transition','0.5s');
	});

	$('#icon_hover_span').mouseout(function(){

		$('#icon_hover_div').css('display','none !important');
		$('#icon_hover_div').css('transition','0.5s');
	});*/
</script>

<script type="text/javascript">
	$(document).ready(function(){

		//menu_is_closed();
	});
	function menu_is_closed(){

		$('body').addClass('menu-is-closed');
		$('body').removeClass('menu-is-opened');
    $('#blur_bg').css('display','none');
		
	}


  $(document).ready(function(){

    $('#blur_bg').click(function(){

    menu_is_closed();
    $('#blur_bg').css('display','none');
  });

    $('#header_menu_bar').click(function(){
      $('#blur_bg').css('display','block');
    });


    $('.close_btn').click(function(){
      $('#blur_bg').css('display','none');
    });

  });


</script>