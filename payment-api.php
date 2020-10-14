<?php
require __DIR__. '/Connect_db.php';

$output = [
    'success' => false,
    'code' => 0,
    'error' => '',
    'postData' => $_POST
];

if(empty($_POST['HolderName']) or empty($_POST['CardNumber'])){  //! isset和 empty
    $output['error'] = '您輸入的資料不足';
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
    exit;
}


// $sql = "SELECT * FROM members WHERE email=? AND password=SHA1(?)"; 20200717新增改為入下，只取得id, email, nickname
$sql = "SELECT `member_id`, `email`, `name` FROM members WHERE email=? AND password=SHA1(?)";

$stmt = $pdo->prepare($sql);
$stmt->execute([
    $email,
    // $email['email'],
    $_POST['password'],
]);

$row = $stmt->fetch();

if(! empty($row)){
    $output['success'] = true;
    unset($row['password']);
    $_SESSION['members'] = $row;
    // 登入後取得members裡面該筆資料的row值
}

echo json_encode($output, JSON_UNESCAPED_UNICODE);

?>