<?php 

if(isset($_POST['basic_details_inside'])){

  $output = '';

 

	$output .= '<h3 style="color: white">বেসিক বিবরণ</h3>
<p id="error_msg" style="color: #f37878;display:none">আপনার নাম লিখুন</p>
<div class="row">
<div class="col-lg-6">
  <div class="form-group">
  <input type="text" class="form-control" id="full_name" name="full_name" placeholder="পুরো নাম" onkeyup="saveValue(this)" autocomplete="off">
</div>

</div>
<div class="col-lg-6">
  <div class="form-group">
  <input type="text" class="form-control" id="mobile_number" name="mobile_number" placeholder="মোবাইল নম্বর (অপশনাল)" onkeyup="saveValue(this)" autocomplete="off">
  </div>

  </div>
<div class="button">
<a class="submit_btn" href="javascript:void(0)" id="next1" onclick="submit_basic_details();">পরবর্তী</a>
</div>
</div>';


echo $output;

}

?>



<!-- save input value in localStorage like cache. restore them even if refresh occurs. -->
<script type="text/javascript">
        document.getElementById("full_name").value = getSavedValue("full_name");    // set the value to this input
        document.getElementById("mobile_number").value = getSavedValue("mobile_number");    // set the value to this input
       
        //document.getElementById("txt_2").value = getSavedValue("txt_2");   // set the value to this input
        /* Here you can add more inputs to set value. if it's saved */

        //Save the value function - save it to localStorage as (ID, VALUE)
        function saveValue(e){
            var id = e.id;  // get the sender's id to save it . 
            var val = e.value; // get the value. 
            localStorage.setItem(id, val);// Every time user writing something, the localStorage's value will override . 
        }

        //get the saved value function - return the value of "v" from localStorage. 
        function getSavedValue  (v){
            if (!localStorage.getItem(v)) {
                return "";// You can change this to your defualt value. 
            }
            return localStorage.getItem(v);
        }
</script>