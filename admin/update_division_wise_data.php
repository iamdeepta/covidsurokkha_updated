<?php 
require('db.inc.php');

  $date = date("Y-m-d");
    
    if(isset($_POST['div_id1']) && isset($_POST['div_name1']) && isset($_POST['div_cases1']) && isset($_POST['div_deaths1'])){
        if(mb_strlen(trim($_POST['div_name1'])) > 0 && mb_strlen(trim($_POST['div_cases1'])) > 0 && mb_strlen(trim($_POST['div_deaths1'])) > 0){
            $query = mysqli_query($dbc, "UPDATE tbl_division SET division_name = '".mysql_safe(trim($_POST['div_name1']))."', division_cases = '".mysql_safe(trim($_POST['div_cases1']))."', division_deaths = '".mysql_safe(trim($_POST['div_deaths1']))."' where division_id = '".$_POST['div_id1']."' ");
            
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
