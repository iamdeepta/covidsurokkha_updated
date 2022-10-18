<?php 


// $hospital_query = mysqli_query($dbc, "SELECT * from tbl_hospital_info where hospital_remove_status=0 and general_bed<>'N/A' order by icu_bed desc");

    $ambulance_query = mysqli_query($dbc, "SELECT * from tbl_ambulance where ambulance_remove_status=0 order by company_name asc");

    /*$doctor_query = mysqli_query($dbc, "SELECT * from tbl_doctors where doctor_remove_status=0 order by doctor_id asc");*/

    $query = mysqli_query($dbc, "SELECT * from tbl_division where division_remove_status=0 order by division_id asc");

    $query_cases_deaths = mysqli_query($dbc, "SELECT * from tbl_cases_deaths order by cases_deaths_id desc limit 1");

    while($query_cases_deaths && $results=mysqli_fetch_array($query_cases_deaths, MYSQLI_ASSOC)){

    	$new_cases = $results['cases'];
    	$new_deaths = $results['deaths'];

    }


?>