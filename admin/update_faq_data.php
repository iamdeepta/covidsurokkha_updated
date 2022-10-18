<?php 
require('db.inc.php');

  $date = date("Y-m-d");
    
    if(isset($_POST['faq_id1']) && (isset($_POST['faq_category_en1'])||isset($_POST['faq_category_bn1'])) && (isset($_POST['faq_title_en1'])||isset($_POST['faq_title_bn1'])) && (isset($_POST['faq_description_en1'])||isset($_POST['faq_description_bn1']))){

        if((mb_strlen(trim($_POST['faq_category_en1'])) > 0 || mb_strlen(trim($_POST['faq_category_bn1']))) && (mb_strlen(trim($_POST['faq_title_en1'])) > 0 || mb_strlen(trim($_POST['faq_title_bn1']))) && (mb_strlen(trim($_POST['faq_description_en1'])) > 0 || mb_strlen(trim($_POST['faq_description_bn1'])))){

            $query = mysqli_query($dbc, "UPDATE tbl_faq SET faq_category_en = '".mysql_safe(trim($_POST['faq_category_en1']))."', faq_category_bn = '".mysql_safe(trim($_POST['faq_category_bn1']))."', faq_title_en = '".mysql_safe(trim($_POST['faq_title_en1']))."', faq_title_bn = '".mysql_safe(trim($_POST['faq_title_bn1']))."', faq_description_en = '".mysql_safe(trim($_POST['faq_description_en1']))."', faq_description_bn = '".mysql_safe(trim($_POST['faq_description_bn1']))."' where faq_id = '".$_POST['faq_id1']."' ");

            $query1 = mysqli_query($dbc, "UPDATE tbl_master_search SET master_title_en = '".mysql_safe(trim($_POST['faq_title_en1']))."', master_title_bn = '".mysql_safe(trim($_POST['faq_title_bn1']))."', master_description_en = '".mysql_safe(trim($_POST['faq_description_en1']))."', master_description_bn = '".mysql_safe(trim($_POST['faq_description_bn1']))."' where master_unique_id = 'faq_id".$_POST['faq_id1']."' ");
            
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
