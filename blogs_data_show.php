<style type="text/css">
	.context-menu {
        position: absolute;
        z-index: 99;
        text-align: center;
        background: white;
        border-radius: 10px;
    }
  
    .context-menu ul {
        padding: 0px;
        margin: 0px;
        min-width: 150px;
        list-style: none;
    }
  
    .context-menu ul li {
        padding-bottom: 2px;
        padding-top: 2px;
        border: 1px solid gray;
        border-radius: 10px;
        padding-left: 5px;
        padding-right: 5px;
    }
  
    .context-menu ul li a {
        text-decoration: none;
        color: black;
    }
  
    .context-menu ul li:hover {
        background: white;
    }


    @media screen and (max-width: 460px) {


    	.blogs_card::before{

    		content: '' !important;
    		margin-top: -25px;
      		margin-left: -21px;
    		height: 99% !important;
    		width: 92.5vw !important;
    		position: absolute !important;
      		z-index: -1 !important;
    		background-color: #58547e !important;
    		border-radius: 15px !important;
    		animation: float 2s linear infinite;
    	}

    	@keyframes float{

    		0%{

    			transform: translateY(0px);
    		}

    		50%{

    			transform: translateY(-10px);
    		}

    		100%{

    			transform: translateY(0px);
    		}
    	}

    	.blogs_card{

    		background-color: white !important;
    		box-shadow: 0px 4px 0px 0px rgb(0.2,0.2,0.2,0.2) !important;
    		margin-top: 30px !important;
    	}
    }
</style>
<?php 

if(isset($_POST['blogs_data_show'])){

	require('admin/db.inc.php');

    $blogs_searchbar = $_POST['blogs_searchbar'];
    
	//$start = $_POST['start'];
	//$limit_text = $_POST['limit_text'];

    if($blogs_searchbar==''){

	$blogs_query = mysqli_query($dbc, 'SELECT * from tbl_blogs where blogs_status=0 order by blogs_id desc');

    }else{

        $blogs_query = mysqli_query($dbc, "SELECT * from tbl_blogs where blogs_status=0 and blogs_title_en LIKE '%$blogs_searchbar%' order by blogs_id desc");
    }

    
   include 'english_to_bangla.php';

   $lastSegment = $_POST['lastSegment'];


   $output = '';

   $blogs_count=0;
  while($blogs_query && $result=mysqli_fetch_array($blogs_query, MYSQLI_ASSOC)){
        $blogs_count++;
        $blogs_count_delay = $blogs_count*100;
    


			$output .= '<div id="blogs_card_main_div" style="padding:20px 15px" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="'.$blogs_count_delay.'">

    <div class="card blogs_card" id="blogs_card'.$result['blogs_id'].'" style="width: 22vw;border-radius: 15px;border: 0px transparent;background-color: rgb(153 243 239 / 15%);cursor:pointer">
      <img class="card-img-top" src="admin/files/blogs_images/'.$result['blogs_image1'].'" alt="covidsurokkha blog image" style="width: auto;height: 200px;object-fit: cover;border-radius: 15px">

      <div id="blogs_date_div" style="position: absolute;z-index: 99;background-color: #01cfbe;padding:2px 10px;border-radius: 8px;margin-top: -17px;left: calc(100% - 60px);width: 70px;text-align: center;display: flex;justify-content: center;flex-direction: row;flex-wrap: wrap;margin-right: 30px;float:left"><span class="notranslate" style="color: white">'.BanglaConverter::en2bn($result['blogs_date']).'</span></div>

      <div id="blog_tag_div" style="position: absolute;z-index: 99;background-color: #2eaba0;padding:2px 15px;border-radius: 8px;top: 182px;left: calc(100% - 160px);width: 140px;text-align: center;display: flex;justify-content: center;flex-direction: row;flex-wrap: wrap;margin-right: 30px;float:left">';

      if($result['blogs_tag_bn']!=''){
      $output .= '<span class="notranslate" id="blog_tag_text" style="color: white">'.$result['blogs_tag_bn'].'</span>';
  		}else{
  			$output .= '<span id="blog_tag_text" style="color: white">'.$result['blogs_tag_en'].'</span>';
  		}

      $output .= '</div>

      <div class="card-body" style="border-color: transparent;margin-top: 10px">';
        
        if($result['blogs_title_bn']!=''){
        $output .= '<h5 class="card-title notranslate">'.mb_strimwidth($result['blogs_title_bn'],0,22).'...</h5>';
    	}else{

    		$output .= '<h5 class="card-title">'.mb_strimwidth($result['blogs_title_en'],0,22).'...</h5>';
    	}
        
        if($result['blogs_description1_bn']!=''){
        $output .= '<p class="card-text notranslate" style="line-height: 28px;color: #58547e;">'.mb_strimwidth($result['blogs_description1_bn'], 0, 60).'...</p>';
    	}else{
    		$output .= '<p class="card-text" style="line-height: 28px;color: #58547e;">'.mb_strimwidth($result['blogs_description1_en'], 0, 60).'...</p>';
    	}

        $output .= '<div style="display: flex;justify-content: space-between;flex-direction: row;flex-wrap: wrap;margin-top:20px">';

        if($result['blogs_category_bn']!=''){
        $output .= '<p class="notranslate" style="margin-top: 10px;font-style: italic;font-size: 14px"><a href="" style="text-decoration: none;color: #58547e;">'.$result['blogs_category_bn'].'</a></p>';
    	}else{
    		$output .= '<p style="margin-top: 10px;font-style: italic;font-size: 14px"><a href="" style="text-decoration: none;color: #58547e;">'.$result['blogs_category_en'].'</a></p>';
    	}

        $output .= '<span class="notranslate" style="margin-top: 10px;font-size: 14px"><i class="far fa-clock"></i><span style="margin-left: 3px">'.BanglaConverter::en2bn($result['blogs_time']).' মিনিট পড়া</span></span>
        </div>
    
      </div>
    </div>

    </div>';

    $output .= '<div id="contextMenu'.$result['blogs_id'].'" class="context-menu" 
        style="display:none">
        <ul>
            <li><a class="notranslate" href="blogs-detail.php?id='.$result['blogs_id'].'&lang=bn" target="_blank" style="font-size:12px">লিংকটি নতুন ট্যাবে খুলুন</a></li>
            
        </ul>
    </div>';


    $output .= '<script type="text/javascript">
	
	$("#blogs_card'.$result['blogs_id'].'").click(function(){

		window.location.href="blogs-detail.php?id='.$result['blogs_id'].'&lang=bn";
	});

	$("body").click(function(){hideMenu();});

	function hideMenu() {
            $(".context-menu").css("display","none");
        }

	$("#blogs_card'.$result['blogs_id'].'").contextmenu(function(e){

		e.preventDefault();
  
            if (document.getElementById(
                "contextMenu'.$result['blogs_id'].'").style.display == "block")
                hideMenu();
            else {
                var menu = document
                    .getElementById("contextMenu'.$result['blogs_id'].'")
                      
                menu.style.display = "block";
                menu.style.left = e.pageX + "px";
                menu.style.top = e.pageY + "px";
            }
	});
</script>';
		


	}

	echo $output;
}


?>
