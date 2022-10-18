<?php
    require('db.inc.php');

    if (isset($_POST['display_hospital_data'])) {
    
    
    $query = mysqli_query($dbc, "SELECT * from tbl_hospital_info where hospital_remove_status=0 order by hospital_name asc");
    
    $hospital_data = array();
    $count_hospital_data = 0;
    $output="";
    while($query && $result=mysqli_fetch_array($query, MYSQLI_ASSOC)){
        /*array_push($division_data, array('division_id'=>$result['division_id'], 'division_name'=>$result['division_name'], 'division_cases'=>$result['division_cases'], 'division_deaths'=>$result['division_deaths']));*/
        $count_hospital_data++;

        $output .= '<tr>';

    $output .= '<td>'.$count_hospital_data.'</td>';
    $output .= '<td>'.$result['hospital_name'].'</td>';
    $output .= '<td>'.$result['general_bed'].'</td>';
    $output .= '<td>'.$result['icu_bed'].'</td>';
    $output .= '<td>'.$result['hospital_location'].'</td>';
    $output .= '<td>'.$result['hospital_full_address'].'</td>';
    $output .= '<td>'.$result['hospital_phone_number'].'</td>';
    $output .= '<td>'.$result['hospital_name_bn'].'</td>';
    $output .= '<td>'.$result['hospital_location_bn'].'</td>';
    $output .= '<td>'.$result['hospital_full_address_bn'].'</td>';
    $output .= '<td>
    			<div class="btn-group" role="group">
    				<button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
    				<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
    					<a class="dropdown-item" style="cursor:pointer" data-toggle="modal" data-target="#edit_hospital_data_modal'.$result['hospital_id'].'">Edit</a>
    					<a class="dropdown-item" style="cursor:pointer" data-toggle="modal" data-target="#delete_hospital_data_modal'.$result['hospital_id'].'" >Delete</a>
    				</div>
    			</div>



    			<div class="modal fade" id="edit_hospital_data_modal'.$result['hospital_id'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-backdrop="false" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Hospital Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                
                <div class="alert alert-success" style="display: none">Data updated successfully</div>
               
                  <div class="form-group">
                    <label for="hospital_name1">Hospital Name:</label>
                    <input type="text" class="form-control" placeholder="Enter Hospital Name" id="hospital_name1'.$result['hospital_id'].'" name="hospital_name1" value="'.$result['hospital_name'].'" >
                  </div>
                  <div class="form-group">
                    <label for="general_bed1">General Beds:</label>
                    <input type="text" class="form-control" placeholder="Enter General Bed no." id="general_bed1'.$result['hospital_id'].'" name="general_bed1" value="'.$result['general_bed'].'" >
                  </div>

                  <div class="form-group">
                    <label for="icu_bed1">ICU Beds:</label>
                    <input type="text" class="form-control" placeholder="Enter Deaths" id="icu_bed1'.$result['hospital_id'].'" name="icu_bed1" value="'.$result['icu_bed'].'" >
                  </div>

                  <div class="form-group">
                    <label for="location1">Location:</label>
                    <input type="text" class="form-control" placeholder="Enter Location" id="location1'.$result['hospital_id'].'" name="location1" value="'.$result['hospital_location'].'" >
                  </div>

                  <div class="form-group">
                    <label for="full_address1">Full Address:</label>
                    <input type="text" class="form-control" placeholder="Enter Full Address" id="full_address1'.$result['hospital_id'].'" name="full_address1" value="'.$result['hospital_full_address'].'" >
                  </div>

                  <div class="form-group">
                    <label for="phone_number1">Phone Number:</label>
                    <input type="text" class="form-control" placeholder="Enter Phone Number" id="phone_number1'.$result['hospital_id'].'" name="phone_number1" value="'.$result['hospital_phone_number'].'" >
                  </div>

                  <div class="form-group">
                    <label for="hospital_name_bn1">Hospital Name(BN):</label>
                    <input type="text" class="form-control" placeholder="Enter Hospital Name(BN)" id="hospital_name_bn1'.$result['hospital_id'].'" name="hospital_name_bn1" value="'.$result['hospital_name_bn'].'" >
                  </div>

                  <div class="form-group">
                    <label for="location_bn1">Location(BN):</label>
                    <input type="text" class="form-control" placeholder="Enter Location(BN)" id="location_bn1'.$result['hospital_id'].'" name="location_bn1" value="'.$result['hospital_location_bn'].'" >
                  </div>

                  <div class="form-group">
                    <label for="full_address_bn1">Full Address(BN):</label>
                    <input type="text" class="form-control" placeholder="Enter Full Address(BN)" id="full_address_bn1'.$result['hospital_id'].'" name="full_address_bn1" value="'.$result['hospital_full_address_bn'].'" >
                  </div>
                 
                  <button type="button" class="btn btn-success btn-sm" name="update_hospital_data" onclick="update_hospital_data('.$result['hospital_id'].')"><span class="spinner-border spinner-border-sm spinner" style="display: none"></span><span class="text_btn" style="display: block">Update</span></button>
                
              </div>
             
            </div>
          </div>
        </div>



    			<div class="modal fade" id="delete_hospital_data_modal'.$result['hospital_id'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-backdrop="false" aria-hidden="true">
		          <div class="modal-dialog" role="document">
		            <div class="modal-content">
		              <div class="modal-header">
		                <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
		                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		                  <span aria-hidden="true">&times;</span>
		                </button>
		              </div>
		              <div class="modal-body">
                
              		<div>Do you want to delete it?</div>
                  
                 <hr>
                  <button type="button" class="btn btn-danger btn-sm" name="delete_hospital_data" onclick="delete_hospital_data('.$result['hospital_id'].')"><span class="text_btn" style="display: block">Delete</span></button>
                
              </div>
           
            </div>
          </div>
        </div>
    			</td>';


    /*$output .= '<td><div class="modal fade" id="edit_division_wise_data_modal'.$result['division_id'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-backdrop="false" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Division Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                
                <div class="alert alert-success" style="display: none">Data updated successfully</div>
               
                  <div class="form-group">
                    <label for="division_name">Division Name:</label>
                    <input type="text" class="form-control" placeholder="Enter Division Name" id="division_name'.$result['division_id'].'" name="division_name" value="'.$result['division_name'].'" required>
                  </div>
                  <div class="form-group">
                    <label for="division_cases">Cases:</label>
                    <input type="text" class="form-control" placeholder="Enter Cases" id="division_cases'.$result['division_id'].'" name="division_cases" value="'.$result['division_cases'].'" required>
                  </div>

                  <div class="form-group">
                    <label for="division_deaths">Deaths:</label>
                    <input type="text" class="form-control" placeholder="Enter Deaths" id="division_deaths'.$result['division_id'].'" name="division_deaths" value="'.$result['division_deaths'].'" required>
                  </div>
                 
                  <button type="button" class="btn btn-success btn-sm" name="update_division_wise_data" onclick="update_division_wise_data('.$result['division_id'].')"><span class="spinner-border spinner-border-sm spinner" style="display: none"></span><span class="text_btn" style="display: block">Update</span></button>
                
              </div>
             
            </div>
          </div>
        </div></td>';*/


    /*$output .= '<td>
    			<div class="modal fade" id="delete_division_wise_data_modal'.$result['division_id'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-backdrop="false" aria-hidden="true">
		          <div class="modal-dialog" role="document">
		            <div class="modal-content">
		              <div class="modal-header">
		                <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
		                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		                  <span aria-hidden="true">&times;</span>
		                </button>
		              </div>
		              <div class="modal-body">
                
              		<div>Do you want to delete it?</div>
                  
                 <hr>
                  <button type="button" class="btn btn-danger btn-sm" name="delete_division_wise_data" onclick="delete_division_wise_data('.$result['division_id'].')"><span class="text_btn" style="display: block">Delete</span></button>
                
              </div>
           
            </div>
          </div>
        </div></td>';*/

    $output .= '</tr>';
    }

    echo $output;

}
    
    //echo json_encode(array('response' => 'success', 'result' => $division_data, 'count_division' => $count_division));


?>
