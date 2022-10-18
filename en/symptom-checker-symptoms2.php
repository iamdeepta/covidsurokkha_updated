<?php 

if(isset($_POST['symptoms2_inside'])){

  $output = '';


$output .= '<h3 style="color: white;font-size:1.5rem">What about any of these symptoms?</h3>
<p id="error_msg2" style="color: #f37878;display:none">Please select atleast one</p>
<div class="row">
<div class="col-lg-6">
  <div class="form-group" id="other_symptoms_div">
  <input class="other_symptoms save-cb-state1" type="checkbox" id="body_aches" name="body_aches" value="Body aches">
  <label for="body_aches" style="color: #fff"> Body aches</label><br>
  <input class="other_symptoms save-cb-state1" type="checkbox" id="nasal_congestion" name="nasal_congestion" value="Nasal congestion">
  <label for="nasal_congestion" style="color: #fff"> Nasal congestion</label><br>
  <input class="other_symptoms save-cb-state1" type="checkbox" id="runny_nose" name="runny_nose" value="Runny nose">
  <label for="runny_nose" style="color: #fff"> Runny nose</label><br>
</div>


</div>
<div class="col-lg-6">
  <div class="form-group">
  <input class="other_symptoms save-cb-state1" type="checkbox" id="sore_throat" name="sore_throat" value="Sore throat">
  <label for="sore_throat" style="color: #fff"> Sore throat</label><br>
  <input class="other_symptoms save-cb-state1" type="checkbox" id="headache" name="headache" value="Headache">
  <label for="headache" style="color: #fff"> Headache</label><br>
  <input class="other_symptoms save-cb-state1" type="checkbox" id="none_of_the_above2" name="none_of_the_above2" value="None" onclick="none_of_the_above2_checked()">
  <label for="none_of_the_above2" style="color: #fff"> None of the above</label><br>

  </div>

</div>

<div class="button">
<a class="submit_btn" id="next3" href="javascript:void(0)" onclick="symptoms2();">Next</a>
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
  var cbstate1;
  
  // bind to the onload event
  window.addEventListener('load', function() {
    // Get the current state from localstorage
    // State is stored as a JSON string
    cbstate1 = JSON.parse(localStorage['CBState'] || '{}');
  
    // Loop through state array and restore checked 
    // state for matching elements
    for(var i in cbstate1) {
      var el = document.querySelector('input[name="' + i + '"]');
      if (el) el.checked = true;
    }
  
    // Get all checkboxes that you want to monitor state for
    var cb1 = document.getElementsByClassName('save-cb-state1');
  
    // Loop through results and ...
    for(var i = 0; i < cb1.length; i++) {
  
      //bind click event handler
      cb1[i].addEventListener('click', function(evt) {
        // If checkboxe is checked then save to state
        if (this.checked) {
          cbstate1[this.name] = true;
        }
    
    // Else remove from state
        else if (cbstate1[this.name]) {
          delete cbstate1[this.name];
        }
    
    // Persist state
        localStorage.CBState = JSON.stringify(cbstate1);
      });
    }
  });
})();
</script> -->
