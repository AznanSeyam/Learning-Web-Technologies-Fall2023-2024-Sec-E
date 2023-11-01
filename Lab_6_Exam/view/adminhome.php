<?php
include '../controller/checksession.php';

$folder = '../model';
$userFileName = $folder . $_SESSION['userId'] . '.txt';

if (file_exists($userFileName)) {
    $fileData = file_get_contents($userFileName);
    $userData = explode("\n", $fileData);
    $name = explode(": ", $userData[2])[1];
}
?>

<center>
    <h1>Welcome <?php echo $name; ?>!</h1>
    <a href="prof.php">Profile</a>
    <br/>
    <a href="changepass.php">Change Pass</a>
    <br/>
    <a href="viuse.php">View Userslists =</a>
    <br/>
    <a href="../controller/checklogout.php">Logout</a>
</center>