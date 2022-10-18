  //cookies for language
function setCookie(key, value, expiry) {
  var expires = new Date();
  expires.setTime(expires.getTime() + (expiry * 24 * 60 * 60 * 1000));
  document.cookie = key + '=' + value + ';expires=' + expires.toUTCString();
  document.cookie = key + '=; path=/; domain=.covidsheba.com; expires=' + new Date(0).toUTCString();
}

  /*$("#bengali_btn").css("display","block");
  $("#english_btn").css("display","none");*/


/*function translateEn(){
setCookie('googtrans', '/en/en',1);
}*/

function googleTranslateElementInit() {

  if(lastSegment=='en'){
  setCookie('googtrans', '/en/en',1);
  

}else{
    
    setCookie('googtrans', '/en/bn',1);
}
  var x = new google.translate.TranslateElement({pageLanguage: 'en',layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: true}, 'google_translate_element');


  // This will find the pop up and remove it from the page
    var removePopup = document.getElementById('goog-gt-tt');
    removePopup.parentNode.removeChild(removePopup);


}
