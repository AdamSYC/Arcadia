<?php require __DIR__ . '/Connect_db.php';

$pageTitle = '登入會員';
$pageName = 'login.php';

?>

<?php include __DIR__ . '/header.php' ?>
<?php include __DIR__ . '/navbar.php' ?>

<style>
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

    .forgetlink {
        color: #EB9851;
        text-align: right;
    }

    .OrangeBtn {
        width: 100%;
        height: 60px;
        background-color: #EB9851;
        margin: 20px 0;
        border: none;
        color: #ffff
    }


    .middleTitle {
        display: flex;
        justify-content: center;
        align-items: center;
        color: #5D5D5D;

    }

    .linebox {
        width: 80px;
        height: 1px;
        background-color: #cfcfcfcf;
        margin: 0px 10px 0px 10px;
    }

    .connectButton {
        width: 100%;
        height: 60px;
        border: #09839C 1px solid;
        margin-top: 20px;
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
        margin-right: 20px;
    }

    .flexbox {
        width: 32px;
        height: 32px;
        background-color: #fff;
    }

    .footertext {
        margin-top: 30px;
        color: #5D5D5D;
    }

    .OrangeLink {
        color: #EB9851;
    }

    .form-text {
        color: red;
    }
</style>

<body>


    <!-- Button trigger modal -->

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        登入
    </button>





    <!-- Modal -->
    <div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

        <div class="modal-dialog">

            <div class="modal-content">

                <!-- Alert 視窗 -->
                <div id="info-bar" class="alert alert-success" role="alert" style="display: none;">Test</div>
                <!-- Alert 視窗 -->

                <div class="modal-header">

                    <div class="windowTitle h4chi">登入會員</div>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                </div>

                <div class="modal-body">

                    <form name="form1" method="post" onsubmit="return formCheck()" novalidate>

                        <div class="inputbox account bodytextchi">
                            <span class="email">帳號</span>
                            <div>
                                <input type="email" id="email" name="email" placeholder="請輸入您的E-MAIL" class="form-control bodytextchi" aria-label="Username" aria-describedby="basic-addon1">
                                <small id="emailHelp" class="form-text"></small>
                            </div>
                        </div>
                        <div class="inputbox password bodytextchi">
                            <span class="password">密碼</span>
                            <div>
                                <input type="password" id="password" name="password" placeholder="請輸入您的密碼" class="form-control bodytextchi" aria-label="password" aria-describedby="basic-addon1">
                                <small id="password" class="form-text"></small>
                            </div>
                            <a href="" class="OrangeLink bodytextchi">忘記密碼</a>
                        </div>

                        <button type="submit" class="OrangeBtn bodytextchi"><span>登入</span></button>

                    </form>

                    <div class="middleTitle">
                        <div class="linebox"></div>
                        <div class="ortext bodytextchi">或點一下登入</div>
                        <div class="linebox"></div>
                    </div>

                    <a class="facebooklogin connectButton" href="https://www.facebook.com/">
                        <img src="icon/facebook.svg" alt="">
                        <div class="connecttext bodytextchi">FACEBOOK</div>
                        <div class="flexbox"></div>
                    </a>

                    <a class="googlelogin connectButton" href="https://www.google.com/">
                        <img src="icon/google.svg" alt="">
                        <div class="connecttext bodytextchi">GOOGLE</div>
                        <div class="flexbox"></div>
                    </a>




                </div>

                <div class="modal-footer">

                    <div class="footertext">
                        <span class="bodytextchi">沒有會員帳號嗎？</span>
                        <a class="OrangeLink bodytextchi" href="">點此註冊</a>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <?php include __DIR__ . '/script.php' ?>

    <script>
        //自動點擊bottom
        // function myfunction(){
        //     $(document).ready(function(){
        //         $('#autoclick').click();
        //     });
        // };



        //加入Email 帳號欄位的格式判斷
        const email = $('#email'),
            password = $('#password'),
            info_bar = $('#info-bar');


        const email_re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;

        function formCheck() {
            email.next().text('');
            password.next().text('');

            email.css('border-color', '#CCCCCC');
            password.css('border-color', '#CCCCCC')

            let isPass = true;

            if (!email_re.test(email.val())) {
                isPass = false;
                email.next().text('*請填入正確的E-mail格式');
            }

            if (password.val().length < 6) {
                isPass = false;
                password.css('border-color', 'red');
                password.next().text('*請輸入長度為8位的密碼');
            }

            if (isPass) {
                $.post('login-api.php', $(document.form1).serialize(), function(data) {
                    console.log(data);

                    if (data.success) {
                        info_bar.removeClass('alert-danger')
                            .addClass('alert-success')
                            .html('登入成功!');

                        setTimeout(function() {
                            location.href = './contactus.php'; //0714-11-Address-Book串聯拆解檔.php
                        }, 3000);

                    } else {
                        info_bar.removeClass('alert-success')
                            .addClass('alert-danger')
                            .html('帳號或密碼有誤');
                    }
                    info_bar.slideDown();

                    setTimeout(function() {
                        info_bar.slideUp();
                    }, 2000);
                }, 'json');

            }

            return false;
        }


        // 點擊Icon後跳出登入視窗
        $('#exampleModal').modal()
        
    </script>