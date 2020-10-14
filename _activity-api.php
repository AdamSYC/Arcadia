<?php
session_start();

$_SESSION['active'] = $_GET;

// $output['price']= $_SESSION['price'];
// $output['quantity']= $_SESSION['quantity'];

// $output['suitetitle']= $_SESSION['suitetitle'];


$output['ok']= true;
$output['getData']= $_GET;
$output['active']= $_GET;


echo json_encode($output ,JSON_UNESCAPED_UNICODE);