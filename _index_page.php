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

    .btnlistbox {
        max-width: 190px;
    }

    /* --------------------通用------------------------- */
    .colorGreen {
        color: #09839C;
    }

    .colorBlue {
        color: #D7E6E8;
    }

    .colorWhite {
        color: #ffffff;
    }

    .colorGray {
        color: #5D5D5D;
    }

    .sideText {
        text-align: left;
    }

    .sidePic {
        width: 550px;
        height: 350px;

    }

    .middlePic {
        width: 750px;
        max-height: 500px;
    }

    .middleText {
        text-align: center;
    }

    .middleTitle {
        display: flex;
        justify-content: center;
        align-items: center;

    }

    .line {
        width: 280px;
        height: 1px;
        background-color: #09839C;
        margin: 0px 10px 0px 10px;
    }

    .coverfit {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }


    @media screen and (max-width: 900px) {
        .sideText {
            margin-top: 10px;
            text-align: center;
        }

        .sidePic {
            width: 300px;
            height: 220px;
        }

        .middlePic {
            max-width: 365px;
            max-height: 280px;
        }

        .middleText {
            text-align: center;
        }


        .coverfit {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .line {
            width: 20px;
            height: 1px;
            background-color: #09839C;
            margin: 0px 10px 0px 10px;
        }



    }

    @media screen and (max-width: 375px) {
        .sideText {
            margin-top: 10px;
            text-align: center;
        }

        .sidePic {
            width: 300px;
            height: 220px;
        }

        .middlePic {
            max-width: 365px;
            max-height: 280px;
        }

        .middleText {
            text-align: center;
        }


        .coverfit {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .line {
            width: 20px;
            height: 1px;
            background-color: #09839C;
            margin: 0px 10px 0px 10px;
        }



    }


    /* --------------------通用------------------------- */



    /* --------------------WELCOME TO------------------------- */

    .welcome {
        margin: 0 auto;
        padding-bottom: 250px;
        /* z-index: -1; */

    }


    .welcome img {
        width: 600px;
        opacity: .7;
    }

    .welcomeText {
        margin-top: -180px;
    }


    .top {
        position: relative;
        background-image: url(img/1_index/index_1index.jpg);
        width: 100vw;
        height: 900px;
        background-size: cover;
        background-position: center center;
        /* z-index: -1; */
    }

    .title {
        position: absolute;
        top: 25%;
        left: 15%;
    }

    .welcomeLinebox {
        margin: 100px 0 100px 0;
        width: 50%;
        height: 100px;
        border-right: solid #09839C 2px;
    }

    .titleM {
        display: none;
    }


    @media screen and (max-width: 900px) {

        .welcome {
            display: none;
        }

        .top {
            height: 550px;
        }

        .titleWeb {
            display: none;
        }

        .titleM {
            display: block;
            margin-bottom: 20px;
            margin-top: 50px;
        }


    }


    @media screen and (max-width: 375px) {

        .welcome {
            display: none;
        }

        .top {
            height: 550px;
        }

        .titleWeb {
            display: none;
        }

        .titleM {
            display: block;
            margin-bottom: 20px;
            margin-top: 50px;
        }


    }


    /* --------------------WELCOME TO------------------------- */



    /* --------------------ABOUT------------------------- */
    .about {
        background: #D7E6E8;
        width: 100VW;
        height: 600px;
        display: flex;
        align-items: center;
        flex-direction: row;
        justify-content: center;
        position: relative;
        /* z-index: -1; */
    }

    .aboutLeft {
        margin-top: -500px;
        position: relative;
    }

    .about .BGsvg {
        position: absolute;
        left: 0;
    }

    .aboutRight {
        margin-top: -500px;
    }

    .aboutRight img {
        z-index: 1;
    }

    /* .about .picBG {
            width: 600px;
            height: 350px;
            background: #09839C;
            margin: -300px 20px 0px 0px;
        } */


    @media screen and (max-width: 900px) {
        .about {
            background: #D7E6E8;
            width: 100VW;
            display: flex;
            flex-direction: column-reverse;
            align-items: center;
            margin-top: 0px;
            margin-bottom: 200px;
        }

        .aboutLeft {
            margin-top: 0px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .aboutRight {

            margin-top: 0px;
        }

        /* .about .picBG {
                display: none;
            } */


    }

    @media screen and (max-width: 375px) {
        .about {
            background: #D7E6E8;
            width: 100VW;
            display: flex;
            flex-direction: column-reverse;
            align-items: center;
            margin-top: 0px;
            margin-bottom: 200px;
        }

        .aboutLeft {
            margin-top: 0px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .aboutRight {

            margin-top: 0px;
        }

        /* .about .picBG {
                display: none;
            } */


    }


    /* --------------------ABOUT------------------------- */

    /* --------------------ROOMS------------------------- */
    .room {
        margin: -200px 0px 100px 0px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        position: relative;
        /* z-index: -1; */
    }

    .room .BGsvg {
        position: absolute;
        right: 0;
    }

    .roomPic {
        margin-bottom: 50px;
    }


    @media screen and (max-width: 900px) {
        .BGsvg {
            display: none;
        }

        .roomPic {
            margin-bottom: 20px;
        }

        .room {
            margin: -200px 0px 80px 0px;
        }
    }

    @media screen and (max-width: 375px) {
        .BGsvg {
            display: none;
        }

        .roomPic {
            margin-bottom: 20px;
        }

        .room {
            margin: -200px 0px 80px 0px;
        }
    }

    /* --------------------ROOMS------------------------- */



    /* -------------------EXPERIENCE------------------ */
    .experience {
        background: #09839C;
        width: 100VW;
        height: 600px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        margin-bottom: 100px;
    }

    .experience .BGsvg {
        width: 500px;
    }

    .experiencePicM {
        display: none;
    }

    .experiencePic {
        display: block;
        /* width: 300px;
            height: 350px; */
        /* background-color: #3cbbcc;
            transform: skewX(-15deg); */
        /* margin: px; */
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .experiencePic img {
        width: 250px;
        height: 300px;
    }

    @media screen and (max-width: 900px) {
        .experiencePicM {
            display: block;
        }

        .experiencePic {
            display: none;
        }

    }


    @media screen and (max-width: 375px) {
        .experiencePicM {
            display: block;
        }

        .experiencePic {
            display: none;
        }

    }

    /* --------------------------------------------------- */


    .wedding {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        margin-bottom: 200px;
        position: relative;
        /* z-index: -1; */

    }

    .weddingBG {
        width: 100px;
        position: absolute;
        left: 10%;
    }


    @media screen and (max-width: 900px) {
        .weddingBG {
            display: none;

        }

        .wedding {
            margin-top: -80px;
            margin-bottom: 100px;
        }
    }


    @media screen and (max-width: 375px) {
        .weddingBG {
            display: none;

        }

        .wedding {
            margin-top: -80px;
            margin-bottom: 100px;
        }
    }



    /* ------------------------------------------------ */

    .facility {
        background: #D7E6E8;
        width: 100VW;
        height: 600px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 100px;
    }

    .facilityRight,
    .facilityLeft {
        margin: 0px 10px 0px 10px;
    }

    /* 
    .facility .picBG {
            width: 600px;
            height: 350px;
            background: #09839C;
            margin-top: -300px;
            padding-right: 30px;
        } */


    @media screen and (max-width: 900px) {
        .facility {
            background: #D7E6E8;
            width: 100VW;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 50px;
        }

        .facilityRight {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;

        }

        /* 
            .facility .picBG {
                display: none;
            } */

        .facilityRight img {
            display: none;
        }
    }


    @media screen and (max-width: 375px) {
        .facility {
            background: #D7E6E8;
            width: 100VW;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 50px;
        }

        .facilityRight {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;

        }

        /* 
            .facility .picBG {
                display: none;
            } */

        .facilityRight img {
            display: none;
        }
    }

    /* -----------------COMMENT------------------------ */

    .comment {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-bottom: 100px;
        /* z-index: -1; */
    }






    /* -----------------COMMENT------------------------ */

    /* --------------------按鈕------------------------- */
</style>



<div class="wrapper1">
    <div class="top">
        <div class="title h2eng" data-aos="fade-right" data-aos-duration="2000" data-aos-offset="100" data-aos-easing="ease-in-out">
            THE<br>
            ARCARDIA<br>
            RESORT<br>
        </div>
        <div class="scroll-btn">
            <div class="discoverText">Discover</div>
            <div class="mouse">
                <div class="discoverLine">
                </div>
            </div>
        </div>
    </div>


    <!-- -------------------- -->
    <div class="welcome">
        <div class="welcomeLinebox" data-aos="fade-in" data-aos-offset="100" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false" data-aos-anchor-placement="top-center"></div>

        <img data-aos="fade-in" data-aos="fade-in" data-aos-offset="100" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false" data-aos-anchor-placement="top-center" src="icon/1_index/index_1brush.png" alt="">

        <div class="welcomeText">

            <div data-aos="fade-in" data-aos-offset="100" data-aos-easing="ease-in-out" class="h3eng colorGreen middleText">
                WELCOME TO
            </div>
            <div data-aos="fade-in" data-aos-offset="100" data-aos-easing="ease-in-out" class="h3eng colorGreen middleText">
                THE ARCADIA RESORT
            </div>
        </div>
        <div data-aos="fade-in" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine" class="welcomeLinebox"></div>
    </div>
    <!-- -------------------- -->
    <div class="about">

        <img class="BGsvg" src="icon/1_index/index_2bubble.png" alt="" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine">



        <div class="aboutLeft" data-aos="fade-in" data-aos-offset="100" data-aos-easing="ease-in-sine">
            <div class="titleWeb">
                <div class="h4eng sideText colorGreen" data-aos="fade-in" data-aos-easing="ease-in-sine">
                    ABOUT</div>
            </div>
            <div class="h5chi sideText colorGray" data-aos="fade-in" data-aos-easing="ease-in-sine">
                山巒環繞、無敵面海海景！
            </div>
            <div class="bodytextchi sideText colorGray" data-aos="fade-in" data-aos-easing="ease-in-sine">
                Arcadia Resort 是一間精緻全包式渡假村；<br>
                來這便能享受海陸多元的活動，滿足各年齡需求。<br>
            </div>


            <br>
            <div class="btnlistbox" style="width: 190px;">
                <div class="smallButton">
                    <li class="s_var_nav">
                        <div class="s_link_bg"></div>
                        <div class="s_link_title">
                            <a href="<?= WEB_ROOT ?>/proj_arcadia/_about.php"><span>Read More</span></a>
                        </div>
                    </li>
                </div>
            </div>


        </div>



        <div class="aboutRight">
            <div class="titleM">
                <div class="h4eng sideText colorGreen">
                    ABOUT</div>
            </div>
            <div class="sidePic">
                <img class="coverfit" src="img/1_index/index_2about.png" alt="" data-aos="fade-in" data-aos-offset="100" data-aos-easing="ease-in-sine">
            </div>
        </div>

    </div>
</div>



<!-- --------------------------------------------------- -->
<div class="room">
    <img class="BGsvg" src="icon/1_index/index_2bubble.png" alt="" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine">

    <div class="titleM">
        <div class="middleTitle">
            <div class="h4eng colorGreen">ROOMS</div>
        </div>
    </div>

    <div id="carouselExampleInterval" class="roomPic carousel slide middlePic" data-ride="carousel" data-aos="fade-in" data-aos-offset="100" data-aos-easing="ease-in-sine">
        <div class="carousel-inner">
            <div class="carousel-item active" data-interval="10000">
                <img src="img/1_index/index_3roomAll1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-interval="2000">
                <img src="img/1_index/index_3roomAll2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/1_index/index_3roomAll3.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/1_index/index_3roomAll4.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="titleWeb" data-aos="fade-in" data-aos-easing="ease-in-sine">
        <div class="middleTitle">
            <div class="line"></div>
            <div class="h4eng colorGreen">ROOMS</div>
            <div class="line"></div>
        </div>
    </div>

    <div class="h5chi middleText colorGray" data-aos="fade-in" data-aos-easing="ease-in-sine">
        想要享受海島優閒渡假，歡迎來到 ARCADIA！
    </div>
    <div class="bodytextchi middleText colorGray" data-aos="fade-in" data-aos-easing="ease-in-sine">
        我們提供多種房型，讓您可以找到適合的房間<br>
        房內設施應有盡有，能夠輕鬆擁有頂級尊榮待遇，享受舒適渡假！
    </div>
    <br>
    <!-- smallbutton -->
    <div class="btnlistbox" style="width: 190px;">
        <div class="smallButton">
            <li class="s_var_nav">
                <div class="s_link_bg"></div>
                <div class="s_link_title">
                    <a href="<?= WEB_ROOT ?>/proj_arcadia/_room.php"><span>Read More</span></a>
                </div>
            </li>
        </div>
    </div>
    <!-- smallbutton -->


</div>

<!-- ---------------------------------------------- -->
<div class="experience">
    <div class="h4eng colorWhite">EXPERIENCE</div>
    <br>
    <div class="experiencePicM">
        <img src="img/1_index/index_4experienceM.png" style="width:300px;" alt="">
    </div>

    <div class="experiencePic">
        <img src="icon/1_index/index_3fish.png" alt="" data-aos="fade-right" data-aos-duration="700" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false" data-aos-anchor-placement="top-center">

        <div class="experiencePicLeft">
            <img src="img/1_index/index_4experience1.png" style="margin: 0;" alt="" data-aos="zoom-up" data-aos-easing="ease-in-sine">
            <img src="img/1_index/index_4experience2.png" style="margin: 0;" alt="" data-aos="zoom-up" data-aos-easing="ease-in-sine">
        </div>
        <div class="experiencePicRight">
            <img src="img/1_index/index_4experience3.png" alt="" data-aos="zoom-up" data-aos-easing="ease-in-sine">
            <img src="img/1_index/index_4experience4.png" alt="" data-aos="zoom-up" data-aos-easing="ease-in-sine">

        </div>

        <img src="icon/1_index/index_3fish.png" alt="" data-aos="fade-right" data-aos-duration="700" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false" data-aos-anchor-placement="top-center">
    </div>
    <br>
    <!-- smallbutton -->
    <div class="btnlistbox" style="width: 190px;">
        <div class="smallButton">
            <li class="s_var_nav">
                <div class="s_link_bg"></div>
                <div class="s_link_title">
                    <a href="<?= WEB_ROOT ?>/proj_arcadia/_experience.php"><span>Read More</span></a>
                </div>
            </li>
        </div>
    </div>
    <!-- smallbutton -->
</div>



<!-- ---------------------------------------------- -->

<div class="wedding">
    <div class="weddingBG"><img src="icon/1_index/index_4bird.png" alt="" data-aos="fade-in" data-aos-easing="ease-in-sine"></div>
    <div class="titleM">
        <div class="h4eng colorGreen">WEDDING</div>
    </div>

    <img class="middlePic" src="img/1_index/index_5wedding.png" alt="" data-aos="fade-in" data-aos-easing="ease-in-sine">

    <div class="titleWeb">
        <div class="middleTitle" data-aos="fade-in" data-aos-easing="ease-in-sine">
            <div class="line"></div>
            <div class="h4eng colorGreen">WEDDING</div>
            <div class="line"></div>
        </div>
    </div>
    <br>

    <div class="h5chi middleText colorGray" data-aos="fade-in" data-aos-easing="ease-in-sine">
        夢幻婚禮就在 ARCADIA !
    </div>
    <div class="bodytextchi middleText colorGray" data-aos="fade-in" data-aos-easing="ease-in-sine">
        從小型溫馨婚禮到大型豪華婚宴，專業規劃團隊幫忙打造一系列婚禮需求。<br>
        確保大小環節都能符合您的期待，讓夢想婚禮完美綻放！
    </div>
    <br>
    <!-- smallbutton -->
    <div class="btnlistbox" style="width: 190px;">
        <div class="smallButton">
            <li class="s_var_nav">
                <div class="s_link_bg"></div>
                <div class="s_link_title">
                    <a href="<?= WEB_ROOT ?>/proj_arcadia/_wedding.php"><span>Read More</span></a>
                </div>
            </li>
        </div>
    </div>
    <!-- smallbutton -->

</div>
</div>
<br>
<br>
<!-- ---------------------------------------------- -->
<div class="facility">

    <div class="facilityLeft">
        <div class="titleM">
            <div class="h4eng sideText colorGreen">
                FACILITY</div>
        </div>
        <div class="sidePic">
            <img class="coverfit" src="img/1_index/index_6facility.png" alt="" data-aos="fade-in" data-aos-easing="ease-in-sine">
        </div>

    </div>

    <div class="facilityRight">
        <img src="icon/1_index/index_5leaf.png" alt="" data-aos="fade-right" data-aos-duration="700" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false" data-aos-anchor-placement="top-center">
        <div class="titleWeb">
            <div class="h4eng sideText colorGreen" data-aos="fade-in" data-aos-easing="ease-in-sine">
                FACILITY</div>
        </div>

        <div class="h5chi sideText colorGray" data-aos="fade-in" data-aos-easing="ease-in-sine">
            ARCADIA 提供您熱忱服務

        </div>
        <div class="bodytextchi sideText colorGray" data-aos="fade-in" data-aos-easing="ease-in-sine">
            讓我們來幫助您建立入住期間的夢想行程，<br>
            為您量身定制滿足您的激情和興趣的體驗！<br>
        </div>
        <br>
        <div class="btnlistbox" style="width:190px;">
            <div class="smallButton">
                <li class="s_var_nav">
                    <div class="s_link_bg"></div>
                    <div class="s_link_title">
                        <a href="<?= WEB_ROOT ?>/proj_arcadia/_facility.php"><span>Read More</span></a>
                    </div>
                </li>
            </div>
        </div>


    </div>



</div>
</div>

<!-- ---------------------------------------------- -->

<div class="comment">
    <!-- <img class="BGsvg" src="icon/1_index/index_2bubble.png" alt=""> -->

    <div class="titleM">
        <div class="middleTitle">

            <div class="h4eng colorGreen">COMMENT</div>

        </div>
    </div>

    <div class="titleWeb" data-aos="fade-in" data-aos-easing="ease-in-sine">
        <div class="middleTitle">
            <div class="line"></div>
            <div class="h4eng colorGreen">COMMENT</div>
            <div class="line"></div>
        </div>
    </div>

    <div id="carouselExampleInterval-comment" class="roomPic carousel slide middlePic" data-ride="carousel" data-aos="fade-in" data-aos-easing="ease-in-sine">
        <div class="carousel-inner">
            <div class="carousel-item active" data-interval="10000">
                <img src="img/1_index/index_7comment1.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-interval="2000">
                <img src="img/1_index/index_7comment2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/1_index/index_7comment3.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/1_index/index_7comment4.png" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleInterval-comment" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleInterval-comment" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


</div>





</div>