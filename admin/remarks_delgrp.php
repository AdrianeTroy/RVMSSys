<?php
include('../dbcon.php');
if(isset($_GET['deleteid']))
{
    $id = $_GET['deleteid'];
    $sql = "DELETE FROM group_requests WHERE id = $id"; 
    $conn->query($sql);

    if($conn) {
        header("Location: web-tab-schedules-group.php");
    } else {
        die(mysqli_error($conn));
    }
}   
?>