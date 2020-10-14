<?php
require __DIR__. '/Connect_db.php';

$output = [
    'success' => false,
    'code' => 0,
    'error' => '',
    'postData' => $_POST
];


if(empty($_POST['newpassword'])){  //! isset和 empty
    $output['error'] = '沒有新的密碼資料';
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
    exit;
}

//增加手機欄位的資料判斷格式
// $mobile = $_POST['mobile'];
// $mobile = implode('', explode('-', $mobile)); 
//如果使用者在輸入手機號碼時，
//使用了'-'，則在匯入php資料庫時自動刪除'-'


$sql = "UPDATE `members` SET
    -- `password`=SHA1(?)
    `password`=SHA1(?)
    WHERE `member_id`=?";
    // AND `password`=SHA1(?)";

$stmt = $pdo->prepare($sql);
$stmt->execute([
    $_POST['confirmpassword'],
    $_SESSION['members']['member_id'],
]);

if($stmt->rowCount()){
    $output['success'] = true;
}

echo json_encode($output, JSON_UNESCAPED_UNICODE);

?>