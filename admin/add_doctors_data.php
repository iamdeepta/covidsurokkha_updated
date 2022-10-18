<?php 
$uploadDir = 'files/'; 
$allowTypes = array('jpg', 'png', 'jpeg'); 
$response = array( 
    'status' => 0, 
    'message' => 'Data submission failed, please try again.' 
); 
 
// If form is submitted 
$errMsg = ''; 
$valid = 1; 
if(isset($_POST['doctor_name']) || isset($_POST['doctor_post']) || isset($_POST['doctor_consultation_time']) || isset($_POST['doctor_hospital']) || isset($_POST['files'])){ 
    // Get the submitted form data 
    $doctor_name = $_POST['doctor_name']; 
    $doctor_post = $_POST['doctor_post']; 
    $doctor_consultation_time = $_POST['doctor_consultation_time']; 
    $doctor_hospital = $_POST['doctor_hospital']; 
    $filesArr = $_FILES["files"]; 
     
    if(empty($doctor_name)){ 
        $valid = 0; 
        $errMsg .= '<br/>Please enter doctor name.'; 
    } 
     
    if(empty($doctor_post)){ 
        $valid = 0; 
        $errMsg .= '<br/>Please enter post.'; 
    } 
     
    if(empty($doctor_consultation_time)){ 
        $valid = 0; 
        $errMsg .= '<br/>Please enter consultation time.'; 
    }

    if(empty($doctor_hospital)){ 
        $valid = 0; 
        $errMsg .= '<br/>Please enter hospital name.'; 
    }
     
    // Check whether submitted data is not empty 
    if($valid == 1){ 
        $uploadStatus = 1; 
        $fileNames = array_filter($filesArr['name']); 
         
        // Upload file 
        $uploadedFile = ''; 
        if(!empty($fileNames)){  
            foreach($filesArr['name'] as $key=>$val){  
                // File upload path  
                $fileName = basename($filesArr['name'][$key]);  
                $targetFilePath = $uploadDir . $fileName;  
                  
                // Check whether file type is valid  
                $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);  
                if(in_array($fileType, $allowTypes)){  
                    // Upload file to server  
                    if(move_uploaded_file($filesArr["tmp_name"][$key], $targetFilePath)){  
                        $uploadedFile .= $fileName.','; 
                    }else{  
                        $uploadStatus = 0; 
                        $response['message'] = 'Sorry, there was an error uploading your file.'; 
                    }  
                }else{  
                    $uploadStatus = 0; 
                    $response['message'] = 'Sorry, only JPG, JPEG, & PNG files are allowed to upload.'; 
                }  
            }  
        } 
         
        if($uploadStatus == 1){ 
            // Include the database config file 
            include_once 'db.inc.php'; 
             
            // Insert form data in the database 
            $uploadedFileStr = trim($uploadedFile, ','); 
            /*$insert = $db->query("INSERT INTO form_data (name,email,file_names) VALUES ('".$name."', '".$email."', '".$uploadedFileStr."')");*/ 

            $query = "INSERT INTO tbl_doctors 
                    SET 
                        `doctor_name` = '{$doctor_name}',
                        `doctor_post` = '{$doctor_post}',
                        `doctor_consultation_time` = '{$doctor_consultation_time}',
                        `doctor_hospital` = '{$doctor_hospital}',
                        
                        `doctor_image` = '{$uploadedFileStr}'
                        
                        
                      
                ";

            

        $insert_q = mysqli_query($dbc, $query);
             
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