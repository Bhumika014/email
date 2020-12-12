<?php
include 'header.php';
include 'config.php'; 
?>
<?php

include('config.php');
$id = $_GET['id'];
$sql = mysqli_query($conn, "update email set status = '0' where mailid='$id'");

echo ("<SCRIPT LANGUAGE='JavaScript'>
                    window.alert('Record  Delete Successfully!!')
                    window.location.href='view.php';
                    </SCRIPT>");
?>