<?php
require '../controller/con_c.php';
if(!empty($_SESSION["id"]))
{
    $id = $_SESSION["id"];
    $result = mysqli_query($conn,"SELECT * FROM user WHERE id=$id");
    $row=mysqli_fetch_assoc($result);
}
else 
{
        header("Location: model/login_m.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <h1>Welcome,<?php echo " "; echo $row["name"];?> </h1>
    <a href="../view/job_apply_v.html">ApplyJob</a><br>
    <a href="../model/logout_m.php">Logout</a>
</body>
</html>