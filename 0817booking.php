<?php
session_start();
?>


<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>

<body>
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
    }  */

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
            margin: 0px 0px 34px 0;
            /* font-weight: bold; */
            width: 320px;
            height: 38px;
        }

        .checkoutdate {
            flex-direction: column;
            color: #FFFFFF;
            margin: 0px 0px 34px 0;
            /* font-weight: bold; */
            width: 320px;
            height: 38px;
        }

        .reservation {

            flex-direction: column;
            margin: 0px 0px 34px 0;
            color: #FFFFFF;
            width: 245px;
            height: 38px;
        }

        .booking {
            z-index: 0;
            width: 245px;
            height: 38px;
            margin: 0;
        }

        .booking {
            background: #EB9851;
            width: 133px;
            height: 42px;
            justify-content: center;
            align-items: center;
            font-weight: bold;
            font-family: 'Crimson Text', serif;
            font-size: 15px;
            margin-top: 20px;

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
            padding: 0 10px;
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

        /* ---select box--- */
        /* html,
              body {
                min-height: 100%;
                margin: 0;
              } */

        /* body {
                padding: 30px;
                background-image: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
                box-sizing: border-box;
              } */

        .select-box {
            position: relative;
            display: block;
            width: 100%;
            width: 270px;
            height: 42px;
            padding: 0;
            align-items: center;
            font-family: 'Crimson Text', serif;
            font-size: 16px;
            color: #60666d;
        }

        @media (min-width: 768px) {
            .select-box {
                width: 70%;
            }
        }

        @media (min-width: 992px) {
            .select-box {
                width: 50%;
            }
        }

        @media (min-width: 1200px) {
            .select-box {
                width: 180px;
                height: 42px;
            }
        }

        .select-box__current {
            position: relative;
            box-shadow: 0 15px 30px -10px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            outline: none;
        }

        .select-box__current:focus+.select-box__list {
            opacity: 1;
            -webkit-animation-name: none;
            animation-name: none;
        }

        .select-box__current:focus+.select-box__list .select-box__option {
            cursor: pointer;
        }

        .select-box__current:focus .select-box__icon {
            -webkit-transform: translateY(-50%) rotate(180deg);
            transform: translateY(-50%) rotate(180deg);
        }

        .select-box__icon {
            position: absolute;
            top: 50%;
            right: 15px;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            width: 16px;
            /* opacity: 0.3; */
            -webkit-transition: 0.2s ease;
            transition: 0.2s ease;
        }

        .select-box__value {
            display: -webkit-box;
            display: flex;
        }

        .select-box__input {
            display: none;
        }

        .select-box__input:checked+.select-box__input-text {
            display: block;
        }

        .select-box__input-text {
            display: none;
            width: 100%;
            margin: 0;
            padding: 9px;
            background-color: #fff;
        }

        .select-box__list {
            position: absolute;
            width: 100%;
            padding: 0;
            list-style: none;
            opacity: 0;
            -webkit-animation-name: HideList;
            animation-name: HideList;
            -webkit-animation-duration: 0.5s;
            animation-duration: 0.5s;
            -webkit-animation-delay: 0.5s;
            animation-delay: 0.5s;
            -webkit-animation-fill-mode: forwards;
            animation-fill-mode: forwards;
            -webkit-animation-timing-function: step-start;
            animation-timing-function: step-start;
            /* box-shadow: 0 15px 30px -10px rgba(0, 0, 0, 0.1); */
        }

        .select-box__option {
            display: block;
            padding: 9px;
            margin: 0;
            background-color: #fff;
        }

        .select-box__option:hover,
        .select-box__option:focus {
            color: #EB9851;
            background-color: #eee;
        }

        @-webkit-keyframes HideList {
            from {
                -webkit-transform: scaleY(1);
                transform: scaleY(1);
            }

            to {
                -webkit-transform: scaleY(0);
                transform: scaleY(0);
            }
        }

        @keyframes HideList {
            from {
                -webkit-transform: scaleY(1);
                transform: scaleY(1);
            }

            to {
                -webkit-transform: scaleY(0);
                transform: scaleY(0);
            }
        }
    </style>







    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
















    <!-- booking bar -->
    <div class="bookingbar">
        <div class="checkindate" style="margin: 0 0 124px 0;">
            <span class="bodytextchi">入住日期</span>

            <div class="date-picker" style="margin: 0 0 124px 0;">
                <div class="input">
                    <div class="result bodytexteng "><span id="checkindate">Checkin Date: </span></div>
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
                    <button><i class="fa fa-calendar "></i></button>
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
                        <input class="select-box__input " type="radio" id="0" value="1" name="Ben" checked="checked" />
                        <p class="select-box__input-text"><?= $_SESSION['persons'] ?></p>
                    </div>
                    <div class="select-box__value">
                        <input class="select-box__input " type="radio" id="0" value="1" name="Ben" checked="checked" />
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
                    </div><img class="select-box__icon" src="/icon/angle-down-solid.svg" alt="Arrow Icon" aria-hidden="true" />
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

        <div class=" d-flex booking " style="margin: 0 0 98px 0;">
            <button class=" d-flex bodytexteng " href="" id="buy-button">Booking</button>
        </div>

    </div>
    <!-- <div class="bookingbar">
    <div class="checkindate">
        <span class="bodytextchi">入住日期</span>
        <input type="date" id="checkinDate" name="" value="<?= $_SESSION['checkindate'] ?>">


    </div>
    <div class="checkoutdate">
        <span class="bodytextchi">退房日期</span>
        <input type="date" id="checkoutDate" name="" value="<?= $_SESSION['checkoutdate'] ?>">
    </div>
    



    <div class="reservation">
        <span class="bodytextchi">預約人數</span>
        <select class="selectNum" name=""  value="<?= $_SESSION['persons'] ?>">
            <option value="<?= $_SESSION['persons'] ?>"><?= $_SESSION['persons'] ?></option>
            <option value="2">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
    </div>
   

    <div class=" d-flex booking">
        <button class="filter d-flex bodytexteng" href="">更改條件</button>
    </div>
</div> -->
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

                <div class="day">
                <span class="totalPrice h4chi">總計</span>
                <span class="summary h4chi" id="summary"> </span>
                

            </div>
            </div>
            
            <div class="confirm">
                <button href="" class="confirmBtn h5eng">Confirm</button>
                <img src="/Arcadia/icon/arrow.svg" alt="">

            </div>


            <img src="./123/img/book/" alt="">
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>


            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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
            <script>
                const allRooms = {
                    a1: {
                        title: '海景雙人別墅',
                        contain: 2,
                        price: 25000,
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

                    let room_id = $row.attr('data-id');


                    let html = `
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
                    <span class="guest detail bodytextchi">入住人數</span>
                    <span class="detail bodytextchi"><?= $_SESSION['persons'] ?></span>
                </div>
                <div class="day">
                    <span class="expense detail bodytextchi">價格</span>
                    <span class="priceTag detail bodytextchi" id="priceTag">${parseInt(price) * parseInt(quantity)}</span>
                </div><br>
                 
                <div style="width:40px;margin-left:auto"><a onClick="del_product_item() " href="#">刪除</a></div>
                <div class="line"></div>
           
            </div>
            </div>`;

                    


                    $('.order1').append(html);

                    calTotal();
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
            <!-- <script>
                const roomtoatal = document.getElementsByID("priceTag");
                const roomtoatal = roomtoatal.value;
                console.log(roomtoatal)

             
            </script> -->

            <script>
                const confirm_btn = $('.confirmBtn');

                confirm_btn.click(function() {
                    const c_item = $(this).closest('.checkorder');
                    let rooms = c_item.find('.order-unit');


                    const sendObj = {
                        suitetitle: [],
                        price: [],
                        quantity: [],
                        roomimg: []
                    }
                    rooms.each(function() {
                        const room_id = $(this).attr('data-id');
                        console.log('room_id:', room_id);

                        sendObj.suitetitle.push(allRooms[room_id].title);
                        sendObj.price.push(allRooms[room_id].price);
                        sendObj.roomimg.push(allRooms[room_id].roomimg);
                        sendObj.quantity.push($(this).find('.quantity').text());

                    });
                    console.log('---');




                    $.get('roombooking-api.php', sendObj, function(data) {
                        console.log(data);

                        location.href = "activity.php";
                    }, 'json');

                });
                function calTotal(){
                    let rooms = $('.checkorder .order-unit');
                    let total = 0;
                    rooms.each(function() {
                        const room_id = $(this).attr('data-id');
                        console.log('room_id:', room_id);

                        total += allRooms[room_id].price * $(this).find('.quantity').text();

                    });
                    console.log(total);
                    //let totalroom = write(total);
                    $('#summary').text(total);
                }
            </script>
        </div>
    </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

</body>

</html>