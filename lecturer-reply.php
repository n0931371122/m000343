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
            <div class="pb-element px-3 px-md-4" style="background-image: url(styles/images/lecturer/bg.jpg);">
                <div class="max1400 mx-auto pt-4 pb-5">
                    <div class="breadcrumb-element d-table ms-auto py-md-2" data-aos="fade-up">
                        <ul class="ns d-flex">
                            <li class="breadcrumb-item"><a href="./">首頁</a></li>
                            <li class="breadcrumb-item active">講師專區</li>
                        </ul>
                    </div>
                    <h1 class="fz-36 fw-bold text-center pt-4 pb-2 py-md-4 my-md-2" data-aos="fade-up">講師專區</h1>
                    <h2 class="d-none">課程討論紀錄</h2>
                    <div class="pt-3 mb-md-3 mb-xl-5 pb-4">
                        <div class="links-element max600" data-aos="fade-up">
                            <div class="toggle">
                                <span>分潤資訊</span>
                                <i class="icon-plus"></i>
                            </div>
                            <div class="links row g-0">
                                <a class="d-block col-12 col-md" href="lecturer">課程查詢</a>
                                <a class="d-block col-12 col-md" href="lecturer-profit">分潤資訊</a>
                                <a class="d-block col-12 col-md active" href="lecturer-discussion">課程討論紀錄</a>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white box-shadow rounded-15 lh-18 py-4 px-3 px-md-4 mb-4" data-aos="fade-up">
                        <div class="px-xl-2 py-md-2 mx-xl-1">
                            <div class="border-bottom-E5E5E5 pb-4 pb-md-5 mb-4 mb-md-5">
                                <div class="title-box d-md-flex justify-content-between align-items-end border-bottom-E5E5E5 ms-xl-2 mb-md-3 mb-lg-4 pb-3 pb-lg-4 pt-1">
                                    <h3 class="title-dec-line position-relative fz-22 fw-bold les1 ps-3 mb-3 mb-md-0">回覆留言</h3>
                                    <div class="select-element style-2">
                                        <select class="selectpicker">
                                            <option>最近一個月</option>
                                            <option>最近三個月</option>
                                            <option>最近六個月</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="content-box pt-2">
                                    <form class="form" action="lecturer-discussion">
                                        <div class="row">
                                            <div class="col-12 mb-3 mb-xl-4">
                                                <div class="form-field d-sm-flex align-items-center">
                                                    <label class="d-block mb-1 mb-sm-0" for="status">處理狀態<span class="text-red ms-2">*</span></label>
                                                    <div style="flex:0 0 270px;">
                                                        <div class="select-element style-1 bg-paleBlue rounded-10 w-100">
                                                            <select class="selectpicker w-100" id="status" name="status">
                                                                <option>已處理</option>
                                                                <option>未處理</option>
                                                                <option>處理中</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 mb-3">
                                                <div class="form-field d-sm-flex">
                                                    <label class="d-block mb-1 mb-sm-0" for="content">回覆內容<span class="text-red ms-2">*</span></label>
                                                    <textarea class="flex-grow-1 w-100 bg-paleBlue rounded-10 px-3 py-2" name="content" id="content" rows="5" placeholder="請輸入訊息內容"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-center pt-md-3 mt-md-1">
                                            <button class="text-primary border border-primary bg-hover-middleBlue text-hover-white rounded-30 w200 h50 mx-2" type="reset">取消</button>
                                            <button class="text-white bg-primary bg-hover-middleBlue border border-primary rounded-30 w200 h50 mx-2" type="submit">送出</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div>
                                <div class="title-box d-md-flex justify-content-between align-items-end ms-xl-2 mb-3 mb-lg-4 pb-lg-1">
                                    <h3 class="title-dec-line position-relative fz-22 fw-bold les1 ps-3 mb-3 mb-md-0">課程討論紀錄</h3>
                                </div>
                                <div class="content-box les1">
                                    <div class="listsItem pb-3">
                                        <div class="thead d-none d-lg-flex row align-items-center g-0 fz-18 bg-grayF8 h60 rounded-15 px-4 mb-3">
                                            <div class="ask th col">詢問</div>
                                            <div class="th col text-center flex-grow-1">留言內容</div>
                                            <div class="space th"></div>
                                        </div>
                                        <div class="tbody px-lg-3">
                                            <div class="tr listItem">
                                                <div class="messageTitle d-block d-lg-flex row g-0 align-items-center py-3">
                                                    <div class="ask td">
                                                        <div class="d-flex align-items-center ps-xl-4">
                                                            <div class="w60 h60 rounded-circle overflow-hidden">
                                                                <img src="styles/images/lecturer/person.jpg" alt="">
                                                            </div>
                                                            <div class="fw-500 ms-3">
                                                                <span class="name d-lg-block fz-18">熊促咪</span>
                                                                <span class="d-lg-block text-gray66">已購買 <span class="NotoSansTC text-blue5A91E1">5</span> 堂</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="td flex-grow-1 mt-3 mt-lg-0">
                                                        <button class="messageToggle les1 text-start p-0" type="button">
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
                                                <div class="messageContent">
                                                    <div class="d-block d-lg-flex row g-0">
                                                        <div class="ask td"></div>
                                                        <div class="td flex-grow-1 border-dashed-top-E3E3E3 py-4 pe-xl-5">
                                                            <span class="d-block">大家好：</span>
                                                            <p>委託書的認識：慘痛案例分享的問題討論這裡是專屬於課堂同學及老師的討論區，對於課程內容有想法想要請教老師，是否可提供參考範例?</p>
                                                            <div class="bg-blueF6FAFF d-md-flex px-4 py-3 mt-4 mb-lg-2">
                                                                <div class="w50 h50 rounded-circle overflow-hidden flex-shrink-0">
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
                                                        </div>
                                                        <div class="space th"></div>
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
        </main>
        <!-- main ======================================================================================= -->
        <?php include "footer.php"; ?>
    </div>
    <?php include "footer-js.php"; ?>
</body>

</html>