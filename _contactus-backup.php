<?php require __DIR__ . '/Connect_db.php';

$pageTitle = '聯絡我們';
$pageName = '_contactus.php';

?>

<?php include __DIR__ . '/header.php' ?>

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


    .OrangeBtn {
        width: 100%;
        height: 60px;
        background-color: #EB9851;
        margin: 20px 0;
        border: none;
        color: #ffff
    }

    .form-group small{
        color:red;
    }
</style>

<body>


    <!-- Button trigger modal -->

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        聯絡我們
    </button>



    <!-- Modal -->
    <div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

        <div class="modal-dialog">

            <div class="modal-content">

                <div class="modal-header">

                    <div class="windowTitle h4chi">聯絡我們</div>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                </div>
                <div class="modal-body">

                    <form method="post" name="sentMessage" id="contactForm" onsubmit="return formCheck()">

                        <div class="inputbox bodytextchi">
                            <span for="name">姓名</span>
                            <div class="form-group">
                                <input name="name" id="name" type="name" placeholder="請輸入您的姓名" class="form-control bodytextchi" aria-label="Username" aria-describedby="basic-addon1">
                                <small id="name" class="form-text"></small>
                            </div>
                        </div>

                        <div class="inputbox password bodytextchi">
                            <span for="email">聯絡信箱</span>

                            <div class="form-group">
                                <input name="email" id="email" type="email" placeholder="請輸入您的E-MAIL" class="form-control bodytextchi" aria-label="Username" aria-describedby="basic-addon1">
                                <small id="email" class="form-text"></small>
                            </div>

                        </div>

                        <div class="inputbox yourmessage bodytextchi">
                            <span for="message">您的訊息</span>

                            <div class="form-group">
                                <textarea name="message" id="message" type="message" class="form-control" aria-label="With textarea"></textarea>
                                <small id="message" class="form-text"></small>
                            </div>

                        </div>

                        <button type="submit" name="sub" class="OrangeBtn bodytextchi"><span>送出</span></button>

                    </form>

                </div>


                <?php

                // if (isset($_POST['sub'])) {
                //     $name = $_POST['name'];
                //     $email = $_POST['email'];
                //     $message = $_POST['message'];
                //     $approval = "Accept";
                //     $sql = "INSERT INTO `contactus`(`fullname`, `email`, `message`, `approval`, `create_date`) VALUES ('$name','$email','$message',now(),'$approval')";

                // if (mysqli_query($con, $sql))
                //     echo "OK";
                // }

                ?>


            </div>
        </div>
    </div>

    <?php include __DIR__ . '/script.php' ?>

    <script>
        const name = $('#name'),
            email = $('#email'),
            message = $('#message');

        const email_re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;

        function formCheck() {
            name.next().text('');
            email.next().text('');
            message.next().text('');

            let isPass = true;

            if (name.val().trim().length<3) {
                isPass = false;
                name.css('border-color', 'red');
                name.next().text('*請輸入您的姓名')
            }

            if (!email_re.test(email.val())) {
                isPass = false;
                email.css('border-color', 'red');
                email.next().text('*請填入正確的E-mail格式');
            }

            if (message.val().trim().length<3) {
                isPass = false;
                message.css('border-color', 'red');
                message.next().text('*您尚未輸入訊息');
            }

            if (isPass) {
                $.post('contactus-api.php', $(document.sentMessage).serialize(), function(data) {
                    console.log(data);
                    return;

                    if (data.success) {
                        // info_bar.removeClass('alert-danger')
                        //     .addClass('alert-success')
                        //     .html('登入成功!');

                        setTimeout(function() {
                            location.href = './login.php';
                        }, 3000);
                    }
                }, 'json');
            }
            return false;
        }
    </script>