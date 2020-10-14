<style>
    /* booking bar */
    /* .bookingbar {
        max-width: 1000px;
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
    } */

    .wrapper1 {
        display: flex;
        justify-content: center;
    }

    /* order list */
    .order {
        margin: 30px 0 0 0;
        min-width: 320px;
        background: white;
        padding: 30px;
        box-shadow: hsla(0, 0%, 36%, 0.5)0 3px 6px;
    }

    .infoImg {
        width: 260px;
        height: 170px;
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

    .list-line {
        margin: 20px 0 20px 0;


    }

    .roomName {
        display: flex;
        justify-content: space-between;
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

    .dateCard {
        margin: 15px 10px 10px 0;

        height: 50px;
        background-color: #09839C;
        display: flex;
        justify-content: center;
        align-items: center;
        color: white;
    }

    .activitydetailone {
        background-color: #ffffff;
        min-height: 350px;
        max-width: 650px;
        display: flex;
        align-items: center;
        box-shadow: hsla(0, 0%, 36%, 0.5)0 3px 6px;
        margin: 30px 30px 0 0;
    }

    .buy-button {
        background-color: white;
        border: 2px solid #EB9851;
        color: #EB9851;
        width: 240px;
        height: 42px;
        font-size: 16px;
        font-weight: bold;
    }

    @media screen and (max-width: 375px) {
        .container1 {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
        }

        .activitydetailone {
            margin: 20px 0 0 0;
        }

        .line {
            margin: 20px 0 20px 0;
        }

        .order {
            width: 375px;
        }

        .inform {
            margin: 30px 0 0 0;
        }

        .confirm {
            width: 375px;
        }


    }



    .activityImg {
        min-width: 300px;
        height: 350px;
        background: blue;
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

    .coverfit {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .bookCard {
        display: flex;
        width: 300px;
            height: 95px;
            overflow-x: scroll;
            overflow-y: hidden;
    }

    .cardTitle {

        color: #5D5D5D;

    }

    .infoBox {
        display: flex;
        flex-direction: column;
        margin: 0 50px 0 39px;
    }

    .rwdSet {
        display: none;
    }

    .infoText {

        color: #5D5D5D;
        font-weight: bold;
    }

    .selectNum {
        height: 30px;
        width: 70px;
        border: 1px solid #09839C;
    }

    .selectBox {


        align-items: center;
        margin: 10px 0 10px 0;
    }

    .price {
        margin: 10px 0 10px 0;
    }

    .priceTag {
        color: #EB9851;
        margin: 0 0 0 10px;
    }

    .checklist {
        background: red;
    }

    .confirmBtn {
        border: none;
        background: transparent;

    }

    @media screen and (max-width: 375px) {
        .price {
            margin: 10px 0 20px 0;
        }

        .price span {
            font-size: 18px;
        }

        .bookCard {
            justify-content: space-between;

        }

        .infoText {
            font-size: 14px;
        }

        .dateCard {
            width: 65px;
            height: 65px;
        }

        .cardTitle {
            font-size: 20px;
            margin: 20px 0 10px 0;
        }

        .infoBox {
            margin: 0 10px 0 20px;
        }

        .rwdSet {
            display: flex;
        }

        .addBtn {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 0 0 10px;
            width: 110px;
            height: 40px;
            border: 2px solid #EB9851;

        }

        .activityNum {
            border: 1.5px solid #09839C;
            color: #09839C;
            background-color: white;
            width: 220px;
            height: 40px;
        }

        .selectRoom {
            display: none;

        }

        .bookingbar {
            display: none;
        }

    }

    /* room detail popup */
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

    .eventimg {
        width: 300px;
        height: 300px;
    }

    .eventText {
        display: flex;
        flex-direction: column;
        padding: 20px 20px 20px 30px;
        width: 400px;
    }

    .eventTitle {
        color: #5D5D5D;
    }

    .detailFlex {
        display: flex;
        margin-top: 15px;
    }

    .facDetail1 {
        margin: 0 0 0 10px;
    }

    .facDetail2 {
        margin: 0 0 0 70px;
    }

    .iconSpace {
        margin-right: 10px;
    }

    .eventDetail {
        display: flex;
    }

    .eventBody {
        color: #5D5D5D;
        margin-bottom: 10px;
    }

    .mintextchi {
        color: #5D5D5D;
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

        .facDetail1 {
            margin: 0 0 0 30px;
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
            height: 270px;
            margin: unset;
            padding: 30px 20px 30px 20px;
        }

    }
    /* booking bar */
    .bookingbar {
                    max-width: 1000px;
                    height: 150px;
                    background-color: #5D5D5D;
                    align-items: center;
                    justify-content: center;
                    display: flex;
                    margin: 50px auto;
                    box-shadow: 1px 2px 10px -2px rgba(0, 0, 0, 0.3);

                }

                .checkindate {

                    flex-direction: column;
                    color: #FFFFFF;
                    margin: 0px 0px 50px 0;
                    /* font-weight: bold; */
                    width: 250px;
                    height: 38px;
                    z-index: 100;
                }

                .checkoutdate {
                    flex-direction: column;
                    color: #FFFFFF;
                    margin: 0px 0px 50px 0;
                    /* font-weight: bold; */
                    width: 250px;
                    height: 38px;
                }

                .reservation {

                    flex-direction: column;
                    margin: 0px 0px 50px 0;
                    color: #FFFFFF;
                    width: 200px;
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
                
                }

                .booking a {
                    color: white;
                }

                /* ---date picker--- */
                .date-picker {
        width: 200px;
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
          width: 160px;
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
          
          width: 160px;
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
          width: 160px;
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
            height: 500px;
            width: 375px;
            align-items: center;
          }
          .checkindate{
            margin:0 0 50px 0;
            width: 270px;
            z-index: 300;
          }
          .checkoutdate{
            margin:0 0 50px 0;
            width: 270px;
            z-index: 100;
          }
          .date-picker{
              width: unset;
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







<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
















<!-- date picker  -->
<div class="bookingbar">
                <div class="checkindate">
                    <span class="bodytextchi">入住日期</span>

                    <div class="date-picker">
                        <div class="input">
                            <div class="result bodytextchi"><span id="checkindate"><?= $_SESSION['checkindate'] ?></span></div>
                            <button><i class="fa fa-calendar"></i></button>
                        </div>
                        <div class="calendar"></div>
                    </div>
                </div>

                <div class="checkoutdate">
                    <span class="bodytextchi">退房日期</span>
                    <div class="date-picker">
                        <div class="input">
                            <div class="result bodytextchi"><span id="checkoutdate"><?= $_SESSION['checkoutdate'] ?></span></div>
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
          <option value="<?= $_SESSION['persons'] ?>"><?= $_SESSION['persons'] ?></option>
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
                    <button class=" d-flex h5chi booking" href="" id="buy-button">更改條件</button>
                </div>

            </div>

<div class="wrapper1 container1">


    <!--  room1 -->
    <div class="roomList container1">
        <div class="activitydetailone container1" data-id="a1">
            <div class="activityImg">
                <img src="/123/img/book/roomOverview-room1.jpg" alt="" class="coverfit">
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
                                    <img class="eventimg coverfit" src="/123/img/book/roomOverview-room1.jpg"></img>
                                    <div class="eventText">
                                        <span class="h4chi eventTitle">海景雙人別墅</span>
                                        <span class="mintextchi eventBody">
                                            明亮熱情橘色系，峇里島風情無限延伸至起居空間中，室內樑柱以厚實櫸木打造，坐擁優雅而自然的空間氛圍，浴室採落地窗設計，引入全綠意戶外庭園景緻。
                                        </span>
                                        <div class="detailFlex">
                                            <div class="mintextchi facDetail1"><img class="iconSpace" src="/Arcadia/suite-order/icon/double-bed.svg" alt="">雙人床</div>
                                            <div class="mintextchi facDetail2"><img class="iconSpace" src="/Arcadia/suite-order/icon/measured.svg" alt="">21坪</div>
                                        </div>
                                        <div class="detailFlex">
                                            <div class="mintextchi facDetail1"><img class="iconSpace" src="/Arcadia/suite-order/icon/user (2).svg" alt="">容納2人</div>
                                            <div class="mintextchi facDetail2"><img class="iconSpace" src="/Arcadia/suite-order/icon/swimming-pool.svg" alt="">獨立游泳池</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="infoBox">
                <span class="cardTitle h5chi">海景雙人別墅</span>
                <div class="bookCard" style="display: flex;">
                    <?php foreach ($_SESSION['days'] as $d) : ?>
                        <div class="dateCard"><?= $d ?></div>
                    <?php endforeach; ?>


                    <!-- <div class="dateCard">8/6</div>
                    <div class="dateCard">8/7</div>
                    <div class="dateCard">8/8</div><br> -->
                    <!-- </div>

                <div class="bookCard"> -->
                    <!-- <div class="dateCard">8/9</div>
                    <div class="dateCard">8/10</div>
                    <div class="dateCard">8/11</div>
                    <div class="dateCard">8/12</div> -->
                </div>
                <!-- <script>
                     $('.buy-button').on('click', function() { })
                </script> -->

                <span class="bodytextchi infoText"> 可容納人數 2人</span>
                <div class="selectBox container1">
                    <div class="selectRoom">

                        <span class="bodytextchi infoText">房數</span><br>
                        <select class="selectNum" name="" id="">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                    <div class="price">
                        <span class="bodytextchi">價格/晚</span>
                        <span class="priceTag bodytextchi" data-val="25000">$25,000</span>
                    </div>
                    <div class="rwdSet">
                        <select name="" id="" class="activityNum">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>

                    </div>
                </div><button class="buy-button">+Add</button>
            </div>



        </div>

        <!--  room2 -->
        <div class="activitydetailone container1" data-id="a2">
            <div class="activityImg">
                <img src="/123/img/book/roomOverview-room2.jpg" alt="" class="coverfit">
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
                                    <img class="eventimg coverfit" src="/123/img/book/roomOverview-room2.jpg"></img>
                                    <div class="eventText">
                                        <span class="h4chi eventTitle">沙灘雙人別墅</span>
                                        <span class="mintextchi eventBody">
                                            雙人山景房有絕佳的觀景位置，巧妙地以桌椅擺設區隔客廳休憩與床的空間，奢侈地享受的慢時間，感受Arcadia的能量與大地的寵愛。
                                        </span>
                                        <div class="detailFlex">
                                            <div class="mintextchi facDetail1"><img class="iconSpace" src="/Arcadia/suite-order/icon/double-bed.svg" alt="">雙人床</div>
                                            <div class="mintextchi facDetail2"><img class="iconSpace" src="/Arcadia/suite-order/icon/measured.svg" alt="">21坪</div>
                                        </div>
                                        <div class="detailFlex">
                                            <div class="mintextchi facDetail1"><img class="iconSpace" src="/Arcadia/suite-order/icon/user (2).svg" alt="">容納2人</div>
                                            <div class="mintextchi facDetail2"><img class="iconSpace" src="/Arcadia/suite-order/icon/swimming-pool.svg" alt="">獨立游泳池</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="infoBox">
                <span class="cardTitle h5chi">沙灘雙人別墅</span>
                <div class="bookCard" style="display: flex;">
                    <?php foreach ($_SESSION['days'] as $d) : ?>
                        <div class="dateCard"><?= $d ?></div>
                    <?php endforeach; ?>


                    <!-- <div class="dateCard">8/6</div>
                    <div class="dateCard">8/7</div>
                    <div class="dateCard">8/8</div><br> -->
                    <!-- </div>

                <div class="bookCard"> -->
                    <!-- <div class="dateCard">8/9</div>
                    <div class="dateCard">8/10</div>
                    <div class="dateCard">8/11</div>
                    <div class="dateCard">8/12</div> -->
                </div>
                <!-- <script>
                     $('.buy-button').on('click', function() { })
                </script> -->

                <span class="bodytextchi infoText"> 可容納人數 2人</span>
                <div class="selectBox container1">
                    <div class="selectRoom">

                        <span class="bodytextchi infoText">房數</span><br>
                        <select class="selectNum" name="" id="">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                    <div class="price">
                        <span class="bodytextchi">價格/晚</span>
                        <span class="priceTag bodytextchi" data-val="28000">$28,000</span>
                    </div>
                    <div class="rwdSet">
                        <select name="" id="" class="activityNum">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>

                    </div>
                </div><button class="buy-button">+Add</button>
            </div>

        </div>
        <!-- room3 -->
        <div class="activitydetailone container1" data-id="a3">
            <div class="activityImg">
                <img src="/123/img/book/roomOverview-room3.jpg" alt="" class="coverfit">
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
                                    <img class="eventimg coverfit" src="/123/img/book/roomOverview-room3.jpg"></img>
                                    <div class="eventText">
                                        <span class="h4chi eventTitle">海景四人別墅</span>
                                        <span class="mintextchi eventBody">
                                            四人豪華房的別墅是小家庭的首選，內裝典雅，盡顯尊榮品味！以棕綠色為主軸，搭配南洋風的牆面設計，大片落地窗灑進的柔和陽光，讓低調的優雅華麗層次豐富。
                                        </span>
                                        <div class="detailFlex">
                                            <div class="mintextchi facDetail1"><img class="iconSpace" src="/Arcadia/suite-order/icon/double-bed.svg" alt="">雙人床</div>
                                            <div class="mintextchi facDetail2"><img class="iconSpace" src="/Arcadia/suite-order/icon/measured.svg" alt="">72坪</div>
                                        </div>
                                        <div class="detailFlex">
                                            <div class="mintextchi facDetail1"><img class="iconSpace" src="/Arcadia/suite-order/icon/user (2).svg" alt="">容納4人</div>
                                            <div class="mintextchi facDetail2"><img class="iconSpace" src="/Arcadia/suite-order/icon/swimming-pool.svg" alt="">獨立游泳池</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="infoBox">
                <span class="cardTitle h5chi">海景四人別墅</span>
                <div class="bookCard" style="display: flex;">
                    <?php foreach ($_SESSION['days'] as $d) : ?>
                        <div class="dateCard"><?= $d ?></div>
                    <?php endforeach; ?>


                    <!-- <div class="dateCard">8/6</div>
                    <div class="dateCard">8/7</div>
                    <div class="dateCard">8/8</div><br> -->
                    <!-- </div>

                <div class="bookCard"> -->
                    <!-- <div class="dateCard">8/9</div>
                    <div class="dateCard">8/10</div>
                    <div class="dateCard">8/11</div>
                    <div class="dateCard">8/12</div> -->
                </div>

                <span class="bodytextchi infoText"> 可容納人數 4人</span>
                <div class="selectBox container1">
                    <div class="selectRoom">

                        <span class="bodytextchi infoText">房數</span><br>
                        <select class="selectNum" name="" id="">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                    <div class="price">
                        <span class="bodytextchi">價格/晚</span>
                        <span class="priceTag bodytextchi" data-val="35000">$35,000</span>
                    </div>
                    <div class="rwdSet">
                        <select name="" id="" class="activityNum">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>

                    </div>
                </div><button class="buy-button">+Add</button>
            </div>

        </div>
        <!-- room4 -->
        <div class="activitydetailone container1" data-id="a4">
            <div class="activityImg">
                <img src="/123/img/book/roomOverview-room4.jpg" alt="" class="coverfit">
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
                                    <img class="eventimg coverfit" src="/123/img/book/roomOverview-room4.jpg"></img>
                                    <div class="eventText">
                                        <span class="h4chi eventTitle">沙灘家庭別墅</span>
                                        <span class="mintextchi eventBody">
                                            六人獨棟Villa的別墅擁有各房型優勢盡佔的寬廣空間，具備挑高閣樓、獨立雙人房，開放客廳與木板床，可臥可坐，讓您與家人的假期拋開框架不受限！富趣味的生態環境希冀讓每一到訪的家庭，都能遠離塵囂，實際感受出遊的舒適與寧靜。
                                        </span>
                                        <div class="detailFlex">
                                            <div class="mintextchi facDetail1"><img class="iconSpace" src="/Arcadia/suite-order/icon/double-bed.svg" alt="">雙人床</div>
                                            <div class="mintextchi facDetail2"><img class="iconSpace" src="/Arcadia/suite-order/icon/measured.svg" alt="">80坪</div>
                                        </div>
                                        <div class="detailFlex">
                                            <div class="mintextchi facDetail1"><img class="iconSpace" src="/Arcadia/suite-order/icon/user (2).svg" alt="">容納6人</div>
                                            <div class="mintextchi facDetail2"><img class="iconSpace" src="/Arcadia/suite-order/icon/swimming-pool.svg" alt="">獨立游泳池</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="infoBox">
                <span class="cardTitle h5chi">沙灘家庭別墅</span>
                <div class="bookCard" style="display: flex;">
                    <?php foreach ($_SESSION['days'] as $d) : ?>
                        <div class="dateCard"><?= $d ?></div>
                    <?php endforeach; ?>

                    <!-- <div class="dateCard">8/6</div>
                    <div class="dateCard">8/7</div>
                    <div class="dateCard">8/8</div><br> -->
                    <!-- </div>

                <div class="bookCard"> -->
                    <!-- <div class="dateCard">8/9</div>
                    <div class="dateCard">8/10</div>
                    <div class="dateCard">8/11</div>
                    <div class="dateCard">8/12</div> -->
                </div>

                <span class="bodytextchi infoText"> 可容納人數 6人</span>
                <div class="selectBox container1">
                    <div class="selectRoom">

                        <span class="bodytextchi infoText">房數</span><br>
                        <select class="selectNum" name="" id="">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                    <div class="price">
                        <span class="bodytextchi">價格/晚</span>
                        <span class="priceTag bodytextchi" data-val="80000">$80,000</span>
                    </div>
                    <div class="rwdSet">
                        <select name="" id="" class="activityNum">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>

                    </div>
                </div><button class="buy-button">+Add</button>
            </div>

        </div>

    </div>
    <div class="checkorder">
        <div class="order">

            <!-- <span class="myorderlist h4chi">訂單明細</span><br>
            <div class="line"></div> -->
            <div class="order1"><span class="myorderlist h4chi">訂單明細</span><br>
                <div class="line"></div>
            </div>


        </div>
        <div class="confirm">
            <button href="" class="confirmBtn h5eng">Confirm</button>
            <img src="/Arcadia/icon/arrow.svg" alt="">

        </div>


        <img src="./123/img/book/" alt="">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
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

    
        <script>
            const allRooms = {
                a1: {
                    title: '海景雙人別墅',
                    contain: 2,
                    price: 23000,
                    roomimg: '/123/img/book/roomOverview-room1.jpg',
                },
                a2: {
                    title: '沙灘雙人別墅',
                    contain: 2,
                    price: 28000,
                    roomimg: '/123/img/book/roomOverview-room1.jpg'
                },
                a3: {
                    title: '海景四人別墅',
                    contain: 4,
                    price: 35000,
                    roomimg: '/123/img/book/roomOverview-room1.jpg'
                },
                a4: {
                    title: '沙灘家庭別墅',
                    contain: 6,
                    price: 80000,
                    roomimg: '/123/img/book/roomOverview-room1.jpg'
                },
            }



            $('.buy-button').on('click', function() {
                $row = $(this).closest(".activitydetailone");
                let title = $row.find(".cardTitle").text();
                let price = $row.find(".priceTag").attr('data-val');
                let quantity = $row.find("select").val();
                let imgsrc = $row.find("img").attr('src');
                let duration =  $('.bookCard').eq(0).find('.dateCard').length;
                let room_id = $row.attr('data-id');

                console.log(duration);
                let html =  `
                <div class="order-unit" data-id="${room_id}">
                <div class="roomName">
                    <span class="suitetitle h5chi">${title}</span>
                </div><br>
                <div class="infoImg">
                    <img class="coverfit roomPic" src="${imgsrc}" alt="">
                </div>
                <div class="day">
                    <span class="checkin detail bodytextchi">入住日期</span>
                    <span class="detail bodytextchi"><?= $_SESSION['checkindate'] ?></span>
                </div>
                <div class="day">
                    <span class=" checkout detail bodytextchi">退房日期</span>
                    <span class="detail bodytextchi"><?= $_SESSION['checkoutdate'] ?></span>
                </div>
                <div class="day">
                    <span class="roomNum detail bodytextchi">入住房數</span>
                    <span class="quantity detail bodytextchi ">${quantity}</span>
                </div>
                <div class="day">
                    <span class="roomNum detail bodytextchi">入住天數</span>
                    <span class="duration detail bodytextchi ">${duration}</span>
                </div>
                <div class="day">
                    <span class="guest detail bodytextchi">入住人數</span>
                    <span class="detail bodytextchi"><?= $_SESSION['persons'] ?></span>
                </div>
                <div class="day">
                    <span class="expense detail bodytextchi">價格</span>
                    <span class="priceTag detail bodytextchi ">${price}</span>
                </div><br>
                 
                <div style="width:40px;margin-left:auto"><a onClick="del_product_item() " href="#">刪除</a></div>
                <div class="line"></div>
            <div class="day">
                <span class="totalPrice h4chi">總計</span>
                <span class="summary h4chi">${parseInt(price) * parseInt(quantity) * parseInt(duration)}</span>


            </div>
            </div>
            </div>`;




                $('.order1').append(html);

            });

            function del_product_item() {
                $(event.target).parent().parent().remove();

                // $(".order1").remove();
            }

            function orderList() {
                orderList = [];
                $(".order1>div").each(function() {
                    orderList.push({
                        startDate: ".suitetitle",
                    })
                    // console.log($(this).find(".bodytextchi").text())

                    console.log($(this).find(".suitetitle").text())
                    console.log($(this).find("img").attr('src'))

                    console.log($(this).find("#checkindate").text())

                    console.log($(this).find("#checkoutdate").text())

                    console.log($(this).find("#quantity").text())

                    console.log($(this).find("#persons").text())

                    console.log($(this).find(".priceTag").text())

                    console.log($(this).find(".summary").text())


                })
            }
        </script>
        <script>
            // 更改條件
const buy_btns = $('#buy-button');

buy_btns.click(function() {
const p_item = $(this).closest('.bookingbar');
// const checkindate = p_item.attr('data-sid');
const checkindate = p_item.find('#checkindate').text();
const checkoutdate = p_item.find('#checkoutdate').text();
  const persons = p_item.find('select-box__input').val();


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
    location.href = location.href;
}, 'json');
});
            const confirm_btn = $('.confirmBtn');

            confirm_btn.click(function() {
                const c_item = $(this).closest('.checkorder');
                let rooms = c_item.find('.order-unit');
                let duration =  $('.bookCard').eq(0).find('.dateCard').length;
                let summary = c_item.find(".summary").text();


                const sendObj = {
                    suitetitle: [],
                    price: [],
                    quantity: [],
                    duration:[],
                    summary:[],
                    roomimg: []
                }
                rooms.each(function() {
                    const room_id = $(this).attr('data-id');
                    console.log('room_id:', room_id);

                    sendObj.suitetitle.push(allRooms[room_id].title);
                    sendObj.price.push(allRooms[room_id].price);
                    sendObj.roomimg.push(allRooms[room_id].roomimg);
                    sendObj.quantity.push($(this).find('.quantity').text());
                    sendObj.duration.push($(this).find('.dateCard').length);
                    sendObj.summary.push($(this).find('.summary').text());

                });
                console.log('---');




                $.get('_roombooking-api.php', sendObj, function(data) {
                    console.log(data);

                    location.href = "_activity.php";
                }, 'json');

            });
        </script>
    </div>
</div>




<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

</body>

</html>