<?php session_start();

$_SESSION['member_name']='';
$_SESSION['member_id']='';
echo "<script> window.location.href='index.php'; </script>";
?>