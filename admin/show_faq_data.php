<?php
    require('db.inc.php');

    if (isset($_POST['display_faq_data'])) {
    
    
    $query = mysqli_query($dbc, "SELECT * from tbl_faq where faq_status=0 order by faq_id desc");
    
    $faq_data = array();
    $count_faq = 0;
    $output="";
    while($query && $result=mysqli_fetch_array($query, MYSQLI_ASSOC)){
        /*array_push($division_data, array('division_id'=>$result['division_id'], 'division_name'=>$result['division_name'], 'division_cases'=>$result['division_cases'], 'division_deaths'=>$result['division_deaths']));*/
        $count_faq++;

        $output .= '<tr>';

    $output .= '<td>'.$count_faq.'</td>';
    $output .= '<td>'.$result['faq_category_en'].'</td>';
    $output .= '<td>'.$result['faq_category_bn'].'</td>';
    $output .= '<td>'.$result['faq_title_en'].'</td>';
    $output .= '<td>'.$result['faq_title_bn'].'</td>';
    $output .= '<td>'.mb_strimwidth($result['faq_description_en'],0,30).'</td>';
    $output .= '<td>'.mb_strimwidth($result['faq_description_bn'],0,30).'</td>';
    $output .= '<td>
    			<div class="btn-group" role="group">
    				<button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
    				<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
    					<a class="dropdown-item" style="cursor:pointer" data-toggle="modal" data-target="#edit_faq_data_modal'.$result['faq_id'].'">Edit</a>
    					<a class="dropdown-item" style="cursor:pointer" data-toggle="modal" data-target="#delete_faq_data_modal'.$result['faq_id'].'" >Delete</a>
    				</div>
    			</div>



    			<div class="modal fade" id="edit_faq_data_modal'.$result['faq_id'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-backdrop="false" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update FAQ Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                
                <div class="alert alert-success" style="display: none">Data updated successfully</div>
               
                  <div class="form-group">
                    <label for="faq_category_en">Category:</label>
                    <input type="text" class="form-control" placeholder="Enter Category" id="faq_category_en'.$result['faq_id'].'" name="faq_category_en" value="'.$result['faq_category_en'].'" required>
                  </div>
                  <div class="form-group">
                    <label for="faq_category_bn">Category (Bangla):</label>
                    <input type="text" class="form-control" placeholder="Enter Category (Bangla)" id="faq_category_bn'.$result['faq_id'].'" name="faq_category_bn" value="'.$result['faq_category_bn'].'" required>
                  </div>

                  <div class="form-group">
                    <label for="faq_title_en">Title:</label>
                    <input type="text" class="form-control" placeholder="Enter Title" id="faq_title_en'.$result['faq_id'].'" name="faq_title_en" value="'.$result['faq_title_en'].'" required>
                  </div>
                  <div class="form-group">
                    <label for="faq_title_bn">Title (Bangla):</label>
                    <input type="text" class="form-control" placeholder="Enter Title (Bangla)" id="faq_title_bn'.$result['faq_id'].'" name="faq_title_bn" value="'.$result['faq_title_bn'].'" required>
                  </div>

                  <div class="form-group">
                    <label for="faq_description_en">Description:</label>
                    <textarea type="text" class="form-control" placeholder="Enter Description" id="faq_description_en'.$result['faq_id'].'" name="faq_description_en" rows="7" style="white-space: pre-line;">'.$result['faq_description_en'].'</textarea>
                  </div>
                  <div class="form-group">
                    <label for="faq_description_bn">Description (Bangla):</label>
                    <textarea type="text" class="form-control" placeholder="Enter Description (Bangla)" id="faq_description_bn'.$result['faq_id'].'" name="faq_description_bn" rows="7" style="white-space: pre-line;">'.$result['faq_description_bn'].'</textarea>
                  </div>

            
                 
                  <button type="button" class="btn btn-success btn-sm" name="update_faq_data" onclick="update_faq_data('.$result['faq_id'].')"><span class="spinner-border spinner-border-sm spinner" style="display: none"></span><span class="text_btn" style="display: block">Update</span></button>
                
              </div>
             
            </div>
          </div>
        </div>



    			<div class="modal fade" id="delete_faq_data_modal'.$result['faq_id'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-backdrop="false" aria-hidden="true">
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
                  <button type="button" class="btn btn-danger btn-sm" name="delete_faq_data" onclick="delete_faq_data('.$result['faq_id'].')"><span class="text_btn" style="display: block">Delete</span></button>
                
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
