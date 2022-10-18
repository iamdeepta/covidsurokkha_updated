<?php 
require('db.inc.php');

    date_default_timezone_set("Asia/Dhaka");
  $date = date("Y-m-d h:i a");
    
    if(isset($_POST['hos_id1']) && isset($_POST['hospital_name1']) && isset($_POST['general_beds1']) && isset($_POST['icu_beds1']) && isset($_POST['location1']) && isset($_POST['full_address1']) && isset($_POST['phone_number1']) && isset($_POST['hospital_name_bn1']) && isset($_POST['location_bn1']) && isset($_POST['full_address_bn1'])){
        if(mb_strlen(trim($_POST['hospital_name1'])) > 0 && mb_strlen(trim($_POST['general_beds1'])) > 0 && mb_strlen(trim($_POST['icu_beds1'])) > 0 && mb_strlen(trim($_POST['location1'])) > 0 && mb_strlen(trim($_POST['full_address1'])) > 0 && mb_strlen(trim($_POST['hospital_name_bn1'])) > 0 && mb_strlen(trim($_POST['location_bn1'])) > 0 && mb_strlen(trim($_POST['full_address_bn1'])) > 0){
            $query = mysqli_query($dbc, "UPDATE tbl_hospital_info SET hospital_name = '".mysql_safe(trim($_POST['hospital_name1']))."', general_bed = '".mysql_safe(trim($_POST['general_beds1']))."', icu_bed = '".mysql_safe(trim($_POST['icu_beds1']))."', hospital_location = '".mysql_safe(trim($_POST['location1']))."', hospital_full_address = '".mysql_safe(trim($_POST['full_address1']))."', hospital_phone_number = '".mysql_safe(trim($_POST['phone_number1']))."', hospital_name_bn = '".mysql_safe(trim($_POST['hospital_name_bn1']))."', hospital_location_bn= '".mysql_safe(trim($_POST['location_bn1']))."', hospital_full_address_bn = '".mysql_safe(trim($_POST['full_address_bn1']))."', updated_date = '".$date."' where hospital_id = '".$_POST['hos_id1']."' ");
            
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
