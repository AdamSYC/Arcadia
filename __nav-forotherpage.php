<?php
if (empty($pageName)) {
  $pageName = '__nav.php';
}
?>

<style>

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
    opacity: 100%;
    margin: 15px;
    height: 50px;
    transition: 1.5s;
    display: flex;
    justify-content: center;

  }

  .webarcadia.show {
    opacity: 100%;
  }

  /* 2020/08/13 新增Marcy的修改 */
  .hamMenu {
    transform: translateY(-50px);
    width: 213px;
  }

  .navRight {
    display: flex;
    justify-content: space-around;
    align-items: center
  }

  /* 2020/08/13 新增Marcy的修改 */

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
    text-decoration: none;
  }

  .book:hover {
    background: #DB8236;
  }

  .toppage {
    width: 100%;
    height: 100%;
  }

  .toppage img {
    width: 100%;
  }


  .x2 {
    opacity: 100%;
    position: fixed;
    top: 80px;
    display: flex;
    background: #E4E4E4;
    padding: 10px 6rem;
    width: 100vw;
    justify-content: space-around;
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
    font-weight: bold;
    display: flex;
    flex-direction: column;
    margin: 82px 50px 124px 0;
  }

  /* .booking {
    margin: 100px 50px 0 0;
    background: #EB9851;
    width: 133px;
    height: 40px;
    justify-content: center;
    align-items: center;
    font-weight: bold;
    font-family: 'Crimson Text', serif;
    font-size: 15px;
  } */

  /* .booking a {
    color: white;
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
    position: absolute;
    left: 42%;
  }

  .memberbtn_Right {
    width: 30px;
    /* margin-right: 20px; */
  }

  .memberbtn_Left {
    display: none;
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
    /* color: #232323; */
    transition: color 0.3s ease;
  }

  #menuToggle input {
    display: block;
    width: 51px;
    height: 36px;
    position: absolute;
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
    width: 500px;
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

  /* #menu li {
    text-align: center;
    color: #ffff;
    padding: 10px 0;
    font-size: 20px;

    margin-bottom: 32px;
    transition: 1s;
  } */

  #menu li:hover {
    color: white;
    text-decoration: none;
  }

  #menu2 a:hover {
    color: #5D5D5D;
    text-decoration: none;
  }

  /*
 * And let's slide it in from the left
 */
  #menuToggle input:checked~ul {
    transform: none;
  }

  #menuToggle a {
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

  /* menu_btn */


  .linebuttons_container {

    display: table-cell;
    padding: 1em;
    text-align: center;
    vertical-align: middle;
  }

  .linebuttons {
    display: table;
    /* height: 100%; */
    width: 100%;
    color: #fff;

  }

  .btnfos {
    cursor: pointer;
    display: block;
    font-size: 16px;
    font-weight: 400;
    line-height: 45px;
    max-width: 160px;
    margin: 0 auto 2em;
    position: relative;
    text-transform: uppercase;
    /* vertical-align: middle; */
    width: 100%;
    -moz-box-sizing: inherit;
    box-sizing: inherit;
    -webkit-transition-property: all;
    transition-property: all;
    -webkit-transition-duration: .6s;
    transition-duration: .6s;
    -webkit-transition-timing-function: ease;
    transition-timing-function: ease;
  }

  .btnfos-2 {
    letter-spacing: 0;
  }

  .hamberlinkcolor {
    color: white;
  }

  .navlinkcolor {
    color: #5D5D5D;
  }

  .btnfos-2:hover,
  .btnfos-2:active {
    letter-spacing: 5px;
  }

  .btnfos-2:after {
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    border: 1px solid rgba(255, 255, 255, 0);
    bottom: 0px;
    content: " ";
    display: block;
    margin: 0 auto;
    position: relative;
    -webkit-transition: all 280ms ease-in-out;
    transition: all 280ms ease-in-out;
    width: 0;
  }

  .btnfos-2:hover:after {
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    border-color: #fff;
    -webkit-transition: width 350ms ease-in-out;
    transition: width 350ms ease-in-out;
    width: 70%;
  }

  .btnfos-2:hover:before {
    bottom: auto;
    top: 0;
    width: 70%;
  }


  .imgLink {
    margin: 2rem auto;
    width: 160px;
    display: flex;
    justify-content: space-around;
    transition: .5s;
  }

  .imgLink svg {
    width: 30px;
    height: 30px;
    fill: #d7e6e8;
    transition: .5s;
  }

  .imgLink svg:hover {
    fill: #fff;
  }

  /* navbar */
  /* 設定登入的Icon位置 */
  .nav-link{
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    margin-right: 15px;
  }
  /* 設定登入的Icon位置 */

  .lineBtn_nav {
    display: flex;
    /* color: #5D5D5D; 放了連結後此處會讀不到顏色*/
    padding: 0;
    margin: 0;
  }

  .btnfos2 {
    cursor: pointer;
    display: block;
    font-size: 16px;
    font-weight: 400;
    /* line-height: 45px; */
    max-width: 160px;
    margin: 0 auto;
    position: relative;
    text-transform: uppercase;
    /* vertical-align: middle; */
    width: 100%;
    -moz-box-sizing: inherit;
    box-sizing: inherit;
    -webkit-transition-property: all;
    transition-property: all;
    -webkit-transition-duration: .6s;
    transition-duration: .6s;
    -webkit-transition-timing-function: ease;
    transition-timing-function: ease;
  }

  .btnfos-:hover:after {
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    border-color: #5d5d5d;
    -webkit-transition: width 350ms ease-in-out;
    transition: width 350ms ease-in-out;
    width: 70%;
    text-decoration: none;
  }


  /* 2020/08/10新增 Member Icon 增加下拉選單，包含會員中心、訂單紀錄、登出 */

  .dropdown-item {
    color: white;
  }

  .logout .dropdown-item {
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

  /* 2020/08/12 彈出視窗的樣式*/
  .swal2-title {
    color: #09839C;
    font-family: 'Noto Serif TC', serif;
  }

  /* 2020/08/12 彈出視窗的樣式*/

  /* 2020/08/12新增 點擊忘記密碼叫出Bootstrap的彈出視窗 */


  /* RWD */
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
      background-color: rgba(255, 255, 255, .8);
      /* padding: 0 1rem; */
      justify-content: space-between;
      position: fixed;
    }

    .x11.white {
      background-color: rgba(255, 255, 255, .8);
    }


    .memberbtn_Right {
      width: 30px;
      margin-right: 20px;
      display: none;
    }

    .memberbtn_Left {
      display: block;
      width: 26px;
      position: absolute;
      left: 4rem;
    }

    /* ---------------------------ham */

    .hamMenu {
      display: flex;
      flex-direction: row;
      align-items: center;
      width: 100px;
    }


    .book {
      cursor: pointer;
      width: 100px;
      height: 60px;
      margin: 0;
      z-index: -1;
    }

    .book:hover {
      background: #DB8236;
    }

    .book a {
      /* color: #FFFFFF; */
      font-size: 15px;
      text-decoration: none;
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
      width: 300px;
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
      margin-top: 5px;
      left: 1rem;

    }

    #menuToggle a {
      text-decoration: none;
      /* color: #2323 23; */

      transition: color 0.3s ease;
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

      width: 440px;
      /* height: 812x; */


    }

    .rwdonly {
      /* display: unset;
      margin: 0 0 113px 0; */
      margin: 0 auto 2em;
      display: block;
    }
  }
</style>

<div>
  <div class="x1" style="position: fixed;">

    <div class="x11 ">
      <nav class="hamMenu" role="navigation">
        <div id="menuToggle">
          <!--
                A fake / hidden checkbox is used as click reciever,
                so you can use the :checked selector on it.
                -->
          <input type="checkbox" />
          <span></span>
          <span></span>
          <span></span>

          <ul id="menu">
            <a href="javascript:">
              <li><img src="img/navbar/navbar_2menulogo.png" alt="" class="rwdonly"></li>
            </a>
            <section class="linebuttons">
              <div class="linebuttons_container">

                <a class="btnfos btnfos-2 hamberlinkcolor" href="<?= WEB_ROOT ?>/proj_arcadia/_index.php">
                  <li class="h5eng">HOME</li>
                </a>
                <a class="btnfos btnfos-2 hamberlinkcolor" href="<?= WEB_ROOT ?>/proj_arcadia/_about.php">
                  <li class="h5eng">ABOUT</li>
                </a>
                <a class="btnfos btnfos-2 hamberlinkcolor" href="<?= WEB_ROOT ?>/proj_arcadia/_room.php">
                  <li class="h5eng">ROOM</li>
                </a>
                <a class="btnfos btnfos-2 hamberlinkcolor" href="<?= WEB_ROOT ?>/proj_arcadia/_experience.php">
                  <li class="h5eng">EXPERIENCE</li>
                </a>
                <a class="btnfos btnfos-2 hamberlinkcolor" href="<?= WEB_ROOT ?>/proj_arcadia/_wedding.php">
                  <li class="h5eng">WEDDING</li>
                </a>
                <a class="btnfos btnfos-2 hamberlinkcolor" href="<?= WEB_ROOT ?>/proj_arcadia/_facility.php">
                  <li class="h5eng">FACILITY</li>
                </a>
                <a class="btnfos btnfos-2 hamberlinkcolor" href="<?= WEB_ROOT ?>/proj_arcadia/_gallery.php">
                  <li class="h5eng">GALLERY</li>
                </a>
              </div>
            </section>

            <div class="imgLink">

              <svg>
                <use xlink:href="#fbicon" />
              </svg>
              <svg>
                <use xlink:href="#igicon" />
              </svg>
              <svg>
                <use xlink:href="#twicon" />
              </svg>

            </div>

            <svg displya="none">

              <symbol id="fbicon" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 26.516 26.008">
                <path id="Icon_awesome-facebook-square" data-name="Icon awesome-facebook-square" d="M23.675,2.25H2.841A2.814,2.814,0,0,0,0,5.037V25.471a2.814,2.814,0,0,0,2.841,2.787h8.124V19.416H7.236V15.254h3.729V12.082c0-3.608,2.19-5.6,5.544-5.6a23.018,23.018,0,0,1,3.286.281V10.3H17.944a2.1,2.1,0,0,0-2.392,2.248v2.7h4.071l-.651,4.162h-3.42v8.842h8.124a2.814,2.814,0,0,0,2.841-2.787V5.037A2.814,2.814,0,0,0,23.675,2.25Z" transform="translate(0 -2.25)" />
              </symbol>

              <symbol id="igicon" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 28.113 26.008">
                <g id="Group_610" data-name="Group 610" transform="translate(-280.094 -90.072)">
                  <path id="Path_1628" data-name="Path 1628" d="M24.414,6.667A6.1,6.1,0,0,1,28.55,8.259a5.175,5.175,0,0,1,1.72,3.827V22.922a5.213,5.213,0,0,1-1.72,3.827,6.05,6.05,0,0,1-4.136,1.592H12.7a6.1,6.1,0,0,1-4.136-1.592,5.175,5.175,0,0,1-1.72-3.827V12.086a5.213,5.213,0,0,1,1.72-3.827A6.05,6.05,0,0,1,12.7,6.667H24.414m0-2.167H12.7c-4.51,0-8.2,3.413-8.2,7.586V22.922c0,4.172,3.69,7.586,8.2,7.586H24.414c4.51,0,8.2-3.413,8.2-7.586V12.086c0-4.172-3.69-7.586-8.2-7.586Z" transform="translate(275.594 85.572)" fill="#d7e6e8" />
                  <path id="Path_1629" data-name="Path 1629" d="M25.382,12.251a1.691,1.691,0,0,1-1.757-1.625,1.762,1.762,0,0,1,3.514,0A1.7,1.7,0,0,1,25.382,12.251Z" transform="translate(276.382 85.407)" fill="#d7e6e8" />
                  <path id="Path_1630" data-name="Path 1630" d="M18.278,13.417a4.525,4.525,0,0,1,4.686,4.335,4.525,4.525,0,0,1-4.686,4.335,4.525,4.525,0,0,1-4.686-4.335,4.525,4.525,0,0,1,4.686-4.335m0-2.167a6.782,6.782,0,0,0-7.028,6.5,6.782,6.782,0,0,0,7.028,6.5,6.782,6.782,0,0,0,7.028-6.5,6.782,6.782,0,0,0-7.028-6.5Z" transform="translate(275.872 85.324)" />
                </g>
              </symbol>

              <symbol id="twicon" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30.03 31.953">
                <path id="Icon_awesome-twitter-square" data-name="Icon awesome-twitter-square" d="M26.813,2.25H3.218A3.326,3.326,0,0,0,0,5.674V30.779A3.326,3.326,0,0,0,3.218,34.2h23.6a3.326,3.326,0,0,0,3.218-3.424V5.674A3.326,3.326,0,0,0,26.813,2.25ZM23.535,13.576c.013.2.013.407.013.606,0,6.184-4.424,13.309-12.508,13.309a11.912,11.912,0,0,1-6.75-2.1,8.71,8.71,0,0,0,1.059.057,8.483,8.483,0,0,0,5.456-2A4.446,4.446,0,0,1,6.7,20.209a4.461,4.461,0,0,0,1.984-.086A4.616,4.616,0,0,1,5.161,15.53v-.057a4.2,4.2,0,0,0,1.984.592,4.754,4.754,0,0,1-1.957-3.894,4.848,4.848,0,0,1,.6-2.361A12.252,12.252,0,0,0,14.848,14.7a4.616,4.616,0,0,1,4.29-5.749,4.262,4.262,0,0,1,3.211,1.476A8.306,8.306,0,0,0,25.137,9.3a4.625,4.625,0,0,1-1.931,2.575,8.339,8.339,0,0,0,2.534-.728A9.6,9.6,0,0,1,23.535,13.576Z" transform="translate(0 -2.25)" />
              </symbol>

            </svg>
          </ul>
        </div>
      </nav>
      <img class="memberbtn_Left" src="img/navbar/navbar_user.svg" alt="">
      <img class="webarcadia" src="img/navbar/navbar.svg" alt="">
      <img class="mobilearcadia" src="img/navbar/navbar_1logo.png" alt="">
      <div style=" display: flex; justify-content: space-around;align-items:center">

        <!-- 2020/08/10新增 Member Icon 增加下拉選單，包含會員中心、訂單紀錄、登出 -->
        <ul class="navbar-nav">
          <?php if (isset($_SESSION['members'])) : ?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="cursor: pointer;">

                <img class="memberbtn_Right" src="img/navbar/navbar_userLogin.svg" alt="">
                
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color:#09839C">
                <a class="dropdown-item h5chi" href="<?= WEB_ROOT ?>/proj_arcadia/_member.php">會員中心</a>
                <a class="dropdown-item h5chi" href="">訂單紀錄</a>

                <!-- <form name="form_logout" method="post" novalidate> -->
                <a id="logout" type="submit" class="dropdown-item h5chi" href="javascript:btnlogout()">登出</a>
                <!-- <a class="dropdown-item h5chi" href="<= WEB_ROOT ?>/_logout.php">登出</a> -->
                <!-- </form> -->
              </div>
            </li>

          <?php else : ?>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="navRight">
                <img class="memberbtn_Right" src="img/navbar/navbar_user.svg" alt="">
                <!-- <img class="front-img" src="img/navbar/navbar_user.svg" alt=""> -->
              </div>
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

        <!-- <div class="navRight"> -->
          <!-- <img class="memberbtn_Right" src="img/navbar/navbar_user.svg" alt=""> -->
          <div class="book d-flex ">
            <a class="d-flex bodytexteng" data-toggle="collapse" data-target="#book" href="">Book Now</a>
          </div>
        <!-- </div> -->
      </div>

    </div>

    <!-- 點擊Book Now後，出現下拉的選擇入退房日期和人數 -->
    <div class="collapse" id="book" style="width:100vw;height:440px;background-color: #5D5D5D;">

      <style>
        .bookingbar {
          width: 100vw;
          height: 330px;
          background-color: #5D5D5D;
          align-items: flex-end;
          justify-content: center;
          display: flex;
          z-index: 1;
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
        /* .date-picker {
                margin: 200px auto;
                } */

        .date-picker {
          width: 270px;
          height: auto;
          max-height: 42px;
          background: white;
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

        .date-picker .input .result,
        .date-picker .input button {
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

        .date-picker .ui-datepicker-prev,
        .date-picker .ui-datepicker-next {
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

        .date-picker .ui-datepicker-prev:after,
        .date-picker .ui-datepicker-next:after {
          content: "";
          position: absolute;
          display: block;
          width: 10px;
          height: 10px;
          border-left: 2px solid #fff;
          border-bottom: 2px solid #fff;
        }

        .date-picker .ui-datepicker-prev:hover,
        .date-picker .ui-datepicker-next:hover,
        .date-picker .ui-datepicker-prev:hover:after,
        .date-picker .ui-datepicker-next:hover:after {
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

        .reservePerson {
          width: 220px;
          height: 42px;
          background: white;
        }

        .reservePerson.option select {
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
        
        /* --- person dropdown   ---  */

        
      </style>
      <!-- date picker  -->
      <div class="bookingbar">
        <div class="checkindate" style="margin: 0 0 124px 0;">
          <span class="bodytextchi">入住日期</span>

          <div class="date-picker" style="margin: 0 0 124px 0;">
            <div class="input">
              <div class="result bodytexteng"><span id="checkindate">Checkin Date: </span></div>
              <button><i class="fa fa-calendar"></i></button>
            </div>
            <div class="calendar"></div>
          </div>
        </div>

        <div class="checkoutdate" style="margin: 0 0 124px 0;">
          <span class="bodytextchi">退房日期</span>
          <div class="date-picker">
            <div class="input">
              <div class="result bodytexteng"><span id="checkoutdate">Checkout Date: </span></div>
              <button><i class="fa fa-calendar"></i></button>
            </div>
            <div class="calendar"></div>
          </div>
        </div>
        <!-- select box -->
        <div class="reservation" style="margin: 0 0 124px 0;">
          <span class="bodytextchi">預約人數</span>
          <div class="select-box">
            <div class="select-box__current" tabindex="1">
              <div class="select-box__value">
                <input class="select-box__input" type="radio" id="0" value="1" name="Ben" checked="checked" />
                <p class="select-box__input-text">1</p>
              </div>
              <div class="select-box__value">
                <input class="select-box__input" type="radio" id="1" value="2" name="Ben" checked="checked" />
                <p class="select-box__input-text">2</p>
              </div>
              <div class="select-box__value">
                <input class="select-box__input" type="radio" id="2" value="3" name="Ben" checked="checked" />
                <p class="select-box__input-text">3</p>
              </div>
              <div class="select-box__value">
                <input class="select-box__input" type="radio" id="3" value="4" name="Ben" checked="checked" />
                <p class="select-box__input-text">4</p>
              </div>
              <div class="select-box__value">
                <input class="select-box__input" type="radio" id="4" value="5" name="Ben" checked="checked" />
                <p class="select-box__input-text">5</p>
              </div><img class="select-box__icon" src="icon/0_navBar/angle-down-solid.svg" alt="Arrow Icon" aria-hidden="true" />
            </div>
            <ul class="select-box__list">
              <li>
                <label class="select-box__option" for="0" aria-hidden="aria-hidden">1</label>
              </li>
              <li>
                <label class="select-box__option" for="1" aria-hidden="aria-hidden">2</label>
              </li>
              <li>
                <label class="select-box__option" for="2" aria-hidden="aria-hidden">3</label>
              </li>
              <li>
                <label class="select-box__option" for="3" aria-hidden="aria-hidden">4</label>
              </li>
              <li>
                <label class="select-box__option" for="4" aria-hidden="aria-hidden">5</label>
              </li>
            </ul>
          </div>
        </div>

        <div class=" d-flex booking" style="margin: 0 0 98px 0;">
          <a class=" d-flex bodytexteng" id="buy-button" href="">Booking</a>
        </div>

      </div>
      

    </div>
  </div>
  <!-- 點擊Book Now後，出現下拉的選擇入退房日期和人數 -->

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

              <!-- 2020/08/12新增 點擊後叫出忘記密碼的Bootstrap -->
              <a href="" data-toggle="modal" data-target="#exampleModalForgetPassword" class="OrangeLink bodytextchi">忘記密碼</a>

              <!-- Button trigger modal -->

              <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
              找回密碼
            </button> -->


              <!-- 忘記密碼的Modal -->
              <div class="modal fade " id="exampleModalForgetPassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

                <div class="modal-dialog">

                  <div class="modal-content">

                    <div class="modal-header">

                      <div class="windowTitle h4chi">找回密碼</div>

                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>

                    </div>
                    <div class="modal-body">

                      <div class="inputbox account bodytextchi">
                        <span>帳號</span>
                        <div>
                          <input type="email" placeholder="請輸入您的E-MAIL" class="form-control bodytextchi" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                      </div>


                      <button class="OrangeBtn bodytextchi"><span>寄出確認信</span></button>

                      <div class="footertext bodytextchi">
                        <span>倘若你尚未收取到認證信，有可能被歸類為垃圾信件，</br>
                          請至「垃圾信件匣」檢查，或是點擊 </span><a href="" class="OrangeLink bodytextchi">重新發送認證信</a>
                      </div>


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

              <!-- 2020/08/12新增 點擊後叫出忘記密碼的Bootstrap -->

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

  <div id="menu2" class="x2">
    <section class="linebuttons h5eng">

      <div class="linebuttons_container lineBtn_nav">

        <a class="btnfos2 btnfos-2 btnfos- navlinkcolor" href="<?= WEB_ROOT ?>/proj_arcadia/_index.php" style="text-decoration: none;">
          HOME
        </a>
        <a class="btnfos2 btnfos-2 btnfos- navlinkcolor" href="<?= WEB_ROOT ?>/proj_arcadia/_about.php" style="text-decoration: none;">
          ABOUT
        </a>
        <a class="btnfos2 btnfos-2 btnfos- navlinkcolor" href="<?= WEB_ROOT ?>/proj_arcadia/_room.php" style="text-decoration: none;">
          ROOM
        </a>
        <a class="btnfos2 btnfos-2 btnfos- navlinkcolor" href="<?= WEB_ROOT ?>/proj_arcadia/_experience.php" style="text-decoration: none;">
          EXPERIENCE
        </a>
        <a class="btnfos2 btnfos-2 btnfos- navlinkcolor" href="<?= WEB_ROOT ?>/proj_arcadia/_wedding.php" style="text-decoration: none;">
          WEDDING
        </a>
        <a class="btnfos2 btnfos-2 btnfos- navlinkcolor" href="<?= WEB_ROOT ?>/proj_arcadia/_facility.php" style="text-decoration: none;">
          FACILITY
        </a>
        <a class="btnfos2 btnfos-2 btnfos- navlinkcolor" href="<?= WEB_ROOT ?>/proj_arcadia/_gallery.php" style="text-decoration: none;">
          GALLERY
        </a>
      </div>
    </section>

  </div>



  <!-- <div style="width: 100vw; height: 100vh; background-color: salmon;"> </div>
  <img class="" src="/title/lisa.jpg" alt="" style="width: 100VW;"> -->
  <!-- <img src="/title/readmckendree-2017-06-5-nihiwatu-183-v1-mfrzd-2000k.svg" alt=""> -->

  <!-- ------------------------------                 add              -------------------------------- -->


  <?php

  include __DIR__ . '/__script-forotherpage.php';

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
        info_bar = $('#info-bar'),
        memberbtn_Right = $('#memberbtn_Right');


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
            Swal.fire({
              title: "註冊成功",
              icon: 'success',
              showConfirmButton: false,
              timer: 1500
            });
            setTimeout(function() {
              location.href = '_about.php';
            }, 3000);
          } else {
            Swal.fire({
              title: "此帳號已註冊",
              icon: "error",
              showConfirmButton: false,
              timer: 1500
            });
          }

          // if (data.success) {
          //   info_bar.removeClass('alert-danger')
          //     .addClass('alert-success')
          //     .html('註冊成功!');

          //   setTimeout(function() {
          //     location.href = './registerWelcome.php';
          //   }, 3000);

          // } else {
          //   info_bar.removeClass('alert-success')
          //     .addClass('alert-danger')
          //     .html(data.error || '帳號或密碼有誤');
          // }
          // info_bar.slideDown();

          // setTimeout(function() {
          //   info_bar.slideUp();
          // }, 2000);
        }, 'json');

      }

      return false;
    }
  </script>

  <!-- 登出成功後，彈出視窗 -->
  <script>
    function btnlogout() {
      const logout = $('#logout');
      Swal.fire({
        title: "登出成功",
        icon: 'success',
        showConfirmButton: false,
        timer: 1500
      });

      setTimeout(function() {
        location.href = '_logout.php';
      }, 3000);
    }
  </script>

  <!-- Booking Now用的 -->
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
  <!-- Booking Now用的 -->

  <!-- <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script> -->

  <script>
                const buy_btns = $('#buy-button');

                buy_btns.click(function() {
                const p_item = $(this).closest('.bookingbar');
                // const checkindate = p_item.attr('data-sid');
                const checkindate = p_item.find('#checkindate').text();
                const checkoutdate = p_item.find('#checkoutdate').text();
                //   const persons = p_item.find('.select-box').text();


                console.log(checkindate);
                console.log(checkoutdate);
                //  console.log(persons);

                const sendObj = {

                    checkindate: checkindate,
                    checkoutdate: checkoutdate,
                    // persons: persons
                }



                // 指向API 


                $.get('_booking-api.php', sendObj, function(data) {
                    console.log(data);
                    //setCartCount(data);
                    location.href = "_booking.php";
                }, 'json');
                });



              
            </script>