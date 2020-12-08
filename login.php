<?php

require "connect.php";

if($_SERVER['REQUEST_METHOD']=="POST"){
    $response = array();

    $email = $_POST['email'];
    $desiredpassword = $_POST['desiredpassword'];
   

    $check = "SELECT * FROM tbl_users WHERE email='$email' and desiredpassword='$desiredpassword'";
    $result = mysqli_fetch_array(mysqli_query($con,$check));

    if (isset($result)) {
        $response['value'] = 1;
        $response['message'] = "Login Successfully";
        
        echo json_encode("Success");
        
    }
    else
    {
        $response['value'] = 0;
        $response['message'] = "Login Failed";
        echo json_encode($response);
    }

    

   
}

?>