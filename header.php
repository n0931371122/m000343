<header class="position-fixed w-100 les1 px-3">
	<div class="container position-relative d-flex align-items-center h-100">
		<a class="logo z-1" href="./">
			<img src="styles/images/common/logo.svg" alt="">
		</a>
		<div class="menu-wrapper bg-white ms-4 ms-xl-5">
			<ul class="ns menu d-lg-flex pt-2 pt-lg-0">
				<li class="menu-item mx-lg-2">
					<a class="menu-link flex-center rounded-30" href="projects">
						<span class="icon-wrapper d-lg-none d-xl-flex flex-center me-3 me-lg-2">
							<i class="icon-video fz-18"></i>
						</span>
						<span>熊師領路</span>
					</a>
				</li>
				<li class="menu-item hasChild position-relative mx-lg-2">
					<div class="menu-link d-flex justify-content-between align-content-center rounded-30 cursor">
						<div class="d-flex align-items-center justify-content-lg-center flex-grow-1">
							<div class="icon-wrapper d-lg-none d-xl-flex flex-center position-relative me-3 me-lg-2">
								<i class="icon-block d-lg-none d-xl-inline fz-12 position-absolute"></i>
								<i class="icon-block-base d-lg-none d-xl-inline fz-20"></i>
							</div>
							<span>仲點學堂</span>
						</div>
						<i class="icon-arrow-right d-flex d-lg-none align-items-center fz-22"></i>
					</div>
					<div class="menu-dropdown position-static position-lg-absolute scrollbarY">
						<ul class="ns fw-500 pb-4 py-lg-2">
							<li>
								<a class="d-block" href="courses">全部</a>
							</li>
							<li>
								<a class="d-block" href="courses">基礎必學</a>
							</li>
							<li>
								<a class="d-block" href="courses">網路行銷</a>
							</li>
							<li>
								<a class="d-block" href="courses">人脈經營</a>
							</li>
							<li>
								<a class="d-block" href="courses">領導管理</a>
							</li>
							<li>
								<a class="d-block" href="courses">表達能力</a>
							</li>
							<li>
								<a class="d-block" href="courses">其他分類1</a>
							</li>
							<li>
								<a class="d-block" href="courses">其他分類2</a>
							</li>
							<li>
								<a class="d-block" href="courses">其他分類3</a>
							</li>
							<li>
								<a class="d-block" href="courses">其他分類4</a>
							</li>
							<li>
								<a class="d-block" href="courses">其他分類5</a>
							</li>
						</ul>
					</div>
				</li>
				<li class="menu-item d-lg-none mx-lg-2">
					<a class="menu-link flex-center rounded-30" href="about">
						<span class="icon-wrapper d-lg-none d-xl-flex flex-center me-3 me-lg-2">
							<i class="icon-rocket  fz-18"></i>
						</span>
						<span>關於我們</span>
					</a>
				</li>
				<li class="menu-item d-lg-none mx-lg-2">
					<a class="menu-link flex-center rounded-30" href="contact">
						<span class="icon-wrapper flex-center me-3 me-lg-2">
							<i class="icon-mail fz-18"></i>
						</span>
						<span>聯絡我們</span>
					</a>
				</li>
				<!--登入前啟用 start-->
				<!-- <li class="menu-item d-lg-none mx-lg-2">
						<div class="menu-link flex-center rounded-30 cursor">
							<span class="icon-wrapper flex-center me-3 me-lg-2">
								<i class="icon-person fz-18"></i>
							</span>
							<a href="login">登入</a>
							<span class="sepatate NotoSansTC mx-2">/</span>
							<a href="register">註冊</a>
						</div>
					</li> -->
				<!--登入前啟用 end-->
			</ul>
			<div class="logined-for-mobile"></div>
		</div>
		<div class="search z-1 ms-auto ms-lg-2">
			<div class="search-toggle flex-center d-lg-none bg-primary rounded-circle" onClick="$('.search .search-wrapper').stop().slideToggle()">
				<i class="icon-search fz-16 text-white"></i>
			</div>
			<div class="search-wrapper">
				<form class="d-flex rounded-30 overflow-hidden" action="search">
					<input class="flex-grow-1 px-4" type="text" placeholder="想找什麼課程?">
					<button class="bg-primary bg-hover-middleBlue text-white px-3" type="submit">
						<i class="icon-search fz-20"></i>
						<span class="d-none d-xl-inline">搜尋</span>
					</button>
				</form>
			</div>
		</div>
		<div class="cart-element z-1 position-relative ms-2 ms-lg-auto">
			<div class="cart cart-toggle flex-center border border-primary rounded-30 cursor">
				<i class="icon-cart fz-22"></i>
				<span class="d-none d-xxl-block ms-2">購物車</span>
			</div>
			<div class="cart-dropdown bg-white position-absolute px-3">
				<div class="px-sm-1 pb-4">
					<div class="title-box pt-3 pb-2">
						<p class="mb-0 mt-1">您的購物車有 <span class="text-primary">6</span> 堂課程</p>
					</div>
					<div class="content-box pb-sm-3 pb-lg-0">
						<div class="scrollbarY">
							<ul class="ns">
								<li>
									<a class="item d-flex" href="course-1">
										<span class="d-block jgimgFill">
											<img src="styles/images/index/course-1.jpg" alt="">
										</span>
										<span class="d-block ps-3">
											<span class="fw-500 line2">資深投顧王 - 為您洞悉全球財經與掌握台股主流</span>
											<span class="d-block fz-13 text-blue5A91E1 line1 mt-1">資深媒體人-謝濱展</span>
										</span>
									</a>
								</li>
								<li>
									<a class="item d-flex" href="course-1">
										<span class="d-block jgimgFill">
											<img src="styles/images/index/course-1.jpg" alt="">
										</span>
										<span class="d-block ps-3">
											<span class="fw-500 line2">資深投顧王 - 為您洞悉全球財經與掌握台股主流</span>
											<span class="d-block fz-13 text-blue5A91E1 line1 mt-1">資深媒體人-謝濱展</span>
										</span>
									</a>
								</li>
								<li>
									<a class="item d-flex" href="course-1">
										<span class="d-block jgimgFill">
											<img src="styles/images/index/course-1.jpg" alt="">
										</span>
										<span class="d-block ps-3">
											<span class="fw-500 line2">資深投顧王 - 為您洞悉全球財經與掌握台股主流</span>
											<span class="d-block fz-13 text-blue5A91E1 line1 mt-1">資深媒體人-謝濱展</span>
										</span>
									</a>
								</li>
								<li>
									<a class="item d-flex" href="course-1">
										<span class="d-block jgimgFill">
											<img src="styles/images/index/course-1.jpg" alt="">
										</span>
										<span class="d-block ps-3">
											<span class="fw-500 line2">資深投顧王 - 為您洞悉全球財經與掌握台股主流</span>
											<span class="d-block fz-13 text-blue5A91E1 line1 mt-1">資深媒體人-謝濱展</span>
										</span>
									</a>
								</li>
							</ul>
						</div>
						<div class="pt-sm-2 pb-sm-3">
							<a class="d-block text-white bg-primary bg-hover-middleBlue text-center rounded-30 lh-18 py-2 mt-4" href="cart-1">前往購物清單</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--登入前啟用 start-->
		<!-- <div class="d-none d-lg-flex row g-0 member-links border border-primary rounded-30 overflow-hidden lh19 ms-3">
			<a class="col login-link flex-center text-hover-white bg-white bg-hover-primary" href="login"><span class="mx-1">登入</span></a>
			<a class="col flex-center text-hover-white bg-white bg-hover-primary" href="register"><span class="mx-1">註冊</span></a>
		</div> -->
		<!--登入前啟用 end-->

		<!--登入前關閉 start-->
		<div class="logined-for-PC d-none d-lg-block">
			<div class="logined bg-lightBlue position-relative ps-lg-1 pe-lg-4 ms-lg-3">
				<div class="logined-toggle d-none d-lg-flex justify-content-between align-items-center cursor">
					<img class="person" src="styles/images/common/person.png" alt="">
					<span class="text-white ms-1">Hi！熊先生</span>
					<img src="styles/images/common/tri.png" alt="">
				</div>
				<div class="logined-dropdown position-lg-absolute px-lg-3">
					<div class="title-box py-3">
						<div class="d-flex align-items-center mb-2 pb-1">
							<img class="person" src="styles/images/common/person.png" alt="">
							<div class="lh-sm ms-3 ms-lg-2">
								<span class="d-block NotoSansTC fw-500 mb-1">Hi！熊先生</span>
								<span class="d-block text-gray80 fz-15">goshonko@gmail.com</span>
							</div>
						</div>
						<a class="d-block bg-primary bg-hover-middleBlue text-white text-center rounded-30 lh-sm mx-lg-3 py-lg-2 mb-2 mb-lg-1" href="lecturer">講師專區</a>
					</div>
					<div class="content-box pb-3 pb-lg-0">
						<div class="px-3 px-lg-0">
							<ul class="ns py-2 py-lg-1 mx-3 mx-lg-0 px-lg-3">
								<li>
									<a class="d-flex align-center active" href="orders">
										<i class="icon-order"></i>
										<span>訂單紀錄</span>
									</a>
								</li>
								<li>
									<a class="d-flex align-center" href="member-projects">
										<i class="icon-video"></i>
										<span>熊師領路</span>
									</a>
								</li>
								<li>
									<a class="d-flex align-center" href="track">
										<i class="icon-block-2"></i>
										<span>仲點學堂</span>
									</a>
								</li>
								<li>
									<a class="d-flex align-center" href="record">
										<i class="icon-viewed"></i>
										<span>觀看紀錄</span>
									</a>
								</li>
								<li>
									<a class="d-flex align-center" href="editor">
										<i class="icon-person"></i>
										<span>會員資料</span>
									</a>
								</li>
								<li>
									<a class="d-flex align-center" href="coupon">
										<i class=" icon-coupon"></i>
										<span>優惠券</span>
									</a>
								</li>
							</ul>
						</div>
						<a class="d-block text-black py-3 mx-3 mx-lg-0 px-3" href="./">
							<i class="icon-loginout"></i>
							<span>登出</span>
						</a>

					</div>
				</div>
			</div>
		</div>
		<!--登入前關閉 end-->

		<div class="menu-toggle d-lg-none flex-center bg-primary rounded-circle z-1 ms-2" onClick="$('html').toggleClass('menuOpen')">
			<div class="wrapper position-relative">
				<div class="bar1 position-absolute bg-white"></div>
				<div class="bar2 position-absolute bg-white"></div>
				<div class="bar3 position-absolute bg-white"></div>
			</div>
		</div>
	</div>
</header>