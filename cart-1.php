<!doctype html>
<html lang="zh-Hant">

<head>
    <?php include "header-title.php"; ?>
</head>

<body>
    <div class="wp">
        <?php include "header.php"; ?>
        <!-- main ======================================================================================= -->
        <main>
            <div class="pb-element bg-paleBlue">
                <div class="bg-white px-3 px-md-4 pb-5">
                    <div class="max1400 mx-auto pt-4 pb-xl-5">
                        <div class="breadcrumb-element d-table ms-auto py-md-2" data-aos="fade-up">
                            <ul class="ns d-flex">
                                <li class="breadcrumb-item"><a href="./">首頁</a></li>
                                <li class="breadcrumb-item active">購物車</li>
                            </ul>
                        </div>
                        <h1 class="fz-36 fw-bold text-center text-gray4D pt-4 pb-2 py-md-4 my-md-2" data-aos="fade-up">購物清單</h1>
                        <h2 class="d-none">購物清單</h2>
                        <div class="d-none d-md-flex justify-content-center text-center pt-2" data-aos="fade-up">
                            <div>
                                <div class="flex-center w70 h70 mx-auto mb-2">
                                    <div class="circle flex-center rounded-circle w70 h70 background-cover" style="background-image:url(styles/images/member/orders/step-bg.png)">
                                        <span class="fz-28 fw-bold text-white">1</span>
                                    </div>
                                </div>
                                <span class="d-block fz-18 pt-1">購物清單</span>
                            </div>
                            <div class="align-self-center mx-5 mb-4 pb-3">
                                <i class="icon-step-arrow-1 fz-14 text-blue778BBD"></i>
                            </div>
                            <div>
                                <div class="flex-center w70 h70 mx-auto mb-2">
                                    <div class="circle flex-center bg-lighterBlue rounded-circle w54 h54">
                                        <span class="fz-28 fw-bold text-white">2</span>
                                    </div>
                                </div>
                                <span class="d-block fz-18 pt-1">填寫資料</span>
                            </div>
                            <div class="align-self-center mx-5 mb-4 pb-3">
                                <i class="icon-step-arrow-2 fz-14 text-gray80"></i>
                            </div>
                            <div>
                                <div class="flex-center w70 h70 mx-auto mb-2">
                                    <div class="circle flex-center bg-lighterBlue rounded-circle w54 h54">
                                        <span class="fz-28 fw-bold text-white">3</span>
                                    </div>
                                </div>
                                <span class="d-block fz-18 pt-1">完成訂單</span>
                            </div>
                        </div>
                        <div class="max1400 mx-auto pt-md-5 mt-3 mb-lg-5">
                            <div class="row g-0">
                                <div class="col-12 col-lg-8 col-xl-9 pe-lg-4 mb-3 mb-md-4 mb-lg-0" data-aos="fade-up">
                                    <div class="me-xxl-2">
                                        <div class="bg-white box-shadow rounded-15 lh-18 py-4 px-3 px-md-4">
                                            <div class="py-md-3">
                                                <div class="title-box ms-xl-2 mb-lg-3">
                                                    <h3 class="title-dec-line position-relative fz-22 fw-bold les1 ps-3 mb-0">仲點學堂</h3>
                                                </div>
                                                <div class="content-box pb-3">
                                                    <div class="listsItem">
                                                        <div class="thead d-none d-lg-flex row align-items-center g-0 fz-18 bg-grayF8 h60 rounded-15 px-3">
                                                            <div class="info th col flex-grow-1">項目</div>
                                                            <div class="cartSellprice th col text-end pe-3 pe-xl-5">售價</div>
                                                            <div class="cartPayprice th col text-end pe-3 pe-xl-5">付款金額</div>
                                                            <div class="cartDelete th col text-center">刪除</div>
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
                                                                    <div class="cartSellprice td text-lg-end pe-3 pe-xl-5" data-th="售價">
                                                                        <span class="fz-20 text-gray80">$ 10,100</span>
                                                                    </div>
                                                                    <div class="cartPayprice td text-lg-end pe-3 pe-xl-5" data-th="付款金額">
                                                                        <span class="fz-20">$ 9,880</span>
                                                                    </div>
                                                                    <div class="cartDelete td text-lg-center">
                                                                        <button class="text-gray80 text-hover-primary p-0" onClick="courseRemove()" type="button">
                                                                            <i class="icon-trash fz-26"></i>
                                                                        </button>
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
                                                                    <div class="col-auto cartPayprice td text-end pe-lg-3 pe-xl-5">
                                                                        <span class="fz-20 text-lightRed">- $ 220</span>
                                                                    </div>
                                                                    <div class="td cartDelete d-none d-lg-block"></div>
                                                                </div>
                                                            </div>
                                                            <div class="tr listItem border-bottom-E5E5E5 px-lg-3">
                                                                <div class="main-box d-block d-lg-flex row g-0 align-items-center border-bottom-E5E5E5">
                                                                    <div class="info td flex-grow-1 pe-xl-5">
                                                                        <a class="item d-block d-xl-flex align-items-center flex-grow-1" href="course-1">
                                                                            <span class="img-inner flex-center rounded-5 overflow-hidden flex-shrink-0">
                                                                                <img class="w-100" src="styles/images/cart/recommend-1.jpg" alt="">
                                                                            </span>
                                                                            <span class="text-inner d-block les1">
                                                                                <span class="title fz-18 fw-500 text-hover-primary line2 lh-base">資深投顧王 - 為您洞悉全球財經與掌握台股主流</span>
                                                                                <span class="sub d-block text-gray80">3章節 12單元</span>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="cartSellprice td text-lg-end pe-3 pe-xl-5" data-th="售價">
                                                                        <span class="fz-20 text-gray80">$ 2,800</span>
                                                                    </div>
                                                                    <div class="cartPayprice td text-lg-end pe-3 pe-xl-5" data-th="付款金額">
                                                                        <span class="fz-20">$ 2,580</span>
                                                                    </div>
                                                                    <div class="cartDelete td text-lg-center">
                                                                        <button class="text-gray80 text-hover-primary p-0" onClick="courseRemove()" type="button">
                                                                            <i class="icon-trash fz-26"></i>
                                                                        </button>
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
                                                                    <div class="col-auto cartPayprice td text-end pe-lg-3 pe-xl-5">
                                                                        <span class="fz-20 text-lightRed">- $ 220</span>
                                                                    </div>
                                                                    <div class="td cartDelete d-none d-lg-block"></div>
                                                                </div>
                                                            </div>
                                                            <div class="tr listItem border-bottom-E5E5E5 px-lg-3">
                                                                <div class="main-box d-block d-lg-flex row g-0 align-items-center border-bottom-E5E5E5">
                                                                    <div class="info td flex-grow-1 pe-xl-5">
                                                                        <a class="item d-block d-xl-flex align-items-center flex-grow-1" href="course-1">
                                                                            <span class="img-inner flex-center rounded-5 overflow-hidden flex-shrink-0">
                                                                                <img class="w-100" src="styles/images/cart/recommend-2.jpg" alt="">
                                                                            </span>
                                                                            <span class="text-inner d-block les1">
                                                                                <span class="title fz-18 fw-500 text-hover-primary line2 lh-base">了解主力操作個股的思維與揣測未來可能的走勢與方向 </span>
                                                                                <span class="sub d-block text-gray80">3章節 12單元</span>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="cartSellprice td text-lg-end pe-3 pe-xl-5" data-th="售價">
                                                                        <span class="fz-20 text-gray80">$ 2,800</span>
                                                                    </div>
                                                                    <div class="cartPayprice td text-lg-end pe-3 pe-xl-5" data-th="付款金額">
                                                                        <span class="fz-20">$ 2,580</span>
                                                                    </div>
                                                                    <div class="cartDelete td text-lg-center">
                                                                        <button class="text-gray80 text-hover-primary p-0" onClick="courseRemove()" type="button">
                                                                            <i class="icon-trash fz-26"></i>
                                                                        </button>
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
                                                                    <div class="col-auto cartPayprice td text-end pe-lg-3 pe-xl-5">
                                                                        <span class="fz-20 text-lightRed">- $ 220</span>
                                                                    </div>
                                                                    <div class="td cartDelete d-none d-lg-block"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row g-0 align-items-center ms-xl-5 mt-4 mt-xl-5">
                                                        <span class="col-12 col-xl-auto fz-18 fw-bold me-xl-5 mb-2 mb-xl-0">使用優惠券</span>
                                                        <input class="col-12 col-lg-6 col-xl-4 border border-E5E5E5 py-2 px-3 me-md-2 mb-3 mb-lg-0" type="text" placeholder="請輸入優惠券代碼">
                                                        <button onclick="useCoupon()" class="col-auto bg-lightBlue bg-hover-primary text-white rounded-5 les1 py-2 px-4 me-4" type="button">
                                                            <span class="mx-1">使用</span>
                                                        </button>
                                                        <a class="col-auto text-decoration-underline text-gray80 text-hover-primary les1" href="coupon">查看我的優惠券</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4 col-xl-3" data-aos="fade-up">
                                    <div class="bg-white box-shadow rounded-15 lh-18 py-4 px-3 px-md-4">
                                        <div class="py-md-3 px-lg-2">
                                            <div class="title-box border-bottom-E5E5E5 pb-3">
                                                <h3 class="title-dec-line position-relative fz-22 fw-bold les1 ps-3 mb-0">訂單明細</h3>
                                            </div>
                                            <div class="content-box">
                                                <div class="border-bottom-E5E5E5 py-3">
                                                    <div class="my-md-1">
                                                        <div class="d-flex justify-content-between align-items-center mb-1">
                                                            <span class="fz-18 fw-500 text-gray4D">仲點學堂(3筆)</span>
                                                            <span class="fz-20 fw-bold">NT$ 15,700</span>
                                                        </div>
                                                        <div class="d-flex justify-content-between align-items-center mb-1">
                                                            <span class="fz-18 fw-500 text-gray4D">優惠折抵(3筆)</span>
                                                            <span class="fz-20 fw-bold">NT$ -660</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="border-bottom-E5E5E5 py-2">
                                                    <div class="my-md-1">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <span class="fz-18 fw-500 text-gray4D">總計金額</span>
                                                            <span class="fz-28 fw-bold text-lightRed">NT$ 15,040</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex row g-2 mt-4 pt-1">
                                                    <div class="col-5">
                                                        <a class="flex-center border border-primary text-primary text-hover-white bg-white bg-hover-middleBlue rounded-30 h50" href="courses">繼續選課</a>
                                                    </div>
                                                    <div class="col-7 ps-2">
                                                        <a class="flex-center text-white bg-primary bg-hover-middleBlue rounded-30 text-center h50 px-3" href="cart-2">前往結帳</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php include "recommendElement.php"; ?>
            </div>
        </main>
        <!-- main ======================================================================================= -->
        <?php include "footer.php"; ?>
    </div>
    <?php include "footer-js.php"; ?>
</body>

</html>