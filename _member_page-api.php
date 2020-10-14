<?php
require __DIR__. '/Connect_db.php';

$output = [
    'success' => false,
    'code' => 0,
    'error' => '',
    'postData' => $_POST
];

// echo json_encode($output, JSON_UNESCAPED_UNICODE);
// return;

if(empty($_POST['lastname'])){  //! isset和 empty
    $output['error'] = '沒有新的姓氏資料';
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
    exit;
}

//增加手機欄位的資料判斷格式
// $mobile = $_POST['mobile'];
// $mobile = implode('', explode('-', $mobile)); 
//如果使用者在輸入手機號碼時，
//使用了'-'，則在匯入php資料庫時自動刪除'-'


$sql = "UPDATE `members` SET
    `lastname`=?,
    `name`=?,
    `birth`=?,
    `country`=?
    WHERE `member_id`=?";

$stmt = $pdo->prepare($sql);


$stmt->execute([
    $_POST['lastname'],
    $_POST['name'],
    $_POST['birth'],
    $_POST['country'],
    $_SESSION['members']['member_id'],
]);

// $stmt->execute([
//     'test',
//     'go',
//     '2020-05-01',
//     'Taiwan',
//     1,
// ]);


if($stmt->rowCount()){
    $output['success'] = true;
}

echo json_encode($output, JSON_UNESCAPED_UNICODE);

?>