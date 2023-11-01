<?php
session_start();

$folder = '../model/';
$userFileName = $folder . $_SESSION['userId'] . '.txt';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $currentPassword = $_POST['currentPassword'];
    $newPassword = $_POST['newPassword'];
    $retypeNewPassword = $_POST['retypeNewPassword'];

    if ($newPassword !== $retypeNewPassword) {
        echo "do not match.";
    } else {
        $fileData = file_get_contents($userFileName);
        $userData = explode("\n", $fileData);
        $userData[1] = "Password: " . $newPassword;
        $updatedData = implode("\n", $userData);
        file_put_contents($userFileName, $updatedData);
        echo "successfully updated .";
        header("Location: ../view/changepassword.php");
    }
}
?>