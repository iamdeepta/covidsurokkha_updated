<?php
    require('db.inc.php');

    if (isset($_POST['display_blogs_data'])) {
    
    
    $query = mysqli_query($dbc, "SELECT * from tbl_blogs where blogs_status=0 order by blogs_id desc");
    
    $blogs_data = array();
    $count_blogs = 0;
    $output="";
    while($query && $result=mysqli_fetch_array($query, MYSQLI_ASSOC)){
        /*array_push($division_data, array('division_id'=>$result['division_id'], 'division_name'=>$result['division_name'], 'division_cases'=>$result['division_cases'], 'division_deaths'=>$result['division_deaths']));*/
        $count_blogs++;

        $output .= '<tr>';

    $output .= '<td>'.$count_blogs.'</td>';
    $output .= '<td>'.mb_strimwidth($result['blogs_title_en'],0,22).'...</td>';
    $output .= '<td>'.mb_strimwidth($result['blogs_title_bn'],0,22).'...</td>';
    $output .= '<td>'.mb_strimwidth($result['blogs_description1_en'],0,60).'...</td>';
    $output .= '<td>'.mb_strimwidth($result['blogs_description1_bn'],0,60).'...</td>';
    $output .= '<td>'.mb_strimwidth($result['blogs_description2_en'],0,60).'...</td>';
    $output .= '<td>'.mb_strimwidth($result['blogs_description2_bn'],0,60).'...</td>';
    $output .= '<td>'.$result['blogs_tag_en'].'</td>';
    $output .= '<td>'.$result['blogs_tag_bn'].'</td>';
    $output .= '<td>'.$result['blogs_category_en'].'</td>';
    $output .= '<td>'.$result['blogs_category_bn'].'</td>';
    $output .= '<td>'.$result['blogs_time'].'</td>';
    $output .= '<td>'.$result['blogs_date'].'</td>';
    
    if($result['blogs_image1']!=''){
    $output .= '<td><img src="files/blogs_images/'.$result['blogs_image1'].'" data-toggle="modal" data-target="#edit_image1_blogs_data_modal'.$result['blogs_id'].'" style="height: 80px;width:80px"/></td>';
  }else{
    $output .= '<td><img src="files/blogs_images/noimage.png" data-toggle="modal" data-target="#edit_image1_blogs_data_modal'.$result['blogs_id'].'" style="height: 80px;width:80px"/></td>';
  }

  if($result['blogs_image2']!=''){
    $output .= '<td><img src="files/blogs_images/'.$result['blogs_image2'].'" data-toggle="modal" data-target="#edit_image2_blogs_data_modal'.$result['blogs_id'].'" style="height: 80px;width:80px"/></td>';
  }else{
    $output .= '<td><img src="files/blogs_images/noimage.png" data-toggle="modal" data-target="#edit_image2_blogs_data_modal'.$result['blogs_id'].'" style="height: 80px;width:80px"/></td>';
  }

  if($result['blogs_image3']!=''){
    $output .= '<td><img src="files/blogs_images/'.$result['blogs_image3'].'" data-toggle="modal" data-target="#edit_image3_blogs_data_modal'.$result['blogs_id'].'" style="height: 80px;width:80px"/></td>';
  }else{
    $output .= '<td><img src="files/blogs_images/noimage.png" data-toggle="modal" data-target="#edit_image3_blogs_data_modal'.$result['blogs_id'].'" style="height: 80px;width:80px"/></td>';
  }


  $output .= '<td>'.$result['blogs_image1_alt_en'].'</td>';
  $output .= '<td>'.$result['blogs_image1_alt_bn'].'</td>';
  $output .= '<td>'.$result['blogs_image2_alt_en'].'</td>';
  $output .= '<td>'.$result['blogs_image2_alt_bn'].'</td>';
  $output .= '<td>'.$result['blogs_image3_alt_en'].'</td>';
  $output .= '<td>'.$result['blogs_image3_alt_bn'].'</td>';

    $output .= '<td>
    			<div class="btn-group" role="group">
    				<button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
    				<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
    					<a class="dropdown-item" style="cursor:pointer" data-toggle="modal" data-target="#edit_blogs_data_modal'.$result['blogs_id'].'">Edit</a>
    					<a class="dropdown-item" style="cursor:pointer" data-toggle="modal" data-target="#delete_blogs_data_modal'.$result['blogs_id'].'" >Delete</a>
    				</div>
    			</div>




          <div class="modal fade" id="edit_image1_blogs_data_modal'.$result['blogs_id'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-backdrop="false" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Cover Image</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                
                <div class="alert alert-success" style="display: none"></div>
                <form name="forms1" id="fupForm_img1'.$result['blogs_id'].'" enctype="multipart/form-data">

                <div class="form-group">
                    
                    <input type="hidden" class="form-control" id="blogs_id1'.$result['blogs_id'].'" value="'.$result['blogs_id'].'" name="blogs_id1" required>
                  </div>

                  <div class="form-group">
                    <label for="file1'.$result['blogs_id'].'">Image</label>
                    <input type="file" class="form-control" id="file1'.$result['blogs_id'].'" name="files1[]" multiple />
                  </div>
                  
                  <button type="submit" class="btn btn-success btn-sm" name="blogs_update_image1" id="blogs_update_image1'.$result['blogs_id'].'" onclick="getId1('.$result['blogs_id'].')"><span class="spinner-border spinner-border-sm spinner" style="display: none"></span><span class="text_btn" style="display: block">Update</span></button>
                </form>
              </div>
             
            </div>
          </div>
        </div>




        <div class="modal fade" id="edit_image2_blogs_data_modal'.$result['blogs_id'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-backdrop="false" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Image 2</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                
                <div class="alert alert-success" style="display: none"></div>
                <form name="forms2" id="fupForm_img2'.$result['blogs_id'].'" enctype="multipart/form-data">

                <div class="form-group">
                    
                    <input type="hidden" class="form-control" id="blogs_id2'.$result['blogs_id'].'" value="'.$result['blogs_id'].'" name="blogs_id2" required>
                  </div>

                  <div class="form-group">
                    <label for="file2'.$result['blogs_id'].'">Image</label>
                    <input type="file" class="form-control" id="file2'.$result['blogs_id'].'" name="files2[]" multiple />
                  </div>
                  
                  <button type="submit" class="btn btn-success btn-sm" name="blogs_update_image2" id="blogs_update_image2'.$result['blogs_id'].'" onclick="getId2('.$result['blogs_id'].')"><span class="spinner-border spinner-border-sm spinner" style="display: none"></span><span class="text_btn" style="display: block">Update</span></button>
                </form>
              </div>
             
            </div>
          </div>
        </div>




        <div class="modal fade" id="edit_image3_blogs_data_modal'.$result['blogs_id'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-backdrop="false" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Image 3</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                
                <div class="alert alert-success" style="display: none"></div>
                <form name="forms3" id="fupForm_img3'.$result['blogs_id'].'" enctype="multipart/form-data">

                <div class="form-group">
                    
                    <input type="hidden" class="form-control" id="blogs_id3'.$result['blogs_id'].'" value="'.$result['blogs_id'].'" name="blogs_id3" required>
                  </div>

                  <div class="form-group">
                    <label for="file3'.$result['blogs_id'].'">Image</label>
                    <input type="file" class="form-control" id="file3'.$result['blogs_id'].'" name="files3[]" multiple />
                  </div>
                  
                  <button type="submit" class="btn btn-success btn-sm" name="blogs_update_image3" id="blogs_update_image3'.$result['blogs_id'].'" onclick="getId3('.$result['blogs_id'].')"><span class="spinner-border spinner-border-sm spinner" style="display: none"></span><span class="text_btn" style="display: block">Update</span></button>
                </form>
              </div>
             
            </div>
          </div>
        </div>




    			<div class="modal fade" id="edit_blogs_data_modal'.$result['blogs_id'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-backdrop="false" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Blogs Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                
                <div class="alert alert-success" style="display: none"></div>
              
                  <div class="form-group">
                    <label for="blogs_title_en'.$result['blogs_id'].'">Title:</label>
                    <input type="text" class="form-control" placeholder="Enter Title" id="blogs_title_en'.$result['blogs_id'].'" name="blogs_title_en" value="'.$result['blogs_title_en'].'">
                  </div>
                  <div class="form-group">
                    <label for="blogs_title_bn'.$result['blogs_id'].'">Title (Bangla):</label>
                    <input type="text" class="form-control" placeholder="Enter Title (Bangla)" id="blogs_title_bn'.$result['blogs_id'].'" name="blogs_title_bn" value="'.$result['blogs_title_bn'].'">
                  </div>

                  <div class="form-group">
                    <label for="blogs_description1_en'.$result['blogs_id'].'">Description 1:</label>
                    <textarea class="form-control" placeholder="Enter Description 1" id="blogs_description1_en'.$result['blogs_id'].'" name="blogs_description1_en" rows="7" style="white-space:pre-line">'.$result['blogs_description1_en'].'</textarea>
                  </div>
                  <div class="form-group">
                    <label for="blogs_description1_bn'.$result['blogs_id'].'">Description 1 (Bangla):</label>
                    <textarea class="form-control" placeholder="Enter Description 1 (Bangla)" id="blogs_description1_bn'.$result['blogs_id'].'" name="blogs_description1_en" rows="7" style="white-space:pre-line">'.$result['blogs_description1_bn'].'</textarea>
                  </div>

                  <div class="form-group">
                    <label for="blogs_description2_en'.$result['blogs_id'].'">Description 2:</label>
                    <textarea class="form-control" placeholder="Enter Description 2" id="blogs_description2_en'.$result['blogs_id'].'" name="blogs_description2_en" rows="7" style="white-space:pre-line">'.$result['blogs_description2_en'].'</textarea>
                  </div>
                  <div class="form-group">
                    <label for="blogs_description2_bn'.$result['blogs_id'].'">Description 2 (Bangla):</label>
                    <textarea class="form-control" placeholder="Enter Description 2 (Bangla)" id="blogs_description2_bn'.$result['blogs_id'].'" name="blogs_description2_en" rows="7" style="white-space:pre-line">'.$result['blogs_description2_bn'].'</textarea>
                  </div>

                  <div class="form-group">
                    <label for="blogs_tag_en'.$result['blogs_id'].'">Tag:</label>
                    <input type="text" class="form-control" placeholder="Enter Tag" id="blogs_tag_en'.$result['blogs_id'].'" name="blogs_tag_en" value="'.$result['blogs_tag_en'].'">
                  </div>
                  <div class="form-group">
                    <label for="blogs_tag_bn'.$result['blogs_id'].'">Tag (Bangla):</label>
                    <input type="text" class="form-control" placeholder="Enter Tag (Bangla)" id="blogs_tag_bn'.$result['blogs_id'].'" name="blogs_tag_bn" value="'.$result['blogs_tag_bn'].'">
                  </div>

                  <div class="form-group">
                    <label for="blogs_category_en'.$result['blogs_id'].'">category:</label>
                    <input type="text" class="form-control" placeholder="Enter category" id="blogs_category_en'.$result['blogs_id'].'" name="blogs_category_en" value="'.$result['blogs_category_en'].'">
                  </div>
                  <div class="form-group">
                    <label for="blogs_category_bn'.$result['blogs_id'].'">Category (Bangla):</label>
                    <input type="text" class="form-control" placeholder="Enter Category (Bangla)" id="blogs_category_bn'.$result['blogs_id'].'" name="blogs_category_bn" value="'.$result['blogs_category_bn'].'">
                  </div>

                  <div class="form-group">
                    <label for="blogs_time'.$result['blogs_id'].'">Time:</label>
                    <input type="number" class="form-control" placeholder="Enter Category (Bangla)" id="blogs_time'.$result['blogs_id'].'" name="blogs_time" value="'.$result['blogs_time'].'">
                  </div>

                  <div class="form-group">
                    <label for="blogs_image1_alt_en'.$result['blogs_image1_alt_en'].'">Image1 alt:</label>
                    <input type="text" class="form-control" placeholder="Enter Image1 alt" id="blogs_image1_alt_en'.$result['blogs_id'].'" name="blogs_image1_alt_en" value="'.$result['blogs_image1_alt_en'].'">
                  </div>
                  <div class="form-group">
                    <label for="blogs_image1_alt_bn'.$result['blogs_image1_alt_bn'].'">Image1 alt(Bangla):</label>
                    <input type="text" class="form-control" placeholder="Enter Image1 alt(Bangla)" id="blogs_image1_alt_bn'.$result['blogs_id'].'" name="blogs_image1_alt_bn" value="'.$result['blogs_image1_alt_bn'].'">
                  </div>

                  <div class="form-group">
                    <label for="blogs_image2_alt_en'.$result['blogs_image2_alt_en'].'">Image2 alt:</label>
                    <input type="text" class="form-control" placeholder="Enter Image2 alt" id="blogs_image2_alt_en'.$result['blogs_id'].'" name="blogs_image2_alt_en" value="'.$result['blogs_image2_alt_en'].'">
                  </div>
                  <div class="form-group">
                    <label for="blogs_image2_alt_bn'.$result['blogs_image2_alt_bn'].'">Image2 alt(Bangla):</label>
                    <input type="text" class="form-control" placeholder="Enter Image2 alt(Bangla)" id="blogs_image2_alt_bn'.$result['blogs_id'].'" name="blogs_image2_alt_bn" value="'.$result['blogs_image2_alt_bn'].'">
                  </div>

                  <div class="form-group">
                    <label for="blogs_image3_alt_en'.$result['blogs_image3_alt_en'].'">Image3 alt:</label>
                    <input type="text" class="form-control" placeholder="Enter Image3 alt" id="blogs_image3_alt_en'.$result['blogs_id'].'" name="blogs_image3_alt_en" value="'.$result['blogs_image3_alt_en'].'">
                  </div>
                  <div class="form-group">
                    <label for="blogs_image3_alt_bn'.$result['blogs_image3_alt_bn'].'">Image3 alt(Bangla):</label>
                    <input type="text" class="form-control" placeholder="Enter Image3 alt(Bangla)" id="blogs_image3_alt_bn'.$result['blogs_id'].'" name="blogs_image3_alt_bn" value="'.$result['blogs_image3_alt_bn'].'">
                  </div>

                  
                  <button type="button" class="btn btn-success btn-sm" name="blogs_update" id="blogs_update'.$result['blogs_id'].'" onclick="updateBlogsData('.$result['blogs_id'].')"><span class="spinner-border spinner-border-sm spinner" style="display: none"></span><span class="text_btn" style="display: block">Update</span></button>
                
              </div>
             
            </div>
          </div>
        </div>



    			<div class="modal fade" id="delete_blogs_data_modal'.$result['blogs_id'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-backdrop="false" aria-hidden="true">
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
                  <button type="button" class="btn btn-danger btn-sm" name="delete_blogs_data" onclick="delete_blogs_data('.$result['blogs_id'].')"><span class="text_btn" style="display: block">Delete</span></button>
                
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



<script type="text/javascript">

  
  $(document).ready(function(){


    //console.log($('input[type="hidden"]').val());
  //display_starting_guide_data();
    // Submit form data via Ajax
    $('form[name="forms1"]').on('submit', function(e){
        e.preventDefault();
        console.log(e);
        $.ajax({
            type: 'POST',
            url: 'update_blogs_image1_data.php',
            data: new FormData(this),
            dataType: 'json',
            contentType: false,
            cache: false,
            processData:false,
            beforeSend: function(){
                $(".spinner").css("display","block");
                $(".text_btn").css("display","none");
            },
            success: function(response){
                $('.alert').html('');
                if(response.status == 1){
                    $('form[name="forms1"]')[0].reset();
                    //$('.statusMsg').html('<p class="alert alert-success">'+response.message+'</p>');

                    $(".spinner").css("display","none");
                    $(".text_btn").css("display","block");

                    $(".alert").css("display","block");
                    $('.alert').addClass("alert-success");
                    $('.alert').html(response.message);

                    display_blogs_data();

                    $('body').css("overflow-y","auto");

                }else{
                  $(".spinner").css("display","none");
                    $(".text_btn").css("display","block");
                    $('.alert').css("background-color","pink");
                    $('.alert').css("color","red");
                    $('.alert').html(response.message);
                    $(".alert").css("display","block");
                }
                $('form[name="forms1"]').css("opacity","");
                //$("#doctor_submit").removeAttr("disabled");
            }
        });
    });



    $('form[name="forms2"]').on('submit', function(e){
        e.preventDefault();
        console.log(e);
        $.ajax({
            type: 'POST',
            url: 'update_blogs_image2_data.php',
            data: new FormData(this),
            dataType: 'json',
            contentType: false,
            cache: false,
            processData:false,
            beforeSend: function(){
                $(".spinner").css("display","block");
                $(".text_btn").css("display","none");
            },
            success: function(response){
                $('.alert').html('');
                if(response.status == 1){
                    $('form[name="forms2"]')[0].reset();
                    //$('.statusMsg').html('<p class="alert alert-success">'+response.message+'</p>');

                    $(".spinner").css("display","none");
                    $(".text_btn").css("display","block");

                    $(".alert").css("display","block");
                    $('.alert').addClass("alert-success");
                    $('.alert').html(response.message);

                    display_blogs_data();

                    $('body').css("overflow-y","auto");

                }else{
                  $(".spinner").css("display","none");
                    $(".text_btn").css("display","block");
                    $('.alert').css("background-color","pink");
                    $('.alert').css("color","red");
                    $('.alert').html(response.message);
                    $(".alert").css("display","block");
                }
                $('form[name="forms2"]').css("opacity","");
                //$("#doctor_submit").removeAttr("disabled");
            }
        });
    });


    $('form[name="forms3"]').on('submit', function(e){
        e.preventDefault();
        console.log(e);
        $.ajax({
            type: 'POST',
            url: 'update_blogs_image3_data.php',
            data: new FormData(this),
            dataType: 'json',
            contentType: false,
            cache: false,
            processData:false,
            beforeSend: function(){
                $(".spinner").css("display","block");
                $(".text_btn").css("display","none");
            },
            success: function(response){
                $('.alert').html('');
                if(response.status == 1){
                    $('form[name="forms3"]')[0].reset();
                    //$('.statusMsg').html('<p class="alert alert-success">'+response.message+'</p>');

                    $(".spinner").css("display","none");
                    $(".text_btn").css("display","block");

                    $(".alert").css("display","block");
                    $('.alert').addClass("alert-success");
                    $('.alert').html(response.message);

                    display_blogs_data();

                    $('body').css("overflow-y","auto");

                }else{
                  $(".spinner").css("display","none");
                    $(".text_btn").css("display","block");
                    $('.alert').css("background-color","pink");
                    $('.alert').css("color","red");
                    $('.alert').html(response.message);
                    $(".alert").css("display","block");
                }
                $('form[name="forms3"]').css("opacity","");
                //$("#doctor_submit").removeAttr("disabled");
            }
        });
    });

  
    // File type validation
    var match1 = ['image/jpeg', 'image/png', 'image/jpg', 'image/PNG'];
    var match2 = ['image/jpeg', 'image/png', 'image/jpg', 'image/PNG'];
    var match3 = ['image/jpeg', 'image/png', 'image/jpg', 'image/PNG'];

    $("#file1").change(function() {
        for(i=0;i<this.files.length;i++){
            var file1 = this.files[i];
            var fileType1 = file1.type;
      
            if(!((fileType1 == match1[0]) || (fileType1 == match1[1]) || (fileType1 == match1[2]) || (fileType1 == match1[3]) || (fileType1 == match1[4]) || (fileType1 == match1[5]))){
                //alert('Sorry, only PDF, DOC, JPG, JPEG, & PNG files are allowed to upload.');
                $('.alert').html('Sorry, only JPG, JPEG, & PNG files are allowed to upload.');
                $('.alert').css("background-color","pink");
                $('.alert').css("color","red");
                $("#file1").val('');
                return false;
            }
        }
    });

    $("#file2").change(function() {
        for(i=0;i<this.files.length;i++){
            var file2 = this.files[i];
            var fileType2 = file2.type;
      
            if(!((fileType2 == match2[0]) || (fileType2 == match2[1]) || (fileType2 == match2[2]) || (fileType2 == match2[3]) || (fileType2 == match2[4]) || (fileType2 == match2[5]))){
                //alert('Sorry, only PDF, DOC, JPG, JPEG, & PNG files are allowed to upload.');
                $('.alert').html('Sorry, only JPG, JPEG, & PNG files are allowed to upload.');
                $('.alert').css("background-color","pink");
                $('.alert').css("color","red");
                $("#file2").val('');
                return false;
            }
        }
    });


    $("#file3").change(function() {
        for(i=0;i<this.files.length;i++){
            var file3 = this.files[i];
            var fileType3 = file3.type;
      
            if(!((fileType3 == match3[0]) || (fileType3 == match3[1]) || (fileType3 == match3[2]) || (fileType3 == match3[3]) || (fileType3 == match3[4]) || (fileType3 == match3[5]))){
                //alert('Sorry, only PDF, DOC, JPG, JPEG, & PNG files are allowed to upload.');
                $('.alert').html('Sorry, only JPG, JPEG, & PNG files are allowed to upload.');
                $('.alert').css("background-color","pink");
                $('.alert').css("color","red");
                $("#file3").val('');
                return false;
            }
        }
    });
});


</script>