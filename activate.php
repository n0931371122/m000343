<!doctype html>
<html lang="zh-Hant">

<head>
    <?php include "header-title.php"; ?>
</head>

<body>
    <div class="wp register-templete">
        <!-- main ======================================================================================= -->
        <main>
            <div class="position-relative overflow-hidden" style="background-image:url(styles/images/member/register/register-bg.jpg)">
                <h1 class="d-none">會員註冊</h1>
                <div class="dec position-relative z-1">
                    <div class="dec-1 position-absolute">
                        <img src="styles/images/member/register/dec-1.png" alt="">
                    </div>
                    <div class="dec-2 position-absolute">
                        <img src="styles/images/member/register/dec-2.png" alt="">
                    </div>
                    <div class="dec-3 position-absolute">
                        <img src="styles/images/member/register/dec-3.png" alt="">
                    </div>
                    <div class="dec-4 d-none d-md-block position-fixed">
                        <img src="styles/images/member/register/dec-4.png" alt="">
                    </div>
                </div>
                <a class="logo position-absolute" href="./">
                    <img src="styles/images/member/logo.svg" alt="">
                </a>
                <div class="section flex-center px-3 px-md-4">
                    <div class="max520 bg-white rounded-15 py-4 px-3 px-md-4 mx-auto mb-5 mb-md-0 mb-xl-5" data-aos="fade-up">
                        <div class="px-md-2 pt-1 pb-3">
                            <div class="text-center">
                                <img src="styles/images/member/register/mail.png" alt="">
                                <h2 class="fz-28 fw-bold text-primary les2 mt-3 mb-3 pb-md-1">重發驗證信</h2>
                                <p class="fz-18 les1 mb-0 mb-4 pb-md-2">請輸入您註冊時的E-mail 帳號，系統將會自動寄送一組網址至您的信箱，點選網址後即可進入進行修改。</p>
                            </div>
                            <form class="px-md-5" action="activate-ok">
                                <div class="form-field d-flex align-items-center bg-grayF9 rounded-30 h50 mb-2 px-4">
                                    <label for="email">Email</label>
                                    <input class="flex-grow-1 my-1" type="email" id="email" name="email" required>
                                </div>
                                <div class="form-field d-flex align-items-center bg-grayF9 rounded-30 h50 mb-2 px-4">
                                    <label for="verificationCode">驗證碼</label>
                                    <input class="flex-grow-1 w0 my-1" type="text" id="verificationCode" name="verificationCode" required>
                                    <img src="styles/images/member/register/verificationCode.png" alt="">
                                </div>
                                <div class="mt-4 pt-3">
                                    <button class="d-block blue-grad-bg text-white h50 rounded-30 w-100" type="submit">下一步</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- main ======================================================================================= -->
    </div>
    <?php include "footer-js.php"; ?>
    <script src="/scripts/default/pages/register.js"></script>
</body>

</html>