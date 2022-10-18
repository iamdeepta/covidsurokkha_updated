<?php

require('admin/db.inc.php');

if (isset($_POST['full_name']) && isset($_POST['mobile_number'])) {
	
	$query = mysqli_query($dbc, "INSERT INTO tbl_symptom_checker (full_name, mobile_number, main_symptoms, other_symptoms, red_zone, healthcare_provider, contact_with_positive, pre_existing_conditions, risk) VALUES('".mysql_safe(trim($_POST['full_name']))."','".mysql_safe(trim($_POST['mobile_number']))."','".mysql_safe(trim($_POST['main_symptoms']))."','".mysql_safe(trim($_POST['other_symptoms']))."','".mysql_safe(trim($_POST['red_zone']))."','".mysql_safe(trim($_POST['healthcare']))."','".mysql_safe(trim($_POST['positive']))."','".mysql_safe(trim($_POST['condition']))."','".mysql_safe(trim($_POST['risk']))."')");
            
            if(mysqli_affected_rows($dbc) > 0)
                echo json_encode(array('response' => 'success'));
            else
                echo json_encode(array('response' => 'error', 'result' => 'Could not save your data'));

}


?>