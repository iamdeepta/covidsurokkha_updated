<?php 
require('db.inc.php');

  $date = date("Y-m-d");
    
    if(isset($_POST['daily_death_date_en']) && isset($_POST['daily_death_date_bn'])){
        if(mb_strlen(trim($_POST['daily_death_date_en'])) > 0 && mb_strlen(trim($_POST['daily_death_date_bn'])) > 0){
            $query = mysqli_query($dbc, "UPDATE tbl_daily_death_date SET daily_death_date_en = '".mysql_safe(trim($_POST['daily_death_date_en']))."', daily_death_date_bn = '".mysql_safe(trim($_POST['daily_death_date_bn']))."' ");
            
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
