<?php

    $currentPassword = $_REQUEST['current_password'];
    $newPassword = $_REQUEST['new_password'];
    $retypedPassword = $_REQUEST['retyped_password'];

    if ($newPassword == $currentPassword) {
        echo "New password cannot be the same";
    } else {
    
        if ($newPassword == $retypedPassword) {
        
            echo "updated successfully!";
        } else {
            echo "New password and new password dont match";
           
        }
    }
?>