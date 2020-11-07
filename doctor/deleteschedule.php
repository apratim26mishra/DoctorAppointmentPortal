<?php
include_once '../assets/conn/dbconnect.php';

$id = $_POST['id'];

$delete = mysqli_query($con,"DELETE FROM doctorschedule WHERE scheduleId=$id");
?>
