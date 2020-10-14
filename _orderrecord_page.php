
    <style>
        .orderrecord {
            background-color: #EEEEEE;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            color: #5d5d5d;
            height: 100vh;
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
            padding: 0;
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
            padding: 1rem 0;
        }



        @media screen and (max-width: 375px) {

            .pageTitle {
                margin: 2rem 1rem;
            }

            .orderTitle {
                margin: 1rem;
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
            .BreadCrumbs {
                display: none;
                margin: 1rem;
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
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item bodytextchi"><a href="#">首頁</a></li>
                <li class="breadcrumb-item bodytextchi"><a href="#">會員中心</a></li>
                <li class="breadcrumb-item active bodytextchi" aria-current="page">訂單記錄</li>
            </ol>
        </nav>

        <div class="pageTitle h4chi">
            <span>訂單紀錄</span>
        </div>
        <span class="orderTitle h5chi">即將出發</span>

        <div class="orderInfo">
            <div class="orderHead">
                <span class="tdate h5chi">2020/8/22 - 2020/09/22</span>
                <!-- <span class="tcount h4chi">＄56,800</span> -->

                <button class="btn btn-link  text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false">
                    <img src="icon/more.svg">
                </button>


            </div>
            <div class="line"></div>
            <div class="orderlist">
                <ul class="list-style bodytextchi">
                    <li>訂購日期：2020/07/10</li>
                    <li>訂單編號：12345678222222</li>
                    <li>訂單金額：＄56,800</li>
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
                            <div class="customlist">


                                <?php
                                $num = count($_SESSION['active']['activetitle']);
                                for ($i = 0; $i < $num; $i++) : ?>

                                    <div class="customlistLeft">
                                        <div class="leftPicbox">
                                            <img class="picfit" src="<?= $_SESSION['active']['activeimg'][$i] ?>" alt="">
                                        </div>
                                        <p class="bodytextchi"><?= $_SESSION['active']['activetitle'][$i] ?></p>
                                        <p class="bodytextchi">><?= $_SESSION['active']['activetime'][$i] ?></p>
                                    </div>

                                    <div class="customlistRight">
                                        <p class="bodytextchi">＄<?= $_SESSION['active']['activequantity'][$i] ?></p>
                                    </div>
                            </div>


                        <?php endfor; ?>

                        </div>

                        <div class="price">
                            <p class="h5chi" style="font-weight: 700;">總價格</p>
                            <!-- <p class="h5chi" style="font-weight: 700;">＄56,800</p> -->
                            <?php
                        $activitiesPrice = array_sum($_SESSION['active']['activequantity']);
                        echo '<br>';
                        $roomsPrice =  array_sum($_SESSION['order_rooms']['price']);
                        echo '<br>';
                        echo  $activitiesPrice + $roomsPrice;
                        ?>
                        </div>
                        <p class="bodytextchi" style="text-align: center;">*此價格包含免費機場接駁車</p>

                    </div>

                </div>
            </div>
        </div>

        <!-- <span class="orderTitle h5chi">歷史紀錄</span>

        <div class="orderInfo">
            <div class="orderHead">
                <span class="tdate h5chi">2020/8/22 - 2020/09/22</span>

                <button class="btn btn-link  text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false">
                    <img src="icon/more.svg">
                </button>


            </div>
            <div class="line"></div>
            <div class="orderlist">
                <ul class="list-style bodytextchi">
                    <li>訂購日期：2020/07/10</li>
                    <li>訂單編號：12345678222222</li>
                    <li>訂單金額：＄56,800</li>
                    <li>訂單狀態：已完成付款</li>
                </ul>
                <a href="" class="modifytext bodytextchi">更改訂單</a>

            </div>

            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div id="collapseTwo" class="collapse" data-parent="#accordionExample">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                            3
                            wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                            laborum
                            eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
                            nulla
                            assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                            nesciunt
                            sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                            farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                            labore sustainable VHS.
                        </div>
                    </div>
                </div>
            </div>

        </div> -->
    </div>