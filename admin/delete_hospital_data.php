<?php
    require('db.inc.php');

    if(isset($_POST['hos_id'])){
        if(is_numeric($_POST['hos_id'])){
            $query = mysqli_query($dbc, "UPDATE tbl_hospital_info SET hospital_remove_status = 1 where hospital_id = '".$_POST['hos_id']."'");
            
            if(mysqli_affected_rows($dbc) > 0)
                echo json_encode(array('response' => 'success'));
            else
                echo json_encode(array('response' => 'error', 'result' => 'Could not delete your data'));
                
        } else {
            echo json_encode(array('response' => 'error', 'result' => 'There is a problem deleting data'));
        }
    } else {
        echo json_encode(array('response' => 'error', 'result' => 'Invalid Activity'));
    }
    