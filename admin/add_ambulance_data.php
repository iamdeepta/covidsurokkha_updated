<?php 
require('db.inc.php');

  $date = date("Y-m-d");
    
    if(isset($_POST['company_name']) && isset($_POST['service_area']) && isset($_POST['contact_number']) && isset($_POST['company_name_bn']) && isset($_POST['service_area_bn'])){
        if(mb_strlen(trim($_POST['company_name'])) > 0 && mb_strlen(trim($_POST['service_area'])) > 0 && mb_strlen(trim($_POST['contact_number'])) > 0 && mb_strlen(trim($_POST['company_name_bn'])) > 0 && mb_strlen(trim($_POST['service_area_bn'])) > 0){
            $query = mysqli_query($dbc, "INSERT INTO tbl_ambulance (company_name, service_area, contact_number, company_name_bn, service_area_bn) VALUES('".mysql_safe(trim($_POST['company_name']))."','".mysql_safe(trim($_POST['service_area']))."','".mysql_safe(trim($_POST['contact_number']))."','".mysql_safe(trim($_POST['company_name_bn']))."','".mysql_safe(trim($_POST['service_area_bn']))."')");
            
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
