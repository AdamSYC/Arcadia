<?php
session_start();


$_SESSION['order_rooms'] = $_GET;
$roomsPrice =  array_sum($_SESSION['order_rooms']['summary']);
$_SESSION['roomsPrice'] =$roomsPrice;
// $output['price']= $_SESSION['price'];
// $output['quantity']= $_SESSION['quantity'];

// $output['suitetitle']= $_SESSION['suitetitle'];



$output['ok']= true;
$output['getData']= $_GET;
$output['order_rooms']= $_GET;

echo json_encode($output ,JSON_UNESCAPED_UNICODE);
