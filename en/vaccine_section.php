<?php 

if (isset($_POST['vaccine_section'])) {
	
	$lang = $_POST['lang'];

	$output = '';


		$output .= '<table class="table" style="text-align: center;width: 100%">

    <tbody>
    <tr>
        
      <td ><a rel="nofollow" target="_blank" href="https://surokkha.gov.bd/enroll" style="display: flex;flex-direction: row;justify-content: center;"><span style="display: flex;flex-direction: column;justify-content: center;"><span>Vaccine Registration</span><span style="font-size: 14px">This portal helps bangladeshi people to get registered for vaccine with their NID and mobile number.</span></span> <img src="assets/images/vaccine/vaccine1.png" style="margin-left: 10px" alt="covid-vaccine-registration"></a></td>
    </tr>
    <tr >
      
       <td ><a rel="nofollow" target="_blank" href="https://surokkha.gov.bd/foreigner-enroll" style="display: flex;flex-direction: row;justify-content: center;"><img src="assets/images/vaccine/vaccine2.png" style="margin-right: 10px" alt="covid-19-vaccine-registration-with-passport"> <span style="display: flex;flex-direction: column;justify-content: center;"><span>Registration (Passport)</span><span style="font-size: 14px">This portal helps bangladeshi and foreigners to get registered for vaccine with their passport and mobile number.</span></span></a></td>
    </tr>
    <tr>
      
       <td ><a rel="nofollow" target="_blank" href="https://surokkha.gov.bd/vaccine-status" style="display: flex;flex-direction: row;justify-content: center;"><span style="display: flex;flex-direction: column;justify-content: center;"><span>Vaccine Registration Status</span><span style="font-size: 14px">From this portal you will get to know what is your status about registration for vaccine by providing your NID number and date of birth.</span></span> <img src="assets/images/vaccine/vaccine3.png" style="margin-left: 10px" alt="status-of-corona-vaccine
"></a></td>
    </tr>
    <tr>
      
       <td ><a rel="nofollow" target="_blank" href="https://surokkha.gov.bd/vaccine-card" style="display: flex;flex-direction: row;justify-content: center;"><img src="assets/images/vaccine/vaccine4.png" style="margin-right: 10px" alt="get-corona-virus-vaccine-card-bd"> <span style="display: flex;flex-direction: column;justify-content: center;"><span>Vaccine Card for Bangladeshi people</span><span style="font-size: 14px">Bangladeshi people can collect their vaccine card from this portal by providing their NID number and date of birth.</span></span></a></td>
    </tr>
    <tr>
      
       <td ><a rel="nofollow" target="_blank" href="https://surokkha.gov.bd/vaccine-card/foreigners" style="display: flex;flex-direction: row;justify-content: center;"><span style="display: flex;flex-direction: column;justify-content: center;"><span>Vaccine Card for Passport Holder Bangladeshi and Foreigners</span><span style="font-size: 14px">Bangladeshi people and foreigners who have their passports can collect their vaccine card from this portal by providing their 
passport number and date of birth.</span></span> <img src="assets/images/vaccine/vaccine5.png" style="margin-left: 10px" alt="foreigners-and-bd-vaccine-card-download"></a></td>
    </tr>
    <tr>
      
       <td ><a rel="nofollow" target="_blank" href="https://surokkha.gov.bd/certificate" style="display: flex;flex-direction: row;justify-content: center;"><img src="assets/images/vaccine/vaccine6.png" style="margin-right: 10px" alt="coronavirus-vaccine-certificate-bd"> <span style="display: flex;flex-direction: column;justify-content: center;"><span>Vaccine Certificate for Bangladeshi people</span><span style="font-size: 14px">Bangladeshi people can collect their vaccine certificate from this portal by providing their NID number and date of birth.</span></span></a></td>
    </tr>
    <tr>
      
       <td ><a rel="nofollow" target="_blank" href="https://surokkha.gov.bd/certificate/foreigners" style="display: flex;flex-direction: row;justify-content: center;"><span style="display: flex;flex-direction: column;justify-content: center;"><span>Vaccine Certificate for Passport Holder Bangladeshi and Foreigners</span><span style="font-size: 14px">Bangladeshi people and foreigners who have their passports can collect their vaccine certificate from this portal by providing their passport number and date of birth.</span></span> <img src="assets/images/vaccine/vaccine7.png" style="margin-left: 10px" alt="covid-19-vaccine-certificate-bd-and-foreigners"></a></td>
    </tr>
    <tr >
      
     <td ><a rel="nofollow" target="_blank" href="https://surokkha.gov.bd/verify" style="display: flex;flex-direction: row;justify-content: center;"><img src="assets/images/vaccine/vaccine8.png" style="margin-right: 10px" alt="verify-corona-vaccine-certificate-bd"><span style="display: flex;flex-direction: column;justify-content: center;"><span>Verify Vaccine Certificate for Bangladeshi people</span><span style="font-size: 14px">Bangladeshi people can verify their vaccine certificate from this portal by providing their NID number, date of birth and vaccination certificate number.</span></span></a></td>
    </tr>
    <tr>
      
       <td ><a rel="nofollow" target="_blank" href="https://surokkha.gov.bd/foreigner-verify" style="display: flex;flex-direction: row;justify-content: center;"><span style="display: flex;flex-direction: column;justify-content: center;"><span>Verify Vaccine Certificate for Passport Holder Bangladeshi and Foreigners</span><span style="font-size: 14px">Bangladeshi people and foreigners who have their passports can verify their vaccine certificate from this portal by providing their passport number, date of birth and vaccination certificate number.</span></span> <img src="assets/images/vaccine/vaccine9.png" style="margin-left: 10px" alt="corona-virus-vaccine-certificate-bd-and-foreigners"></a></td>
    </tr>
    <tr>
      
      <td ><a rel="nofollow" target="_blank" href="https://surokkha.gov.bd/help" style="display: flex;flex-direction: row;justify-content: center;"><img src="assets/images/vaccine/vaccine10.png" style="margin-right: 10px" alt="covid-19-vaccine-manual"> <span style="display: flex;flex-direction: column;justify-content: center;"><span>Vaccine Manual</span><span style="font-size: 14px">You can download vaccine manual from this portal where you canfigure out the complete process of vaccine registration, collecting vaccine card and ceritificate and verifying vaccine certificate.</span></span></a></td>
    </tr>
    <tr>
      
      <td ><a rel="nofollow" target="_blank" href="https://surokkha.gov.bd/faq" style="display: flex;flex-direction: row;justify-content: center;"><span style="display: flex;flex-direction: column;justify-content: center;"><span>Frequently Asked Questions about Covid-19 Corona Vaccine</span><span style="font-size: 14px">Registration on the portal for vaccination against Covid-19 corona virus, next steps, receiving SMS messages, receiving vaccination 
card, various questions and answers regarding vaccination center, time of vaccination, dose of vaccine, receipt of final certificate etc. can be found in this portal.</span></span> <img src="assets/images/vaccine/vaccine11.png" style="margin-left: 10px" alt="faq-about-covid-vaccine"></a></td>
    </tr>
    </tbody>

  </table>';
	


	echo $output;
}


?>