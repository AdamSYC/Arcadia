<style>
    /* ---------- facility Icons---------- */

    .wrapper1 {
        max-width: 1920px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;

    }

    .top {
        position: relative;
        background-image: url(img/7_facility/facility_1index.jpg);
        width: 100vw;
        height: 800px;
        background-size: cover;
        background-position: center center;
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


    /* ---------- facility Icons---------- */

    .container-experiences1 {
        /* background-color: #fff; */

        /* 設定置中 */
        margin: 120px auto;
        width: 1000px;
    }

    .Exlist {
        width: 1000px;
        display: flex;
        justify-content: space-around;
        list-style-type: none;
        background-color: #fff;
    }

    .experiences {
        background-color: #fff;
        width: 100%;
    }


    .IconNameStyle {
        color: #09839C;
        display: flex;
        justify-content: center;
        text-decoration: none;
        cursor: pointer;
    }


    .exiconbutton {
        width: 100px;
        height: 100px;
        line-height: 100px;
        display: block;
        position: relative;
        border-radius: 50%;
        border: 2px solid #1594ad;
        text-align: center;
        display: inline-block;
        position: relative;
        z-index: 10;
        color: #09839C;
    }

    .exiconbutton:hover {
        color: #fff;
    }

    .exiconbutton:after {
        position: absolute !important;
        content: "";
        width: 80px;
        height: 80px;
        display: block;
        position: relative;
        border-radius: 50%;
        right: 8px;
        top: 8px;
        background-color: #09839C;
        visibility: hidden;
        opacity: 0;
        transition: all 0.4s ease;
        opacity: 1\9;
        visibility: visible\9;
        display: none\9;
        transform: scale(0.5, 0.5);
        z-index: -1;
        transition: all 0.2s ease;
    }

    .exiconbutton:hover:after {
        visibility: visible;
        opacity: 1;
        display: block\9;
        transform: scale(1, 1);

    }

    .exiconbutton svg {
        height: 46px;
        width: 46px;
        position: absolute;
        right: 25%;
        top: 25%;
        fill: #09839C;
        transition: all 0.2s ease;
    }

    .exiconbutton svg:hover {
        fill: #fff;
    }

    ul {
        padding: 0
    }

    /* ----- Experience Icons RWD ----- */
    @media screen and (max-width: 375px) {
        .experiences {
            width: 100%;
            display: none;
        }
    }



    /* ---------- Facilities Main Content---------- */
    /* ---------- Lobby ---------- */
    .boxFacility {
        width: 100vw;
        height: 100%;
        background: #D7E6E8;
        display: flex;
        /* align-items: center; 對齊畫面置中，此頁不適用 */
        flex-direction: column;
        margin: auto 0;
        justify-content: center;
    }

    .facilityTitle {
        color:#09839C;
        padding: 2rem 15px;
        width: 1000px;
        margin: auto;
    }

    .facilityContainerRange {
        max-width: 1000px;
        display: flex;
        flex-direction: row;
        margin: auto;
    }

    .Container-FacilityLobby {
        /* margin-top: 100px; */
        margin-right: 300px;
        margin-bottom: 200px;
        z-index: 1;
    }

    .FacilityPics {
        width: 555px;
        height: 415px;
    }

    .facilityAlignTextCardLobby {
        z-index: 0;
    }

    .facilityTextCard {
        background-color: white;
        color: #5D5D5D;
        width: 450px;
        /* height: 395px; */
        margin-top: 80px;
        margin-left: -325px;
    }

    .facilityTextCardLobby {
        background-color: white;
        color: #5D5D5D;
        width: 450px;
        /* height: 395px; */
        margin-top: 80px;
        margin-left: -325px;
    }

    .alignTitle {
        margin-left: 50px;
        padding-top: 20px;
    }

    .aligntext {
        margin-top: 10px;
        margin-left: 50px;
        padding-bottom: 25px;
    }

    .coverfit {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* ----- Lobby RWD ----- */
    @media screen and (max-width: 375px) {
        .boxFacility {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .facilityContainerRange {
            /* max-width: 100%; */
            display: flex;
            flex-direction: column;
        }

        .Container-FacilityLobby {
            /* margin-top: 100px; */
            margin-right: 0px;
            margin-bottom: 0px;
            z-index: 0;
        }

        .FacilityPics {
            background-color: darksalmon;
            width: 100%;
            height: 280px;
        }

        .facilityAlignTextCardLobby {
            display: flex;
            justify-content: center;
            z-index: 1;
        }

        .facilityTextCard {
            background-color: white;
            color: #5D5D5D;
            width: 345px;
            margin-top: -10px;
            margin-left: 0px;
            text-align: center;
            padding: 1rem;
        }

        .alignTitle {
            margin-left: 0px;
            padding-top: 1rem;
            font-weight: bold;
        }

        .aligntext {
            margin-top: 10px;
            margin-left: 0px;
            padding-bottom: 20px;
        }

    }

    /* ----- Lobby RWD ----- */

    /* ---------- Swimming Pool ---------- */
    .facilityContainerRangeSwimmingPool {
        max-width: 1000px;
        display: flex;
        flex-direction: row;
        margin: auto;
    }

    .container-FacilitySwimmingPool {
        /* margin-top: 100px; */
        margin-left: -30px;
        margin-bottom: 200px;
        z-index: 1;
    }

    .facilityAlignTextCardSwimmingPool {
        margin-top: 80px;
        z-index: 0;
    }

    .leftTextCard {
        background-color: #fff;
        color: #5D5D5D;
        width: 450px;
    }

    .alignTitle2 {
        padding-top: 20px;
        padding-left: 50px;
    }

    .aligntext2 {
        padding-top: 10px;
        padding-left: 50px;
        padding-bottom: 25px;
    }

    /* ----- Swimming Pool RWD ----- */
    @media screen and (max-width: 375px) {
        .facilityContainerRangeSwimmingPool {
            display: flex;
            flex-direction: column-reverse;
        }

        .container-FacilitySwimmingPool {
            /* margin-top: 100px; */
            margin-left: 0px;
            margin-bottom: 0px;
            z-index: 0;
        }

        .facilityAlignTextCardSwimmingPool {
            display: flex;
            justify-content: center;
            z-index: 1;
            margin: 0px;
        }

        .leftTextCard {
            background-color: #ffffff;
            color: #5D5D5D;
            width: 345px;
            margin-top: -10px;
            margin-left: 0px;
            text-align: center;
        }

        .alignTitle2 {
            margin-left: 0px;
            padding-top: -10px;
            padding-left: 0px;
            font-weight: bold;
        }

        .aligntext2 {
            margin-top: 10px;
            margin-left: 0px;
            padding-top: 0px;
            padding-left: 0px;
            padding-bottom: 20px;
        }

    }

    /* ----- Swimming Pool RWD ----- */

    /* ---------- Gym ---------- */
    .container-FacilityPartGym {
        /* margin-top: 100px; */
        margin-right: 300px;
        margin-bottom: 200px;
        z-index: 1;
    }

    .facilityAlignTextCard1 {
        z-index: 0;
    }

    .GymTextCard {
        background-color: white;
        width: 450px;
        /* height: 395px; */
        margin-top: 80px;
        margin-left: -325px;
    }

    .alignTitleGym {
        margin-left: 70px;
        padding-top: 20px;
    }

    .aligntextGym {
        margin-top: 10px;
        margin-left: 70px;
        padding-bottom: 25px;
    }

    /* ----- Gym RWD ----- */
    @media screen and (max-width: 375px) {
        .container-FacilityPartGym {
            /* margin-top: 100px; */
            margin-right: 0px;
            margin-bottom: 0px;
            z-index: 0;
        }

        .facilityAlignTextCard1 {
            display: flex;
            justify-content: center;
            z-index: 1;
        }

        .GymTextCard {
            background-color: white;
            color: #5D5D5D;
            width: 345px;
            margin-top: -10px;
            margin-left: 0px;
            text-align: center;
        }

        .alignTitleGym {
            margin-left: 0px;
            padding-top: 20px;
        }

        .aligntextGym {
            margin-top: 10px;
            margin-left: 0px;
            padding-bottom: 25px;
        }

    }

    /* ----- Gym RWD ----- */

    /* ---------- Movie Theater ---------- */
    .facilityContainerRangeMovie {
        max-width: 1000px;
        display: flex;
        flex-direction: row;
        margin: auto;
    }

    .facilityAlignTextCardMovie {
        margin-top: 80px;
        z-index: 0;
    }

    .MovieTextCard {
        background-color: #09839C;
        color: white;
        width: 500px;
        /* height: 450px; */
    }

    .alignTitleMovie {
        padding-top: 20px;
        padding-left: 25px;
    }

    .aligntextMovie {
        padding-top: 10px;
        padding-left: 25px;
        padding-bottom: 25px;
    }

    .container-FacilityMovie {
        /* margin-top: 100px; */
        margin-left: -75px;
        margin-bottom: 200px;
        z-index: 1;
    }

    /* ----- Movie Theater RWD ----- */
    @media screen and (max-width: 375px) {
        .facilityContainerRangeMovie {
            display: flex;
            flex-direction: column-reverse;
        }

        .container-FacilityMovie {
            /* margin-top: 100px; */
            margin-left: 0px;
            margin-bottom: 0px;
            z-index: 0;
        }

        .facilityAlignTextCardMovie {
            display: flex;
            justify-content: center;
            margin-top: 0px;
            z-index: 1;
        }

        .MovieTextCard {
            background-color: #ffffff;
            color: #5D5D5D;
            width: 345px;
            margin-top: -10px;
            margin-left: 0px;
            text-align: center;
        }

        .alignTitleMovie {
            padding-top: 20px;
            padding-left: 0px;
        }

        .aligntextMovie {
            padding-top: 10px;
            padding-left: 0px;
            padding-bottom: 25px;
        }


    }

    /* ----- Movie Theater RWD ----- */

    /* ---------- Bar ---------- */
    .container-FacilityBar {
        /* margin-top: 100px; */
        /* margin-right: 300px; */
        margin-bottom: 200px;
        z-index: 1;
    }

    .facilityAlignTextCardBar {
        display: flex;
        justify-content: center;
        z-index: 0;
    }

    .BarTextCard {
        background-color: white;
        width: 440px;
        height: 360px;
        margin-top: 80px;
        margin-left: -25px;
    }

    /* ----- Bar RWD ----- */
    @media screen and (max-width: 375px) {
        .container-FacilityBar {
            /* margin-top: 100px; */
            margin-bottom: 0px;
            z-index: 0;
        }

        .facilityAlignTextCardBar {
            z-index: 1;
        }

        .BarTextCard {
            background-color: white;
            color: #5D5D5D;
            width: 345px;
            margin-top: -10px;
            margin-left: 0px;
            text-align: center;
        }

    }

    /* ----- Bar RWD ----- */

    /* ---------- GameRoom ---------- */
    .facilityContainerRangeGameRoom {
        max-width: 1000px;
        display: flex;
        flex-direction: row;
        margin: auto;
    }

    .facilityAlignTextCardGameRoom {
        margin-top: 80px;
        z-index: 0;
    }

    .GameTextCard {
        background-color: #09839C;
        color: white;
        width: 440px;
        /* height: 400px; */
    }

    .container-FacilityGameRoom {
        /* margin-top: 100px; */
        margin-left: -30px;
        margin-bottom: 200px;
        z-index: 1;
    }

    /* ----- GameRoom RWD ----- */
    @media screen and (max-width: 375px) {
        .facilityContainerRangeGameRoom {
            max-width: 1000px;
            display: flex;
            flex-direction: column-reverse;
            
        }

        .container-FacilityGameRoom {
            /* margin-top: 100px; */
            margin-left: 0px;
            margin-bottom: 0px;
            z-index: 0;
        }

        .facilityAlignTextCardGameRoom {
            display: flex;
            justify-content: center;
            margin-top: 0px;
            z-index: 1;
        }

        .GameTextCard {
            background-color: #ffffff;
            color: #5D5D5D;
            width: 345px;
            margin-top: -10px;
            margin-left: 0px;
            text-align: center;

            /* 以下margin-bottom測試畫面用 */
            margin-bottom: 50px;
        }

    }

    /* ----- GameRoom RWD ----- */



    @media screen and (max-width: 375px) {
        .facilityBG {
            display: none;
        }

    }
</style>


<div class="wrapper1">
    <div class="top">
        <div class="title h2eng">
            FACILITY
        </div>
        <div class="scroll-btn">
            <div class="discoverText">Discover</div>
            <div class="mouse">
                <div class="discoverLine">
                </div>
            </div>
        </div>
    </div>


    <!---------- facility  Icons---------->
    <!---------- Experiences Icons ---------->



    <div class="experiences" id="experiences">
        <div class="container-experiences1" data-aos="fade-up">
            <div>
                <ul class="Exlist">
                    <li>
                        <a href="#lobby" class="exiconbutton">
                            <svg>
                                <use xlink:href="#lobby" />
                            </svg>
                        </a>
                        <div class="IconNameStyle h5chi">交誼廳</div>
                    </li>

                    <li>
                        <a href="#pool" class="exiconbutton">
                            <svg>
                                <use xlink:href="#pool" />
                            </svg>
                        </a>
                        <div class="IconNameStyle h5chi">游泳池</div>
                    </li>


                    <li>
                        <a href="#" class="exiconbutton">
                            <svg>
                                <use xlink:href="#gym" />
                            </svg>
                        </a>
                        <div class="IconNameStyle h5chi">健身房</div>
                    </li>

                    <li>
                        <a href="#" class="exiconbutton">
                            <svg>
                                <use xlink:href="#movie" />
                            </svg>
                        </a>
                        <div class="IconNameStyle h5chi">電影廳</div>
                    </li>


                    <li>
                        <a href="#" class="exiconbutton">
                            <svg>
                                <use xlink:href="#bar" />
                            </svg>
                        </a>
                        <div class="IconNameStyle h5chi">望海酒吧</div>
                    </li>

                    <li>
                        <a href="#" class="exiconbutton">
                            <svg>
                                <use xlink:href="#playground" />
                            </svg>
                        </a>
                        <div class="IconNameStyle h5chi">遊戲室</div>
                    </li>

                </ul>
            </div>
        </div>
    </div>

    <svg display="none">



        <symbol id="lobby" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 193.833 193.833" style="enable-background:new 0 0 193.833 193.833;" xml:space="preserve">
            <path d="M104.417,185.979V52.687h34.018v133.293H104.417z M55.399,185.979h34.018V52.687H55.399V185.979z M180.583,0H13.25
	c-4.143,0-7.5,3.357-7.5,7.5v178.833c0,4.143,3.357,7.5,7.5,7.5h27.167c-0.006-0.118-0.018-0.234-0.018-0.354V45.187
	c0-4.143,3.357-7.5,7.5-7.5h98.035c4.143,0,7.5,3.357,7.5,7.5v148.293c0,0.119-0.012,0.236-0.018,0.354h27.167
	c4.143,0,7.5-3.357,7.5-7.5V7.5C188.083,3.357,184.726,0,180.583,0z" />
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
        </symbol>





        <symbol id="pool" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 59.002 53.103">
            <g id="Icon_material-pool" data-name="Icon material-pool" transform="translate(-3 -4.5)">
                <path id="Path_19" data-name="Path 19" class="cls-1" d="M62,57.6a11.285,11.285,0,0,1-6.431-1.888,5.538,5.538,0,0,0-3.393-1.062,5.3,5.3,0,0,0-3.393,1.062,11.9,11.9,0,0,1-12.863,0,5.538,5.538,0,0,0-3.393-1.062,5.3,5.3,0,0,0-3.393,1.062A11.479,11.479,0,0,1,22.677,57.6a11.285,11.285,0,0,1-6.431-1.888,5.356,5.356,0,0,0-3.393-1.062,5.356,5.356,0,0,0-3.393,1.062A11.479,11.479,0,0,1,3,57.6V51.7A5.3,5.3,0,0,0,6.393,50.64a11.479,11.479,0,0,1,6.461-1.888,11.285,11.285,0,0,1,6.431,1.888A5.3,5.3,0,0,0,22.677,51.7,5.3,5.3,0,0,0,26.07,50.64a11.479,11.479,0,0,1,6.461-1.888,11.285,11.285,0,0,1,6.431,1.888A5.538,5.538,0,0,0,42.355,51.7a5.356,5.356,0,0,0,3.393-1.062,11.9,11.9,0,0,1,12.863,0A5.3,5.3,0,0,0,62,51.7Zm0-13.276a11.285,11.285,0,0,1-6.431-1.888,5.538,5.538,0,0,0-3.393-1.062,5.3,5.3,0,0,0-3.393,1.062,11.9,11.9,0,0,1-12.863,0,5.538,5.538,0,0,0-3.393-1.062,5.3,5.3,0,0,0-3.393,1.062,11.285,11.285,0,0,1-6.431,1.888,11.285,11.285,0,0,1-6.431-1.888,5.538,5.538,0,0,0-3.393-1.062A5.356,5.356,0,0,0,9.49,42.439,11.676,11.676,0,0,1,3,44.327v-5.9a5.3,5.3,0,0,0,3.393-1.062,11.285,11.285,0,0,1,6.431-1.888,11.285,11.285,0,0,1,6.431,1.888,5.538,5.538,0,0,0,3.393,1.062,5.3,5.3,0,0,0,3.393-1.062,11.285,11.285,0,0,1,6.431-1.888A11.285,11.285,0,0,1,38.9,37.365,5.538,5.538,0,0,0,42.3,38.427a5.356,5.356,0,0,0,3.393-1.062,11.9,11.9,0,0,1,12.863,0,5.538,5.538,0,0,0,3.393,1.062v5.9ZM22.677,31.051a5.3,5.3,0,0,0,3.393-1.062A11.479,11.479,0,0,1,32.531,28.1a11.285,11.285,0,0,1,6.431,1.888,5.538,5.538,0,0,0,3.393,1.062,5.356,5.356,0,0,0,3.393-1.062c.354-.207.767-.443,1.21-.679L28.017,10.4c-4.573-4.573-8.791-5.93-16.167-5.9v7.375c5.369-.03,8.526,1.151,11.8,4.425l2.95,2.95-9.588,9.588a16.142,16.142,0,0,1,2.272,1.151A5.3,5.3,0,0,0,22.677,31.051Z" transform="translate(0 0)" />
                <path id="Path_20" data-name="Path 20" class="cls-1" d="M35.751,11.875A7.375,7.375,0,1,1,28.375,4.5a7.375,7.375,0,0,1,7.375,7.375Z" transform="translate(17.401 0)" />
            </g>
        </symbol>

        <symbol id="gym" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
            <g>
                <g>
                    <path d="M480.534,131.405v257.551C498.624,384.164,512,367.658,512,348.081V172.279C512,152.702,498.624,136.196,480.534,131.405z
			" />
                </g>
            </g>
            <g>
                <g>
                    <path d="M406.746,97.301h-9.909c-23.315,0-42.284,18.969-42.284,42.283v241.191c0,23.315,18.969,42.283,42.284,42.283h9.909
			c23.315,0,42.284-18.968,42.284-42.283V139.584C449.029,116.269,430.061,97.301,406.746,97.301z" />
                </g>
            </g>
            <g>
                <g>
                    <rect x="188.952" y="207.834" width="134.103" height="103.176" />
                </g>
            </g>
            <g>
                <g>
                    <path d="M0,163.92v175.801c0,19.577,13.376,36.084,31.466,40.875V123.044C13.376,127.836,0,144.343,0,163.92z" />
                </g>
            </g>
            <g>
                <g>
                    <path d="M115.164,88.942h-9.909c-23.315,0-42.283,18.969-42.283,42.283v241.19c0,23.315,18.969,42.283,42.283,42.283h9.909
			c23.315,0,42.283-18.969,42.283-42.283v-241.19C157.446,107.91,138.478,88.942,115.164,88.942z" />
                </g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
        </symbol>


        <symbol id="movie" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 332.804 332.804" style="enable-background:new 0 0 332.804 332.804;" xml:space="preserve">
            <g>
                <g>
                    <g>
                        <path d="M330.804,171.002c-3.6-6.4-12-8.8-18.8-4.8l-45.6,26.4l-11.6,6.8v63.2l10.8,6.4c0.4,0,0.4,0.4,0.8,0.4l44.8,26
				c2,1.6,4.8,2.4,7.6,2.4c7.6,0,13.6-6,13.6-13.6v-53.6l0.4-52.8C332.804,175.402,332.404,173.002,330.804,171.002z" />
                        <path d="M64.404,150.602c35.6,0,64.4-28.8,64.4-64.4c0-35.6-28.8-64.4-64.4-64.4s-64.4,28.8-64.4,64.4
				C-0.396,121.802,28.804,150.602,64.404,150.602z M64.404,59.802c14.8,0,26.4,12,26.4,26.4c0,14.8-12,26.4-26.4,26.4
				c-14.4,0-26.4-12-26.4-26.4C37.604,71.402,49.604,59.802,64.404,59.802z" />
                        <path d="M227.604,154.202c-10.4,5.2-22,8.4-34.4,8.4c-15.2,0-29.6-4.4-41.6-12.4h-45.6c-12,8-26.4,12.4-41.6,12.4
				c-12.4,0-24-2.8-34.4-8.4c-9.2,5.2-15.6,15.6-15.6,26.8v97.6c0,18,14.8,32.4,32.4,32.4h164.4c18,0,32.4-14.8,32.4-32.4v-97.6
				C243.204,169.802,236.804,159.402,227.604,154.202z" />
                        <path d="M193.204,150.602c35.6,0,64.4-28.8,64.4-64.4c0-35.6-28.8-64.4-64.4-64.4c-35.6,0-64.4,28.8-64.4,64.4
				C128.804,121.802,157.604,150.602,193.204,150.602z M193.204,59.802c14.8,0,26.4,12,26.4,26.4c0,14.8-12,26.4-26.4,26.4
				c-14.4,0-26.4-12-26.4-26.4C166.804,71.402,178.404,59.802,193.204,59.802z" />
                    </g>
                </g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
        </symbol>



        <symbol id="bar" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60">
            <defs>
            </defs>
            <path id="Icon_material-local-bar" data-name="Icon material-local-bar" class="cls-1" d="M64.5,11.167V4.5H4.5v6.667l26.667,30V57.833H14.5V64.5h40V57.833H37.833V41.167ZM19.267,17.833l-5.9-6.667h42.3l-5.933,6.667Z" transform="translate(-4.5 -4.5)" />
        </symbol>



        <symbol id="playground" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 65 64.999">
            <path id="Icon_map-playground" data-name="Icon map-playground" class="cls-1" d="M8.8,42.618a7.577,7.577,0,0,0,0-15.149,7.578,7.578,0,0,0,0,15.149ZM50.1,55.64a.749.749,0,0,1,1.047.165l1.364,1.939a.817.817,0,0,1-.164,1.082l-10,7.471a.757.757,0,0,1-1.05-.167l-1.359-1.939a.812.812,0,0,1,.164-1.08l10-7.472ZM38.791,46.007l-3.968-7.154L32.74,40.417l3.968,7.192ZM29.534,29.3,14.1,1.44l-2.952.02,16.281,29.42ZM44.062,44.033a8.963,8.963,0,0,1,4.009-1.615H62.2c2.789,0,4.239,2.806,4.239,5.658,0,2.868-1.45,4.233-4.239,4.233H49.483L34.172,64.323c-5.381,3.983-8.642-.393-8.642-.393L13.543,51.6c-2.011-2.477-1.576-7.191.835-9.278L30.966,30.17a3.848,3.848,0,0,1,5.49.485,4.09,4.09,0,0,1-.489,5.647L25.347,44.295l7.629,7.749Z" transform="translate(-1.44 -1.44)" />
        </symbol>




    </svg>


    <!---------- facility  Icons---------->


    <!---------- Lobby ----------->
    <div class="facility-MainContent">
        <div class="boxFacility" >

            <div class="facilityTitle h4chi " id="lobby" data-aos="fade-up">
                交誼廳
            </div>

            <div class="facilityContainerRange">


                <div class="Container-FacilityLobby"  data-aos="fade-up">
                    <div class="FacilityPics">
                        <img class="coverfit" src="img/7_facility/facility_2Lobby.jpg" alt="Lobby">
                    </div>
                </div>

                <div class="facilityAlignTextCardLobby" data-aos="fade-right" data-aos-duration="1000">
                    <div class="facilityTextCard">
                        <div class="alignTitle">
                            <span class="h5chi">交誼廳</span>
                        </div>

                        <div class="aligntext">
                            <span class="bodytextchi">ARCADIA 始終提供您的服務保有溫度與熱忱。<br>
                                <br>貴賓可以在Lobby接受我們櫃檯專業的服務，<br>讓我們來幫助您建立入住期間的夢想行程。
                                <br>
                                <br>
                                無論是與世界一流的教練一起在椰子灣上沖浪課程，
                                <br>還是到當地村莊遠足，我們都在這裡為您量身
                                <br>定制滿足您的激情和興趣的體驗！</span>
                        </div>

                    </div>
                    <img class="facilityBG" src="icon/7_facility/facility_1shell1.png" alt="">
                </div>

            </div>

        </div>
    </div>



    <!---------- Swimming Pool ---------->
    <div class="facility-MainContent">
        <div class="boxFacility">

            <div class="facilityTitle h4chi" data-aos="fade-up">
                游泳池
            </div>

            <div class="facilityContainerRangeSwimmingPool">

                <div class="facilityAlignTextCardSwimmingPool"data-aos="fade-left" data-aos-duration="1000">
                    <div class="leftTextCard">
                        <div class="alignTitle2">
                            <span class="h5chi">游泳池</span>
                        </div>

                        <div class="aligntext2">
                            <span class="bodytextchi">ARCADIA 是一個超乎您想像的豐富度假村。<br>
                                <br>我們擁有兩個大型游泳池、一個十人溫水浴缸、<br>
                                一個水邊瑜伽涼亭，以及一個私人海灘上方的<br>僻靜竹捆和泳池，可俯瞰山頂和壯闊的海岸線。
                                <br><br>對於那些追求最佳隱私的人來說，<br>ARCADIA是最好的選擇。</span>
                        </div>
                    </div>
                    <img class="facilityBG" src="icon/7_facility/facility_2fish1.png" style="width: 400px;" alt="">
                </div>

                <div class="container-FacilitySwimmingPool" data-aos="fade-up">
                    <div class="FacilityPics">
                        <img class="coverfit" src="img/7_facility/facility_3SwimmingPool.jpg" alt="SwimmingPool">
                    </div>
                </div>

            </div>

        </div>
    </div>




    <!---------- Gym ---------->
    <div class="facility-MainContent">
        <div class="boxFacility">

            <div class="facilityTitle h4chi" data-aos="fade-up">
                健身房
            </div>

            <div class="facilityContainerRange">


                <div class="container-FacilityPartGym" data-aos="fade-up">
                    <div class="FacilityPics">
                        <img class="coverfit" src="img/7_facility/facility_4Gym.jpg" alt="Gym">
                    </div>
                </div>

                <div class="facilityAlignTextCard1" data-aos="fade-right" data-aos-duration="1000">
                    <div class="GymTextCard">
                        <div class="alignTitleGym">
                            <span class="h5chi">健身房</span>
                        </div>

                        <div class="aligntextGym">
                            <span class="bodytextchi">享受我們在放眼望去優闊的海灘上<br>
                                設置的完善健身設備。<br>
                                <br>ARCADIA 將提供免費的專業健身<br>指導教練，貼心的在健身房等待您的詢問，<br>
                                無論是跑步機、舉重、有氧拳擊甚至是<br>體態矯正。<br>
                                <br>讓您在閒暇之餘不知道該做什麼時，<br>就來一趟健康流汗之旅。</span>
                        </div>
                    </div>

                    <img class="facilityBG" src="icon/7_facility/facility_3leaf.png" alt="">

                </div>

            </div>

        </div>
    </div>
    <!---------- Movie Theater ---------->
    <div class="facility-MainContent">
        <div class="boxFacility">

            <div class="facilityTitle h4chi" data-aos="fade-up">
                電影廳
            </div>

            <div class="facilityContainerRangeMovie">

                <div class="facilityAlignTextCardMovie" data-aos="fade-left" data-aos-duration="1000">
                    <div class="MovieTextCard">
                        <div class="alignTitleMovie">
                            <span class="h5chi">電影廳</span>
                        </div>

                        <div class="aligntextMovie">
                            <span class="bodytextchi">ARCADIA 為您設想周全，夜晚也有放鬆的好地方。<br>
                                <br>為了提供貴賓在夜間時也能有放鬆身心的活動，<br>
                                為此別出心裁地在度假村的隱密角落設置了電影廳。<br>
                                <br>在這裡，您大可放心不會因為鄰近美麗海洋，<br>觀賞電影時不會受到海洋的浪潮生干擾，<br>
                                因為我們備有最高級的影音和隔音設備！<br>
                                <br>期待您的到來與我們共同享受優質精選的電影節目。
                            </span>
                        </div>
                    </div>
                    <img class="facilityBG" src="icon/7_facility/facility_4shell2.png" alt="">
                </div>

                <div class="container-FacilityMovie" data-aos="fade-up">
                    <div class="FacilityPics">
                        <img class="coverfit" src="img/7_facility/facility_5MovieTheater.jpg" alt="MovieTheater">
                    </div>
                </div>

            </div>

        </div>
    </div>

    <!---------- Bar ---------->
    <div class="facility-MainContent">
        <div class="boxFacility">

            <div class="facilityTitle h4chi" data-aos="fade-up">
                望海酒吧
            </div>

            <div class="facilityContainerRange">

                <div class="container-FacilityBar" data-aos="fade-up">
                    <div class="FacilityPics">
                        <img class="coverfit" src="img/7_facility/facility_6Bar.jpg" alt="Bar">
                    </div>
                </div>

                <div class="facilityAlignTextCardBar" data-aos="fade-right" data-aos-duration="1000">
                    <div class="BarTextCard">
                        <div class="alignTitle">
                            <span class="h5chi">望海酒吧</span>
                        </div>

                        <div class="aligntext">
                            <span class="bodytextchi">享受沙灘邊的雞尾酒，不必跑到夏威夷！<br>
                                <br>ARCADIA 特別將老舊的涼亭改造成酒吧吧台！<br>因為這裡的視野實在是太棒了，<br>
                                夜間想放鬆身心靈時，<br>距離 Lobby 走路不到3分鐘的距離，<br>
                                即可抵達 ARCADIA 望海的最佳地點。<br>
                                <br>搭配調酒師客製您的口味及輕鬆音樂，<br>
                                再配上天然的海浪聲吧。
                            </span>
                        </div>
                    </div>

                    <img class="facilityBG" src="icon/7_facility/facility_5fish2.png" style="width: 400px;" alt="">

                </div>

            </div>

        </div>
    </div>

    <!---------- Game Room ---------->
    <div class="facility-MainContent">
        <div class="boxFacility">

            <div class="facilityTitle h4chi" data-aos="fade-up">
                遊戲室
            </div>

            <div class="facilityContainerRangeGameRoom">

                <div class="facilityAlignTextCardGameRoom"  data-aos="fade-left" data-aos-duration="1000">
                    <div class="GameTextCard">
                        <div class="alignTitle2">
                            <span class="h5chi">遊戲室</span>
                        </div>

                        <div class="aligntext2">
                            <span class="bodytextchi">來到ARCADIA的您，是否煩惱著小朋友<br>
                                該如何短暫的脫離您的視線？<br>
                                <br>ARCADIA貼心的為您想到了！<br>
                                我們提供取得專業證照的保姆，和多個<br>室內外遊戲空間，<br>
                                <br>給精力充倍的小朋友一個健康、活力、<br>
                                安全且快樂的遊戲空間！
                            </span>
                        </div>
                    </div>
                </div>

                <div class="container-FacilityGameRoom" data-aos="fade-up">
                    <div class="FacilityPics">
                        <img class="coverfit" src="img/7_facility/facility_7GameRoom.jpg" alt="GameRoom">
                    </div>
                </div>

            </div>

        </div>




        <!---------- Facilities Main Content---------->