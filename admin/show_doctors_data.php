<?php
    require('db.inc.php');

    if (isset($_POST['display_doctors_data'])) {
    
    
    $query = mysqli_query($dbc, "SELECT * from tbl_doctors where doctor_remove_status=0 order by doctor_id asc");
    
    $doctor_data = array();
    $count_doctor = 0;
    $output="";
    while($query && $result=mysqli_fetch_array($query, MYSQLI_ASSOC)){
        /*array_push($division_data, array('division_id'=>$result['division_id'], 'division_name'=>$result['division_name'], 'division_cases'=>$result['division_cases'], 'division_deaths'=>$result['division_deaths']));*/
        $count_doctor++;

        $output .= '<tr>';

    $output .= '<td>'.$count_doctor.'</td>';
    $output .= '<td>'.$result['doctor_name'].'</td>';
    $output .= '<td>'.$result['doctor_post'].'</td>';
    $output .= '<td>'.$result['doctor_consultation_time'].'</td>';
    $output .= '<td>'.$result['doctor_hospital'].'</td>';
    $output .= '<td><img src="files/'.$result['doctor_image'].'" style="height: 80px;width:80px"/></td>';
    $output .= '<td>
    			<div class="btn-group" role="group">
    				<button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
    				<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
    					<a class="dropdown-item" style="cursor:pointer" data-toggle="modal" data-target="#edit_doctor_data_modal'.$result['doctor_id'].'">Edit</a>
    					<a class="dropdown-item" style="cursor:pointer" data-toggle="modal" data-target="#delete_doctor_data_modal'.$result['doctor_id'].'" >Delete</a>
    				</div>
    			</div>



    			<div class="modal fade" id="edit_doctor_data_modal'.$result['doctor_id'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-backdrop="false" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Doctor Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                
                <div class="alert alert-success" style="display: none"></div>
              
                  <div class="form-group">
                    <label for="doctor_name'.$result['doctor_id'].'">Doctor Name:</label>
                    <input type="text" class="form-control" placeholder="Enter Doctor Name" id="doctor_name'.$result['doctor_id'].'" name="doctor_name1" value="'.$result['doctor_name'].'">
                  </div>
                  <div class="form-group">
                    <label for="doctor_post'.$result['doctor_id'].'">Post:</label>
                    <input type="text" class="form-control" placeholder="Enter Post" id="doctor_post'.$result['doctor_id'].'" name="doctor_post1" value="'.$result['doctor_post'].'">
                  </div>

                  <div class="form-group">
                    <label for="doctor_consultation_time'.$result['doctor_id'].'">Consultation Time:</label>
                    <input type="text" class="form-control" placeholder="Enter Consultation Time" id="doctor_consultation_time'.$result['doctor_id'].'" name="doctor_consultation_time1" value="'.$result['doctor_consultation_time'].'">
                  </div>

                  <div class="form-group">
                    <label for="doctor_hospital'.$result['doctor_id'].'">Hospital Name:</label>
                    <input type="text" class="form-control" placeholder="Enter Hospital Name" id="doctor_hospital'.$result['doctor_id'].'" name="doctor_hospital1" value="'.$result['doctor_hospital'].'">
                  </div>

                 
                  <button type="button" class="btn btn-success btn-sm" name="doctor_update" id="doctor_update'.$result['doctor_id'].'" onclick="updateDoctorsData('.$result['doctor_id'].')"><span class="spinner-border spinner-border-sm spinner" style="display: none"></span><span class="text_btn" style="display: block">Update</span></button>
                
              </div>
             
            </div>
          </div>
        </div>



    			<div class="modal fade" id="delete_doctor_data_modal'.$result['doctor_id'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-backdrop="false" aria-hidden="true">
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
                  <button type="button" class="btn btn-danger btn-sm" name="delete_doctor_data" onclick="delete_doctor_data('.$result['doctor_id'].')"><span class="text_btn" style="display: block">Delete</span></button>
                
              </div>
           
            </div>
          </div>
        </div>
    			</td>';


   

    $output .= '</tr>';
    }

    echo $output;

}
    
    //echo json_encode(array('response' => 'success', 'result' => $division_data, 'count_division' => $count_division));


?>
