<?php
include("connection.php");
$id = $_GET['id'];
$sql="UPDATE `application` SET stage='Εγγεκριμένη' WHERE `application_id`= $id";
$result = mysqli_query($conn, $sql);
if ($result){
    $com= $_GET['com'] ;
    header("Location: com_app_control.php?msg=Record approved successfully&id=$com");
}
else{
    echo "Failed: " . mysqli_error($conn);
}
?>