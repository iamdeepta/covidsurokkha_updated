<?php 
require('db.inc.php');

  $date = date("Y-m-d");
    
    if(isset($_POST['div_name']) && isset($_POST['div_cases']) && isset($_POST['div_deaths'])){
        if(mb_strlen(trim($_POST['div_name'])) > 0 && mb_strlen(trim($_POST['div_cases'])) > 0 && mb_strlen(trim($_POST['div_deaths'])) > 0){
            $query = mysqli_query($dbc, "INSERT INTO tbl_division (division_name, division_cases, division_deaths) VALUES('".mysql_safe(trim($_POST['div_name']))."','".mysql_safe(trim($_POST['div_cases']))."','".mysql_safe(trim($_POST['div_deaths']))."')");
            
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
