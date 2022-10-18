<?php 


class BanglaConverter {
    public static $bn = array("১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "০", "জানুয়ারি", "ফেব্রুয়ারি", "মার্চ", "এপ্রিল", "মে", "জুন", "জুলাই", "আগস্ট", "সেপ্টেম্বর", "অক্টোবর", "নভেম্বর", "ডিসেম্বর", "হোম", "ঢাকা", "কোভিডসেবা", "কোভিড-১৯", "কল করুন", "চেক করুন", "পিএম", "এএম", "ক্লিক করুন", "শ্যামলী", "রমনা", "রামপুরা");

    public static $en = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "0", "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec", "Home", "Dhaka", "CovidSheba", "COVID-19", "Call Now", "Check now", "pm", "am", "Click Now", "Shyamoli", "Ramna", "Rampura");

    public static $time_bn = array("১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "০", "", "");

    public static $time_en = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "0", "pm", "p.m.");
    
    public static function bn2en($number) {
        return str_replace(self::$bn, self::$en, $number);
    }
    
    public static function en2bn($number) {
        return str_replace(self::$en, self::$bn, $number);
    }

    public static function en2bntime($time) {
        return str_replace(self::$time_en, self::$time_bn, $time);
    }
}

?>

