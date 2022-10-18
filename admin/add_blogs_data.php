<?php 
$uploadDir = 'files/blogs_images/'; 
$allowTypes = array('jpg', 'png', 'jpeg'); 
$response = array( 
    'status' => 0, 
    'message' => 'Data submission failed, please try again.' 
); 

date_default_timezone_set("Asia/Dhaka");
$blogs_date = date("d M");
$blogs_year = date("Y");
 
// If form is submitted 
$errMsg = ''; 
$valid = 1; 
if(isset($_POST['blogs_title_en']) || isset($_POST['blogs_title_bn']) || isset($_POST['blogs_description1_en']) || isset($_POST['blogs_description1_bn']) || isset($_POST['blogs_description2_en']) || isset($_POST['blogs_description2_bn']) || isset($_POST['blogs_tag_en']) || isset($_POST['blogs_tag_bn']) || isset($_POST['blogs_category_en']) || isset($_POST['blogs_category_bn']) || isset($_POST['blogs_time']) || isset($_POST['files1']) || isset($_POST['files2']) || isset($_POST['files3'])){ 
    // Get the submitted form data 
    $blogs_title_en = $_POST['blogs_title_en']; 
    $blogs_title_bn = $_POST['blogs_title_bn']; 
    $blogs_description1_en = $_POST['blogs_description1_en']; 
    $blogs_description1_bn = $_POST['blogs_description1_bn']; 
    $blogs_description2_en = $_POST['blogs_description2_en']; 
    $blogs_description2_bn = $_POST['blogs_description2_bn']; 
    $blogs_tag_en = $_POST['blogs_tag_en']; 
    $blogs_tag_bn = $_POST['blogs_tag_bn']; 
    $blogs_category_en = $_POST['blogs_category_en']; 
    $blogs_category_bn = $_POST['blogs_category_bn']; 
    $blogs_time = $_POST['blogs_time'];
    $blogs_image1_alt_en = $_POST['blogs_image1_alt_en'];  
    $blogs_image1_alt_bn = $_POST['blogs_image1_alt_bn'];  
    $blogs_image2_alt_en = $_POST['blogs_image2_alt_en'];  
    $blogs_image2_alt_bn = $_POST['blogs_image2_alt_bn'];  
    $blogs_image3_alt_en = $_POST['blogs_image3_alt_en'];  
    $blogs_image3_alt_bn = $_POST['blogs_image3_alt_bn'];  

    $filesArr1 = $_FILES["files1"]; 
    $filesArr2 = $_FILES["files2"]; 
    $filesArr3 = $_FILES["files3"]; 
     
    if(empty($blogs_title_en) && empty($blogs_title_bn)){ 
        $valid = 0; 
        $errMsg .= '<br/>Please enter title.'; 
    } 
     
    if(empty($blogs_description1_en) && empty($blogs_description1_bn)){ 
        $valid = 0; 
        $errMsg .= '<br/>Please enter description 1.'; 
    } 
     
    if(empty($blogs_description2_en) && empty($blogs_description2_bn)){ 
        $valid = 0; 
        $errMsg .= '<br/>Please enter description 2.'; 
    }

    if(empty($blogs_tag_en) && empty($blogs_tag_bn)){ 
        $valid = 0; 
        $errMsg .= '<br/>Please enter tag.'; 
    }

    if(empty($blogs_category_en) && empty($blogs_category_bn)){ 
        $valid = 0; 
        $errMsg .= '<br/>Please enter category.'; 
    }

    if(empty($blogs_time)){ 
        $valid = 0; 
        $errMsg .= '<br/>Please enter time.'; 
    }
     
    // Check whether submitted data is not empty 
    if($valid == 1){ 
        $uploadStatus = 1; 
        $fileNames1 = array_filter($filesArr1['name']); 
        $fileNames2 = array_filter($filesArr2['name']); 
        $fileNames3 = array_filter($filesArr3['name']); 
         
        // Upload file 
        $uploadedFile1 = ''; 
        $uploadedFile2 = ''; 
        $uploadedFile3 = ''; 
        if(!empty($fileNames1)){  
            foreach($filesArr1['name'] as $key1=>$val1){  
                // File upload path  
                $fileName1 = basename($filesArr1['name'][$key1]);  
                $targetFilePath1 = $uploadDir . $fileName1;  
                  
                // Check whether file type is valid  
                $fileType1 = pathinfo($targetFilePath1, PATHINFO_EXTENSION);  
                if(in_array($fileType1, $allowTypes)){  
                    // Upload file to server  
                    if(move_uploaded_file($filesArr1["tmp_name"][$key1], $targetFilePath1)){  
                        $uploadedFile1 .= $fileName1.','; 
                    }else{  
                        $uploadStatus = 0; 
                        $response['message'] = 'Sorry, there was an error uploading your file.'; 
                    }  
                }else{  
                    $uploadStatus = 0; 
                    $response['message'] = 'Sorry, only JPG, JPEG, & PNG files are allowed to upload.'; 
                }  
            }

            if(!empty($fileNames2)){
            foreach($filesArr2['name'] as $key2=>$val2){  
                // File upload path  
                $fileName2 = basename($filesArr2['name'][$key2]);  
                $targetFilePath2 = $uploadDir . $fileName2;  
                  
                // Check whether file type is valid  
                $fileType2 = pathinfo($targetFilePath2, PATHINFO_EXTENSION);  
                
                if(in_array($fileType2, $allowTypes)){  
                    // Upload file to server  
                    if(move_uploaded_file($filesArr2["tmp_name"][$key2], $targetFilePath2)){  
                        $uploadedFile2 .= $fileName2.','; 
                    }else{  
                        $uploadStatus = 0; 
                        $response['message'] = 'Sorry, there was an error uploading your file.'; 
                    }  
                }else{  
                    $uploadStatus = 0; 
                    $response['message'] = 'Sorry, only JPG, JPEG, & PNG files are allowed to upload.'; 
                } 
                 
            }
            }else{

                    $uploadedFile2 .= '';
                }


            if(!empty($fileNames3)){    
            foreach($filesArr3['name'] as $key3=>$val3){  
                // File upload path  
                $fileName3 = basename($filesArr3['name'][$key3]);  
                $targetFilePath3 = $uploadDir . $fileName3;  
                  
                // Check whether file type is valid  
                $fileType3 = pathinfo($targetFilePath3, PATHINFO_EXTENSION);  
                if(in_array($fileType3, $allowTypes)){  
                    // Upload file to server  
                    if(move_uploaded_file($filesArr3["tmp_name"][$key3], $targetFilePath3)){  
                        $uploadedFile3 .= $fileName3.','; 
                    }else{  
                        $uploadStatus = 0; 
                        $response['message'] = 'Sorry, there was an error uploading your file.'; 
                    }  
                }else{  
                    $uploadStatus = 0; 
                    $response['message'] = 'Sorry, only JPG, JPEG, & PNG files are allowed to upload.'; 
                }  
            }
            }else{

                    $uploadedFile3 .= '';
                }  
        } 
         
        if($uploadStatus == 1){ 
            // Include the database config file 
            include_once 'db.inc.php'; 
             
            // Insert form data in the database 
            $uploadedFileStr1 = trim($uploadedFile1, ','); 
            $uploadedFileStr2 = trim($uploadedFile2, ','); 
            $uploadedFileStr3 = trim($uploadedFile3, ','); 
            /*$insert = $db->query("INSERT INTO form_data (name,email,file_names) VALUES ('".$name."', '".$email."', '".$uploadedFileStr."')");*/ 

            $query = "INSERT INTO tbl_blogs 
                    SET 
                        `blogs_title_en` = '".mysql_safe(trim($blogs_title_en))."',
                        `blogs_title_bn` = '".mysql_safe(trim($blogs_title_bn))."',
                        `blogs_description1_en` = '".mysql_safe(trim($blogs_description1_en))."',
                        `blogs_description1_bn` = '".mysql_safe(trim($blogs_description1_bn))."',
                        `blogs_description2_en` = '".mysql_safe(trim($blogs_description2_en))."',
                        `blogs_description2_bn` = '".mysql_safe(trim($blogs_description2_bn))."',
                        `blogs_tag_en` = '".mysql_safe(trim($blogs_tag_en))."',
                        `blogs_tag_bn` = '".mysql_safe(trim($blogs_tag_bn))."',
                        `blogs_category_en` = '".mysql_safe(trim($blogs_category_en))."',
                        `blogs_category_bn` = '".mysql_safe(trim($blogs_category_bn))."',
                        `blogs_time` = '".mysql_safe(trim($blogs_time))."',
                        `blogs_date` = '".mysql_safe(trim($blogs_date))."',
                        `blogs_year` = '".mysql_safe(trim($blogs_year))."',
                        
                        `blogs_image1` = '{$uploadedFileStr1}',
                        `blogs_image2` = '{$uploadedFileStr2}',
                        `blogs_image3` = '{$uploadedFileStr3}',

                        `blogs_image1_alt_en` = '".mysql_safe(trim($blogs_image1_alt_en))."',
                        `blogs_image1_alt_bn` = '".mysql_safe(trim($blogs_image1_alt_bn))."',
                        `blogs_image2_alt_en` = '".mysql_safe(trim($blogs_image2_alt_en))."',
                        `blogs_image2_alt_bn` = '".mysql_safe(trim($blogs_image2_alt_bn))."',
                        `blogs_image3_alt_en` = '".mysql_safe(trim($blogs_image3_alt_en))."',
                        `blogs_image3_alt_bn` = '".mysql_safe(trim($blogs_image3_alt_bn))."'
                        
                        
                      
                ";

            

        $insert_q = mysqli_query($dbc, $query);


        $query2 = mysqli_query($dbc, "SELECT * from tbl_blogs order by blogs_id desc limit 1");
    
    
    while($query2 && $result2=mysqli_fetch_array($query2, MYSQLI_ASSOC)){

        $master_unique_id = 'blogs_id'.$result2['blogs_id'];
        $blogs_unique_id = $result2['blogs_id'];
    }

    $master_url = 'https://covidsurokkha.com/blogs-detail.php?id='.$blogs_unique_id;


            $query1 = mysqli_query($dbc, "INSERT INTO tbl_master_search (master_title_en, master_title_bn, master_description_en, master_description_bn, master_url, master_unique_id) VALUES('".mysql_safe(trim($_POST['blogs_title_en']))."','".mysql_safe(trim($_POST['blogs_title_bn']))."','".mysql_safe(trim($_POST['blogs_description1_en']))."','".mysql_safe(trim($_POST['blogs_description1_bn']))."','".mysql_safe(trim($master_url))."','".mysql_safe(trim($master_unique_id))."')");

             
            if($insert_q){ 
                $response['status'] = 1; 
                $response['message'] = 'Data added successfully!'; 
            } 
        } 
    }else{ 
         $response['message'] = 'Please fill all the mandatory fields!'.$errMsg; 
    } 
} 
 
// Return response 
echo json_encode($response);