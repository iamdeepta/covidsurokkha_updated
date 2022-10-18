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



  <title>FAQ</title>



  <?php include 'css_master.php';?>





</head>



<body>

<?php include 'navbar.php';?>


<div class="container col-md-8">

  <div class="card" style="margin-top: 2%">
    <div class="card-header row">
        <h6>FAQ Data</h6>
        <button class="btn btn-dark btn-sm" style="margin-left: 10px;" data-toggle="modal" data-target="#add_faq_modal">+</button>

        <!-- Modal -->
        <div class="modal fade" id="add_faq_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New FAQ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                
                <div class="alert alert-success" style="display: none"></div>
                <!-- <form id="fupForm" enctype="multipart/form-data"> -->

                  <div class="form-group">
                    <label for="faq_category_en">Category:</label>
                    <input type="text" class="form-control" placeholder="Enter Category" id="faq_category_en" name="faq_category_en" >
                  </div>
                  <div class="form-group">
                    <label for="faq_category_bn">Category (Bangla):</label>
                    <input type="text" class="form-control" placeholder="Enter Category (Bangla)" id="faq_category_bn" name="faq_category_bn" >
                  </div>

                  <div class="form-group">
                    <label for="faq_title_en">Title:</label>
                    <input type="text" class="form-control" placeholder="Enter Title" id="faq_title_en" name="faq_title_en" >
                  </div>
                  <div class="form-group">
                    <label for="faq_title_bn">Title (Bangla):</label>
                    <input type="text" class="form-control" placeholder="Enter Title (Bangla)" id="faq_title_bn" name="faq_title_bn" >
                  </div>

                  <div class="form-group">
                    <label for="faq_description_en">Description:</label>
                    <textarea class="form-control" placeholder="Enter Description" id="faq_description_en" name="faq_description_en" rows="7" style="white-space: pre-line;"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="faq_description_bn">Description (Bangla):</label>
                    <textarea class="form-control" placeholder="Enter Description (Bangla)" id="faq_description_bn" name="faq_description_bn" rows="7" style="white-space: pre-line;"></textarea>
                  </div>

 
                  <button type="button" class="btn btn-dark btn-sm" name="faq_submit" onclick="add_faq_data()"><span class="spinner-border spinner-border-sm spinner" style="display: none"></span><span class="text_btn" style="display: block">Add</span></button>
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
            <th class="th-sm">SL.</th>
            <th class="th-sm">Category</th>
            <th class="th-sm">Category(BN)</th>
            <th class="th-sm">Title</th>
            <th class="th-sm">Title(BN)</th>
            <th class="th-sm">Description</th>
            <th class="th-sm">Description(BN)</th>
            
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

  display_faq_data();
    
});

  


function display_faq_data(){

  var display_faq_data = 'display_faq_data';

  $.ajax({

    url: 'show_faq_data.php',
    type: 'post',
    data:{
      display_faq_data: display_faq_data
    },

    success: function(data){

      $("#tbody_div").html(data);
    }
  })
}


function add_faq_data(){

  var faq_category_en = $("#faq_category_en").val();
  var faq_category_bn = $("#faq_category_bn").val();
  var faq_title_en = $("#faq_title_en").val();
  var faq_title_bn = $("#faq_title_bn").val();
  var faq_description_en = $("#faq_description_en").val();
  var faq_description_bn = $("#faq_description_bn").val();

  /*var fd = new FormData();

  fd.append("div_name",division_name);
  fd.append("div_cases",division_cases);
  fd.append("div_deaths",division_deaths);*/


  $.ajax({

    url: 'add_faq_data.php',
    type: 'post',
    data: {
      faq_category_en : faq_category_en,
      faq_category_bn : faq_category_bn,
      faq_title_en : faq_title_en,
      faq_title_bn : faq_title_bn,
      faq_description_en : faq_description_en,
      faq_description_bn : faq_description_bn
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

      d_result = JSON.parse(data);

      $("#faq_category_en").val('');
      $("#faq_category_bn").val('');
      $("#faq_title_en").val('');
      $("#faq_title_bn").val('');
      $("#faq_description_en").val('');
      $("#faq_description_bn").val('');

      $(".spinner").css("display","none");
      $(".text_btn").css("display","block");

      $(".alert").css("display","block");
      $('.alert').html(d_result.result);

      display_faq_data();

      //console.log(d_result.result);

    }
  });
}


function delete_faq_data(faq_id){



    $.ajax({

      url: 'delete_faq_data.php',
      type: 'post',
      data: {

        faq_id: faq_id
      },

      success: function(data){
        $("#delete_faq_data_modal"+faq_id).modal('hide');
        $("#delete_faq_data_modal"+faq_id).attr('data-backdrop','false');
        //$("#delete_division_wise_data_modal"+div_id).css('display','none');
        display_faq_data();

      }

    });
}


function update_faq_data(faq_id1){

  var faq_category_en1 = $("#faq_category_en"+faq_id1).val();
  var faq_category_bn1 = $("#faq_category_bn"+faq_id1).val();
  var faq_title_en1 = $("#faq_title_en"+faq_id1).val();
  var faq_title_bn1 = $("#faq_title_bn"+faq_id1).val();
  var faq_description_en1 = $("#faq_description_en"+faq_id1).val();
  var faq_description_bn1 = $("#faq_description_bn"+faq_id1).val();

  /*var fd = new FormData();

  fd.append("div_name",division_name);
  fd.append("div_cases",division_cases);
  fd.append("div_deaths",division_deaths);*/


  $.ajax({

    url: 'update_faq_data.php',
    type: 'post',
    data: {
      faq_id1: faq_id1,
      faq_category_en1 : faq_category_en1,
      faq_category_bn1 : faq_category_bn1,
      faq_title_en1 : faq_title_en1,
      faq_title_bn1 : faq_title_bn1,
      faq_description_en1 : faq_description_en1,
      faq_description_bn1 : faq_description_bn1
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

      /*$("#division_name"+div_id1).val('');
      $("#division_cases"+div_id1).val('');
      $("#division_deaths"+div_id1).val('');*/

      $(".spinner").css("display","none");
      $(".text_btn").css("display","block");

      $(".alert").css("display","block");

      $('body').css("overflow-y","auto");

      display_faq_data();

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



