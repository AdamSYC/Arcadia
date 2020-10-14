
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
<!-- 每一頁連接php都要加此段，以上 -->

<?php
    $title="ABOUT";
?>
<?php include __DIR__. '/__head.php'?>
<?php include __DIR__. '/__body.php'?>
<?php include __DIR__. '/__nav.php'?>
<?php include __DIR__. '/_about_page.php'?>

<!-- <php include __DIR__. '/__script.php'?> -->




<?php include __DIR__. '/__footer.php'?>

<!----- START 時鐘的CLOCK SCRIPT ----->
<script>
 Number.prototype.pad = function (n) {
            for (var r = this.toString(); r.length < n; r = 0 + r);
            return r;
        };

        function updateClock() {
            var now = new Date();
            var milli = now.getMilliseconds(),
                sec = now.getSeconds(),
                min = now.getMinutes(),
                hou = now.getHours(),
                mo = now.getMonth(),
                dy = now.getDate(),
                yr = now.getFullYear();
            var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
            var tags = ["mon", "d", "y", "h", "m", "s", "mi"],
                corr = [months[mo], dy, yr, hou.pad(2), min.pad(2), sec.pad(2), milli];
            for (var i = 0; i < tags.length; i++)
                document.getElementById(tags[i]).firstChild.nodeValue = corr[i];
        }

        function initClock() {
            updateClock();
            window.setInterval("updateClock()", 1);
        }
</script>
<!----- // END 時鐘的CLOCK SCRIPT ----->

<?php include __DIR__. '/__end.php'?>
