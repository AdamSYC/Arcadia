<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <!-- Noto -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+TC:wght@200;300;400;500;600;700;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/font.css">
</head>

<body>
    <?php
    if (empty($pageName)) {
        $pageName = '__nav.php';
    }
    ?>

    <style>
        body {
            height: 200vh;
        }

        .x11 {
            width: 100vw;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: fixed;
            z-index: 1;
            transition: 1.5s;
            z-index: 99999;
        }

        .x11.white {
            background: white;
        }



        .webarcadia {
            opacity: 0%;
            margin: 15px;
            height: 50px;
            transition: 1.5s;
        }

        .webarcadia.show {
            opacity: 100%;

        }

        /* ---------------------------ham */




        .book {
            background: #EB9851;
            width: 133px;
            height: 40px;
            justify-content: center;
            align-items: center;
            margin: 0 50px 0 0;
            font-weight: bold;
        }

        .book a {
            color: white;
            font-family: 'Crimson Text', serif;
            font-size: 15px;
        }

        .toppage {
            width: 100%;
            height: 100%;


        }

        .toppage img {
            width: 100%;

        }



        .x2 {
            opacity: 0%;
            position: absolute;
            top: 900px;

            display: flex;
            background: #E4E4E4;
            padding: 10px 0 10px 0;
            width: 100vw;
            justify-content: center;

            transition: 1.5s;

        }

        .x2.active {
            position: fixed;
            width: 100%;
            top: 80px;
            opacity: 93%;
            z-index: 9999;

        }

        .x2 a {
            font-size: 14px;

        }






        .reservation {
            color: #FFFFFF;
            display: flex;
            flex-direction: column;
            margin: 82px 50px 124px 0;
        }

        /* .booking {
            background: #EB9851;
            justify-content: center;
            align-items: center;
            font-size: 15px;
        } */

        .foot {
            background: #09839C;
            justify-content: space-around;
            align-items: center;
            padding: 30px;
            height: 314px;
        }

        .socialmedia {
            display: flex;
            flex-direction: column;
        }

        .socialmedia a {
            margin: 10px;
        }

        .copyright {
            transform: translateY(110px);
            ;
            position: absolute;
            left: 42%;
        }

        .front-img {
            width: 30px;
            margin-right: 20px;
        }

        #menuToggle {
            display: block;
            position: relative;
            top: 50px;
            left: 50px;

            z-index: 1;

            -webkit-user-select: none;
            user-select: none;
        }

        #menuToggle a {
            text-decoration: none;
            color: #232323;
            transition: color 0.3s ease;
        }

        #menuToggle a:hover {
            color: tomato;
        }


        #menuToggle input {
            display: block;
            width: 51px;
            height: 36px;
            position: absolute;
            top: -7px;
            left: -5px;

            cursor: pointer;

            opacity: 0;
            /* hide this */
            z-index: 2;
            /* and place it over the hamburger */

            -webkit-touch-callout: none;
        }

        /*
     * Just a quick hamburger
     */
        #menuToggle span {
            display: block;
            width: 49px;
            height: 5px;
            margin-bottom: 9px;
            position: relative;

            background: #09839C;
            border-radius: 3px;

            z-index: 1;

            transform-origin: 4px 0px;

            transition: transform 0.5s cubic-bezier(0.77, 0.2, 0.05, 1.0),
                background 0.5s cubic-bezier(0.77, 0.2, 0.05, 1.0),
                opacity 0.55s ease;
        }

        #menuToggle span:first-child {
            transform-origin: 0% 0%;
        }

        #menuToggle span:nth-last-child(2) {
            transform-origin: 0% 100%;
        }

        /* 
     * Transform all the slices of hamburger
     * into a crossmark.
     */
        #menuToggle input:checked~span {
            opacity: 1;
            transform: rotate(45deg) translate(-2px, -1px);
            background: #ffffff;
        }

        /*
     * But let's hide the middle one.
     */
        #menuToggle input:checked~span:nth-last-child(3) {
            opacity: 0;
            transform: rotate(0deg) scale(0.2, 0.2);
        }

        /*
     * Ohyeah and the last one should go the other direction
     */
        #menuToggle input:checked~span:nth-last-child(2) {
            transform: rotate(-45deg) translate(0, -1px);
        }

        /*
     * Make this absolute positioned
     * at the top left of the screen
     */
        #menu {
            position: absolute;
            width: 600px;
            height: 1080px;
            margin: -100px 0 0 -50px;
            padding: 50px;
            padding-top: 125px;


            background: #09839C;
            list-style-type: none;
            -webkit-font-smoothing: antialiased;
            /* to stop flickering of text in safari */
            opacity: 90%;
            transform-origin: 0% 0%;
            transform: translate(-100%, 0%);

            transition: transform 0.5s cubic-bezier(0.77, 0.2, 0.05, 1.0);
        }

        #menu li {
            text-align: center;
            color: #ffff;
            padding: 10px 0;
            font-size: 20px;

            margin-bottom: 32px;
            transition: 1s;
        }

        #menu li:hover {
            color: #EB9851;
            text-decoration: underline;
        }

        /*
     * And let's slide it in from the left
     */
        #menuToggle input:checked~ul {
            transform: none;
        }

        a {
            text-decoration: none;
        }

        .mobilearcadia {
            display: none;
        }

        .arcadiaiconmob {
            display: none;
        }

        .fontregu {
            font-weight: unset;
            line-height: 26px;
        }

        .rwdonly {
            display: none
        }

        .contact {
            display: flex;
            flex-direction: column;

        }

        /* 2020/08/10新增 Member Icon 增加下拉選單，包含會員中心、訂單紀錄、登出 */

        .dropdown-item {
            color: white;
        }

        /* 2020/08/10新增 Member Icon 增加下拉選單，包含會員中心、訂單紀錄、登出 */

        /* 2020/08/10新增 點擊後叫出登入的Bootstrap，連接到login.php  */
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

        .forgetlink {
            color: #EB9851;
            text-align: right;
        }

        .OrangeBtn {
            width: 100%;
            height: 60px;
            background-color: #EB9851;
            margin: 20px 0;
            border: none;
            color: #ffff
        }

        .middleTitle {
            display: flex;
            justify-content: center;
            align-items: center;
            color: #5D5D5D;

        }

        .linebox {
            width: 80px;
            height: 1px;
            background-color: #cfcfcfcf;
            margin: 0px 10px 0px 10px;
        }

        .connectButton {
            width: 100%;
            height: 60px;
            border: #09839C 1px solid;
            margin-top: 20px;
            padding: 0 20px 0 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            text-decoration: none;
            color: #09839C;
        }

        .connectButton img {
            width: 32px;
            height: 32px;
            margin-right: 20px;
        }

        .flexbox {
            width: 32px;
            height: 32px;
            background-color: #fff;
        }

        .footertext {
            margin-top: 30px;
            color: #5D5D5D;
        }

        .OrangeLink {
            color: #EB9851;
        }

        .form-text {
            color: red;
        }

        .modal-dialog {
            margin-top: 200px;
            margin-bottom: 200px;
        }

        /* 2020/08/10新增 叫出登入的Bootstrap，連接到login.php  */




        @media screen and (max-width: 375px) {
            .mintexteng {
                line-height: unset;
            }

            .webarcadia {
                display: none;
            }

            .mobilearcadia {
                display: unset;
            }

            .x11 {
                width: 100vw;
                height: 60px;
                justify-content: space-around;
            }


            /* ---------------------------ham */




            .book {

                width: 88px;
                height: 60px;
                margin: 0 -33px 0 0;
                z-index: -1;
            }

            .book a {
                color: #FFFFFF;
                font-size: 15px;
            }

            .x2 {
                display: none;
            }




            .reservation {

                flex-direction: column;
                margin: 0px 0px 124px 0;
                width: 245px;
                height: 38px;
            }

            .booking {
                z-index: 0;
                width: 245px;
                height: 38px;
                margin: 0;
            }



            .foot {
                height: 467px;
                width: 100vw;
                flex-direction: column;
                align-items: center;
                justify-content: space-between;
            }

            .arcadiaiconweb {
                display: none;
            }

            .arcadiaiconmob {
                display: unset;
                margin: 0 0 -60px 0;
            }

            .contact {
                transform: translate(-79px, 78px)
            }

            .NAVIGATE {
                transform: translate(86px, -87px)
            }

            .NAVIGATE a {
                margin: unset;
            }

            .socialmedia {

                display: unset;
                bottom: -241px;
                margin: -70px 0 30px 0;

            }

            .socialmedia a {
                margin: 0 10px 0 0;

            }

            .copyright {
                position: unset;
                transform: translateY(0px);
                ;
            }

            #menuToggle {

                top: 53px;
                left: 0px;


            }

            #menuToggle a {
                text-decoration: none;
                color: #2323 23;

                transition: color 0.3s ease;
            }

            #menuToggle a:hover {
                color: tomato;
            }


            #menuToggle input {
                display: block;
                width: 51px;
                height: 36px;
                position: absolute;
                top: -7px;
                left: -5px;

                cursor: pointer;

                opacity: 0;
                /* hide this */
                z-index: 2;
                /* and place it over the hamburger */

                -webkit-touch-callout: none;
            }

            /*
     * Just a quick hamburger
     */
            #menuToggle span {

                width: 32px;
                height: 2px;
                margin-bottom: 7.5px;
                border-radius: 1px;
            }


            #menu {

                width: 410px;
                height: 812x;


            }

            .rwdonly {
                display: unset;
                margin: 0 0 113px 0;
            }


        }
    </style>

    <div style="position:fixed;">
        <div class="x1">

            <div class="x11 ">
                <nav role="navigation" class="" style="transform: translateY(-50px);">
                    <div id="menuToggle">
                        <!--
                    A fake / hidden checkbox is used as click reciever,
                    so you can use the :checked selector on it.
                    -->
                        <input type="checkbox" />

                        <!--
                    Some spans to act as a hamburger.   
                    
                    They are acting like a real hamburger,
                    not that McDonalds stuff.
                    -->
                        <span></span>
                        <span></span>
                        <span></span>

                        <!--
                    Too bad the menu has to be inside of the button
                    but hey, it's pure CSS magic.
                    -->
                        <ul id="menu">
                            <a href="#">
                                <li><img src="img/navbar/navbar_2menulogo.png" alt="" class="rwdonly"></li>
                            </a>
                            <a href="#">
                                <li class="h5eng">HOME</li>
                            </a>
                            <a href="#">
                                <li class="h5eng">ABOUT</li>
                            </a>
                            <a href="#">
                                <li class="h5eng">ROOM</li>
                            </a>
                            <a href="<?= WEB_ROOT ?>/_experience.php">
                                <li class="h5eng">EXPERIENCE</li>
                            </a>
                            <a href="#">
                                <li class="h5eng">WEDDING</li>
                            </a>
                            <a href="#">
                                <li class="h5eng">FACILITY</li>
                            </a>
                            <a href="#">
                                <li class="h5eng">GALLERY</li>
                            </a>
                            <div class="d-flex" style="padding: 10px 0;font-size: 20px;margin:0 auto;width: 150px;">
                                <a href=""><img src="img/navbar/navbar_facebook.svg" alt="" style="margin: 0 30px 0 0 ;"></a>
                                <a href=""><img src="img/navbar/navbar_instagram.svg" alt="" style="margin: 0 30px 0 0 ;"></a>
                                <a href=""><img src="img/navbar/navbar_twitter.svg" alt="margin: 0 0 0 0 ;"></a>
                            </div>
                        </ul>
                    </div>
                </nav>
                <img class="webarcadia" src="img/navbar/navbar.svg" alt="">
                <img class="mobilearcadia" src="img/navbar/navbar_1logo.png" alt="">
                <!-- <div class=" d-flex" style="justify-content: space-around;align-items: center;width: 80vw;"> -->
                <div style=" display: flex; justify-content: space-around;align-items:center">

                    <!-- 2020/08/10新增 Member Icon 增加下拉選單，包含會員中心、訂單紀錄、登出 -->
                    <ul class="navbar-nav">
                        <?php if (isset($_SESSION['members'])) : ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="cursor: pointer;">

                                    <img class="front-img" src="img/navbar/navbar_user.svg" alt="">
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color:#09839C">
                                    <a class="dropdown-item h5chi" href="<?= WEB_ROOT ?>/_member.php">會員中心</a>
                                    <a class="dropdown-item h5chi" href="">訂單紀錄</a>
                                    <a class="dropdown-item h5chi" href="<?= WEB_ROOT ?>/_logout.php">登出</a>
                                </div>
                            </li>

                        <?php else : ?>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img class="front-img" src="img/navbar/navbar_user.svg" alt="">
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #09839C;">

                                    <!-- 2020/08/10新增 點擊後叫出登入的Bootstrap，連接php -->
                                    <a class="dropdown-item h5chi" href=" " data-toggle="modal" data-target="#exampleModal">登入</a>
                                    <!-- 2020/08/10新增 點擊後叫出登入的Bootstrap，連接php -->
                                    <!-- 2020/08/11新增 點擊後叫出註冊的Bootstrap，連接php -->
                                    <a class="dropdown-item h5chi" href="" data-toggle="modal" data-target="#exampleModal3">註冊</a>
                                    <!-- 2020/08/11新增 點擊後叫出註冊的Bootstrap，連接php -->
                                </div>
                            </li>

                        <?php endif; ?>
                    </ul>
                    <!-- 2020/08/10新增 Member Icon 增加下拉選單，包含會員中心、訂單紀錄、登出 -->


                    <div class="book d-flex ">
                        <a class="123 d-flex bodytexteng" href="" type="" data-toggle="collapse" data-target="#book">Book Now</a>
                    </div>
                </div>
                <!-- </div> -->
            </div>
            <!--    Made by Erik Terwan    -->
            <!--   24th of November 2015   -->
            <!--        MIT License        -->

        </div>


        <div class="collapse" id="book" style="width:100vw;height:440px;background-color: #5D5D5D;">

            <style>
                .bookingbar {
                    width: 100vw;
                    height: 330px;
                    background-color: #5D5D5D;
                    align-items: flex-end;
                    justify-content: center;
                    display: flex;


                }

                .checkindate {

                    flex-direction: column;
                    color: #FFFFFF;
                    margin: 0px 0px 124px 0;
                    /* font-weight: bold; */
                    width: 320px;
                    height: 38px;
                }

                .checkoutdate {
                    flex-direction: column;
                    color: #FFFFFF;
                    margin: 0px 0px 124px 0;
                    /* font-weight: bold; */
                    width: 320px;
                    height: 38px;
                }

                .reservation {

                    flex-direction: column;
                    margin: 0px 0px 124px 0;
                    color: #FFFFFF;
                    width: 245px;
                    height: 38px;
                }

                /* .booking {
                    z-index: 0;
                    width: 245px;
                    height: 38px;
                    margin: 0;
                } */

                .booking {
                background: #EB9851;
                width: 150px;
                height: 42px;
                justify-content: center;
                align-items: center;
                border: none;
                color: white;
                margin: 0 0 98px 0;
                }

                .booking a {
                    color: white;
                }

                /* ---date picker--- */
                .date-picker {
        width: 270px;
        height: auto;
        max-height: 42px;
        background:white;
        position: relative;
        overflow: hidden;
        -webkit-transition: all 0.3s 0s ease-in-out;
        transition: all 0.3s 0s ease-in-out;
        margin: 0 0 124px 0;
        }
        .date-picker .input {
        width: 100%;
        height: 42px;
        font-size: 0;
        cursor: pointer;
        }
        .date-picker .input .result, .date-picker .input button {
        display: inline-block;
        vertical-align: top;
        }
        .date-picker .input .result {
        width: calc(100% - 42px);
        height: 42px;
        line-height: 42px;
        font-size: 16px;
        padding: 0 0 0 20px;
        color: grey;
        box-sizing: border-box;
        }
        .date-picker .input button {
        width: 42px;
        height: 42px;
        background-color: #09839C;
        color: white;
        line-height: 42px;
        border: 0;
        font-size: 18px;
        padding: 0;
        }
        .date-picker .input button:hover {
        background-color: #EB9851;
        }
  
        .date-picker .input button:focus {
        outline: 0;
        }
        .date-picker .calendar {
        position: relative;
        width: 100%;
        background: #fff;
        border-radius: 0px;
        overflow: hidden;
        }
        .date-picker .ui-datepicker-inline {
        position: relative;
        width: 100%;
        }
        .date-picker .ui-datepicker-header {
        height: 100%;
        line-height: 42px;
        background: #09839C;
        color: #fff;
        margin-bottom: 10px;
        }
        .date-picker .ui-datepicker-prev, .date-picker .ui-datepicker-next {
        width: 20px;
        height: 20px;
        text-indent: 9999px;
        /* border: 2px solid #fff;
        border-radius: 100%; */
        cursor: pointer;
        overflow: hidden;
        margin-top: 12px;
        }
        .date-picker .ui-datepicker-prev {
        float: left;
        margin-left: 12px;
        }
        .date-picker .ui-datepicker-prev:after {
        -webkit-transform: rotate(45deg);
                transform: rotate(45deg);
        margin: -43px 0px 0px 8px;
        }
        .date-picker .ui-datepicker-next {
        float: right;
        margin-right: 12px;
        }
        .date-picker .ui-datepicker-next:after {
        -webkit-transform: rotate(-135deg);
                transform: rotate(-135deg);
        margin: -43px 0px 0px 6px;
        }
        .date-picker .ui-datepicker-prev:after, .date-picker .ui-datepicker-next:after {
        content: "";
        position: absolute;
        display: block;
        width: 10px;
        height: 10px;
        border-left: 2px solid #fff;
        border-bottom: 2px solid #fff;
        }
        .date-picker .ui-datepicker-prev:hover, .date-picker .ui-datepicker-next:hover, .date-picker .ui-datepicker-prev:hover:after, .date-picker .ui-datepicker-next:hover:after {
        border-color: #EB9851;
        }
        .date-picker .ui-datepicker-title {
        text-align: center;
        }
        .date-picker .ui-datepicker-calendar {
        width: 100%;
        text-align: center;
        }
        .date-picker .ui-datepicker-calendar thead tr th span {
        display: block;
        width: 100%;
        color: #09839C;
        margin-bottom: 5px;
        font-size: 13px;
        }
        .date-picker .ui-state-default {
        display: block;
        text-decoration: none;
        color: #b5b5b5;
        line-height: 40px;
        font-size: 12px;
        }
        .date-picker .ui-state-default:hover {
        background: rgba(0, 0, 0, 0.02);
        }
        .date-picker .ui-state-highlight {
        color: #68768A;
        }
        .date-picker .ui-state-active {
        color: #EB9851;
        background-color: rgba(131, 146, 167, 0.12);
        font-weight: 600;
        }
        .date-picker .ui-datepicker-unselectable .ui-state-default {
        color: #eee;
        border: 2px solid transparent;
        }
        .date-picker.open {
        max-height: 400px;
        }
        .date-picker.open .input button {
        background: #EB9851;
        }
     
        .reservePerson{
          width: 220px;
        height: 42px;
        background:white;
        }
        .reservePerson.option select{
          outline: none;
          border: none;
          background-color: white;
          
        }

             /* --- person dropdown   ---  */
        .icon_select_mate {
          position: absolute;
          top: 20px;
          right: 2%;
          font-size: 16px;
          height: 22px;
          transition: all 275ms;
        }

        .select_mate {
          position: relative;
          float: left;
          width: 200px;
          height: 42px;
          color: #777;
          font-weight: 300;
          background-color: #fff;
          box-shadow: 1px 2px 10px -2px rgba(0, 0, 0, 0.3);
          transition: all 375ms ease-in-out;
          font-family: 'Noto Serif TC', serif;
          
        }
        .select_mate select {
          position: absolute;
          overflow: hidden;
          height: 0px;
          opacity: 0;
          z-index: -1;
        }

        .cont_list_select_mate {
          position: relative;
          float: left;
          width: 100%;
        }

        .cont_select_int {
          position: absolute;
          left: 0px;
          top: 0px;
          z-index: 999;
          overflow: hidden;
          height: 0px;
          width: 100%;
          background-color: #fff;
          padding: 0px;
          margin-bottom: 0px;
          margin-top: 0px;
          border-radius: 0px 0px 3px 3px;
          /* box-shadow: 1px 4px 10px -2px rgba(0, 0, 0, 0.2); */
          transition: all 375ms ease-in-out;
        }
        .cont_select_int li {
          position: relative;
          float: left;
          width: 100%;
          height: 42px;
          border-bottom: 1px solid #E0E0E0;
          background-color: white;
          list-style-type: none;
          /* padding: 10px 2%; */
          margin: 0px;
          transition: all 275ms ease-in-out;
          display: block;
          cursor: pointer;
          padding-left: 50px;
          padding-top: 2px;
        }
        .cont_select_int li:last-child {
          border-bottom: 0px;
        }
        .cont_select_int li:hover {
          background-color: #EEEEEE;
          padding-top: 10px;
          color: #EB9851;
          padding-left: 50px;
        }
        .cont_select_int .active {
          background-color: white;
          padding-top: 10px;
          padding-left: 50px;
        }

        /* etiqueta <p> con la opcion selecionada  */
        .selecionado_opcion {
          width: 200px;
          height: 42px;
          display: block;
          margin: 0px;
          cursor: pointer;
          padding-top: 10px;
          padding-left: 50px;
          border-bottom: 1px solid #E0E0E0;
          font-family: 'Noto Serif TC', serif;
        }
        @media screen and (max-width: 375px) {
          .bookingbar{
            flex-direction: column;
            margin: 0 auto;
            height: 650px;
            width: 375px;
            align-items: center;
          }
          .checkindate{
            margin:100px 0 50px 0;
            width: unset;
            z-index: 300;
          }
          .checkoutdate{
            margin:0 0 50px 0;
            width: unset;
            z-index: 100;
          }
          .booking{
            width: 270px;
          }
          .reservation{
            width: 270px;
          }
          .select_mate{
            width: 270px;
          }
          .selecionado_opcion{
            width: 270px;
          }
          .cont_select_int li{
            padding-top: 10px;
          }
        
        }
            </style>
            <!-- date picker  -->
            <div class="bookingbar">
                <div class="checkindate">
                    <span class="bodytextchi">入住日期</span>

                    <div class="date-picker">
                        <div class="input">
                            <div class="result bodytextchi"><span id="checkindate">選擇入住日期 </span></div>
                            <button><i class="fa fa-calendar"></i></button>
                        </div>
                        <div class="calendar"></div>
                    </div>
                </div>

                <div class="checkoutdate">
                    <span class="bodytextchi">退房日期</span>
                    <div class="date-picker">
                        <div class="input">
                            <div class="result bodytextchi"><span id="checkoutdate">選擇退房日期 </span></div>
                            <button><i class="fa fa-calendar "></i></button>
                        </div>
                        <div class="calendar"></div>
                    </div>
                </div>
                <!-- select box -->
                <div class="reservation">
                    <span class="bodytextchi">預約人數</span>
                    <div class="select_mate" data-mate-select="active" >
      <select name="" onchange="" onclick="return false;" id="select-box">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
        </select>
      <p class="selecionado_opcion"  onclick="open_select(this)" ></p><span onclick="open_select(this)" class="icon_select_mate" >
        <svg fill="#09839C" height="40" viewBox="0 0 24 24" width="40" style="padding-bottom: 10px;" xmlns="http://www.w3.org/2000/svg">
          <path d="M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z"/>
          <path d="M0-.75h24v24H0z" fill="none"/>
      </svg>
    </span> 
      <div class="cont_list_select_mate">
        <ul class="cont_select_int">  </ul> 
      </div>
        </div>
      </div>
<!-- buy button -->
                <div class=" d-flex ">
                    <button class=" d-flex h5eng booking" href="" id="buy-button">Booking</button>
                </div>

            </div>
            <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

            <script>
                const buy_btns = $('#buy-button');

                buy_btns.click(function() {
                const p_item = $(this).closest('.bookingbar');
                // const checkindate = p_item.attr('data-sid');
                const checkindate = p_item.find('#checkindate').text();
                const checkoutdate = p_item.find('#checkoutdate').text();
                  const persons = p_item.find('#select-box').val();


                console.log(checkindate);
                console.log(checkoutdate);
                 console.log(persons);

                const sendObj = {

                    checkindate: checkindate,
                    checkoutdate: checkoutdate,
                    persons: persons
                }



                // 指向API 


                $.get('booking-api.php', sendObj, function(data) {
                    console.log(data);
                    //setCartCount(data);
                    location.href = "booking.php";
                }, 'json');
                });



              
            </script>

        </div>
    </div>

    <!-- 2020/08/10新增 點擊後叫出登入的Bootstrap，連接php -->
    <!-- 登入的Modal -->
    <div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

        <div class="modal-dialog">

            <div class="modal-content">

                <!-- Alert 視窗 -->
                <div id="info-bar" class="alert alert-success" role="alert" style="display: none;">Test</div>
                <!-- Alert 視窗 -->

                <div class="modal-header">

                    <div class="windowTitle h4chi">登入會員</div>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                </div>

                <div class="modal-body">

                    <form name="form1" method="post" novalidate>

                        <div class="inputbox account bodytextchi">
                            <span class="email">帳號</span>
                            <div>
                                <input type="email" id="login-email" name="email" placeholder="請輸入您的E-MAIL" class="form-control bodytextchi" aria-label="Username" aria-describedby="basic-addon1">
                                <small id="emailHelp" class="form-text"></small>
                            </div>
                        </div>
                        <div class="inputbox password bodytextchi">
                            <span class="password">密碼</span>
                            <div>
                                <input type="password" id="login-password" name="password" placeholder="請輸入您的密碼" class="form-control bodytextchi" aria-label="password" aria-describedby="basic-addon1">
                                <small class="form-text"></small>
                            </div>
                            <a href="" class="OrangeLink bodytextchi">忘記密碼</a>
                        </div>

                        <button type="submit" class="OrangeBtn bodytextchi" onclick="return formCheck()"><span>登入</span></button>

                    </form>

                    <div class="middleTitle">
                        <div class="linebox"></div>
                        <div class="ortext bodytextchi">或點一下登入</div>
                        <div class="linebox"></div>
                    </div>

                    <a class="facebooklogin connectButton" href="https://www.facebook.com/">
                        <img src="icon/facebook.svg" alt="">
                        <div class="connecttext bodytextchi">FACEBOOK</div>
                        <div class="flexbox"></div>
                    </a>

                    <a class="googlelogin connectButton" href="https://www.google.com/">
                        <img src="icon/google.svg" alt="">
                        <div class="connecttext bodytextchi">GOOGLE</div>
                        <div class="flexbox"></div>
                    </a>


                </div>

                <div class="modal-footer">

                    <div class="footertext">
                        <span class="bodytextchi">沒有會員帳號嗎？</span>
                        <a class="OrangeLink bodytextchi" href="">點此註冊</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- 2020/08/10新增 點擊後叫出登入的Bootstrap，連接php -->


    <!-- 2020/08/11新增 點擊後叫出註冊的Bootstrap，連接php -->
    <!-- 註冊的Modal -->
    <div class="modal fade " id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

        <div class="modal-dialog">

            <div class="modal-content">
                <div id="info-bar" class="alert alert-success" role="alert" style="display: none;">Test</div>

                <div class="modal-header">

                    <div class="windowTitle h4chi">加入會員</div>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                </div>
                <div class="modal-body">

                    <form name="form2" method="post" novalidate>

                        <div class="inputbox bodytextchi passportname form-group">

                            <span for="lastname">護照姓名</span>

                            <div class="form-row">

                                <div class="col">
                                    <input type="lastname" id="lastname" name="lastname" class="form-control " placeholder="姓氏">
                                    <small id="lastname" class="form-text"></small>
                                </div>

                                <div class="col">
                                    <input type="name" id="name" name="name" class="form-control" placeholder="名字">
                                    <small id="name" class="form-text"></small>
                                </div>

                            </div>

                        </div>

                        <div class="inputbox account bodytextchi form-group">

                            <span for="email">帳號</span>
                            <div>
                                <input type="email" id="signup-email" name="email" placeholder="請輸入您的E-MAIL" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                                <small id="email" class="form-text"></small>
                            </div>

                        </div>

                        <div class="inputbox password bodytextchi form-group">

                            <span>密碼</span>
                            <div>
                                <input type="password" id="signup-password" name="password" placeholder="請輸入您的密碼" class="form-control" aria-label="password" aria-describedby="basic-addon1">
                                <small class="form-text"></small>
                            </div>

                        </div>

                        <button type="submit" class="OrangeBtn bodytextchi" onclick="return formCheck2()"><span>加入會員</span></button>

                    </form>

                    <div class="middleTitle">
                        <div class="linebox"></div>
                        <div class="ortext bodytextchi">或點一下登入</div>
                        <div class="linebox"></div>
                    </div>

                    <a class="facebooklogin connectButton" href="https://www.facebook.com/">
                        <img src="icon/facebook.svg" alt="">
                        <div class="connecttext bodytextchi">FACEBOOK</div>
                        <div class="flexbox"></div>
                    </a>

                    <a class="googlelogin connectButton" href="https://www.google.com/">
                        <img src="icon/google.svg" alt="">
                        <div class="connecttext bodytextchi">GOOGLE</div>
                        <div class="flexbox"></div>
                    </a>

                </div>

                <div class="modal-footer">

                    <div class="footertext">
                        <span class="bodytextchi">已經是會員帳號嗎？</span>
                        <a class="OrangeLink bodytextchi" href="">點此登入</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- 2020/08/11新增 點擊後叫出註冊的Bootstrap，連接php -->











    <div class="x2">

        <a style="color: #5D5D5D;margin-right: 50px;" href="" class="h5eng fontregu">ABOUT</a>
        <a style="color: #5D5D5D;margin-right: 50px;" href="" class="h5eng fontregu">ROOM</a>
        <a style="color: #5D5D5D;margin-right: 50px;" href="" class="h5eng fontregu">EXPERIENCE</a>
        <a style="color: #5D5D5D;margin-right: 50px;" href="" class="h5eng fontregu">WEDDING</a>
        <a style="color: #5D5D5D;margin-right: 50px;" href="" class="h5eng fontregu">FACILITY</a>
        <a style="color: #5D5D5D;margin-right: 50px;" href="" class="h5eng fontregu">GALLERY</a>

    </div>

    <div style="width: 100vw;height: 100vh;background: blue;"></div>



    <!-- <div style="width: 100vw; height: 100vh; background-color: salmon;"> </div>
      <img class="" src="/title/lisa.jpg" alt="" style="width: 100VW;"> -->
    <!-- <img src="/title/readmckendree-2017-06-5-nihiwatu-183-v1-mfrzd-2000k.svg" alt=""> -->

    <!-- ------------------------------                 add              -------------------------------- -->


    <?php

    include __DIR__ . '/__script.php';

    ?>

    <!-- 2020/08/10新增 點擊後叫出登入的Bootstrap，連接到login.php，執行以下判斷 -->
    <script>
        //自動點擊bottom
        // function myfunction(){
        //     $(document).ready(function(){
        //         $('#autoclick').click();
        //     });
        // };



        //加入Email 帳號欄位的格式判斷


        function formCheck() {
            const email = $('#login-email'),
                password = $('#login-password'),
                info_bar = $('#info-bar');


            const email_re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
            email.next().text('');
            password.next().text('');

            email.css('border-color', '#CCCCCC');
            password.css('border-color', '#CCCCCC')

            let isPass = true;

            if (!email_re.test(email.val())) {
                isPass = false;
                email.next().text('*請填入正確的E-mail格式');
            }

            if (password.val().length < 6) {
                isPass = false;
                password.css('border-color', 'red');
                password.next().text('*請輸入長度為8位的密碼');
            }

            if (isPass) {
                $.post('_login-api.php', $(document.form1).serialize(), function(data) {
                    console.log(data);

                    if (data.success) {
                        Swal.fire({
                            title: "登入成功",
                            icon: 'success',
                            showConfirmButton: false,
                            timer: 1500
                        });
                        setTimeout(function() {
                            location.href = '_about.php';
                        }, 3000);
                    } else {
                        Swal.fire({
                            title: "此帳號尚未註冊",
                            icon: "error",
                            showConfirmButton: false,
                            timer: 1500
                        });
                    }

                    // if (data.success) {
                    //   info_bar.removeClass('alert-danger')
                    //     .addClass('alert-success')
                    //     .html('登入成功!');

                    //   setTimeout(function() {
                    //     location.href = './_index.php'; //登入成功後轉換頁面到首頁
                    //   }, 3000);

                    // } else {
                    //   info_bar.removeClass('alert-success')
                    //     .addClass('alert-danger')
                    //     .html('帳號或密碼有誤');
                    // }
                    // info_bar.slideDown();

                    // setTimeout(function() {
                    //   info_bar.slideUp();
                    // }, 2000);
                }, 'json');

            }

            return false;
        }


        // 點擊Icon後跳出登入視窗
        // $('#exampleModal').modal()
    </script>

    <script>
        //加入手機和Email欄位的格式判斷


        function formCheck2() {
            const lastname = $('#lastname'),
                name = $('#name'),
                email = $('#signup-email'),
                password = $('#signup-password'),
                info_bar = $('#info-bar');


            const email_re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
            // const mobile_re = /^09\d{2}-?\d{3}-?\d{3}$/;
            lastname.next().text('');
            name.next().text('');
            email.next().text('');
            password.next().text('');


            let isPass = true;

            if (lastname.val().trim().length < 1) {
                isPass = false;
                lastname.css('border-color', 'red');
                lastname.next().text('*請輸入您的姓氏');
            }

            if (name.val().trim().length < 1) {
                isPass = false;
                name.css('border-color', 'red');
                name.next().text('*請輸入您的名子');
            }

            if (!email_re.test(email.val())) {
                isPass = false;
                email.css('border-color', 'red');
                email.next().text('*請填入正確的E-mail格式');
            }

            if (password.val().length < 6) {
                isPass = false;
                password.css('border-color', 'red');
                password.next().text('*請輸入長度為8位的密碼');
            }


            if (isPass) {
                $.post('_register-api.php', $(document.form2).serialize(), function(data) {
                    console.log(data);

                    if (data.success) {
                        info_bar.removeClass('alert-danger')
                            .addClass('alert-success')
                            .html('註冊成功!');

                        setTimeout(function() {
                            location.href = './registerWelcome.php';
                        }, 3000);

                    } else {
                        info_bar.removeClass('alert-success')
                            .addClass('alert-danger')
                            .html(data.error || '帳號或密碼有誤');
                    }
                    info_bar.slideDown();

                    setTimeout(function() {
                        info_bar.slideUp();
                    }, 2000);
                }, 'json');

            }

            return false;
        }
    </script>










    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>











    <script>
        let navPosition = $(".x2").offset().top;
        console.log(navPosition)

        $(window).scroll(function() {
            let scrollTop = $(this).scrollTop()
            if (scrollTop >= 700) {
                $(".x2").addClass("active")
                // $(".x11").addClass("white")
            } else {
                $(".x2").removeClass("active")
                // $(".x11").removeClass("white")
            }

        })
        $(window).scroll(function() {
            let scrollTop = $(this).scrollTop()
            if (scrollTop >= 300) {

                $(".x11").addClass("white")
            } else {

                $(".x11").removeClass("white")
            }

        })
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>

    <script>
        $(function() {
            $(".calendar").datepicker({
                dateFormat: 'yy/mm/dd',
                firstDay: 1
            });

            $(document).on('click', '.date-picker .input', function(e) {
                var $me = $(this),
                    $parent = $me.parents('.date-picker');
                $parent.toggleClass('open');
            });


            $(".calendar").on("change", function() {
                var $me = $(this),
                    $selected = $me.val(),
                    $parent = $me.parents('.date-picker');
                $parent.find('.result').children('span').html($selected);
            });
        });
    </script>
     <!-- person dropdown function -->

     <script>
        window.onload = function(){
        crear_select();
      }
      
      function isMobileDevice() {
          return (typeof window.orientation !== "undefined") || (navigator.userAgent.indexOf('IEMobile') !== -1);
      };
      
      
      var li = new Array();
      function crear_select(){
      var div_cont_select = document.querySelectorAll("[data-mate-select='active']");
      var select_ = '';
      for (var e = 0; e < div_cont_select.length; e++) {
      div_cont_select[e].setAttribute('data-indx-select',e);
      div_cont_select[e].setAttribute('data-selec-open','false');
      var ul_cont = document.querySelectorAll("[data-indx-select='"+e+"'] > .cont_list_select_mate > ul");
      select_ = document.querySelectorAll("[data-indx-select='"+e+"'] >select")[0];
      if (isMobileDevice()) { 
      select_.addEventListener('change', function () {
      _select_option(select_.selectedIndex,e);
      });
      }
      var select_optiones = select_.options;
      document.querySelectorAll("[data-indx-select='"+e+"']  > .selecionado_opcion ")[0].setAttribute('data-n-select',e);
      document.querySelectorAll("[data-indx-select='"+e+"']  > .icon_select_mate ")[0].setAttribute('data-n-select',e);
      for (var i = 0; i < select_optiones.length; i++) {
      li[i] = document.createElement('li');
      if (select_optiones[i].selected == true || select_.value == select_optiones[i].innerHTML ) {
      li[i].className = 'active';
      document.querySelector("[data-indx-select='"+e+"']  > .selecionado_opcion ").innerHTML = select_optiones[i].innerHTML;
      };
      li[i].setAttribute('data-index',i);
      li[i].setAttribute('data-selec-index',e);
      // funcion click al selecionar 
      li[i].addEventListener( 'click', function(){  _select_option(this.getAttribute('data-index'),this.getAttribute('data-selec-index')); });
      
      li[i].innerHTML = select_optiones[i].innerHTML;
      ul_cont[0].appendChild(li[i]);
      
          }; // Fin For select_optiones
        }; // fin for divs_cont_select
      } // Fin Function 
      
      
      
      var cont_slc = 0;
      function open_select(idx){
      var idx1 =  idx.getAttribute('data-n-select');
        var ul_cont_li = document.querySelectorAll("[data-indx-select='"+idx1+"'] .cont_select_int > li");
      var hg = 0;
      var slect_open = document.querySelectorAll("[data-indx-select='"+idx1+"']")[0].getAttribute('data-selec-open');
      var slect_element_open = document.querySelectorAll("[data-indx-select='"+idx1+"'] select")[0];
      if (isMobileDevice()) { 
        if (window.document.createEvent) { // All
        var evt = window.document.createEvent("MouseEvents");
        evt.initMouseEvent("mousedown", false, true, window, 0, 0, 0, 0, 0, false, false, false, false, 0, null);
        slect_element_open.dispatchEvent(evt);
      } else if (slect_element_open.fireEvent) { // IE
        slect_element_open.fireEvent("onmousedown");
      }else {
        slect_element_open.click();
      }
      }else {
      
        
        for (var i = 0; i < ul_cont_li.length; i++) {
      hg += ul_cont_li[i].offsetHeight;
      }; 
      if (slect_open == 'false') {  
      document.querySelectorAll("[data-indx-select='"+idx1+"']")[0].setAttribute('data-selec-open','true');
      document.querySelectorAll("[data-indx-select='"+idx1+"'] > .cont_list_select_mate > ul")[0].style.height = hg+"px";
      document.querySelectorAll("[data-indx-select='"+idx1+"'] > .icon_select_mate")[0].style.transform = 'rotate(180deg)';
      }else{
      document.querySelectorAll("[data-indx-select='"+idx1+"']")[0].setAttribute('data-selec-open','false');
      document.querySelectorAll("[data-indx-select='"+idx1+"'] > .icon_select_mate")[0].style.transform = 'rotate(0deg)';
      document.querySelectorAll("[data-indx-select='"+idx1+"'] > .cont_list_select_mate > ul")[0].style.height = "0px";
      }
      }
      
      } // fin function open_select
      
      function salir_select(indx){
      var select_ = document.querySelectorAll("[data-indx-select='"+indx+"'] > select")[0];
      document.querySelectorAll("[data-indx-select='"+indx+"'] > .cont_list_select_mate > ul")[0].style.height = "0px";
      document.querySelector("[data-indx-select='"+indx+"'] > .icon_select_mate").style.transform = 'rotate(0deg)';
      document.querySelectorAll("[data-indx-select='"+indx+"']")[0].setAttribute('data-selec-open','false');
      }
      
      
      function _select_option(indx,selc){
      if (isMobileDevice()) { 
      selc = selc -1;
      }
          var select_ = document.querySelectorAll("[data-indx-select='"+selc+"'] > select")[0];
      
        var li_s = document.querySelectorAll("[data-indx-select='"+selc+"'] .cont_select_int > li");
        var p_act = document.querySelectorAll("[data-indx-select='"+selc+"'] > .selecionado_opcion")[0].innerHTML = li_s[indx].innerHTML;
      var select_optiones = document.querySelectorAll("[data-indx-select='"+selc+"'] > select > option");
      for (var i = 0; i < li_s.length; i++) {
      if (li_s[i].className == 'active') {
      li_s[i].className = '';
      };
      li_s[indx].className = 'active';
      
      };
      select_optiones[indx].selected = true;
        select_.selectedIndex = indx;
        select_.onchange();
        salir_select(selc); 
      }
      
    
        </script>
</body>

</html>