<?php 

if (isset($_POST['gt'])) {
  
  $output = '';

  $output .= '<script type="text/javascript">';
  //cookies for language
$output .= 'function setCookie(key, value, expiry) {
  var expires = new Date();
  expires.setTime(expires.getTime() + (expiry * 24 * 60 * 60 * 1000));';
  $output .= "document.cookie = key + '=' + value + ';expires=' + expires.toUTCString();
  document.cookie = key + '=; path=/; domain=.covidsurokkha.com; expires=' + new Date(0).toUTCString();
}

function eraseCookie(name, domain) {
    setCookie(name, '', -1, domain);
}

</script>";

$output .= '<script type="text/javascript">';

  /*$("#bengali_btn").css("display","block");
  $("#english_btn").css("display","none");*/


/*function translateEn(){
setCookie('googtrans', '/en/en',1);
}*/


$output .= "function googleTranslateElementInit() {


  var url = window.location.href;
 var parts = url.split('=');
var lastSegment = parts.pop() || parts.pop();


  if(lastSegment=='en'){
  setCookie('googtrans', '/en/en',1);
  

}else{
    
    setCookie('googtrans', '/en/bn',1);
}

  var x = new google.translate.TranslateElement({pageLanguage: 'en',layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: true}, 'google_translate_element');";


  // This will find the pop up and remove it from the page
    $output .= "var removePopup = document.getElementById('goog-gt-tt');
    removePopup.parentNode.removeChild(removePopup);

    

}




</script>";






$output .= '<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>';


echo $output;

}

?>

<!-- <script src="http://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> -->