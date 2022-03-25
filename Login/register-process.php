<?php

require('helper.php');
// error variable
$error = array();

$firstName = validate_input_text($_POST['firstName']);
if(empty($firstName)){
    $error[]="You Forgot to enter your First Name";
}

$lastName = validate_input_text($_POST['lastName']);
if(empty($lastName)){
    $error[]="You Forgot to enter your last Name";
}

$email = validate_input_email($_POST['email']);
if(empty($email)){
    $error[]="You Forgot to enter your Email";
}

$password = validate_input_text($_POST['password']);
if(empty($password)){
    $error[]="You Forgot to enter your password";
}
$confirm_pwd = validate_input_text($_POST['confirm_pwd']);
if(empty($confirm_pwd)){
    $error[]="You Forgot to enter your Confirm Password";
}
$dob = validate_input_text($_POST['dob']);
if(empty($dob)){
    $error[]="You Forgot to enter your Confirm Password";
}

$country = validate_input_text($_POST['country']);
if(empty($country)){
    $error[]="You Forgot to enter your Country";
}
$phone = validate_input_text($_POST['phone']);
if(empty($phone)){
    $error[]="You Forgot to enter your phone";
}
if(empty($error)){
    //register new user_name
    $hashed_pass = password_hash($password,algo:PASSWORD_DEFAULT);
    require('mysql_connect.php');

    $query = "INSERT INTO user(userID, firstName, lastName, email, password,dob,country,phone,registerDate)";
    $query .= "VALUES('',?,?,?,?,?,?,?,NOW())";

    $q = mysqli_stmt_init($con);

    mysqli_stmt_prepare($q,$query);

    mysqli_stmt_bind_param($q,'sssssss',$firstName, $lastName,$email,$hashed_pass,$dob,$country,$phone);

    mysqli_stmt_execute($q);

    if(mysqli_stmt_affected_rows($q)==1){
        header("Location: login1.php");
        exit();
    }else{
        print "Record inserted failed";
    }

}else{
    echo 'not Validate';
}