<?php 
require('db.inc.php');

  $date = date("Y-m-d");
    
    if(isset($_POST['docs_id']) && isset($_POST['doctor_name1']) && isset($_POST['doctor_post1']) && isset($_POST['doctor_consultation_time1']) && isset($_POST['doctor_hospital1'])){
        if(mb_strlen(trim($_POST['doctor_name1'])) > 0 && mb_strlen(trim($_POST['doctor_post1'])) > 0 && mb_strlen(trim($_POST['doctor_consultation_time1'])) > 0 && mb_strlen(trim($_POST['doctor_hospital1'])) > 0){
            $query = mysqli_query($dbc, "UPDATE tbl_doctors SET doctor_name = '".mysql_safe(trim($_POST['doctor_name1']))."', doctor_post = '".mysql_safe(trim($_POST['doctor_post1']))."', doctor_consultation_time = '".mysql_safe(trim($_POST['doctor_consultation_time1']))."', doctor_hospital = '".mysql_safe(trim($_POST['doctor_hospital1']))."' where doctor_id = '".$_POST['docs_id']."' ");
            
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
