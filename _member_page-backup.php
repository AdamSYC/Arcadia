<?php require __DIR__ . '/Connect_db.php';

$pageTitle = '會員中心';
$pageName = 'memberInfo.php';

// $t_sql = "SELECT COUNT(member_id) FROM `members`";

// 讀取資料庫
$sql = "SELECT * FROM members where member_id=?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$_SESSION['members']['member_id']]);
$r = $stmt->fetch();

?>

<?php include __DIR__ . '/header.php' ?>



<style>
    body {
        background-color: #EEEEEE;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    ol,
    .breadcrumb {
        padding: 0;
    }

    .memberInfo {
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

    .row {
        width: 460px;
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
        border: 1px solid #ced4da;
        border-radius: .25rem;
        padding: .375rem .75rem;
    }

    .connectButton {
        width: 100%;
        height: 60px;
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
    }

    .addCreditcard {
        width: 32px;
        height: 32px;
        margin: 3rem;
        border-radius: 50%;
    }


    .OrangeBtn {
        width: 100%;
        height: 60px;
        background-color: #EB9851;
        margin: 20px 0 0 0;
        border: none;
        color: #ffff
    }

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
</style>


<body>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item bodytextchi"><a href="#">首頁</a></li>
            <li class="breadcrumb-item bodytextchi"><a href="#">會員中心</a></li>
            <li class="breadcrumb-item active bodytextchi" aria-current="page">會員資訊</li>
        </ol>
    </nav>

    <div class="windowTitle h4chi">
        <span>會員資訊</span>
    </div>

    <div class="memberInfo">
        <div class="AlignPhoto">
            <div class="photo">
                <img class="coverfit" src="" alt="">
            </div>
            <input type="file" onchange="previewFile()"><br>
        </div>

        <form name="form1" method="post" novalidate>

            <div class="inputbox memberemail">
                <span class="bodytextchi">會員帳號</span>
                <input type="text" class="memberEmail form-control bodytexteng" value="<?= $r['email'] ?>" disabled></input>
            </div>

            <div class="inputbox bodytextchi passportname form-group">
                <span for="lastname">護照姓名</span>
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control bodytextchi" id="lastname" name="lastname" value="<?= $r['lastname'] ?>">
                        <small id="lastnameHelp" class="form-text"></small>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control bodytextchi" id="name" name="name" placeholder="名字" value="<?= $r['name'] ?>">
                        <small id="nameHelp" class="form-text"></small>
                    </div>
                </div>
            </div>

            <div class="inputbox birthday bodytextchi form-group">
                <span for="birth">生日</span>
                <input type="date" class="form-control  bodytextchi" id="birth" name="birth" value="<?= $r['birth'] ?>">
            </div>

            <div class="inputbox country bodytextchi form-group">
                <span for="country">國家</span>
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
                    <div class="creditCard"></div>
                    <div class="addCreditcard"><img src="icon/plus.svg" alt=""></div>
                </div>

            </div>


            <button type="submit" class="OrangeBtn bodytextchi" onclick="return formCheck1()"><span>儲存修改</span></button>



        </form>


    </div>

    <div class="windowTitle h4chi">
        <span>修改密碼</span>
    </div>

    <div id="info_bar2" class="alert alert-success" role="alert" style="display: none;">Test</div>

    <div class="memberInfo">

        <form name="form2" method="post" novalidate>


            <div class="inputbox country bodytextchi form-group">
                <span for="oldpassword">舊密碼</span>
                <input type="text" class="form-control bodytextchi" id="oldpassword" name="oldpassword" placeholder="請輸入舊密碼" required>
                <small id="OldPasswordHelp" class="form-text"></small>
            </div>
            <div class="inputbox country bodytextchi form-group">
                <span for="newpassword">新密碼</span>
                <input type="text" class="form-control bodytextchi" id="newpassword" name="newpassword" placeholder="請輸入您的新密碼" required>
                <small id="newPasswordHelp" class="form-text"></small>
            </div>


            <div class="inputbox country bodytextchi form-group">
                <span for="confirmpassword">確認新密碼</span>
                <input type="text" class="form-control bodytextchi" id="confirmpassword" name="confirmpassword" placeholder="再次輸入新密碼" required>
                <small id="confirmpassword3" class="form-text"></small>
            </div>


            <button type="submit" class="OrangeBtn bodytextchi" onclick="return formCheck2()"><span>修改</span></button>


        </form>


    </div>

    <?php include __DIR__ . '/script.php' ?>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!----- 大頭照 ----->
    <script>
        function previewFile() {
            const preview = document.querySelector('img');
            const file = document.querySelector('input[type=file]').files[0];
            const reader = new FileReader();

            reader.addEventListener("load", function() {
                // convert image file to base64 string
                preview.src = reader.result;
            }, false);

            if (file) {
                reader.readAsDataURL(file);
            }
        }
    </script>
    <!----- 大頭照 ----->

    <!----- 修改個資 ----->
    <script>
        //加入手機和Email欄位的格式判斷
        const lastname = $('#lastname'),
            name = $('#name'),
            birth = $('#birth'),
            country = $('#country'),
            // oldpass = $('#oldpassword'),
            // newpass = $('#newpassword'),
            // confirmpass = $('#confirmpassword'),
            info_bar = $('#info_bar');

        console.log();

        function formCheck1() {
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
                $.post('memberInfo-api.php', $(document.form1).serialize(), function(data) {
                    console.log(data);

                    if (data.success) {
                        info_bar.removeClass('alert-danger')
                            .addClass('alert-success')
                            .html('修改個人資料成功!');
                    } else {
                        info_bar.removeClass('alert-success')
                            .addClass('alert-danger')
                            .html(data.error || '個人資料無修改');
                    }
                    info_bar.slideDown();

                    setTimeout(function() {
                        info_bar.slideUp();
                    }, 3000);
                }, 'json');

            }

            return false;
        }
    </script>
    <!----- 修改個資 ----->

    <!----- 修改密碼 ----->
    <script>
        const oldpass = $('#oldpassword'),
            newpass = $('#newpassword'),
            confirmpass = $('#confirmpassword'),
            info_bar2 = $('#info_bar2');

        console.log();

        function formCheck2() {
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
                $.post('memberInfo-api2.php', $(document.form2).serialize(), function(data) {
                    console.log(data);

                    if (data.success) {
                        swal({
                            title: "密碼修改成功",
                            icon: "success",
                            // showConfirmButton: false,
                            timer: 300000,
                            // buttons: true,
                            // dangerMode: true,
                        });
                        
                        setTimeout(function() {
                            location.href = '_index.php';
                        }, 3000);
                    } 
                    // 不需要失敗畫面
                    // else {
                    //     swal({
                    //         title: "密碼修改失敗",
                    //         icon: "success",
                    //         buttons: true,
                    //         dangerMode: true,
                    //     });
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