 <!-- ---------------------------------------------大家都有的-------------------------------------------------- -->
 <!-- Optional JavaScript -->
 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
 <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->

 <!-- 網頁動態視差滾動PARALLAX 芷彤 0817-->
<script src="https://cdn.jsdelivr.net/npm/simple-parallax-js@5.5.1/dist/simpleParallax.min.js"></script>
<!-- 網頁動態視差滾動PARALLAX 芷彤 0817-->

 <!-- 網頁動態AOS 芷彤 0817 -->
 <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
 <!-- 網頁動態AOS 芷彤 0817 -->



 <!-- ---------------------------------------------大家都有的-------------------------------------------------- -->

 <!-- ---------------------------------------------個別-------------------------------------------------- -->

 <!-- ---------------------------------------2020/08/10 世佑新增 個別的東西，和資料庫有關的會用到以下------------------------------------------------ -->
 <script src="lib/jquery-3.5.1.js"></script>
 <script src="bootstrap/js/bootstrap.js"></script>
 <!-- 彈出提示視窗 -->
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
 

 <!-- ---------------------------------------2020/08/10 世佑新增 個別的東西，和資料庫有關的會用到以上------------------------------------------------ -->

 <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/js/swiper.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>


 <!-- 共用的navbar -->
 <script>
    //  let navPosition = $(".x2").offset().top;
    //  console.log(navPosition)

    //  $(window).scroll(function() {
    //      let scrollTop = $(this).scrollTop()
    //      if (scrollTop >= 400) {
    //          $(".x2").addClass("active")
    //          // $(".x11").addClass("white")
    //      } else {
    //          $(".x2").removeClass("active")
    //          // $(".x11").removeClass("white")
    //      }

    //  })
    //  $(window).scroll(function() {
    //      let scrollTop = $(this).scrollTop()
    //      if (scrollTop >= 300) {

    //          $(".x11").addClass("white")
    //      } else {

    //          $(".x11").removeClass("white")
    //      }

    //  })
    //  $(window).scroll(function() {
    //      let scrollTop = $(this).scrollTop()
    //      if (scrollTop >= 300) {

    //          $(".webarcadia").addClass("show")
    //      } else {

    //          $(".webarcadia").removeClass("show")
    //      }

    //  })
 </script>
 <!-- 共用的navbar -->


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

<!-- 網頁動態AOS SCRIPT FUNCTION 芷彤 0817-->
<script>
  AOS.init();
  </script>
<!-- 網頁動態AOS SCRIPT FUNCTION 芷彤 0817-->

