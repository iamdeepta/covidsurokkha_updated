<style type="text/css">
	.name::-webkit-input-placeholder{
		float: left !important;
		margin-top: 4px !important;
	}
	.name:-moz-placeholder{
		float: left !important;
		margin-top: 4px !important;
	}
	.name::-moz-placeholder{
		float: left !important;
		margin-top: 4px !important;
	}
	.name:-ms-input-placeholder{
		float: left !important;
		margin-top: 4px !important;
	}

	.feedback::-webkit-input-placeholder{
		float: left !important;
		margin-top: 4px !important;
	}
	.feedback:-moz-placeholder{
		float: left !important;
		margin-top: 4px !important;
	}
	.feedback::-moz-placeholder{
		float: left !important;
		margin-top: 4px !important;
	}
	.feedback:-ms-input-placeholder{
		float: left !important;
		margin-top: 4px !important;
	}

	input[name="name"]:focus, textarea[name="feedback"]:focus{

               /*outline-color: #ffc700 !important;*/
               outline: 0 none;
               box-shadow: 0 1px 1px transparent inset, 0 0 8px transparent;
               border: 1px solid #58547e !important;
               transition: 0.5s !important;
          

          }

          button[name="btn_rating_submit"]:focus, button[name="btn_browse_more"]:focus{

               /*outline-color: #ffc700 !important;*/
               outline: 0 none;
               box-shadow: 0 1px 1px transparent inset, 0 0 8px transparent;
               border: 1px solid #58547e !important;
               transition: 0.5s !important;
          

          }

          .btn_rating_submit:hover{

          	background-color: #01cfbe !important;
          	color: white !important;
          	transition: 0.5s !important;
          }

          .btn_rating_submit:not(:hover){
          	transition: 0.5s !important;
          }

        .rating_modal_card{

        	opacity: 0;
        	transform: scale(0.1);
        }  

        .active_rating_modal_card{

       		opacity: 1;
       		transform: scale(1.0);
       		transition: 1s;
       }

       .inactive_rating_modal_card{

       		opacity: 0;
       		transform: scale(0.1);
       		transition: 1s;
       }

       .rating_modal_card_next{

       		opacity: 0;
        	transform: scale(0.1);
       }

       .active_rating_modal_card_next{

       		opacity: 1;
       		transform: scale(1.0);
       		transition: 1s;
       }

       .inactive_rating_modal_card_next{

       		opacity: 0;
       		transform: scale(0.1);
       		transition: 1s;
       }


    @media screen and (max-width: 460px) {

    	.rating_modal_card{

    		width: 100vw !important;
    		left: 0 !important;
    		bottom: 0px !important;
    		top: 38% !important;
    		border-bottom-right-radius: 0px !important;
    		border-bottom-left-radius: 0px !important; 
    		opacity: 0;
        	transform: translateY(550px); 
        	height: auto !important; 
        	border: none !important; 	
    	}

    	.active_rating_modal_card{

       		opacity: 1;
       		transform: translateY(0px);
       		transition: 1s;
       }

       .inactive_rating_modal_card{

       		opacity: 0;
       		transform: translateY(550px);
       		transition: 1s;
       }


       .rating_modal_card_next{

    		width: 100vw !important;
    		left: 0 !important;
    		bottom: 0px !important;
    		top: 70% !important;
    		border-bottom-right-radius: 0px !important;
    		border-bottom-left-radius: 0px !important; 
    		opacity: 0;
        	transform: translateY(550px); 
        	height: auto !important; 
        	border: none !important; 	
    	}

    	.active_rating_modal_card_next{

       		opacity: 1;
       		transform: translateY(0px);
       		transition: 1s;
       }

       .inactive_rating_modal_card_next{

       		opacity: 0;
       		transform: translateY(550px);
       		transition: 1s;
       }

    	.input_elements{

    		width: 100% !important;
    	}


    	.name_error{

    		font-size: 10px !important;
    	}

    	.feedback_error{
    		font-size: 10px !important;
    	}

    }


</style>

<?php 

if (isset($_POST['rating_review'])) {
	
	$lang = $_POST['lang'];

	$output = '';



	$output .= '<div class="blur_bg_rating notranslate" id="blur_bg_rating" style="position: fixed;z-index: 999;bottom: 0px;top: 0px;width: 100vw;height: 100vh;background-color: rgb(0.5,0.5,0.5,0.5);display: none;"></div>

	<div class="card rating_modal_card_next" style="position: fixed;z-index: 999999999999999999;top: 40%;left: 40%;border-radius: 15px;box-shadow: 0px 0px 10px 0px rgb(0.2,0.2,0.2,0.2);background-color:#58547e;border:none">
	<div class="card-body" style="padding:25px 45px">

	<div style="display: flex;flex-direction: column;justify-content: center;align-items: center;">
		<div class="stars_next" style="display: flex;flex-direction: row;justify-content: center;align-items: center;padding: 15px 15px;margin-top: -50px;background-color: #01cfbe;border-radius: 8px">
			
		</div>

		<p class="thank_you_review" style="text-align: center;margin-top:26px;color:white">আপনার মতামত এবং সময়ের জন্য ধন্যবাদ।</p>
		</div>
	</div>
	</div>

<div class="card rating_modal_card" style="position: fixed;z-index: 999999999999999999;top: 27%;left: 35%;border-radius: 15px;box-shadow: 0px 0px 10px 0px rgb(0.2,0.2,0.2,0.2);background-color:#58547e;border:none">
	<div class="card-body">
		<div style="display: flex;flex-direction: column;justify-content: center;align-items: center;">
		<div class="stars" style="display: flex;flex-direction: row;justify-content: center;align-items: center;padding: 15px 15px;margin-top: -50px;background-color: #01cfbe;border-radius: 8px">
			<i class="fas fa-star f-star star1" style="font-size: 20px;" data-index="0"></i>
			<i class="fas fa-star f-star star2" style="margin-left: 10px;font-size: 20px;" data-index="1"></i>
			<i class="fas fa-star f-star star3" style="margin-left: 10px;font-size: 20px;" data-index="2"></i>
			<i class="fas fa-star f-star star4" style="margin-left: 10px;font-size: 20px;" data-index="3"></i>
			<i class="fas fa-star f-star star5" style="margin-left: 10px;font-size: 20px;" data-index="4"></i>
		</div>

		<div class="form-group input_elements" style="display: flex;flex-direction: column;justify-content: flex-start;margin-top: 20px;width: 30vw">
			<p style="text-align: center;color:white">আমাদের ব্যাপারে আপনার মতামত দিন</p>
			<input type="text" name="name" class="name form-control" id="name" placeholder="আপনার নাম" style="border-radius: 15px" onfocusin="hide_name_placeholder()" onfocusout="show_name_placeholder()" autocomplete="off">
			<span class="name_error" style="color: rgb(243, 120, 120);float: left;font-size: 13px;display: none;">আপনার নাম লিখুন</span>
			<textarea type="text" name="feedback" class="feedback form-control" id="feedback" placeholder="আপনার মতামত (অপশনাল)" style="margin-top: 15px;border-radius: 15px" rows="5" onfocusin="hide_feedback_placeholder()" onfocusout="show_feedback_placeholder()" autocomplete="off"></textarea>
			<span class="feedback_error" style="color: rgb(243, 120, 120);float: left;font-size: 13px;display: none;">আপনার মতামত লিখুন</span>

			<button type="button" class="btn mt-3 btn_rating_submit" name="btn_rating_submit" style="color: white;border-radius: 15px;border:1px solid #58547e;font-weight: bold;background-color: #01cfbe" onclick="rating_submit()" disabled="true">জমা দিন</button>

			<button type="button" class="btn mt-3 btn_browse_more" name="btn_browse_more" style="color: white;border-radius: 15px;border:1px solid #58547e;font-weight: bold;background-color: #706898" onclick="browse_more()">আরও ব্রাউজ করুন</button>

		</div>
		</div>
	</div>
</div>';


echo $output;
}

?>



<script type="text/javascript">
	
	function hide_name_placeholder(){

	$('.name').attr('placeholder','');

}

function show_name_placeholder(){

	
	$('.name').attr('placeholder','আপনার নাম');


}

function hide_feedback_placeholder(){

	$('.feedback').attr('placeholder','');
}

function show_feedback_placeholder(){

	
	$('.feedback').attr('placeholder','আপনার মতামত (অপশনাল)');

}


$('#blur_bg_rating').click(function(){

	$('.rating_modal_card').addClass('inactive_rating_modal_card');
	$('.rating_modal_card').removeClass('active_rating_modal_card');
	$('.blur_bg_rating').css('display','none');
});


var ratedIndex = -1;
$(document).ready(function(){

	resetColor();

	$('.f-star').click(function(){
		ratedIndex = parseInt($(this).data('index'));

		$('.btn_rating_submit').attr('disabled',false);
	});

	$('.f-star').mouseover(function(){
		resetColor();

		var currentIndex = parseInt($(this).data('index'));

		for(var i=0; i<=currentIndex; i++){
			$('.f-star:eq('+i+')').css('color','#ffd04b');
		}
	});

	$('.f-star').mouseleave(function(){
		resetColor();

		if(ratedIndex!=-1){
			for(var i=0; i<=ratedIndex; i++){
			$('.f-star:eq('+i+')').css('color','#ffd04b');
		}
		}
	});

});


function resetColor(){

	$('.f-star').css('color','white');
}

function browse_more(){

	$('.rating_modal_card').addClass('inactive_rating_modal_card');
	$('.rating_modal_card').removeClass('active_rating_modal_card');
	$('.blur_bg_rating').css('display','none');

	localStorage.setItem('ratedIndex',ratedIndex+1);
}


function rating_submit(){

	var name = $('#name').val();
	var feedback = $('#feedback').val();

	if(name==''){
		$('.name_error').css('display','block');
		//$('.feedback_error').css('display','none');
	}else if(ratedIndex!=-1 && name!=''){

		localStorage.setItem('ratedIndex',ratedIndex+1);
		localStorage.setItem('name',name);
		localStorage.setItem('feedback',feedback);

		var u_stars = localStorage.getItem('ratedIndex');
		var u_name = localStorage.getItem('name');
		var u_feedback = localStorage.getItem('feedback');


		$.ajax({
			url: 'rate_submit.php',
			type: 'post',
			data: {

				u_stars: u_stars,
				u_name: u_name,
				u_feedback: u_feedback
			},
			success: function(data){

				$('#name').val('');
				$('#feedback').val('');

				if(localStorage.getItem('ratedIndex')!='' || localStorage.getItem('ratedIndex')!=null){

					$('.footer-star').css('color','#ffd04b');
				}else{
					$('.footer-star').css('color','white');
				}

				if(localStorage.getItem('ratedIndex')==1){
					$('.stars_next').html('<i class="fas fa-star" style="font-size: 20px;color:#ffd04b"></i>');
				}else if(localStorage.getItem('ratedIndex')==2){
					$('.stars_next').html('<i class="fas fa-star" style="font-size: 20px;color:#ffd04b"></i><i class="fas fa-star" style="font-size: 20px;color:#ffd04b;margin-left: 10px;"></i>');
				}else if(localStorage.getItem('ratedIndex')==3){
					$('.stars_next').html('<i class="fas fa-star" style="font-size: 20px;color:#ffd04b"></i><i class="fas fa-star" style="font-size: 20px;color:#ffd04b;margin-left: 10px;"></i><i class="fas fa-star" style="font-size: 20px;color:#ffd04b;margin-left: 10px;"></i>');
				}else if(localStorage.getItem('ratedIndex')==4){
					$('.stars_next').html('<i class="fas fa-star" style="font-size: 20px;color:#ffd04b"></i><i class="fas fa-star" style="font-size: 20px;color:#ffd04b;margin-left: 10px;"></i><i class="fas fa-star" style="font-size: 20px;color:#ffd04b;margin-left: 10px;"></i><i class="fas fa-star" style="font-size: 20px;color:#ffd04b;margin-left: 10px;"></i>');
				}else if(localStorage.getItem('ratedIndex')==5){
					$('.stars_next').html('<i class="fas fa-star" style="font-size: 20px;color:#ffd04b"></i><i class="fas fa-star" style="font-size: 20px;color:#ffd04b;margin-left: 10px;"></i><i class="fas fa-star" style="font-size: 20px;color:#ffd04b;margin-left: 10px;"></i><i class="fas fa-star" style="font-size: 20px;color:#ffd04b;margin-left: 10px;"></i><i class="fas fa-star" style="font-size: 20px;color:#ffd04b;margin-left: 10px;"></i>');
				}else{
					$('.stars_next').html('<p>Something went wrong. Please try again.</p>');
				}


				$('.rating_modal_card').addClass('inactive_rating_modal_card');
				$('.rating_modal_card').removeClass('active_rating_modal_card');

				setTimeout(function(){
				$('.rating_modal_card_next').addClass('active_rating_modal_card_next');
				$('.rating_modal_card_next').removeClass('inactive_rating_modal_card_next');
				},700);

				setTimeout(function(){

					$('.rating_modal_card_next').addClass('inactive_rating_modal_card_next');
					$('.rating_modal_card_next').removeClass('active_rating_modal_card_next');
					$('.blur_bg_rating').css('display','none');

				},4000);
			
			}
		});
	}
}


</script>