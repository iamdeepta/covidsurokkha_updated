<?php
    require('admin/db.inc.php');

    //if (isset($_POST['display_division_data'])) {
    
    
    $query = mysqli_query($dbc, "SELECT * from tbl_division where division_remove_status=0 order by division_id asc");
    
    $division_data = array();
    $count_division = 0;
    //$output="";
    while($query && $result=mysqli_fetch_array($query, MYSQLI_ASSOC)){
        array_push($division_data, array('division_id'=>$result['division_id'], 'division_name'=>$result['division_name'], 'division_cases'=>$result['division_cases'], 'division_deaths'=>$result['division_deaths']));
        $count_division++;

    }

   
//}
    
    echo json_encode(array('response' => 'success', 'result' => $division_data, 'count_division' => $count_division));


?>
