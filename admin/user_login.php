<?php

session_start();

include("db.inc.php");

if (isset($_POST['submit_admin'])) {
    
    $username = strtolower($_POST["username"]);

    //$password = md5($_POST["password"]);
    $password = $_POST["password"];

    //$user_answer = $_POST["answer"];

    //$pass = md5($password);

    

    



    $result = mysqli_query($dbc, "SELECT * from users where username = '$username'") or die(mysqli_error($dbc));

    $user=mysqli_fetch_array($result);



    

    //foreach ($result as $user) {



    //$user['GenUserName'] = strtolower($user['GenUserName']);

    

        if($user['username'] == $username && $user['password'] == $password )

        {

            $_SESSION["flag"]="ok";

            $_SESSION["user_id"] = $user['user_id'];

            /*$_SESSION["OfficeID"] = $user['OfficeID'];

            $_SESSION["OfficeName"] = $user['OfficeName'];*/

            $_SESSION["username"] = $username;

            //$_SESSION["FullName"] = $user['FullName'];

            //$_SESSION["privilege"] = $user['privilege'];

            header ("Location: home.php");



            }elseif($user['username'] == $username && $user['password'] != $password)  {



                $_SESSION["flag"]="error_pass";

            

            header ("Location: home.php");



            }elseif($user['username'] != $username && $user['password'] == $password )  {



                $_SESSION["flag"]="error_username";

            

            header ("Location: home.php");



            }










    header("Location: home.php");
}

    

?>