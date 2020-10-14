<!-- 每一頁連接php都要加此段 -->
<?php require __DIR__ . '/Connect_db.php';

$pageName = '_roomDetail1.php';

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
    $title="海景四人別墅";
?>
<?php include __DIR__. '/__head.php'?>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<?php include __DIR__. '/__body.php'?>
<?php include __DIR__. '/__nav.php'?>
<?php include __DIR__. '/_roomDetail3_page.php'?>
<?php include __DIR__. '/__footer.php'?>
<?php //include __DIR__. '/__script.php'?>
<script>

            function currentDiv(n) {
                showDivs(slideIndex = n);
            }

            function showDivs(n) {
                var i;
                var x = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("demo");
                if (n > x.length) { slideIndex = 1 }
                if (n < 1) { slideIndex = x.length }
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
                }
                x[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " w3-opacity-off";
            }
      
        </script>
<?php include __DIR__. '/__end.php'?>




