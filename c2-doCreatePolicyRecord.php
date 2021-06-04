<?php 
$response = array( 
    'status' => 0, 
    'message' => 'Form submission failed, please try again.' 
); 
 
// If form is submitted 
if(isset($_POST['policyTitle']) || isset($_POST['policyOwner']) || isset($_POST['policyStatus'])){ 
    // Get the submitted form data 
    $policyTitle = "'".$_POST['policyTitle']."'"; 
    $policyOwner = $_POST['policyOwner']; 
    $policyStatus = $_POST['policyStatus']; 
     
    // Check whether submitted data is not empty 
    if(!empty($policyStatus) && !empty($policyOwner)){ 
            
            // Include the database config file 
            include "db.php"; 
            // Insert form data in the database 
            $query = "INSERT INTO `policy_t`(`policy_title`, `policy_owner`, `policy_status`, `policy_created`, `policy_expired`) VALUES ($policyTitle, $policyOwner, $policyStatus, now(), now())";
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