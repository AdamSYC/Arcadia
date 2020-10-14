<!-- 每一頁連接php都要加此段 -->
<?php require __DIR__ . '/Connect_db.php';

$pageName = '_about.php';

// $t_sql = "SELECT COUNT(member_id) FROM `members`";

// 以下讀取資料庫
if(isset($_SESSION['members'])){
    $sql = "SELECT * FROM members where member_id=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_SESSION['members']['member_id']]);
    $r = $stmt->fetch();
}
?>
<!-- 每一頁連接php都要加此段 -->

<?php
    $title="訂房頁面";
?>
<?php include __DIR__. '/_activity-head.php'?>
<?php include __DIR__. '/__body.php'?>
<?php include __DIR__. '/__nav.php'?>
<?php include __DIR__. '/_booking_page.php'?>

<?php include __DIR__. '/__footer.php'?>

<?php include __DIR__. '/__end.php'?>