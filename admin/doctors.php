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



  <title>Doctors</title>



  <?php include 'css_master.php';?>





</head>



<body>

<?php include 'navbar.php';?>


<div class="container col-md-8">

  <div class="card" style="margin-top: 2%">
    <div class="card-header row">
        <h6>Doctors Data</h6>
        <button class="btn btn-dark btn-sm" style="margin-left: 10px;" data-toggle="modal" data-target="#add_doctor_modal">+</button>

        <!-- Modal -->
        <div class="modal fade" id="add_doctor_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Doctor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                
                <div class="alert alert-success" style="display: none"></div>
                <form id="fupForm" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="doctor_name">Doctor Name:</label>
                    <input type="text" class="form-control" placeholder="Enter Doctor Name" id="doctor_name" name="doctor_name" >
                  </div>
                  <div class="form-group">
                    <label for="doctor_post">Post:</label>
                    <input type="text" class="form-control" placeholder="Enter Post" id="doctor_post" name="doctor_post" >
                  </div>

                  <div class="form-group">
                    <label for="doctor_consultation_time">Consultation Time:</label>
                    <input type="text" class="form-control" placeholder="Enter Consultation Time" id="doctor_consultation_time" name="doctor_consultation_time" >
                  </div>

                  <div class="form-group">
                    <label for="doctor_hospital">Hospital Name:</label>
                    <input type="text" class="form-control" placeholder="Enter Hospital" id="doctor_hospital" name="doctor_hospital" >
                  </div>

                  <div class="form-group">
                    <label for="file">Picture</label>
                    <input type="file" class="form-control" id="file" name="files[]" multiple />
                  </div>
                 
                  <button type="submit" class="btn btn-dark btn-sm" name="doctor_submit"><span class="spinner-border spinner-border-sm spinner" style="display: none"></span><span class="text_btn" style="display: block">Add</span></button>
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

      <table id="dtBasicExample1" class="table-striped table-bordered table-responsive" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th class="th-sm">SL.</th>
            <th class="th-sm">Doctor's Name</th>
            <th class="th-sm">Post</th>
            <th class="th-sm">Consultation Time</th>
            <th class="th-sm">Hospital Name</th>
            <th class="th-sm">Picture</th>
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

  display_doctors_data();
    // Submit form data via Ajax
    $("#fupForm").on('submit', function(e){
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'add_doctors_data.php',
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

                    display_doctors_data();
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
    var match = ['image/jpeg', 'image/png', 'image/jpg'];
    $("#file").change(function() {
        for(i=0;i<this.files.length;i++){
            var file = this.files[i];
            var fileType = file.type;
      
            if(!((fileType == match[0]) || (fileType == match[1]) || (fileType == match[2]) || (fileType == match[3]) || (fileType == match[4]) || (fileType == match[5]))){
                //alert('Sorry, only PDF, DOC, JPG, JPEG, & PNG files are allowed to upload.');
                $('.alert').html('Sorry, only JPG, JPEG, & PNG files are allowed to upload.');
                $('.alert').css("background-color","pink");
                $('.alert').css("color","red");
                $("#file").val('');
                return false;
            }
        }
    });
});

  


function display_doctors_data(){

  var display_doctors_data = 'display_doctors_data';

  $.ajax({

    url: 'show_doctors_data.php',
    type: 'post',
    data:{
      display_doctors_data: display_doctors_data
    },

    success: function(data){

      $("#tbody_div").html(data);
    }
  })
}


function updateDoctorsData(docs_id){

  var doctor_name1 = $("#doctor_name"+docs_id).val();
  var doctor_post1 = $("#doctor_post"+docs_id).val();
  var doctor_consultation_time1 = $("#doctor_consultation_time"+docs_id).val();
  var doctor_hospital1 = $("#doctor_hospital"+docs_id).val();

  //console.log(doctor_name1, doctor_post1, doctor_hospital1, doctor_consultation_time1);

  $.ajax({

    url: 'update_doctors_data.php',
    type: 'post',
    data: {

      docs_id: docs_id,
      doctor_name1: doctor_name1,
      doctor_post1: doctor_post1,
      doctor_consultation_time1: doctor_consultation_time1,
      doctor_hospital1: doctor_hospital1
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

      display_doctors_data();

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


function delete_doctor_data(doc_id){



    $.ajax({

      url: 'delete_doctor_data.php',
      type: 'post',
      data: {

        doc_id: doc_id
      },

      success: function(data){
        $("#delete_doctor_data_modal"+doc_id).modal('hide');
        $("#delete_doctor_data_modal"+doc_id).attr('data-backdrop','false');
        //$("#delete_division_wise_data_modal"+div_id).css('display','none');
        display_doctors_data();

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



