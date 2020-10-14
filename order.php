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


<!DOCTYPE html>
<html lang="en">

<head>
    <title>完成訂單</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- ---------字體----------- -->
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+TC:wght@200;300;400;500;600;700;900&display=swap" rel="stylesheet">

    <!-- ---------字體---------- -->
    <link rel="stylesheet" href="css/font.css">

    <!-- normalize css -->
    <link rel="stylesheet" href="/css/normalize.css">

    <link rel="stylesheet" href="css/_btn_List.css">



    <style>
  /* segment bar */
  .bar-wrap{
            margin: 60px auto 60px auto;
            position: relative;

        }
        .bar-wrap:hover{
            cursor: pointer;
            
        }
        .bar-booking{
            transition: 0.3s;
            z-index: 2;
        }
        .bar-booking:hover{
            transform: scale(1.3);
        }
        .segmentbar-select{
            width: 35px;
            height: 35px;
            background: #09839C;
            border-radius: 50%;
            /* border: 8px solid tomato; */
            justify-content: center;
           display: flex;
            align-items: center;
            margin: 10px 0 0 0;
           

        }
        .segement-bar{
            background: white;
            border: 1px solid #09839C;
            width: 35px;
            height: 35px;
            border-radius: 50%;
            margin: 10px 0 0 0;
            justify-content: center;
           display: flex;
            align-items: center;
        }

        .segement-bar-num{
            font-size:26px;
            color:white;
            display: flex;
            position: relative;
            font-family: 'Noto Serif TC', serif;
        }
        .segement-num{
            margin: 20px 0 0 0;
        }
        .num-unselect{
            color: #09839C;
            font-size:26px;
            font-family: 'Noto Serif TC', serif;
        }
        .bar-wrap{
            display: flex;
            align-items: center;
            padding-top: 100px;
            padding-bottom: 50px;
            margin: 60px auto 60px auto;
            align-items: center;
            width: 700px;
            justify-content: space-evenly;
        }
        .segement-text-select{
            width: 80px;
            text-align: center;
            
            color: #EB9851;
        }
        .segement-text{
            width: 80px;
            text-align: center;
            position: relative;
            color: #09839C;
        }
        .bar-booking{
            align-items: center;
            justify-content: center;
            display: flex;
            flex-direction: column;           
        }
        .bar-line{
            height: 5px;
            background-color: #09839C;
            position: absolute;
            top: 276px;
            width: 488px;
            left:475px;
            /* z-index: -0.5; */
        }
      
        @media screen and (max-width: 375px) {
            .greybody{
                padding-top: 40px;
            }
            .bar-wrap{
                width: 375px;
            }
            .bar-line{
                height: 5px;
                background-color: #09839C;
                position: absolute;
                top: 186px;
                width: 285px;
                left: 45px;
            }
        }



        .orderfinishpage {
            margin: 0 auto;
            margin-top: 150px;
            background: #EEEEEE;
        }

        /* ---------- BreadCrumbs ---------- */

        .BreadCrumb {
            margin-top: 100px;
            background-color: transparent;
            color: #747474;
            padding: 0;
        }

        .breadcrumbFlexStart {
            margin: 0 auto;
            width: 800px;
            display: flex;
            flex-direction: column;
            justify-content: start;
        }



        /* ---------- BreadCrumbs RWD ---------- */

        .AlignCard {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
          /* segment bar */
    .bar-wrap{
            margin: 0 auto;
            position: relative;

        }
        .bar-wrap:hover{
            cursor: pointer;
            
        }
        .bar-booking{
            transition: 0.3s;
            z-index: 2;
        }
        .bar-booking:hover{
            transform: scale(1.3);
        }
        .segmentbar-select{
            width: 35px;
            height: 35px;
            background: #09839C;
            border-radius: 50%;
            /* border: 8px solid tomato; */
            justify-content: center;
           display: flex;
            align-items: center;
            margin: 10px 0 0 0;
           

        }
        .segement-bar{
            background: white;
            border: 1px solid #09839C;
            width: 35px;
            height: 35px;
            border-radius: 50%;
            margin: 10px 0 0 0;
            justify-content: center;
           display: flex;
            align-items: center;
        }

        .segement-bar-num{
            font-size:26px;
            color:white;
            display: flex;
            position: relative;
            font-family: 'Noto Serif TC', serif;
        }
        .segement-num{
            margin: 20px 0 0 0;
        }
        .num-unselect{
            color: #09839C;
            font-size:26px;
            font-family: 'Noto Serif TC', serif;
        }
        .bar-wrap{
            display: flex;
            align-items: center;
            margin-bottom: 30px;
            align-items: center;
            width: 700px;
            justify-content: space-evenly;
        }
        .segement-text-select{
            width: 80px;
            text-align: center;
            
            color: #EB9851;
        }
        .segement-text{
            width: 80px;
            text-align: center;
            position: relative;
            color: #09839C;
        }
        .bar-booking{
            align-items: center;
            justify-content: center;
            display: flex;
            flex-direction: column;           
        }
        .bar-line{
            height: 5px;
            background-color: #09839C;
            position: absolute;
            top: 275px;
            width: 488px;
            left:708px;
            /* z-index: -0.5; */
        }
      
        @media screen and (max-width: 375px) {
            .greybody{
                padding-top: 40px;
            }
            .bar-wrap{
                width: 375px;
            }
            .bar-line{
                height: 5px;
                background-color: #09839C;
                position: absolute;
                top: 186px;
                width: 285px;
                left: 45px;
            }
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

            .breadcrumbFlexStart {
                margin: 0 auto;
                width: 100%;
                display: flex;
                flex-direction: column;
                justify-content: start;
            }

            .orderfinishpage {
                margin: 0 auto;
                margin-top: 60px;
                background: #EEEEEE;
            }
        }

        .orderfinishcard2 {
            max-width: 800px;
            /* min-height: 1500px; */
            background: #ffffff;
            color: #5D5D5D;
            margin: 15 auto;
            padding: 50px;
            margin-bottom: 50px;
            box-shadow: 0px 3px 3px #00000036;
        }

        /* ----- card RWD ----- */
        @media screen and (max-width: 375px) {

            .orderfinishcard2 {
                width: 100%;
                background: #ffffff;
                margin: 15 auto;
                padding: 30px;
                margin-bottom: 50px;
            }
        }


        /* ----- card RWD ----- */

        .orderfinishcard1 {
            display: flex;
            flex-direction: column;
            width: 800px;
            background: #ffffff;
            margin: 15 auto;
            padding: 50px;
            color: #5D5D5D;
            box-shadow: 0px 3px 3px #00000036;
        }

        /* ----- orderfinishcard1 RWD ----- */
        @media screen and (max-width: 375px) {
            .orderfinishcard1 {
                width: 100%;
                display: flex;
                flex-direction: column;
                min-width: 0;
                margin: 0;
                padding: 30px;
            }
        }

        /* ----- orderfinishcard1 RWD ----- */

        .orderfinishcard1 .svg {
            height: 50px;
            margin: 1rem auto;
        }

        .title {
            border-bottom: #CFCFCF 1px solid;
            /* margin: 30px 0; */
            padding: 1rem 0;
        }

        .picBox {
            padding: 30px 0px 30px 0px;
            max-width: 700px;
            min-height: 400px;
        }

        .objfit {
            width: 100%;
            /* height: 400px; */
            object-fit: cover;
        }

        /* ----- picBox & objfit RWD ----- */
        @media screen and (max-width: 375px) {
            .picBox {
                padding: 30px 0px 30px 0px;
                max-width: 323px;
                min-height: 0px;
            }

            .objfit {
                width: 100%;
                height: 234px;
                object-fit: cover;
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
            border-top: #CFCFCF 1px solid;
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
            width: 200px;
            display: flex;
            justify-content: space-between;
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


        .smallButtonBox {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 2rem auto 60px;
        }

        .smallButton {
            width: 268px;

        }
        .x11{
            background-color: #ffffff;
        }
    </style>

</head>

<?php include __DIR__ . '/__nav-forotherpage2.php' ?>

<body>
    <div class="orderfinishpage">

        <!-- <div class="breadcrumbFlexStart">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item bodytextchi"><a href="#">首頁</a></li>
                    <li class="breadcrumb-item bodytextchi"><a href="#">訂購選單</a></li>
                    <li class="breadcrumb-item bodytextchi"><a href="#">選擇房型</a></li>
                    <li class="breadcrumb-item bodytextchi"><a href="#">客製活動</a></li>
                    <li class="breadcrumb-item bodytextchi"><a href="#">付款</a></li>
                    <li class="breadcrumb-item active bodytextchi" aria-current="page">完成訂單</li>
                </ol>
            </nav>
        </div> -->

        <div class="AlignCard">

            <!-- segment bar -->
 <div class="bar-wrap">
                <div class="bar-booking">
                        <div class="segement-bar">
                            <div class="num-unselect">1</div>
                        </div>
                        <div class="segement-num">
                            <div class="segement-text bodytextchi">選擇房型</div> 
                </div>
                
            </div>
                <div class="bar-booking">
                        <div class="segement-bar">
                            <div class="num-unselect">2</div>
                        </div>
                        <div class="segement-num">
                            <div class="segement-text bodytextchi">選擇活動</div> 
                </div>
                
            </div>
                <div class="bar-booking">
                        <div class="segement-bar">
                            <div class="num-unselect">3</div>
                        </div>
                        <div class="segement-num">
                            <div class="segement-text bodytextchi">付款</div> 
                
                        </div>
                
            </div>
                <div class="bar-booking">
                        <div class="segmentbar-select">
                            <div class="segement-bar-num">4</div>
                        </div>
                        <div class="segement-num">
                            <div class="segement-text-select bodytextchi" style="color:#EB9851;">完成訂單</div> 
                </div>
            
                
            </div> 
            </div>
            <div class="bar-line"></div>


            <div class="orderfinishcard1">
                <img class="svg" src="img/activity/Icon-check.svg" alt="">
                <span class="bodytextchi">
                    Dear 李小姐， <br>
                    Arcadia Resort 已收到您的訂單！ <br>
                    <br>
                    訂單編號：A55287 <br>
                    訂購日期：2020-07-04 <br>
                    金額：＄<?= $_SESSION['active']['totalprice'][0] ?> <br>
                    付款卡號：****-****-****-5678 <br>
                    <br>
                    詳細資訊請查閱您的 Email，Arcadia 真摯的期待您的蒞臨，謝謝 !
                </span>
            </div>

            <div class="orderfinishcard2">
                <div class="title h4chi" style="font-weight: 700;">訂單明細</div>

                <?php
                $num = count($_SESSION['order_rooms']['suitetitle']);
                for ($i = 0; $i < $num; $i++) : ?>
                    <div class="picBox">
                        <img class="objfit" src="<?= $_SESSION['order_rooms']['roomimg'][$i] ?>" alt="">
                    </div>
                    <div class="room1">
                        <div class="orderlist">
                            <p class="bodytextchi">房型名稱</p>
                            <p class="bodytextchi"><?= $_SESSION['order_rooms']['suitetitle'][$i] ?></p>
                        </div>
                        <div class="orderlist">
                            <p class="bodytextchi">入住日期</p>
                            <p class="bodytextchi"><?= $_SESSION['checkindate'] ?></p>
                        </div>
                        <div class="orderlist">
                            <p class="bodytextchi">退房日期</p>
                            <p class="bodytextchi"><?= $_SESSION['checkoutdate'] ?></p>
                        </div>
                        <div class="orderlist">
                            <p class="bodytextchi">入住天數</p>
                            <p class="bodytextchi"><?= $_SESSION['order_rooms']['duration'][$i] ?>天</p>
                        </div>
                        <div class="orderlist">
                            <p class="bodytextchi">入住人數</p>
                            <p class="bodytextchi"><?= $_SESSION['order_rooms']['quantity'][$i] ?>人</p>
                        </div>
                        <div class="orderlist">
                            <p class="bodytextchi">價格</p>
                            <p class="bodytextchi"></p><?= $_SESSION['order_rooms']['price'][$i] ?>
                        </div>
                    </div>
                <?php endfor; ?>


                <div class="customtitle h5chi" style="font-weight: 700;">客製選項</div>

                <div class="custom">

                    <?php
                    $num = count($_SESSION['active']['activetitle']);
                    for ($i = 0; $i < $num; $i++) : ?>

                        <div class="customlist">
                            <div class="customlistLeft">
                                <div class="leftPicbox">
                                    <img class="picfit" src="<?= $_SESSION['active']['activeimg'][$i] ?>" alt="">
                                </div>
                                <p class="h5chi"><?= $_SESSION['active']['activetitle'][$i] ?></p>
                            </div>

                            <div class="customlistRight">
                                <p class="bodytextchi"><?= $_SESSION['active']['activetime'][$i] ?></p>
                                <p class="bodytextchi">$<?= $_SESSION['active']['activequantity'][$i] ?></p>

                            </div>
                        </div>
                    <?php endfor; ?>

                </div>

                <div class="orderlist">
                    <p class="h5chi" style="font-weight: 700;">總價格</p>
                    <p class="h5chi" style="font-weight: 700;"><?= $_SESSION['active']['totalprice'][0] ?></p>
                </div>
                <p class="bodytextchi" style="text-align: center;">*此價格包含免費機場接駁車</p>

            </div>

        </div>




        <div class="smallButtonBox">
            <div class="smallButton">
                <li class="s_var_nav">
                    <div class="s_link_bg"></div>
                    <div class="s_link_title">
                        <a href="<?= WEB_ROOT ?>/proj_arcadia/_index.php"><span>回到首頁</span></a>
                    </div>
                </li>
            </div>

        </div>



        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script> -->

        <?php include __DIR__ . '/__footer.php' ?>

    </div>

</body>

</html>