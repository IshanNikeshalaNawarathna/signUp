
<?php

$first_name = $_POST["firstName"];
$last_name = $_POST["lastName"];
$email = $_POST["email"];
$password = $_POST["password"];
$mobile_number = $_POST["mobileNumber"];
if (empty($first_name)) {
    echo ("Please Update New First Name");
} else if (strlen($first_name) > 50) {
    echo ("First Name must have lass than 50 Characters");
} else if (empty($last_name)) {
    echo ("Please Update New First Name");
} else if (strlen($last_name) > 50) {
    echo ("Last Name must have lass than 50 Characters");
} else if (empty($email)) {
    echo ("Please Enter Your Email.");
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo ("Invalid Email Plesae Correct Email");
} else if (empty($password)) {
    echo ("Please Enter your password and Password must be between 5 - 20 Characters.");
}elseif(strlen($password) < 5 || strlen($password) > 20){
    echo (" Password must be between 5 - 20 Characters.");
} else if (empty($mobile_number)) {
    echo ("Please Enter You Mobile Number and Mobile Number must have 10 Characters.");
}else if(strlen($mobile_number) != 10){
    echo ("Mobile Number must have 10 Characters.");
} else if (!preg_match("/07[1,2,3,4,5,6,7,8,9[0-9]/", $mobile_number)) {
    echo ("Invalid Mobile Number");
} else {

    if (isset($_FILES["image"])) {
        $images = $_FILES["image"];

        $file_extention = array("image/jpg", "image/jpeg", "image/png", "image/svg", "image/svg+xml");
        $new_file_extention = $images["type"];

        if (!in_array($new_file_extention, $file_extention)) {
            echo("error");
            // echo ("Please Select a valid Image");
        } else {
            $select_file_image_extantion;

            if ($new_file_extention == "image/jpg") {
                $select_file_image_extantion = ".jpg";
            } elseif ($new_file_extention == "image/jpeg") {
                $select_file_image_extantion = ".jpeg";
            } elseif ($new_file_extention == "image/png") {
                $select_file_image_extantion = ".png";
            } elseif ($new_file_extention == "image/svg") {
                $select_file_image_extantion = ".svg";
            } elseif ($new_file_extention == "image/svg+xml") {
                $select_file_image_extantion = ".svg";
            }

            $file_name = "profileImages/" . $first_name."_".$select_file_image_extantion;
            move_uploaded_file($images["tmp_name"], $file_name);
        }

 
    }
    $connecation = new mysqli("localhost", "root", "Ishan9952@*v$", "signUp");
    $tbale = $connecation->query("SELECT * FROM `signup` WHERE `email`='" . $email . "' AND `mobileNumber`='" .$mobile_number . "'");

    if ($tbale->num_rows ==  0) {
        $connecation->query("INSERT INTO `signup`(`firstName`,`lastName`,`email`,`mobileNumber`,`password`,`image`) VALUES 
        ('" . $first_name . "','" . $last_name . "','" . $email . "','" . $mobile_number. "','" . $password. "','".$file_name."')");
        echo("success");

    } else {
        echo ("user with same Email or Mobile Number alredat exsist");
    }
}



















?>