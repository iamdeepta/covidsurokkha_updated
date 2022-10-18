<?php 
$uploadDir = 'files/blogs_images/'; 
$allowTypes = array('jpg', 'png', 'jpeg', 'PNG'); 
$response = array( 
    'status' => 0, 
    'message' => 'Data submission failed, please try again.' 
); 
 
 //$ln_date = date("Y-m-d h:i a");
// If form is submitted 
$errMsg = ''; 
$valid = 1; 
if(isset($_POST['blogs_id1']) || isset($_POST['files1'])){ 
    // Get the submitted form data 
    $blogs_id = $_POST['blogs_id1']; 
      
    $filesArr = $_FILES["files1"]; 
     
    if(empty($blogs_id)){ 
        $valid = 0; 
        $errMsg .= '<br/>Something went wrong.Try again.'; 
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
                $fileName = uniqid(time()).basename($filesArr['name'][$key]);  
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

            $query = "UPDATE tbl_blogs 
                    SET 
                        
                        `blogs_image1` = '".mysql_safe(trim($uploadedFileStr))."'
                        
                        where blogs_id = '".$blogs_id."'
                      
                ";

            

        $insert_q = mysqli_query($dbc, $query);
             
            if($insert_q){ 
                $response['status'] = 1; 
                $response['message'] = 'Data updated successfully!'; 
            } 
        } 
    }else{ 
         $response['message'] = 'Please select an image!'.$errMsg; 
    } 
} 
 
// Return response 
echo json_encode($response);