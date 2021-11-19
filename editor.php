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
                        <div class="bg-white box-shadow les1 rounded-15 lh-18 py-4 px-3 px-md-4 px-xl-5 mb-4" data-aos="fade-up">
                            <div class="px-xl-2 py-xl-3">
                                <div class="title-box border-bottom-E5E5E5 mb-3 mb-md-4 mt-1 pt-md-2 pt-xl-0">
                                    <h3 class="title-dec-line position-relative fz-22 fw-bold ps-3 pb-3 mb-0 mb-md-2">帳號管理</h3>
                                </div>
                                <div class="content-box">
                                    <div class="row g-0 mb-2 pb-1">
                                        <span class="col-12 col-md-2 lh-lg pt-md-1">電子信箱<span class="text-red ms-1">*</span></span>
                                        <div class="col-12 col-md-10 ps-md-4">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <span class="">test@gmail.com</span>
                                                </div>
                                                <a href="password" class="flex-center bg-lightBlue bg-hover-primary text-white rounded-30 les1 h40 px-4 ms-auto">
                                                    <span class="mx-1">變更密碼</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-0 mb-2 pb-1">
                                        <span class="col-12 col-md-2 lh-lg pt-md-1 mb-2 mb-md-0">快速登入設定</span>
                                        <div class="col-12 col-md-10 ps-md-4">
                                            <div class="d-flex justify-content-between align-items-center mb-2 pb-1">
                                                <div>
                                                    <img class="w30 h30 me-1" src="styles/images/common/fb.png" alt="">
                                                    <span>尚未facebook帳號連結</span>
                                                </div>
                                                <a class="flex-center bg-paleBlue bg-hover-lightBlue text-hover-white rounded-30 w90 h40 ms-auto" href="#" target="_blank">綁定</a>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <img class="w30 h30 me-1" src="styles/images/common/google.png" alt="">
                                                    <span>尚未與Google帳號連結</span>
                                                </div>
                                                <a class="flex-center bg-paleBlue bg-hover-lightBlue text-hover-white rounded-30 w90 h40 ms-auto" href="#" target="_blank">綁定</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form class="form" action="login">
                            <div class="bg-white box-shadow les1 rounded-15 lh-18 py-4 px-3 px-md-4 px-xl-5" data-aos="fade-up">
                                <div class="px-xl-2 py-xl-3">
                                    <div class="title-box border-bottom-E5E5E5 mb-3 mb-md-4 mt-1 pt-md-2 pt-xl-0">
                                        <h3 class="title-dec-line position-relative fz-22 fw-bold ps-3 pb-3 mb-0 mb-md-2">個人資料</h3>
                                    </div>
                                    <div class="content-box">
                                        <div class="person overflow-hidden position-relative d-table mx-auto mb-4 pb-md-2 pt-3 pt-md-0">
                                            <div class="circle flex-center rounded-circle overflow-hidden">
                                                <img id="upLoad" src="styles/images/member/member/person.jpg" alt="">
                                            </div>
                                            <div class="btn-upload flex-center position-absolute bg-white rounded-circle p-0">
                                                <img class="position-absolute point-event-none" src="styles/images/member/member/shot.png" alt="">
                                                <input class="opacity0" type="file" onchange="readURL(this)" data-targetID="upLoad" accept="image/gif, image/jpeg, image/png" />
                                            </div>
                                        </div>
                                        <div class="d-md-flex align-items-center mb-3">
                                            <div class="form-field flex-grow-1 d-sm-flex align-items-center">
                                                <label class="d-block mb-1 mb-sm-0" for="name">姓名<span class="text-red ms-2">*</span></label>
                                                <input class="flex-grow-1 w-100 bg-paleBlue rounded-10 px-3 py-2" type="text" name="name" id="name" placeholder="請填寫姓名" value="熊厲害">
                                            </div>
                                            <div class="radios d-flex flex-grow ps-md-5 mt-3 mt-md-0">
                                                <div>
                                                    <input type="radio" name="gender" id="male" value="male" checked>
                                                    <label class="cursor mb-0 ps-4 ms-2" for="male">先生</label>
                                                </div>
                                                <div class="ms-3 ps-2">
                                                    <input type="radio" name="gender" id="female" value="female">
                                                    <label class="cursor mb-0 ps-4 ms-2" for="female">小姐</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-field flex-grow-1 d-sm-flex align-items-center mb-3">
                                            <label class="d-block mb-1 mb-sm-0" for="email">電子信箱<span class="text-red ms-2">*</span></label>
                                            <input class="flex-grow-1 w-100 bg-paleBlue rounded-10 px-3 py-2" type="email" name="email" id="email" placeholder="test@gmail.com" value="test@gmail.com">
                                        </div>
                                        <div class="form-field flex-grow-1 d-sm-flex align-items-center mb-3">
                                            <label class="d-block mb-1 mb-sm-0" for="mobile">手機號碼<span class="text-red ms-2">*</span></label>
                                            <input class="flex-grow-1 w-100 bg-paleBlue rounded-10 px-3 py-2" type="text" name="mobile" id="mobile" placeholder="0988123456" value="0988123456">
                                        </div>
                                        <div class="form-field flex-grow-1 d-sm-flex align-items-center mb-3">
                                            <label class="d-block mb-1 mb-sm-0" for="phone">聯絡電話</label>
                                            <input class="flex-grow-1 w-100 bg-paleBlue rounded-10 px-3 py-2" type="text" name="phone" id="phone" placeholder="0212345698" value="0212345698">
                                        </div>
                                        <div class="form-field flex-grow-1 d-sm-flex align-items-center mb-3">
                                            <label class="d-block mb-1 mb-sm-0" for="birthday">生日<span class="text-red ms-2">*</span></label>
                                            <input class="flex-grow-1 w-100 bg-paleBlue rounded-10 px-3 py-2" type="text" name="birthday" id="birthday" placeholder="1990/08/11" value="1990/08/11">
                                        </div>
                                        <div class="form-field flex-grow-1 d-sm-flex mb-3">
                                            <label class="d-block mb-1 mb-sm-0" for="birthday">通訊地址 <span class="text-red ms-2">*</span></label>
                                            <div class="row gx-3 flex-grow-1">
                                                <div class="col-12 col-md-4 mb-2 mb-md-0">
                                                    <div class="select-element style-1 bg-paleBlue rounded-10 w-100">
                                                        <select class="selectpicker w-100" id="city" name="city">
                                                            <option>台北市</option>
                                                            <option>台中市</option>
                                                            <option>台南市</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-4 mb-2 mb-md-0">
                                                    <div class="select-element style-1 bg-paleBlue rounded-10 w-100">
                                                        <select class="selectpicker w-100" id="area" name="area">
                                                            <option>北區</option>
                                                            <option>中區</option>
                                                            <option>南區</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-4 mb-2 mb-md-0">
                                                    <input class="flex-grow-1 w-100 bg-paleBlue rounded-10 px-3 py-2" type="text" name="zip" id="zip" placeholder="407" value="407">
                                                </div>
                                                <div class="col-12 mt-md-3">
                                                    <input class="flex-grow-1 w-100 bg-paleBlue rounded-10 px-3 py-2" type="text" name="address" id="address" placeholder="崇德路二段46號10樓" value="崇德路二段46號10樓">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-center mt-4 mt-md-5 pt-xl-4">
                                <button class="text-primary border border-primary bg-hover-middleBlue text-hover-white rounded-30 w200 h50 mx-2" type="reset">取消</button>
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