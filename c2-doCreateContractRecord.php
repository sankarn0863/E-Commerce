<?php 
$response = array( 
    'status' => 0, 
    'message' => 'Form submission failed, please try again.' 
); 
 
// If form is submitted 
if(isset($_POST['contractTitle']) || isset($_POST['policyID']) || isset($_POST['userID']) || isset($_POST['contractStatus'])){ 
    // Get the submitted form data 
    $contractTitle = "'".$_POST['contractTitle']."'"; 
    $policyID = $_POST['policyID']; 
    $userID = $_POST['userID']; 
    $contractStatus = $_POST['contractStatus']; 
     
    // Check whether submitted data is not empty 
    if(!empty($contractTitle) && !empty($policyID)){ 
            
            // Include the database config file 
            include "db.php"; 
            // Insert form data in the database 
            $query = "INSERT INTO `contract_t`(`policy_id`, `contract_title`, `user_id`, `contract_status`, `contract_created`, `contract_expired`) VALUES ($policyID, $contractTitle, $userID, $contractStatus, now(), now())";
            $insert = mysqli_query($conn,$query); 
                
            if($insert){ 
                $response['status'] = 1; 
                $response['message'] = 'Form data submitted successfully!'; 
            } 

    }else{ 
         $response['message'] = 'Please fill all the mandatory fields.'; 
    } 
} 
 
// Return response 
echo json_encode($response);
?>