<?php 
require('db.inc.php');

  $date = date("Y-m-d");

  $master_url = "https://covidsurokkha.com/#faq_section";
    
    if((isset($_POST['faq_category_en']) || isset($_POST['faq_category_bn'])) && (isset($_POST['faq_title_en']) || isset($_POST['faq_title_bn'])) && (isset($_POST['faq_description_en']) || isset($_POST['faq_description_bn']))){

        if((mb_strlen(trim($_POST['faq_category_en'])) > 0 || mb_strlen(trim($_POST['faq_category_bn'])) > 0) && (mb_strlen(trim($_POST['faq_title_en'])) > 0 || mb_strlen(trim($_POST['faq_title_bn'])) > 0) && (mb_strlen(trim($_POST['faq_description_en'])) > 0 || mb_strlen(trim($_POST['faq_description_bn'])) > 0)){

            $query = mysqli_query($dbc, "INSERT INTO tbl_faq (faq_category_en, faq_category_bn, faq_title_en, faq_title_bn, faq_description_en, faq_description_bn) VALUES('".mysql_safe(trim($_POST['faq_category_en']))."','".mysql_safe(trim($_POST['faq_category_bn']))."','".mysql_safe(trim($_POST['faq_title_en']))."','".mysql_safe(trim($_POST['faq_title_bn']))."','".mysql_safe(trim($_POST['faq_description_en']))."','".mysql_safe(trim($_POST['faq_description_bn']))."')");

            $query2 = mysqli_query($dbc, "SELECT * from tbl_faq order by faq_id desc limit 1");
    
    
    while($query2 && $result2=mysqli_fetch_array($query2, MYSQLI_ASSOC)){

        $master_unique_id = 'faq_id'.$result2['faq_id'];
    }


            $query1 = mysqli_query($dbc, "INSERT INTO tbl_master_search (master_title_en, master_title_bn, master_description_en, master_description_bn, master_url, master_unique_id) VALUES('".mysql_safe(trim($_POST['faq_title_en']))."','".mysql_safe(trim($_POST['faq_title_bn']))."','".mysql_safe(trim($_POST['faq_description_en']))."','".mysql_safe(trim($_POST['faq_description_bn']))."','".mysql_safe(trim($master_url))."','".mysql_safe(trim($master_unique_id))."')");
            
            if(mysqli_affected_rows($dbc) > 0)
                echo json_encode(array('response' => 'success'));
            else
                echo json_encode(array('response' => 'error', 'result' => 'Could not save your data'));
                
        } else {
            echo json_encode(array('response' => 'error', 'result' => 'Please fill up all the empty fields before inserting'));
        }
    } else {
        echo json_encode(array('response' => 'error', 'result' => 'Invalid Activity'));
    }
