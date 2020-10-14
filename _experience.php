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
$title="EXPERIENCE";

?>
<?php include __DIR__. '/__head.php'?>
<?php include __DIR__. '/__body.php'?>
<?php include __DIR__. '/__nav.php'?>
<?php include __DIR__. '/_experience_page.php'?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script>
$('document').ready(function () {
  tabslider("tab1");
  tabslider("tab2");
  tabslider("tab3");
  tabslider("tab4");
});

function tabslider(id) {
  //add class 'active-tab' to the first link
  $(`#${id} .carousel-nav button`).first().addClass("active-tab");

  $(`#${id} .carousel-nav button`).click(function () {
    var $this = $(this),
      $siblings = $this.parent().children(),
      position = $siblings.index($this);

    $(`#${id} .carousel-nav button`).removeClass('active-tab').eq(position).addClass('active-tab');

    if (position == 1) {
      $(`#${id} .slide-belt`).animate({ "left": "-100%" }, 200);
    } else if (position == 2) {
      $(`#${id} .slide-belt`).animate({ 'left': '-200%' }, 200);
    } else {
      $(`#${id} .slide-belt`).animate({ 'left': '0%' }, 200);
    }


  });


}
</script>

<?php include __DIR__. '/__footer.php'?>
<?php // include __DIR__. '/__script.php'?>
<?php include __DIR__. '/__end.php'?>