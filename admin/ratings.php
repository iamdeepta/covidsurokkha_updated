<?php

session_start();

include("db.inc.php");



    if ($_SESSION["flag"] == "ok")

    {



      $msg = @$_GET['msg_panel'];


      $ratings_query = mysqli_query($dbc, "SELECT * from tbl_rating where u_status=0") or die(mysqli_error($dbc));
      

  //$home=mysqli_fetch_array($admin_home);

?>



<!DOCTYPE html>

<html lang="en">


<head>



  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta name="description" content="">

  <meta name="author" content="">



  <title>Admin-Ratings</title>



  <?php include 'css_master.php';?>





</head>



<body>

<?php include 'navbar.php';?>


<div class="container col-md-8">

  <div class="card" style="margin-top: 2%">
    <div class="card-header row">
        <h6>User Ratings and Reviews</h6>
        <!-- <button class="btn btn-dark btn-sm" style="margin-left: 10px;" data-toggle="modal" data-target="#add_division_wise_data_modal">+</button> -->

        <!-- Modal -->
        <!-- <div class="modal fade" id="add_division_wise_data_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Division Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                
                <div class="alert alert-success" style="display: none">Data added successfully</div>
                
                  <div class="form-group">
                    <label for="division_name">Division Name:</label>
                    <input type="text" class="form-control" placeholder="Enter Division Name" id="division_name" name="division_name" required>
                  </div>
                  <div class="form-group">
                    <label for="division_cases">Cases:</label>
                    <input type="text" class="form-control" placeholder="Enter Cases" id="division_cases" name="division_cases" required>
                  </div>

                  <div class="form-group">
                    <label for="division_deaths">Deaths:</label>
                    <input type="text" class="form-control" placeholder="Enter Deaths" id="division_deaths" name="division_deaths" required>
                  </div>
                 
                  <button type="button" class="btn btn-dark btn-sm" name="submit_division_wise_data" onclick="add_division_wise_data()"><span class="spinner-border spinner-border-sm spinner" style="display: none"></span><span class="text_btn" style="display: block">Add</span></button>
                
              </div>
             
            </div>
          </div>
        </div> -->


        <!-- <div>
          <label>Date(En):</label>
          <input type="text" name="daily_death_date_en" id="daily_death_date_en">
        </div>

        <div>
          <label>Date(Bn):</label>
          <input type="text" name="daily_death_date_bn" id="daily_death_date_bn">
        </div>

        <div>
          <input type="button" name="daily_death_date_btn" id="daily_death_date_btn" value="Submit" onclick="submit_daily_death_date()">
        </div> -->


      </div>
    <div class="card-body">



      <table id="dtBasicExample1" class="table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th class="th-sm">SL.</th>
            <th class="th-sm">Name</th>
            <th class="th-sm">Star</th>
            <th class="th-sm">Review</th>
            <th class="th-sm">Date</th>
          </tr>
        </thead>

        <tbody id="tbody_div">
          <?php 
          $sl = 0;
          while($dddq=mysqli_fetch_array($ratings_query)){
            $sl++;
            ?>
            <tr>
              <td><?=$sl?></td>
              <td><?=$dddq['u_name']?></td>
              <td><?=$dddq['u_stars']?></td>
              <td><?=$dddq['u_feedback']?></td>
              <td><?=$dddq['u_date']?></td>
            </tr>

          <?php }?>
         
        </tbody>
      </table>
    </div>
    
  </div>
  
</div>


  <?php include 'js_master.php';?>
  

<script type="text/javascript">

  $(document).ready(function(){

    //show_division_data();
    //display_division_data();
  });

  /*function show_division_data(){
  fetch("http://localhost/covidtracking/covid/admin/show_division_wise_data.php").then(res=>{
    res.json().then(data=>{
     

      var division_data = data.result;
      temp = '';

      var sl = 0;

      division_data.forEach((div_data)=>{

        sl++;

        temp +="<tr>";
        temp += "<td>"+sl+"</td>";
        temp += "<td>"+div_data.division_name+"</td>";
        temp += "<td>"+div_data.division_cases+"</td>";
        temp += "<td>"+div_data.division_deaths+"</td>";
        temp += '<td><div class="btn-group" role="group"><button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions</button><div class="dropdown-menu" aria-labelledby="btnGroupDrop1"><a class="dropdown-item" href="#">Update</a><a class="dropdown-item" href="#">Delete</a></div></div></td>';
        temp +="</tr>";
      });

      $("#tbody_div").html(temp);
     
  
    })
  });

}*/


// function display_division_data(){

//   var display_division_data = 'display_division_data';

//   $.ajax({

//     url: 'show_division_wise_data.php',
//     type: 'post',
//     data:{
//       display_division_data: display_division_data
//     },

//     success: function(data){

//       $("#tbody_div").html(data);
//     }
//   })
// }


// function add_division_wise_data(){

//   var div_name = $("#division_name").val();
//   var div_cases = $("#division_cases").val();
//   var div_deaths = $("#division_deaths").val();


//   $.ajax({

//     url: 'add_division_wise_data.php',
//     type: 'post',
//     data: {
//       div_name : div_name,
//       div_cases : div_cases,
//       div_deaths : div_deaths
//     },
    
//     beforeSend: function(){

//       $(".spinner").css("display","block");
//       $(".text_btn").css("display","none");
//     },
//     success: function(data){

//       $("#division_name").val('');
//       $("#division_cases").val('');
//       $("#division_deaths").val('');

//       $(".spinner").css("display","none");
//       $(".text_btn").css("display","block");

//       $(".alert").css("display","block");

//       display_division_data();

//     }
//   });
// }


// function delete_division_wise_data(div_id){



//     $.ajax({

//       url: 'delete_division_wise_data.php',
//       type: 'post',
//       data: {

//         div_id: div_id
//       },

//       success: function(data){
//         $("#delete_division_wise_data_modal"+div_id).modal('hide');
//         $("#delete_division_wise_data_modal"+div_id).attr('data-backdrop','false');
//         //$("#delete_division_wise_data_modal"+div_id).css('display','none');
//         display_division_data();

//       }

//     });
// }


// function update_division_wise_data(div_id1){

//   var div_name1 = $("#division_name"+div_id1).val();
//   var div_cases1 = $("#division_cases"+div_id1).val();
//   var div_deaths1 = $("#division_deaths"+div_id1).val();



//   $.ajax({

//     url: 'update_division_wise_data.php',
//     type: 'post',
//     data: {
//       div_id1 : div_id1,
//       div_name1 : div_name1,
//       div_cases1 : div_cases1,
//       div_deaths1 : div_deaths1
//     },
  
//     beforeSend: function(){

//       $(".spinner").css("display","block");
//       $(".text_btn").css("display","none");
//     },
//     success: function(data){


//       $(".spinner").css("display","none");
//       $(".text_btn").css("display","block");

//       $(".alert").css("display","block");

//       display_division_data();

//     }
//   });
// }



// function submit_daily_death_date(){

//   var daily_death_date_en = $('#daily_death_date_en').val();
//   var daily_death_date_bn = $('#daily_death_date_bn').val();


//   $.ajax({
//     url: 'update_daily_death_date.php',
//     type: 'post',
//     data: {

//         daily_death_date_en: daily_death_date_en,
//         daily_death_date_bn: daily_death_date_bn
//     },

//     success: function(data){

//       $('#daily_death_date_en').val('');
//       $('#daily_death_date_bn').val('');

//       window.location.href="home.php";
//     }
//   });
// }
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



