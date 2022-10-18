<?php 
require('db.inc.php');

date_default_timezone_set("Asia/Dhaka");
  $date = date("Y-m-d h:i a");
    
    if(isset($_POST['hospital_name']) && isset($_POST['general_beds']) && isset($_POST['icu_beds']) && isset($_POST['location']) && isset($_POST['full_address']) && isset($_POST['phone_number']) && isset($_POST['hospital_name_bn']) && isset($_POST['location_bn']) && isset($_POST['full_address_bn'])){
        if(mb_strlen(trim($_POST['hospital_name'])) > 0 && mb_strlen(trim($_POST['general_beds'])) > 0 && mb_strlen(trim($_POST['icu_beds'])) > 0 && mb_strlen(trim($_POST['location'])) > 0 && mb_strlen(trim($_POST['full_address'])) > 0 && mb_strlen(trim($_POST['phone_number'])) > 0 && mb_strlen(trim($_POST['hospital_name_bn'])) > 0 && mb_strlen(trim($_POST['location_bn'])) > 0 && mb_strlen(trim($_POST['full_address_bn'])) > 0){
            $query = mysqli_query($dbc, "INSERT INTO tbl_hospital_info (hospital_name, general_bed, icu_bed, hospital_location, hospital_full_address, hospital_phone_number, hospital_name_bn, hospital_location_bn, hospital_full_address_bn, updated_date) VALUES('".mysql_safe(trim($_POST['hospital_name']))."','".mysql_safe(trim($_POST['general_beds']))."','".mysql_safe(trim($_POST['icu_beds']))."','".mysql_safe(trim($_POST['location']))."','".mysql_safe(trim($_POST['full_address']))."','".mysql_safe(trim($_POST['phone_number']))."','".mysql_safe(trim($_POST['hospital_name_bn']))."','".mysql_safe(trim($_POST['location_bn']))."','".mysql_safe(trim($_POST['full_address_bn']))."', '".$date."')");
            
            if(mysqli_affected_rows($dbc) > 0)
                echo json_encode(array('response' => 'success'));
            else
                echo json_encode(array('response' => 'error', 'result' => 'Could not save your tweet'));
                
        } else {
            echo json_encode(array('response' => 'error', 'result' => 'Please fill up all the empty fields before tweeting'));
        }
    } else {
        echo json_encode(array('response' => 'error', 'result' => 'Invalid Activity'));
    }
