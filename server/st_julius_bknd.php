<?php

 $surname = $firstname = $othername = $address = $gender = $status= $hometown = 
 $dob = $mobile = $spouseName = $nationality = $state_of_origin = $parish_of_origin = $email =  "";

// Setting function for input values...
if  ($_SERVER['REQUEST_METHOD'] == "POST"){

    $surname = $_POST['surname'];
    $firstname = ($_POST['firstname']);
    $othername = ($_POST['othername']);
    $name = $surname.'' .$firstname.'' .$othername;
    $address = ($_POST['address']);
    $gender = ($_POST['gender']);
    $status= ($_POST['status']); 
    $dob = ($_POST['dob']);
    $mobile = ($_POST['mobile']) ;
    $spouseName = ($_POST['spouse_name']);
    $nationality = ($_POST['nationality']);
    $state_of_origin = ($_POST['state_of_origin']);
    $hometown = ($_POST['hometown']);
    $parish_of_origin = ($_POST['parish_of_origin']);
    $email = ($_POST['email']);


if (!empty($name) || !empty($address) ||!empty($gender) ||!empty($emai) ||!empty($status) ||!empty($mobile) ||
!empty($dob) ||!empty($spouseName) ||!empty($nationality) ||!empty($state_of_origin)  ||!empty($hometown)|| !empty($parish_of_origin)){
    
    include ('db_stjulius.php');
}else{
    printf("All fields are required");
}

// To filter and validate the email address...
    if (filter_var($email, FILTER_VALIDATE_EMAIL) === false){
        echo ('Invalid email address');
    }else{
        echo ('Sent to email');
    }
                    // |OR|

    // if (!filter_input(INPUT_POST, '$email', FILTER_VALIDATE_EMAIL)){
    //     echo ('Invalid email address');
    // }else{
    //     echo ('Sent to email');
    // }

}
 



?>



