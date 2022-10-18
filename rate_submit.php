<?php 
require('admin/db.inc.php');

  $u_date = date("Y-m-d");
    
    if(isset($_POST['u_stars']) && isset($_POST['u_name']) && isset($_POST['u_feedback'])){
        if(mb_strlen(trim($_POST['u_stars'])) > 0 && mb_strlen(trim($_POST['u_name'])) > 0 && mb_strlen(trim($_POST['u_feedback'])) > 0){
            $query = mysqli_query($dbc, "INSERT INTO tbl_rating (u_stars, u_name, u_feedback, u_date) VALUES('".mysql_safe(trim($_POST['u_stars']))."','".mysql_safe(trim($_POST['u_name']))."','".mysql_safe(trim($_POST['u_feedback']))."','".$u_date."')");
            
            if(mysqli_affected_rows($dbc) > 0)
                echo json_encode(array('response' => 'success'));
            else
                echo json_encode(array('response' => 'error', 'result' => 'Could not save your data'));
                
        } else {
            echo json_encode(array('response' => 'error', 'result' => 'Please fill up all the empty fields before data entry'));
        }
    } else {
        echo json_encode(array('response' => 'error', 'result' => 'Invalid Activity'));
    }
