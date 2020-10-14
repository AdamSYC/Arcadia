<!-- 登入判斷用的 -->
<?php require __DIR__ . '/Connect_db.php';

$pageName = '_logout.php';

// $t_sql = "SELECT COUNT(member_id) FROM `members`";

// 以下讀取資料庫
$sql = "SELECT * FROM members where member_id=?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$_SESSION['members']['member_id']]);
$r = $stmt->fetch();

?>
<!-- 登入判斷用的 -->

<?php
session_start();

// 清除某個 session 變數
unset($_SESSION['members']);

// session_destroy(); // 此用來清除所有的 session

header('Location: _about.php');


?>