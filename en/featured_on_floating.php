<style type="text/css">

	.featured_on_floating_purple{

			opacity: 0;
			transform: translateY(100px);
		}

		.featured_on_floating_white{

			opacity: 0;
			transform: translateY(100px);
		}

		.active_featured_on_floating_purple{

			transform: translateY(0px);
			opacity: 1;
			transition: 1s;

		}

		.inactive_featured_on_floating_purple{

			top: 1000px;
			opacity: 1;
			transition: 1.2s;
		}

		.active_featured_on_floating_white{

			transform: translateY(0px);
			opacity: 1;
			transition: 1.2s;
		}

		.inactive_featured_on_floating_white{

			top: 1013px;
			opacity: 1;
			transition: 1s;
		}
	
	@media screen and (max-width: 460px){

		.featured_on_floating_purple{

			opacity: 0;
			transform: translateY(100px);
		}

		.featured_on_floating_white{

			bottom: 5px !important;
			left: 3.2% !important;
			width: 93vw !important;
			height: 60px !important;
			opacity: 0;
			transform: translateY(100px);
		}

		.active_featured_on_floating_purple{

			transform: translateY(0px);
			opacity: 1;
			transition: 1s;

		}

		.inactive_featured_on_floating_purple{

			top: 900px;
			opacity: 1;
			transition: 1.5s;
		}

		.active_featured_on_floating_white{

			transform: translateY(0px);
			opacity: 1;
			transition: 1.5s;
		}

		.inactive_featured_on_floating_white{

			top: 910px;
			opacity: 1;
			transition: 1s;
		}
	}
</style>

<div class="featured_on_floating_purple notranslate" style="background-color: #58547e;position: absolute;z-index: 9;bottom: 20px;left: 2.2%;width: 95vw;height: 50px;border-radius: 15px"></div>

<a href="https://fb.watch/7HlRBH38Tm/"><div class="featured_on_floating_white notranslate" style="background-color: white;position: absolute;z-index: 9;bottom: 7px;left: 3%;width: 93.5vw;height: 52px;border-radius: 15px;box-shadow: 0px 0px 20px 0px rgb(0.2,0.2,0.2,0.2)">
	<div class="featured_on_floating_content" style="display: flex;justify-content: center;flex-direction: row;margin-top: 10px">
		
		<p style="margin-top: 5px;margin-right: 10px;color: #58547e">Featured On</p>
		
		<img src="assets/images/featured on/prothom-alo-logo.webp" style="width: 120px;height: 30px">
	</div>
</div></a>



<script type="text/javascript">

	$(document).ready(function(){

		$('.featured_on_floating_purple').addClass('active_featured_on_floating_purple');
		$('.featured_on_floating_purple').removeClass('inactive_featured_on_floating_purple');

		$('.featured_on_floating_white').addClass('active_featured_on_floating_white');
		$('.featured_on_floating_white').removeClass('inactive_featured_on_floating_white');
	});
	
	$(window).one('scroll',function(){

		$('.featured_on_floating_purple').addClass('inactive_featured_on_floating_purple');
		$('.featured_on_floating_purple').removeClass('active_featured_on_floating_purple');

		$('.featured_on_floating_white').addClass('inactive_featured_on_floating_white');
		$('.featured_on_floating_white').removeClass('active_featured_on_floating_white');
	});
</script>