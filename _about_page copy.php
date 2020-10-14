<style>
    /* ----------------- discoverButton ------------------ */
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

    /* -------------------- discoverButton ------------------------- */


    .wrapper1 {
        max-width: 1920px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;

    }

    .top {
        position: relative;
        background-image: url(img/2_about/about_1index.jpg);
        width: 100vw;
        height: 800px;
        background-size: cover;
        background-position: center center;
        /* z-index: -1; */
    }

    .title {
        position: absolute;
        top: 45%;
        left: 15%;
    }

    @media screen and (max-width: 375px) {
        .top {
            height: 450px;
        }
    }

    .aboutfirst {
        width: 100vw;
        height: 1022px;
        background-color: #D7E6E8;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .box {
        width: 100VW;
        /* height: 7350px; */
        display: flex;
        align-items: center;
        flex-direction: column;
        /* z-index: -1; */
    }

    .box1 {
        width: 892px;
        height: 604px;

        margin: 190px 0 0 0;
        overflow: hidden
    }

    .text1 {
        margin: 50px 0 0 0;
    }

    .text2 {
        margin: 50px 0 50px 0;
        color: #09839C;
    }

    .box2 {
        margin: 0 0 92px 0;
        height: 511px;
        width: 1158px;
        position: relative;
    }

    .box21 {
        width: 669px;
        height: 504px;
        overflow: hidden;
        position: absolute;
    }

    .box22 {
        width: 669px;
        height: 504px;
        background-color: #D7E6E8;
        left: 20PX;
        top: 20px;
        background-color: #D7E6E8;
        position: absolute;
    }

    .text3 {
        color: #09839C;
        /* margin: 0 0 0 232px; */
    }

    .text4 {
        color: #09839C;
        position: absolute;
        bottom: 168px;
        right: 374px;
    }

    .rwdword {
        color: #FFFFFF;
    }

    .box31 {
        display: flex;
        flex-direction: column;
        margin: 0 0 178px 0;
    }

    .box32 {
        height: 558px;
        width: 1133px;
        position: relative;
        margin: 0 0 321px 0;
    }

    .box321 {
        width: 683px;
        height: 510px;
        /* background-color: darkslategrey; */
        position: absolute;
        overflow: hidden;
        right: 0;
        bottom: 0;
    }

    .box322 {
        width: 683px;
        height: 510px;
        background-color: #D7E6E8;
        position: absolute;
    }

    .box41 {
        width: 100vw;
        height: 319px;
        background-color: #09839C;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        margin: 0 0 129px 0;
        position: relative;
    }


    .box51 {
        margin: 0 0 100px 0;
    }


    .box61 {
        width: 100vw;
        height: 578px;
        /* background-color: turquoise; */
        margin: 0 0 100px 0;
    }

    .box42 {
        width: 1170px;
        height: 770px;
        position: relative;
        margin: 0 0 212px 0;
    }

    .box421 {
        width: 540px;
        height: 771px;
        background-color: fuchsia;
        position: absolute;
        overflow: hidden;
    }

    .box422 {
        width: 540px;
        height: 771px;
        background-color: #D7E6E8;
        position: absolute;
        top: 10px;
        left: 10px;
    }

    .box71 {
        width: 1196px;
        height: 710px;
        background: url(img/2_about/about_7map.png);
        background-size: cover;
        margin: 0 0 80px 0;
        position: relative;
    }

    .locationinf {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 739px;
        height: 200px;
        background-color: #D7E6E8;
        display: flex;
        flex-direction: column;
        justify-content: center;
        /* align-items: center; */
    }

    .locationinfinside {
        width: 250px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin: 0 0 10px 52px;
    }

    .locationinfinside2 {
        width: 600px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin: 0 0 0 58px;
    }

    .box72 {
        width: 1196px;
        height: 500px;
        background-image: url(img/2_about/about_8sunset.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        display: -webkit-box;
        display: flex;
        flex-direction: column;
        -webkit-box-align: center;
        align-items: center;
        -webkit-box-pack: center;
        justify-content: center;
        margin-bottom: 50px;
    }

    .titgallery {
        display: flex;
        justify-content: center;
        align-items: center;

    }

    .line {
        width: 304px;
        height: 3px;
        background-color: #09839C;
    }

    .insidetext1 {
        margin-bottom: 159px;
    }

    .dopin {
        margin: 0 0 0 419px;
    }

    .article1 {
        position: absolute;
        color: #5D5D5D;
        right: -44px;
        bottom: 20px;
    }

    .article2 {
        justify-content: center;
        align-items: center;
        /* margin: -62px 0 0 0; */
    }

    .article3 {
        position: absolute;
        color: #5D5D5D;
        top: 150px;
        left: 85px;
    }

    .article4 {
        color: #FFFFFF;
        text-align: center;
    }

    .article5 {
        position: absolute;
        color: #5D5D5D;
        right: 0;
        bottom: 0;
    }

    .article6 {
        color: #09839C
    }

    .rwduse {
        display: none;
    }

    .webuse {
        display: unset;
    }

    .weather {
        margin: 0 0 40px 0;
    }

    .snap2 {
        width: 50px;
        position: absolute;
        right: 248px;
        top: 319px;
        transition: .5s;
    }

    .snap2:hover{
        transform:scale(1.2,1.2);
        filter: brightness(120%);
    }

    #timedate {
        text-align: left;
        margin: 40px auto;
        color: #fff;
        padding: 20px;
    }

    /* .locationphotomobile{
                    display: none;
                } */

    @media screen and (max-width: 375px) {

        .box {
            width: 100VW;
            height: auto;
            display: flex;
            align-items: center;
            flex-direction: column;

        }

        .aboutfirst {
            width: 100vw;
            height: 353px;

            display: flex;
            flex-direction: column-reverse;
            justify-content: center;
            align-items: center;
        }

        .box1 {
            width: 100vw;
            height: 217px;

            margin: 30px 0 0 0;
            overflow: hidden;
        }

        .box1 img {
            width: 100%;
        }

        .hover-zoomin a {
            display: block;
            position: relative;
            overflow: hidden;
        }

        .hover-zoomin {
            transform: scale(1, 1);
            transition: all 1s ease-out;
        }

        .hover-zoomin:hover {
            transform: scale(1.2, 1.2);
        }

        .text1 {
            margin: 22px 0 0 0;
        }

        .text2 {
            margin: 30px 0 15px 0;
            color: #09839C;
        }

        .box2 {
            margin: 0 0 0px 0;
            height: 280px;
            width: 375px;

            position: relative;
        }

        .box21 {
            width: 100vw;
            height: 250px;
            overflow: hidden;
            position: absolute;
            left: 0PX;
            top: 20px;
            right: 0px;
            margin: 0 auto;
            filter: brightness(0.9);
        }

        .box22 {
            width: 375px;
            height: 190px;
            position: absolute;
            left: 0PX;
            top: 0px;
            right: 0px;
            margin: 0 auto;
            background-color: #D7E6E8;
            display: none;
        }

        .article1 {
            display: none;
        }

        .text4 {
            width: 300px;
            color: #FFFFFF;
            position: absolute;
            bottom: 50px;
            right: 0px;
            left: 0;
            margin: 0 auto;
            text-align: center;
        }

        .rwdword {
            color: unset;

        }

        .text3 {
            color: #09839C;
            /* margin: 0 0 0 232px; */
        }

        .box31 {
            display: none;
        }

        .box32 {
            height: 270px;
            width: 100vw;
            position: relative;
            margin: 0 0 70px 0;
        }

        .box321 {
            width: 100vw;
            height: 250px;
            /* background-color: darkslategrey; */
            position: absolute;
            overflow: hidden;
            right: 0;
            bottom: 0;
            left: 0;
            top: 45px;
            margin: 0 auto;
        }

        .box321 img {
            width: 125%;
            filter: brightness(0.9);
        }

        .rwduse {
            display: unset;
        }

        .webuse {
            display: none;
        }

        .box322 {
            width: 375px;
            height: 300px;
            background-color: #D7E6E8;
            position: absolute;
            margin-top: 20px;
        }

        .article3 {
            display: none;
        }

        .box41 {
            display: none;
        }

        .box42 {
            width: 100vw;
            height: 350px;
            position: relative;
            margin: 0 0 21px 0;
        }

        .box421 {
            width: 277px;
            height: 329px;
            background-color: fuchsia;
            position: absolute;
            overflow: hidden;
            right: 0;
            left: 0;
            top: 20px;
            margin: 0 auto;
        }

        .box421 img {
            width: 100%;
        }

        .box422 {
            display: none;
        }

        .article5 {
            display: none;
        }


        .box51 {
            margin: 0 0 56px 0;
        }

        .box52 {
            /* margin: 0 0 52px 0; */
        }



        .box61 {
            width: 100vw;
            height: px;
            /* background-color: turquoise; */
            margin: 0 0 52px 0;
        }

        .box71 {
            width: 375px;
            height: 250px;
            background: url(img/2_about/about_7mapMobile.png);
            background-size: cover;
            margin: 0 0 80px 0;
            position: relative;
        }

        .locationinf {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 375px;
            height: 120px;
            background-color: #D7E6E8;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            top: 220px;
        }

        .locationinfinside {
            width: 234px;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            margin: 0 0 0 0;
        }


        .locationinfinside2 {
            width: 234px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin: 0 0 0 0;
        }

        .ninepx {
            margin: 0 9px 0 0;
        }

        .snap2 {
            display: none;
        }

        /* .locationphotomobile{
                        display: block;
                    } */

        .ninepx2 {
            margin: 0 14px 0 6px;
        }

        .box72 {
            width: 375px;
            height: 470px;
            background-color: rgb(102, 133, 40);
            margin-top: 50px;
        }

        .titgallery {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .line {
            width: 80px;
            height: 1px;
            background-color: #09839C;
        }

        .insidetext1 {
            margin-bottom: 159px;
        }

        .dopin {
            margin: 0 0 0 419px;
        }

        .article2 {
            justify-content: center;
            align-items: center;
            /* margin: -62px 0 0 0; */
        }

        .article4 {
            color: #FFFFFF;
            text-align: center;
        }

        .article6 {
            color: #09839C;
            letter-spacing: 0.2em;
            line-height: 25px;
            font-family: 'Noto Serif TC', serif;
            font-size: 14px;
        }

        .weather {
            margin: 0 0 20px 0;
        }
    }


    /* ---------- Wedding Auto Photos Slider ---------- */
    .AlignPhotosSliderAbout {
        display: flex;
        justify-content: center;
    }

    .aboutPhotosSlider {
        width: 100vw;
        height: 580px;
    }

    @media screen and (max-width: 375px) {

        .aboutPhotosSlider {
            width: 375px;
            height: 580px;
            margin-top: 0px;
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

    .aboutphotoCycle {
        margin: 40px auto;
        width: 100%;
        height: 500px;
        /* border-radius: 50%; */
        overflow: hidden;
        background: url(img/2_about/about_6slider1.png);
        background-size: cover;
        animation: rotate infinite linear 12s;
        /* box-shadow: 0 0 20px 10px #000 inset, 0 0 20px #0a68b4; */
    }



    @media screen and (max-width: 375px) {

        .aboutphotoCycle {
            margin: 40px auto;
            width: 100%;
            height: 500px;
            /* border-radius: 50%; */
            overflow: hidden;
            background: url(img/2_about/about_6slider1.png);
            background-size: cover;
            animation: rotate infinite linear 8s;
            /* box-shadow: 0 0 20px 10px #000 inset, 0 0 20px #0a68b4; */
        }
    }

    @media screen and (max-width: 375px) {

        .onlyMobileAboutTextShadow {
            text-shadow: 1px 1px black
        }
    }
</style>

<div class="wrapper1">
    <!-- <div class="top">
        <div class="title h2eng" data-aos="fade-right" data-aos-duration="2000" data-aos-offset="100" data-aos-easing="ease-in-out">
            ABOUT
        </div>
        <div class="scroll-btn">
            <div class="discoverText">Discover</div>
            <div class="mouse">
                <div class="discoverLine">
                </div>
            </div>
        </div>
    </div> -->

    <!-- <div class="landing">
    <div class="landbox">
        <span class="h2eng">ABOUT</span><br>
    </div>
    <div class="scroll-btn">
            <div class="discoverText">Discover</div>
            <div class="mouse">
                <div class="discoverLine">
                </div>
            </div>
        </div>
</div> -->


    <div class="box">
        <div class="aboutfirst">
            <div class="box1"><img class="hover-zoomin" src="img/2_about/about_2.jpg" alt="" style="object-fit:cover;width:100%;height:100%" data-aos="fade-in" data-aos-easing="ease-in-sine"></div>
            <span class="h4chi text2" data-aos="fade-in" data-aos-easing="ease-in-sine">離開煩惱 ，休息片刻</span>
            <img src="icon/2_about/fish1.png" alt="" style="position: absolute; left: 30px; width: 400px" class="webuse" data-aos="fade-right" data-aos-duration="700" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false" data-aos-anchor-placement="top-center">

        </div>


        <span class="h4chi text2" data-aos="fade-in" data-aos-easing="ease-in-sine">在我們的度假村中 </span>
        <div class="box2">
            <div class="box22"></div>
            <div class="box21"><img src="img/2_about/about_3.jpg" alt="" style="object-fit: fill;width: 100%;" data-aos="fade-in" data-aos-easing="ease-in-sine"></div>
            <div class="h5chi text4 onlyMobileAboutTextShadow">
                <span class="rwdword" data-aos="fade-in" data-aos-easing="ease-in-sine">清澈的海水 </span> <span data-aos="fade-in" data-aos-easing="ease-in-sine"> 溫暖的海風 </span>
            </div>
            <div class="bodytextchi article1" data-aos="fade-in" data-aos-easing="ease-in-sine">
                讓 ARCADIA 專業的團隊</br>
                帶你體驗熱帶雨林之美，認識雨林中的多元生態。</br>
                </br>
                生動有趣的導覽方式讓大人小孩</br>
                都能快樂學習尊重生命、愛護生態環境，</br>
                並且帶入生命教育與環保的概念，沐浴在雨林豐沛的芬多精中。</br>
            </div>
        </div>


        <div class="box31 ">

            <div class="h5chi text3">
                <span>柔和的沙灘 翠綠的森林</span>
            </div>
            <div class="d-flex article2">

                <span class="bodytextchi">
                    The Arcadia Resort 四周環繞著迷人的藍色水世界，</br>
                    為您帶來水上奢華和家庭娛樂的樂趣。</br>
                    位於熱帶小島，擁有宜人的氣候與得天獨厚的景致。</br>
                </span>
            </div>
        </div>
        <div class="box32">
            <div class="box322" data-aos="fade-in" data-aos-easing="ease-in-sine"></div>
            <div class="box321">
                <img src="img/2_about/about_4.jpg" alt="" style="display: block;object-fit:cover;width:100%;height:100%" data-aos="fade-in" data-aos-easing="ease-in-sine">
            </div>
            <div class="h5chi text3 rwduse" style="
            position: absolute;
            margin: 0 auto;
            width: 250px;
            right: 0;
            left: 0;
            top: 230px;
            bottom: 0px;
            color: #FFFFFF;">
                <span style="text-shadow: 1px 1px black;">柔和的沙灘 翠綠的森林</span>
            </div>
            <span class="bodytextchi article3" data-aos="fade-in" data-aos-easing="ease-in-sine">
                度假村提供全包式的服務，</br>
                奢華的房型與設施到完善且精彩的活動項目，</br>
                讓顧客輕鬆的享受完美的假期，</br>
                </br>
                </br>
                非常適合現在活在快節奏時間不多的都市人，</br>
                又或是來自寒冷國家的顧客可以享受到溫暖。</br>
            </span>
        </div>


        <div class="box41">
            <img src="img/2_about/bubble1.svg" alt="" style="position: absolute;right: 20%;bottom: 0;">
            <div class="bodytextchi article4">
                面對家庭式的客群，</br>
                提供villa式房型，</br>
                能容納超過6人的空間 。</br>
                </br>
                為讓平日繁忙的父母享受活動且得到休息，</br>
                度假村含有青少年俱樂部，</br>
                有親切且專業的老師引導孩子體驗活動。</br>
            </div>
            <img src="img/2_about/bubble2.svg" alt="" style="position: absolute;left: 20%;top: 145px;">
        </div>
        <div class="box42">
            <div class="box422"></div>
            <div class="box421" data-aos="fade-in" data-aos-easing="ease-in-sine">
                <img src="img/2_about/about_5.jpg" alt="" style="object-fit: cover;width: 100%;">
            </div>
            <span class="bodytextchi article5" data-aos="fade-in" data-aos-easing="ease-in-sine">
                有別於其他飯店或度假村，</br>
                The Arcadia Resort 提供客製化服務，</br>
                如有特殊需求比如：婚宴服務。</br>
                我們在網頁上設計最簡單的流程就能預定我們最精緻的服務。</br>
                </br>
                </br>
                </br>
                完美假期所需要的歡樂元素The Arcadia Resort都為您準備好了</br>
                只要打包好行李、準備好度假的心情，就可馬上出發！</br>
            </span>
        </div>

        <div class="box51 h5chi " style="text-align: center;">
            <span class="article6">
                Arcadia Resort 提供絕佳的服務</br>
                讓您獲得完美的假期</br>
                </br>
                絕美的房間 多樣的設施</br>
                各式各樣的活動 等您體驗</br>
            </span>
        </div>



        <div class="box52 h3eng titgallery">
            <div class="line"></div>
            <span style="color: #09839C">&nbspGALLERY</span>
            <div class="line"></div>
        </div>
        <div class="AlignPhotosSliderAbout">
            <div class="aboutPhotosSlider">
                <div class="aboutphotoCycle">
                </div>
            </div>
        </div>


        <div class="box52 h3eng titgallery">
            <div class="line"></div>
            <span style="color: #09839C">&nbspLOCATION</span>
            <div class="line"></div>
        </div>

        <div class="box71">
            <img class="snap2" src="icon/2_about/snap.svg" alt="">
            <div class="locationinf">
                <div class="locationinfinside">
                    <img class="ninepx" src="icon/2_about/location.svg" alt="">
                    <!-- <img class="locationphotomobile" src="img/2_about/about_7mapMobile.png" alt=""> -->
                    <span class="bodytexteng" style="color: #09839C;">9°46'38.5"S 119°22'34.1"E</span>
                </div>
                <div class="locationinfinside2">
                    <img class="ninepx2" src="icon/2_about/snap.svg" alt="">
                    <span class="bodytexteng" style="color:#09839C;">Hoba Wawi, Wanokaka, Kabupaten Sumba Barat, Nusa
                        Tenggara Tim.</span>
                </div>
            </div>
        </div>



        <div class="box72 h4eng">
            <div class="titgallery2" style="width: 100%;display: flex;align-items: center; justify-content: center;">
                <div style="width: 30%;height: 1px;background: #fff;"></div>
                <span style="color: #FFFFFF;">&nbspARCADIA</span></br>
                <div style="width: 30%;height: 1px;background: #fff;"></div>
            </div>

            <style>

            </style>

            <body onLoad="initClock()">

                <div id="timedate" class="h3chi" style="color:#FFFFFF;">
                    <a id="mon">January</a>/
                    <a id="d">1</a>/
                    <a id="y">0</a>/<br />
                    <a id="h">12</a> :
                    <a id="m">00</a>:
                    <a id="s">00</a>
                    <a id="mi" style="display: none;">000</a>
                </div>

                <div>
                    <span class="h2chi"> 30°C</span>
                    <img src="icon/2_about/cloud-sun-solid.svg" alt="" style="width: 20%;margin: 0  0 0 70px;" class="webuse">
                    <img src="icon/2_about/cloud-sun-solid.svg" alt="" style="width: 20%;" class="rwduse">
                </div>
        </div>
    </div>
</div>