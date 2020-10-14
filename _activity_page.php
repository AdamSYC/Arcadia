
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

        @media screen and (max-width: 768px) {
            .rwdBtn {
                display: unset;
            }
        }


        /* booking bar */
        /* .bookingbar {
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
        margin:  0 30px 0 0;
        }

        .checkoutdate {
        display: flex;
        flex-direction: column;
        font-weight: bold;
        color: #5D5D5D;
        margin:  0 30px 0 0;
        }

        .reservation {
        color: #5D5D5D;
        font-weight: bold;
        display: flex;
        flex-direction: column;
        width: 110px;
        height: 40px;
        margin:  -10px 30px 0 0;
        }
        
        .booking {
        margin:  18px 0 0 0;
        background: #EB9851;
        width: 117px;
        height: 48px;
        justify-content: center;
        align-items: center;
        font-weight: bold;
        }
        .booking a{
        color: white;
        font-family: 'Crimson Text', serif;
        font-size: 15px;
        }
        @media screen and (max-width: 768px) {
            .bookingbar{
                display: none;
            }
        }      
        */

        /* accordian */
        * {
            box-sizing: border-box;
            font-family: arial;
        }

        .accordion {
            max-width: 600px;
            margin: 0 0;
        }

        .cardWrapper {
            box-shadow: hsla(0, 0%, 36%, 0.5) 0 3px 6px;
            margin-top: 30px;
        }

        .accordion__heading {
            position: relative;
            display: block;
            background: white;
            padding: 10px 40px;
            margin: 0;
            color: #5D5D5D;
            cursor: pointer;

        }

        .accordion__heading:after,
        .accordion__heading:before {
            content: "";
            position: absolute;
            width: 14px;
            height: 4px;
            background: #09839C;
            top: 50%;
            right: 30px;
            -webkit-transition: all 0.4s;
            transition: all 0.4s;

        }

        .accordion__checkbox:checked~.accordion__heading:before {
            -webkit-transform: rotate(90deg);
            transform: rotate(90deg);
            -webkit-transition: all 0.3s;
            transition: all 0.3s;
        }

        .accordion__heading:after {
            -webkit-transition: all 0.4s;
            transition: all 0.4s;
            -webkit-transform: rotate(180deg);
            transform: rotate(180deg);
            /* opacity: 0; */
        }

        .accordion__checkbox:checked~.accordion__heading:before {
            -webkit-transform: rotate(90deg);
            transform: rotate(90deg);
        }

        .accordion__checkbox {
            display: none;
            position: absolute;
            left: -9999em;
        }

        .accordion__checkbox {
            max-height: 1200px;
            -webkit-transition: all 1s;
            transition: all 1s;
        }

        .accordion__checkbox:checked~.accordion__content {
            max-height: 0;
            overflow: hidden;
            -webkit-transition: all 1s;
            transition: all 1s;
        }

        @media screen and (max-width: 768px) {
            .accordion__heading {
                padding: 30px 30px;
            }
        }

        /* activity  */
        .activityCard {
            display: flex;
            padding: 0px 40px 40px 40px;
            width: 600px;
            /* box-shadow: hsla(0, 0%, 36%, 0.5) 0 3px 6px; */
            margin-top: 30px;

        }

        .activity {
            max-width: 350px;
            margin: 0 10px 0 10px;

        }

        .activityimg {
            width: 240px;
            height: 200px;
            position: relative;
        }

        .checkDetail {
            position: absolute;
            background-color: #262525;
            opacity: 0.6;
            width: 100%;
            height: 100%;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            color: white;
            opacity: 0;
            justify-content: center;
            align-items: center;
            display: flex;
            transition: .6s ease;

        }

        .checkDetail:hover {
            opacity: 1;
            background-color: hsla(0, 1%, 15%, 0.6);
            color: white;
            text-decoration: none;

        }

        .titleBox {
            display: flex;
        }

        .activityTitle {
            margin: 10px 0 5px 0;
        }

        .activityLetter {
            margin: 10px 0 5px 0;
        }

        .activityPrice {
            margin: 5px 0 5px 0;
        }

        .activityNum {
            border: 1.5px solid #09839C;
            color: #09839C;
            background-color: white;
            width: 240px;
            height: 32px;
        }

        .priceBox {
            display: flex;
        }

        .activity-priceTag {
            display: flex;
            margin: 5px 0 5px 0;
            ;
        }

        .addBtn {
            width: 240px;
            height: 42px;
            border: 2px solid #EB9851;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 10px 0 0 0;
            color: #EB9851;
            background: white;
            font-weight: bold;
            padding: 0;
        }

        .addBtn:hover {
            text-decoration: none;
            color: #EB9851;
        }

        .rwdSet {
            display: unset;
        }

        @media screen and (max-width: 768px) {
            .activityList {
                width: 100%;
                padding: 0;

            }

            .activityCard {
                flex-direction: column;
                max-width: 375px;
                padding: 0;
                box-shadow: none;
                /* margin: 50px 0 0 0 ; */
                justify-content: center;
                align-items: center;
            }

            .activity {
                position: unset;
                margin-bottom: 50px;
            }

            .rwdSet {
                display: flex;
            }

            .title {
                position: unset;
                max-width: 340px;
                margin-right: 0;
            }

            .activityimg {
                width: 340px;
                height: 200px;
            }

            .checkDetail {
                position: absolute;
                background-color: #262525;
                opacity: 0.6;
                width: 100%;
                height: 100%;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                color: white;
                opacity: 0;
                justify-content: center;
                align-items: center;
                display: flex;
                transition: .6s ease;

            }

            .checkDetail:hover {
                opacity: 1;
                background-color: hsla(0, 1%, 15%, 0.6);
                color: white;
                text-decoration: none;

            }

            .iconMinus {
                display: none;
            }

            .activityNum {
                position: unset;
                width: 220px;
                height: 40px;
            }

            .addBtn {
                position: unset;
                display: flex;
                margin: 0 0 0 10px;
                width: 110px;
                height: 40px;
                background: white;
            }

        }

        /* activity detail-popup1*/
        .modal-content {
            background-color: unset;
            border: none;
            width: 50px;
        }

        .modal-header {
            border: unset;
            margin-left: 490px;
        }

        .modal-body {
            padding: unset;
            margin-left: -140px;
        }

        .close {
            margin-right: -100px;
            font-size: 2rem;
            opacity: 1;
            text-shadow: none;
            font-weight: 500;
            color: white;
        }

        .modal-footer {
            border-top: none;
        }

        .windowTitle {
            color: #09839C;
            justify-content: flex-start;
        }

        .coverfit {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .eventdetailone {
            background-color: #ffffff;
            align-items: center;
            justify-content: center;
            box-shadow: hsla(0, 0%, 36%, 0.5) 0 3px 6px;
            width: 700px;
            margin: 0 auto;
        }

        .eventDetail {
            display: flex;
        }

        .eventimg {
            width: 300px;
            height: 300px;
        }

        .eventText {
            display: flex;
            flex-direction: column;
            margin: auto 40px 40px 35px;
            width: 400px;
        }

        .eventTitle {
            color: #5D5D5D;
        }

        .eventBody {
            color: #5D5D5D;
        }

        .mintextchi {
            color: #5D5D5D;
        }

        .eventLocation {
            margin-top: 30px;
        }

        .eventInput {
            display: block;
            flex-direction: column;
            justify-content: center;
            padding: 20px;
        }

        @media screen and (max-width: 375px) {

            .modal-header {
                border: unset;
                margin-left: 285px;
            }

            .modal-body {
                padding: unset;
                margin-left: 0;
                width: unset;
            }

            .eventdetailone {
                width: 360px;
            }

            .mintextchi {
                line-height: unset;
            }

            .eventTitle {
                margin-bottom: 10px;
            }

            .eventDetail {
                display: unset;
            }

            .eventimg {
                width: 360px;
            }

            .eventText {
                width: 360px;
                height: 230px;
                margin: unset;
                padding: 20px;
            }

            .locationRwd {
                margin-top: 15px;
            }

        }

        /* activity detail-popup2*/
        .header2 {
            border: unset;
            margin-left: 480px;
        }

        .eventdetailtwo {
            background-color: #ffffff;
            align-items: center;
            justify-content: center;
            box-shadow: hsla(0, 0%, 36%, 0.5) 0 3px 6px;
            width: 700px;
            margin: 0 auto;
            padding: 20px;
            position: relative;
        }

        .eventText2 {
            display: flex;
            flex-direction: column;
            margin: auto 0 auto 40px;
            width: 400px;
        }

        .inputbox {
            margin-top: 10px;
            display: flex;
            flex-direction: column;
            color: #5D5D5D;
        }

        input {
            height: 10px;
            padding: 0px 20px;
            /* width: 434px; */
        }

        .form-control {
            height: 100px;
        }

        .OrangeBtn {
            background-color: #EB9851;
            padding: 5px 20px 5px 20px;
            /* margin: 20px 0; */
            border: none;
            color: #ffff;
            font-size: 16px;
        }

        @media screen and (max-width: 375px) {
            .header2 {
                margin-left: 285px;
            }

            .eventdetailtwo {
                width: 360px;
                padding: 0;
            }

            .eventimg {
                width: 360px;
            }

            .eventText2 {
                width: 360px;
                margin: unset;
                padding: 20px;
            }

            .inputbox {
                padding: 0 20px 0 20px;
            }
        }

        /* 詳細訂單 */
        .orderList {
            margin-left: 30px;
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

        @media screen and (max-width: 768px) {
            .orderList {
                display: none;
            }

        }
    </style>
</head>

<body>
    <!-- booking bar -->
    <!-- <div class="bookingbar">
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
<div class="rwdBtn">
<a class="h4chi skpBtn" href="">跳過活動選擇 Ｓkip
    <img src="/icon/Icon-arrow.svg" alt="">
</a> </div> -->

    <div class="wrapper1">
        <div class="accordion">
            <!-- 活動1 -->
            <div class="cardWrapper">
                <section>
                    <input type="checkbox" class="accordion__checkbox" id="accordion-heading-1">

                    <label class="accordion__heading h4chi" for="accordion-heading-1">1.暢遊海洋</label>

                    <div class="accordion__content">
                        <div class="activityCard">
                            <div class="activity" data-id="ac1">
                                <div class="activityimg"><img class="coverfit" src="/123/img/activity/experience-sea-diving01.jpg" alt="">
                                    <!-- Button trigger modal -->
                                    <button class="checkDetail bodytextchi" data-target="#exampleModal1" data-toggle="modal" type="button">查看細節</button>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="eventdetailone">
                                                    <div class="eventDetail">
                                                        <img class="eventimg coverfit" src="/123/img/activity/experience-sea-diving01.jpg"></img>
                                                        <div class="eventText">
                                                            <span class="h4chi eventTitle">浮潛潛水</span>
                                                            <span class="mintextchi eventBody">
                                                                體驗海底五彩繽紛世界，即時不會游泳也不要緊，只要穿上浮潛裝備，聽從當地教練指示，就能輕輕鬆鬆在大海裡探索美麗的海底世界。
                                                            </span>
                                                            <span class="mintextchi eventLocation"> 地點: Arcadia海域</span>
                                                            <span class="mintextchi eventPeople">可容納人數: 12人/次</span>
                                                            <span class="mintextchi eventContact">細節請洽客服</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="titleBox">
                                    <div class="activityLetter bodytextchi">A.</div>
                                    <div class="activityTitle bodytextchi">浮潛潛水</div>
                                </div>
                                <div class="priceBox">
                                    <div class="activityPrice bodytextchi">價格 </div>
                                    <span class="activity-priceTag bodytextchi" data-val=3500>＄3500/次</span>
                                </div>
                                <div class="rwdSet"><select class="activityNum" name="" id="">
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
                                    </select>
                                    <button class="addBtn" href="">+ Add</button></div>
                            </div>

                            <div class="activity" data-id="ac2">
                                <div class="activityimg"><img class="coverfit" src="/123/img/activity/experience-sea-surf01.jpg" alt="">
                                    <!-- Button trigger modal -->
                                    <button class="checkDetail bodytextchi" data-target="#exampleModal2" data-toggle="modal" type="button">查看細節</button>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="eventdetailone">
                                                    <div class="eventDetail">
                                                        <img class="eventimg coverfit" src="/123/img/activity/experience-sea-surf01.jpg"></img>
                                                        <div class="eventText">
                                                            <span class="h4chi eventTitle">衝浪體驗</span>
                                                            <span class="mintextchi eventBody">
                                                                來到ARCADIA的衝浪學校，如果你曾接觸過衝浪，這裡會有專業的教練來帶你更深入的學習衝浪技巧，也會有中文助教預先說明衝浪相關知識，與你共同完成安全的衝浪學習之旅。
                                                            </span>
                                                            <span class="mintextchi eventLocation"> 地點: Arcadia海域</span>
                                                            <span class="mintextchi eventPeople">可容納人數: 12人/次</span>
                                                            <span class="mintextchi eventContact">細節請洽客服</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="titleBox">
                                    <div class="activityLetter bodytextchi">B.</div>
                                    <div class="activityTitle bodytextchi">衝浪體驗</div>
                                </div>
                                <div class="priceBox">
                                    <div class="activityPrice bodytextchi">價格 </div>
                                    <span class="activity-priceTag bodytextchi" data-val=1800>＄1800/次</span>
                                </div>
                                <div class="rwdSet"><select class="activityNum" name="" id="">
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
                                    </select>
                                    <button class="addBtn" href="">+ Add</button></div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <!-- 活動2 -->
            <div class="cardWrapper">
                <section>
                    <input type="checkbox" class="accordion__checkbox" id="accordion-heading-2">

                    <label class="accordion__heading h4chi" for="accordion-heading-2">2.探索森林</label>

                    <div class="accordion__content">
                        <div class="activityCard">
                            <div class="activity" data-id="ac3">
                                <div class="activityimg"><img class="coverfit" src="/123/img/activity/experience-jungle-eco01.jpg" alt="">
                                    <!-- Button trigger modal -->
                                    <button class="checkDetail bodytextchi" data-target="#exampleModal3" data-toggle="modal" type="button">查看細節</button>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="eventdetailone">
                                                    <div class="eventDetail">
                                                        <img class="eventimg coverfit" src="/123/img/activity/experience-jungle-eco01.jpg"></img>
                                                        <div class="eventText">
                                                            <span class="h4chi eventTitle">生態探訪</span>
                                                            <span class="mintextchi eventBody">
                                                                讓ARCADIA專業的團隊帶你體驗熱帶雨林之美，認識雨林中的多元生態。生動有趣的導覽方式讓大人小孩都能快樂學習尊重生命、愛護生態環境，並且帶入生命教育與環保的概念，沐浴在雨林豐沛的芬多精之中。
                                                            </span>
                                                            <span class="mintextchi eventLocation"> 地點: 森林步道</span>
                                                            <span class="mintextchi eventPeople">可容納人數: 12人/次</span>
                                                            <span class="mintextchi eventContact">細節請洽客服</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="titleBox">
                                    <div class="activityLetter bodytextchi">C.</div>
                                    <div class="activityTitle bodytextchi">生態探訪</div>
                                </div>
                                <div class="priceBox">
                                    <div class="activityPrice bodytextchi">價格 </div>
                                    <span class="activity-priceTag bodytextchi" data-val=800>＄800/次</span>
                                </div>
                                <div class="rwdSet"><select class="activityNum" name="" id="">
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
                                    </select>
                                    <button class="addBtn" href="">+ Add</button></div>
                            </div>

                            <div class="activity" data-id="ac4">
                                <div class="activityimg"><img class="coverfit" src="/123/img/activity/experience-jungle- historic.jpg" alt="">
                                    <!-- Button trigger modal -->
                                    <button class="checkDetail bodytextchi" data-target="#exampleModal4" data-toggle="modal" type="button">查看細節</button>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="eventdetailone">
                                                    <div class="eventDetail">
                                                        <img class="eventimg coverfit" src="/123/img/activity/experience-jungle- historic.jpg"></img>
                                                        <div class="eventText">
                                                            <span class="h4chi eventTitle">古蹟尋訪</span>
                                                            <span class="mintextchi eventBody">
                                                                記錄著歷史興衰、朝代更替的古蹟，是每一個到ARCADIA的人必去之地，這些歷經政權朝代更迭、戰爭動亂洗禮的古蹟，讓人不經意間就會感受到歷史的厚重感，也使傳奇色彩濃厚的古蹟更加美麗而神秘。
                                                            </span>
                                                            <span class="mintextchi eventLocation"> 地點: 古蹟群</span>
                                                            <span class="mintextchi eventPeople">可容納人數: 12人/次</span>
                                                            <span class="mintextchi eventContact">細節請洽客服</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="titleBox">
                                    <div class="activityLetter bodytextchi">D.</div>
                                    <div class="activityTitle bodytextchi">古蹟尋訪</div>
                                </div>
                                <div class="priceBox">
                                    <div class="activityPrice bodytextchi">價格 </div>
                                    <span class="activity-priceTag bodytextchi" data-val=800>＄800/次</span>
                                </div>
                                <div class="rwdSet"><select class="activityNum" name="" id="">
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
                                    </select>
                                    <button class="addBtn" href="">+ Add</button></div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- 活動3 -->
            <div class="cardWrapper">
                <section>
                    <input type="checkbox" class="accordion__checkbox" id="accordion-heading-3">

                    <label class="accordion__heading h4chi" for="accordion-heading-3">3.特色體驗</label>

                    <div class="accordion__content">
                        <div class="activityCard">
                            <div class="activity" data-id="ac5">
                                <div class="activityimg"><img class="coverfit" src="/123/img/activity/experience-lesson-massage01.jpg" alt="">
                                    <!-- Button trigger modal -->
                                    <button class="checkDetail bodytextchi" data-target="#exampleModal5" data-toggle="modal" type="button">查看細節</button>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="eventdetailone">
                                                    <div class="eventDetail">
                                                        <img class="eventimg coverfit" src="/123/img/activity/experience-lesson-massage01.jpg"></img>
                                                        <div class="eventText">
                                                            <span class="h4chi eventTitle">薰香按摩</span>
                                                            <span class="mintextchi eventBody">
                                                                想把握每分每秒盡情體驗道地的異國風情，讓身體舒適的放鬆，融合當下愉悅氣氛，休息就顯得無比的重要；按摩是現代人不可或缺的日常保健選擇之一，適度的按摩能夠疏通經絡、恢復肌肉彈性、保持身心靈放鬆愉悅。
                                                            </span>
                                                            <span class="mintextchi eventLocation"> 地點: 桑拿房</span>
                                                            <span class="mintextchi eventPeople">可容納人數: 2人/次</span>
                                                            <span class="mintextchi eventContact">細節請洽客服</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="titleBox">
                                    <div class="activityLetter bodytextchi">E.</div>
                                    <div class="activityTitle bodytextchi">薰香按摩</div>
                                </div>
                                <div class="priceBox">
                                    <div class="activityPrice bodytextchi">價格 </div>
                                    <span class="activity-priceTag bodytextchi" data-val=2500>＄2500/次</span>
                                </div>
                                <div class="rwdSet"><select class="activityNum" name="" id="">
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
                                    </select>
                                    <button class="addBtn" href="">+ Add</button></div>
                            </div>

                            <div class="activity" data-id="ac6">
                                <div class="activityimg"><img class="coverfit" src="/123/img/activity/experience-lesson-yoga.jpg" alt="">
                                    <!-- Button trigger modal -->
                                    <button class="checkDetail bodytextchi" data-target="#exampleModal6" data-toggle="modal" type="button">查看細節</button>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="eventdetailone">
                                                    <div class="eventDetail">
                                                        <img class="eventimg coverfit" src="/123/img/activity/experience-lesson-yoga.jpg"></img>
                                                        <div class="eventText">
                                                            <span class="h4chi eventTitle">紓壓瑜珈</span>
                                                            <span class="mintextchi eventBody">
                                                                立即參加瑜珈體驗，享受一場與自我的對話！旅行不是尋找新的風景，而是擁有新的視野與體驗，專業瑜伽老師帶你一起深呼吸，進行平衡身心的瑜珈練習。將旅行帶來的省思儲存在身體裡，提醒自己原來心靈擁有這麼多自由與美好。
                                                            </span>
                                                            <span class="mintextchi eventLocation"> 地點: 瑜珈室</span>
                                                            <span class="mintextchi eventPeople">可容納人數: 12人/次</span>
                                                            <span class="mintextchi eventContact">細節請洽客服</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="titleBox">
                                    <div class="activityLetter bodytextchi">F.</div>
                                    <div class="activityTitle bodytextchi">紓壓瑜珈</div>
                                </div>
                                <div class="priceBox">
                                    <div class="activityPrice bodytextchi">價格 </div>
                                    <span class="activity-priceTag bodytextchi" data-val=1800>＄1800/次</span>
                                </div>
                                <div class="rwdSet"><select class="activityNum" name="" id="">
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
                                    </select>
                                    <button class="addBtn" href="">+ Add</button></div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>


            <!-- 活動4 -->
            <div class="cardWrapper">
                <section>
                    <input type="checkbox" class="accordion__checkbox" id="accordion-heading-4">

                    <label class="accordion__heading h4chi" for="accordion-heading-4">4.客製服務</label>

                    <div class="accordion__content">
                        <div class="activityCard">
                            <div class="activity" data-id="ac7">
                                <div class="activityimg"><img class="coverfit" src="/123/img/activity/experience-party02.jpg" alt="">
                                    <!-- Button trigger modal -->
                                    <button class="checkDetail bodytextchi" data-target="#exampleModal7" data-toggle="modal" type="button">查看細節</button>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header header2">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="eventdetailtwo">
                                                    <div class="eventDetail">
                                                        <img class="eventimg coverfit" src="/123/img/activity/experience-party02.jpg"></img>
                                                        <div class="eventText2">
                                                            <span class="h4chi eventTitle">派對規劃</span>
                                                            <span class="mintextchi eventBody">
                                                                特殊紀念日選擇來ARCADIA渡假嗎？生日慶生、紀念日、單身派對，都不用操心怎麼準備！我們提供優質有質感的佈置，針對您的派對有不同的選擇，幫您籌備派對流程，留下永生難忘的絕妙回憶。
                                                            </span>
                                                            <span class="mintextchi eventLocation locationRwd"> 地點:
                                                                Arcadia 活動聽</span>
                                                            <span class="mintextchi eventPeople">可容納人數: 20人/次</span>
                                                            <span class="mintextchi eventContact">細節請洽客服</span>
                                                        </div>
                                                    </div>
                                                    <div class="inputbox account bodytextchi">
                                                        <span class="bodytextchi">＊特殊需求留言：</span>
                                                        <div>
                                                            <input type="text" class="form-control" aria-label="creditcard" aria-describedby="basic-addon1">
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="OrangeBtn">送出</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="titleBox">
                                    <div class="activityLetter bodytextchi">G.</div>
                                    <div class="activityTitle bodytextchi">派對規劃</div>
                                </div>
                                <div class="priceBox">
                                    <div class="activityPrice bodytextchi">價格 </div>
                                    <span class="activity-priceTag bodytextchi">價格另計</span>
                                </div>
                                <div class="rwdSet"><select class="activityNum" name="" id="">
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
                                    </select>
                                    <button class="addBtn" href="">+ Add</button> </div>

                            </div>

                            <div class="activity" data-id="ac8">
                                <div class="activityimg"><img class="coverfit" src="/123/img/activity/experience-dinner01.jpg" alt="">
                                    <!-- Button trigger modal -->
                                    <button class="checkDetail bodytextchi" data-target="#exampleModal8" data-toggle="modal" type="button">查看細節</button>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal8" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header header2">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="eventdetailtwo">
                                                    <div class="eventDetail">
                                                        <img class="eventimg coverfit" src="/123/img/activity/experience-dinner01.jpg"></img>
                                                        <div class="eventText2">
                                                            <span class="h4chi eventTitle">尾牙春酒</span>
                                                            <span class="mintextchi eventBody">
                                                                尾牙是慰勞公司員工一整年辛苦工作的最佳時機，而春酒則是慶祝一年的豐收和新一年的到來，這兩項歡慶會對於公司來說是非常重要的日子，當然要好好慶祝囉！不但能讓一整年事業更加順利，也能讓員工為公司更加傾力。
                                                            </span>
                                                            <span class="mintextchi eventLocation locationRwd"> 地點:
                                                                Arcadia 活動聽</span>
                                                            <span class="mintextchi eventPeople">可容納人數: 20人/次</span>
                                                            <span class="mintextchi eventContact">細節請洽客服</span>
                                                        </div>
                                                    </div>
                                                    <div class="inputbox account bodytextchi">
                                                        <span class="bodytextchi">＊特殊需求留言：</span>
                                                        <div>
                                                            <input type="text" class="form-control" aria-label="creditcard" aria-describedby="basic-addon1">
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="OrangeBtn">送出</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="titleBox">
                                    <div class="activityLetter bodytextchi">H.</div>
                                    <div class="activityTitle bodytextchi">尾牙春酒</div>
                                </div>
                                <div class="priceBox">
                                    <div class="activityPrice bodytextchi">價格 </div>
                                    <span class="activity-priceTag bodytextchi">價格另計</span>
                                </div>
                                <div class="rwdSet"><select class="activityNum" name="" id="">
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
                                    </select>
                                    <button class="addBtn" href="">+ Add</button></div>
                            </div>

                        </div>
                    </div>
                </section>
            </div>
            <!-- 活動5 -->
            <div class="cardWrapper">
                <section>
                    <input type="checkbox" class="accordion__checkbox" id="accordion-heading-5">

                    <label class="accordion__heading h4chi" for="accordion-heading-5">5.婚宴規劃</label>

                    <div class="accordion__content">
                        <div class="activityCard">
                            <div class="activity" data-id="ac9">
                                <div class="activityimg"><img class="coverfit" src="/123/img/activity/experience-weading-propose01.jpg" alt="">
                                    <!-- Button trigger modal -->
                                    <button class="checkDetail bodytextchi" data-target="#exampleModal9" data-toggle="modal" type="button">查看細節</button>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal9" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header header2">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="eventdetailtwo">
                                                    <div class="eventDetail">
                                                        <img class="eventimg coverfit" src="/123/img/activity/experience-weading-propose01.jpg"></img>
                                                        <div class="eventText2">
                                                            <span class="h4chi eventTitle">求婚服務</span>
                                                            <span class="mintextchi eventBody">
                                                                特殊紀念日選擇來ARCADIA渡假嗎？生日慶生、紀念日、單身派對，都不用操心怎麼準備！我們提供優質有質感的佈置，針對您的派對有不同的選擇，幫您籌備派對流程，留下永生難忘的絕妙回憶。
                                                            </span>
                                                            <span class="mintextchi eventLocation locationRwd"> 地點:
                                                                客戶自選</span>
                                                            <span class="mintextchi eventPeople">可容納人數: 20人/次</span>
                                                            <span class="mintextchi eventContact">細節請洽客服</span>
                                                        </div>
                                                    </div>
                                                    <div class="inputbox account bodytextchi">
                                                        <span class="bodytextchi">＊特殊需求留言：</span>
                                                        <div>
                                                            <input type="text" class="form-control" aria-label="creditcard" aria-describedby="basic-addon1">
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="OrangeBtn">送出</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="titleBox">
                                    <div class="activityLetter bodytextchi">I.</div>
                                    <div class="activityTitle bodytextchi">求婚服務</div>
                                </div>
                                <div class="priceBox">
                                    <div class="activityPrice bodytextchi">價格 </div>
                                    <span class="activity-priceTag bodytextchi">價格另計</span>
                                </div>
                                <div class="rwdSet"><select class="activityNum" name="" id="">
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
                                    </select>
                                    <button class="addBtn" href="">+ Add</button></div>
                            </div>

                            <div class="activity" data-id="ac10 ">
                                <div class="activityimg"><img class="coverfit" src="/123/img/activity/experience-wedding-wedding.jpg" alt="">
                                    <!-- Button trigger modal -->
                                    <button class="checkDetail bodytextchi" data-target="#exampleModal10" data-toggle="modal" type="button">查看細節</button>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal10" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header header2">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="eventdetailtwo">
                                                    <div class="eventDetail">
                                                        <img class="eventimg coverfit" src="/123/img/activity/experience-wedding-wedding.jpg"></img>
                                                        <div class="eventText2">
                                                            <span class="h4chi eventTitle">婚宴服務</span>
                                                            <span class="mintextchi eventBody">
                                                                從小型溫馨婚禮到大型豪華婚宴，我們專業的規劃團隊服務幫忙打造一系列婚禮需求。享受夢幻渡假海島，讓親朋好友們參加一場永生難忘的婚宴。服務團隊確保活動大小環節都能符合您的期待，不論花藝裝飾、現場佈置或菜單設計；我們謹慎安排婚禮中各項重要元素，讓夢想婚禮完美綻放。
                                                            </span>
                                                            <span class="mintextchi eventLocation locationRwd"> 地點:
                                                                婚宴聽</span>
                                                            <span class="mintextchi eventPeople">可容納人數: 20人/次</span>
                                                            <span class="mintextchi eventContact">細節請洽客服</span>
                                                        </div>
                                                    </div>
                                                    <div class="inputbox account bodytextchi">
                                                        <span class="bodytextchi">＊特殊需求留言：</span>
                                                        <div>
                                                            <input type="text" class="form-control" aria-label="creditcard" aria-describedby="basic-addon1">
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="OrangeBtn">送出</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="titleBox">
                                    <div class="activityLetter bodytextchi">J.</div>
                                    <div class="activityTitle bodytextchi">婚宴服務</div>
                                </div>
                                <div class="priceBox">
                                    <div class="activityPrice bodytextchi">價格 </div>
                                    <span class="activity-priceTag bodytextchi">價格另計</span>
                                </div>
                                <div class="rwdSet"><select class="activityNum" name="" id="">
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
                                    </select>
                                    <button class="addBtn" href="">+ Add</button></div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>


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
                        <img class="coverfit" src="/123/img/activity/roomOverview-room3.jpg" alt="">
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
                        <span class="detail bodytextchi"><?= $_SESSION['order_rooms']['price'][$i] ?></span>
                    </div><br>
                <?php endfor; ?>






                <!----------------------------------- 住房明細 ------------------------------------>





                <span class="h4chi">客製選項</span><br>
                <div class="customization">


                    <!------------------- 活動明細 --------------------------------------->
                </div>


                <div class="line"></div>
                <div class="day">
                    <span class="h4chi">總計</span>
                    <span class="h4chi">$16,600</span>
                </div>

                <div class="inform">
                    <span class="detail1 warning bodytextchi">*此價格不包含客製服務與婚宴規劃</span><br>
                    <span class="detail1 warning bodytextchi">*此價格包含免費機場接駁車</span>
                </div>

            </div>
            <div class="confirm">
                <button class="confirmBtn h5eng">Confirm</button>
                <img src="/icon/Icon-arrow.svg" alt="">

            </div>
        </div>
    </div>
    <img src="/123/123/img/activity/experience-dinner01.jpg" alt="">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <!-- <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script> -->
    <script>
        const allactive = {
            ac1: {
                acname: 'A.浮潛潛水',
                acprice: 3500,
                acimg: '/123/img/activity/experience-sea-diving01.jpg',
            },
            ac2: {
                acname: '衝浪體驗',
                acprice: 1800,
                acimg: '/123/img/activity/experience-sea-surf01.jpg'
            },
            ac3: {
                acname: '生態探訪',
                acprice: 800,
                acimg: '/123/img/activity/experience-jungle-eco01.jpg'
            },
            ac4: {
                acname: '古蹟尋訪',
                acprice: 800,
                acimg: '/123/img/activity/experience-jungle- historic.jpg'
            },
            ac5: {
                acname: '薰香按摩',
                acprice: 2500,
                acimg: '/123/img/activity/activityexperience-lesson-massage01.jpg'
            },
            ac6: {
                acname: '紓壓瑜珈',
                acprice: 1800,
                acimg: '/123/img/activity/experience-lesson-yoga.jpg'
            },
            ac7: {
                acname: '派對規劃',
                acprice: 10000,
                acimg: '/123/img/activity/experience-party02.jpg'

            },
            ac8: {
                acname: '尾牙春酒',
                acprice: 10000,
                acimg: '/123/img/activity/experience-dinner01.jpg'

            },
            ac9: {
                acname: '求婚服務',
                acprice: '價格另計',
                acimg: '/123/img/activity/experience-weading-propose01.jpg'

            },
            ac10: {
                acname: '婚宴服務',
                acprice: '價格另計',
                acimg: '/123/img/activity/experience-wedding-wedding.jpg'
            },
        }


        $('.addBtn').on('click', function() {
            $row = $(this).closest(".activity");
            let title = $row.find(".activityTitle").text();
            let price = $row.find(".activity-priceTag").attr('data-val');
            let quantity = $row.find("select").val();


            let active_id = $row.attr('data-id');

            console.log(title);
            console.log(price);
            console.log(quantity);




            let html = `<div class="activity-unit" data-id="${active_id}">
        <div class="day">
        <span class="detail bodytextchi">${title}</span>
        <span class="detail bodytextchi times">${quantity}</span>
        <span class="detail bodytextchi actquantity">${parseInt(price) * parseInt(quantity)}</span>
        </div>
        
        <div style="width:40px;margin-left:auto"><a onClick="del_product_item() " href="#">刪除</a></div>
        </div>
        `;



            $('.customization').append(html);

        });

        function del_product_item() {
            $(event.target).parent().parent().remove();
        }
    </script>
    <script>
        const confirm_btn = $('.confirmBtn');

        confirm_btn.click(function() {
            const d_item = $(this).closest('.orderList');
            let active = d_item.find('.activity-unit');
            // let room_ids = [];

            const sendObj = {
                activetitle: [],
                activeimg: [],
                activetime: [],
                activequantity: [],
            }


            active.each(function() {
                const active_id = $(this).attr('data-id');
                console.log('data_id:', active_id);

                sendObj.activetitle.push(allactive[active_id].acname);
                sendObj.activeimg.push(allactive[active_id].acimg);
                sendObj.activetime.push($(this).find('.times').text());
                sendObj.activequantity.push($(this).find('.actquantity').text());
            });
            console.log(sendObj);




            $.get('_activity-api.php', sendObj, function(data) {
                console.log(data);
                // setCartCount(data);

                location.href = "_payment.php";
            }, 'json');

        });
    </script>
</body>

</html>