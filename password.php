<!doctype html>
<html lang="zh-Hant">

<head>
    <?php include "header-title.php"; ?>
</head>

<body>
    <div class="wp" id="editor">
        <?php include "header.php"; ?>
        <!-- main ======================================================================================= -->
        <main>
            <div class="pb-element px-3 px-md-4" style="background-image: url(styles/images/member/member/bg.jpg);">
                <div class="max1400 mx-auto py-4">
                    <div class="breadcrumb-element d-table ms-auto py-md-2" data-aos="fade-up">
                        <ul class="ns d-flex">
                            <li class="breadcrumb-item"><a href="./">首頁</a></li>
                            <li class="breadcrumb-item active"> 會員專區</li>
                        </ul>
                    </div>
                    <h1 class="fz-36 fw-bold text-center pt-4 pb-2 py-md-4 my-md-2" data-aos="fade-up">會員專區</h1>
                    <h2 class="d-none">會員資料</h2>
                    <div class="pt-3 mb-md-3 mb-xl-5 pb-4">
                        <div class="links-element max1200" data-aos="fade-up">
                            <div class="toggle">
                                <span>會員資料</span>
                                <i class="icon-plus"></i>
                            </div>
                            <div class="links row g-0">
                                <a class="d-block col-12 col-md" href="orders">訂單紀錄</a>
                                <a class="d-block col-12 col-md" href="member-projects">熊師領路</a>
                                <a class="d-block col-12 col-md" href="track">仲點學堂</a>
                                <a class="d-block col-12 col-md" href="record">觀看紀錄</a>
                                <a class="d-block col-12 col-md active" href="editor">會員資料</a>
                                <a class="d-block col-12 col-md" href="coupon">優惠券</a>
                            </div>
                        </div>
                    </div>
                    <div class="max1010 mx-auto">
                        <form class="form" action="password-ok">
                            <div class="bg-white box-shadow les1 rounded-15 lh-18 py-4 px-3 px-md-4 px-xl-5" data-aos="fade-up">
                                <div class="px-xl-2 py-xl-3">
                                    <div class="title-box border-bottom-E5E5E5 mb-3 mb-md-4 mt-1 pt-md-2 pt-xl-0">
                                        <h3 class="title-dec-line position-relative fz-22 fw-bold ps-3 pb-3 mb-0 mb-md-2">變更密碼</h3>
                                    </div>
                                    <div class="content-box">
                                        <div class="form-field flex-grow-1 d-sm-flex align-items-center mb-3">
                                            <label class="d-block mb-1 mb-sm-0" for="oldPassword">原密碼<span class="text-red ms-2">*</span></label>
                                            <input class="flex-grow-1 w-100 bg-paleBlue rounded-10 px-3 py-2" type="text" name="oldPassword" id="oldPassword" placeholder="輸入原密碼">
                                        </div>
                                        <div class="form-field flex-grow-1 d-sm-flex align-items-center mb-3">
                                            <label class="d-block mb-1 mb-sm-0" for="newPassword">新密碼<span class="text-red ms-2">*</span></label>
                                            <input class="flex-grow-1 w-100 bg-paleBlue rounded-10 px-3 py-2" type="text" name="newPassword" id="newPassword" placeholder="請輸入新密碼">
                                        </div>
                                        <div class="form-field flex-grow-1 d-sm-flex align-items-center mb-3">
                                            <label class="d-block mb-1 mb-sm-0" for="checkPassword">確認新密碼<span class="text-red ms-2">*</span></label>
                                            <input class="flex-grow-1 w-100 bg-paleBlue rounded-10 px-3 py-2" type="text" name="checkPassword" id="checkPassword" placeholder="再次輸入新密碼">
                                        </div>
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
                            <div class="flex-center mt-4 mt-md-5 pt-xl-4">
                                <a class="flex-center text-primary border border-primary bg-hover-middleBlue text-hover-white rounded-30 w200 h50 mx-2" href="editor">返回</a>
                                <button class="text-white bg-primary bg-hover-middleBlue border border-primary rounded-30 w200 h50 mx-2" type="submit">儲存變更</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
        <!-- main ======================================================================================= -->
        <?php include "footer.php"; ?>
    </div>
    <?php include "footer-js.php"; ?>
</body>

</html>