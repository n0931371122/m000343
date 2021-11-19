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
                        <h2 class="d-none">填寫資料</h2>
                        <div class="d-none d-md-flex justify-content-center text-center pt-2" data-aos="fade-up">
                            <div>
                                <div class="flex-center w70 h70 mx-auto mb-2">
                                    <div class="circle flex-center bg-lighterBlue rounded-circle w54 h54">
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
                                    <div class="circle flex-center rounded-circle w70 h70 background-cover" style="background-image:url(styles/images/member/orders/step-bg.png)">
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
                        <form class="form" action="cart-3">
                            <div class="max1400 mx-auto pt-md-5 mt-3">
                                <div class="row g-0">
                                    <div class="col-12 col-lg-8 col-xl-9 pe-lg-4 mb-3 mb-md-4 mb-lg-0" data-aos="fade-up">
                                        <div class="me-xxl-2">
                                            <div class="mb-4 pb-1">
                                                <div class="bg-white box-shadow rounded-15 lh-18 py-4 px-3 px-md-4">
                                                    <div class="pt-md-3 px-xl-2 mx-xl-1">
                                                        <div class="title-box d-md-flex ms-xl-2 mb-lg-3">
                                                            <h3 class="title-dec-line position-relative fz-22 fw-bold les1 ps-3 mb-0">訂購人資訊</h3>
                                                            <div class="radios d-flex flex-grow ps-md-4 mt-3 mt-md-0">
                                                                <div>
                                                                    <input type="radio" name="OrdererDataType" id="type-1" value="type-1" checked>
                                                                    <label class="cursor mb-0 ps-4 ms-2" for="type-1">同會員資訊</label>
                                                                </div>
                                                                <div class="ms-3 ps-2">
                                                                    <input type="radio" name="OrdererDataType" id="type-2" value="type-2">
                                                                    <label class="cursor mb-0 ps-4 ms-2" for="type-2">重新填寫</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="content-box pb-2 px-xl-2 pt-3">
                                                            <div class="d-md-flex align-items-center mb-3">
                                                                <div class="form-field flex-grow-1 d-sm-flex align-items-center">
                                                                    <label class="d-block mb-1 mb-sm-0" for="name">姓名<span class="text-red ms-2">*</span></label>
                                                                    <input class="flex-grow-1 w-100 border border-grayE5 rounded-10 px-3 py-2" type="text" name="name" id="name" placeholder="熊厲害">
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
                                                                <input class="flex-grow-1 w-100 border border-grayE5 rounded-10 px-3 py-2" type="email" name="email" id="email" placeholder="test@gmail.com">
                                                            </div>
                                                            <div class="form-field flex-grow-1 d-sm-flex align-items-center mb-3">
                                                                <label class="d-block mb-1 mb-sm-0" for="mobile">手機號碼<span class="text-red ms-2">*</span></label>
                                                                <input class="flex-grow-1 w-100 border border-grayE5 rounded-10 px-3 py-2" type="text" name="mobile" id="mobile" placeholder="0988123456">
                                                            </div>
                                                            <div class="form-field flex-grow-1 d-sm-flex align-items-center mb-3">
                                                                <label class="d-block mb-1 mb-sm-0" for="phone">聯絡電話</label>
                                                                <input class="flex-grow-1 w-100 border border-grayE5 rounded-10 px-3 py-2" type="text" name="phone" id="phone" placeholder="0212345698">
                                                            </div>
                                                            <div class="form-field flex-grow-1 d-sm-flex mb-3">
                                                                <label class="d-block mb-1 mb-sm-0 mt-sm-2" for="address">通訊地址 <span class="text-red ms-2">*</span></label>
                                                                <div class="row gx-3 flex-grow-1">
                                                                    <div class="col-12 col-md-4 mb-2 mb-md-0">
                                                                        <div class="select-element style-1 border border-grayE5 rounded-10 w-100">
                                                                            <select class="selectpicker w-100" id="city" name="city">
                                                                                <option>台北市</option>
                                                                                <option>台中市</option>
                                                                                <option>台南市</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-md-4 mb-2 mb-md-0">
                                                                        <div class="select-element style-1 border border-grayE5 rounded-10 w-100">
                                                                            <select class="selectpicker w-100" id="area" name="area">
                                                                                <option>北區</option>
                                                                                <option>中區</option>
                                                                                <option>南區</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-md-4 mb-2 mb-md-0">
                                                                        <input class="flex-grow-1 w-100 border border-grayE5 rounded-10 px-3 py-2" type="text" name="zip" id="zip" placeholder="407">
                                                                    </div>
                                                                    <div class="col-12 mt-md-3">
                                                                        <input class="flex-grow-1 w-100 border border-grayE5 rounded-10 px-3 py-2" type="text" name="address" id="address" placeholder="崇德路二段46號10樓">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-4 pb-1">
                                                <div class="bg-white box-shadow rounded-15 lh-18 py-4 px-3 px-md-4">
                                                    <div class="py-md-3 px-xl-2 mx-xl-1">
                                                        <div class="title-box ms-xl-2 mb-3">
                                                            <h3 class="title-dec-line position-relative fz-22 fw-bold les1 ps-3 mb-0">付款方式</h3>
                                                        </div>
                                                        <div class="content-box px-xl-2 pt-2">
                                                            <div class="border-bottom-E5E5E5 pb-4">
                                                                <div class="nav nav-tabs border-0 pb-1">
                                                                    <button class="text-primary border border-primary rounded-30 w150 py-2 me-3 px-0 active" type="button" data-bs-toggle="tab" data-bs-target="#creditCard">信用卡付款</button>
                                                                    <button class="text-primary border border-primary rounded-30 w150 py-2" type="button" data-bs-toggle="tab" data-bs-target="#account">虛擬帳號ATM</button>
                                                                </div>
                                                            </div>
                                                            <div class="tab-content pt-3">
                                                                <div class="tab-pane fade show active" id="creditCard">
                                                                    <ul class="ns yellow-dots small-dot text-gray80 pt-1">
                                                                        <li>
                                                                            <div class="d-md-flex align-items-center">
                                                                                <p class="me-md-3 mb-2 mb-md-0">簽帳金融卡JCB、VISA、Mastercard 也可以付費。</p>
                                                                                <img src="styles/images/cart/creditCard.jpg" alt="">
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="tab-pane fade" id="account">
                                                                    <ul class="ns yellow-dots small-dot text-gray80 pt-1">
                                                                        <li>選擇「ATM轉帳匯款」，可持任何一家銀行或郵局的金融卡使用網路銀行，或至自動櫃員機(ATM)轉帳付款。</li>
                                                                        <li>請在三天內完成轉帳手續，超過三天此筆訂單將自動失效。</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-4 pb-1">
                                                <div class="bg-white box-shadow rounded-15 lh-18 py-4 px-3 px-md-4">
                                                    <div class="py-md-3 px-xl-2 mx-xl-1">
                                                        <div class="title-box ms-xl-2 mb-3">
                                                            <h3 class="title-dec-line position-relative fz-22 fw-bold les1 ps-3 mb-0">發票方式</h3>
                                                        </div>
                                                        <div class="content-box px-xl-2 pt-2">
                                                            <div class="border-bottom-E5E5E5 pb-4">
                                                                <div class="nav nav-tabs border-0 pb-1">
                                                                    <button class="text-primary border border-primary rounded-30 w150 py-2 me-3 px-0 active" type="button" data-bs-toggle="tab" data-bs-target="#personalInvoice">個人電子發票</button>
                                                                    <button class="text-primary border border-primary rounded-30 w150 py-2" type="button" data-bs-toggle="tab" data-bs-target="#companyInvoice">公司電子發票</button>
                                                                </div>
                                                            </div>
                                                            <div class="tab-content pt-3">
                                                                <div class="tab-pane fade pt-1 show active" id="personalInvoice">
                                                                    <div class="radios d-md-flex mb-3">
                                                                        <div>
                                                                            <input type="radio" name="invoiceType" id="invoiceType-1" value="invoiceType-1" checked>
                                                                            <label class="cursor mb-0 ps-4 ms-2" for="invoiceType-1">會員載具</label>
                                                                        </div>
                                                                        <div class="ms-md-3 ps-md-2 mt-1 mt-md-0">
                                                                            <input type="radio" name="invoiceType" id="invoiceType-2" value="invoiceType-2">
                                                                            <label class="cursor mb-0 ps-4 ms-2" for="invoiceType-2">手機條碼載具</label>
                                                                        </div>
                                                                        <div class="ms-md-3 ps-md-2 mt-1 mt-md-0">
                                                                            <input type="radio" name="invoiceType" id="invoiceType-3" value="invoiceType-3">
                                                                            <label class="cursor mb-0 ps-4 ms-2" for="invoiceType-3">自然人憑證載具</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-12 col-md-6">
                                                                            <input class="flex-grow-1 w-100 border border-grayE5 rounded-10 les1 px-3 py-2" type="text" name="vehicleNumber" id="vehicleNumber" placeholder="請輸入載具編號">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane fade pt-1" id="companyInvoice">
                                                                    <div class="d-md-flex">
                                                                        <div class="d-sm-flex align-items-center me-md-4 mb-3 mb-md-0">
                                                                            <label class="flex-shrink-0 me-4 mb-1 mb-sm-0" for="unifiedBusinessNo">統一編號</label>
                                                                            <input style="flex:0 0 200px;" class="flex-grow-1 w-100 border border-grayE5 rounded-10 les1 px-3 py-2" type="text" name="unifiedBusinessNo" id="unifiedBusinessNo" placeholder="請輸入公司統一編號">
                                                                        </div>
                                                                        <div class="d-sm-flex align-items-center ps-md-3">
                                                                            <label class="flex-shrink-0 me-4 mb-1 mb-sm-0" for="companyName">公司名稱</label>
                                                                            <input style="flex:0 0 300px;" class="flex-grow-1 w-100 border border-grayE5 rounded-10 les1 px-3 py-2" type="text" name="companyName" id="companyName" placeholder="請輸入公司抬頭名稱">
                                                                        </div>
                                                                    </div>
                                                                    <div class="radios d-flex my-3">
                                                                        <div>
                                                                            <input type="radio" name="addressType" id="addressType-1" value="addressType-1" checked>
                                                                            <label class="cursor mb-0 ps-4 ms-2" for="addressType-1">同訂購人地址</label>
                                                                        </div>
                                                                        <div class="ms-sm-3 ps-2">
                                                                            <input type="radio" name="addressType" id="addressType-2" value="addressType-2">
                                                                            <label class="cursor mb-0 ps-4 ms-2" for="addressType-2">重新填寫</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-8">
                                                                            <input class="flex-grow-1 w-100 border border-grayE5 rounded-10 px-3 py-2" type="text" name="invoiceAddress" id="invoiceAddress">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-4 pb-1">
                                                <div class="bg-white box-shadow rounded-15 lh-18 py-4 px-3 px-md-4">
                                                    <div class="py-md-3 px-xl-2 mx-xl-1">
                                                        <div class="title-box ms-xl-2">
                                                            <span class="fz-22 fw-bold les1">提醒您：</span>
                                                        </div>
                                                        <div class="content-box px-xl-2 pt-3">
                                                            <ul class="ns yellow-dots small-dot text-gray80">
                                                                <li class="mb-1">在進行付款前，請再次確認所有資料是否正確無誤。</li>
                                                                <li class="mb-1">若點選進行付款，則無法再增減商品的購買數量。</li>
                                                                <li class="mb-1">請仔細閱讀本網站所提供之<a class="text-lightRed text-decoration-underline" href="terms">會員條款</a>、<a class="text-lightRed text-decoration-underline" href="privacy">隱私權政策</a>所載內容及其意義，若繼續進行操作，則代表茲同意該等條款規定，並願遵守網站現今、嗣後規範的各種規則。</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-xl-3" data-aos="fade-up">
                                        <div class="bg-white box-shadow rounded-15 lh-18 py-4 px-3 px-md-4">
                                            <div class="py-md-3 px-md-2">
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
                                                            <a class="flex-center border border-primary text-primary text-hover-white bg-white bg-hover-middleBlue rounded-30 h50" href="cart-1">返回</a>
                                                        </div>
                                                        <div class="col-7 ps-2">
                                                            <button class="flex-center text-white bg-primary bg-hover-middleBlue rounded-30 text-center h50 w-100 px-3" type="submit">進行付款</button>
                                                        </div>
                                                    </div>
                                                    <p class="text-gray80 mt-4 mb-0">※若您購買課程代表同意本網站所提供之<a class="text-gray80 text-hover-primary text-decoration-underline" href="terms">會員條款</a>、<a class="text-gray80 text-hover-primary text-decoration-underline" href="terms">隱私權政策</a>所載內容及其意義等條款規定。</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
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