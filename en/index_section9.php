<style type="text/css">
	
	@media screen and (max-width: 460px){

		.featured_on_section{

			border-radius: 15px !important;
			padding: 10px 0px !important;
			width: 94vw !important;
		}

		.featured_on_content{

			margin-top: 10px !important;
			align-items: flex-start !important;
		}
	}
</style>

<section class="featured_on_section notranslate" id="featured_on_section" style="background-color: transparent;width: 100vw;margin-bottom: 70px;padding: 20px 0px">
	<!-- <div class="featured_on_content" style="display: flex;justify-content: center;flex-direction: row;margin-top: 10px">
		<?php if(@$_GET['lang']=='en'){?>
		<p style="color: white;margin-top: 5px;margin-right: 10px">Featured On</p>
		<?php }else{?>
			<p style="color: white;margin-top: 5px;margin-right: 10px">দেখানো হয়েছে</p>
		<?php }?>
		<img src="assets/images/featured on/prothom-alo-logo.png" style="width: 120px;height: 30px">
	</div> -->
</section>


<script type="text/javascript">
	if(screen.width<=460){

		document.getElementById('featured_on_section').classList.add('container');
	}
</script>