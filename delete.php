<?php
include("connection.php");
$id = $_GET['id'];


$sql="DELETE FROM `application` WHERE application_id = $id";
$result = mysqli_query($conn, $sql);
if ($result){
    header("Location: std_app_control.php?msg=Record deleted successfully");
}
else{
    echo "Failed: " . mysqli_error($conn);
}
?>

