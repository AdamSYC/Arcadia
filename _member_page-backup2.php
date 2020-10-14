<style>
    .mbody {
        background-color: #EEEEEE;
        width: 100vw;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }


    .breadcrumb {
        /* max-width: 100vw;
        min-width: 70vw;
        align-items: center;
        padding: 0;
        margin-right: 1rem; */

        color: #747474;
        margin-top: 250px;
        background: transparent;
        padding-left: 0px;
    }

    .memberFlexStart{
        display: flex;
        flex-direction: column;
        justify-content: start;
        max-width: 1344px;
        align-self: end;
        margin-left: 290px;
    }

    .whiteWindow {
        margin: 30px 0;
        max-width: 1000px;
        min-width: 70vw;
        background: #ffffff;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        padding: 50px;
    }

    form {
        width: 500px;
    }


    .windowTitle {
        max-width: 100vh;
        /* background-color: black; */
        color: #09839C;
        display: flex;
        justify-content: flex-start;
    }

    .inputbox {
        width: 100%;
        margin-top: 10px;
        display: flex;
        flex-direction: column;
        color: #5D5D5D;
    }



    .photo {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        background-color: #EEEEEE;
        margin: 0 0 30px 0;
    }

    .memberEmail {
        color: #09839C;


    }

    .connectBox {
        display: flex;
        flex-direction: column;
        border: 1px solid #ced4da;
        border-radius: .25rem;
        padding: .375rem .75rem;

    }

    .connectButton {
        width: 100%;
        height: 50px;
        border: #09839C 1px solid;
        margin: 5px 0;
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

    }

    .flexbox {
        width: 32px;
        height: 32px;
        background-color: #fff;
    }

    .creditCardBox {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .creditCard {
        width: 240px;
        height: 144px;
        border: 1px solid #ced4da;
        border-radius: .25rem;
        margin: 5px;
        display: flex;
        flex-direction: column;
        padding: 1rem 20px;
        position: relative;
    }

    .creditCard:hover {
        box-shadow: 0 0 10px 0px rgba(0, 0, 0, 0.35);
    }

    .creditCard img {
        width: 30px;
    }

    .deleteCard {
        position: absolute;
        bottom: 1rem;
        right: 1rem;
        color: #cfcfcf;
    }

    .deleteCard:hover {
        color: red;
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

    .addCreditcard:hover {
        box-shadow: 0 0 10px 0px rgba(0, 0, 0, 0.35);
    }

    .addCreditcard img {
        width: 20px;
        margin-right: 10px;
    }

    .Smallbutton {
        width: 100%;
    }

    /* 2020/08/11 新增大頭貼和文字框錯誤時顯示紅字 */
    .form-group small {
        color: red;
    }

    .AlignPhoto {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }

    .coverfit {
        width: 100%;
        height: 100%;
    }

    .chooseFile {
        width: 240px;
    }

    .LinkColor{
        color: #747474;
    }

    @media screen and (max-width: 375px) {
        .whiteWindow {
            width: 100%;
            padding: 2rem;
            margin-bottom: 30px;
        }

        .windowTitle {
            width: 100%;
        }

        .connectBox,
        .creditCardBox {
            display: flex;
            flex-direction: column;
        }

        form {
            width: 311px;
        }

        .Smallbutton {
            width: 100%;
        }
    }

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
        margin: 2rem;
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
        background-color: white;
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

<div class="mbody">
 <div class="memberFlexStart">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item bodytextchi"><a class="LinkColor" href="#">首頁</a></li>
            <li class="breadcrumb-item bodytextchi"><a class="LinkColor" href="#">會員中心</a></li>
            <li class="breadcrumb-item active bodytextchi" aria-current="page">會員資訊</li>
        </ol>
    </nav>

    <div class="windowTitle h4chi">
        <span>會員資訊</span>
    </div>
    </div>
    <div class="whiteWindow">
        <!-- 新增頭貼功能 -->
        <div class="AlignPhoto">
            <div class="photo">
                <img class="coverfit img" src="" alt="">
            </div>
            <input class="chooseFile bodytextchi" type="file" onchange="previewFile()">
        </div>
        <!-- 新增頭貼功能 -->

        <form name="form_member" method="post" novalidate>
            <div class="inputbox memberemail">
                <span class="bodytextchi">會員帳號</span>
                <!-- <span class="memberEmail bodytexteng">OOO@gmail.com</span> -->
                <input type="text" class="memberEmail form-control bodytexteng" value="<?= $r['email'] ?>" disabled></input>
            </div>

            <div class="inputbox bodytextchi passportname form-group">
                <span for="lastname">護照姓名</span>
                <div class="form-row">
                    <div class="col">
                        <!-- <input type="text" class="form-control bodytextchi" placeholder="姓氏"> -->
                        <input type="text" class="form-control bodytextchi" id="member-lastname" name="lastname" value="<?= $r['lastname'] ?>">
                        <small id="lastnameHelp" class="form-text"></small>
                    </div>
                    <div class="col">
                        <!-- <input type="text" class="form-control bodytextchi" placeholder="名字"> -->
                        <input type="text" class="form-control bodytextchi" id="member-name" name="name" placeholder="名字" value="<?= $r['name'] ?>">
                        <small id="nameHelp" class="form-text"></small>
                    </div>
                </div>
            </div>

            <div class="inputbox birthday bodytextchi form-group">
                <span for="birth">生日</span>
                <!-- <input type="date" class="form-control  bodytextchi"> -->
                <input type="date" class="form-control  bodytextchi" id="birth" name="birth" value="<?= $r['birth'] ?>">
            </div>

            <div class="inputbox country bodytextchi form-group">
                <span for="country">國家</span>
                <!-- <input type="text" class="form-control bodytextchi" placeholder="請輸入您的國家"> -->
                <input type="text" class="form-control bodytextchi" placeholder="請輸入您的國家" id="country" name="country" value="<?= $r['country'] ?>">
            </div>

            <div class="inputbox bodytextchi form-group">
                <span>社群</span>
                <div class="connectBox">
                    <a class="facebooklogin connectButton" href="https://www.facebook.com/">
                        <img src="icon/facebook.svg" alt="">
                        <div class="connecttext bodytextchi">已連結</div>
                        <div class="flexbox"></div>
                    </a>

                    <a class="googlelogin connectButton" href="https://www.google.com/">
                        <img src="icon/google.svg" alt="">
                        <div class="connecttext bodytextchi">未連結</div>
                        <div class="flexbox"></div>
                    </a>
                </div>
            </div>

            <div class="inputbox bodytextchi form-group">
                <span>信用卡</span>

                <div class="creditCardBox">
                    <div class="creditCard bodytextchi">
                        <img src="icon/visa.svg" alt="">
                        <span>xxxx-xxxx-xxxx-1234</span>
                        <span>CHANG HUI LIN</span>
                        <span>05/24</span>
                        <a href="" class="deleteCard mintextchi">刪除卡片</a>
                    </div>

                    <button type="button" class="addCreditcard " data-toggle="modal" data-target="#exampleModalCreditCard">
                        <img src="icon/plus.svg" alt="">新增信用卡
                    </button>

                </div>

                <!-- Modal -->


                <div class="modal fade" id="exampleModalCreditCard" tabindex="-1" aria-labelledby="exampleModalLabelCreditCard" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="windowTitle h4chi" id="exampleModalLabelCreditCard">新增信用卡</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
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
                                                <span>信用卡號</span>
                                                <input type="text" class="form-control" name="card-number" id="#number" placeholder="請輸入您的信用卡號" onfocus="flipCard(event);" onblur="deactivateBorder(event)" onkeyup="traceNumberInput(event)" value="">
                                            </div>

                                            <div class="form-input inputbox bodytextchi">
                                                <span>持卡人姓名</span>
                                                <input type="text" class="form-control" name="card-holder-name" id="#nameCreditCard" placeholder="請輸入持卡人姓名" onfocus="
                    flipCard(event);" onblur="deactivateBorder(event)" onkeyup="traceNameInput(event)" value="">
                                            </div>

                                            <div class="form-input inputbox bodytextchi">
                                                <span>有效期限</span>
                                                <input type="text" class="form-control" name="valid-thru-date" id="#expiry" placeholder="請輸入有效期限" onfocus="flipCard(event);" onblur="deactivateBorder(event)" onkeyup="traceDateInput(event)" value="">
                                            </div>

                                            <div class="form-input inputbox bodytextchi">
                                                <span>背面末三碼</span>
                                                <input type="number" class="form-control" name="security-code" id="#code" placeholder="請輸入背面末三碼" onfocus="flipCard(event);" onblur="deactivateBorder(event)" onkeyup="traceCodeInput(event)" value="">
                                            </div>

                                            <div class="form-input h5chi">
                                                <button type="submit" class="OrangeBtn">新增</button>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                                <!-- </div> -->

                            </div>
                        </div>
                    </div>
                </div>

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

            </div>


            <button type="submit" class="normalBtn" onclick="return formCheckMember()">儲存</button>


        </form>


    </div>

    <div class="windowTitle h4chi">
        <span>修改密碼</span>
    </div>

    <!-- 彈出視窗 -->
    <div id="info_bar2" class="alert alert-success" role="alert" style="display: none;">Test</div>
    <!-- 彈出視窗 -->

    <div class="whiteWindow">

        <form name="form_changepassword" method="post" novalidate>

            <div class="inputbox country bodytextchi form-group">
                <span for="oldpassword">舊密碼</span>
                <!-- <input type="text" class="form-control bodytextchi" placeholder="請輸入舊密碼"> -->
                <input type="text" class="form-control bodytextchi" id="oldpassword" name="oldpassword" placeholder="請輸入舊密碼" required>
                <small id="OldPasswordHelp" class="form-text"></small>
            </div>
            <div class="inputbox country bodytextchi form-group">
                <span for="newpassword">新密碼</span>
                <!-- <input type="text" class="form-control bodytextchi" placeholder="請輸入您的新密碼"> -->
                <input type="text" class="form-control bodytextchi" id="newpassword" name="newpassword" placeholder="請輸入您的新密碼" required>
                <small id="newPasswordHelp" class="form-text"></small>
            </div>


            <div class="inputbox country bodytextchi form-group">
                <span for="confirmpassword">確認新密碼</span>
                <!-- <input type="text" class="form-control bodytextchi" placeholder="再次輸入新密碼"> -->
                <input type="text" class="form-control bodytextchi" id="confirmpassword" name="confirmpassword" placeholder="再次輸入新密碼" required>
                <small id="confirmpassword3" class="form-text"></small>
            </div>

            <button type="submit" class="normalBtn" onclick="return formCheckChangePassword()">修改</button>

        </form>

    </div>
</div>


<!----- 修改個資 ----->
<script>
    function formCheckMember() {
        //加入手機和Email欄位的格式判斷
        const lastname = $('#member-lastname'),
            name = $('#member-name'),
            birth = $('#birth'),
            country = $('#country'),
            // oldpass = $('#oldpassword'),
            // newpass = $('#newpassword'),
            // confirmpass = $('#confirmpassword'),
            info_bar = $('#info_bar');

        console.log();
        lastname.next().text('');
        name.next().text('');
        birth.next().text('');
        country.next().text('');

        // oldpass.next().text('');
        // newpass.next().text('');
        // confirmpass.next().text('');

        let isPass = true;

        if (lastname.val().length < 1) {
            isPass = false;
            lastname.css('border-color', 'red');
            lastname.next().text('*請輸入您的姓氏');
        }

        if (lastname.val().length < 1) {
            isPass = false;
            name.css('border-color', 'red');
            name.next().text('*請輸入您的名子');
        }



        // if (oldpass.val().length < 6) {
        //     isPass = false;
        //     oldpass.css('border-color', 'red');
        //     oldpass.next().text('*請輸入長度為8位的密碼');
        // }

        // if (newpass.val().length < 6) {
        //     isPass = false;
        //     newpass.css('border-color', 'red');
        //     newpass.next().text('*請輸入長度為8位的密碼');
        // }

        // if (confirmpass.val().length < 6) {
        //     isPass = false;
        //     confirmpass.css('border-color', 'red');
        //     confirmpass.next().text('*請輸入長度為8位的密碼');
        // }

        if (isPass) {
            $.post('_member_page-api.php', $(document.form_member).serialize(), function(data) {
                console.log(data);

                if (data.success) {
                    Swal.fire({
                        title: "修改個人資料成功",
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 1500
                    });
                    setTimeout(function() {
                        location.href = '_member.php';
                    }, 3000);
                } else {
                    Swal.fire({
                        title: "個人資料無修改，請確認內容無誤",
                        icon: "error",
                        showConfirmButton: false,
                        timer: 1500
                    });
                }

                // if (data.success) {
                //     info_bar.removeClass('alert-danger')
                //         .addClass('alert-success')
                //         .html('修改個人資料成功!');
                // } else {
                //     info_bar.removeClass('alert-success')
                //         .addClass('alert-danger')
                //         .html(data.error || '個人資料無修改');
                // }
                // info_bar.slideDown();

                // setTimeout(function() {
                //     info_bar.slideUp();
                // }, 3000);
            }, 'json');

        }

        return false;
    }
</script>
<!----- 修改個資 ----->

<!----- 修改密碼 ----->
<script>
    function formCheckChangePassword() {
        const oldpass = $('#oldpassword'),
            newpass = $('#newpassword'),
            confirmpass = $('#confirmpassword'),
            info_bar2 = $('#info_bar2');
        console.log();

        const bobo1 = document.getElementById('newpassword').value;
        const bobo2 = document.getElementById('confirmpassword').value;
        const confirmpass02 = $('#confirmpassword');

        oldpass.next().text('');
        newpass.next().text('');
        confirmpass.next().text('');

        let isPass = true;

        if (oldpass.val().length < 6) {
            isPass = false;
            oldpass.css('border-color', 'red');
            oldpass.next().text('*請輸入長度為8位的密碼');
        }

        if (newpass.val().length < 6) {
            isPass = false;
            newpass.css('border-color', 'red');
            newpass.next().text('*請輸入長度為8位的密碼');
        }

        // if (confirmpass.val().length < 6) {
        //     isPass = false;
        //     confirmpass.css('border-color', 'red');
        //     confirmpass.next().text('*請輸入長度為8位的密碼');
        // }

        if (bobo1 !== bobo2) {
            isPass = false;
            confirmpass02.css('border-color', 'red');
            confirmpass02.next().text('請輸入相同密碼');
        }

        if (isPass) {
            $.post('_member_page-api2.php', $(document.form_changepassword).serialize(), function(data) {
                console.log(data);


                if (data.success) {
                    Swal.fire({
                        title: "修改密碼成功",
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 1500
                    });
                    setTimeout(function() {
                        location.href = '_about.php';
                    }, 3000);
                } else {
                    Swal.fire({
                        title: "修改密碼失敗，請確認內容無誤",
                        icon: "error",
                        showConfirmButton: false,
                        timer: 1500
                    });
                }


                // if (data.success) {
                //     swal({
                //         title: "密碼修改成功",
                //         icon: "success",
                //         // showConfirmButton: false,
                //         timer: 300000,
                //         // buttons: true,
                //         // dangerMode: true,
                //     });

                //     setTimeout(function() {
                //         location.href = '_index.php';
                //     }, 3000);
                // }

            }, 'json');
        }

        return false;
    }

    // 以下為原本舊的alert寫法
    //         if (data.success) {
    //             info_bar2.removeClass('alert-danger')
    //                 .addClass('alert-success')
    //                 .html('修改密碼成功!');
    //         } else {
    //             info_bar2.removeClass('alert-success')
    //                 .addClass('alert-danger')
    //                 .html(data.error || '密碼無修改');
    //         }
    //         info_bar2.slideDown();

    //         setTimeout(function() {
    //             info_bar2.slideUp();
    //         }, 3000);
    //     }, 'json');

    // }
</script>