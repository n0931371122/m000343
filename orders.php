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
            <div class="pb-element px-3 px-md-4" style="background-image: url(styles/images/member/member/bg.jpg);">
                <div class="max1400 mx-auto py-4">
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
                    <div class="bg-white box-shadow rounded-15 lh-18 py-4 px-3 px-md-4 mb-4" data-aos="fade-up">
                        <div class="px-xl-2 py-md-2 mt-1">
                            <div class="title-box d-md-flex justify-content-between align-items-end ms-xl-2 mb-md-3 mb-lg-4 pb-lg-1">
                                <h3 class="title-dec-line position-relative fz-22 fw-bold les1 ps-3 mb-3 mb-md-0">訂單紀錄</h3>
                                <div class="select-element style-2">
                                    <select class="selectpicker">
                                        <option>最近一個月</option>
                                        <option>最近三個月</option>
                                        <option>最近六個月</option>
                                    </select>
                                </div>
                            </div>
                            <div class="content-box content-box pt-4 pt-md-0">
                                <div class="listsItem">
                                    <div class="thead d-none d-lg-flex row align-items-center g-0 fz-18 bg-grayF8 h60 rounded-15 px-3 mb-3">
                                        <div class="info th col flex-grow-1">訂單資訊</div>
                                        <div class="th col text-center">訂單金額</div>
                                        <div class="th col text-center">訂單狀態</div>
                                        <div class="th col text-center">付款方式</div>
                                        <div class="cancel th col text-center">取消</div>
                                    </div>
                                    <div class="tbody px-lg-3">
                                        <div class="tr listItem border-bottom-E5E5E5 mb-3">
                                            <div class="d-md-flex align-items-center border-dashed-bottom-E3E3E3 py-2">
                                                <div class="pe-md-4 pe-xl-5 me-xxl-5">
                                                    <span class="fz-18 fw-500 text-gray66">訂單日期：</span>
                                                    <span class="fz-20 fw-bold">2021/08/10</span>
                                                </div>
                                                <div>
                                                    <span class="fz-18 fw-500 text-gray66">訂單編號：</span>
                                                    <a href="order" class="fz-20 fw-bold text-red text-hover-primary text-decoration-underline">20210810056</a>
                                                </div>
                                            </div>
                                            <div class="main-box d-block d-lg-flex row g-0 align-items-center">
                                                <div class="info td flex-grow-1">
                                                    <a class="item d-block d-xl-flex align-items-center flex-grow-1" href="course-1">
                                                        <span class="img-inner flex-center rounded-5 overflow-hidden flex-shrink-0">
                                                            <img class="w-100" src="styles/images/member/orders/order-1.jpg" alt="">
                                                        </span>
                                                        <span class="text-inner d-block les1">
                                                            <span class="title fz-18 fw-500 text-hover-primary line2 lh-base">了解主力操作個股的思維與揣測未來可能的走勢與方向 </span>
                                                            <span class="sub d-block text-gray80">及其他3堂課程</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="td text-lg-center" data-th="訂單金額">
                                                    <span class="fz-20">$ 9,880</span>
                                                </div>
                                                <div class="td text-lg-center" data-th="訂單狀態">
                                                    <span class="fz-18">待處理</span>
                                                </div>
                                                <div class="td text-lg-center" data-th="付款方式">
                                                    <span class="fz-18">ATM</span>
                                                </div>
                                                <div class="cancel td text-lg-center" data-th="取消">
                                                    <button class="fz-18 text-primary text-hover-lightBlue text-decoration-underline p-0" type="button" onclick="orderRemove()">取消訂單</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tr listItem border-bottom-E5E5E5 mb-3">
                                            <div class="d-md-flex align-items-center border-dashed-bottom-E3E3E3 py-2">
                                                <div class="pe-md-4 pe-xl-5 me-xxl-5">
                                                    <span class="fz-18 fw-500 text-gray66">訂單日期：</span>
                                                    <span class="fz-20 fw-bold">2021/08/10</span>
                                                </div>
                                                <div>
                                                    <span class="fz-18 fw-500 text-gray66">訂單編號：</span>
                                                    <a href="order" class="fz-20 fw-bold text-red text-hover-primary text-decoration-underline">20210810056</a>
                                                </div>
                                            </div>
                                            <div class="main-box d-block d-lg-flex row g-0 align-items-center">
                                                <div class="info td flex-grow-1">
                                                    <a class="item d-block d-xl-flex align-items-center flex-grow-1" href="course-1">
                                                        <span class="img-inner flex-center rounded-5 overflow-hidden flex-shrink-0">
                                                            <img class="w-100" src="styles/images/member/orders/order-1.jpg" alt="">
                                                        </span>
                                                        <span class="text-inner d-block les1">
                                                            <span class="title fz-18 fw-500 text-hover-primary line2 lh-base">了解主力操作個股的思維與揣測未來可能的走勢與方向 </span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="td text-lg-center" data-th="訂單金額">
                                                    <span class="fz-20">$ 9,880</span>
                                                </div>
                                                <div class="td text-lg-center" data-th="訂單狀態">
                                                    <span class="fz-18">訂單成立</span>
                                                </div>
                                                <div class="td text-lg-center" data-th="付款方式">
                                                    <span class="fz-18">信用卡</span>
                                                </div>
                                                <div class="cancel td text-lg-center" data-th="取消">
                                                    <button class="fz-18 text-primary text-hover-lightBlue text-decoration-underline p-0" type="button" onclick="orderRemove()">取消訂單</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tr listItem border-bottom-E5E5E5 mb-3">
                                            <div class="d-md-flex align-items-center border-dashed-bottom-E3E3E3 py-2">
                                                <div class="pe-md-4 pe-xl-5 me-xxl-5">
                                                    <span class="fz-18 fw-500 text-gray66">訂單日期：</span>
                                                    <span class="fz-20 fw-bold">2021/08/10</span>
                                                </div>
                                                <div>
                                                    <span class="fz-18 fw-500 text-gray66">訂單編號：</span>
                                                    <a href="order" class="fz-20 fw-bold text-red text-hover-primary text-decoration-underline">20210810056</a>
                                                </div>
                                            </div>
                                            <div class="main-box d-block d-lg-flex row g-0 align-items-center">
                                                <div class="info td flex-grow-1">
                                                    <a class="item d-block d-xl-flex align-items-center flex-grow-1" href="course-1">
                                                        <span class="img-inner flex-center rounded-5 overflow-hidden flex-shrink-0">
                                                            <img class="w-100" src="styles/images/member/orders/order-1.jpg" alt="">
                                                        </span>
                                                        <span class="text-inner d-block les1">
                                                            <span class="title fz-18 fw-500 text-hover-primary line2 lh-base">了解主力操作個股的思維與揣測未來可能的走勢與方向 </span>
                                                            <span class="sub d-block text-gray80">及其他3堂課程</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="td text-lg-center" data-th="訂單金額">
                                                    <span class="fz-20">$ 9,880</span>
                                                </div>
                                                <div class="td text-lg-center" data-th="訂單狀態">
                                                    <span class="fz-18">處理中</span>
                                                </div>
                                                <div class="td text-lg-center" data-th="付款方式">
                                                    <span class="fz-18">ATM</span>
                                                </div>
                                                <div class="cancel td text-lg-center" data-th="取消">
                                                    <span class="fz-18">-</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tr listItem border-bottom-E5E5E5 mb-3">
                                            <div class="d-md-flex align-items-center border-dashed-bottom-E3E3E3 py-2">
                                                <div class="pe-md-4 pe-xl-5 me-xxl-5">
                                                    <span class="fz-18 fw-500 text-gray66">訂單日期：</span>
                                                    <span class="fz-20 fw-bold">2021/08/10</span>
                                                </div>
                                                <div>
                                                    <span class="fz-18 fw-500 text-gray66">訂單編號：</span>
                                                    <a href="order" class="fz-20 fw-bold text-red text-hover-primary text-decoration-underline">20210810056</a>
                                                </div>
                                            </div>
                                            <div class="main-box d-block d-lg-flex row g-0 align-items-center">
                                                <div class="info td flex-grow-1">
                                                    <a class="item d-block d-xl-flex align-items-center flex-grow-1" href="course-1">
                                                        <span class="img-inner flex-center rounded-5 overflow-hidden flex-shrink-0">
                                                            <img class="w-100" src="styles/images/member/orders/order-1.jpg" alt="">
                                                        </span>
                                                        <span class="text-inner d-block les1">
                                                            <span class="title fz-18 fw-500 text-hover-primary line2 lh-base">了解主力操作個股的思維與揣測未來可能的走勢與方向 </span>
                                                            <span class="sub d-block text-gray80">及其他3堂課程</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="td text-lg-center" data-th="訂單金額">
                                                    <span class="fz-20">$ 9,880</span>
                                                </div>
                                                <div class="td text-lg-center" data-th="訂單狀態">
                                                    <span class="fz-18">訂單取消</span>
                                                </div>
                                                <div class="td text-lg-center" data-th="付款方式">
                                                    <span class="fz-18">-</span>
                                                </div>
                                                <div class="cancel td text-lg-center" data-th="取消">
                                                    <span class="fz-18">-</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tr listItem border-bottom-E5E5E5 mb-3">
                                            <div class="d-md-flex align-items-center border-dashed-bottom-E3E3E3 py-2">
                                                <div class="pe-md-4 pe-xl-5 me-xxl-5">
                                                    <span class="fz-18 fw-500 text-gray66">訂單日期：</span>
                                                    <span class="fz-20 fw-bold">2021/08/10</span>
                                                </div>
                                                <div>
                                                    <span class="fz-18 fw-500 text-gray66">訂單編號：</span>
                                                    <a href="order" class="fz-20 fw-bold text-red text-hover-primary text-decoration-underline">20210810056</a>
                                                </div>
                                            </div>
                                            <div class="main-box d-block d-lg-flex row g-0 align-items-center">
                                                <div class="info td flex-grow-1">
                                                    <a class="item d-block d-xl-flex align-items-center flex-grow-1" href="course-1">
                                                        <span class="img-inner flex-center rounded-5 overflow-hidden flex-shrink-0">
                                                            <img class="w-100" src="styles/images/member/orders/order-1.jpg" alt="">
                                                        </span>
                                                        <span class="text-inner d-block les1">
                                                            <span class="title fz-18 fw-500 text-hover-primary line2 lh-base">了解主力操作個股的思維與揣測未來可能的走勢與方向 </span>
                                                            <span class="sub d-block text-gray80">及其他3堂課程</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="td text-lg-center" data-th="訂單金額">
                                                    <span class="fz-20">$ 9,880</span>
                                                </div>
                                                <div class="td text-lg-center" data-th="訂單狀態">
                                                    <span class="fz-18">已完成</span>
                                                </div>
                                                <div class="td text-lg-center" data-th="付款方式">
                                                    <span class="fz-18">信用卡</span>
                                                </div>
                                                <div class="cancel td text-lg-center" data-th="取消">
                                                    <span class="fz-18">-</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="py-4 py-md-5 mt-xl-4 mb-xl-2">
                                    <?php include "pageElement.php"; ?>
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