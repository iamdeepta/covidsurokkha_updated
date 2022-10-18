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



  <title>Ambulance Info</title>



  <?php include 'css_master.php';?>





</head>



<body id="ambulance_info_body">

<?php include 'navbar.php';?>


<div class="container col-md-8">

  <div class="card" style="margin-top: 2%">
    <div class="card-header row">
        <h6>Ambulance Information Data</h6>
        <button class="btn btn-dark btn-sm" style="margin-left: 10px;" data-toggle="modal" data-target="#add_ambulance_data_modal">+</button>

        <!-- Modal -->
        <div class="modal fade" id="add_ambulance_data_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Ambulance Info</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                
                <div class="alert alert-success" style="display: none">Data added successfully</div>
                <!-- <form> -->
                  <div class="form-group">
                    <label for="company_name">Company Name:</label>
                    <input type="text" class="form-control" placeholder="Enter Company Name" id="company_name" name="company_name" required>
                  </div>
                  <div class="form-group">
                    <label for="service_area">Service Area:</label>
                    <input type="text" class="form-control" placeholder="Enter service area" id="service_area" name="service_area" required>
                  </div>

                  <div class="form-group">
                    <label for="contact_number">Contact Number:</label>
                    <input type="text" class="form-control" placeholder="Enter contact number" id="contact_number" name="contact_number" required>
                  </div>

                  <div class="form-group">
                    <label for="company_name_bn">Company Name(BN):</label>
                    <input type="text" class="form-control" placeholder="Enter Company Name(BN)" id="company_name_bn" name="company_name_bn" required>
                  </div>
                  <div class="form-group">
                    <label for="service_area_bn">Service Area(BN):</label>
                    <input type="text" class="form-control" placeholder="Enter service area(bn)" id="service_area_bn" name="service_area_bn" required>
                  </div>

                 
                  <button type="button" class="btn btn-dark btn-sm" name="submit_ambulance_data" onclick="add_ambulance_data()"><span class="spinner-border spinner-border-sm spinner" style="display: none"></span><span class="text_btn" style="display: block">Add</span></button>
                <!-- </form> -->
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
            <th>SL.</th>
            <th>Company Name</th>
            <th>Service Area</th>
            <th>Contact Number</th>
            <th>Company Name(BN)</th>
            <th>Service Area(BN)</th>
            
            <th>Action</th>
          </tr>
        </thead>

        <tbody id="tbody_div">
          <!-- hospital data -->
         
        </tbody>
      </table>
    </div>
    
  </div>
  
</div>


  <?php include 'js_master.php';?>
  

<script type="text/javascript">

  $(document).ready(function(){

    //show_division_data();
    display_ambulance_data();
  });



function display_ambulance_data(){

  var display_ambulance_data = 'display_ambulance_data';

  $.ajax({

    url: 'show_ambulance_data.php',
    type: 'post',
    data:{
      display_ambulance_data: display_ambulance_data
    },

    success: function(data){

      $("#tbody_div").html(data);
    }
  })
}


function add_ambulance_data(){

  var company_name = $("#company_name").val();
  var service_area = $("#service_area").val();
  var contact_number = $("#contact_number").val();
  var company_name_bn = $("#company_name_bn").val();
  var service_area_bn = $("#service_area_bn").val();
  

  $.ajax({

    url: 'add_ambulance_data.php',
    type: 'post',
    data: {
      company_name : company_name,
      service_area : service_area,
      contact_number : contact_number, 
      company_name_bn : company_name_bn, 
      service_area_bn : service_area_bn 
    },
    /*dataType: 'json',
            contentType: false,
            cache: false,
            processData:false,*/
    beforeSend: function(){

      $(".spinner").css("display","block");
      $(".text_btn").css("display","none");
    },
    success: function(data){

      if (company_name!='') {

      $("#company_name").val('');
      $("#service_area").val('');
      $("#contact_number").val('');
      $("#company_name_bn").val('');
      $("#service_area_bn").val('');
      

      $(".spinner").css("display","none");
      $(".text_btn").css("display","block");

      $(".alert").css("display","block");

      display_ambulance_data();

    }else{

      $(".spinner").css("display","none");
      $(".text_btn").css("display","block");
    }

    }
  });
}


function delete_ambulance_data(amb_id){



    $.ajax({

      url: 'delete_ambulance_data.php',
      type: 'post',
      data: {

        amb_id: amb_id
      },

      success: function(data){
        $("#delete_ambulance_data_modal"+amb_id).modal('hide');
        $("#delete_ambulance_data_modal"+amb_id).attr('data-backdrop','false');
        //$("#delete_division_wise_data_modal"+div_id).css('display','none');
        display_ambulance_data();

        $("#ambulance_info_body").css("overflow-y","auto");

      }

    });
}


function update_ambulance_data(amb_id1){

  var company_name1 = $("#company_name"+amb_id1).val();
  var service_area1 = $("#service_area"+amb_id1).val();
  var contact_number1 = $("#contact_number"+amb_id1).val();
  var company_name_bn1 = $("#company_name_bn"+amb_id1).val();
  var service_area_bn1 = $("#service_area_bn"+amb_id1).val();
  
  /*var fd = new FormData();

  fd.append("div_name",division_name);
  fd.append("div_cases",division_cases);
  fd.append("div_deaths",division_deaths);*/


  $.ajax({

    url: 'update_ambulance_data.php',
    type: 'post',
    data: {
      amb_id1 : amb_id1,
      company_name1 : company_name1,
      service_area1 : service_area1,
      contact_number1 : contact_number1,
      company_name_bn1 : company_name_bn1,
      service_area_bn1 : service_area_bn1
    },
    
    beforeSend: function(){

      $(".spinner").css("display","block");
      $(".text_btn").css("display","none");
    },
    success: function(data){

      
      $(".spinner").css("display","none");
      $(".text_btn").css("display","block");

      $(".alert").css("display","block");


      display_ambulance_data();


      $("#ambulance_info_body").css("overflow-y","auto");

      //location.reload();

    }
  });
}
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



