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
                <h1 class="d-none">會員登入</h1>
                <div class="dec">
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
                <div class="section d-flex align-items-end px-3 px-md-4">
                    <div class="max970 w-100 mx-auto">
                        <div class="row">
                            <div class="col-12 col-lg-5 col-xxl-6 pt-lg-5 mt-lg-5">
                                <span class="d-block fz-70 fw-bold text-lightBlue lh-sm pt-5 mt-4 mt-lg-2" data-aos="fade-up">Welcome</span>
                                <span class="d-block blue-clip-text fz-28 fw-bold les2 mb-3 pb-1" data-aos="fade-up" data-aos-delay="50">讓「熊課」成為您學習的良藥</span>
                                <p class=" fz-18 text-gray4C lh-165" data-aos="fade-up" data-aos-delay="100">不受時間地點限制， 重新找回學習的樂趣<br>馬上加入會員獲得更多體驗</p>
                            </div>
                            <div class="col-12 col-lg-7 col-xxl-6 pe-xl-5 pe-xxl-0">
                                <div class="form-block">
                                    <img class="d-table mx-auto mb-1" src="styles/images/member/register/cartoon.png" alt="" data-aos="fade-up">
                                    <p class="fz-24 text-primary fw-bold text-center" data-aos="fade-up" data-aos-delay="50">一起來熊課</p>
                                    <div class="form-box rounded-10 overflow-hidden mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
                                        <div class="links row g-0 fz-18 text-center lh-lg">
                                            <div class="col-6">
                                                <a class="flex-center h50 text-white bg-primary" href="login">登入</a>
                                            </div>
                                            <div class="col-6">
                                                <a class="flex-center h50 bg-grayF9" href="register">註冊</a>
                                            </div>
                                        </div>
                                        <div class="form-box bg-white px-3 px-md-4 px-md-5 py-4">
                                            <form class="px-md-3 py-3 my-1" action="orders">
                                                <div class="form-field d-flex align-items-center bg-grayF9 rounded-30 h50 mb-2 px-4">
                                                    <label for="account">帳號</label>
                                                    <input class="flex-grow-1 my-1" type="text" id="account" name="account" required>
                                                </div>
                                                <div class="form-field d-flex align-items-center bg-grayF9 rounded-30 h50 mb-2 px-4">
                                                    <label for="password">密碼</label>
                                                    <input class="flex-grow-1 my-1" type="password" id="password" name="password" required>
                                                </div>
                                                <div class="form-field d-flex align-items-center bg-grayF9 rounded-30 h50 mb-2 px-4">
                                                    <label for="account">驗證碼</label>
                                                    <input class="flex-grow-1 w0 my-1" type="text" id="verificationCode" name="verificationCode" required>
                                                    <img src="styles/images/member/register/verificationCode.png" alt="">
                                                </div>
                                                <div class="d-flex justify-content-between fz-15 text-gray4C mt-4 mb-4 pb-1">
                                                    <div class="d-flex">
                                                        <input class="icon-ok d-inline-flex text-white" type="checkbox" name="remember" id="remember">
                                                        <label class="flex-grow-1 cursor ps-2" for="remember">記住我的帳號密碼</label>
                                                    </div>
                                                    <a class="text-primary text-hover-lightBlue fw-500" href="forget">忘記密碼？</a>
                                                </div>
                                                <button class="d-block blue-grad-bg text-white h50 rounded-30 w-100 mb-3" type="submit">登入</button>
                                                <div class="pt-1">
                                                    <div class="other-register position-relative z-1">
                                                        <span class="d-table fz-15 text-gray4C bg-white z-1 mx-auto px-4">其他方式登入</span>
                                                    </div>
                                                    <div class="flex-center mt-2 mb-3 pt-1">
                                                        <a class="d-table mx-2" href="./" target="_blank">
                                                            <img src="styles/images/common/fb.png" alt="">
                                                        </a>
                                                        <a class="d-table mx-2" href="./" target="_blank">
                                                            <img src="styles/images/common/google.png" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
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