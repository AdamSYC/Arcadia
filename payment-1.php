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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>付款頁面</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Crimson Text -->
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <!-- Noto -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+TC:wght@200;300;400;500;600;700;900&display=swap" rel="stylesheet">
    <!-- font css -->
    <link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="css/normalize.css">
    <style>
      
        .wrapper1 {
            display: flex;
            margin: 0 auto;
            justify-content: center;
        }

        .coverfit {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .rwdBtn {
            display: none;
        }

        .skpBtn {
            max-width: 375px;
            display: flex;
            background-color: #EB9851;
            color: white;
            padding: 40px 10px 40px 10px;
            text-align: center;
            align-items: center;
            justify-content: center;
        }
    
     /* ---------- BreadCrumbs ---------- */

     .BreadCrumbs {
            color: #747474;
            margin-top: 150px;
            margin-left: 100px;
            margin-bottom: 100px;
        }

        .LinkColor {
            color: #747474;
        }
    
        .LinkColor:hover{
            color: #EB9851;
        }

        
        .breadtext{
            font-size: 16px;
        }
  

        /* ----- BreadCrumbs RWD ----- */

        @media screen and (max-width: 375px) {
            .BreadCrumbs {
                display: none;
            }
        }

        /* ----- BreadCrumbs RWD ----- */

        /* ---------- BreadCrumbs ---------- */
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
            margin-top: 50px;
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
            top: 345px;
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
                top: 115px;
                width: 285px;
                left: 45px;
            }
        }




        /* ---------- Creditcard ---------- */
        .required {
            color: red;
        }

        .creditcard {
            background-color: #ffffff;
            width: 790px;
            height: 860px;
            display: flex;
            /* align-items: center; */
            flex-direction: column;
            justify-content: center;
            box-shadow: hsla(0, 0%, 36%, 0.5) 0 3px 6px;
            margin-top: 30px;
            margin-bottom: 50px;
        }

        .aligntitle {
            /* justify-content: flex-start; */
            color: #707070;
            font-weight: bold;
            padding-top: 50px;
            padding-left: 50px;
        }

        .CreditCardPic {
            padding-left: 50px;
            padding-top: 20px;
        }

        .cardholder {
            color: #707070;
            font-weight: bold;
            padding-left: 50px;
            padding-top: 10px;
        }

        .cardholdertext {
            height: 50px;
            width: 500px;
        }

        .cardnumber {
            color: #707070;
            font-weight: bold;
            padding-left: 50px;
            padding-top: 10px;
        }

        .cardnumbertext1 {
            height: 50px;
            width: 120px;
        }

        .cardnumbertext2 {
            display: none;
        }

        .monthtext {
            height: 50px;
            width: 135px;
        }

        .yeartext {
            height: 50px;
            width: 135px;
        }

        .paybuttom {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 50px;
        }

        .buttomstyle {
            display: flex;
            width: 268px;
            height: 55px;
            background-color: #EB9851;
            /* margin: 40px 0 40px 0; */
            border: none;
            color: #ffff;
            justify-content: center;
            align-items: center;
        }


        /* ---------- Creditcard ---------- */
        /* ----- Creditcard RWD ----- */
        @media screen and (max-width: 375px) {
            .creditcard {
                width: 100%;


                background-color: #ffffff;
                width: 375px;
                height: 700px;
                display: flex;
                /* align-items: center; */
                flex-direction: column;
                justify-content: center;
                box-shadow: hsla(0, 0%, 36%, 0.5) 0 3px 6px;
                margin-top: 50px;
                margin-bottom: 50px;
            }

            .aligntitle {
                color: #707070;
                font-weight: bold;
                padding-top: 50px;
                padding-left: 50px;
                margin-bottom: 15px;
            }

            .CreditCardPic {
                padding-left: 50px;
                padding-top: 20px;
                margin-bottom: 15px;
            }

            .cardholder {
                color: #707070;
                font-weight: bold;
                padding-left: 50px;
                padding-top: 10px;
                margin-bottom: 15px;
            }

            .cardholdertext {
                height: 36px;
                width: 264px;
                margin-top: 10px;
                margin-left: 1px;
            }

            .cardnumber .cardnumbertext2 {
                display: flex;
                flex-direction: column;
            }

            .cardnumbertext {
                display: none;
            }

            .cardnumbertext1 {
                display: none;
            }

            .cardnumbertext2 {
                display: unset;
                height: 36px;
                width: 264px;
                margin-top: 10px;
                margin-left: 1px;
            }

            .cardnumber {
                color: #707070;
                font-weight: bold;
                padding-left: 50px;
                padding-top: 10px;
                margin-bottom: 15px;
            }

            .monthtext {
                height: 36px;
                width: 100px;
                margin-top: 10px;
                margin-left: 1px;
            }

            .yeartext {
                height: 36px;
                width: 100px;
                margin-top: 10px;
                margin-left: 1px;
            }

            .cardnumbertext3 {
                display: unset;
                height: 36px;
                width: 98px;
                margin-top: 10px;
                margin-left: 1px;
            }

            .paybuttom {
                display: flex;
                justify-content: center;
                align-items: center;
                margin-top: 10px;
                margin-bottom: 50px;
            }


        }

        /* ----- Creditcard RWD ----- */

        /* ---------- 詳細訂單 ---------- */
        .orderList {
            margin-left: 30px;
            margin-bottom: 30px;
        }

        .order {
            margin: 30px 0 0 0;
            width: 320px;
            background: white;
            padding: 30px;
            box-shadow: hsla(0, 0%, 36%, 0.5)0 3px 6px;
            ;

        }

        .h4chi {
            font-weight: bold;
            letter-spacing: 0.3em;

        }

        .h3chi {
            font-weight: bold;
        }

        .line {
            height: 1px;

            background: #707070;
            display: flex;
        }

        .day {
            display: flex;
            justify-content: space-between;
        }

        .cancel {
            display: flex;
            justify-content: flex-end;
        }

        .detail {
            margin: 10px 0 10px 0;
        }

        .detail1 {

            display: flex;
            justify-content: flex-end;
        }

        .confirm {
            background: #EB9851;
            width: 320px;
            height: 80px;
            display: flex;
            align-items: center;
            justify-content: center;


        }

        .confirm img {
            width: 20px;
        }

        .h5eng {
            color: white;
        }

        .warning {
            letter-spacing: 0;
        }

        @media screen and (max-width: 375px) {
            .orderList {
                display: none;
            }

        }
        /* .paymentpage{
            height: 100vh;
        } */
        .foot{
                margin: 110px  0 0 0 ;
        }
        .x11{
            background-color: #ffffff;
        }
    </style>
    
</head>

<?php include __DIR__ . '/__nav-forotherpage2.php' ?>

<body>
<div class="greybody" style="">     

     <!---------- BreadCrumbs ---------->

     <div class="BreadCrumbs ">
        <span class="h3chi breadtext">
            <a class="LinkColor" href="">首頁</a> >
            <a class="LinkColor" href="">選擇房型</a> >
            <a class="LinkColor" href="">選擇活動</a> >
            <a class="LinkColor" href="">付款</a>

            
        </span>
    </div>
    <!---------- BreadCrumbs ---------->

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
                        <div class="segmentbar-select">
                            <div class="segement-bar-num ">2</div>
                        </div>
                        <div class="segement-num">
                            <div class="segement-text-select bodytextchi"  style="color:#EB9851;">選擇活動</div> 
                </div>
                
            </div>
                <div class="bar-booking">
                        <div class="segement-bar">
                            <div class="num-unselect ">3</div>
                        </div>
                        <div class="segement-num">
                            <div class="segement-text bodytextchi">付款</div> 
                
                        </div>
                
            </div>
                <div class="bar-booking">
                        <div class="segement-bar">
                            <div class="num-unselect">4</div>
                        </div>
                        <div class="segement-num">
                            <div class="segement-text bodytextchi">完成訂單</div> 
                </div>
            
                
            </div> 
            </div>
            <div class="bar-line"></div>




    <div class="wrapper1">

        <!---------- Creditcard ---------->

        <div class="creditcard">
            <div class="aligntitle h3chi">
                <span>信用卡資訊</span>
            </div>

            <div class="CreditCardPic">
                <img src="images/CreditCard.png" alt="">
            </div>

            <form name="formCreditInfo" method="post" novalidate>

                <div class="cardholder h4chi">
                    <span class="Holder">持卡人姓名</span><span class="required">*</span>
                    <div>
                        <input type="HolderName" id="Holder-Name" name="HolderName" placeholder="請輸入持卡人姓名" class="col-md-offset-2 col-md-9 cardholdertext" type="text">
                        <small id="HolderName" class="form-text"></small>
                    </div>
                </div>

                <div class="cardnumber h4chi">
                    <span class="CreditCardNumber">卡號</span><span class="required">*</span>
                    <div class="cardnumbertext">
                        <input type="CardNumber" id="Card-Number" name="CardNumber" class="cardnumbertext1" type="text"> - <input type="CardNumber" id="Card-Number" name="CardNumber" class="cardnumbertext1" type="text"> - <input type="CardNumber" id="Card-Number" name="CardNumber" class="cardnumbertext1" type="text"> - <input type="CardNumber" id="Card-Number" name="CardNumber" class="cardnumbertext1" type="text">
                        <small class="form-text"></small>
                    </div>
                    <!-- <input class="cardnumbertext2" type="text"> -->
                </div>

                <div class="cardnumber h4chi">
                    <span class="EffectiveDate">有效期限</span><span class="required">*</span>
                    <div>
                        <select type="CardMonth" id="Card-Month" name="CardMonth" class="monthtext bodytextchi">
                            <option value="0">月份</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                        </select>
                        <small id="CardMonthandDate" class="form-text"></small>

                        <select type="CardYear" id="Card-Year" name="CardYear"  class="yeartext bodytextchi">
                            <option value="0">年份</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                        </select>
                        
                        <small id="CardMonthandYear" class="form-text"></small>

                    </div>
                    
                </div>

                <div class="cardnumber h4chi">
                    <span class="SafeCode">安全碼</span><span class="required">*</span>
                    <div>
                        <input type="" id="Safe-Code" name="SafeCode" placeholder="請輸入您的CVN" class="cardnumbertext3 bodytexteng" type="text">
                        <small id="SafeCode" class="form-text"></small>
                    </div>
                </div>

                <div class="paybuttom">
                    <a class="buttomstyle h5chi" type="submit" class="OrangeBtn bodytextchi" onclick="return formCheckCreditCard()">
                        <span>確認付款</span>
                    </a>
                </div>



            </form>


        </div>
        <!---------- Creditcard ---------->

        <script>
            
            function formCheckCreditCard() {
                const HolderName = $('#Holder-Name'),
                    CardNumber = $('.cardnumbertext1'),
                    CardMonth = $('#Card-Month'),
                    CardYear = $('#Card-Year'),
                    SafeCode = $('#Safe-Code');


                HolderName.next().text('');
                CardNumber.next().text('');
                CardMonth.next().text('');
                CardYear.next().text('');
                SafeCode.next().text('');

                HolderName.css('border-color', '#CCCCCC');
                CardNumber.css('border-color', '#CCCCCC');
                CardMonth.css('border-color', '#CCCCCC');
                CardYear.css('border-color', '#CCCCCC');
                SafeCode.css('border-color', '#CCCCCC');

                let isPass = true;

                if (HolderName.val().length < 8) {
                    isPass = false;
                    HolderName.css('border-color', 'red');
                    HolderName.next().text('*請輸入持卡人姓名');
                }

                if (CardNumber.val().length < 6) {
                    isPass = false;
                    CardNumber.css('border-color', 'red');
                    CardNumber.next().text('*請輸入正確的16位卡號');
                }

                if (CardMonth.val().length < 3) {
                    isPass = false;
                    CardMonth.css('border-color', 'red');
                    CardMonth.next().text('*請輸入卡號的有效月份');
                }

                if (CardYear.val().length < 3) {
                    isPass = false;
                    CardYear.css('border-color', 'red');
                    CardYear.next().text('*請輸入卡號的有效年份');
                }

                if (SafeCode.val().length < 3) {
                    isPass = false;
                    SafeCode.css('border-color', 'red');
                    SafeCode.next().text('*請輸入信用卡之安全碼');
                }

                if (isPass) {
                    $.post('payment-api.php', $(document.formCreditInfo).serialize(), function(data) {
                        console.log(data);

                        if (data.success) {
                            Swal.fire({
                                title: "付款成功",
                                icon: 'success',
                                showConfirmButton: false,
                                timer: 1500
                            });
                            setTimeout(function() {
                                location.href = 'order.php';
                            }, 3000);

                        } else {
                            Swal.fire({
                                title: "付款失敗，請確認付款資訊",
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



        <!-- 詳細訂單 -->
        <div class="orderList">
            <div class="order">
                <span class="h4chi">訂單明細</span><br>

                <!----------------------------------- 住房明細 ------------------------------------>
                <?php
                $num = count($_SESSION['order_rooms']['suitetitle']);
                for ($i = 0; $i < $num; $i++) : ?>
                    <div class="line"></div>
                    <div class="roomName">
                        <span class="h5chi"> <?= $_SESSION['order_rooms']['suitetitle'][$i] ?></span>
                    </div><br>
                    <div class="infoImg">
                        <img class="coverfit" src="<?= $_SESSION['order_rooms']['roomimg'][$i] ?>" alt="">
                    </div>

                    <div class="day">
                        <span class="detail bodytextchi">入住日期</span>
                        <span class="detail bodytextchi"><?= $_SESSION['checkindate'] ?></span>
                    </div>
                    <div class="day">
                        <span class="detail bodytextchi">退房日期</span>
                        <span class="detail bodytextchi"><?= $_SESSION['checkoutdate'] ?></span>
                    </div>
                    <div class="day">
                        <span class="detail bodytextchi">入住天數</span>
                        <span class="detail bodytextchi"><?= $_SESSION['order_rooms']['duration'][$i] ?>晚</span>
                    </div>
                    <div class="day">
                        <span class="detail bodytextchi">入住人數</span>
                        <span class="detail bodytextchi"><?= $_SESSION['order_rooms']['quantity'][$i] ?></span>
                    </div>
                    <div class="day">
                        <span class="detail bodytextchi">價格</span>
                        <span class="detail bodytextchi"> <?= $_SESSION['order_rooms']['price'][$i] ?></span>
                    </div><br>
                <?php endfor; ?>
                <!----------------------------------- 住房明細 ------------------------------------>

                <!----------------------------------- 活動明細 -------------------------------------->

                <?php if (!empty($_SESSION['active']['activetitle'])) : ?>
                    <span class="h4chi">客制選項</span><br>
                    <?php
                    $num = count($_SESSION['active']['activetitle']);
                    for ($i = 0; $i < $num; $i++) : ?>
                        <div class="line"></div>


                        <div class="day">
                            <span class="detail bodytextchi"><?= $_SESSION['active']['activetitle'][$i] ?></span>
                            <span class="detail bodytextchi">x <?= $_SESSION['active']['activetime'][$i] ?></span>
                            <span class="detail bodytextchi"><?= $_SESSION['active']['activequantity'][$i] ?></span>

                        </div>
                       

                    <?php endfor; ?>
                <?php endif; ?>





                <!----------------------------------- 活動明細 -------------------------------------->



                <div class="line"></div>
                <div class="day">
                    <span class="h4chi">總計</span>


                    <span class="h4chi">

                        <?= $_SESSION['active']['totalprice'][0] ?>


                    </span>




                </div>
                <div class="inform">
                    <span class="detail1 warning bodytextchi">*此價格不包含客製服務與婚宴規劃</span><br>
                    <span class="detail1 warning bodytextchi">*此價格包含免費機場接駁車</span>
                </div>

            </div>
            <!-- <div class="confirm">
                <span class="confirmBtn h5eng">Confirm</span>
                <img src="/images/Icon-arrow.svg" alt="">
            </div> -->
        </div>


    </div>
    </div>


    <?php include __DIR__ . '/__footer.php' ?>

</body>

</html>