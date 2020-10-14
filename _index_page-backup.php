<style>
    .wrapper1 {
        max-width: 1920px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
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
        background-color: #09839C;
    }

    .middlePic {
        width: 900px;
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
        width: 350px;
        height: 1px;
        background-color: #09839C;
        margin: 0px 10px 0px 10px;
    }

    .coverfit {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }


    @media screen and (max-width: 375px) {
        .sideText {
            margin-top: 10px;
            text-align: center;
        }

        .sidePic {
            width: 345px;
            height: 250px;

        }

        .middlePic {
            max-width: 375px;
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
            width: 30px;
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
    }

    .title {
        position: absolute;
        top: 25%;
        left: 15%;
    }

    .linebox {
        margin: 100px 0 100px 0;
        width: 50%;
        height: 100px;
        border-right: solid #09839C 2px;
    }

    .titleM {
        display: none;
    }


    @media screen and (max-width: 375px) {

        .welcome img,
        .linebox {
            display: none;
        }

        .welcomeText {
            margin-top: 50px;
        }

        .welcome {
            padding-bottom: 0px;
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

    @media screen and (max-width: 375px) {
        .about {
            background: #D7E6E8;
            width: 100VW;
            display: flex;
            flex-direction: column-reverse;
            align-items: center;
            margin-top: 50px;
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
        margin: -200px 0px 200px 0px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        position: relative;
    }

    .room .BGsvg {
        position: absolute;
        right: 0;
    }

    .roomPic {
        margin-bottom: 150px;
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

    .experiencePic {
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

    @media screen and (max-width: 375px) {
        .experience {
        background: #09839C;
        width: 100VW;
        height: 600px;
        display: flex;
        align-items: center;
        flex-direction: row;
        margin-bottom: 100px;
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

    }

    .weddingBG {
        width: 100px;
        position: absolute;
        left: 10%;
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

    /* .facility .picBG {
            width: 600px;
            height: 350px;
            background: #09839C;
            margin-top: -300px;
            padding-right: 30px;
        } */


    @media screen and (max-width: 375px) {
        .facility {
            background: #D7E6E8;
            width: 100VW;
            display: flex;
            flex-direction: column;
            align-items: center;
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
    }

    .commentBG {
        margin: 100px;
        width: 800px;
    }

    /* -----------------COMMENT------------------------ */

    /* --------------------按鈕------------------------- */


    .readmoreButton {
        margin-top: 30px;
        padding: 0px;
        list-style-type: none;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
    }

    .var_nav {
        position: relative;
        background: transparent;
        width: 200px;
        height: 48px;
        /* margin-bottom: 10px; */
        border: 1px solid #EB9851;
    }

    .link_bg {
        width: 0px;
        height: 48px;
        position: absolute;
        background: #EB9851;
        color: #fff;
        z-index: 2;
    }

    .link_bg i {
        position: relative;
    }

    .link_title {
        position: absolute;
        width: 100%;
        z-index: 3;
        color: #EB9851;
    }


    .link_title:hover {
        position: absolute;
        width: 100%;
        z-index: 3;
        color: #fff;
    }

    .link_title {
        position: absolute;
        width: 100%;
        z-index: 3;
        color: #fff;
    }

    .var_nav:hover .link_bg {
        width: 100%;
        background: #EB9851;
        -webkit-transition: all 0.3s ease-in-out;
        -moz-transition: all 0.3s ease-in-out;
        -o-transition: all 0.3s ease-in-out;
        -ms-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
    }

    .var_nav:hover a {
        /* font-weight:bold; */
        -webkit-transition: all .5s ease-in-out;
        -moz-transition: all .5s ease-in-out;
        -o-transition: all .5s ease-in-out;
        -ms-transition: all .5s ease-in-out;
        transition: all .5s ease-in-out;
    }

    a {
        display: block;
        position: absolute;
        /* float:left; */
        font-family: Crimson Text;
        color: #EB9851;
        text-decoration: none;
        width: 100%;
        height: 48px;
        text-align: center;
        font-size: 18px;
        letter-spacing: 2px;
    }

    a:hover {
        display: block;
        position: absolute;
        /* float:left; */
        font-family: Crimson Text;
        color: #ffffff;
        text-decoration: none;
        width: 100%;
        height: 60px;
        text-align: center;
    }

    span {
        margin-top: 10px;
        display: block;
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

    /* --------------------按鈕------------------------- */
</style>


<div class="wrapper1">
    <div class="top">
        <div class="title h2eng">
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
        <div class="linebox"></div>

        <img src="icon/1_index/index_1brush.png" alt="">

        <div class="welcomeText">

            <div class="h3eng colorGreen middleText">
                WELCOME TO
            </div>
            <div class="h3eng colorGreen middleText">
                THE ARCADIA RESORT
            </div>
        </div>
        <div class="linebox"></div>
    </div>
    <!-- -------------------- -->
    <div class="about">

        <img class="BGsvg" src="icon/1_index/index_2bubble.png" alt="">



        <div class="aboutLeft">
            <div class="titleWeb">
                <div class="h4eng sideText colorGreen">
                    ABOUT</div>
            </div>
            <div class="h5chi sideText">
                山巒環繞、無敵面海海景！
            </div>
            <div class="bodytextchi sideText">
                Arcadia Resort 是一間精緻全包式渡假村；<br>
                來到這便能享受海陸多元的活動，滿足各年齡需求。<br>
            </div>

            <div class="readmoreButton">
                <li class="var_nav">
                    <div class="link_bg"></div>
                    <div class="link_title">
                        <a href="#"><span>Read More</span></a>
                    </div>
                </li>
            </div>


        </div>



        <div class="aboutRight">
            <div class="titleM">
                <div class="h4eng sideText colorGreen">
                    ABOUT</div>
            </div>
            <div class="sidePic">
                <img class="coverfit" src="img/1_index/index_2about.png" alt="">
            </div>
        </div>

    </div>
</div>



<!-- --------------------------------------------------- -->
<div class="room">
    <img class="BGsvg" src="icon/1_index/index_2bubble.png" alt="">

    <div class="titleM">
        <div class="middleTitle">

            <div class="h4eng colorGreen">ROOMS</div>

        </div>
    </div>

    <div id="carouselExampleInterval" class="roomPic carousel slide middlePic" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-interval="10000">
                <img src="img/1_index/index_3room1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-interval="2000">
                <img src="img/1_index/index_3room2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/1_index/index_3room3.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/1_index/index_3room4.jpg" class="d-block w-100" alt="...">
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

    <div class="titleWeb">
        <div class="middleTitle">
            <div class="line"></div>
            <div class="h4eng colorGreen">ROOMS</div>
            <div class="line"></div>
        </div>
    </div>

    <div class="h5chi middleText">
        想要享受海島優閒渡假，歡迎來到 ARCADIA！
    </div>
    <div class="bodytextchi middleText">
        我們提供多種房型，讓您可以找到適合的夢幻房間<br>
        房內設施齊全應有盡有，讓貴賓能夠輕鬆擁有頂級尊榮待遇，享受舒適渡假！
    </div>
    <div class="readmoreButton">
        <li class="var_nav">
            <div class="link_bg"></div>
            <div class="link_title">
                <a href="#"><span>Read More</span></a>
            </div>
        </li>
    </div>
</div>


</div>

<!-- ---------------------------------------------- -->
<div class="experience">
    <div class="h4eng colorWhite">EXPERIENCE</div>

    <div class="experiencePic">
        <img src="icon/index_3fish.png" alt="">
        <div class="experiencePicLeft">
            <img src="img/1_index/index_4experience1.png" alt="">
            <img src="img/1_index/index_4experience2.png" alt="">
        </div>
        <div class="experiencePicRight">
            <img src="img/1_index/index_4experience3.png" alt="">
            <img src="img/1_index/index_4experience4.png" alt="">
        </div>
        <img src="icon/index_3fish.png" alt="">
    </div>
    <div class="readmoreButton">
        <li class="var_nav">
            <div class="link_bg"></div>
            <div class="link_title">
                <a href="#"><span>Read More</span></a>
            </div>
        </li>
    </div>

</div>



<!-- ---------------------------------------------- -->

<div class="wedding">
    <div class="weddingBG"><img src="svg/Group 841.png" alt=""></div>
    <div class="titleM">
        <div class="h4eng colorGreen">WEDDING</div>
    </div>
    <img class="middlePic" src="img/6_wedding/wedding2.png" alt="">

    <div class="titleWeb">
        <div class="middleTitle">
            <div class="line"></div>
            <div class="h4eng colorGreen">WEDDING</div>
            <div class="line"></div>
        </div>
    </div>
    <br>

    <div class="h5chi middleText">
        夢幻婚禮就在 ARCADIA !
    </div>
    <div class="bodytextchi middleText">
        從小型溫馨婚禮到大型豪華婚宴，我們專業的規劃團隊服務幫忙打造一系列婚禮需求。<br>
        服務團隊確保大小環節都能符合您的期待，讓夢想婚禮完美綻放！
    </div>
    <div class="readmoreButton">
        <li class="var_nav">
            <div class="link_bg"></div>
            <div class="link_title">
                <a href="#"><span>Read More</span></a>
            </div>
        </li>
    </div>

</div>
</div>
<!-- ---------------------------------------------- -->
<div class="facility">
    <div class="facilityLeft">
        <div class="titleM">
            <div class="h4eng sideText colorGreen">
                FACILITY</div>
        </div>
        <img class="sidePic" src="img/1_index/index-facility.png" alt="">

    </div>
    <div class="facilityRight" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="2000">
        <img src="svg/leaf3.png" alt="">
        <div class="titleWeb">
            <div class="h4eng sideText colorGreen">
                FACILITY</div>
        </div>
        <div class="h5chi sideText">
            ARCADIA 提供您熱忱服務

        </div>
        <div class="bodytextchi sideText">
            讓我們來幫助您建立入住期間的夢想行程，<br>
            為您量身定制滿足您的激情和興趣的體驗！
        </div>

        <div class="readmoreButton">
            <li class="var_nav">
                <div class="link_bg"></div>
                <div class="link_title">
                    <a href="#"><span>Read More</span></a>
                </div>
            </li>
        </div>
    </div>

</div>

<!-- ------------------------------------------ -->
<div class="comment">
    <div class="middleTitle">
        <div class="line"></div>
        <div class="h3eng colorGreen">COMMENT</div>
        <div class="line"></div>
    </div>

    <img class="commentBG" src="svg/watercolor1.png" alt="">

    <div id="carouselExampleInterval" class="roomPic carousel slide middlePic" data-ride="carousel">
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
        <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


</div>
<!-- ---------------------------------------------- -->
</div>