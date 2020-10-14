<style>
 
    .landing{
        background-image: url("/img/ocean-one-bed.jpg");
        background-size: cover;
        background-position: center center;
        height: 800px;
        display: flex;
        align-items: center;
        padding: 0 0 0 400px;
        
       
    }
   
  
    .landnumber{
        -webkit-text-stroke: 3px #EB9851; /* width and color */
        font-weight: bold;

        color: transparent;
        font-size: 100px;
        
    }
    

        .book{
            background: #EB9851;
            color: white;
            padding: 12px 50px 12px 50px;
            font-family: 'Crimson Text', serif;
            font-size: 18px;
            letter-spacing: 0.03em;
     
        }
        .book:hover{
            text-decoration: none;
            background: #eeb27d;
        }
        .bookbtn{
            margin:  60px 0 0 0;
        }
       

    .blank{
        text-align: center;
        height: 320px;
        

    }
    .discoverbtn{
        
        position: relative;

    }
    .discover{
        border-radius:100% ;
        background: #D7E6E8;
            color: white;
            padding: 60px 24px 60px 24px;
            font-family: 'Crimson Text', serif;
            font-size: 25px;
            font-weight: bold;
            letter-spacing: 0.03em;
            z-index: -50;
            

    }
    .discover:hover{
        text-decoration: none;
        color: white;

    }
    .line{
        height: 70px;
        width: 2px;
        background: white;
        margin: 0 auto;
       
        position: absolute;
        bottom: -230%;
        left: 50%;
    }
    .suite{
        height: 1080px;
        background:#D7E6E8 ;
        justify-content: center;
        
        
        padding: 105px 0 0 0;
        
    }
    .h3chi {
       
        color: #09839C;
    }
    .wrapper1{
        max-width: 1196px;
        justify-content: center;
        
       
        
        margin: 0 auto;
       
        
    }
    .h3eng {
        color:#09839C ;
    }
    .h4eng{
        color: #5D5D5D;
        font-weight: bold;

    }
    .line1{
        width: 370px;
        height: 1px;
        background: #5D5D5D;
    }
    .roomImg{
        display: flex;
    }
    .roomTitle{
        text-align: center;
        margin: 0 0 80px 0;
    }
    .info{
        padding: 70px 0 0 80px;
    }
    .infobox{
        display: flex;

    }
    .roomPic{
        width: 740px;
        display: flex;
        padding: 16px 0 0 0;
        justify-content: space-between;
    }
    .roomDetail{
        height: 800px;
        padding: 100px 0 0 0;
        justify-content: center;
    }
    .wrapper2{
        max-width: 630px;
        
        margin: 0 auto;
        
    }
    .detailBox{
        display: flex;
        justify-content: space-between;
    }
    .detail-li{
        margin: 40px 0 40px 0px;
        list-style: none;
    }
    .detail-li2{
        margin: 45px 0 40px 0px;
        list-style: none;
    }
    .room-icon{
        margin: 0 20px 0 0 ;
    }
    .maylike{
        height: 880px;
        background:#D7E6E8 ;
        padding: 100px 0 0 0;
        
    }
    .h4green{
        color: #09839C;
        
    }
    .cardLine{
        height: 1px;
        width: 292px;
        background:#5D5D5D ;
        margin: 0 0 26px 0;
    }
    .card1{
        width: 381px;
        background: white;
        
       
    }
    .cardbox{
        padding: 38px 50px 27px 40px;

    }
    .iconBox{
        display: flex;
        justify-content: flex-start;

    }
    .overflowBtn{
        background: transparent;
        border: 1px solid #EB9851;
        padding: 8px 50px 8px 50px;
        color: #EB9851;
        font-family: 'Crimson Text', serif;
        font-size: 18px;
        letter-spacing: 0.03em;
        text-align: center;
        margin: 25px 0 0 0;
        
      }
      .cardIcon{
          margin: 0 12px 0 0;
      }
      .iconText{
          margin: 0 45px 0 0 ;
      }
      .wrapper3{
          max-width: 1290px;
          display: flex;
          margin: 0 auto;
          justify-content: space-between;
      }


   
    /* -----------------discoverButton------------------ */
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
        display: flex;
        flex-direction: column;
        align-items: center;
        position: relative;
        margin-top: 700px;
        /* display: block;
	position: absolute;
	left: 0;
	right: 0;
	text-align: center; */
    }

    .discoverText {
        /* display: inline-block; */
        /* line-height: 18px; */
        position: absolute;
        top: 65px;
        z-index: 1;
        font-size: 20px;
        font-weight: 800;
        font-family: 'Crimson Text', serif;
        color: #ffffff;
        /* font-family: "proxima-nova", "Helvetica Neue", Helvetica, Arial, sans-serif; */
        letter-spacing: 3px;
    }

    /* .scroll-btn > *:hover,
.scroll-btn > *:focus,
.scroll-btn > *.active {
	color: #ffffff;
} */
    /* .scroll-btn > *:hover,
.scroll-btn > *:focus,
.scroll-btn > *:active,
.scroll-btn > *.active {
	opacity: 0.8;
	filter: alpha(opacity=80);
} */
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
        background: #D7E6E8;
    }

    .scroll-btn .mouse>* {
        position: absolute;
        display: block;
        top: 100%;
        left: 50%;
        width: 2px;
        height: 70px;
        margin: 20px 0 0 0;
        background: white;
        /* border-radius: 50%; */
        -webkit-animation: ani-mouse 2.5s linear infinite;
        -moz-animation: ani-mouse 2.5s linear infinite;
        animation: ani-mouse 2.5s linear infinite;
    }

    @media screen and (max-width: 375px) {
        .scroll-btn{
            display: none;
        }
    }


</style>
<div class="landing">
        <div class="landbox">
        <span class="landnumber">01</span><br>
        <span class="h2chi">海景雙人套房</span><br>
        
        <div class="scroll-btn">
            <div class="discoverText">Discover</div>
            <div class="mouse">
                <div class="discoverLine">
                </div>
            </div>
        </div>
            
        
        </div>
        
    </div>
    <div class="blank">
    <div class="discoverbtn"><a class="discover" href="">Discover</a>
    <div class="line"></div></div>
</div>
<div class="suite">
    <div class="roomTitle">
                <span class="h3chi">海景雙人別墅</span>
            </div> 
    <div class="wrapper1"> 
        <div class="infobox">
            <div class="roomImg">
                    <img src="/room/img/Placement Area.png" alt="">
            </div>
       
        <div class="info">
                <span class="h4eng" >Info</span>
                <div class="line1"></div>
                <span class="h5chi" >室內空間</span><br>
                <span class="bodytextchi">雙人海景房的別墅寬敞且舒適，
                    設有帶休息區和工作站的特大號天篷床和三扇窗戶
                    使每間臥室既通風又寧靜。 
                    
                    往窗外看會發現自己的私人瀑布池和休閒區，
                    並享有壯觀的海灘美景。
                    明亮熱情橘色系，峇里島風情無限延伸至起居空間中，
                    室內樑柱以厚實櫸木打造，坐擁優雅而自然的空間氛圍，
                    浴室採落地窗設計，引入全綠意戶外庭園景緻。
                    </span><br>
                    <span class="h5chi">戶外環境
                    </span><br>
                    <span class="bodytextchi">原木發呆亭、籐質鞦韆、露天泳池、
                        露天溫水按摩池1座、露天泡澡池1座，
                        充滿綠意的熱帶植栽環繞，
                        巧妙的讓房客保有完美隱私感，大尖山美景盡在眼前。</span>
        </div>
    </div>
        <div class="roomPic">
            <img src="/img/Placement Area-1 .png" alt="">
            <img src="/img/Placement Area-2 .png" alt="">
            <img src="/img/Placement Area-3.png" alt="">
        </div>
    </div>
</div>
<div class="roomDetail">
    
    <div class="roomTitle">
        <span class="h3eng">Room Detail</span>
        
    </div> 
    <div class="wrapper2">
        <div class="detailBox">
<ul class="detail1">
            <li class="detail-li"><img class="room-icon" src="/icon/fridge.svg" alt="" width=""><span class="bodytextchi">冰箱、免費Mini bar (一次)</span> </li>
            <li  class="detail-li"><img class="room-icon" src="/icon/breakfast.svg" alt="" width="30px"><span class="bodytextchi">膠囊咖啡機
            </span> </li>
            <li  class="detail-li"><img class="room-icon" src="/icon/tea-cup.svg" alt="" width="30px"><span class="bodytextchi">熱水壺、免費礦泉水、咖啡</span> </li>
            <li  class="detail-li"><img class="room-icon" src="/icon/furniture-and-household.svg" alt="" width="30px"><span class="bodytextchi">沐蘭SPA沐浴用品</span> </li>
            <li  class="detail-li"><img class="room-icon" src="/icon/signal.svg" alt="" width="30px"><span class="bodytextchi">免治馬桶</span> </li>
          
        </ul>
        <ul class="detail2">
            <li  class="detail-li2"><img class="room-icon" src="/icon/newspaper.svg" alt=""><span class="bodytextchi">每日早報</span> </li>
            <li  class="detail-li2"><img class="room-icon" src="/icon/wifi.svg" alt="" width="30px"><span class="bodytextchi">無線免費上網</span> </li>
            <li  class="detail-li2"><img class="room-icon" src="/icon/monitor.svg" alt="" width="30px"><span class="bodytextchi">平面LCD電視、中英電視節目</span> </li>
            <li  class="detail-li2"><img class="room-icon" src="/icon/air-conditioner.svg" alt=""><span class="bodytextchi">自動空調控制裝置
            </span> </li>
            <li  class="detail-li2"><img class="room-icon" src="/icon/locker.svg" alt="" width="30px"><span class="bodytextchi">電話、電子保險箱
            </span> </li>
          
        </ul>
    </div>
   
</div> 
</div>
<div class="maylike">
    
        <div class="roomTitle">
            <span class="h3eng">You may also like</span>
            
        </div> 
        <div class="wrapper3">
        <div class="card1">
            <img src="/img/card1.png" alt=""><br>
        <div class="cardbox">
                <span class="h4eng h4green ">沙灘雙人別墅</span>
                <div class="cardLine"></div>
        <div class="iconBox">
            <img class="cardIcon" src="/icon/measured.svg" alt="" width="30px">
            <span class="bodytextchi iconText">35mm</span>
            <img class="cardIcon" src="/icon/user (2).svg" alt="">
            <span class="bodytextchi iconText">X2</span>
        </div>
        <div class="overflowBtn">Read More</div>

        </div>

        </div>
        <div class="card1">
            <img src="/img/card1.png" alt=""><br>
        <div class="cardbox">
                <span class="h4eng h4green ">沙灘雙人別墅</span>
                <div class="cardLine"></div>
        <div class="iconBox">
            <img class="cardIcon" src="/icon/measured.svg" alt="" width="30px">
            <span class="bodytextchi iconText">35mm</span>
            <img class="cardIcon" src="/icon/user (2).svg" alt="">
            <span class="bodytextchi iconText">X2</span>
        </div>
        <div class="overflowBtn">Read More</div>

        </div>

        </div>
        <div class="card1">
            <img src="/img/card1.png" alt=""><br>
        <div class="cardbox">
                <span class="h4eng h4green ">沙灘雙人別墅</span>
                <div class="cardLine"></div>
        <div class="iconBox">
            <img class="cardIcon" src="/icon/measured.svg" alt="" width="30px">
            <span class="bodytextchi iconText">35mm</span>
            <img class="cardIcon" src="/icon/user (2).svg" alt="">
            <span class="bodytextchi iconText">X2</span>
        </div>
        <div class="overflowBtn">Read More</div>

        </div>

        </div>
    </div>

    </div>