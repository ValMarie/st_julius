<?php

// Connecting to a database...

$servername = 'localhost';
$username = 'root'; // default username = 'root'
$password = '';
$db = 'st_julius';

$db_conn = new mysqli($servername, $username, $password, $db);

// Checking connection...
if ($db_conn){
   echo ' <h2> Data Connection Status: </h2>';
   echo 'Connection Successful... '."\n";    

//    $sj_query = "INSERT INTO `membership_reg` (`Surname`, `Firstname`, `Other names`, `Address`, `Email`, `Gender`, `Marital Status`,
//             `Date of Birth`, `Phone number`, `State of Origin`, `Hometown`, `Parish of Origin`)
//     VALUES ('$surname', '$firstname', '$othername', '$address', '$email', '$gender', '$status', '$dob','$mobile','$state_of_origin',
//             '$hometown', '$parish_of_origin')" ;

//     $sj_sql = mysqli_query($db_conn, $sj_query);

//     if ($sj_sql){
//         echo 'Data inserted';
        // header ('location: Reg_form.php');


            // OR 
            // Using prepared and bind statement


            
    $stmt = $db_conn->prepare('INSERT INTO `membership_reg` (`Surname`, `Firstname`, `Other names`, `Address`, `Email`, `Gender`, `Marital Status`,
    `Date of Birth`, `Phone number`, `State of Origin`)
    VALUES (?,?,?,?,?,?,?,?,?,?)');

    $stmt->bind_param('ssssssssis', '$surname', '$firstname', '$othername', '$address', '$email', '$gender', '$status', '$dob','$mobile','$state_of_origin');
    $stmt->execute();
    $stmt->close();

    echo 'Data inserted';
    // header ('location: Reg_form.php');

    // }else{
    // echo 'Error inserting data'. '<br>'. $sj_query. '<br>'.
    //     mysqli_errno($db_conn);
    // }


}else{
    echo ' <h2> Data Connection Status: </h2>';
    die('Connection Error (' .mysqli_connect_errno(). ')' .mysqli_connect_error()); 
//connect_error && connect_errno returns same error, while the former returns str the latter returns int

exit();
}

mysqli_close($db_conn);






?>