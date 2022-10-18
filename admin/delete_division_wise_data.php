<?php
    require('db.inc.php');

    if(isset($_POST['div_id'])){
        if(is_numeric($_POST['div_id'])){
            $query = mysqli_query($dbc, "UPDATE tbl_division SET division_remove_status = 1 where division_id = '".$_POST['div_id']."'");
            
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
    