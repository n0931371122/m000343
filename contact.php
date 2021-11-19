<!doctype html>
<html lang="zh-Hant">

<head>
    <?php include "header-title.php"; ?>
</head>

<body>
    <div class="wp" id="contact">
        <?php include "header.php"; ?>
        <!-- main ======================================================================================= -->
        <main>
            <div class="pb-element px-3 px-md-4" style="background-image: url(styles/images/contact/terms-bg.jpg);">
                <div class="max1400 position-relative mx-auto pt-4 pb-5">
                    <div class="breadcrumb-element d-table ms-auto py-md-2" data-aos="fade-up">
                        <ul class="ns d-flex">
                            <li class="breadcrumb-item"><a href="./">首頁</a></li>
                            <li class="breadcrumb-item">聯絡我們</li>
                            <li class="breadcrumb-item">聯絡客服</li>
                        </ul>
                    </div>
                    <h1 class="fz-36 fw-bold text-primary text-center pt-4 pb-2 py-md-4 mt-md-2 mb-0" data-aos="fade-up">聯絡我們</h1>
                    <div class="pt-3 mb-md-3 mb-xl-4 pb-4">
                        <div class="links-element max600" data-aos="fade-up">
                            <div class="toggle">
                                <span>聯絡客服</span>
                                <i class="icon-plus"></i>
                            </div>
                            <div class="links row g-0">
                                <a class="d-block col-12 col-md active" href="contact">聯絡客服</a>
                                <a class="d-block col-12 col-md" href="privacy">隱私權政策</a>
                                <a class="d-block col-12 col-md" href="terms">使用者條款</a>
                            </div>
                        </div>
                    </div>
                    <div class="pt-2">
                        <div class="bg-white rounded-15 lh-18 px-3 px-md-4 py-4 py-md-5 p-xl-5">
                            <div class="px-xl-3 py-xl-2">
                                <div class="fz-18 text-gray4D border-bottom-E5E5E5 text-center les05 pb-4 mb-4" data-aos="fade-up">
                                    <span class="d-sm-block">如果有任何問題、平台操作或合作提案，請透過此表單與我們聯繫，</span>
                                    <span class="d-sm-block">我們會盡快回覆你（服務時間：週一至週五 11:00 - 17:00）</span>
                                </div>
                                <form class="form pt-sm-4" action="contact-ok">
                                    <div class="border-bottom-E5E5E5 pb-3 pb-sm-4 mb-4 mb-sm-5">
                                        <div class="row gx-5">
                                            <div class="col-12 col-lg-6 mb-3 position-relative z-1" data-aos="fade-up">
                                                <div class="form-field d-sm-flex align-items-center">
                                                    <label class="d-block mb-1 mb-sm-0" for="issue">主旨<span class="text-red ms-2">*</span></label>
                                                    <div class="select-element style-1 bg-paleBlue rounded-10 w-100">
                                                        <select class="selectpicker w-100" name="issue" id="issue">
                                                            <option>主旨1</option>
                                                            <option>主旨2</option>
                                                            <option>主旨3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6 mb-3" data-aos="fade-up">
                                                <div class="form-field d-sm-flex align-items-center">
                                                    <label class="d-block mb-1 mb-sm-0" for="name">姓名<span class="text-red ms-2">*</span></label>
                                                    <input class="flex-grow-1 w-100 bg-paleBlue rounded-10 px-3 py-2" name="name" id="name" type="text" placeholder="請填寫姓名">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6 mb-3" data-aos="fade-up">
                                                <div class="form-field d-sm-flex align-items-center">
                                                    <label class="d-block mb-1 mb-sm-0" for="email">電子信箱<span class="text-red ms-2">*</span></label>
                                                    <input class="flex-grow-1 w-100 bg-paleBlue rounded-10 px-3 py-2" name="email" id="email" type="email" placeholder="test@gmail.com">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6 mb-3" data-aos="fade-up">
                                                <div class="form-field d-sm-flex align-items-center">
                                                    <label class="d-block mb-1 mb-sm-0" for="mobile">聯絡電話<span class="text-red ms-2">*</span></label>
                                                    <input class="flex-grow-1 w-100 bg-paleBlue rounded-10 px-3 py-2" name="mobile" id="mobile" type="text" placeholder="0988123456 或 0212345698">
                                                </div>
                                            </div>
                                            <div class="col-12 mb-3" data-aos="fade-up">
                                                <div class="form-field d-sm-flex">
                                                    <label class="d-block mb-1 mb-sm-0" for="content">留言內容<span class="text-red ms-2">*</span></label>
                                                    <textarea class="flex-grow-1 w-100 bg-paleBlue rounded-10 px-3 py-2" name="content" id="content" rows="5" placeholder="請輸入訊息內容"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-12 mb-3" data-aos="fade-up">
                                                <div class="form-field d-sm-flex align-items-center">
                                                    <label class="d-block mb-1 mb-sm-0" for="verificationCode">驗證碼<span class="text-red ms-2">*</span></label>
                                                    <div class="d-flex flex-grow-1">
                                                        <input class="flex-grow-1 w-100 bg-paleBlue rounded-10 px-3 py-2" name="verificationCode" id="verificationCode" type="text">
                                                        <img class="ms-3" src="styles/images/contact/verificationCode.jpg" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center pt-lg-3 pb-lg-4 mb-2" data-aos="fade-up">
                                        <button class="text-white bg-primary bg-hover-middleBlue rounded-30 w200 h50 mx-2" type="submit">確認送出</button>
                                        <button class="text-primary text-hover-white bg-white bg-hover-middleBlue border border-primary rounded-30 w200 h50 mx-2" type="reset">取消</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <img class="dec position-absolute" src="styles/images/contact/dec.png" alt="">
                </div>
            </div>

        </main>
        <!-- main ======================================================================================= -->
        <?php include "footer.php"; ?>
    </div>
    <?php include "footer-js.php"; ?>
</body>

</html>