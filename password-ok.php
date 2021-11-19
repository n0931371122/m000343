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
                        <div class="bg-white max800 rounded-30 lh-18 box-shadow px-3 px-md-4 py-4 py-md-5 p-xl-5 mx-auto">
                            <div class="text-center px-xl-3 py-xl-5">
                                <div class="border-bottom-C4D2F3 max530 mx-auto mb-4 mb-md-5 px-3 px-md-4 pt-3 pt-md-0">
                                    <img class="mb-3 pb-1" src="styles/images/contact/ok.png" alt="" data-aos="fade-up">
                                    <h2 class="fz-28 fw-bold text-primary mb-3 pb-1" data-aos="fade-up">密碼修改成功</h2>
                                    <p class="fz-18 les1 pb-md-1" data-aos="fade-up">為了個人資料安全請妥善保管您的密碼，現在可立即登入會員功能享受美好購物體驗!</p>
                                </div>
                                <div data-aos="fade-up">
                                    <a class="flex-center text-white bg-primary bg-hover-middleBlue rounded-30 w200 h50 mx-auto mb-4" href="editor">確認</a>
                                </div>
                            </div>
                        </div>
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