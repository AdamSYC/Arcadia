<style>

/* discorverbutton */
@-webkit-keyframes ani-mouse {
      0% {
      opacity: 1;
      top: 55%;
      }
      15% {
      opacity: 1;
      top: 60%;
      }
      50% {
      opacity: 1;
      top: 65%;
      }
      100% {
      opacity: 1;
      top: 55%;
      }
      
  }
  
  @-moz-keyframes ani-mouse {
      0% {
      opacity: 1;
      top: 55%;
      }
      15% {
      opacity: 1;
      top: 60%;
      }
      50% {
      opacity: 1;
      top: 65%;
      }
      100% {
      opacity: 1;
      top: 55%;
      }
  }
  @keyframes ani-mouse {
      0% {
      opacity: 1;
      top: 55%;
      }
      15% {
      opacity: 1;
      top: 60%;
      }
      50% {
      opacity: 1;
      top: 65%;
      }
      100% {
      opacity: 1;
      top: 55%;
      }
  }
   .scroll-btn {
    margin: 60vh auto;
       display: flex;
       flex-direction: column;
      align-items:center ;
      position: relative;

  }
  .discoverText{

      position: absolute;
      top:65px;
      z-index: 1;
      font-size: 20px;
      font-weight: 800;
      font-family: 'Crimson Text', serif;
      color: #ffffff;
      letter-spacing: 3px;
  }

  .scroll-btn .mouse {
      position: relative;
      display: block;
      width: 150px;
      height: 150px;
      margin: 0 auto 20px;
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
      /* border: 3px solid white; */
      border-radius: 50%;
      background:#D7E6E8 ;
      transform:scale(1,1);
      transition: all .5s ease-out;
  }

  .scroll-btn .mouse:hover{
      background: #c5e5e9;
      transform:scale(1.1,1.1);
      /* width: 160px;
      height: 160px; */

  } 


  .scroll-btn .mouse > * {
      position: absolute;
      display: block;
      top: 100%;
      left: 50%;
      width: 1px;
      height: 70px;
      margin: 20px 0 0 0;
      background: white;
      border: none;
      /* border-radius: 50%; */
      -webkit-animation: ani-mouse 2.5s linear infinite;
      -moz-animation: ani-mouse 2.5s linear infinite;
      animation: ani-mouse 2.5s linear infinite;
      transition: all 1s ease-out;
  }

  @media screen and (max-width: 375px) {
    .scroll-btn {
        display: none;
      }
}
/* discorverbutton */

    .wrapper1 {
        max-width: 1920px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;

    }

    .top {
        position: relative;
        background-image: url(img/4_roomDetail/roomOverview-room2_index.jpg);
        width: 100vw;
        height: 800px;
        background-size: cover;
        background-position: center center;
    }

    .title {
        position: absolute;
        top: 40%;
        left: 15%;
    }

    @media screen and (max-width: 375px) {
        .top {
            height: 450px;
        }
    }

   



    /* ---------------------------------------------------------- */

    .suiteRoom {
        max-width: 100%;
        background: #D7E6E8;
        justify-content: center;
        padding: 105px 0 0 0;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        padding-bottom: 100px;
    }

    @media screen and (max-width: 375px) {
        .suiteRoom {
            padding: 50px 0 0 0;
        }
    }

    .roomDetailImg {
        display: flex;
    }

    .infoRoom {
        padding: 70px 0 0 80px;
        max-width: 478px;
    }

    .infoboxRoom {
        display: flex;
        color:#5D5D5D;
    }

    .roomPic {

        max-width: 718px;
        display: flex;
        padding: 16px 0 0 0;
        justify-content: space-between;
    }

    .pic1 {
        max-width: 230px;
        max-height: 150px;
    }

    .line1Room {
        max-width: 370px;
        height: 1px;
        background: #5D5D5D;
    }

    @media screen and (max-width: 375px) {
        .roomDetailImg {
            display: flex;
            flex-direction: column;
        }

        .roomPic {
            display: none;

        }

        .infoRoom {
            display: flex;
            flex-direction: column;
            padding: 30px;
        }

        .infoRoom .h4eng {
            display: none;

        }

        .infoRoom .line1Room {
            display: none;
        }

    }

    /* ------------------------------------------------------ */
    .roomDetailFacility {
        height: 800px;
        max-width: 100%;
        padding: 100px 0 0 0;
        display: flex;
        align-items: center;
        flex-direction: column;

    }

    .roomWrapper2 {
        max-width: 630px;

        margin: 0 auto;

    }

    .rwdline {
        display: none;
    }

    .titleBox {
        align-items: center;
        justify-content: center;

    }

    @media screen and (max-width: 375px) {
        .rwdline {
            display: unset;
        }

        .roomWrapper2 {
            max-width: 100%;
            justify-content: center;
        }

        .rwdtitle {
            margin: 50px 0 0 0;
        }

        .roomDetailFacility {
            padding: 0;
        }

    }

    .detailBox {
        width: 500px;
        display: flex;
        justify-content: space-between;
    }

    .detail-li {
        margin: 40px 100px 40px 0px;
        list-style: none;
        display: flex;
    }

    .detail-li2 {
        margin: 45px 0 40px 0px;
        list-style: none;
        display: flex;
    }

    @media screen and (max-width: 375px) {

        .detailBox {
        width: 375px;
        display: flex;
        justify-content: start;
    }
        .detail-li {
        margin: 40px 0px 40px 0px;
        list-style: none;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    .detail-li2 {
        margin: 45px 0px 40px 0px;
        list-style: none;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;

    }
    }

    .room-icon {
        margin: 0 20px 0 0;
    }

    /* ------------------------------------------------------ */
    .maylike {
        background: #D7E6E8;
        padding: 100px 0 0 0;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .roomWrapper3{
        display: flex;
        flex-direction: row;
    }

    .moreRoom {
        max-width: 300px;
        height: 400px;
        display: flex;
        flex-direction: column;
        background: #ffffff;
        align-items: center;
        margin: 20px 20px 200px 20px;

    }


    .moreRoomPic {
        max-width: 300px;
        height: 280px;
    }

    .moreRoomPic img {
        object-fit: cover;
        width: 100%;
        height: 100%;
    }

    @media screen and (max-width: 375px) {
        .roomWrapper3{
        display: flex;
        flex-direction: column;
    }

    .moreRoom {
        max-width: 345px;
        height: 400px;
        display: flex;
        flex-direction: column;
        background: #ffffff;
        align-items: center;
        margin: 0 0 50px 0;
    }

    .moreRoomPic {
        margin-bottom: 20px;
        max-width: 345px;
        height: 280px;
    }

    .moreRoomPic img {
        object-fit: cover;
        width: 100%;
        height: 100%;
    }

    .moreRoomText{
        margin-bottom: 10px;
    }

    .roomTitle{
        margin-bottom: 30px;
    }

    }


</style>

<div class="wrapper1">
    <div class="top">
        <div class="title h2chi" data-aos="fade-right" data-aos-duration="2000" data-aos-offset="100" data-aos-easing="ease-in-out">
            <!-- <span class="landnumber">01</span><br> -->
            沙灘雙人別墅
        </div>
        <div class="scroll-btn">
            <div class="discoverText">Discover</div>
            <div class="mouse">
                <div class="discoverLine">
                </div>
            </div>
        </div>
    </div>

</div>


<div class="suiteRoom">

    <div class="infoboxRoom"  data-aos="fade-up">
        <div class="roomDetailImg">
            <div class="w3-content" style="max-width:600px">
                <img class="mySlides" src="img/4_roomDetail/room_5.jpg" style="width:100%">
                <img class="mySlides" src="img/4_roomDetail/room_6.jpg" style="width:100%;display:none">
                <img class="mySlides" src="img/4_roomDetail/room_7.jpg" style="width:100%;display:none">
                <!-- <img class="mySlides" src="img/4_roomDetail/room_4.jpg" style="width:100%;display:none"> -->

                <div class="w3-row-padding w3-section">
                    <div class="w3-col s4">
                        <img class="demo w3-opacity w3-hover-opacity-off" src="img/4_roomDetail/room_5.jpg" style="width:100%;cursor:pointer" onclick="currentDiv(1)">
                    </div>
                    <div class="w3-col s4">
                        <img class="demo w3-opacity w3-hover-opacity-off" src="img/4_roomDetail/room_6.jpg" style="width:100%;cursor:pointer" onclick="currentDiv(2)">
                    </div>
                    <div class="w3-col s4">
                        <img class="demo w3-opacity w3-hover-opacity-off" src="img/4_roomDetail/room_7.jpg" style="width:100%;cursor:pointer" onclick="currentDiv(3)">
                    </div>

                

                </div>
            </div>

            <div class="infoRoom">
                <span class="h3chi">房間資訊</span>
                <br>
                <div class="line1Room"></div>
                <span class="h5chi">室內空間</span><br>
                <span class="bodytextchi">雙人沙灘別墅有絕佳的觀景位置，21坪寬敞偌大的景觀套房，巧妙地以桌椅擺設區隔客廳休憩與床的空間，落地窗外即是壯麗的溪谷景緻，佐以潺潺流水之聲，端杯茶、坐在陽台與山水對望，奢侈地享受太魯閣的慢時間，感受峽谷的能量與大地的寵愛。
                </span><br>
                <br>
                <br>
                <span class="h5chi">戶外環境
                </span><br>
                <span class="bodytextchi">原木發呆亭、露天泳池、露天溫水按摩池1座、露天泡澡池1座規劃獨立的客廳與靜謐的住宿空間，營造低調奢華的住宿體驗，窗外即是著名的人文景緻—梅園，讓心靈感受那縷淡然生香的韻律，享受難得的清幽與寧靜！</span>
            </div>
        </div>
    </div>
</div>

<div class="roomDetailFacility"  data-aos="fade-up">
<!-- <img src="icon/4_roomDetail/room_watercolor.png" alt="" width=""> -->
    <div class="roomTitle">
        <br>
        <span class="h3chi" style="color: #09839C;">房間設施</span>
    </div>
    <div class="roomWrapper2">
        <div class="detailBox">
            <ul class="detail1">
                <li class="detail-li"><img class="room-icon" src="icon/4_roomDetail/fridge.svg" alt="" width=""><span class="bodytextchi">冰箱、免費飲料</span> </li>
                <li class="detail-li"><img class="room-icon" src="icon/4_roomDetail/breakfast.svg" alt="" width="30px"><span class="bodytextchi">膠囊咖啡機
                    </span> </li>
                <li class="detail-li"><img class="room-icon" src="icon/4_roomDetail/tea-cup.svg" alt="" width="30px"><span class="bodytextchi">熱水壺、礦泉水</span> </li>
                <li class="detail-li"><img class="room-icon" src="icon/4_roomDetail/furniture-and-household.svg" alt="" width="30px"><span class="bodytextchi">沐蘭沐浴用品</span> </li>
                <li class="detail-li"><img class="room-icon" src="icon/4_roomDetail/signal.svg" alt="" width="30px"><span class="bodytextchi">免治馬桶</span> </li>

            </ul>
            <ul class="detail2">
                <li class="detail-li2"><img class="room-icon" src="icon/4_roomDetail/newspaper.svg" alt=""><span class="bodytextchi">每日早報</span> </li>
                <li class="detail-li2"><img class="room-icon" src="icon/4_roomDetail/wifi.svg" alt="" width="30px"><span class="bodytextchi">無線免費上網</span> </li>
                <li class="detail-li2"><img class="room-icon" src="icon/4_roomDetail/monitor.svg" alt="" width="30px"><span class="bodytextchi">平面電視節目</span> </li>
                <li class="detail-li2"><img class="room-icon" src="icon/4_roomDetail/air-conditioner.svg" alt=""><span class="bodytextchi">自動空調控制
                    </span> </li>
                <li class="detail-li2"><img class="room-icon" src="icon/4_roomDetail/locker.svg" alt="" width="30px"><span class="bodytextchi">電子保險箱
                    </span> </li>

            </ul>
        </div>
        <br>
        <br>
        <div class="btnlistbox" style="width:100%">
                <div class="smallButton">
                    <li class="s_var_nav">
                        <div class="s_link_bg"></div>
                        <div class="s_link_title">
                            <a href="#"><span>Book Now!</span></a>
                        </div>
                    </li>
                </div>
            </div>
        </div>
    </div>
    
</div>



<div class="maylike">
    <div class="roomTitle">
        <span class="h3chi" style="color: #09839C;"  data-aos="fade-up">更多房型</span>
    </div>
    <!-- ------------------------------------- -->
    <div class="roomWrapper3" data-aos="fade-up">
        <div class="moreRoom" style="position:relative">
            <div class="moreRoomPic">
                <img src="img/4_roomDetail/room_2.jpg" alt="">
            </div>
            <div class="h5chi moreRoomText" style="color:#09839C">
                海景雙人別墅
               
            </div>
            <div class="btnlistbox" style="width:190px;">
                <div class="smallButton">
                    <li class="s_var_nav">
                        <div class="s_link_bg"></div>
                        <div class="s_link_title">
                            <a href="#"><span>Read More</span></a>
                        </div>
                    </li>
                </div>
            </div>
        </div>

        <div class="moreRoom" style="position:relative">
            <div class="moreRoomPic">
                <img src="img/4_roomDetail/room_9.jpg" alt="">
            </div>
            <div class="h5chi moreRoomText" style="color:#09839C">
                海景四人別墅
            </div>
            <div class="btnlistbox" style="width:190px">
                <div class="smallButton">
                    <li class="s_var_nav">
                        <div class="s_link_bg"></div>
                        <div class="s_link_title">
                            <a href="#"><span>Read More</span></a>
                        </div>
                    </li>
                </div>
            </div>
        </div>

        <div class="moreRoom" style="position:relative">
            <div class="moreRoomPic">
                <img src="img/4_roomDetail/room_13.jpg" alt="">
            </div>
            <div class="h5chi moreRoomText" style="color:#09839C">
                沙灘家庭別墅
            </div>
            <div class="btnlistbox" style="width:190px">
                <div class="smallButton">
                    <li class="s_var_nav">
                        <div class="s_link_bg"></div>
                        <div class="s_link_title">
                            <a href="#"><span>Read More</span></a>
                        </div>
                    </li>
                </div>
            </div>
        </div>

    </div>
</div>

</div>