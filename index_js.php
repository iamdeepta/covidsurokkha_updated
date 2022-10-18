<script src="assets/js/jquery-3.4.1.min.js"></script>

<script defer src="assets/js/bootstrap.min.js"></script>

<script defer src="assets/vendors/slick/slick.min.js"></script>
<script defer src="assets/vendors/scroll-animation/jquery.parallax-scroll.js"></script>
<script defer src="assets/vendors/scroll-animation/parallax.js"></script>
<script defer src="assets/vendors/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script defer src="assets/vendors/animate-css/wow.min.js"></script>
<script defer src="assets/js/jquery.validate.min.js"></script>
<script defer src="assets/js/theme.js"></script>



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
      //console.log(total_deaths_bd);
			//var total_recovered_bd = data_bd[15].recovered;
			var new_cases_bd = data_bd[15].todayCases;
      //console.log(new_cases_bd);

			/*var abcd = 1234;
			console.log(abcd.en2bn());*/

			var bd_flag = data_bd[15].countryInfo.flag;

			//$("#total_Cases_bd").html(total_cases_bd);

			fetch("https://corona.lmao.ninja/v2/historical?lastdays=2").then(res=>{
				res.json().then(data_bd1=>{

					
					var today = new Date();
					var yesterday = new Date(today);
          var today1 = new Date(today);
					yesterday.setDate(today.getDate() - 2);
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

					//console.log(yesterday);

					//console.log(data_bd1[20].timeline.cases);
					
					prev_cases = data_bd1[20].timeline.cases[today1] - data_bd1[20].timeline.cases[yesterday];
					prev_deaths = data_bd1[20].timeline.deaths[today1] - data_bd1[20].timeline.deaths[yesterday];

          //console.log(yesterday);



					if(total_deaths_bd!=0){
			

				$("#total_Deaths_bd").html(replaceNumbers(JSON.stringify(total_deaths_bd)));
				//$("#total_Recovered_bd").html(total_recovered_bd);
				$("#new_Cases_bd").html(replaceNumbers(JSON.stringify(new_cases_bd)));
			

		}else{

      if(prev_deaths!=0){

			

				$("#total_Deaths_bd").html(replaceNumbers(JSON.stringify(prev_deaths)));
				//$("#total_Recovered_bd").html(total_recovered_bd);
				$("#new_Cases_bd").html(replaceNumbers(JSON.stringify(prev_cases)));
			

    }else{

      //user input data goes here....

     

        $("#total_Deaths_bd").html(replaceNumbers(JSON.stringify(38)));
        $("#new_Cases_bd").html(replaceNumbers(JSON.stringify(2325)));
      

    }

		}
				})


			});
			
		

			//$("#bd_flag").attr("src",bd_flag);
		});
	});
	




  $(document).ready(function() {

  	



});
</script>


<script type="text/javascript">

	
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



</script>

<script type="text/javascript">
	
	
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