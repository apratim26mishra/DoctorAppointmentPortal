<?php
include_once '../assets/conn/dbconnect.php';

$appid = $_POST['id'];
$delete = mysqli_query($con,"DELETE FROM appointment WHERE appId=$appid");

?>
