<!-- <div style="background-color: #272524"> -->
	<style type="text/css">

		/*#marquee_inner_div{

			animation: scrollx 40s linear infinite;
			scroll-behavior: smooth;
		}

		@keyframes scrollx{

			0%{

				transform: translateX(100vw);
				scroll-behavior: smooth;
				
			}

			100%{

				transform: translateX(-120vw);
				scroll-behavior: smooth;
				
			}
		}*/


		#maindiv{
  /*border: 2px solid black;*/
  /* These are absolutely necessary */
  overflow: hidden;
  white-space: nowrap;
}

#div1 {
  display: inline-block;
  /*animation: marquee 10950s linear infinite;*/
  animation: marquee 32s linear infinite;
  /*animation: marquee 50s linear infinite;*/
}


#div2 {
  display: inline-block;
  /*animation: marquee 10950s linear infinite;*/
  animation: marquee_two 36s linear infinite;
  display: none;
  /*animation-delay: 15s;*/
  /*animation: marquee 50s linear infinite;*/
}

/*#div2 {
  display: inline-block;
  animation: marquee2 10s linear infinite;
  
  animation-delay: 5s;
}*/

@keyframes marquee {
  from {
    transform: translateX(100vw);
  }
  to {
    transform: translateX(-100%);
  }
}

/*@keyframes marquee_two {
  from {
    transform: translateX(170vw);
  }
  to {
    transform: translateX(-100vw);
  }
}*/


/*for mobile*/
@media screen and (max-width: 460px) {

	#bulletin{

		margin-top: 90px !important;
	}

#div1 {
  display: inline-block;
  margin-left: -960px !important;
  /*animation: marquee 10950s linear infinite;*/
  animation: marquee 38s linear infinite;
  /*animation: marquee 50s linear infinite;*/
}


#div2 {
  display: inline-block;
  /*animation: marquee 10950s linear infinite;*/
  animation: marquee_two 38s linear infinite;
  animation-delay: 19s;
  /*animation: marquee 50s linear infinite;*/
}

/*#div2 {
  display: inline-block;
  animation: marquee2 10s linear infinite;
  
  animation-delay: 5s;
}*/

@keyframes marquee {
  from {
    transform: translateX(100%);
  }
  to {
    transform: translateX(-100%);
  }
}

@keyframes marquee_two {
  from {
    transform: translateX(0%);
  }
  to {
    transform: translateX(-200%);
  }
}


}
		
		/*#navbar_below_carousel{

			height: 3.5vh;
		}

		#navbar_below_carousel .owl-stage-outer{

			height: 3.4vh;
		}

		#navbar_below_carousel .owl-nav{

			display: none;
		}

		#navbar_below_carousel .owl-dots{

			display: none;
		}

		

		#navbar_below_carousel .owl-stage .owl-item{

			
			text-align: center !important;
		}*/


	</style>


	<?php
/**
 * Requires curl enabled in php.ini
 **/

/*$url = 'https://pro-api.coinmarketcap.com/v1/cryptocurrency/listings/latest';
$parameters = [
  'start' => '1',
  'limit' => '250',
  'convert' => 'USD'
];

$headers = [
  'Accepts: application/json',
  'X-CMC_PRO_API_KEY: 44cd0659-a3dd-4b0e-8623-e3adbeba0d18'
];
$qs = http_build_query($parameters);
$request = "{$url}?{$qs}"; 


$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => $request,            
  CURLOPT_HTTPHEADER => $headers,     
  CURLOPT_RETURNTRANSFER => 1         
));

$response = curl_exec($curl); 
$result = json_decode($response); 

curl_close($curl);*/ 
?>


	<div class="" id="bulletin" style="margin-top: 110px;padding: 0px 20px;background-color: #b3d0ca;">  <!-- #89afa8 #b3d0ca -->

		<div id="maindiv" style="padding-top: 0px;margin-bottom: -32px">
<!-- Need to have two divs with same content.
One div will translate completely out of parent and other div will fill the void till the transition for first div starts again. -->
  <div id="div1">

  	<!-- <?php foreach($result->data as $data){?>

		<span style="font-weight: bold;padding-left: 20px"><span style="color: #ffc700;font-family: sans-serif;"><?php echo $data->name;?></span><span style="color: white;font-family: sans-serif;">: $<?php echo number_format($data->quote->USD->price,2);?> (</span>
		<?php if($data->quote->USD->percent_change_1h>0){?>
		<span style="color: #67db35;font-family: sans-serif;"><?php echo number_format($data->quote->USD->percent_change_1h,2);?>%</span>
		<?php }else{?>
		<span style="color: #d43b3b;font-family: sans-serif;"><?php echo number_format($data->quote->USD->percent_change_1h,2);?>%</span>
		<?php }?>
		<span style="color: white;font-family: sans-serif;">)</span></span>

		<?php }?> -->
		
    <span style="font-weight: bold;padding-left: 20px;color: #000000"><span style="color: #000000;font-family: sans-serif;font-size: 14px">Dial <a href="tel:16263" style="text-decoration: none;color: #000000">16263</a> for free doctor consultation 24/7 every day. If you need information related to Covid-19 sample test, treatment and hospital call - 01313791130, 01313791138, 01313791139, 01313791140, 01321173865</span></span>



  </div>


  <div id="div2">

  	<!-- <?php foreach($result->data as $data){?>

		<span style="font-weight: bold;padding-left: 20px"><span style="color: #ffc700;font-family: sans-serif;"><?php echo $data->name;?></span><span style="color: white;font-family: sans-serif;">: $<?php echo number_format($data->quote->USD->price,2);?> (</span>
		<?php if($data->quote->USD->percent_change_1h>0){?>
		<span style="color: #67db35;font-family: sans-serif;"><?php echo number_format($data->quote->USD->percent_change_1h,2);?>%</span>
		<?php }else{?>
		<span style="color: #d43b3b;font-family: sans-serif;"><?php echo number_format($data->quote->USD->percent_change_1h,2);?>%</span>
		<?php }?>
		<span style="color: white;font-family: sans-serif;">)</span></span>

		<?php }?> -->
		
    <span style="font-weight: bold;padding-left: 20px;color: #000000"><span style="color: #000000;font-family: sans-serif;font-size: 14px">Dial <a href="tel:16263" style="text-decoration: none;color: #000000">16263</a> for free doctor consultation 24/7 every day. If you need information related to Covid-19 sample test, treatment and hospital call - 01313791130, 01313791138, 01313791139, 01313791140, 01321173865</span></span>



  </div>
  <!-- <div id="div2">
    &nbsp;Test-1 Test-2 Test-3 Test-4 Test-5 Test-6 Test-7 Test-8 Test-9 Test-10 Test-11
  </div> -->
</div>


		<!-- <marquee width="100%" scrollamount="3" behaviour="scroll" direction="left">

			<div id="marquee_inner_div1" style="opacity: 0;"> -->

		<!-- <?php foreach($result->data as $data){?>

		<span style="font-weight: bold;padding-left: 20px"><span style="color: #ffc700;font-family: sans-serif;"><?php echo $data->name;?></span><span style="color: white;font-family: sans-serif;">: $<?php echo number_format($data->quote->USD->price,2);?> (</span>
		<?php if($data->quote->USD->percent_change_1h>0){?>
		<span style="color: #67db35;font-family: sans-serif;"><?php echo number_format($data->quote->USD->percent_change_1h,2);?>%</span>
		<?php }else{?>
		<span style="color: #d43b3b;font-family: sans-serif;"><?php echo number_format($data->quote->USD->percent_change_1h,2);?>%</span>
		<?php }?>
		<span style="color: white;font-family: sans-serif;">)</span></span>

		<?php }?> -->
		
		<!-- <span style="font-weight: bold;padding-left: 20px"><span style="color: #ffc700;font-family: sans-serif;">Bitcoin</span><span style="color: white;font-family: sans-serif;">: $912930 (</span><span style="color: #67db35;font-family: sans-serif;">-0.45%</span><span style="color: white;font-family: sans-serif;">)</span></span>

		<span style="font-weight: bold;padding-left: 20px"><span style="color: #ffc700;font-family: sans-serif;">Bitcoin</span><span style="color: white;font-family: sans-serif;">: $912930 (</span><span style="color: #67db35;font-family: sans-serif;">-0.45%</span><span style="color: white;font-family: sans-serif;">)</span></span>

		<span style="font-weight: bold;padding-left: 20px"><span style="color: #ffc700;font-family: sans-serif;">Bitcoin</span><span style="color: white;font-family: sans-serif;">: $912930 (</span><span style="color: #67db35;font-family: sans-serif;">-0.45%</span><span style="color: white;font-family: sans-serif;">)</span></span>

		<span style="font-weight: bold;padding-left: 20px"><span style="color: #ffc700;font-family: sans-serif;">Bitcoin</span><span style="color: white;font-family: sans-serif;">: $912930 (</span><span style="color: #67db35;font-family: sans-serif;">-0.45%</span><span style="color: white;font-family: sans-serif;">)</span></span>

		<span style="font-weight: bold;padding-left: 20px"><span style="color: #ffc700;font-family: sans-serif;">Bitcoin</span><span style="color: white;font-family: sans-serif;">: $912930 (</span><span style="color: #67db35;font-family: sans-serif;">-0.45%</span><span style="color: white;font-family: sans-serif;">)</span></span>

		<span style="font-weight: bold;padding-left: 20px"><span style="color: #ffc700;font-family: sans-serif;">Bitcoin</span><span style="color: white;font-family: sans-serif;">: $912930 (</span><span style="color: #67db35;font-family: sans-serif;">-0.45%</span><span style="color: white;font-family: sans-serif;">)</span></span>

		<span style="font-weight: bold;padding-left: 20px"><span style="color: #ffc700;font-family: sans-serif;">Bitcoin</span><span style="color: white;font-family: sans-serif;">: $912930 (</span><span style="color: #67db35;font-family: sans-serif;">-0.45%</span><span style="color: white;font-family: sans-serif;">)</span></span>

		<span style="font-weight: bold;padding-left: 20px"><span style="color: #ffc700;font-family: sans-serif;">Bitcoin</span><span style="color: white;font-family: sans-serif;">: $912930 (</span><span style="color: #67db35;font-family: sans-serif;">-0.45%</span><span style="color: white;font-family: sans-serif;">)</span></span>

		<span style="font-weight: bold;padding-left: 20px"><span style="color: #ffc700;font-family: sans-serif;">Bitcoin</span><span style="color: white;font-family: sans-serif;">: $912930 (</span><span style="color: #67db35;font-family: sans-serif;">-0.45%</span><span style="color: white;font-family: sans-serif;">)</span></span>

		<span style="font-weight: bold;padding-left: 20px"><span style="color: #ffc700;font-family: sans-serif;">Bitcoin</span><span style="color: white;font-family: sans-serif;">: $912930 (</span><span style="color: #67db35;font-family: sans-serif;">-0.45%</span><span style="color: white;font-family: sans-serif;">)</span></span>

		<span style="font-weight: bold;padding-left: 20px"><span style="color: #ffc700;font-family: sans-serif;">Bitcoin</span><span style="color: white;font-family: sans-serif;">: $912930 (</span><span style="color: #67db35;font-family: sans-serif;">-0.45%</span><span style="color: white;font-family: sans-serif;">)</span></span>

		<span style="font-weight: bold;padding-left: 20px"><span style="color: #ffc700;font-family: sans-serif;">Bitcoin</span><span style="color: white;font-family: sans-serif;">: $912930 (</span><span style="color: #67db35;font-family: sans-serif;">-0.45%</span><span style="color: white;font-family: sans-serif;">)</span></span>

		<span style="font-weight: bold;padding-left: 20px"><span style="color: #ffc700;font-family: sans-serif;">Bitcoin</span><span style="color: white;font-family: sans-serif;">: $912930 (</span><span style="color: #67db35;font-family: sans-serif;">-0.45%</span><span style="color: white;font-family: sans-serif;">)</span></span>

		<span style="font-weight: bold;padding-left: 20px"><span style="color: #ffc700;font-family: sans-serif;">Bitcoin</span><span style="color: white;font-family: sans-serif;">: $912930 (</span><span style="color: #67db35;font-family: sans-serif;">-0.45%</span><span style="color: white;font-family: sans-serif;">)</span></span>

		<span style="font-weight: bold;padding-left: 20px"><span style="color: #ffc700;font-family: sans-serif;">Bitcoin</span><span style="color: white;font-family: sans-serif;">: $912930 (</span><span style="color: #67db35;font-family: sans-serif;">-0.45%</span><span style="color: white;font-family: sans-serif;">)</span></span>

		<span style="font-weight: bold;padding-left: 20px"><span style="color: #ffc700;font-family: sans-serif;">Bitcoin</span><span style="color: white;font-family: sans-serif;">: $912930 (</span><span style="color: #67db35;font-family: sans-serif;">-0.45%</span><span style="color: white;font-family: sans-serif;">)</span></span>

		<span style="font-weight: bold;padding-left: 20px"><span style="color: #ffc700;font-family: sans-serif;">Bitcoin</span><span style="color: white;font-family: sans-serif;">: $912930 (</span><span style="color: #67db35;font-family: sans-serif;">-0.45%</span><span style="color: white;font-family: sans-serif;">)</span></span>

		<span style="font-weight: bold;padding-left: 20px"><span style="color: #ffc700;font-family: sans-serif;">Bitcoin</span><span style="color: white;font-family: sans-serif;">: $912930 (</span><span style="color: #67db35;font-family: sans-serif;">-0.45%</span><span style="color: white;font-family: sans-serif;">)</span></span>

		<span style="font-weight: bold;padding-left: 20px"><span style="color: #ffc700;font-family: sans-serif;">Bitcoin</span><span style="color: white;font-family: sans-serif;">: $912930 (</span><span style="color: #67db35;font-family: sans-serif;">-0.45%</span><span style="color: white;font-family: sans-serif;">)</span></span>

		<span style="font-weight: bold;padding-left: 20px"><span style="color: #ffc700;font-family: sans-serif;">Bitcoin</span><span style="color: white;font-family: sans-serif;">: $912930 (</span><span style="color: #67db35;font-family: sans-serif;">-0.45%</span><span style="color: white;font-family: sans-serif;">)</span></span>

		<span style="font-weight: bold;padding-left: 20px"><span style="color: #ffc700;font-family: sans-serif;">Bitcoin</span><span style="color: white;font-family: sans-serif;">: $912930 (</span><span style="color: #67db35;font-family: sans-serif;">-0.45%</span><span style="color: white;font-family: sans-serif;">)</span></span>

		<span style="font-weight: bold;padding-left: 20px"><span style="color: #ffc700;font-family: sans-serif;">Bitcoin</span><span style="color: white;font-family: sans-serif;">: $912930 (</span><span style="color: #67db35;font-family: sans-serif;">-0.45%</span><span style="color: white;font-family: sans-serif;">)</span></span>

		<span style="font-weight: bold;padding-left: 20px"><span style="color: #ffc700;font-family: sans-serif;">Bitcoin</span><span style="color: white;font-family: sans-serif;">: $912930 (</span><span style="color: #67db35;font-family: sans-serif;">-0.45%</span><span style="color: white;font-family: sans-serif;">)</span></span>

		<span style="font-weight: bold;padding-left: 20px"><span style="color: #ffc700;font-family: sans-serif;">Bitcoin</span><span style="color: white;font-family: sans-serif;">: $912930 (</span><span style="color: #67db35;font-family: sans-serif;">-0.45%</span><span style="color: white;font-family: sans-serif;">)</span></span>

		<span style="font-weight: bold;padding-left: 20px"><span style="color: #ffc700;font-family: sans-serif;">Hexacoin</span><span style="color: white;font-family: sans-serif;">: $912930 (</span><span style="color: #67db35;font-family: sans-serif;">-0.45%</span><span style="color: white;font-family: sans-serif;">)</span></span> -->
	<!-- </div>
	</marquee> -->

		<!-- <div class="owl-carousel owl-theme" id="navbar_below_carousel">
    <div class="item navbar_below_items"><span style="font-weight: bold;padding-left: 0px"><span style="color: #ffc700">Bitcoin</span><span style="color: white">: $912930 (</span><span style="color: #67db35">-0.45%</span><span style="color: white">)</span></span></div>
    <div class="item navbar_below_items"><span style="font-weight: bold;padding-left: 0px"><span style="color: #ffc700">Bitcoin</span><span style="color: white">: $912930 (</span><span style="color: #67db35">-0.45%</span><span style="color: white">)</span></span></div>
    <div class="item navbar_below_items"><span style="font-weight: bold;padding-left: 0px"><span style="color: #ffc700">Bitcoin</span><span style="color: white">: $912930 (</span><span style="color: #67db35">-0.45%</span><span style="color: white">)</span></span></div>
    <div class="item navbar_below_items"><span style="font-weight: bold;padding-left: 0px"><span style="color: #ffc700">Bitcoin</span><span style="color: white">: $912930 (</span><span style="color: #67db35">-0.45%</span><span style="color: white">)</span></span></div>
    <div class="item navbar_below_items"><span style="font-weight: bold;padding-left: 0px"><span style="color: #ffc700">Bitcoin</span><span style="color: white">: $912930 (</span><span style="color: #67db35">-0.45%</span><span style="color: white">)</span></span></div>
    <div class="item navbar_below_items"><span style="font-weight: bold;padding-left: 0px"><span style="color: #ffc700">Bitcoin</span><span style="color: white">: $912930 (</span><span style="color: #67db35">-0.45%</span><span style="color: white">)</span></span></div>
    <div class="item navbar_below_items"><span style="font-weight: bold;padding-left: 0px"><span style="color: #ffc700">Bitcoin</span><span style="color: white">: $912930 (</span><span style="color: #67db35">-0.45%</span><span style="color: white">)</span></span></div>
    <div class="item navbar_below_items"><span style="font-weight: bold;padding-left: 0px"><span style="color: #ffc700">Bitcoin</span><span style="color: white">: $912930 (</span><span style="color: #67db35">-0.45%</span><span style="color: white">)</span></span></div>
    <div class="item navbar_below_items"><span style="font-weight: bold;padding-left: 0px"><span style="color: #ffc700">Bitcoin</span><span style="color: white">: $912930 (</span><span style="color: #67db35">-0.45%</span><span style="color: white">)</span></span></div>
    <div class="item navbar_below_items"><span style="font-weight: bold;padding-left: 0px"><span style="color: #ffc700">Bitcoin</span><span style="color: white">: $912930 (</span><span style="color: #67db35">-0.45%</span><span style="color: white">)</span></span></div>
    <div class="item navbar_below_items"><span style="font-weight: bold;padding-left: 0px"><span style="color: #ffc700">Bitcoin</span><span style="color: white">: $912930 (</span><span style="color: #67db35">-0.45%</span><span style="color: white">)</span></span></div>
    <div class="item navbar_below_items"><span style="font-weight: bold;padding-left: 0px"><span style="color: #ffc700">Bitcoin</span><span style="color: white">: $912930 (</span><span style="color: #67db35">-0.45%</span><span style="color: white">)</span></span></div>
    <div class="item navbar_below_items"><span style="font-weight: bold;padding-left: 0px"><span style="color: #ffc700">Bitcoin</span><span style="color: white">: $912930 (</span><span style="color: #67db35">-0.45%</span><span style="color: white">)</span></span></div>
    <div class="item navbar_below_items"><span style="font-weight: bold;padding-left: 0px"><span style="color: #ffc700">Bitcoin</span><span style="color: white">: $912930 (</span><span style="color: #67db35">-0.45%</span><span style="color: white">)</span></span></div>
    <div class="item navbar_below_items"><span style="font-weight: bold;padding-left: 0px"><span style="color: #ffc700">Bitcoin</span><span style="color: white">: $912930 (</span><span style="color: #67db35">-0.45%</span><span style="color: white">)</span></span></div>
    <div class="item navbar_below_items"><span style="font-weight: bold;padding-left: 0px"><span style="color: #ffc700">Bitcoin</span><span style="color: white">: $912930 (</span><span style="color: #67db35">-0.45%</span><span style="color: white">)</span></span></div>
</div> -->
		<!-- <span style="font-weight: bold;padding-left: 20px"><span style="color: #dbae09">Bitcoin</span><span style="color: white">: $912930 (</span><span style="color: #67db35">-0.45%</span><span style="color: white">)</span></span>
		
		<span style="font-weight: bold;padding-left: 20px"><span style="color: #dbae09">Bitcoin</span><span style="color: white">: $912930 (</span><span style="color: #67db35">-0.45%</span><span style="color: white">)</span></span>

		<span style="font-weight: bold;padding-left: 20px"><span style="color: #dbae09">Bitcoin</span><span style="color: white">: $912930 (</span><span style="color: #67db35">-0.45%</span><span style="color: white">)</span></span>

		<span style="font-weight: bold;padding-left: 20px"><span style="color: #dbae09">Bitcoin</span><span style="color: white">: $912930 (</span><span style="color: #67db35">-0.45%</span><span style="color: white">)</span></span>

		<span style="font-weight: bold;padding-left: 20px"><span style="color: #dbae09">Bitcoin</span><span style="color: white">: $912930 (</span><span style="color: #67db35">-0.45%</span><span style="color: white">)</span></span>

		<span style="font-weight: bold;padding-left: 20px"><span style="color: #dbae09">Bitcoin</span><span style="color: white">: $912930 (</span><span style="color: #67db35">-0.45%</span><span style="color: white">)</span></span>

		<span style="font-weight: bold;padding-left: 20px"><span style="color: #dbae09">Bitcoin</span><span style="color: white">: $912930 (</span><span style="color: #67db35">-0.45%</span><span style="color: white">)</span></span> -->


	</div>
<!-- </div> -->


<script type="text/javascript">
	
	/*setTimeout(function(){

		$('#marquee_inner_div1').css('opacity',1);
	},3000);*/
	
</script>

<script>
// It is absolute necessity that div should be smaller than individual text content.
  //$('#maindiv').width($('#div1').width());

</script>