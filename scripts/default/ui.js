'use strict';
var windowW,windowH,mobileMode;
$(function (){
    $(window).resize(function(){resize();}).trigger('resize');
     
    $(".jqimgFill").imgLiquid();
    imgFill();
    /* ==========================================================================
		[layout]
 	==========================================================================*/
    $(".scrollbarY").mCustomScrollbar({
        axis: "y",
    });
    $("header .menu-item.hasChild .menu-link").click(function(){
        $(this).parent(".menu-item").toggleClass("active");
        $(this).next(".menu-dropdown").stop().slideToggle();
    });
    $("header .logined-toggle").click(function(){
        $(this).next().stop().slideToggle();
    });
    $("header .cart-toggle").click(function(){
        $(this).next().stop().slideToggle();
    });
    $(".goTop").click(function(){
       $("body,html").animate({
           scrollTop:0
       });
    });

    $(window).scroll(function () {  
        $(window).scrollTop()>0? $("header").addClass("scrollMode"):$("header").removeClass("scrollMode");
        $(window).scrollTop() > 400?$(".fixed-side").addClass("show"): $(".fixed-side").removeClass("show");
    });

    $(".cookie-btn").click(function(){
        $(this).parents(".cookie").addClass("hide");
    });

    /* ==========================================================================
		[page]
    ==========================================================================*/
    let HeaderH=$("header").height();
    if($("#index").length!=0){
        var modal = new bootstrap.Modal(document.getElementById('modal'))
        modal.show();
    }
    else{
        $(".cookie").hide();
    }
    
    new Swiper(".index-banner-section .swiper-container",{
        loop: false, 
        slidesPerView: 1,
        spaceBetween:25,
        speed:800,
        loop:true,
        autoplay: {
            delay:5000,
        },
        pagination: {
            el: '.index-banner-section .swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.index-banner-section .swiper-button-next',
            prevEl: '.index-banner-section .swiper-button-prev',
        }
    })
    new Swiper(".index-section-2 .swiper-container",{
        slidesPerView: 1.25,
        spaceBetween:24,
        loop:true,
        centeredSlides:true,
        speed:1000,
        loop:true,
        autoplay: {
            delay: 4000,
        },
        pagination: {
            el: '.index-section-2 .swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.index-section-2 .swiper-button-next',
            prevEl: '.index-section-2 .swiper-button-prev',
        },
        breakpoints: {
            768: {
                slidesPerView: 1.25,
            },
            992: {
                spaceBetween:60,
                slidesPerView: 1.1,
            },
            1200: {
                spaceBetween:60,
                slidesPerView: 1.2,
            },
            1600: {
                spaceBetween:60,
                slidesPerView: 1.35,
            }
        },
        on:{
            slideChangeTransitionStart:function(swiper){
                if(windowW>=1200){
                    $(swiper.$el).find(".aos-animate").removeClass("aos-animate");
                }
                
            },
            slideChangeTransitionEnd:function(swiper){
                $(swiper.$el).find(".aos-init").addClass("aos-animate");
            }
        }
    });
    new Swiper(".index-section-3 .swiper-container",{
        slidesPerView: 1.3,
        spaceBetween:24,
        centeredSlides:true,
        loop:true,
        autoplay: {
            delay: 4000,
        },
        speed:1000,
        navigation: {
            nextEl: '.index-section-3 .swiper-button-next',
            prevEl: '.index-section-3 .swiper-button-prev',
        },
        pagination: {
            el: '.index-section-3 .swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            768: {
                slidesPerView: 1.8,
                spaceBetween:24,
                centeredSlides:true,
            },
            992: {
                slidesPerView: 2,
                spaceBetween:24,
                centeredSlides:false
            },
            1200: {
                slidesPerView: 2.7,
                spaceBetween:24,
                centeredSlides:false
            },
            1400: {
                slidesPerView: 2.8,
                spaceBetween:37,
                centeredSlides:false
            }
        }
    });
    $(".index-side-nav button").click(function(){
        $(this).parent().addClass("active").siblings().removeClass("active");
        $("html,body").animate({
            scrollTop:$("[data-nav="+$(this).parent("").index()+"]").position().top-HeaderH
        });
    });
    $(".index-side-nav").each(function(){
        $(window).scroll(function(){
            if($(window).scrollTop()+$(window).height()==$(document).height()){
            　　$(".index-side-nav li").eq(4).addClass("active").siblings().removeClass("active");
            }
            else{
                $("[data-nav]").each(function(){
                    if($(window).scrollTop()>=$(this).position().top-HeaderH-1){
                        $(".index-side-nav li").eq($(this).data("nav")).addClass("active").siblings().removeClass("active");
                    }
                });  
            }
        });
    });

    $(".messageToggle").click(function(){
        $(this).parents(".listItem").find(".messageContent").stop().slideToggle().parents(".listItem").toggleClass("active").siblings().removeClass("active").find(".messageContent").stop().slideUp();
    });


    /* ==========================================================================
		[common]
    ==========================================================================*/
    new Swiper ('.recommend-element .swiper-container', {
        loop: false, 
        slidesPerView: 1,
        spaceBetween:25,
        speed:800,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.recommend-element .swiper-button-next',
            prevEl: '.recommend-element .swiper-button-prev',
        },
        breakpoints: {
            768:{
                slidesPerView: 2,
            },
            991:{
                slidesPerView: 3
            },
            1200: {
                slidesPerView: 4
            },
        
        },
    }) 

    $('.selectpicker').selectpicker();
    $('.datepicker').datepicker({
        changeMonth: true,
        changeYear: true,
        dateFormat: 'yy/mm',
        showButtonPanel: true,
        monthNamesShort: ['01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12'],
        closeText: '選擇',
        currentText: '本月',
        onClose: function (dateText, inst) {
            var month = +$("#ui-datepicker-div .ui-datepicker-month :selected").val() + 1;
            var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
            if (month < 10) {
                month = '0' + month;
            }
            this.value = year + '/' + month;
        },
    });
    $(".favoriteToggle").click(function(){
        if(!$(this).hasClass("active")){
            $(this).addClass("active");
            Swal.fire({
                imageUrl: 'styles/images/common/success.png',
                imageWidth: 100,
                imageHeight: 100,
                title: '已加入最愛',
                showConfirmButton: false,
                showCloseButton: true,
                timer: 2000,
            })
        }
        else{
            $(this).removeClass("active");
            Swal.fire({
                imageUrl: 'styles/images/common/alert.png',
                imageWidth: 100,
                imageHeight: 100,
                title: '已移除最愛',
                showConfirmButton: false,
                showCloseButton: true,
                timer: 2000,
            })
        }
    });
    $(".cartAdd").click(function(){
        $(this).addClass("active");
        Swal.fire({
            imageUrl: 'styles/images/common/success.png',
            imageWidth: 100,
            imageHeight: 100,
            title: '已加入購物車',
            showConfirmButton: false,
            showCloseButton: true,
            timer: 2000,
        })
    });

    $(".links-element .toggle").click(function(){
        $(this).next().stop().slideToggle();
    });

    $(".copy-btn").click(function(){
        var TextRange = document.createRange();
        TextRange.selectNode($(this).parent().prev(".website").find("a").get(0));
        let sel = window.getSelection();
        sel.removeAllRanges();
        sel.addRange(TextRange);
        document.execCommand("copy");
    });
    $(".share-element .share-toggle").click(function(){
        $(this).next().stop().slideToggle();
    });

    $(".course-element").each(function(){
        $(".course-element .chapter .toggle").click(function(){
            $(this).parent(".chapter").toggleClass("active").find(".subChapters").stop().slideToggle();
        });
    });
    if ($(window).outerWidth() > 1399) {
        skrollr.init();
    }
    //course
    let url = location.href;
    if (url.indexOf('?') != -1) {
        let modifyOffset=mobileMode?70:90;
        var nav = url.split('?')[1].split('=')[1];
        if(nav=="target"){
            $(window).scrollTop($(".tabs-block").position().top-modifyOffset);
        }
    } 
    $(".tabs-block").each(function(){
        $(window).scroll(function(){
            if($(window).scrollTop()>=$(".tabs-block").position().top-$("header").height()-1){
                $("html").addClass("sticky-tabs");
            }
            else{
                $("html").removeClass("sticky-tabs");
            }
        });
    });
    windowW<1200?$("[data-aos-delay]").removeAttr("data-aos-delay"):"";
    aosInit();
    /* ==========================================================================
		[resize]
    ==========================================================================*/
    function resize(){
        windowW=$(window).innerWidth();
        mobileMode=windowW<992?true:false;
        if(windowW<1200){  
            if(!$(".about-section").hasClass("mode1200")){
                $(".about-section").addClass("mode1200");
                $(".about-section .cut-slot").append($(".about-section .title").detach());         
                for(let i=0;i<3;i++){
                    $(".about-section .cut-slot").append($(".about-section .content div").eq(0).detach());
                }
            }
        }
        else{
            $(".about-section").removeClass("mode1200");
            $(".about-section .content-block").prepend($(".about-section .title").detach());
            $(".about-section .content").prepend($(".about-section .cut-slot div").detach());
        }
        if(mobileMode && $(".logined-for-PC .logined").length!=0){
            $(".logined-for-mobile").html($(".logined-for-PC .logined").detach());
        }
        else if( !mobileMode && $(".logined-for-mobile .logined").length!==0){
            $(".logined-for-PC").append($(".logined-for-mobile .logined").detach());
        }
        if(!mobileMode){
            $(".course-element .chapter-box .content").height($(".course-element .video-element video").height()-$(".course-element .chapter-box .title").outerHeight());
        }

        $("#projects").each(function(){
            if(!mobileMode){
                uniformHeight($(".plan-box .item .title"));
            }
            let positions=[];
            let modifyOffset=0;
            modifyOffset=mobileMode?$(window).width()<768?126:129:165;
            $(".target").each(function(){
                positions.push($(this).position().top);
            });
            $(".tabs-block button").click(function(){
                $(this).addClass("active").siblings().removeClass("active");
                $(window).scrollTop(positions[$(this).index()]-modifyOffset);
            });
            $(window).scroll(function(){
                for(var i=0;i<3;i++){
                    if($(window).scrollTop()>=positions[i]-modifyOffset-1){
                        $(".tabs-block button").removeClass("active").eq(i).addClass("active");
                    }
                }
            });
            $(".order-nav").click(function(){
                $(window).scrollTop(positions[2]-modifyOffset);
            });
        });

    }
})
function aosInit(){
    AOS.init({
        duration: 500,
        offset: 10,
        mirror: true,
    });
}


