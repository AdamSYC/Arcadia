<!-- 每一頁連接php都要加此段 -->
<?php require __DIR__ . '/Connect_db.php';

$pageName = '_facility.php';

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
    $title="THE ARCADIA RESORT";
?>
<?php include __DIR__. '/__head.php'?>
<?php include __DIR__. '/__body.php'?>
<?php include __DIR__. '/__nav.php'?>
<?php include __DIR__. '/_index_page.php'?>
<!-- 網頁動態視差滾動PARALLAX SCRIPT FUNCTION 芷彤 0817-->
<script>
    var parallaxPic1 = document.getElementsByClassName('parallaxPic1');
new simpleParallax(parallaxPic1, {
	delay: .6,
	transition: 'cubic-bezier(0,0,0,5)'
});

var parallaxPic2 = document.getElementsByClassName('parallaxPic2');
new simpleParallax(parallaxPic2, {
	orientation: 'right'
});

</script>
<!-- 網頁動態視差滾動PARALLAX SCRIPT FUNCTION 芷彤 0817-->

<?php include __DIR__. '/__footer.php'?>
<?php //include __DIR__. '/__script.php'?>
<?php include __DIR__. '/__end.php'?>
