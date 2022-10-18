<?php 

if (isset($_POST['gt'])) {

  $locs = $_POST['lastSegment1'];
  
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


$output .= "function googleTranslateElementInit() {";



  if($locs=='en'){

  $output .= "setCookie('googtrans', '/bn/en',1);";


 // $output .= 'eraseCookie("googtrans", "");';
  $output .= "var x = new google.translate.TranslateElement({pageLanguage: 'bn',includedLanguages: 'en',layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: true}, 'google_translate_element');";

}else{
    
    $output .= "setCookie('googtrans', '/en/bn',1);";

    $output .= "var x = new google.translate.TranslateElement({pageLanguage: 'en',includedLanguages: 'bn',layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: true}, 'google_translate_element');";

}




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