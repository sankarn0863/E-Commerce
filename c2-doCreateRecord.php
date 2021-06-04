<?php 
$uploadDir = 'uploads/'; 
$response = array( 
    'status' => 0, 
    'message' => 'Form submission failed, please try again.' 
); 
 
if(isset($_POST['dataStatus']) || isset($_POST['dataModifier']) || isset($_POST['dataOwner']) || isset($_POST['dataFile']))
{  
    $dataStatus = $_POST['dataStatus']; 
    $dataModifier = $_POST['dataModifier']; 
    $dataOwner = $_POST['dataOwner']; 
    if(!empty($dataStatus) && !empty($dataModifier)){ 
        $uploadStatus = 1; 
        $uploadedFile = ''; 
        if(!empty($_FILES["dataFile"]["name"]))
        { 
            $fileName = basename($_FILES["dataFile"]["name"]); 
            $targetFilePath = $uploadDir . $fileName; 
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
            $allowTypes = array('pdf', 'doc', 'docx', 'jpg', 'png', 'jpeg', 'txt', 'sql'); 
            if(in_array($fileType, $allowTypes))
                { 
                if(move_uploaded_file($_FILES["dataFile"]["tmp_name"], $targetFilePath))
                  { 
                    $uploadedFile = "'".$fileName."'"; 
                   }
                 else{ 
                    $uploadStatus = 0; 
                    $response['message'] = 'Sorry, there was an error uploading your file.'; 
                    } 
                  }
              else{ 
                $uploadStatus = 0; 
                $response['message'] = 'Sorry, only PDF, DOC, JPG, JPEG, & PNG files are allowed to upload.'; 
                } 
         } 
            
 if($uploadStatus == 1)
           { 
            include "db.php";  
            $query = "INSERT INTO `data_t` (`dataStatus_id`, `data_location`,`dataType_id`, `data_modifier`, `data_changed`, `data_owner`, `data_created`) VALUES ($dataStatus,$uploadedFile,5,$dataModifier,now(),$dataOwner, now())";
            $insert = mysqli_query($conn,$query); 
                
            if($insert){ 
                $response['status'] = 1; 
                $response['message'] = 'Form data submitted successfully!'; 
            } 
        } 

    }else{ 
         $response['message'] = 'Please fill all the mandatory fields.'; 
    } 
} 
 
// Return response 
echo json_encode($response);
?>