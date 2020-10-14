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
        margin-top: 100px;
        margin-left: 100px;
        margin-bottom: 100px;
    }

    .LinkColor {
        color: #747474;
    }

    /* ----- BreadCrumbs RWD ----- */

    @media screen and (max-width: 375px) {
        .BreadCrumbs {
            display: none;
        }
    }

    /* ----- BreadCrumbs RWD ----- */

    /* ---------- BreadCrumbs ---------- */


    /* booking bar */
    .bookingbar {
        width: 950px;
        height: 150px;
        display: flex;
        background-color: #FFFFFF;
        align-items: center;
        justify-content: center;
        box-shadow: hsla(0, 0%, 36%, 0.5) 0 3px 6px;
        margin: 30px auto 0 auto;
    }

    .checkindate {
        display: flex;
        flex-direction: column;
        color: #5D5D5D;
        font-weight: bold;
        margin: 0 30px 0 0;
    }

    .checkoutdate {
        display: flex;
        flex-direction: column;
        font-weight: bold;
        color: #5D5D5D;
        margin: 0 30px 0 0;
    }

    .reservation {
        color: #5D5D5D;
        font-weight: bold;
        display: flex;
        flex-direction: column;
        width: 110px;
        height: 40px;
        margin: -10px 30px 0 0;
    }

    .booking {
        margin: 18px 0 0 0;
        background: #EB9851;
        width: 117px;
        height: 48px;
        justify-content: center;
        align-items: center;
        font-weight: bold;
    }

    .booking a {
        color: white;
        font-family: 'Crimson Text', serif;
        font-size: 15px;
    }

    @media screen and (max-width: 375px) {
        .bookingbar {
            display: none;
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
        width: 268px;
        height: 55px;
        background-color: #EB9851;
        /* margin: 40px 0 40px 0; */
        border: none;
        color: #ffff;
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
</style>
</head>

<body>

    <!---------- BreadCrumbs ---------->

    <div class="BreadCrumbs">
        <span class="h3chi">
            <a class="LinkColor" href="">首頁</a> >
            <a class="LinkColor" href="">訂購選單</a> >
            <a class="LinkColor" href="">選擇房型</a> >
            <a class="LinkColor" href="">客製活動</a> >
            <a class="LinkColor" href="">付款</a>
        </span>
    </div>

    <!---------- BreadCrumbs ---------->


    <!-- booking bar -->
    <div class="bookingbar">
        <div class="checkindate">
            <span class="bodytextchi">入住日期</span>

            <input type="text">
        </div>
        <div class="checkoutdate">
            <span class="bodytextchi">退房日期</span>
            <input type="text">
        </div>
        <div class="reservation">
            <span class="bodytextchi">預約人數</span>
            <input type="text">
        </div>
        <div class=" d-flex booking">
            <a class=" d-flex bodytexteng" href="">更改條件</a>
        </div>
    </div>


    <div class="wrapper1">

        <!---------- Creditcard ---------->

        <div class="creditcard">
            <div class="aligntitle h3chi">
                <span>信用卡資訊</span>
            </div>

            <div class="CreditCardPic">
                <img src="images/CreditCard.png" alt="">
            </div>

            <div class="cardholder h4chi">
                <span>持卡人姓名</span><span class="required">*</span>
                <div>
                    <input class="col-md-offset-2 col-md-9 cardholdertext" type="text">
                </div>
            </div>

            <div class="cardnumber h4chi">
                <span>卡號</span><span class="required">*</span>
                <div class="cardnumbertext">
                    <input class="cardnumbertext1" type="text"> - <input class="cardnumbertext1" type="text"> - <input class="cardnumbertext1" type="text"> - <input class="cardnumbertext1" type="text">
                </div>
                <input class="cardnumbertext2" type="text">
            </div>

            <div class="cardnumber h4chi">
                <span>有效期限</span><span class="required">*</span>
                <div>
                    <select class="monthtext bodytextchi">
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

                    <select class="yeartext bodytextchi">
                        <option value="0">年份</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                    </select>
                </div>
            </div>

            <div class="cardnumber h4chi">
                <span>安全碼</span><span class="required">*</span>
                <div>
                    <input class="cardnumbertext3 bodytexteng" type="text" value="CVN">
                </div>
            </div>

            <div class="paybuttom">
                <button class="buttomstyle h5chi" href="/123/order.php">
                    <span>確認付款</span>
                </button>
            </div>

        </div>
        <!---------- Creditcard ---------->



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
                        <span class="detail bodytextchi">4晚</span>
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
                
                <span class="h4chi">客製選項</span><br>
                <?php
                $num = count($_SESSION['active']['activetitle']);
                for ($i = 0; $i < $num; $i++) : ?>
                    <div class="line"></div>


                    <div class="day">
                        <span class="detail bodytextchi"><?= $_SESSION['active']['activetitle'][$i] ?></span>
                        <span class="detail bodytextchi">x <?= $_SESSION['active']['activetime'][$i] ?></span>
                        <span class="detail bodytextchi"><?= $_SESSION['active']['activequantity'][$i] ?></span>

                    </div>
                    <div class="cancel"><span class="bodytextchi">取消訂購</span>
                    </div>

                <?php endfor; ?>





                <!----------------------------------- 活動明細 -------------------------------------->



                <div class="line"></div>
                <div class="day">
                    <span class="h4chi">總計</span>


                    <span class="h4chi">


                        <?php
                        $activitiesPrice = array_sum($_SESSION['active']['activequantity']);
                        echo '<br>';
                        $roomsPrice =  array_sum($_SESSION['order_rooms']['price']);
                        echo '<br>';
                        echo  $activitiesPrice + $roomsPrice;
                        ?>

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