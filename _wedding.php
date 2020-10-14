<!-- 2020/08/10新增 連接php資料庫 -->
<?php 
require __DIR__ . '/Connect_db.php';

?>
<!-- 2020/08/10新增 連接php資料庫 -->

<?php
    $title="WEDDING";
?>


<?php include __DIR__. '/__head.php'?>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<?php include __DIR__. '/__body.php'?>
<?php include __DIR__. '/__nav.php'?>
<?php include __DIR__. '/_wedding_page.php'?>
<?php include __DIR__. '/__footer.php'?>



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