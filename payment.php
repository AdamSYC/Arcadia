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
.CreditPayBGcolor{
  background: #EEEEEE;
}

    .wrapperPayment {
      display: flex;
      margin: 0 auto;
      justify-content: center;
    }

    @media screen and (max-width: 375px) {
      .wrapperPayment {
        display: flex;
        margin: 0 auto;
        justify-content: center;
        flex-direction: column-reverse;
      }
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
            margin-left: -100px;
            margin-bottom: 100px;
        }
        .breadtext{
            font-size: 16px;
            font-weight: bold;
        }
        .LinkColor {
            color: #747474;
        }
        .LinkColor:hover{
            color: #EB9851;
        }

        /* ----- BreadCrumbs RWD ----- */

        @media screen and (max-width: 375px) {
            .BreadCrumbs {
                display: none;
            }
        }

        /* ----- BreadCrumbs RWD ----- */


    /* ---------- Creditcard ---------- */

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
            top: 345px;
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
                margin: 0;
                padding-top: 80px;
            }
            .bar-line{
                height: 5px;
                background-color: #09839C;
                position: absolute;
                top: 105px;
                width: 285px;
                left: 45px;
            }
        }

    .required {
      color: red;
    }

    .creditcardPay {
      background-color: #ffffff;
      width: 790px;
      
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
      color: #5D5D5D;
      font-weight: bold;
      padding-top: 50px;
      padding-left: 50px;
    }

    .CreditCardPic {
      padding-left: 50px;
      padding-top: 20px;
    }

    .cardholder {
      color: #5D5D5D;
      font-weight: bold;
      padding-left: 50px;
      padding-top: 10px;
    }

    .cardholdertext {
      height: 50px;
      width: 500px;
    }

    .cardnumber {
      color: #5D5D5D;
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
      .creditcardPay {
        width: 100%;
        background-color: #ffffff;
        width: 370px;
        /* height: 700px; */
        display: flex;
        /* align-items: center; */
        flex-direction: column;
        justify-content: center;
        box-shadow: none;
        /* margin-top: 100px; */
        margin-bottom: 50px;
      }

      .aligntitle {
        color: #5D5D5D;
        font-weight: bold;
        padding-top: 50px;
        padding-left: 50px;
        margin-bottom: 15px;
      }

      .CreditCardPic {
        padding-left: 50px;
        padding-top: 20px;
        margin-bottom: -50px;
      }

      .cardholder {
        color: #5D5D5D;
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
        color: #5D5D5D;
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
      color:  #5D5D5D;
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

      background: #5D5D5D;
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
      margin-left: 0;
      margin-bottom: 30px;
    }

    .order {

      background-color: #ffffff;
    width: 370px;
    /* height: 700px; */
    display: flex;
    /* align-items: center; */
    flex-direction: column;
    justify-content: center;
    box-shadow: none;
    margin-top: 100px;
    margin-bottom: 50px;

      /* margin: 100px 0 0 0;
      width: 370px;
      background: white;
     
      box-shadow: none;
       */

    }
}



    .flexPaymentAllC {
      display: flex;
      flex-direction: column;
      align-items: start;
      margin: 0 auto;
      max-width: 1000px;
    }



    /* CreditCard */
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
      box-sizing: border-box;
      width: 100%;
      height: 60px;
      background-color: #EB9851;
      border: #EB9851 solid 1px;
      padding: 0 2rem;
      margin: 20px 0;
      color: #ffff
    }

    .OrangeBtn:hover {
      transition: .5s;
      background-color: #fff;
      border: #EB9851 solid 1px;
      color: #EB9851;
    }

    .addCreditcard {
      background-color: #fff;
      color: #5D5D5D;
      width: 240px;
      height: 144px;
      border: 1px solid #ced4da;
      border-radius: .25rem;
      margin: 5px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .addCreditcard img {
      width: 20px;
      margin-right: 10px;
    }

    .addCreditcard:hover {
      box-shadow: 0 0 10px 0px rgba(0, 0, 0, 0.35);
    }

    /* creditcard */

    @import url('https://fonts.googleapis.com/css?family=IBM+Plex+Sans:400,700|Nova+Mono&display=swap');
    @import url('https://fonts.googleapis.com/css?family=IBM+Plex+Sans:400,700&display=swap');

    /* body {
      width: 100vw;
      height: 100vh;
      margin: 0;
      padding: 0;
      display: flex;
      align-items: center;
      justify-content: center;
    } */

    .card-box {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }


    .card-image {
      margin-bottom: 8rem;
      font-family: 'Nova Mono', monospace;
      position: relative;
      width: 100%;
      max-width: 300px;
      min-height: 160px;
      max-height: 190px;
      /* margin-bottom: 1rem; */
      z-index: 0;
    }

    .card-background {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      max-width: 300px;
      box-shadow: 0px 10px 10px -10px black;
    }



    .card-front .card-logo {
      top: 0.5rem;
    }

    .card-rear .card-logo {
      bottom: 1rem;
      margin-top: 40px;
      margin-bottom: 20px;
    }

    .logo-circle {
      display: inline-block;
      width: 30px;
      height: 30px;
      border-radius: 50%;
    }

    .logo-circle.left {
      background-color: #eb001b;
    }

    .logo-circle.right {
      background-color: #f79e1b;
      opacity: 0.8;
    }

    .card-front,
    .card-rear {
      position: absolute;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      color: #edeef2;
      font-size: 14px;
      letter-spacing: 1px;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-flow: column wrap;
      backface-visibility: hidden;
      transition: transform .5s linear 0s;
    }

    .card-front .card-number {
      z-index: 2;
      margin-top: 5px;
      margin-bottom: 30px;
    }

    .card-front .card-info {
      display: flex;
      flex-flow: column wrap;
      font-size: 12px;
    }

    .card-front .card-info.left {
      text-align: left;
      position: absolute;
      left: 0.75rem;
      bottom: 0.75rem;
    }

    .card-front .card-info.right {
      text-align: right;
      position: absolute;
      right: 0.75rem;
      bottom: 0.75rem;
    }

    .card-front .card-holder-title,
    .card-front .valid-thru-title {
      font-size: 10px;
      margin-bottom: 5px;
    }

    .card-rear .black-bar {
      position: absolute;
      left: 0px;
      top: 10%;
      width: 100%;
      height: 30px;
      background-color: black;
    }

    .card-rear .card-info {
      width: 100%;
      display: flex;
      justify-content: flex-start;
      padding-left: 5%;
      z-index: 2;
    }

    .card-rear .card-info .white-bar {
      width: 50%;
      height: 30px;
      background-color: #757575;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='5' height='5' viewBox='0 0 20 20'%3E%3Cg %3E%3Cpolygon fill='%23ffffff' points='20 10 10 0 0 0 20 20'/%3E%3Cpolygon fill='%23ffffff' points='0 10 0 20 10 20'/%3E%3C/g%3E%3C/svg%3E");
    }

    .card-rear .card-info .security-code {
      background: white;
      color: #2d2d2d;
      border-radius: 5px;
      padding: 5px 10px;
      margin: 0 10px;
    }

    /* TRANSITION EFFECT */
    .card-front {
      transform: perspective(600px) rotateY(0deg);
    }

    .card-rear {
      transform: perspective(600px) rotateY(180deg);
    }

    .active-border {
      display: none;
      position: fixed;
      border: 1px solid #f79e1b;
      border-radius: 5px;
      padding: 3px;
      transition: left ease-in-out 0.5s, top ease-in-out 0.5s,
        width ease-in-out 0.5s, height ease-in-out 0.5s;
    }

    .card-form {
      font-family: 'IBM Plex Sans', sans-serif;
      height: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      width: 100%;
    }

    .form-wrapper {
      width: 100%;
    }

    .form-input {
      position: relative;
      margin: 10px auto 5px auto;
    }


    @media screen and (min-width: 500px) {
      .modal-wrapper {
        width: 70vw;
      }
    }

    @media screen and (min-width: 768px) {
      .modal-wrapper {
        width: 80vw;
        flex-flow: row nowrap;
        justify-content: space-evenly;
      }
    }

    @media screen and (min-width: 900px) {
      .modal-wrapper {
        width: 70vw;
      }
    }

    @media screen and (min-width: 1200px) {
      .modal-wrapper {
        width: 50vw;
      }
    }
  </style>
</head>

<?php include __DIR__ . '/__nav-forotherpage2.php' ?>

<body>
<div class="CreditPayBGcolor">
<div class="flexPaymentAllC">
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
                        <div class="segement-bar">
                            <div class="num-unselect">2</div>
                        </div>
                        <div class="segement-num">
                            <div class="segement-text bodytextchi">選擇活動</div> 
                </div>
                
            </div>
                <div class="bar-booking">
                        <div class="segmentbar-select">
                            <div class="segement-bar-num">3</div>
                        </div>
                        <div class="segement-num">
                            <div class="segement-text-select bodytextchi" style="color:#EB9851;">付款</div> 
                
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
    



    <div class="wrapperPayment">

      <!---------- Creditcard ---------->

      <div class="creditcardPay">
        <div class="aligntitle h4chi">
          <span>信用卡資訊</span>
        </div>

        <div class="CreditCardPic">
          <img src="images/CreditCard.png" alt="">
        </div>

        <!-- <form name="formCreditInfo" method="post" novalidate>

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

            </form> -->

        <div class="modal-body card-box">

          <!-- <div class="modal-wrapper"> -->
          <div class="card-image">
            <div class="card-front">
              <img class="card-background" src="https://raw.githubusercontent.com/MoosaSaadat/card-checkout/master/card.png" alt="Credit Card">
              <div class="card-logo">
                <!-- <div class="logo-circle left"></div> -->
                <div class="logo-circle right"></div>
              </div>
              <span class="card-number">XXXX XXXX XXXX XXXX</span>
              <div class="card-info left">
                <span class="card-holder-title">CARDHOLDER NAME</span>
                <span class="card-holder-name">NAME SURNAME</span>
              </div>
              <div class="card-info right">
                <span class="valid-thru-title">VALID THRU</span>
                <span class="valid-thru-date">MM/YY</span>
              </div>
            </div>
            <div class="card-rear">
              <img class="card-background" src="https://raw.githubusercontent.com/MoosaSaadat/card-checkout/master/card.png" alt="Credit Card">
              <div class="card-logo">
                <!-- <div class="logo-circle left"></div> -->
                <div class="logo-circle right"></div>
              </div>
              <div class="black-bar"></div>
              <div class="card-info">
                <span class="white-bar"></span>
                <span class="security-code">123</span>
              </div>
            </div>

            <!-- <span class="active-border"></span> -->

          </div>


          <div class="card-form">
            <div class="form-wrapper">
              <form action="#">
                <div class="form-input inputbox bodytextchi">
                  <i class="far fa-credit-card"></i>
                  <span>信用卡號</span>
                  <input type="text" class="form-control" name="card-number" id="number" placeholder="請輸入您的信用卡號" onfocus="flipCard(event);" onblur="deactivateBorder(event)" onkeyup="traceNumberInput(event)" value="">
                  <small class="form-text"></small>
                </div>

                <div class="form-input inputbox bodytextchi">
                  <span>持卡人姓名</span>
                  <input type="text" class="form-control" name="card-holder-name" id="card-holder-name" placeholder="請輸入持卡人姓名" onfocus="
                    flipCard(event);" onblur="deactivateBorder(event)" onkeyup="traceNameInput(event)" value="">
                  <small id="HolderName" class="form-text"></small>
                </div>

                <div class="form-input inputbox bodytextchi">
                  <span>有效期限</span>
                  <input type="text" class="form-control" name="valid-thru-date" id="expiry" placeholder="請輸入有效期限" onfocus="flipCard(event);" onblur="deactivateBorder(event)" onkeyup="traceDateInput(event)" value="">
                  <small id="CardMonthandDate" class="form-text"></small>
                </div>

                <div class="form-input inputbox bodytextchi">
                  <span>背面末三碼</span>
                  <input type="number" class="form-control" name="security-code" id="code" placeholder="請輸入背面末三碼" onfocus="flipCard(event);" onblur="deactivateBorder(event)" onkeyup="traceCodeInput(event)" value="">
                  <small id="SafeCode" class="form-text"></small>
                </div>

                <div class="form-input h5chi">
                  <button type="submit" class="OrangeBtn" onclick="return formCheckCreditCard()"><span>確認付款</span></button>
                </div>

              </form>
            </div>
          </div>
          <!-- </div> -->




        </div>



      </div>
      <!---------- Creditcard ---------->

      <script>
        function formCheckCreditCard(e) {
          event.preventDefault();

          const HolderName = $('#card-holder-name'),
            CardNumber = $('#number'),
            CardMonth = $('#expiry'),
            SafeCode = $('#code');


          HolderName.next().text('');
          CardNumber.next().text('');
          CardMonth.next().text('');
          //CardYear.next().text('');
          SafeCode.next().text('');

          HolderName.css('border-color', '#CCCCCC');
          CardNumber.css('border-color', '#CCCCCC');
          CardMonth.css('border-color', '#CCCCCC');
          //CardYear.css('border-color', '#CCCCCC');
          SafeCode.css('border-color', '#CCCCCC');

          let isPass = true;

          if (HolderName.val().length < 3) {
            isPass = false;
            HolderName.css('border-color', 'red');
            $("#HolderName").text('*請輸入持卡人姓名');

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

          // if (CardYear.val().length < 3) {
          //     isPass = false;
          //     CardYear.css('border-color', 'red');
          //     CardYear.next().text('*請輸入卡號的有效年份');
          // }


          if (SafeCode.val().length < 3) {
            isPass = false;
            SafeCode.css('border-color', 'red');
            SafeCode.next().text('*請輸入信用卡之安全碼');
          }

          if (isPass) {
            // $.post('payment-api.php', $(document.formCreditInfo).serialize(), function(data) {
            //     console.log(data);

            // if (data.success) {
            if (true) {
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
            // }, 'json');

          }

          return false;
        }


        // 點擊Icon後跳出登入視窗
        // $('#exampleModal').modal()
      </script>

      <!-- ----card---- -->

      <script>
        var isFront = true;
        var cardContainer = document.querySelector(".card-image");
        var creditCard = document.querySelector(".card-background");
        var cardFront = document.querySelector(".card-front");
        var cardRear = document.querySelector(".card-rear");
        var cardLogo = document.querySelector(".card-logo");

        function flipCard(e) {
          if ((isFront && e.target.name == "security-code") || (!isFront && e.target.name != "security-code")) {
            setTimeout(() => {
              activateBorder(e);
            }, 500);
            if (isFront) {
              cardFront.style.transform = "perspective( 600px ) rotateY( -180deg )";
              cardRear.style.transform = "perspective( 600px ) rotateY( 0deg )";
            } else {
              cardFront.style.transform = "perspective( 600px ) rotateY( 0deg )";
              cardRear.style.transform = "perspective( 600px ) rotateY( 180deg )";
            }
            isFront = !isFront;
          } else activateBorder(e);
        }

        function activateBorder(e) {
          return;
          let borderBox = document.querySelector(".active-border");
          let focusedInput = document.querySelector(`.${e.target.name}`);
          let newRect = focusedInput.getBoundingClientRect();
          let removePadding = 4; //PADDING+BORDER OF .active-border

          borderBox.style.display = "inline-block";
          borderBox.style.opacity = "1";
          borderBox.style.height = newRect.height + "px";
          borderBox.style.width = newRect.width + "px";
          borderBox.style.top = (newRect.top - removePadding) + "px";
          borderBox.style.left = (newRect.left - removePadding) + "px";
        }

        function deactivateBorder(e) {
          return;
          let borderBox = document.querySelector(".active-border");
          borderBox.style.opacity = "0";
        }

        function traceNumberInput(e) {
          let focusedInput = document.querySelector(`.${e.target.name}`);
          let newString = "";
          let spaceCounter = [4, 9, 14];
          let initString = "XXXX XXXX XXXX XXXX";
          if (spaceCounter.some((val) => e.target.value.length == val))
            e.target.value += " ";
          if (e.target.value.length <= 19) {
            let userInput = e.target.value;
            for (let i = 0; i < 19; i++) {
              if (i < userInput.length) {
                newString += userInput[i];
              } else {
                newString += initString[i];
              }
            }
            focusedInput.innerHTML = newString;
          } else {
            e.target.value = e.target.value.substr(0, 19);
          }
        }

        function traceNameInput(e) {
          if (e.target.value.length > 11) activateBorder(e);

          let focusedInput = document.querySelector(`.${e.target.name}`);
          if (e.target.value == "") focusedInput.innerHTML = "NAME SURNAME";
          else focusedInput.innerHTML = e.target.value.toUpperCase();
        }

        function traceDateInput(e) {
          let focusedInput = document.querySelector(`.${e.target.name}`);
          let newString = "";
          let initString = "MM/YY";
          if (e.target.value.length == 2) e.target.value = e.target.value + "/";
          if (e.target.value.length < 6) {
            for (let i = 0; i < 5; i++) {
              if (i < e.target.value.length)
                newString += e.target.value[i];
              else
                newString += initString[i];
            }
            focusedInput.innerHTML = newString;
          } else {
            e.target.value = e.target.value.substr(0, 5);
          }
        }

        function traceCodeInput(e) {
          let focusedInput = document.querySelector(`.${e.target.name}`);
          if (e.target.value.length <= 3) {
            if (e.target.value == "") focusedInput.innerHTML = "123";
            else focusedInput.innerHTML = e.target.value;
          } else {
            e.target.value = e.target.value.substr(0, 3);
          }
        }
        // window.addEventListener("load", getImageSize);
        // window.addEventListener("resize", getImageSize);
        function getImageSize() {
          var img = document.querySelector('.card-background');
          cardContainer.style.height = img.clientHeight + "px";
          cardContainer.style.width = img.clientWidth + "px";
        }
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
            <span class="h5chi">客制選項</span><br>
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
            <span class="h5chi">總計</span>


            <span class="h5chi">

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

    <?php //include __DIR__ . '/__footer.php' 
    ?>

</body>

</html>