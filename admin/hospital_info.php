<?php

session_start();

include("db.inc.php");



    if ($_SESSION["flag"] == "ok")

    {



      $msg = @$_GET['msg_panel'];

      date_default_timezone_set("Asia/Dhaka");
  $dates = date("Y-m-d h:i a");

      if(isset($_POST["upload"]))
{
 if($_FILES['product_file']['name'])
 {
  $filename = explode(".", $_FILES['product_file']['name']);
  if(end($filename) == "csv")
  {
   $handle = fopen($_FILES['product_file']['tmp_name'], "r");
   while($data = fgetcsv($handle))
   {
    $hospital_names = mysqli_real_escape_string($dbc, $data[1]);
    if($data[26]<0){
      $general = 0;
    }else{
      $general = mysqli_real_escape_string($dbc, $data[26]);
    }
    if($data[27]<0){
      $icu = 0;
    }else{
      $icu = mysqli_real_escape_string($dbc, $data[27]);
    }
     


    //echo $hospital_names; 
    //echo $general; 
      
    /*$product_name = mysqli_real_escape_string($dbc, $data[2]);
    $product_price = mysqli_real_escape_string($dbc, $data[3]);*/
    $query = "
     UPDATE tbl_hospital_info 
     SET general_bed = '$general', 
     icu_bed = '$icu',
     updated_date = '$dates' 
     WHERE hospital_name = '$hospital_names'

    ";
    mysqli_query($dbc, $query);
   }
   fclose($handle);
   //header("location: hospital_info.php");
  }
  else
  {
   $message = '<label class="text-danger">Please Select CSV File only</label>';
  }
 }
 else
 {
  $message = '<label class="text-danger">Please Select File</label>';
 }
}

/*if(isset($_GET["updation"]))
{
 $message = '<label class="text-success">Product Updation Done</label>';
}*/

  //$home=mysqli_fetch_array($admin_home);

?>



<!DOCTYPE html>

<html lang="en">


<head>



  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta name="description" content="">

  <meta name="author" content="">



  <title>Hospital Info</title>



  <?php include 'css_master.php';?>





</head>



<body id="hospital_info_body">

<?php include 'navbar.php';?>


<div class="container col-md-8">

  <div class="card" style="margin-top: 2%">
    <div class="card-header row">
        <h6>Hospital Information Data</h6>
        
        <button class="btn btn-dark btn-sm" style="margin-left: 10px;" data-toggle="modal" data-target="#add_hospital_data_modal">+</button>


        <!-- Modal -->
        <div class="modal fade" id="add_hospital_data_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Hospital Info</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                
                <div class="alert alert-success" style="display: none">Data added successfully</div>
                <!-- <form> -->
                  <div class="form-group">
                    <label for="hospital_name">Hospital Name:</label>
                    <input type="text" class="form-control" placeholder="Enter Hospital Name" id="hospital_name" name="hospital_name" required>
                  </div>
                  <div class="form-group">
                    <label for="general_beds">General Beds:</label>
                    <input type="text" class="form-control" placeholder="Enter General beds no." id="general_beds" name="general_beds" required>
                  </div>

                  <div class="form-group">
                    <label for="icu_beds">ICU Beds:</label>
                    <input type="text" class="form-control" placeholder="Enter ICU Beds no." id="icu_beds" name="icu_beds" required>
                  </div>

                  <div class="form-group">
                    <label for="location">Location:</label>
                    <input type="text" class="form-control" placeholder="Enter Location" id="location" name="location" required>
                  </div>

                  <div class="form-group">
                    <label for="full_address">Full Address:</label>
                    <input type="text" class="form-control" placeholder="Enter Full Address" id="full_address" name="full_address" required>
                  </div>

                  <div class="form-group">
                    <label for="phone_number">Phone Number:</label>
                    <input type="text" class="form-control" placeholder="Enter Phone number" id="phone_number" name="phone_number" required>
                  </div>

                  <div class="form-group">
                    <label for="hospital_name_bn">Hospital Name (BN):</label>
                    <input type="text" class="form-control" placeholder="Enter Hospital Name (BN)" id="hospital_name_bn" name="hospital_name_bn" required>
                  </div>

                  <div class="form-group">
                    <label for="location_bn">Location (BN):</label>
                    <input type="text" class="form-control" placeholder="Enter Location (BN)" id="location_bn" name="location_bn" required>
                  </div>

                  <div class="form-group">
                    <label for="full_address_bn">Full Address (BN):</label>
                    <input type="text" class="form-control" placeholder="Enter Full Address (BN)" id="full_address_bn" name="full_address_bn" required>
                  </div>

                 
                  <button type="button" class="btn btn-dark btn-sm" name="submit_hospital_data" onclick="add_hospital_data()"><span class="spinner-border spinner-border-sm spinner" style="display: none"></span><span class="text_btn" style="display: block">Add</span></button>
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

      <form method="post" enctype='multipart/form-data'>
          <p><label>Please Select File(Only CSV Formate)</label>
          <input type="file" name="product_file" /></p>
          <input type="submit" name="upload" class="btn btn-info" value="Upload" />
      </form>

    <div class="card-body">

      <table id="dtBasicExample1" class="table-striped table-bordered table-responsive" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th class="th-sm"></th>
            <th class="th-sm"></th>
            <th class="th-sm" colspan="2">
            Beds Available

            </th>
            <th class="th-sm"></th>
            <th class="th-sm"></th>
            <th class="th-sm"></th>
            <th class="th-sm"></th>
            <th class="th-sm"></th>
            <th class="th-sm"></th>
            <th class="th-sm"></th>
          </tr>

          <tr>
            <th>SL.</th>
            <th>Hospital Name</th>
            <th>General</th>
            <th>ICU</th>
            <th>Location</th>
            <th>Full Address</th>
            <th>Phone Number</th>
            <th>Hospital Name(BN)</th>
            <th>Location(BN)</th>
            <th>Full Address(BN)</th>
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
    display_hospital_data();
  });



function display_hospital_data(){

  var display_hospital_data = 'display_hospital_data';

  $.ajax({

    url: 'show_hospital_data.php',
    type: 'post',
    data:{
      display_hospital_data: display_hospital_data
    },

    success: function(data){

      $("#tbody_div").html(data);
    }
  })
}


function add_hospital_data(){

  var hospital_name = $("#hospital_name").val();
  var general_beds = $("#general_beds").val();
  var icu_beds = $("#icu_beds").val();
  var location = $("#location").val();
  var full_address = $("#full_address").val();
  var phone_number = $("#phone_number").val();
  var hospital_name_bn = $("#hospital_name_bn").val();
  var location_bn = $("#location_bn").val();
  var full_address_bn = $("#full_address_bn").val();

  /*var fd = new FormData();

  fd.append("div_name",division_name);
  fd.append("div_cases",division_cases);
  fd.append("div_deaths",division_deaths);*/


  $.ajax({

    url: 'add_hospital_data.php',
    type: 'post',
    data: {
      hospital_name : hospital_name,
      general_beds : general_beds,
      icu_beds : icu_beds,
      location : location,
      full_address : full_address,
      phone_number : phone_number,
      hospital_name_bn : hospital_name_bn,
      location_bn : location_bn,
      full_address_bn : full_address_bn
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

      if (hospital_name!='') {

      $("#hospital_name").val('');
      $("#general_beds").val('');
      $("#icu_beds").val('');
      $("#location").val('');
      $("#full_address").val('');
      $("#phone_number").val('');
      $("#hospital_name_bn").val('');
      $("#location_bn").val('');
      $("#full_address_bn").val('');

      $(".spinner").css("display","none");
      $(".text_btn").css("display","block");

      $(".alert").css("display","block");

      display_hospital_data();

    }else{

      $(".spinner").css("display","none");
      $(".text_btn").css("display","block");
    }

    }
  });
}


function delete_hospital_data(hos_id){



    $.ajax({

      url: 'delete_hospital_data.php',
      type: 'post',
      data: {

        hos_id: hos_id
      },

      success: function(data){
        $("#delete_hospital_data_modal"+hos_id).modal('hide');
        $("#delete_hospital_data_modal"+hos_id).attr('data-backdrop','false');
        //$("#delete_division_wise_data_modal"+div_id).css('display','none');
        display_hospital_data();

        $("#hospital_info_body").css("overflow-y","auto");

      }

    });
}


function update_hospital_data(hos_id1){

  var hospital_name1 = $("#hospital_name1"+hos_id1).val();
  var general_beds1 = $("#general_bed1"+hos_id1).val();
  var icu_beds1 = $("#icu_bed1"+hos_id1).val();
  var location1 = $("#location1"+hos_id1).val();
  var full_address1 = $("#full_address1"+hos_id1).val();
  var phone_number1 = $("#phone_number1"+hos_id1).val();
  var hospital_name_bn1 = $("#hospital_name_bn1"+hos_id1).val();
  var location_bn1 = $("#location_bn1"+hos_id1).val();
  var full_address_bn1 = $("#full_address_bn1"+hos_id1).val();

  /*var fd = new FormData();

  fd.append("div_name",division_name);
  fd.append("div_cases",division_cases);
  fd.append("div_deaths",division_deaths);*/


  $.ajax({

    url: 'update_hospital_data.php',
    type: 'post',
    data: {
      hos_id1 : hos_id1,
      hospital_name1 : hospital_name1,
      general_beds1 : general_beds1,
      icu_beds1 : icu_beds1,
      location1 : location1,
      full_address1 : full_address1,
      phone_number1 : phone_number1,
      hospital_name_bn1 : hospital_name_bn1,
      location_bn1 : location_bn1,
      full_address_bn1 : full_address_bn1
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

            /*$("#hospital_name"+hos_id1).val('');
            $("#general_beds"+hos_id1).val('');
            $("#icu_beds"+hos_id1).val('');
            $("#location"+hos_id1).val('');
            $("#full_address"+hos_id1).val('');
            $("#phone_number"+hos_id1).val('');*/

      $(".spinner").css("display","none");
      $(".text_btn").css("display","block");

      $(".alert").css("display","block");


      display_hospital_data();


      $("#hospital_info_body").css("overflow-y","auto");

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



