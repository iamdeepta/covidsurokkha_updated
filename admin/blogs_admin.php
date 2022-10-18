<?php

session_start();

include("db.inc.php");



    if ($_SESSION["flag"] == "ok")

    {



      $msg = @$_GET['msg_panel'];



      

  //$home=mysqli_fetch_array($admin_home);

?>



<!DOCTYPE html>

<html lang="en">


<head>



  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta name="description" content="">

  <meta name="author" content="">



  <title>Blogs</title>



  <?php include 'css_master.php';?>





</head>



<body>

<?php include 'navbar.php';?>


<div class="container col-md-8">

  <div class="card" style="margin-top: 2%">
    <div class="card-header row">
        <h6>Blogs Data</h6>
        <button class="btn btn-dark btn-sm" style="margin-left: 10px;" data-toggle="modal" data-target="#add_blogs_modal">+</button>

        <!-- Modal -->
        <div class="modal fade" id="add_blogs_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Blogs</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                
                <div class="alert alert-success" style="display: none"></div>
                <form id="fupForm" enctype="multipart/form-data">

                  <div class="form-group">
                    <label for="blogs_title_en">Title:</label>
                    <input type="text" class="form-control" placeholder="Enter Title" id="blogs_title_en" name="blogs_title_en" >
                  </div>
                  <div class="form-group">
                    <label for="blogs_title_bn">Title (Bangla):</label>
                    <input type="text" class="form-control" placeholder="Enter Title (Bangla)" id="blogs_title_bn" name="blogs_title_bn" >
                  </div>

                  <div class="form-group">
                    <label for="blogs_description1_en">Description 1:</label>
                    <textarea type="text" class="form-control" placeholder="Enter Description 1" id="blogs_description1_en" name="blogs_description1_en" rows="7"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="blogs_description1_bn">Description 1 (Bangla):</label>
                    <textarea type="text" class="form-control" placeholder="Enter Description 1 (Bangla)" id="blogs_description1_bn" name="blogs_description1_bn" rows="7"></textarea>
                  </div>

                  <div class="form-group">
                    <label for="blogs_description2_en">Description 2:</label>
                    <textarea type="text" class="form-control" placeholder="Enter Description 2" id="blogs_description2_en" name="blogs_description2_en" rows="7"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="blogs_description2_bn">Description 2 (Bangla):</label>
                    <textarea type="text" class="form-control" placeholder="Enter Description 2 (Bangla)" id="blogs_description2_bn" name="blogs_description2_bn" rows="7"></textarea>
                  </div>

                  <div class="form-group">
                    <label for="blogs_tag_en">Tag:</label>
                    <input type="text" class="form-control" placeholder="Enter Tag" id="blogs_tag_en" name="blogs_tag_en" >
                  </div>
                  <div class="form-group">
                    <label for="blogs_tag_bn">Tag (Bangla):</label>
                    <input type="text" class="form-control" placeholder="Enter Tag (Bangla)" id="blogs_tag_bn" name="blogs_tag_bn" >
                  </div>

                  <div class="form-group">
                    <label for="blogs_category_en">Category:</label>
                    <input type="text" class="form-control" placeholder="Enter Category" id="blogs_category_en" name="blogs_category_en" >
                  </div>
                  <div class="form-group">
                    <label for="blogs_category_bn">Category (Bangla):</label>
                    <input type="text" class="form-control" placeholder="Enter Category (Bangla)" id="blogs_category_bn" name="blogs_category_bn" >
                  </div>

                  <div class="form-group">
                    <label for="blogs_time">Time to read(min):</label>
                    <input type="number" class="form-control" placeholder="Time to read" id="blogs_time" name="blogs_time" >
                  </div>

                  <div class="form-group">
                    <label for="file1">Cover Image</label>
                    <input type="file" class="form-control" id="file1" name="files1[]" multiple />
                  </div>
                  <div class="form-group">
                    <label for="file2">Image 2</label>
                    <input type="file" class="form-control" id="file2" name="files2[]" multiple />
                  </div>
                  <div class="form-group">
                    <label for="file3">Image 3</label>
                    <input type="file" class="form-control" id="file3" name="files3[]" multiple />
                  </div>

                  <div class="form-group">
                    <label for="blogs_image1_alt_en">Image1 alt:</label>
                    <input type="text" class="form-control" placeholder="Enter Image1 alt" id="blogs_image1_alt_en" name="blogs_image1_alt_en" >
                  </div>

                  <div class="form-group">
                    <label for="blogs_image1_alt_bn">Image1 alt (Bangla):</label>
                    <input type="text" class="form-control" placeholder="Enter Image1 alt (Bangla)" id="blogs_image1_alt_en" name="blogs_image1_alt_en" >
                  </div>

                  <div class="form-group">
                    <label for="blogs_image2_alt_en">Image2 alt:</label>
                    <input type="text" class="form-control" placeholder="Enter Image2 alt" id="blogs_image2_alt_en" name="blogs_image2_alt_en" >
                  </div>

                  <div class="form-group">
                    <label for="blogs_image2_alt_bn">Image2 alt (Bangla):</label>
                    <input type="text" class="form-control" placeholder="Enter Image2 alt (Bangla)" id="blogs_image2_alt_en" name="blogs_image2_alt_en" >
                  </div>

                  <div class="form-group">
                    <label for="blogs_image3_alt_en">Image3 alt:</label>
                    <input type="text" class="form-control" placeholder="Enter Image3 alt" id="blogs_image3_alt_en" name="blogs_image3_alt_en" >
                  </div>

                  <div class="form-group">
                    <label for="blogs_image3_alt_bn">Image3 alt (Bangla):</label>
                    <input type="text" class="form-control" placeholder="Enter Image3 alt (Bangla)" id="blogs_image3_alt_en" name="blogs_image3_alt_en" >
                  </div>
                 
                  <button type="submit" class="btn btn-dark btn-sm" name="blogs_submit"><span class="spinner-border spinner-border-sm spinner" style="display: none"></span><span class="text_btn" style="display: block">Add</span></button>
                </form>
              </div>
             <!--  <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save</button>
              </div> -->
            </div>
          </div>
        </div>


      </div>
    <div class="card-body">

      <table id="dtBasicExample1" class="table-striped table-bordered table-responsive" cellspacing="0" width="100%" style="height: 73vh">
        <thead>
          <tr>
            <th class="th-sm">SL.</th>
            <th class="th-sm">Title</th>
            <th class="th-sm">Title(BN)</th>
            <th class="th-sm">Description1</th>
            <th class="th-sm">Description1(BN)</th>
            <th class="th-sm">Description2</th>
            <th class="th-sm">Description2(BN)</th>
            <th class="th-sm">Tag</th>
            <th class="th-sm">Tag(BN)</th>
            <th class="th-sm">Catg</th>
            <th class="th-sm">Catg(BN)</th>
            <th class="th-sm">Time</th>
            <th class="th-sm">Date</th>
            <th class="th-sm">Image1</th>
            <th class="th-sm">Image2</th>
            <th class="th-sm">Image3</th>
            <th class="th-sm">Image1 alt</th>
            <th class="th-sm">Image1 alt(BN)</th>
            <th class="th-sm">Image2 alt</th>
            <th class="th-sm">Image2 alt(BN)</th>
            <th class="th-sm">Image3 alt</th>
            <th class="th-sm">Image3 alt(BN)</th>
            <th class="th-sm">Actions</th>
          </tr>
        </thead>

        <tbody id="tbody_div">
          <!-- division data -->
         
        </tbody>
      </table>
    </div>
    
  </div>
  
</div>


  <?php include 'js_master.php';?>
  

<script type="text/javascript">

  
//form insert data
$(document).ready(function(){

  display_blogs_data();
    // Submit form data via Ajax
    $("#fupForm").on('submit', function(e){
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'add_blogs_data.php',
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
                    $('#fupForm')[0].reset();
                    //$('.statusMsg').html('<p class="alert alert-success">'+response.message+'</p>');

                    $(".spinner").css("display","none");
                    $(".text_btn").css("display","block");

                    $(".alert").css("display","block");
                    $('.alert').addClass("alert-success");
                    $('.alert').html(response.message);

                    display_blogs_data();
                }else{
                  $(".spinner").css("display","none");
                    $(".text_btn").css("display","block");
                    $('.alert').css("background-color","pink");
                    $('.alert').css("color","red");
                    $('.alert').html(response.message);
                    $(".alert").css("display","block");
                }
                $('#fupForm').css("opacity","");
                //$("#doctor_submit").removeAttr("disabled");
            }
        });
    });

  
    // File type validation
    var match1 = ['image/jpeg', 'image/png', 'image/jpg'];
    var match2 = ['image/jpeg', 'image/png', 'image/jpg'];
    var match3 = ['image/jpeg', 'image/png', 'image/jpg'];
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

  


function display_blogs_data(){

  var display_blogs_data = 'display_blogs_data';

  $.ajax({

    url: 'show_blogs_data.php',
    type: 'post',
    data:{
      display_blogs_data: display_blogs_data
    },

    success: function(data){

      $("#tbody_div").html(data);
    }
  })
}


function updateBlogsData(blogs_id){

  var blogs_title_en1 = $("#blogs_title_en"+blogs_id).val();
  var blogs_title_bn1 = $("#blogs_title_bn"+blogs_id).val();
  var blogs_description1_en1 = $("#blogs_description1_en"+blogs_id).val();
  var blogs_description1_bn1 = $("#blogs_description1_bn"+blogs_id).val();
  var blogs_description2_en1 = $("#blogs_description2_en"+blogs_id).val();
  var blogs_description2_bn1 = $("#blogs_description2_bn"+blogs_id).val();
  var blogs_tag_en1 = $("#blogs_tag_en"+blogs_id).val();
  var blogs_tag_bn1 = $("#blogs_tag_bn"+blogs_id).val();
  var blogs_category_en1 = $("#blogs_category_en"+blogs_id).val();
  var blogs_category_bn1 = $("#blogs_category_bn"+blogs_id).val();
  var blogs_time1 = $("#blogs_time"+blogs_id).val();
  var blogs_image1_alt_en = $("#blogs_image1_alt_en"+blogs_id).val();
  var blogs_image1_alt_bn = $("#blogs_image1_alt_bn"+blogs_id).val();
  var blogs_image2_alt_en = $("#blogs_image2_alt_en"+blogs_id).val();
  var blogs_image2_alt_bn = $("#blogs_image2_alt_bn"+blogs_id).val();
  var blogs_image3_alt_en = $("#blogs_image3_alt_en"+blogs_id).val();
  var blogs_image3_alt_bn = $("#blogs_image3_alt_bn"+blogs_id).val();
  

  //console.log(doctor_name1, doctor_post1, doctor_hospital1, doctor_consultation_time1);

  $.ajax({

    url: 'update_blogs_data.php',
    type: 'post',
    data: {

      blogs_id: blogs_id,
      blogs_title_en1: blogs_title_en1,
      blogs_title_bn1: blogs_title_bn1,
      blogs_description1_en1: blogs_description1_en1,
      blogs_description1_bn1: blogs_description1_bn1,
      blogs_description2_en1: blogs_description2_en1,
      blogs_description2_bn1: blogs_description2_bn1,
      blogs_tag_en1: blogs_tag_en1,
      blogs_tag_bn1: blogs_tag_bn1,
      blogs_category_en1: blogs_category_en1,
      blogs_category_bn1: blogs_category_bn1,
      blogs_time1: blogs_time1,
      blogs_image1_alt_en: blogs_image1_alt_en,
      blogs_image1_alt_bn: blogs_image1_alt_bn,
      blogs_image2_alt_en: blogs_image2_alt_en,
      blogs_image2_alt_bn: blogs_image2_alt_bn,
      blogs_image3_alt_en: blogs_image3_alt_en,
      blogs_image3_alt_bn: blogs_image3_alt_bn
    },

    beforeSend: function(){

      $(".spinner").css("display","block");
      $(".text_btn").css("display","none");
    },

    success: function(data){

      $(".spinner").css("display","none");
      $(".text_btn").css("display","block");

      $(".alert").css("display","block");
      $('.alert').addClass("alert-success");
      $('.alert').html('Data updated successfully');

      display_blogs_data();

      //console.log(data);
    }
  });
}


/*function add_division_wise_data(){

  var div_name = $("#division_name").val();
  var div_cases = $("#division_cases").val();
  var div_deaths = $("#division_deaths").val();

  
  $.ajax({

    url: 'http://localhost/covidtracking/covid/admin/add_division_wise_data.php',
    type: 'post',
    data: {
      div_name : div_name,
      div_cases : div_cases,
      div_deaths : div_deaths
    },
    
    beforeSend: function(){

      $(".spinner").css("display","block");
      $(".text_btn").css("display","none");
    },
    success: function(data){

      $("#division_name").val('');
      $("#division_cases").val('');
      $("#division_deaths").val('');

      $(".spinner").css("display","none");
      $(".text_btn").css("display","block");

      $(".alert").css("display","block");

      display_division_data();

    }
  });
}*/


function delete_blogs_data(blogs_id){



    $.ajax({

      url: 'delete_blogs_data.php',
      type: 'post',
      data: {

        blogs_id: blogs_id
      },

      success: function(data){
        $("#delete_doctor_data_modal"+blogs_id).modal('hide');
        $("#delete_doctor_data_modal"+blogs_id).attr('data-backdrop','false');
        //$("#delete_division_wise_data_modal"+div_id).css('display','none');
        display_blogs_data();

      }

    });
}


/*function update_division_wise_data(div_id1){

  var div_name1 = $("#division_name"+div_id1).val();
  var div_cases1 = $("#division_cases"+div_id1).val();
  var div_deaths1 = $("#division_deaths"+div_id1).val();

  
  $.ajax({

    url: 'http://localhost/covidtracking/covid/admin/update_division_wise_data.php',
    type: 'post',
    data: {
      div_id1 : div_id1,
      div_name1 : div_name1,
      div_cases1 : div_cases1,
      div_deaths1 : div_deaths1
    },
    
    beforeSend: function(){

      $(".spinner").css("display","block");
      $(".text_btn").css("display","none");
    },
    success: function(data){

      $(".spinner").css("display","none");
      $(".text_btn").css("display","block");

      $(".alert").css("display","block");

      display_division_data();

    }
  });
}*/
</script>



</body>



</html>







<?php }elseif($_SESSION["flag"] == "error_pass")

    {

      $msg = "Incorrect username or password";

        header("Location: index.php?msg=".$msg);



    }elseif ($_SESSION["flag"] == "error_username") {

     $msg = "Incorrect username or password";

        header("Location: index.php?msg=".$msg);



      }else {

        $msg = "The username and password are incorrect!";

        header("Location: index.php?msg=".$msg);

      } ?>



