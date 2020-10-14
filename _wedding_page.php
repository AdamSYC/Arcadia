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
        align-items: center;
        position: relative;

    }

    .discoverText {
        position: absolute;
        top: 65px;
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
        background: #D7E6E8;
        transform: scale(1, 1);
        transition: all .5s ease-out;
    }

    .scroll-btn .mouse:hover {
        background: #c5e5e9;
        transform: scale(1.1, 1.1);
        /* width: 160px;
      height: 160px; */

    }


    .scroll-btn .mouse>* {
        position: absolute;
        display: block;
        top: 100%;
        left: 50%;
        width: 3px;
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
        background-image: url(img/6_wedding/wedding_1index2.jpg);
        width: 100vw;
        height: 800px;
        background-size: cover;
        background-position: center center;
        /* z-index: -1; */
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


    .coverfit {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }




    /* ---------- Background Part1---------- */
    .BackgroundPart1 {
        max-width: 1000px;
        /* height: 864px; */
        /* background: white; */
        /* font-weight: bold; */
        display: flex;
        flex-direction: column;

    }

    .AlignText1 {
        margin: 200px 0 0 0;
        /* padding-top: 153px; */
        /* margin-left: 532px; */
        /* padding-left: 532px; */
        color: #09839C;
        text-align: left;

    }

    .AlignText2 {
        text-align: right;
        color: #09839C;
        /* margin-top: 60px; */
        /* padding-top: 60px; */
        /* margin-right: 514px; */
        /* padding-right: 514px; */
        margin: 0 0 100px 0;

    }

    .AlignTextM {
        display: none;
    }


    @media screen and (max-width: 375px) {
        .AlignTextM {
            margin-top: 50px;
            display: block;
            text-align: center;
            color: #09839C;
        }

        .BackgroundPart1,
        .AlignText1,
        .AlignText2,
        .AlignTextM {
            display: none;
        }
    }


    /* ---------- Background Part1---------- */


    /* ---------- BackgroundPart2---------- */
    .BackgroundPart2 {
        margin-top: 300px;
        width: 100vw;
        height: 500px;
        background: #D7E6E8;
    }

    @media screen and (max-width: 375px) {

        .BackgroundPart2 {
            margin: 250px 0 50px 0;
            width: 100vw;
            height: 300px;
            background: #D7E6E8;
        }
    }

    .Align-WeddingPart0 {
        display: flex;
        flex-direction: row;
        justify-content: center;
    }

    @media screen and (max-width: 375px) {
        .Align-WeddingPart0 {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 50px;
        }


    }

    /* -- BackgroundPart2 - Pic1 and Text1 -- */
    .Align-WeddingPart1 {
        /* margin-right: 250px; */
        /* padding-left: 500px; */
        margin-top: -200px;

    }

    .WeddingPic1 {

        width: 550px;
        height: 350px;
    }

    @media screen and (max-width: 375px) {
        .WeddingPic1 {
            width: 345px;
            height: 250px;
        }

        .Align-WeddingPart1 {
            display: flex;
            flex-direction: column;
            align-items: center;

        }

    }


    .AlignTextCard {
        padding-top: 0px;
        margin-top: -180px;
    }

    @media screen and (max-width: 375px) {
        .AlignTextCard {
            padding-top: 0px;
            margin-top: 0px;
            text-align: center;
        }

    }

    .WeddingTextCard1 {
        /* background-color: darksalmon; */
        width: 540px;
        height: 395px;
    }

    .aligntitle1 {
        margin-top: 60px;
        /* padding-top: 60px; */
        margin-left: 40px;
        /* padding-left: 40px; */
        color: #09839C;
        font-weight: bold;
    }

    .aligntitle1WeddingM {
        display: none;
    }

    @media screen and (max-width: 375px) {
        .aligntitle1 {
            display: none;
        }

        .aligntitle1WeddingM {
            display: block;
            margin-bottom: 20px;
        }

    }

    .aligntext {
        margin-top: 10px;
        /* padding-top: 10px; */
        margin-left: 40px;
        /* padding-left: 40px; */
        color: #5D5D5D;
    }

    @media screen and (max-width: 375px) {
        .aligntext {
            margin-left: 0px;
        }

    }

    .coverfit {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }




    /* -- BackgroundPart2 - Pic2 -- */

    .Align-WeddingPart2 {
        display: flex;
        justify-content: center;
        margin-top: -250px;
    }

    .WeddingPic2 {
        width: 700px;
        height: 455px;
        /* z-index: 1; */
    }

    @media screen and (max-width: 375px) {
        .Align-WeddingPart2 {
            display: flex;
            justify-content: center;
            margin-top: 0px;
        }

        .WeddingPic2 {
            width: 345px;
            height: 220px;
        }
    }

    /* .backgroundbox1 {
            width: 284px;
            height: 231px;
            background-color: #09839C;
            z-index: 0;
            margin: -500px 0px 0px -30px;
        } */

    .backgroundbox2 {
        width: 284px;
        height: 231px;
        background-color: #09839C;
        /* z-index: 0; */
        margin: 325px 0px 0px -30px;
    }

    .backgroundbox3 {
        width: 284px;
        height: 231px;
        background-color: #09839C;
        /* z-index: 0; */
        margin: -786px 0px 0px 905px;
    }

    .backgroundbox4 {
        width: 284px;
        height: 231px;
        background-color: #09839C;
        /* z-index: 0; */
        margin: 325px 0px 0px 905px;
    }


    /* ---------- Heart Icon Part ---------- */

    .HeartTextTitle {
        font-weight: bold;
    }

    .weddingService {
        width: 600px;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        margin: 50px 0 0 0;

    }


    .weddingServiceDetail {
        display: flex;
        flex-direction: column;
        align-items: center;

    }

    .weddingServiceDetail img {
        max-width: 60px;
    }

    @media screen and (max-width: 375px) {

        .weddingService {
            width: 330px;
        }

        .weddingServiceDetail img {
            max-width: 30px;
            margin-bottom: 10px;
        }

        .HeartTextTitle {
            margin-bottom: 0px;
            font-weight: bold;
        }
    }



    /* ---------- Wedding Auto Photos Slider ---------- */
    .AlignPhotosSlider {
        display: flex;
        justify-content: center;
    }

    .WeddingPhotosSlider {
        background-color: #09839C;
        width: 100vw;
        height: 580px;
        margin-top: 100px;
    }

    @media screen and (max-width: 375px) {

        .WeddingPhotosSlider {
            background-color: #09839C;
            width: 375px;
            height: 580px;
            margin-top: 50px;
        }
    }

    @keyframes rotate {
        0% {
            background-position: 0 0
        }

        100% {
            background-position: 500px 0
        }
    }

    .photoCycle {
        margin: 40px auto;
        width: 100%;
        height: 500px;
        /* border-radius: 50%; */
        overflow: hidden;
        background: url(img/6_wedding/wedding_4slide1.png);
        background-size: cover;
        animation: rotate infinite linear 12s;
        /* box-shadow: 0 0 20px 10px #000 inset, 0 0 20px #0a68b4; */
    }



    @media screen and (max-width: 375px) {

        .photoCycle {
            margin: 40px auto;
            width: 100%;
            height: 500px;
            /* border-radius: 50%; */
            overflow: hidden;
            background: url(img/6_wedding/wedding_4slide1.png);
            background-size: cover;
            animation: rotate infinite linear 8s;
            /* box-shadow: 0 0 20px 10px #000 inset, 0 0 20px #0a68b4; */
        }
    }


    /* ---------- BackgroundPart3---------- */
    /* -- BackgroundPart3 - Pic1 and Text1 -- */
    .AlignTextCard2 {
        display: flex;
        justify-content: center;
        margin-top: 100px;
    }

    @media screen and (max-width: 375px) {
        .AlignTextCard2 {
            max-width: 375px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 100px;
        }

    }

    .AlignText2-1 {
        width: 500px;
        height: 220px;
        text-align: center;
        margin-bottom: 30px;
    }

    @media screen and (max-width: 375px) {
        .AlignText2-1 {
            margin-bottom: 0px;
        }
    }

    .aligntitle2 {
        color: #09839C;
    }

    .aligntext2 {
        color: #5D5D5D;
        font-weight: bold;
    }

    .aligntext3 {
        color: #5D5D5D;
    }


    /* ---------- BackgroundPart4---------- */
    .BackgroundPart4 {
        width: 100vw;
        height: 800px;
        background: #D7E6E8;
        /* margin-top: 10px; */
    }

    @media screen and (max-width: 375px) {
        .BackgroundPart4 {
            height: 430px;
        }
    }

    .Align-WeddingPart4 {
        display: flex;
        justify-content: center;
    }

    .WeddingPic3 {
        margin-top: -250px;
        width: 800px;
        height: 500px;
        /* z-index: 1; */
    }

    .WeddingPic4 {
        width: 488px;
        height: 415px;
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        margin-top: 114px;
    }

    .WeddingPicMargin {
        margin-right: 20px;
    }

    /* ---------- BackgroundPart5---------- */
    .weddingContact {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        margin: 200px 0 200px 0;
    }

    .contactBG {
        width: 700px;
    }

    .contactText {
        margin-top: -300px;
    }

    @media screen and (max-width: 375px) {

        .weddingContact {
            margin: 100px 0 50px 0;
        }


        .contactText {
            margin-top: -150px;
        }

        .contactBG {
            width: 300px;
        }

    }


    /* --------------------按鈕------------------------- */

    /* -- 2020/08/10新增 叫出按鈕的Bootstrap，連接到Contact us -- */
    .modal-header {
        padding: 1rem 2rem 0;
    }

    .modal-body,
    .modal-footer {
        padding: 1rem 2rem;
    }

    .windowTitle {
        color: #09839C;
        justify-content: flex-start;
    }


    .inputbox {
        margin-top: 10px;
        display: flex;
        flex-direction: column;
        color: #5D5D5D;
    }

    input {
        height: 36px;
        padding: 0px 20px;
        /* width: 434px; */
    }


    .OrangeBtn {
        width: 100%;
        height: 60px;
        background-color: #EB9851;
        margin: 20px 0;
        border: none;
        color: #ffff
    }

    .form-group small {
        color: red;
    }

    .modal-backdrop {
        z-index: 0;
    }

    .modal-dialog {
        margin-top: 200px;
        margin-bottom: 200px;
    }

    /* -- 2020/08/10新增 叫出按鈕的Bootstrap，連接到Contact us -- */
</style>



<div class="wrapper1">
    <div class="top">
        <div class="title h2chi" data-aos="fade-right" data-aos-duration="2000" data-aos-offset="100" data-aos-easing="ease-in-out">
            WEDDING
        </div>
        <div class="scroll-btn">
            <div class="discoverText">Discover</div>
            <div class="mouse">
                <div class="discoverLine">
                </div>
            </div>
        </div>
    </div>


    <!---------- Background Part1---------->

    <div class="BackgroundPart1" id="BackgroundPart1">
        <div class="AlignText1" data-aos="fade-in" data-aos-easing="ease-in-sine">
            <span class="h4eng">MAKE YOUR DREAMS<br>COME TRUE</span>
        </div>

        <div class="AlignText2" data-aos="fade-in" data-aos-easing="ease-in-sine">
            <span class="h4chi">享受悠閒渡假海島<br>讓親朋好友們參加一場永生難忘的婚宴</span>
        </div>
    </div>

    <div class="AlignTextM">
        <span class="h4eng">MAKE YOUR DREAMS<br>COME TRUE</span>
    </div>



    <!---------- Background Part1---------->


    <!---------- BackgroundPart2 ---------->
    <div class="BackgroundPart2">
        <div class="Align-WeddingPart0">
            <div class="Align-WeddingPart1">
                <div class="aligntitle1WeddingM">
                    <div class="h5chi" style="color: #09839C;">夢幻婚禮就在ARCADIA</div>
                </div>

                <div class="WeddingPic1" data-aos="fade-in" data-aos-easing="ease-in-sine">
                    <img class="coverfit" src="img/6_wedding/wedding_2.jpg" alt="Wedding">
                </div>
            </div>

            <div class="AlignTextCard">
                <div class="WeddingTextCard1">
                    <div class="aligntitle1">
                        <div class="h5chi" data-aos="fade-in" data-aos-easing="ease-in-sine">夢幻婚禮就在ARCADIA</div>
                    </div>

                    <div class="aligntext">
                        <div class="bodytextchi" data-aos="fade-in" data-aos-easing="ease-in-sine">
                            從小型溫馨婚禮到大型豪華婚宴，<br>專業的規劃團隊幫忙打造您的婚禮需求
                            <br>
                            <br>
                            我們確保活動大小環節都能符合您的期待，<br>不論花藝裝飾、現場佈置或菜單設計；
                            <br>謹慎安排婚禮各項重要元素，完美綻放。</div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="Align-WeddingPart2">
        <div class="WeddingPic2">
            <img class="coverfit" src="img/6_wedding/wedding_3.png" alt="" data-aos="fade-in" data-aos-easing="ease-in-sine">
            <!-- 
                <div class="backgroundbox1"></div>
                <div class="backgroundbox2"></div>
                <div class="backgroundbox3"></div>
                <div class="backgroundbox4"></div> -->

        </div>
    </div>




    <!---------- Heart Icon ---------->

    <div class="weddingService">


        <div class="weddingServiceDetail">
            <img src="icon/6_wedding/wedding_heart1.svg" alt="HeartLoveIcon"data-aos="fade-up" data-aos-easing="ease-in-sine">
            <p class="HeartTextTitle h5chi" style="text-align: center; margin: 0px;" data-aos="fade-in" data-aos-easing="ease-in-sine">婚宴場地</p>
            <p class="bodytextchi" style="text-align: center;" data-aos="fade-in" data-aos-easing="ease-in-sine"><br>室內室外場佈<br>
                時尚風格俱備</p>
        </div>

        <div class="weddingServiceDetail">
            <img src="icon/6_wedding/wedding_heart2.svg" alt="HeartLoveIcon" data-aos="fade-up" data-aos-easing="ease-in-sine">
            <p class="HeartTextTitle h5chi" style="text-align: center; margin: 0px;" data-aos="fade-in" data-aos-easing="ease-in-sine">婚宴團隊</p>
            <p class="bodytextchi" style="text-align: center;" data-aos="fade-in" data-aos-easing="ease-in-sine"><br>團隊專業諮詢<br>
                細節堅持規劃</p>
        </div>

        <div class="weddingServiceDetail">
            <img src="icon/6_wedding/wedding_heart1.svg" alt="HeartLoveIcon" data-aos="fade-up" data-aos-easing="ease-in-sine">
            <p class="HeartTextTitle h5chi" style="text-align: center; margin: 0px;" data-aos="fade-in" data-aos-easing="ease-in-sine">婚宴菜單</p>
            <p class="bodytextchi" style="text-align: center;" data-aos="fade-in" data-aos-easing="ease-in-sine"><br>主廚精心規劃<br>
                多元婚宴菜色</p>
        </div>
    </div>

    <div class="weddingService">
        <div class="weddingServiceDetail">
            <img src="icon/6_wedding/wedding_heart2.svg" alt="HeartLoveIcon" data-aos="fade-up" data-aos-easing="ease-in-sine">
            <p class="HeartTextTitle h5chi" style="text-align: center; margin: 0px;" data-aos="fade-in" data-aos-easing="ease-in-sine">寵愛客房</p>
            <p class="bodytextchi" style="text-align: center;" data-aos="fade-in" data-aos-easing="ease-in-sine"><br>親友豪華客房<br>
                尊榮待遇服務</p>
        </div>

        <div class="weddingServiceDetail">
            <img src="icon/6_wedding/wedding_heart1.svg" alt="HeartLoveIcon" data-aos="fade-up" data-aos-easing="ease-in-sine">
            <p class="HeartTextTitle h5chi" style="text-align: center; margin: 0px;" data-aos="fade-in" data-aos-easing="ease-in-sine">婚禮管家</p>
            <p class="bodytextchi" style="text-align: center;" data-aos="fade-in" data-aos-easing="ease-in-sine"><br>宴會管家服務<br>
                協助度過時刻</p>
        </div>

        <div class="weddingServiceDetail">
            <img src="icon/6_wedding/wedding_heart2.svg" alt="HeartLoveIcon" data-aos="fade-up" data-aos-easing="ease-in-sine">
            <p class="HeartTextTitle h5chi" style="text-align: center; margin: 0px;" data-aos="fade-in" data-aos-easing="ease-in-sine">婚前派對</p>
            <p class="bodytextchi" style="text-align: center;" data-aos="fade-in" data-aos-easing="ease-in-sine"><br>單身派對規劃<br>
                投入精彩時光</p>
        </div>
    </div>

    <!---------- 預留背景圖片 Background Pic ---------->
    <!-- <div>
        <img src="images/BackGroundPic.png" alt="">
        </div> -->

    <!---------- Wedding Auto Photos Slider ---------->
    <div class="AlignPhotosSlider">
        <div class="WeddingPhotosSlider">
            <div class="photoCycle">
            </div>
        </div>
    </div>


    <!---------- BackgroundPart3 ---------->
    <div class="AlignTextCard2">
        <div class="AlignText2-1">
            <div class="aligntitle2">
                <span class="h3chi" data-aos="fade-in" data-aos-easing="ease-in-sine">客製化求婚服務</span>
            </div>
            <br>

            <div class="aligntext2">
                <span class="h5chi" data-aos="fade-in" data-aos-easing="ease-in-sine">還在考慮熱情海島求婚？趕快行動吧！</span><br>
            </div>

            <div class="aligntext3">
                <span class="bodytextchi"><br>ARCADIA 提供您最專業的求婚規劃及錄影。<br>
                    在最佳的求婚時機，為您規劃獨特巧思，<br>
                    量身打造求婚方式，譜出戲劇般的浪漫故事。
                </span>
            </div>
        </div>
    </div>


    <!---------- BackgroundPart4 ---------->

    <div class="BackgroundPart4">
        <br>
        <br>

        <div class="w3-content" style="max-width:800px">
            <img class="mySlides" src="img/6_wedding/wedding_lightbox1.png" style="width:100%">
            <img class="mySlides" src="img/6_wedding/wedding_lightbox3.png" style="width:100%;display:none">
            <img class="mySlides" src="img/6_wedding/wedding_lightbox2.png" style="width:100%;display:none">

            <div class="w3-row-padding w3-section">
                <div class="w3-col s4">
                    <img class="demo w3-opacity w3-hover-opacity-off" src="img/6_wedding/wedding_lightbox1.png" style="width:100%;cursor:pointer" onclick="currentDiv(1)">
                </div>
                <div class="w3-col s4">
                    <img class="demo w3-opacity w3-hover-opacity-off" src="img/6_wedding/wedding_lightbox3.png" style="width:100%;cursor:pointer" onclick="currentDiv(2)">
                </div>
                <div class="w3-col s4">
                    <img class="demo w3-opacity w3-hover-opacity-off" src="img/6_wedding/wedding_lightbox2.png" style="width:100%;cursor:pointer" onclick="currentDiv(3)">
                </div>
            </div>
        </div>
    <!-- </div> -->





    <!---------- BackgroundPart5 ---------->


    <div class="weddingContact">
        <div class="contactBG">
            <img class="coverfit" src="img/6_wedding/wedding_6.png" alt="">
        </div>
        <div class="contactText bodytextchi">
            一生一次的婚禮 請盡情揮灑你的夢想<br>
            讓我們在眾親友面前 許下對彼此一生的承諾
            <br>
            <br>
            請讓 ARCADIA 完成屬於你們的夢想。<br>
            一步步籌畫出美麗的婚禮創造永生難忘的回憶！

            <br>
            <br>
            <!-- smallbutton -->
            <div class="btnlistbox" style="width:100%">
                <div class="smallButton">
                    <li class="s_var_nav">
                        <div class="s_link_bg"></div>
                        <div class="s_link_title">
                            <!-- 2020/08/10新增 連接php資料庫 -->
                            <a href="#" data-toggle="modal" data-target="#exampleModal2"><span>Contact Us</span></a>
                            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                    聯絡我們
                                    </button> -->
                            <!-- 2020/08/10新增 連接php資料庫 -->
                        </div>
                    </li>
                </div>
            </div>
            <!-- smallbutton -->

            <!-- 2020/08/10新增 連接php資料庫，Contact us視窗 -->
            <!-- Modal -->
            <div class="modal fade " id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

                <div class="modal-dialog">

                    <div class="modal-content">

                        <div class="modal-header">

                            <div class="windowTitle h4chi">聯絡我們</div>

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>

                        </div>
                        <div class="modal-body">

                            <form method="post" name="sentMessage" id="contactForm" onsubmit="return formCheck()">

                                <div class="inputbox bodytextchi">
                                    <span for="name" style="text-align: left;">姓名</span>
                                    <div class="form-group">
                                        <input name="name" id="contact-name" type="name" placeholder="請輸入您的姓名" class="form-control bodytextchi" aria-label="Username" aria-describedby="basic-addon1">
                                        <small class="form-text"></small>
                                    </div>
                                </div>

                                <div class="inputbox password bodytextchi">
                                    <span for="email" style="text-align: left;">聯絡信箱</span>

                                    <div class="form-group">
                                        <input name="email" id="contact-email" type="email" placeholder="請輸入您的E-MAIL" class="form-control bodytextchi" aria-label="Username" aria-describedby="basic-addon1">
                                        <small class="form-text"></small>
                                    </div>

                                </div>

                                <div class="inputbox yourmessage bodytextchi">
                                    <span for="message" style="text-align: left;">您的訊息</span>

                                    <div class="form-group">
                                        <textarea name="message" id="message" type="message" class="form-control" aria-label="With textarea"></textarea>
                                        <small id="message" class="form-text"></small>
                                    </div>

                                </div>

                                <button type="submit" name="sub" class="OrangeBtn bodytextchi"><span>送出</span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 2020/08/10新增 連接php資料庫，Contact us視窗 -->

        </div>
    </div>


    <!-- </div> -->

    <?php //include __DIR__ . '/__script.php' 
    ?>

    <!-- 2020/08/10新增 判斷Contact us視窗內輸入的資料是否正確 -->
    <script>
        function formCheck() {
            const name = $('#contact-name'),
                email = $('#contact-email'),
                message = $('#message');

            const email_re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;


            name.next().text('');
            email.next().text('');
            message.next().text('');

            let isPass = true;

            if (name.val().trim().length < 3) {
                isPass = false;
                name.css('border-color', 'red');
                name.next().text('*請輸入您的姓名')
            }

            if (!email_re.test(email.val())) {
                isPass = false;
                email.css('border-color', 'red');
                email.next().text('*請填入正確的E-mail格式');
            }

            if (message.val().trim().length < 3) {
                isPass = false;
                message.css('border-color', 'red');
                message.next().text('*您尚未輸入訊息');
            }

            if (isPass) {
                $.post('_contactus-api.php', $(document.sentMessage).serialize(), function(data) {
                    console.log(data);
                    if (data.success) {
                        $('#exampleModal2').click();

                        Swal.fire({
                            title: "您的訊息已寄出<br>已將您的寶貴訊息<br>送至客服中心，<br>我們將盡速和您聯絡<br>以完成您的需求！",
                            icon: 'success',
                            showConfirmButton: false,
                            timer: 30000
                        });
                        setTimeout(function() {
                            location.href = '_wedding.php';
                        }, 3000);
                    } else {
                        $('#exampleModal2').click();

                        Swal.fire({
                            title: "此帳號尚未註冊",
                            icon: "error",
                            showConfirmButton: false,
                            timer: 1500
                        });

                    }

                    // if (data.success) {
                    //     info_bar.removeClass('alert-danger')
                    //         .addClass('alert-success')
                    //         .html('登入成功!');

                    //     setTimeout(function() {
                    //         location.href = './login.php';
                    //     }, 3000);
                    // }
                }, 'json');
            }
            return false;
        }
    </script>

    <!-- 2020/08/10新增 判斷Contact us視窗內輸入的資料是否正確 -->