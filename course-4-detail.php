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
                <div class="detail-section bg-paleBlue pt-4 pb-3 px-3 px-md-4">
                    <div class="py-lg-5 mb-5">
                        <div class="bg-white max1300 border-top-E5E5E5 mx-auto px-3 px-md-4 py-4 mt-3">
                            <div class="ps-xl-3 pe-xl-5 py-3">
                                <h3 class="title-dec-line position-relative fz-22 fw-bold les1 ps-3 mb-0" data-aos="fade-up">發表留言</h3>
                                <form class="form pt-4 mt-md-3" action="course-4?nav=target" data-aos="fade-up">
                                    <div class="form-field flex-grow-1 d-sm-flex align-items-center mb-3">
                                        <label class="d-block mb-1 mb-sm-0" for="issue">主旨<span class="text-red ms-2">*</span></label>
                                        <input class="flex-grow-1 w-100 border border-grayE5 rounded-10 px-3 py-2" name="issue" id="issue" type="text" placeholder="請輸入主旨">
                                    </div>
                                    <div class="form-field flex-grow-1 d-sm-flex mb-3">
                                        <label class="d-block mb-1 mb-sm-0 mt-sm-1" for="content">留言內容 <span class="text-red ms-2">*</span></label>
                                        <textarea class="flex-grow-1 w-100 border border-grayE5 rounded-10 px-3 py-2" name="content" id="content" rows="7" placeholder="請輸入您的內容"></textarea>
                                    </div>
                                    <div class="d-table me-auto me-md-0 ms-auto my-4 py-2">
                                        <div class="d-flex">
                                            <a class="flex-center text-primary text-hover-white bg-hover-middleBlue border border-primary rounded-30 w150 h50 me-3" href="course-4?nav=target">返回列表</a>
                                            <button class="text-white bg-primary bg-hover-middleBlue rounded-30 w150 h50" type="submit">送出</button>
                                        </div>
                                    </div>
                                </form>
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