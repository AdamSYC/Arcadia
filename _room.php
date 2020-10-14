
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
    $title="ROOM OVERVIEW";
?>
<?php include __DIR__. '/__head.php'?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/css/swiper.min.css">

<?php include __DIR__. '/__body.php'?>
<?php include __DIR__. '/__nav.php'?>
<?php include __DIR__. '/_room_page.php'?>
<?php include __DIR__. '/__footer.php'?>
<?php //include __DIR__. '/__script.php'?>
<!-- roomOverview -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/js/swiper.min.js"></script>


<script>
var timelineSwiper = new Swiper(".timeline .swiper-container", {
  direction: "vertical",
  loop: false,
  speed: 1600,
  pagination: ".swiper-pagination",
  mousewheel: {
            enable: true
        },
  paginationBulletRender: function (swiper, index, className) {
    var year = document
      .querySelectorAll(".swiper-slide")
      [index].getAttribute("data-year");
    return '<span class="' + className + '">' + year + "</span>";
  },
  paginationClickable: true,
  nextButton: ".swiper-button-next",
  prevButton: ".swiper-button-prev",
  breakpoints: {
    768: {
      direction: "horizontal"
    }
  }
});

</script>  
<!-- roomOverview -->

<?php include __DIR__. '/__end.php'?>