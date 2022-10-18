<?php 

if (isset($_POST['vaccine_section'])) {
	
	$lang = $_POST['lang'];

	$output = '';



		$output .= '<table class="table" style="text-align: center;width: 100%">
    
    <tbody>
    <tr>
          
      <td ><a rel="nofollow" target="_blank" href="https://surokkha.gov.bd/enroll" style="display: flex;flex-direction: row;justify-content: center;"><span style="display: flex;flex-direction: column;justify-content: center;"><span>কোভিড-১৯ ভ্যাকসিন নিবন্ধন ফর্ম</span><span class="paragraph" style="font-size: 14px">এই পোর্টালটি এনআইডি এবং মোবাইল নম্বর দিয়ে বাংলাদেশীদের  টিকা নিবন্ধন সম্পন্ন করতে সাহায্য করে।</span></span> <img src="assets/images/vaccine/vaccine1.png" style="margin-left: 10px" alt="করোনা-টিকার-রেজিস্ট্রেশন"></a></td>
    </tr>
    <tr >
           
      <td ><a rel="nofollow" target="_blank" href="https://surokkha.gov.bd/foreigner-enroll" style="display: flex;flex-direction: row;justify-content: center;"><img src="assets/images/vaccine/vaccine2.png" style="margin-right: 10px" alt="কোভিড-টিকার-পাসপোর্ট-রেজিস্ট্রেশন"> <span style="display: flex;flex-direction: column;justify-content: center;"><span>নিবন্ধন ফর্ম (পাসপোর্ট)</span><span class="paragraph" style="font-size: 14px">এই পোর্টালটি পাসপোর্ট এবং মোবাইল নম্বর দিয়ে বাংলাদেশী এবং বিদেশীদের  টিকা নিবন্ধন সম্পন্ন করতে সাহায্য করে।</span></span></a></td>
 
    </tr>
    <tr>
      
       <td ><a rel="nofollow" target="_blank" href="https://surokkha.gov.bd/vaccine-status" style="display: flex;flex-direction: row;justify-content: center;"><span style="display: flex;flex-direction: column;justify-content: center;"><span>কোভিড-১৯ ভ্যাকসিন নিবন্ধনের অবস্থা জানুন</span><span class="paragraph" style="font-size: 14px">এই পোর্টাল থেকে আপনি ভ্যাকসিন নিবন্ধন স্টেটাস যাচাই করতে পারবেন আপনার এনআইডি নম্বর এবং জন্ম তারিখ প্রদান করে।</span></span> <img src="assets/images/vaccine/vaccine3.png" style="margin-left: 10px" alt="করোনা-ভ্যাকসিন-আপডেট"></a></td>
    </tr>
    <tr>
      
      <td ><a rel="nofollow" target="_blank" href="https://surokkha.gov.bd/vaccine-card" style="display: flex;flex-direction: row;justify-content: center;"><img src="assets/images/vaccine/vaccine4.png" style="margin-right: 10px" alt="করোনাভাইরাস-টিকা-কার্ড-ডাউনলোড"> <span style="display: flex;flex-direction: column;justify-content: center;"><span>কোভিড-১৯ ভ্যাকসিন কার্ড সংগ্রহ</span><span class="paragraph" style="font-size: 14px">বাংলাদেশীরা এই পোর্টাল থেকে তাদের ভ্যাকসিন কার্ড সংগ্রহ করতে পারবেন তাদের এনআইডি নম্বর এবং জন্ম তারিখ প্রদান করে।</span></span></a></td>
    </tr>
    <tr>
      
       <td ><a rel="nofollow" target="_blank" href="https://surokkha.gov.bd/vaccine-card/foreigners" style="display: flex;flex-direction: row;justify-content: center;"><span style="display: flex;flex-direction: column;justify-content: center;"><span>বিদেশীদের ভ্যাকসিন কার্ড ডাউনলোড</span><span class="paragraph" style="font-size: 14px">সকল পাসপোর্টধারী বাংলাদেশী এবং বিদেশী এই পোর্টাল থেকে তাদের ভ্যাকসিন কার্ড সংগ্রহ করতে পারবেন তাদের পাসপোর্ট নম্বর এবং জন্ম তারিখ প্রদান করে।</span></span> <img src="assets/images/vaccine/vaccine5.png" style="margin-left: 10px" alt="দেশ-ও-বিদেশের-করোনা-টিকা-কার্ড-ডাউনলোড"></a></td>
    </tr>
    <tr>
      
       <td ><a rel="nofollow" target="_blank" href="https://surokkha.gov.bd/certificate" style="display: flex;flex-direction: row;justify-content: center;"><img src="assets/images/vaccine/vaccine6.png" style="margin-right: 10px" alt="কোভিড-১৯-ভ্যাকসিন-সার্টিফিকেট"> <span style="display: flex;flex-direction: column;justify-content: center;"><span>টিকা সনদ ডাউনলোড</span><span class="paragraph" style="font-size: 14px">বাংলাদেশীরা এই পোর্টাল থেকে তাদের ভ্যাকসিন সার্টিফিকেট সংগ্রহ করতে পারবেন তাদের এনআইডি নম্বর এবং 
জন্ম তারিখ প্রদান করে।</span></span></a></td>
    </tr>
    <tr>
      
       <td ><a rel="nofollow" target="_blank" href="https://surokkha.gov.bd/certificate/foreigners" style="display: flex;flex-direction: row;justify-content: center;"><span style="display: flex;flex-direction: column;justify-content: center;"><span>বিদেশীদের সার্টিফিকেট ডাউনলোড</span><span class="paragraph" style="font-size: 14px">সকল পাসপোর্টধারী বাংলাদেশী এবং বিদেশী এই পোর্টাল থেকে তাদের ভ্যাকসিন সার্টিফিকেট সংগ্রহ করতে পারবেন তাদের পাসপোর্ট নম্বর এবং জন্ম তারিখ প্রদান করে।</span></span> <img src="assets/images/vaccine/vaccine7.png" style="margin-left: 10px" alt="দেশ-ও-বিদেশের-কোভিড-১৯-ভ্যাকসিন-সার্টিফিকেট"></a></td>
    </tr>
    <tr >
      
      <td ><a rel="nofollow" target="_blank" href="https://surokkha.gov.bd/verify" style="display: flex;flex-direction: row;justify-content: center;"><img src="assets/images/vaccine/vaccine8.png" style="margin-right: 10px" alt="করোনাভাইরাস-ভ্যাকসিন-নিবন্ধনের-অবস্থা"> <span style="display: flex;flex-direction: column;justify-content: center;"><span>টিকা সনদ যাচাই</span><span class="paragraph" style="font-size: 14px">বাংলাদেশীরা এই পোর্টাল থেকে তাদের ভ্যাকসিন সার্টিফিকেট যাচাই করতে পারবেন তাদের এনআইডি নম্বর, জন্ম তারিখ এবং ভ্যাকসিন সার্টিফিকেট নম্বর প্রদান করে।</span></span></a></td>
    </tr>
    <tr>
      
      <td ><a rel="nofollow" target="_blank" href="https://surokkha.gov.bd/foreigner-verify" style="display: flex;flex-direction: row;justify-content: center;"><span style="display: flex;flex-direction: column;justify-content: center;"><span>পাসপোর্টধারী বাংলাদেশী এবং বিদেশীদের জন্য ভ্যাকসিন সার্টিফিকেট যাচাই করুন</span><span class="paragraph" style="font-size: 14px">সকল পাসপোর্টধারী বাংলাদেশী এবং বিদেশী এই পোর্টাল থেকে তাদের ভ্যাকসিন সার্টিফিকেট যাচাই করতে পারবেন তাদের 
পাসপোর্ট নম্বর, জন্ম তারিখ এবং ভ্যাকসিন সার্টিফিকেট নম্বর প্রদান করে।</span></span> <img src="assets/images/vaccine/vaccine9.png" style="margin-left: 10px" alt="দেশ-ও-বিদেশের-কোভিড-ভ্যাকসিন-সার্টিফিকেট"></a></td>
    </tr>
    <tr>
      
      <td ><a rel="nofollow" target="_blank" href="https://surokkha.gov.bd/help" style="display: flex;flex-direction: row;justify-content: center;"><img src="assets/images/vaccine/vaccine10.png" style="margin-right: 10px" alt="করোনা-ভ্যাকসিন-আপডেট"> <span style="display: flex;flex-direction: column;justify-content: center;"><span>টিকা বিষয়ক সহায়িকা</span><span class="paragraph" style="font-size: 14px">আপনি এই পোর্টাল থেকে টিকা বিষয়ক সহায়িকা ডাউনলোড করতে পারেন যেখানে থেকে আপনি 
ভ্যাকসিন নিবন্ধন, ভ্যাকসিন কার্ড এবং সার্টিফিকেট সংগ্রহ এবং যাচাই করার সম্পূর্ণ প্রক্রিয়াটির সম্পর্কে অবগত হবেন।</span></span></a></td>
    </tr>
    <tr>
      
      <td ><a rel="nofollow" target="_blank" href="https://surokkha.gov.bd/faq" style="display: flex;flex-direction: row;justify-content: center;"><span style="display: flex;flex-direction: column;justify-content: center;"><span>টিকা বিষয়ক সচরাচর জিজ্ঞাসা </span><span class="paragraph" style="font-size: 14px">কোভিড- ১৯ করোনা ভাইরাসের টিকার জন্য পোর্টালে নিবন্ধন, পরবর্তী করনীয়, এসএমএস বার্তা প্রাপ্তি, টিকা কার্ড প্রাপ্তি, টিকা কেন্দ্র, টিকা গ্রহণের সময়, টিকার ডোজ, চূড়ান্ত সনদ প্রাপ্তি ইত্যাদি বিষয়ক বিভিন্ন প্রশ্ন ও উত্তর নিচের অংশে পাওয়া যাবে।</span></span><img src="assets/images/vaccine/vaccine11.png" style="margin-left: 10px" alt="কোভিড-19-টিকা-জিজ্ঞাশা"></a></td>
    </tr>
    </tbody>
  </table>';
	


	echo $output;
}


?>