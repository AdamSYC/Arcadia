<?php
session_start(); ?>

<?php require __DIR__ . '/Connect_db.php';


// $t_sql = "SELECT COUNT(member_id) FROM `members`";

// 以下讀取資料庫
if (isset($_SESSION['members'])) {
    $sql = "SELECT * FROM members where member_id=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_SESSION['members']['member_id']]);
    $r = $stmt->fetch();
}
?>


<!doctype html>
<html lang="en">

<head>
    <title>訂單記錄</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="css/font.css">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

</head>

<?php include __DIR__ . '/__nav-forotherpage2.php' ?>

<body>
    <style>
        .orderrecord {
            margin-top: 120px;
            background-color: #EEEEEE;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            color: #5d5d5d;
            /* height: 100vh; */
        }

        .orderInfo {
            width: 1000px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            box-shadow: 0px 3px 3px #00000036;
            margin-bottom: 2rem;
        }

        ol {
            padding: 0;
        }

        .breadcrumb {
            margin-top: 100px;
            padding: 0;
            background: transparent;
        }

        .breadcrumbFlexStart {
            width: 1000px;
            display: flex;
            flex-direction: column;
            justify-content: start;
        }

        .historyOrderFlexStartDiv {
            width: 1000px;
            display: flex;
            flex-direction: column;
            justify-content: start;
        }

        .pageTitle {
            color: #09839C;
        }

        .line {
            width: 100%;
            height: 2px;
            background-color: #EEEEEE;
        }

        .orderHead {
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;

        }

        .orderHead img {
            width: 20px;
            height: 20px;
        }

        .tdate {
            margin: 1rem 50px 1rem 50px;
        }



        .orderlist {
            width: 100%;
            display: flex;
            justify-content: space-between;
            padding: 1rem 50px;
            align-items: flex-end;
        }

        .orderinfolist {
            width: 100%;
            display: flex;
            justify-content: space-between;
            /* padding: 1rem 50px; */
            align-items: flex-end;
        }

        .list-style {
            list-style: none;
            padding: 0;
        }

        .modifytext {
            color: red;
        }

        .accordion {
            width: 100%;
        }

        .price {
            display: flex;
            justify-content: space-between;
            padding: 1rem 2rem;
        }

        .orderTitle {
            font-weight: 700;
        }

        @media screen and (max-width: 375px) {

            .pageTitle {
                margin: 1rem 1rem;
            }

            .orderTitle {
                margin: 1rem;
                font-weight: 700;
            }

            .orderInfo {
                width: 100vw;
            }

            .tdate {
                margin: 1rem;
            }

            .orderlist {
                padding: 1rem;
            }
        }





        /* ----- BreadCrumbs RWD ----- */
        @media screen and (max-width: 375px) {
            .breadcrumb {
                margin-top: 0px;
                padding: 15px;
                background: transparent;
            }

            .breadcrumbFlexStart {
                width: 375px;
                display: flex;
                flex-direction: column;
                justify-content: start;
            }

            .historyOrderFlexStartDiv {
                width: 375px;
                display: flex;
                flex-direction: column;
                justify-content: start;
            }




            .orderrecord {
                margin-top: 60px;
                background-color: #EEEEEE;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                color: #5d5d5d;
                /* height: 100vh; */
            }

        }

        /* ---------- BreadCrumbs RWD ---------- */

        .AlignCard {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        /* ----- AlignCard RWD ----- */
        @media screen and (max-width: 375px) {
            .AlignCard {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                width: 100%;
            }
        }

        .infoCard {
            max-width: 100%;
            /* min-height: 1500px; */
            background: #ffffff;
            margin: 15 auto;
            padding: 0 30px 50px;
            /* margin-bottom: 50px; */
            border-top: #CFCFCF 1px solid;
        }

        /* ----- card RWD ----- */
        @media screen and (max-width: 375px) {

            .infoCard {
                width: 100%;
                background: #ffffff;
                margin: 15 auto;
                padding: 1rem;
                margin-bottom: 0px;
                border-top: #CFCFCF 1px solid;
            }
        }


        /* ----- card RWD ----- */

        .card2 {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            border: 1px solid rgba(0, 0, 0, .125);
            border-radius: .25rem;

            max-width: 800px;
            background: #ffffff;
            margin: 15 auto;
            padding: 80px;
        }

        /* ----- card2 RWD ----- */
        @media screen and (max-width: 375px) {
            .card2 {
                position: relative;
                display: flex;
                flex-direction: column;
                min-width: 0;
                border: 1px solid rgba(0, 0, 0, .125);
                border-radius: .25rem;

                max-width: 800px;
                background: #ffffff;
                margin: 50px 0 50px 0;
                padding: 80px;
            }
        }

        /* ----- card2 RWD ----- */

        .card2 .svg {
            height: 50px;
        }

        .title {
            border-bottom: #CFCFCF 1px solid;
            margin: 30px 0;
        }

        .roomCard {
            display: flex;
        }

        .picBox {
            padding-right: 30px;
            max-width: 500px;

        }

        .roomDetail {
            width: 100%;

        }

        .objfit {
            width: 100%;
            object-fit: cover;
        }

        /* ----- picBox & objfit RWD ----- */
        @media screen and (max-width: 375px) {
            .picBox {
                padding: 30px 0px 30px 0px;

            }

            .objfit {
                width: 100%;
                height: 234px;
                object-fit: cover;
            }

            .roomCard {
                display: flex;
                flex-direction: column;
            }
        }

        /* ----- picBox & objfit RWD ----- */

        .orderlist {
            display: flex;
            justify-content: space-between;
        }

        /* ----- orderlist RWD ----- */
        @media screen and (max-width: 375px) {
            .orderlist .bodytextchi {
                letter-spacing: 0.001em;
            }
        }

        /* ----- orderlist RWD ----- */

        .custom {

            border-bottom: #CFCFCF 1px solid;
        }

        /* ----- orderlist RWD ----- */
        @media screen and (max-width: 375px) {
            .customtitle {
                margin-top: 20px;
                margin-bottom: 20px;
            }
        }

        /* ----- orderlist RWD ----- */

        .customlist {
            display: flex;
            justify-content: space-between;
        }

        .customlistLeft {
            display: flex;
            justify-content: start;
            align-items: center;
            margin-bottom: 20px;

        }

        .customlistLeft p {
            margin-left: 20px;
        }

        .customlistRight {

            display: flex;
            justify-content: end;
            align-items: center;
            margin-bottom: 20px;
        }

        .leftPicbox {
            width: 200px;
        }

        .picfit {
            width: 100%;
            height: 150px;
            object-fit: cover;
            padding-right: 0;
        }

        /* ----- leftPicbox & picfit RWD ----- */
        @media screen and (max-width: 375px) {
            .leftPicbox {
                /* padding: 30px 0px 30px 0px; */
                max-width: 140px;

            }

            .picfit {
                width: 100%;
                height: 85px;
                object-fit: cover;
                padding-right: 0;
            }
        }

        /* ----- leftPicbox & picfit RWD ----- */

        .circle {
            overflow: hidden;
            object-fit: cover;
        }

        .MemberButton {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* ----- MemberButton RWD ----- */
        @media screen and (max-width: 375px) {
            .MemberButton {
                display: flex;
                justify-content: center;
                align-items: center;
                margin-bottom: 50px;
            }
        }

        /* ----- MemberButton RWD ----- */

        .ButtonStyle {
            background-color: #EB9851;
            color: white;
            width: 268px;
            height: 56px;
            border-width: 2px;

            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
    <div class="orderrecord">
        <div class="breadcrumbFlexStart">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item bodytextchi"><a href="#">首頁</a></li>
                    <li class="breadcrumb-item bodytextchi"><a href="#">會員中心</a></li>
                    <li class="breadcrumb-item active bodytextchi" aria-current="page">訂單記錄</li>
                </ol>
            </nav>

            <div class="pageTitle h4chi">
                <span>訂單記錄</span>
            </div>
            <span class="orderTitle h5chi">即將出發</span>
        </div>

        <div class="orderInfo">
            <div class="orderHead">
                <span class="tdate h5chi"><?= $_SESSION['checkindate'] ?> - <?= $_SESSION['checkoutdate'] ?></span>
                <!-- <span class="tcount h4chi">＄56,800</span> -->

                <button class="btn btn-link  text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false">
                    <img src="OrderRoomandActivity/icon/more.svg">
                </button>


            </div>
            <div class="line"></div>
            <div class="orderlist">
                <ul class="list-style bodytextchi">
                    <li>訂購日期：2020/08/21</li>
                    <li>訂單編號：12345678222222</li>
                    <li>訂單金額：＄<?= $_SESSION['active']['totalprice'][0] ?></li>
                    <li>訂單狀態：已完成付款</li>
                </ul>
                <a href="" class="modifytext bodytextchi">更改訂單</a>

            </div>

            <div class="accordion" id="accordionExample">



                <div id="collapseOne" class="collapse" data-parent="#accordionExample">
                    <div class=" infoCard">
                        <div class="title h5chi" style="font-weight: 700;">訂單明細</div>
                        <?php
                        $num = count($_SESSION['order_rooms']['suitetitle']);
                        for ($i = 0; $i < $num; $i++) : ?>
                            <div class="roomCard">

                                <div class="picBox">
                                    <img class="objfit" src="<?= $_SESSION['order_rooms']['roomimg'][$i] ?>" alt="">
                                </div>
                                <div class="roomDetail">
                                    <div class="orderinfolist">
                                        <p class="bodytextchi">房型名稱</p>
                                        <p class="bodytextchi"><?= $_SESSION['order_rooms']['suitetitle'][$i] ?></p>
                                    </div>
                                    <div class="orderinfolist">
                                        <p class="bodytextchi">入住日期</p>
                                        <p class="bodytextchi"><?= $_SESSION['checkindate'] ?></p>
                                    </div>
                                    <div class="orderinfolist">
                                        <p class="bodytextchi">退房日期</p>
                                        <p class="bodytextchi"><?= $_SESSION['checkoutdate'] ?></p>
                                    </div>
                                    <div class="orderinfolist">
                                        <p class="bodytextchi">入住天數</p>
                                        <p class="bodytextchi">5天</p>
                                    </div>
                                    <div class="orderinfolist">
                                        <p class="bodytextchi">入住人數</p>
                                        <p class="bodytextchi"><?= $_SESSION['order_rooms']['quantity'][$i] ?>人</p>
                                    </div>
                                    <div class="orderinfolist">
                                        <p class="bodytextchi">價格</p>
                                        <p class="bodytextchi">＄<?= $_SESSION['order_rooms']['price'][$i] ?></p>
                                    </div>
                                </div>

                            </div>
                        <?php endfor; ?>

                         
                        <div class="custom">
                            <div class="title customtitle h5chi" style="font-weight: 700;">客製選項</div>
                            <?php
                                $num = count($_SESSION['active']['activetitle']);
                                for ($i = 0; $i < $num; $i++) : ?>

                            <div class="customlist">


                              
                                    <div class="customlistLeft">
                                        <div class="leftPicbox">
                                            <img class="picfit" src="<?= $_SESSION['active']['activeimg'][$i] ?>" alt="">
                                        </div>
                                        <p class="bodytextchi"><?= $_SESSION['active']['activetitle'][$i] ?></p>
                                        <p class="bodytextchi">x<?= $_SESSION['active']['activetime'][$i] ?></p>
                                    </div>

                                    <div class="customlistRight">
                                        <p class="bodytextchi">＄<?= $_SESSION['active']['activequantity'][$i] ?></p>
                                    </div>
                                    
                            </div> 

<?php endfor; ?>
                       

                        </div>

                        <div class="price">
                            <p class="h5chi" style="font-weight: 700;">總價格</p>
                            <p class="h5chi" style="font-weight: 700;">＄<?= $_SESSION['active']['totalprice'][0] ?></p>
                        </div>
                        <p class="bodytextchi" style="text-align: center;">*此價格包含免費機場接駁車</p>

                    </div>

                </div>
            </div>
        </div>

        <div class="historyOrderFlexStartDiv" style="display: none;">
            <span class="orderTitle h5chi">歷史訂單</span>
        </div>

        <div class="orderInfo" style="display: none;">
            <div class="orderHead">
                <span class="tdate h5chi">2020/01/01 - 2020/1/10</span>
                <!-- <span class="tcount h4chi">＄56,800</span> -->

                <button class="btn btn-link  text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false">
                    <img src="OrderRoomandActivity/icon/more.svg">
                </button>


            </div>
            <div class="line"></div>
            <div class="orderlist">
                <ul class="list-style bodytextchi">
                    <li>訂購日期：2019/11/31</li>
                    <li>訂單編號：12345678416881</li>
                    <li>訂單金額：＄56,800</li>
                    <li>訂單狀態：已完成付款</li>
                </ul>
                <!-- <a href="" class="modifytext bodytextchi">更改訂單</a> -->

            </div>

            <div class="accordion" id="accordionExample">
                <div id="collapseTwo" class="collapse" data-parent="#accordionExample">
                    <div class="infoCard">
                        <div class="title h5chi" style="font-weight: 700;">訂單明細</div>
                        <div class="roomCardHistory">
                            <div class="picBoxHistory">
                                <img class="objfit" src="img/book/roomOverview-room1.jpg" alt="">
                            </div>
                            <div class="roomDetail">
                                <div class="orderinfolist">
                                    <p class="bodytextchi">房型名稱</p>
                                    <p class="bodytextchi">沙灘雙人別墅</p>
                                </div>
                                <div class="orderinfolist">
                                    <p class="bodytextchi">入住日期</p>
                                    <p class="bodytextchi">2020-01-01</p>
                                </div>
                                <div class="orderinfolist">
                                    <p class="bodytextchi">退房日期</p>
                                    <p class="bodytextchi">2020-01-05</p>
                                </div>
                                <div class="orderinfolist">
                                    <p class="bodytextchi">入住天數</p>
                                    <p class="bodytextchi">5天</p>
                                </div>
                                <div class="orderinfolist">
                                    <p class="bodytextchi">入住人數</p>
                                    <p class="bodytextchi">6人</p>
                                </div>
                                <div class="orderinfolist">
                                    <p class="bodytextchi">價格</p>
                                    <p class="bodytextchi">＄40,000</p>
                                </div>
                            </div>
                        </div>

                        <div class="custom">
                            <div class="title customtitle h5chi" style="font-weight: 700;">客製選項</div>
                            <div class="customlist">

                                <div class="customlistLeft">
                                    <div class="leftPicbox">
                                        <img class="picfit" src="img/activity/experience-jungle-eco01.jpg" alt="">
                                    </div>
                                    <p class="bodytextchi">生態探險</p>
                                    <p class="bodytextchi">x4次</p>
                                </div>

                                <div class="customlistRight">
                                    <p class="bodytextchi">＄4800</p>
                                </div>

                            </div>
                            <div class="customlist">
                                <div class="customlistLeft">
                                    <div class="leftPicbox">
                                        <img class="picfit" src="img/activity/experience-dinner01.jpg" alt="">
                                    </div>
                                    <p class="bodytextchi">生態探險</p>
                                    <p class="bodytextchi">x4次</p>
                                </div>

                                <div class="customlistRight">
                                    <p class="bodytextchi">＄4800</p>
                                </div>
                            </div>
                            <div class="customlist">
                                <div class="customlistLeft">
                                    <div class="leftPicbox">
                                        <img class="picfit" src="img/activity/experience-lesson-massage01.jpg" alt="">
                                    </div>
                                    <p class="bodytextchi">生態探險</p>
                                    <p class="bodytextchi">x4次</p>
                                </div>

                                <div class="customlistRight">

                                    <p class="bodytextchi">＄4800</p>

                                </div>
                            </div>
                        </div>

                        <div class="price">
                            <p class="h5chi" style="font-weight: 700;">總價格</p>
                            <p class="h5chi" style="font-weight: 700;">＄56,800</p>
                        </div>
                        <p class="bodytextchi" style="text-align: center;">*此價格包含免費機場接駁車</p>

                    </div>

                </div>
            </div>
        </div>

        <div class="orderInfo" style="display: none;">
            <div class="orderHead">
                <span class="tdate h5chi">2019/10/10 - 2019/10/20</span>
                <!-- <span class="tcount h4chi">＄56,800</span> -->

                <button class="btn btn-link  text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false">
                    <img src="OrderRoomandActivity/icon/more.svg">
                </button>


            </div>
            <div class="line"></div>
            <div class="orderlist">
                <ul class="list-style bodytextchi">
                    <li>訂購日期：2019/06/18</li>
                    <li>訂單編號：12345678564343</li>
                    <li>訂單金額：＄87,800</li>
                    <li>訂單狀態：已完成付款</li>
                </ul>
                <!-- <a href="" class="modifytext bodytextchi">更改訂單</a> -->

            </div>

            <div class="accordion" id="accordionExample">
                <div id="collapseThree" class="collapse" data-parent="#accordionExample">
                    <div class="infoCard">
                        <div class="title h5chi" style="font-weight: 700;">訂單明細</div>
                        <div class="roomCardHistory">
                            <div class="picBoxHistory">
                                <img class="objfit" src="img/book/roomOverview-room2.jpg" alt="">
                            </div>
                            <div class="roomDetail">
                                <div class="orderinfolist">
                                    <p class="bodytextchi">房型名稱</p>
                                    <p class="bodytextchi">沙灘雙人別墅</p>
                                </div>
                                <div class="orderinfolist">
                                    <p class="bodytextchi">入住日期</p>
                                    <p class="bodytextchi">2020-10-10</p>
                                </div>
                                <div class="orderinfolist">
                                    <p class="bodytextchi">退房日期</p>
                                    <p class="bodytextchi">2020-10-20</p>
                                </div>
                                <div class="orderinfolist">
                                    <p class="bodytextchi">入住天數</p>
                                    <p class="bodytextchi">10天</p>
                                </div>
                                <div class="orderinfolist">
                                    <p class="bodytextchi">入住人數</p>
                                    <p class="bodytextchi">6人</p>
                                </div>
                                <div class="orderinfolist">
                                    <p class="bodytextchi">價格</p>
                                    <p class="bodytextchi">＄40,000</p>
                                </div>
                            </div>
                        </div>

                        <div class="custom">
                            <div class="title customtitle h5chi" style="font-weight: 700;">客製選項</div>
                            <div class="customlist">

                                <div class="customlistLeft">
                                    <div class="leftPicbox">
                                        <img class="picfit" src="img/activity/experience-lesson-massage01.jpg" alt="">
                                    </div>
                                    <p class="bodytextchi">生態探險</p>
                                    <p class="bodytextchi">x4次</p>
                                </div>

                                <div class="customlistRight">
                                    <p class="bodytextchi">＄4800</p>
                                </div>

                            </div>
                            <div class="customlist">
                                <div class="customlistLeft">
                                    <div class="leftPicbox">
                                        <img class="picfit" src="img/activity/experience-jungle-eco01.jpg" alt="">
                                    </div>
                                    <p class="bodytextchi">生態探險</p>
                                    <p class="bodytextchi">x4次</p>
                                </div>

                                <div class="customlistRight">
                                    <p class="bodytextchi">＄4800</p>
                                </div>
                            </div>
                            <div class="customlist">
                                <div class="customlistLeft">
                                    <div class="leftPicbox">
                                        <img class="picfit" src="img/activity/experience-dinner01.jpg" alt="">
                                    </div>
                                    <p class="bodytextchi">生態探險</p>
                                    <p class="bodytextchi">x4次</p>
                                </div>

                                <div class="customlistRight">

                                    <p class="bodytextchi">＄4800</p>

                                </div>
                            </div>
                        </div>

                        <div class="price">
                            <p class="h5chi" style="font-weight: 700;">總價格</p>
                            <p class="h5chi" style="font-weight: 700;">＄ 56800</p>
                        </div>
                        <p class="bodytextchi" style="text-align: center;">*此價格包含免費機場接駁車</p>

                    </div>

                </div>
            </div>
        </div>
    </div>
 <style>
     .foot{
         margin-top: 125px;
         
     }
     body{
         background-color: #EEEEEE;
     }
 </style>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->

    <?php include __DIR__ . '/__footer.php' ?>

</body>

</html>