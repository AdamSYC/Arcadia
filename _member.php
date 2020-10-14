<?php require __DIR__ . '/Connect_db.php';

$pageName = '_member.php';

// $t_sql = "SELECT COUNT(member_id) FROM `members`";

// 以下讀取資料庫
if(isset($_SESSION['members'])){
    $sql = "SELECT * FROM members where member_id=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_SESSION['members']['member_id']]);
    $r = $stmt->fetch();
}
?>

<?php
    $title="會員中心";
?>

<?php include __DIR__. '/__head.php'?>
<?php include __DIR__. '/__body.php'?>
<?php include __DIR__. '/__nav-forotherpage2.php'?>

<?php include __DIR__. '/_member_page-backup2.php'?>
<!----- 大頭照 ----->
<script>
    function previewFile() {
        const preview = document.querySelector('.img');
        const file = document.querySelector('input[type=file]').files[0];
        const reader = new FileReader();
        console.log(reader)

        reader.addEventListener("load", function() {
            // convert image file to base64 string
            preview.src = reader.result;
        }, false);

        if (file) {
            reader.readAsDataURL(file);
        }
    }
</script>
<!----- 大頭照 ----->

<?php include __DIR__. '/__footer.php'?>
<?php //include __DIR__. '/__script.php'?>


<?php include __DIR__. '/__end.php'?>