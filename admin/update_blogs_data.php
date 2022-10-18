<?php 
require('db.inc.php');

  //$date = date("Y-m-d");
    
    if(isset($_POST['blogs_id']) && (isset($_POST['blogs_title_en1']) || isset($_POST['blogs_title_bn1'])) && (isset($_POST['blogs_description1_en1']) || isset($_POST['blogs_description1_bn1'])) && (isset($_POST['blogs_description2_en1']) || isset($_POST['blogs_description2_bn1'])) && (isset($_POST['blogs_tag_en1']) || isset($_POST['blogs_tag_bn1'])) && (isset($_POST['blogs_category_en1']) || isset($_POST['blogs_category_bn1'])) && isset($_POST['blogs_time1'])){

        if((mb_strlen(trim($_POST['blogs_title_en1'])) > 0 || mb_strlen(trim($_POST['blogs_title_bn1']))) && (mb_strlen(trim($_POST['blogs_description1_en1'])) > 0 || mb_strlen(trim($_POST['blogs_description1_bn1']))) && (mb_strlen(trim($_POST['blogs_description2_en1'])) > 0 || mb_strlen(trim($_POST['blogs_description2_bn1']))) && (mb_strlen(trim($_POST['blogs_tag_en1'])) > 0 || mb_strlen(trim($_POST['blogs_tag_bn1']))) && (mb_strlen(trim($_POST['blogs_category_en1'])) > 0 || mb_strlen(trim($_POST['blogs_category_bn1']))) && mb_strlen(trim($_POST['blogs_time1'])) > 0){

            $query = mysqli_query($dbc, "UPDATE tbl_blogs SET blogs_title_en = '".mysql_safe(trim($_POST['blogs_title_en1']))."', blogs_title_bn = '".mysql_safe(trim($_POST['blogs_title_bn1']))."', blogs_description1_en = '".mysql_safe(trim($_POST['blogs_description1_en1']))."', blogs_description1_bn = '".mysql_safe(trim($_POST['blogs_description1_bn1']))."', blogs_description2_en = '".mysql_safe(trim($_POST['blogs_description2_en1']))."', blogs_description2_bn = '".mysql_safe(trim($_POST['blogs_description2_bn1']))."', blogs_tag_en = '".mysql_safe(trim($_POST['blogs_tag_en1']))."', blogs_tag_bn = '".mysql_safe(trim($_POST['blogs_tag_bn1']))."', blogs_category_en = '".mysql_safe(trim($_POST['blogs_category_en1']))."', blogs_category_bn = '".mysql_safe(trim($_POST['blogs_category_bn1']))."', blogs_time = '".mysql_safe(trim($_POST['blogs_time1']))."', blogs_image1_alt_en = '".mysql_safe(trim($_POST['blogs_image1_alt_en']))."', blogs_image1_alt_bn = '".mysql_safe(trim($_POST['blogs_image1_alt_bn']))."', blogs_image2_alt_en = '".mysql_safe(trim($_POST['blogs_image2_alt_en']))."', blogs_image2_alt_bn = '".mysql_safe(trim($_POST['blogs_image2_alt_bn']))."', blogs_image3_alt_en = '".mysql_safe(trim($_POST['blogs_image3_alt_en']))."', blogs_image3_alt_bn = '".mysql_safe(trim($_POST['blogs_image3_alt_bn']))."' where blogs_id = '".$_POST['blogs_id']."' ");


            $query1 = mysqli_query($dbc, "UPDATE tbl_master_search SET master_title_en = '".mysql_safe(trim($_POST['blogs_title_en1']))."', master_title_bn = '".mysql_safe(trim($_POST['blogs_title_bn1']))."', master_description_en = '".mysql_safe(trim($_POST['blogs_description1_en1']))."', master_description_bn = '".mysql_safe(trim($_POST['blogs_description1_bn1']))."' where master_unique_id = 'blogs_id".$_POST['blogs_id']."' ");
            
            if(mysqli_affected_rows($dbc) > 0)
                echo json_encode(array('response' => 'success'));
            else
                echo json_encode(array('response' => 'error', 'result' => 'Could not update your data'));
                
        } else {
            echo json_encode(array('response' => 'error', 'result' => 'Please fill up all the empty fields before updating'));
        }
    } else {
        echo json_encode(array('response' => 'error', 'result' => 'Invalid Activity'));
    }
