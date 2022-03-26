<?php
$error = array();

$email = validate_input_email($_POST['email']);
if(empty($email)){
    $error[] = 'You forgot your email address';
}

$password = validate_input_text($_POST['password']);
if(empty($password)){
    $error[] = 'You forgot your password';
}

if(empty($error)){
    //sql query 
    $query = "SELECT userID, firstName,lastName,email,password,dob,country,phone,vkey FROM user WHERE email=?";
    $q = mysqli_stmt_init($con);
    mysqli_stmt_prepare($q,$query);

    //bind parameter
    mysqli_stmt_bind_param($q, 's', $email);

    mysqli_stmt_execute($q);

    $result = mysqli_stmt_get_result($q);

    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    if(!empty($row)){
        if(password_verify($password,$row['password'])){
            header("Location: dashboard.php");
            exit();
        }
    }else{
        print "Email or Password incorrect";
    }
}else{
    echo"Please Fill Out email and password to login";
}