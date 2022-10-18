<?php
    require('db.inc.php');

    if (isset($_POST['display_ambulance_data'])) {
    
    
    $query = mysqli_query($dbc, "SELECT * from tbl_ambulance where ambulance_remove_status=0 order by company_name asc");
    
    $ambulance_data = array();
    $count_ambulance_data = 0;
    $output="";
    while($query && $result=mysqli_fetch_array($query, MYSQLI_ASSOC)){
        /*array_push($division_data, array('division_id'=>$result['division_id'], 'division_name'=>$result['division_name'], 'division_cases'=>$result['division_cases'], 'division_deaths'=>$result['division_deaths']));*/
        $count_ambulance_data++;

        $output .= '<tr>';

    $output .= '<td>'.$count_ambulance_data.'</td>';
    $output .= '<td>'.$result['company_name'].'</td>';
    $output .= '<td>'.$result['service_area'].'</td>';
    $output .= '<td>'.$result['contact_number'].'</td>';
    $output .= '<td>'.$result['company_name_bn'].'</td>';
    $output .= '<td>'.$result['service_area_bn'].'</td>';
    
    $output .= '<td>
    			<div class="btn-group" role="group">
    				<button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
    				<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
    					<a class="dropdown-item" style="cursor:pointer" data-toggle="modal" data-target="#edit_ambulance_data_modal'.$result['ambulance_id'].'">Edit</a>
    					<a class="dropdown-item" style="cursor:pointer" data-toggle="modal" data-target="#delete_ambulance_data_modal'.$result['ambulance_id'].'" >Delete</a>
    				</div>
    			</div>



    			<div class="modal fade" id="edit_ambulance_data_modal'.$result['ambulance_id'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-backdrop="false" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Ambulance Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                
                <div class="alert alert-success" style="display: none">Data updated successfully</div>
               
                  <div class="form-group">
                    <label for="company_name">Company Name:</label>
                    <input type="text" class="form-control" placeholder="Enter Company Name" id="company_name'.$result['ambulance_id'].'" name="company_name" value="'.$result['company_name'].'" >
                  </div>
                  <div class="form-group">
                    <label for="service_area">Service Area:</label>
                    <input type="text" class="form-control" placeholder="Enter Service Area" id="service_area'.$result['ambulance_id'].'" name="service_area" value="'.$result['service_area'].'" >
                  </div>

                  <div class="form-group">
                    <label for="contact_number">Contact Number:</label>
                    <input type="text" class="form-control" placeholder="Enter Contact Number" id="contact_number'.$result['ambulance_id'].'" name="contact_number" value="'.$result['contact_number'].'" >
                  </div>

                  <div class="form-group">
                    <label for="company_name_bn">Company Name(BN):</label>
                    <input type="text" class="form-control" placeholder="Enter Company Name(BN)" id="company_name_bn'.$result['ambulance_id'].'" name="company_name_bn" value="'.$result['company_name_bn'].'" >
                  </div>
                  <div class="form-group">
                    <label for="service_area_bn">Service Area(BN):</label>
                    <input type="text" class="form-control" placeholder="Enter Service Area(BN)" id="service_area_bn'.$result['ambulance_id'].'" name="service_area_bn" value="'.$result['service_area_bn'].'" >
                  </div>

                 
                  <button type="button" class="btn btn-success btn-sm" name="update_ambulance_data" onclick="update_ambulance_data('.$result['ambulance_id'].')"><span class="spinner-border spinner-border-sm spinner" style="display: none"></span><span class="text_btn" style="display: block">Update</span></button>
                
              </div>
             
            </div>
          </div>
        </div>



    			<div class="modal fade" id="delete_ambulance_data_modal'.$result['ambulance_id'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-backdrop="false" aria-hidden="true">
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
                  <button type="button" class="btn btn-danger btn-sm" name="delete_ambulance_data" onclick="delete_ambulance_data('.$result['ambulance_id'].')"><span class="text_btn" style="display: block">Delete</span></button>
                
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
