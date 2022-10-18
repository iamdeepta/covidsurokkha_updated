<?php 
require('db.inc.php');

  $date = date("Y-m-d");
    
    if(isset($_POST['amb_id1']) && isset($_POST['company_name1']) && isset($_POST['service_area1']) && isset($_POST['contact_number1']) && isset($_POST['company_name_bn1']) && isset($_POST['service_area_bn1'])){
        if(mb_strlen(trim($_POST['company_name1'])) > 0 && mb_strlen(trim($_POST['service_area1'])) > 0 && mb_strlen(trim($_POST['contact_number1'])) > 0 && mb_strlen(trim($_POST['company_name_bn1'])) > 0 && mb_strlen(trim($_POST['service_area_bn1'])) > 0){
            $query = mysqli_query($dbc, "UPDATE tbl_ambulance SET company_name = '".mysql_safe(trim($_POST['company_name1']))."', service_area = '".mysql_safe(trim($_POST['service_area1']))."', contact_number = '".mysql_safe(trim($_POST['contact_number1']))."', company_name_bn = '".mysql_safe(trim($_POST['company_name_bn1']))."', service_area_bn = '".mysql_safe(trim($_POST['service_area_bn1']))."' where ambulance_id = '".$_POST['amb_id1']."' ");
            
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
