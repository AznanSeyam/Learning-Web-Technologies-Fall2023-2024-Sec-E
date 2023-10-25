<?php
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    if (!preg_match('/^[a-zA-Z0-9._-]{2,}$/', $username)) {
        echo "Invalid Username format";
    } 

    else if (strlen($password) < 8 || !preg_match('/[@#$%]/', $password)) {
        echo "Invalid Password format";
    } else {
        echo "Successful!";
    } 
?>