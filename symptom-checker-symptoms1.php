<?php 

if(isset($_POST['symptoms1_inside'])){

  $output = '';



  $output .= '<h3 style="color: white;font-size:1.5rem">আপনি কি নীচের কোনও লক্ষণের মুখোমুখি?</h3>
<p id="error_msg1" style="color: #f37878;display:none">কমপক্ষে একটি নির্বাচন করুন</p>
<div class="row">
<div class="col-lg-6">
  <div class="form-group" id="main_symptoms_div">
  <input class="main_symptoms save-cb-state" type="checkbox" id="dry_cough" name="dry_cough" value="শুষ্ক কাশি" >
  <label for="dry_cough" style="color: #fff"> শুষ্ক কাশি</label><br>
  <input class="main_symptoms save-cb-state" type="checkbox" id="fever" name="fever" value="জ্বর" >
  <label for="fever" style="color: #fff"> জ্বর</label><br>
  <input class="main_symptoms save-cb-state" type="checkbox" id="loss_of_taste_or_smell" name="loss_of_taste_or_smell" value="স্বাদ বা গন্ধের কমতি" >
  <label for="loss_of_taste_or_smell" style="color: #fff"> স্বাদ বা গন্ধের কমতি</label><br>
</div>


</div>
<div class="col-lg-6">
  <div class="form-group">
  <input class="main_symptoms save-cb-state" type="checkbox" id="difficulty_in_breathing" name="difficulty_in_breathing" value="শ্বাস নিতে অসুবিধা" >
  <label for="difficulty_in_breathing" style="color: #fff"> শ্বাস নিতে অসুবিধা</label><br>
  <input class="main_symptoms save-cb-state" type="checkbox" id="tiredness" name="tiredness" value="ক্লান্তি" >
  <label for="tiredness" style="color: #fff"> ক্লান্তি</label><br>
  <input class="main_symptoms save-cb-state" type="checkbox" id="none_of_the_above1" name="none_of_the_above1" value="কিছুই না" onclick="none_of_the_above1_checked()" >
  <label for="none_of_the_above1" style="color: #fff"> উপরের একটিও নয়</label><br>

  </div>

</div>

<div class="button">
<a class="submit_btn" id="next2" href="javascript:void(0)" onclick="symptoms1();">পরবর্তী</a>
</div>
</div>';


echo $output;

}


?>


<script type="text/javascript">
  function getStorage(key_prefix) {
    // this function will return us an object with a "set" and "get" method
    // using either localStorage if available, or defaulting to document.cookie
    if (window.localStorage) {
        // use localStorage:
        return {
            set: function(id, data) {
                localStorage.setItem(key_prefix+id, data);
            },
            get: function(id) {
                return localStorage.getItem(key_prefix+id);
            }
        };
    } else {
        // use document.cookie:
        return {
            set: function(id, data) {
                document.cookie = key_prefix+id+'='+encodeURIComponent(data);
            },
            get: function(id, data) {
                var cookies = document.cookie, parsed = {};
                cookies.replace(/([^=]+)=([^;]*);?\s*/g, function(whole, key, value) {
                    parsed[key] = unescape(value);
                });
                return parsed[key_prefix+id];
            }
        };
    }
}

jQuery(function($) {
    // a key must is used for the cookie/storage
    var storedData = getStorage('com_mysite_checkboxes_'); 
    
    $('div.form-group input:checkbox').bind('change',function(){
        //$('#'+this.id).toggle($(this).is(':checked'));
        // save the data on change
        storedData.set(this.id, $(this).is(':checked')?'checked':'not');
    }).each(function() {
        // on load, set the value to what we read from storage:
        var val = storedData.get(this.id);
        if (val == 'checked') $(this).attr('checked', 'checked');
        if (val == 'not') $(this).removeAttr('checked');
        if (val) $(this).trigger('change');
    });
    
});
</script>



<!-- <script type="text/javascript">
// Avoid scoping issues by encapsulating code inside anonymous function
(function() {
  // variable to store our current state
  var cbstate;
  
  // bind to the onload event
  window.addEventListener('load', function() {
    // Get the current state from localstorage
    // State is stored as a JSON string
    cbstate = JSON.parse(localStorage['CBState'] || '{}');
  
    // Loop through state array and restore checked 
    // state for matching elements
    for(var i in cbstate) {
      var el = document.querySelector('input[name="' + i + '"]');
      if (el) el.checked = true;
    }
  
    // Get all checkboxes that you want to monitor state for
    var cb = document.getElementsByClassName('save-cb-state');
  
    // Loop through results and ...
    for(var i = 0; i < cb.length; i++) {
  
      //bind click event handler
      cb[i].addEventListener('click', function(evt) {
        // If checkboxe is checked then save to state
        if (this.checked) {
          cbstate[this.name] = true;
        }
    
    // Else remove from state
        else if (cbstate[this.name]) {
          delete cbstate[this.name];
        }
    
    // Persist state
        localStorage.CBState = JSON.stringify(cbstate);
      });
    }
  });
})();
</script> -->