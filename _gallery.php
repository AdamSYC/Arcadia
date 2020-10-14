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
$title = "GALLERY";
?>

<?php include __DIR__. '/__head.php'?>
<link rel="stylesheet" href="css/jquery.fancybox.css">
<?php include __DIR__ . '/__body.php'?>
<?php include __DIR__ . '/__nav.php'?>
<?php include __DIR__ . '/_gallery_page.php'?>
<?php include __DIR__ . '/__footer.php'?>
<?php //include __DIR__ . '/__script.php'?>

<script src="js/isotope.pkgd.min.js"></script>
<script src="js/jquery.fancybox.min.js"></script>

<script>
  $(function () {
    // Masonry Grid
    $(".grid").isotope({
      filter: "*",
      // itemSelector: '.grid-item',
      masonry: {
        columnWidth: 180,
        fitWidth: true, // When enabled, you can center the container with CSS.
        gutter: 30
      }
      // layoutMode: 'fitRows'
    });

    $(".filter a").click(function () {
      $(".filter .current").removeClass("current");
      $(this).addClass("current");

      var selector = $(this).data("filter");
      $(".grid").isotope({
        filter: selector
      });
      return false;
    });

    // Fancybox
    $(".fancybox").fancybox({
      helpers: {
        overlay: { locked: false }
      }
    });
  });
</script>
<?php include __DIR__. '/__end.php'?>