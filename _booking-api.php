<?php
session_start();

$_SESSION['checkindate'] = isset($_GET['checkindate']) ? $_GET['checkindate'] : '';
$_SESSION['checkoutdate'] = isset($_GET['checkoutdate']) ? $_GET['checkoutdate'] : '';

$_SESSION['persons'] = isset($_GET['persons']) ? $_GET['persons'] : '';


$checkindate = strtotime($_SESSION['checkindate']);
$checkoutdate = strtotime($_SESSION['checkoutdate']);
$_SESSION['days'] = [];
for($i=$checkindate; $i<$checkoutdate; $i+=86400 ){
    $_SESSION['days'][] = date('m/d', $i);


}




$output['checkindate']= $_SESSION['checkindate'];
$output['checkoutdate']= $_SESSION['checkoutdate'];
$output['persons']= $_SESSION['persons'];
$output['ok']= true;
$output['getData']= $_GET;
echo json_encode($output ,JSON_UNESCAPED_UNICODE);