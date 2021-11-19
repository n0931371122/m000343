<!doctype html>
<html lang="zh-Hant">

<head>
    <?php include "header-title.php"; ?>
</head>

<body>
    <div class="wp" id="course">
        <?php include "header.php"; ?>
        <!-- main ======================================================================================= -->
        <main>
            <div class="pb-element">
                <?php include "courseBannerEmement.php"; ?>
                <?php include "courseElement.php"; ?>
                <div class="tabs-block bg-white z-2">
                    <div class="max1400 mx-auto">
                        <h2 class="d-none">討論區</h2>
                        <div class="row g-0 fz-18 border-0 les1">
                            <a href="course-1?nav=target" class="col-3 py-3 py-lg-4">課程介紹</a>
                            <a href="course-2?nav=target" class="col-3 py-3 py-lg-4">公佈欄</a>
                            <a href="course-3?nav=target" class="col-3 py-3 py-lg-4">課程講義</a>
                            <a href="course-4?nav=target" class="col-3 py-3 py-lg-4 active">討論區</a>
                        </div>
                    </div>
                </div>
                <div class="detail-section bg-blueF6FAFF les1 pt-4 pb-3 px-3 px-md-4">
                    <div class="py-lg-5">
                        <div class="max1300 mx-auto">
                            <div class="d-md-flex justify-content-between align-items-end border-bottom-E5E5E5 pb-5">
                                <div class="pe-md-4 pb-3 pb-md-0">
                                    <p class="fz-24 fw-bold text-blue0061A5 mb-2 pb-2" data-aos="fade-up">一起討論課程相關的問題！</p>
                                    <p class="mb-0" data-aos="fade-up">這裡是專屬於課堂同學及老師的討論區，對於課程內容有任何想法或想要問老師問題，都可以在這裡討論！</p>
                                </div>
                                <div data-aos="fade-up">
                                    <a class="flex-center flex-shrink-0 text-white bg-blue5A91E1 bg-hover-primary w200 h50 rounded-30" href="course-4-detail?nav=target">
                                        <i class="icon-dialog-3"></i>
                                        <span>發表留言</span>
                                    </a>
                                </div>
                            </div>
                            <div class="listsItem lh-18 pb-3">
                                <div class="tbody">
                                    <div class="tr listItem bg-white border-bottom-E5E5E5 mb-2 px-3 px-md-4 px-xl-0" data-aos="fade-up">
                                        <div class="messageTitle d-block d-lg-flex row g-0 align-items-center pe-xl-4">
                                            <div class="ask td">
                                                <div class="d-flex align-items-center ps-xl-4">
                                                    <div class="w60 h60 rounded-circle overflow-hidden">
                                                        <img src="styles/images/lecturer/person.jpg" alt="">
                                                    </div>
                                                    <div class="fw-500 ms-3 mt-1">
                                                        <span class="name d-lg-block fz-18">熊促咪</span>
                                                        <span class="d-lg-block text-gray66">已購買 <span class="NotoSansTC text-blue5A91E1">5</span> 堂</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="td flex-grow-1 mt-3 mt-lg-0 me-xl-3">
                                                <button class="messageToggle text-start p-0" type="button">
                                                    <span class="message d-block fz-18 fw-500">委託書的認識：慘痛案例分享的問題討論，對於課程內容有想法想要請教老師，謝謝</span>
                                                    <span class="d-block fz-18 text-grayB2">
                                                        <span>2021/06/28</span>
                                                        <span class="ms-2">15:25</span>
                                                        <i class="icon-dialog fz-15 ms-2"></i>
                                                        <i class="icon-dialog-2 fz-15 ms-2"></i>
                                                        <span>2</span>
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="messageContent pe-xl-4">
                                            <div class="d-block d-lg-flex row g-0 pe-xl-3">
                                                <div class="ask td"></div>
                                                <div class="td flex-grow-1 border-dashed-top-E3E3E3 pt-3 pt-md-4 pb-5">
                                                    <div class="border-bottom-E5E5E5 pb-3 mb-4">
                                                        <div class="pe-xl-5">
                                                            <span class="d-block">大家好：</span>
                                                            <p class="mb-2">委託書的認識：慘痛案例分享的問題討論這裡是專屬於課堂同學及老師的討論區，對於課程內容有想法想要請教老師，是否可提供參考範例?</p>
                                                        </div>
                                                    </div>
                                                    <div class="pt-2">
                                                        <div class="d-flex">
                                                            <div class="w48 h48 rounded-circle overflow-hidden">
                                                                <img src="styles/images/lecturer/person.jpg" alt="">
                                                            </div>
                                                            <span class="d-block flex-grow-1 fz-18 fw-500 mt-2 ps-3">熊促咪</span>
                                                        </div>
                                                        <div class="d-flex">
                                                            <div class="d-none d-md-block w48"></div>
                                                            <form class="form style-2 flex-grow-1 ps-md-3 pt-3 pt-md-0" action="course-4?nav=target">
                                                                <div class="form-field">
                                                                    <textarea class="flex-grow-1 w-100 border border-grayE5 rounded-10 px-3 py-2" name="content-1" id="content-1" rows="4" placeholder="留言"></textarea>
                                                                </div>
                                                                <div class="d-flex justify-content-end mt-3">
                                                                    <button class="text-white bg-gray80 bg-hover-primary rounded-5 w90 h40 me-2" type="reset">取消</button>
                                                                    <button class="text-white bg-blue5A91E1 bg-hover-primary rounded-5 w90 h40" type="submit">送出</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div class="bg-blueF6FAFF d-md-flex border-bottom-E5E5E5 px-3 px-md-4 py-3 mt-4">
                                                        <div class="w48 h48 rounded-circle overflow-hidden flex-shrink-0">
                                                            <img src="styles/images/lecturer/person-1.jpg" alt="">
                                                        </div>
                                                        <div class="ps-md-3 pt-2">
                                                            <div class="d-flex align-items-center pt-1 mb-3">
                                                                <a class="fz-18 fw-500 text-hover-primary me-3" href="course-lecturer">謝濱展</a>
                                                                <span class="d-block fw-500 bg-blue5A91E1 text-white rounded-30 lh-lg px-3">授課講師</span>
                                                            </div>
                                                            <div>
                                                                <span class="d-block">你好：</span>
                                                                <p class="mb-2">委託書的認識：慘痛案例分享的問題討論這裡是專屬於課堂同學及老師的討論區，對於課程內容有想法想要請教老師，已提供範例請參考</p>
                                                                <span class="d-block text-grayB2 mb-1"> 2021/06/28 17:50</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="border-bottom-E5E5E5 ps-3 ps-md-4 py-3">
                                                        <div class="pt-1 pb-2">
                                                            <div class="d-flex">
                                                                <div class="w48 h48 rounded-circle overflow-hidden">
                                                                    <img src="styles/images/lecturer/person.jpg" alt="">
                                                                </div>
                                                                <div class="d-flex flex-grow-1 align-items-center my-2 ps-3">
                                                                    <span class="d-block fz-18 fw-500">張思維</span>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="d-none d-md-block w48"></div>
                                                                <div class="ps-md-3 pt-3 pt-md-0">
                                                                    <div class="mb-3">
                                                                        <p class="mb-0">我也想了解，謝謝</p>
                                                                    </div>
                                                                    <span class="d-block text-grayB2">16 小時前</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="bg-grayFA ps-3 ps-md-4 py-3">
                                                        <div class="pt-1 pb-2">
                                                            <div class="d-flex">
                                                                <div class="w48 h48 rounded-circle overflow-hidden">
                                                                    <img src="styles/images/lecturer/person.jpg" alt="">
                                                                </div>
                                                                <div class="d-flex flex-grow-1 align-items-center my-2 ps-3">
                                                                    <span class="d-block fz-18 fw-500">謝同學</span>
                                                                    <span class="d-block fz-15 text-white bg-gray80 rounded-30 lh-sm px-2 py-1 ms-2">
                                                                        <span class="mx-1">本文作者</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="d-none d-md-block w48"></div>
                                                                <div class="ps-md-3 pt-3 pt-md-0">
                                                                    <div class="mb-3">
                                                                        <p class="mb-0">已收到資訊，謝謝回覆</p>
                                                                    </div>
                                                                    <span class="d-block text-grayB2">10 小時前</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tr listItem bg-white border-bottom-E5E5E5 mb-2 px-3 px-md-4 px-xl-0" data-aos="fade-up">
                                        <div class="messageTitle d-block d-lg-flex row g-0 align-items-center pe-xl-4">
                                            <div class="ask td">
                                                <div class="d-flex align-items-center ps-xl-4">
                                                    <div class="w60 h60 rounded-circle overflow-hidden">
                                                        <img src="styles/images/lecturer/person.jpg" alt="">
                                                    </div>
                                                    <div class="fw-500 ms-3 mt-1">
                                                        <span class="name d-lg-block fz-18">熊霸</span>
                                                        <span class="d-lg-block text-gray66">已購買 <span class="NotoSansTC text-blue5A91E1">3</span> 堂</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="td flex-grow-1 mt-3 mt-lg-0 me-xl-3">
                                                <button class="messageToggle text-start p-0" type="button">
                                                    <span class="message d-block fz-18 fw-500">對於 第2章第3單元 的課程內容有想法想要請教，謝謝</span>
                                                    <span class="d-block fz-18 text-grayB2">
                                                        <span>2021/06/28</span>
                                                        <span class="ms-2">15:25</span>
                                                        <i class="icon-dialog fz-15 ms-2"></i>
                                                        <i class="icon-dialog-2 fz-15 ms-2"></i>
                                                        <span>2</span>
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="messageContent pe-xl-4">
                                            <div class="d-block d-lg-flex row g-0 pe-xl-3">
                                                <div class="ask td"></div>
                                                <div class="td flex-grow-1 border-dashed-top-E3E3E3 pt-3 pt-md-4 pb-5">
                                                    <div class="border-bottom-E5E5E5 pb-3 mb-4">
                                                        <div class="pe-xl-5">
                                                            <span class="d-block">大家好：</span>
                                                            <p class="mb-2">委託書的認識：慘痛案例分享的問題討論這裡是專屬於課堂同學及老師的討論區，對於課程內容有想法想要請教老師，是否可提供參考範例?</p>
                                                        </div>
                                                    </div>
                                                    <div class="pt-2">
                                                        <div class="d-flex">
                                                            <div class="w48 h48 rounded-circle overflow-hidden">
                                                                <img src="styles/images/lecturer/person.jpg" alt="">
                                                            </div>
                                                            <span class="d-block flex-grow-1 fz-18 fw-500 mt-2 ps-3">熊促咪</span>
                                                        </div>
                                                        <div class="d-flex">
                                                            <div class="d-none d-md-block w48"></div>
                                                            <form class="form style-2 flex-grow-1 ps-md-3 pt-3 pt-md-0" action="course-4?nav=target">
                                                                <div class="form-field">
                                                                    <textarea class="flex-grow-1 w-100 border border-grayE5 rounded-10 px-3 py-2" name="content-2" id="content-2" rows="4" placeholder="留言"></textarea>
                                                                </div>
                                                                <div class="d-flex justify-content-end mt-3">
                                                                    <button class="text-white bg-gray80 bg-hover-primary rounded-5 w90 h40 me-2" type="reset">取消</button>
                                                                    <button class="text-white bg-blue5A91E1 bg-hover-primary rounded-5 w90 h40" type="submit">送出</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div class="bg-blueF6FAFF d-md-flex border-bottom-E5E5E5 px-3 px-md-4 py-3 mt-4">
                                                        <div class="w48 h48 rounded-circle overflow-hidden flex-shrink-0">
                                                            <img src="styles/images/lecturer/person-1.jpg" alt="">
                                                        </div>
                                                        <div class="ps-md-3 pt-2">
                                                            <div class="d-flex align-items-center pt-1 mb-3">
                                                                <a class="fz-18 fw-500 text-hover-primary me-3" href="course-lecturer">謝濱展</a>
                                                                <span class="d-block fw-500 bg-blue5A91E1 text-white rounded-30 lh-lg px-3">授課講師</span>
                                                            </div>
                                                            <div>
                                                                <span class="d-block">你好：</span>
                                                                <p class="mb-2">委託書的認識：慘痛案例分享的問題討論這裡是專屬於課堂同學及老師的討論區，對於課程內容有想法想要請教老師，已提供範例請參考</p>
                                                                <span class="d-block text-grayB2 mb-1"> 2021/06/28 17:50</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="border-bottom-E5E5E5 ps-3 ps-md-4 py-3">
                                                        <div class="pt-1 pb-2">
                                                            <div class="d-flex">
                                                                <div class="w48 h48 rounded-circle overflow-hidden">
                                                                    <img src="styles/images/lecturer/person.jpg" alt="">
                                                                </div>
                                                                <div class="d-flex flex-grow-1 align-items-center my-2 ps-3">
                                                                    <span class="d-block fz-18 fw-500">張思維</span>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="d-none d-md-block w48"></div>
                                                                <div class="ps-md-3 pt-3 pt-md-0">
                                                                    <div class="mb-3">
                                                                        <p class="mb-0">我也想了解，謝謝</p>
                                                                    </div>
                                                                    <span class="d-block text-grayB2">16 小時前</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="bg-grayFA ps-3 ps-md-4 py-3">
                                                        <div class="pt-1 pb-2">
                                                            <div class="d-flex">
                                                                <div class="w48 h48 rounded-circle overflow-hidden">
                                                                    <img src="styles/images/lecturer/person.jpg" alt="">
                                                                </div>
                                                                <div class="d-flex flex-grow-1 align-items-center my-2 ps-3">
                                                                    <span class="d-block fz-18 fw-500">謝同學</span>
                                                                    <span class="d-block fz-15 text-white bg-gray80 rounded-30 lh-sm px-2 py-1 ms-2">
                                                                        <span class="mx-1">本文作者</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="d-none d-md-block w48"></div>
                                                                <div class="ps-md-3 pt-3 pt-md-0">
                                                                    <div class="mb-3">
                                                                        <p class="mb-0">已收到資訊，謝謝回覆</p>
                                                                    </div>
                                                                    <span class="d-block text-grayB2">10 小時前</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tr listItem bg-white border-bottom-E5E5E5 mb-2 px-3 px-md-4 px-xl-0" data-aos="fade-up">
                                        <div class="messageTitle d-block d-lg-flex row g-0 align-items-center pe-xl-4">
                                            <div class="ask td">
                                                <div class="d-flex align-items-center ps-xl-4">
                                                    <div class="w60 h60 rounded-circle overflow-hidden">
                                                        <img src="styles/images/lecturer/person.jpg" alt="">
                                                    </div>
                                                    <div class="fw-500 ms-3 mt-1">
                                                        <span class="name d-lg-block fz-18">熊蓋豪</span>
                                                        <span class="d-lg-block text-gray66">已購買 <span class="NotoSansTC text-blue5A91E1">119</span> 堂</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="td flex-grow-1 mt-3 mt-lg-0 me-xl-3">
                                                <button class="messageToggle text-start p-0" type="button">
                                                    <span class="message d-block fz-18 fw-500">對於 第2章第3單元 的課程內容有想法想要請教，謝謝</span>
                                                    <span class="d-block fz-18 text-grayB2">
                                                        <span>2021/06/28</span>
                                                        <span class="ms-2">15:25</span>
                                                        <i class="icon-dialog fz-15 ms-2"></i>
                                                        <i class="icon-dialog-2 fz-15 ms-2"></i>
                                                        <span>2</span>
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="messageContent pe-xl-4">
                                            <div class="d-block d-lg-flex row g-0 pe-xl-3">
                                                <div class="ask td"></div>
                                                <div class="td flex-grow-1 border-dashed-top-E3E3E3 pt-3 pt-md-4 pb-5">
                                                    <div class="border-bottom-E5E5E5 pb-3 mb-4">
                                                        <div class="pe-xl-5">
                                                            <span class="d-block">大家好：</span>
                                                            <p class="mb-2">委託書的認識：慘痛案例分享的問題討論這裡是專屬於課堂同學及老師的討論區，對於課程內容有想法想要請教老師，是否可提供參考範例?</p>
                                                        </div>
                                                    </div>
                                                    <div class="pt-2">
                                                        <div class="d-flex">
                                                            <div class="w48 h48 rounded-circle overflow-hidden">
                                                                <img src="styles/images/lecturer/person.jpg" alt="">
                                                            </div>
                                                            <span class="d-block flex-grow-1 fz-18 fw-500 mt-2 ps-3">熊促咪</span>
                                                        </div>
                                                        <div class="d-flex">
                                                            <div class="d-none d-md-block w48"></div>
                                                            <form class="form style-2 flex-grow-1 ps-md-3 pt-3 pt-md-0" action="course-4?nav=target">
                                                                <div class="form-field">
                                                                    <textarea class="flex-grow-1 w-100 border border-grayE5 rounded-10 px-3 py-2" name="content-3" id="content-3" rows="4" placeholder="留言"></textarea>
                                                                </div>
                                                                <div class="d-flex justify-content-end mt-3">
                                                                    <button class="text-white bg-gray80 bg-hover-primary rounded-5 w90 h40 me-2" type="reset">取消</button>
                                                                    <button class="text-white bg-blue5A91E1 bg-hover-primary rounded-5 w90 h40" type="submit">送出</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div class="bg-blueF6FAFF d-md-flex border-bottom-E5E5E5 px-3 px-md-4 py-3 mt-4">
                                                        <div class="w48 h48 rounded-circle overflow-hidden flex-shrink-0">
                                                            <img src="styles/images/lecturer/person-1.jpg" alt="">
                                                        </div>
                                                        <div class="ps-md-3 pt-2">
                                                            <div class="d-flex align-items-center pt-1 mb-3">
                                                                <a class="fz-18 fw-500 text-hover-primary me-3" href="course-lecturer">謝濱展</a>
                                                                <span class="d-block fw-500 bg-blue5A91E1 text-white rounded-30 lh-lg px-3">授課講師</span>
                                                            </div>
                                                            <div>
                                                                <span class="d-block">你好：</span>
                                                                <p class="mb-2">委託書的認識：慘痛案例分享的問題討論這裡是專屬於課堂同學及老師的討論區，對於課程內容有想法想要請教老師，已提供範例請參考</p>
                                                                <span class="d-block text-grayB2 mb-1"> 2021/06/28 17:50</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="border-bottom-E5E5E5 ps-3 ps-md-4 py-3">
                                                        <div class="pt-1 pb-2">
                                                            <div class="d-flex">
                                                                <div class="w48 h48 rounded-circle overflow-hidden">
                                                                    <img src="styles/images/lecturer/person.jpg" alt="">
                                                                </div>
                                                                <div class="d-flex flex-grow-1 align-items-center my-2 ps-3">
                                                                    <span class="d-block fz-18 fw-500">張思維</span>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="d-none d-md-block w48"></div>
                                                                <div class="ps-md-3 pt-3 pt-md-0">
                                                                    <div class="mb-3">
                                                                        <p class="mb-0">我也想了解，謝謝</p>
                                                                    </div>
                                                                    <span class="d-block text-grayB2">16 小時前</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="border-bottom-E5E5E5 bg-grayFA ps-3 ps-md-4 py-3">
                                                        <div class="pt-1 pb-2">
                                                            <div class="d-flex">
                                                                <div class="w48 h48 rounded-circle overflow-hidden">
                                                                    <img src="styles/images/lecturer/person.jpg" alt="">
                                                                </div>
                                                                <div class="d-flex flex-grow-1 align-items-center my-2 ps-3">
                                                                    <span class="d-block fz-18 fw-500">謝同學</span>
                                                                    <span class="d-block fz-15 text-white bg-gray80 rounded-30 lh-sm px-2 py-1 ms-2">
                                                                        <span class="mx-1">本文作者</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="d-none d-md-block w48"></div>
                                                                <div class="ps-md-3 pt-3 pt-md-0">
                                                                    <div class="mb-3">
                                                                        <p class="mb-0">已收到資訊，謝謝回覆</p>
                                                                    </div>
                                                                    <span class="d-block text-grayB2">10 小時前</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ps-3 ps-md-4 py-3">
                                                        <div class="pt-1 pb-2">
                                                            <div class="d-flex">
                                                                <div class="w48 h48 rounded-circle overflow-hidden">
                                                                    <img src="styles/images/lecturer/person.jpg" alt="">
                                                                </div>
                                                                <div class="d-flex flex-grow-1 align-items-center my-2 ps-3">
                                                                    <span class="d-block fz-18 fw-500">張思維</span>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="d-none d-md-block w48"></div>
                                                                <div class="ps-md-3 pt-3 pt-md-0">
                                                                    <div class="mb-3">
                                                                        <p class="mb-0">我也想了解，謝謝</p>
                                                                    </div>
                                                                    <span class="d-block text-grayB2">16 小時前</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tr listItem bg-white border-bottom-E5E5E5 mb-2 px-3 px-md-4 px-xl-0" data-aos="fade-up">
                                        <div class="messageTitle d-block d-lg-flex row g-0 align-items-center pe-xl-4">
                                            <div class="ask td">
                                                <div class="d-flex align-items-center ps-xl-4">
                                                    <div class="w60 h60 rounded-circle overflow-hidden">
                                                        <img src="styles/images/lecturer/person.jpg" alt="">
                                                    </div>
                                                    <div class="fw-500 ms-3 mt-1">
                                                        <span class="name d-lg-block fz-18">熊霸</span>
                                                        <span class="d-lg-block text-gray66">已購買 <span class="NotoSansTC text-blue5A91E1">13</span> 堂</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="td flex-grow-1 mt-3 mt-lg-0 me-xl-3">
                                                <button class="messageToggle text-start p-0" type="button">
                                                    <span class="message d-block fz-18 fw-500">委託書的認識：慘痛案例分享的問題討論，對於課程內容有想法想要請教老師，謝謝</span>
                                                    <span class="d-block fz-18 text-grayB2">
                                                        <span>2021/06/28</span>
                                                        <span class="ms-2">15:25</span>
                                                        <i class="icon-dialog fz-15 ms-2"></i>
                                                        <i class="icon-dialog-2 fz-15 ms-2"></i>
                                                        <span>2</span>
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="messageContent pe-xl-4">
                                            <div class="d-block d-lg-flex row g-0 pe-xl-3">
                                                <div class="ask td"></div>
                                                <div class="td flex-grow-1 border-dashed-top-E3E3E3 pt-3 pt-md-4 pb-5">
                                                    <div class="border-bottom-E5E5E5 pb-3 mb-4">
                                                        <div class="pe-xl-5">
                                                            <span class="d-block">大家好：</span>
                                                            <p class="mb-2">委託書的認識：慘痛案例分享的問題討論這裡是專屬於課堂同學及老師的討論區，對於課程內容有想法想要請教老師，是否可提供參考範例?</p>
                                                        </div>
                                                    </div>
                                                    <div class="pt-2">
                                                        <div class="d-flex">
                                                            <div class="w48 h48 rounded-circle overflow-hidden">
                                                                <img src="styles/images/lecturer/person.jpg" alt="">
                                                            </div>
                                                            <span class="d-block flex-grow-1 fz-18 fw-500 mt-2 ps-3">熊促咪</span>
                                                        </div>
                                                        <div class="d-flex">
                                                            <div class="d-none d-md-block w48"></div>
                                                            <form class="form style-2 flex-grow-1 ps-md-3 pt-3 pt-md-0" action="course-4?nav=target">
                                                                <div class="form-field">
                                                                    <textarea class="flex-grow-1 w-100 border border-grayE5 rounded-10 px-3 py-2" name="content-4" id="content-4" rows="4" placeholder="留言"></textarea>
                                                                </div>
                                                                <div class="d-flex justify-content-end mt-3">
                                                                    <button class="text-white bg-gray80 bg-hover-primary rounded-5 w90 h40 me-2" type="reset">取消</button>
                                                                    <button class="text-white bg-blue5A91E1 bg-hover-primary rounded-5 w90 h40" type="submit">送出</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div class="bg-blueF6FAFF d-md-flex border-bottom-E5E5E5 px-3 px-md-4 py-3 mt-4">
                                                        <div class="w48 h48 rounded-circle overflow-hidden flex-shrink-0">
                                                            <img src="styles/images/lecturer/person-1.jpg" alt="">
                                                        </div>
                                                        <div class="ps-md-3 pt-2">
                                                            <div class="d-flex align-items-center pt-1 mb-3">
                                                                <a class="fz-18 fw-500 text-hover-primary me-3" href="course-lecturer">謝濱展</a>
                                                                <span class="d-block fw-500 bg-blue5A91E1 text-white rounded-30 lh-lg px-3">授課講師</span>
                                                            </div>
                                                            <div>
                                                                <span class="d-block">你好：</span>
                                                                <p class="mb-2">委託書的認識：慘痛案例分享的問題討論這裡是專屬於課堂同學及老師的討論區，對於課程內容有想法想要請教老師，已提供範例請參考</p>
                                                                <span class="d-block text-grayB2 mb-1"> 2021/06/28 17:50</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="border-bottom-E5E5E5 ps-3 ps-md-4 py-3">
                                                        <div class="pt-1 pb-2">
                                                            <div class="d-flex">
                                                                <div class="w48 h48 rounded-circle overflow-hidden">
                                                                    <img src="styles/images/lecturer/person.jpg" alt="">
                                                                </div>
                                                                <div class="d-flex flex-grow-1 align-items-center my-2 ps-3">
                                                                    <span class="d-block fz-18 fw-500">張思維</span>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="d-none d-md-block w48"></div>
                                                                <div class="ps-md-3 pt-3 pt-md-0">
                                                                    <div class="mb-3">
                                                                        <p class="mb-0">我也想了解，謝謝</p>
                                                                    </div>
                                                                    <span class="d-block text-grayB2">16 小時前</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="bg-grayFA ps-3 ps-md-4 py-3">
                                                        <div class="pt-1 pb-2">
                                                            <div class="d-flex">
                                                                <div class="w48 h48 rounded-circle overflow-hidden">
                                                                    <img src="styles/images/lecturer/person.jpg" alt="">
                                                                </div>
                                                                <div class="d-flex flex-grow-1 align-items-center my-2 ps-3">
                                                                    <span class="d-block fz-18 fw-500">謝同學</span>
                                                                    <span class="d-block fz-15 text-white bg-gray80 rounded-30 lh-sm px-2 py-1 ms-2">
                                                                        <span class="mx-1">本文作者</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="d-none d-md-block w48"></div>
                                                                <div class="ps-md-3 pt-3 pt-md-0">
                                                                    <div class="mb-3">
                                                                        <p class="mb-0">已收到資訊，謝謝回覆</p>
                                                                    </div>
                                                                    <span class="d-block text-grayB2">10 小時前</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tr listItem bg-white border-bottom-E5E5E5 mb-2 px-3 px-md-4 px-xl-0" data-aos="fade-up">
                                        <div class="messageTitle d-block d-lg-flex row g-0 align-items-center pe-xl-4">
                                            <div class="ask td">
                                                <div class="d-flex align-items-center ps-xl-4">
                                                    <div class="w60 h60 rounded-circle overflow-hidden">
                                                        <img src="styles/images/lecturer/person.jpg" alt="">
                                                    </div>
                                                    <div class="fw-500 ms-3 mt-1">
                                                        <span class="name d-lg-block fz-18">熊霸</span>
                                                        <span class="d-lg-block text-gray66">已購買 <span class="NotoSansTC text-blue5A91E1">13</span> 堂</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="td flex-grow-1 mt-3 mt-lg-0 me-xl-3">
                                                <button class="messageToggle text-start p-0" type="button">
                                                    <span class="message d-block fz-18 fw-500">委託書的認識：慘痛案例分享的問題討論，對於課程內容有想法想要請教老師，謝謝</span>
                                                    <span class="d-block fz-18 text-grayB2">
                                                        <span>2021/06/28</span>
                                                        <span class="ms-2">15:25</span>
                                                        <i class="icon-dialog fz-15 ms-2"></i>
                                                        <i class="icon-dialog-2 fz-15 ms-2"></i>
                                                        <span>2</span>
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="messageContent pe-xl-4">
                                            <div class="d-block d-lg-flex row g-0 pe-xl-3">
                                                <div class="ask td"></div>
                                                <div class="td flex-grow-1 border-dashed-top-E3E3E3 pt-3 pt-md-4 pb-5">
                                                    <div class="border-bottom-E5E5E5 pb-3 mb-4">
                                                        <div class="pe-xl-5">
                                                            <span class="d-block">大家好：</span>
                                                            <p class="mb-2">委託書的認識：慘痛案例分享的問題討論這裡是專屬於課堂同學及老師的討論區，對於課程內容有想法想要請教老師，是否可提供參考範例?</p>
                                                        </div>
                                                    </div>
                                                    <div class="pt-2">
                                                        <div class="d-flex">
                                                            <div class="w48 h48 rounded-circle overflow-hidden">
                                                                <img src="styles/images/lecturer/person.jpg" alt="">
                                                            </div>
                                                            <span class="d-block flex-grow-1 fz-18 fw-500 mt-2 ps-3">熊促咪</span>
                                                        </div>
                                                        <div class="d-flex">
                                                            <div class="d-none d-md-block w48"></div>
                                                            <form class="form style-2 flex-grow-1 ps-md-3 pt-3 pt-md-0" action="course-4?nav=target">
                                                                <div class="form-field">
                                                                    <textarea class="flex-grow-1 w-100 border border-grayE5 rounded-10 px-3 py-2" name="content-5" id="content-5" rows="4" placeholder="留言"></textarea>
                                                                </div>
                                                                <div class="d-flex justify-content-end mt-3">
                                                                    <button class="text-white bg-gray80 bg-hover-primary rounded-5 w90 h40 me-2" type="reset">取消</button>
                                                                    <button class="text-white bg-blue5A91E1 bg-hover-primary rounded-5 w90 h40" type="submit">送出</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div class="bg-blueF6FAFF d-md-flex border-bottom-E5E5E5 px-3 px-md-4 py-3 mt-4">
                                                        <div class="w48 h48 rounded-circle overflow-hidden flex-shrink-0">
                                                            <img src="styles/images/lecturer/person-1.jpg" alt="">
                                                        </div>
                                                        <div class="ps-md-3 pt-2">
                                                            <div class="d-flex align-items-center pt-1 mb-3">
                                                                <a class="fz-18 fw-500 text-hover-primary me-3" href="course-lecturer">謝濱展</a>
                                                                <span class="d-block fw-500 bg-blue5A91E1 text-white rounded-30 lh-lg px-3">授課講師</span>
                                                            </div>
                                                            <div>
                                                                <span class="d-block">你好：</span>
                                                                <p class="mb-2">委託書的認識：慘痛案例分享的問題討論這裡是專屬於課堂同學及老師的討論區，對於課程內容有想法想要請教老師，已提供範例請參考</p>
                                                                <span class="d-block text-grayB2 mb-1"> 2021/06/28 17:50</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="border-bottom-E5E5E5 ps-3 ps-md-4 py-3">
                                                        <div class="pt-1 pb-2">
                                                            <div class="d-flex">
                                                                <div class="w48 h48 rounded-circle overflow-hidden">
                                                                    <img src="styles/images/lecturer/person.jpg" alt="">
                                                                </div>
                                                                <div class="d-flex flex-grow-1 align-items-center my-2 ps-3">
                                                                    <span class="d-block fz-18 fw-500">張思維</span>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="d-none d-md-block w48"></div>
                                                                <div class="ps-md-3 pt-3 pt-md-0">
                                                                    <div class="mb-3">
                                                                        <p class="mb-0">我也想了解，謝謝</p>
                                                                    </div>
                                                                    <span class="d-block text-grayB2">16 小時前</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="bg-grayFA ps-3 ps-md-4 py-3">
                                                        <div class="pt-1 pb-2">
                                                            <div class="d-flex">
                                                                <div class="w48 h48 rounded-circle overflow-hidden">
                                                                    <img src="styles/images/lecturer/person.jpg" alt="">
                                                                </div>
                                                                <div class="d-flex flex-grow-1 align-items-center my-2 ps-3">
                                                                    <span class="d-block fz-18 fw-500">謝同學</span>
                                                                    <span class="d-block fz-15 text-white bg-gray80 rounded-30 lh-sm px-2 py-1 ms-2">
                                                                        <span class="mx-1">本文作者</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="d-none d-md-block w48"></div>
                                                                <div class="ps-md-3 pt-3 pt-md-0">
                                                                    <div class="mb-3">
                                                                        <p class="mb-0">已收到資訊，謝謝回覆</p>
                                                                    </div>
                                                                    <span class="d-block text-grayB2">10 小時前</span>
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