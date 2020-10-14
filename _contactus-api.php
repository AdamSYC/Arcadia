<?php
require __DIR__. '/Connect_db.php';

// echo json_encode($_POST, JSON_UNESCAPED_UNICODE);
// return;


$output = [
    'success' => false,
    'code' => 0,
    'error' => '',
    'postData' => $_POST
];

if(empty($_POST['email']) or empty($_POST['message'])){  //! isset和 empty
    $output['error'] = '您輸入的資料不足';
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
    exit;
}

$email = strtolower(trim($_POST['email'])); //將使用者輸入的email統一轉成小寫後，再將前後有空白的話去掉

// $sql = "SELECT * FROM members WHERE email=? AND password=SHA1(?)"; 20200717新增改為入下，只取得id, email, nickname
$sql = "SELECT `id` FROM contactus WHERE email=?";

$stmt = $pdo->prepare($sql);
$stmt->execute([ $email ]);

$row = $stmt->fetch();
// if(!empty($row)){
//         $output['error'] = '此 Email 已註冊';
//         echo json_encode($output, JSON_UNESCAPED_UNICODE);
//         exit;
//     }
    // print_r($stmt->fetch());
    $stmt->closeCursor();
    
    // $hash = md5($email. rand());
    
    $sql = "INSERT INTO `contactus`(
                `fullname`, `email`, `message`, `create_date`) VALUES (
                ?, ?, ?, NOW())"; //密碼輸入後轉成亂碼，註冊的功能SHA1
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        $_POST['name'],
        $email,
        $_POST['message'],
        ]);
    
    
    if($stmt->rowCount()==1){
        $output['success'] = true;
        $output['id'] = $pdo->lastInsertId();
        // 要自動登入寫在這裡
    }
    echo json_encode($output, JSON_UNESCAPED_UNICODE);

?>