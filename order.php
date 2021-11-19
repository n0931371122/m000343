<!doctype html>
<html lang="zh-Hant">

<head>
    <?php include "header-title.php"; ?>
</head>

<body>
    <div class="wp" id="order">
        <?php include "header.php"; ?>
        <!-- main ======================================================================================= -->
        <main>
            <div class="pb-element px-3 px-md-4" style="background-image: url(styles/images/member/member/bg.jpg);">
                <div class="max1400 mx-auto pt-4 pb-5">
                    <div class="breadcrumb-element d-table ms-auto py-md-2" data-aos="fade-up">
                        <ul class="ns d-flex">
                            <li class="breadcrumb-item"><a href="./">首頁</a></li>
                            <li class="breadcrumb-item active"> 會員專區</li>
                        </ul>
                    </div>
                    <h1 class="fz-36 fw-bold text-center pt-4 pb-2 py-md-4 my-md-2" data-aos="fade-up">會員專區</h1>
                    <h2 class="d-none">訂單紀錄</h2>
                    <div class="pt-3 mb-md-3 mb-xl-5 pb-4">
                        <div class="links-element max1200" data-aos="fade-up">
                            <div class="toggle">
                                <span>訂單紀錄</span>
                                <i class="icon-plus"></i>
                            </div>
                            <div class="links row g-0">
                                <a class="d-block col-12 col-md active" href="orders">訂單紀錄</a>
                                <a class="d-block col-12 col-md" href="member-projects">熊師領路</a>
                                <a class="d-block col-12 col-md" href="track">仲點學堂</a>
                                <a class="d-block col-12 col-md" href="record">觀看紀錄</a>
                                <a class="d-block col-12 col-md" href="editor">會員資料</a>
                                <a class="d-block col-12 col-md" href="coupon">優惠券</a>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white box-shadow rounded-15 lh-18 py-4 px-3 px-md-4" data-aos="fade-up">
                        <div class="px-xl-2 py-xl-4">
                            <div class="title-box d-md-flex justify-content-between align-items-end ms-xl-2 mb-3 mb-lg-4 pb-lg-1 pt-md-2 mt-1">
                                <h3 class="title-dec-line position-relative fz-22 fw-bold les1 ps-3 mb-0">訂單紀錄</h3>
                            </div>
                            <div class="content-box">
                                <div class="bg-grayFA rounded-10 px-xl-2 py-3 py-sm-4 mb-sm-4">
                                    <div class="d-md-flex px-3 mb-sm-4 pb-4">
                                        <div>
                                            <span class="fz-18 me-1 me-lg-3">訂單編號：</span>
                                            <span class="fz-18 fw-bold text-lightRed">A2021081801</span>
                                        </div>
                                        <div class="ms-md-3 ms-lg-auto me-md-3 me-lg-5">
                                            <span class="fz-18 me-1 me-lg-3">訂購時間：</span>
                                            <span class="fz-18 fw-bold text-lightRed">2021-08-18 16:30</span>
                                        </div>
                                        <div class="ps-lg-3">
                                            <span class="fz-18 me-1 me-lg-3">訂購時間：</span>
                                            <span class="NotoSansTC fz-18 text-lightRed">未付款</span>
                                        </div>
                                    </div>
                                    <div class="steps d-sm-flex justify-content-center text-center pb-3" data-aos="fade-up">
                                        <div class="step">
                                            <div class="flex-center mx-auto mb-2">
                                                <div class="circle flex-center rounded-circle background-cover" style="background-image:url(styles/images/member/orders/step-bg.png)">
                                                    <i class="icon-step-check text-white"></i>
                                                </div>
                                            </div>
                                            <span class="d-block fz-18 pt-1">訂單成立</span>
                                            <span class="fz-18 text-gray80 lh-sm">2021-08-18 16:30</span>
                                        </div>
                                        <div class="align-self-center mb-sm-5 pt-2 pt-sm-0 pb-2 pb-sm-4">
                                            <i class="icon-step-arrow-1 fz-14 text-blue778BBD"></i>
                                        </div>
                                        <div class="step">
                                            <div class="flex-center mx-auto mb-2">
                                                <div class="circle flex-center bg-lighterBlue rounded-circle w54 h54">
                                                    <span class="fz-28 fw-bold text-white">2</span>
                                                </div>
                                            </div>
                                            <span class="d-block fz-18 pt-1">處理中</span>
                                        </div>
                                        <div class="align-self-center mb-sm-5 pt-2 pt-sm-0 pb-2 pb-sm-4">
                                            <i class="icon-step-arrow-2 fz-14 text-gray80"></i>
                                        </div>
                                        <div class="step">
                                            <div class="flex-center mx-auto mb-2">
                                                <div class="circle flex-center bg-lighterBlue rounded-circle w54 h54">
                                                    <span class="fz-28 fw-bold text-white">3</span>
                                                </div>
                                            </div>
                                            <span class="d-block fz-18 pt-1">訂單完成</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="listsItem pt-2">
                                    <div class="thead d-none d-lg-flex row align-items-center g-0 fz-18 bg-grayF8 h60 rounded-15 px-3 mb-2">
                                        <div class="info th col flex-grow-1">訂單資訊</div>
                                        <div class="sellprice th col text-center">售價</div>
                                        <div class="payprice th col text-md-end">付款金額</div>
                                    </div>
                                    <div class="tbody">
                                        <div class="tr listItem border-bottom-E5E5E5 px-lg-3">
                                            <div class="main-box d-block d-lg-flex row g-0 align-items-center border-bottom-E5E5E5">
                                                <div class="info td flex-grow-1 pe-xl-5">
                                                    <a class="item d-block d-xl-flex align-items-center flex-grow-1" href="course-1">
                                                        <span class="img-inner flex-center rounded-5 overflow-hidden flex-shrink-0">
                                                            <img class="w-100" src="styles/images/cart/recommend-3.jpg" alt="">
                                                        </span>
                                                        <span class="text-inner d-block les1">
                                                            <span class="title fz-18 fw-500 text-hover-primary line2 lh-base">了解主力操作個股的思維與揣測未來可能的走勢與方向 </span>
                                                            <span class="sub d-block text-gray80">3章節 12單元</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="sellprice td text-lg-center" data-th="售價">
                                                    <span class="fz-20 text-gray80">$ 10,100</span>
                                                </div>
                                                <div class="payprice td text-lg-end" data-th="付款金額">
                                                    <span class="fz-20">$ 9,880</span>
                                                </div>
                                            </div>
                                            <div class="d-md-flex row g-0 justify-content-between py-3 py-xl-2">
                                                <div class="col-auto td d-md-flex row g-0 align-items-start align-items-xl-center les1 flex-grow-1">
                                                    <div class="col-auto fz-15 fw-bo500 text-white bg-lightBlue flex-shrink-0 rounded-5 lh-lg px-2 me-md-4 mb-2 mb-md-0">
                                                        <span class="mx-1">優惠券</span>
                                                    </div>
                                                    <div class="col-12 col-md-auto d-xl-flex">
                                                        <span class="d-block fw-500 text-gray4D mb-2 mb-md-0">慶祝熊課開幕，所有課程88折</span>
                                                        <span class="text-lightBlue flex-shrink-0 mt-2 mt-xl-0 ms-xl-4">
                                                            <i class="icon-step-check"></i>
                                                            <span class="fw-500">已折扣</span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-auto cart3Payprice td text-end">
                                                    <span class="fz-20 text-lightRed">- $ 220</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tr listItem border-bottom-E5E5E5 px-lg-3">
                                            <div class="main-box d-block d-lg-flex row g-0 align-items-center border-bottom-E5E5E5">
                                                <div class="info td flex-grow-1 pe-xl-5">
                                                    <a class="item d-block d-xl-flex align-items-center flex-grow-1" href="course-1">
                                                        <span class="img-inner flex-center rounded-5 overflow-hidden flex-shrink-0">
                                                            <img class="w-100" src="styles/images/cart/recommend-3.jpg" alt="">
                                                        </span>
                                                        <span class="text-inner d-block les1">
                                                            <span class="title fz-18 fw-500 text-hover-primary line2 lh-base">資深投顧王 - 為您洞悉全球財經與掌握台股主流</span>
                                                            <span class="sub d-block text-gray80">3章節 12單元</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="sellprice td text-lg-center" data-th="售價">
                                                    <span class="fz-20 text-gray80">$ 2,800</span>
                                                </div>
                                                <div class="payprice td text-lg-end" data-th="付款金額">
                                                    <span class="fz-20">$ 2,580</span>
                                                </div>
                                            </div>
                                            <div class="d-md-flex row g-0 justify-content-between py-3 py-xl-2">
                                                <div class="col-auto td d-md-flex row g-0 align-items-start align-items-xl-center les1 flex-grow-1">
                                                    <div class="col-auto fz-15 fw-bo500 text-white bg-lightBlue flex-shrink-0 rounded-5 lh-lg px-2 me-md-4 mb-2 mb-md-0">
                                                        <span class="mx-1">優惠券</span>
                                                    </div>
                                                    <div class="col-12 col-md-auto d-xl-flex">
                                                        <span class="d-block fw-500 text-gray4D mb-2 mb-md-0">慶祝熊課開幕，所有課程88折</span>
                                                        <span class="text-lightBlue flex-shrink-0 mt-2 mt-xl-0 ms-xl-4">
                                                            <i class="icon-step-check"></i>
                                                            <span class="fw-500">已折扣</span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-auto cart3Payprice td text-end">
                                                    <span class="fz-20 text-lightRed">- $ 220</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tr listItem border-bottom-E5E5E5 px-lg-3">
                                            <div class="main-box d-block d-lg-flex row g-0 align-items-center border-bottom-E5E5E5">
                                                <div class="info td flex-grow-1 pe-xl-5">
                                                    <a class="item d-block d-xl-flex align-items-center flex-grow-1" href="course-1">
                                                        <span class="img-inner flex-center rounded-5 overflow-hidden flex-shrink-0">
                                                            <img class="w-100" src="styles/images/cart/recommend-3.jpg" alt="">
                                                        </span>
                                                        <span class="text-inner d-block les1">
                                                            <span class="title fz-18 fw-500 text-hover-primary line2 lh-base">了解主力操作個股的思維與揣測未來可能的走勢與方向 </span>
                                                            <span class="sub d-block text-gray80">3章節 12單元</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="sellprice td text-lg-center" data-th="售價">
                                                    <span class="fz-20 text-gray80">$ 2,800</span>
                                                </div>
                                                <div class="payprice td text-lg-end" data-th="付款金額">
                                                    <span class="fz-20">$ 2,580</span>
                                                </div>
                                            </div>
                                            <div class="d-md-flex row g-0 justify-content-between py-3 py-xl-2">
                                                <div class="col-auto td d-md-flex row g-0 align-items-start align-items-xl-center les1 flex-grow-1">
                                                    <div class="col-auto fz-15 fw-bo500 text-white bg-lightBlue flex-shrink-0 rounded-5 lh-lg px-2 me-md-4 mb-2 mb-md-0">
                                                        <span class="mx-1">優惠券</span>
                                                    </div>
                                                    <div class="col-12 col-md-auto d-xl-flex">
                                                        <span class="d-block fw-500 text-gray4D mb-2 mb-md-0">慶祝熊課開幕，所有課程88折</span>
                                                        <span class="text-lightBlue flex-shrink-0 mt-2 mt-xl-0 ms-xl-4">
                                                            <i class="icon-step-check"></i>
                                                            <span class="fw-500">已折扣</span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-auto cart3Payprice td text-end">
                                                    <span class="fz-20 text-lightRed">- $ 220</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tr border-bottom-E5E5E5 text-gray4D py-3 py-md-4">
                                            <div class="td text-end px-lg-3">
                                                <span class="d-flex d-sm-block justify-content-between mb-2">
                                                    <span class="space-1 fz-18 fw-500 d-inline-block">課程-名師心法(3筆)</span>
                                                    <span class="space-2 fz-20 fw-bold d-inline-block">NT$ 15,700</span>
                                                </span>
                                                <span class="d-flex d-sm-block justify-content-between">
                                                    <span class="space-1 fz-18 fw-500 d-inline-block">優惠折抵(3筆)</span>
                                                    <span class="space-2 fz-20 fw-bold d-inline-block">NT$ -660</span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="tr pt-2">
                                            <div class="td text-end px-lg-3">
                                                <span class="space-1 fz-18 fw-500 d-inline-block text-gray4D me-3 me-sm-0">總計金額</span>
                                                <span class="space-2 fz-28 fw-bold d-inline-block text-lightRed">NT$ 15,040</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row les1 mb-4 mb-md-5 mt-3 mt-md-4 pt-md-1">
                        <div class="col-12 col-xl-6 pb-3 pb-xl-4 mb-1">
                            <div class="NotoSansTC bg-white box-shadow rounded-15 lh-18 py-4 px-3 px-md-4" data-aos="fade-up">
                                <div class="mx-xl-3 pt-xl-3 pb-xl-2">
                                    <h3 class="title-dec-line position-relative fz-22 fw-bold les1 ps-3 mb-2 mb-lg-3">訂單詳細資訊</h3>
                                    <div class="detail-inner vertical row ps-3 pe-md-3 pt-1">
                                        <div class="col-12 col-xl-6 d-flex mb-1">
                                            <span class="label flex-shrink-0 d-inline-block">訂單編號：</span>
                                            <span class="fw-bold text-lightRed">A2021081801</span>
                                        </div>
                                        <div class="col-12 col-xl-6 d-flex mb-1">
                                            <span class="label flex-shrink-0 d-inline-block">訂購時間：</span>
                                            <span class="fw-bold text-lightRed">2021-08-18 16:30</span>
                                        </div>
                                        <div class="col-12 col-xl-6 d-flex mb-1">
                                            <span class="label flex-shrink-0 d-inline-block">訂單狀態：</span>
                                            <span class="text-lightRed">已成立</span>
                                        </div>
                                        <div class="col-12 col-xl-6 d-flex ps-xl-4 mb-1">
                                            <span class="label flex-shrink-0 d-inline-block ps-xl-3">付款方式：</span>
                                            <span class="text-lightRed">ATM轉帳</span>
                                        </div>
                                        <div class="col-12 col-xl-6 d-flex ps-xl-4 mb-1">
                                            <span class="label flex-shrink-0 d-inline-block ps-xl-3">付款狀態：</span>
                                            <span class="text-lightRed">未付款</span>
                                        </div>
                                        <div class="col-12 col-xl-6 d-flex ps-xl-4 mb-1">
                                            <span class="label flex-shrink-0 d-inline-block ps-xl-3">付款金額：</span>
                                            <span class="text-lightRed">$15,040</span>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-6 pb-3 pb-xl-4 mb-1">
                                <div class="NotoSansTC bg-white box-shadow rounded-15 lh-18 py-4 px-3 px-md-4" data-aos="fade-up">
                                    <div class="mx-xl-3 pt-xl-3 pb-xl-2">
                                        <h3 class="title-dec-line position-relative fz-22 fw-bold les1 ps-3 mb-2 mb-lg-3">訂購人資訊</h3>
                                        <div class="detail-inner row ps-3 pe-md-3 pt-1">
                                            <div class="col-12 col-xl-6 d-flex mb-1">
                                                <span class="label flex-shrink-0 d-inline-block">姓名：</span>
                                                <span class="text-gray80">熊厲害 小姐</span>
                                            </div>
                                            <div class="col-12 col-xl-6 d-flex ps-xl-4 mb-1">
                                                <span class="label flex-shrink-0 d-inline-block ps-xl-3">電子信箱：</span>
                                                <span class="text-gray80">test@gmail.com</span>
                                            </div>
                                            <div class="col-12 col-xl-6 d-flex mb-1">
                                                <span class="label flex-shrink-0 d-inline-block">手機號碼：</span>
                                                <span class="text-gray80">0988123456</span>
                                            </div>
                                            <div class="col-12 col-xl-6 d-flex ps-xl-4 mb-1">
                                                <span class="label flex-shrink-0 d-inline-block ps-xl-3">聯絡電話：</span>
                                                <span class="text-gray80">0436098898</span>
                                            </div>
                                            <div class="col-12 d-flex mb-1">
                                                <span class="label flex-shrink-0 d-inline-block">通訊地址：</span>
                                                <span class="text-gray80">407 台中市北屯區崇德路二段46號10樓</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-6 pb-3 pb-xl-4 mb-1">
                                <div class="NotoSansTC bg-white box-shadow rounded-15 lh-18 py-4 px-3 px-md-4" data-aos="fade-up">
                                    <div class="mx-xl-3 pt-xl-3 pb-xl-2">
                                        <h3 class="title-dec-line position-relative fz-22 fw-bold les1 ps-3 mb-2 mb-lg-3">付款資訊</h3>
                                        <div class="detail-inner row ps-3 pe-md-3 pt-1">
                                            <div class="col-12 d-flex mb-1">
                                                <span class="label flex-shrink-0 d-inline-block">付款方式：</span>
                                                <span class="text-gray80">ATM 虛擬帳號匯款</span>
                                            </div>
                                            <div class="col-12 d-flex mb-1">
                                                <span class="label flex-shrink-0 d-inline-block">轉帳銀行：</span>
                                                <span class="text-gray80">013 (國泰世華)</span>
                                            </div>
                                            <div class="col-12 d-flex mb-1">
                                                <span class="label flex-shrink-0 d-inline-block">匯款帳號：</span>
                                                <span class="text-gray80">01340882213000055 (僅供本次交易繳費)
                                                </span>
                                            </div>
                                            <div class="col-12 d-flex mb-1">
                                                <span class="label flex-shrink-0 d-inline-block">轉帳期限：</span>
                                                <span class="text-gray80">2020-08-20 16:30</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-6 pb-3 pb-xl-4 mb-1">
                                <div class="NotoSansTC bg-white box-shadow rounded-15 lh-18 py-4 px-3 px-md-4" data-aos="fade-up">
                                    <div class="mx-xl-3 pt-xl-3 pb-xl-2">
                                        <h3 class="title-dec-line position-relative fz-22 fw-bold les1 ps-3 mb-2 mb-lg-3">發票開立明細</h3>
                                        <div class="detail-inner row ps-3 pe-md-3 pt-1">
                                            <div class="col-12 col-xl-6 d-flex mb-1">
                                                <span class="label flex-shrink-0 d-inline-block">發票形式：</span>
                                                <span class="text-gray80">公司雲端發票</span>
                                            </div>
                                            <div class="col-12 col-xl-6 d-flex ps-xl-4 mb-1">
                                                <span class="label flex-shrink-0 d-inline-block ps-xl-3">發票抬頭：</span>
                                                <span class="text-gray80">熊課股份有限公司</span>
                                            </div>
                                            <div class="col-12 col-xl-6 d-flex mb-1">
                                                <span class="label flex-shrink-0 d-inline-block">寄送地址：</span>
                                                <span class="text-gray80">同訂購人</span>
                                            </div>
                                            <div class="col-12 col-xl-6 d-flex ps-xl-4 mb-2">
                                                <span class="label flex-shrink-0 d-inline-block ps-xl-3">統一編號：</span>
                                                <span class="text-gray80">---</span>
                                            </div>
                                            <div class="col-12 col-xl-6 d-flex mb-1">
                                                <span class="label flex-shrink-0 d-inline-block">載具類型：</span>
                                                <span class="text-gray80">---</span>
                                            </div>
                                            <div class="col-12 col-xl-6 d-flex ps-xl-4 mb-1">
                                                <span class="label flex-shrink-0 d-inline-block ps-xl-3">發票開立：</span>
                                                <span class="text-gray80">未開立</span>
                                            </div>
                                            <div class="col-12 col-xl-6 d-flex mb-1">
                                                <span class="label flex-shrink-0 d-inline-block">載具條碼：</span>
                                                <span class="text-gray80">---</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-table mx-auto">
                            <a class="flex-center text-white bg-primary bg-hover-middleBlue rounded-30 w200 h50" href="orders">返回列表</a>
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