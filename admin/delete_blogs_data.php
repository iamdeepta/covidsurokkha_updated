<?php
    require('db.inc.php');

    if(isset($_POST['blogs_id'])){
        if(is_numeric($_POST['blogs_id'])){
            $query = mysqli_query($dbc, "UPDATE tbl_blogs SET blogs_status = 1 where blogs_id = '".$_POST['blogs_id']."'");

            $query1 = mysqli_query($dbc, "UPDATE tbl_master_search SET master_status = 1 where master_unique_id = 'blogs_id".$_POST['blogs_id']."'");
            
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
    